<?php

namespace App\Http\Controllers;

use App\PhotoGallery;
use App\Photogallariestags;
use App\MobileSeriesVersion;
use App\Services\FileUploadService;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use DB;
use Auth;

class PhotoGalleryController extends Controller
{
    protected $fileUploadService;

    public function __construct(FileUploadService $fileUploadService)
    {
        $this->fileUploadService = $fileUploadService;
    }

    public function index()
    {
        //
    }

    public function create()
    {
        $mobile_series_versions = MobileSeriesVersion::all();
        $tags = Tag::all();

        return view('user.photo_galleries.create', compact('mobile_series_versions', 'tags'));
    }

    public function store(Request $request)
    {
        $rules = [
            'mobile_series_versions_id' => 'required',
            'title' => 'string|required',
            // 'product_image' => 'required|mimes:jpeg,png,jpg|max:100|dimensions:width=200,height=200',
            'img' => 'required|image',
            'tags_id' => 'required',
        ];

        $customMessages = [
            // 'product_image.required' => 'Please Provide Product Image',
            // 'product_image.mimes' => 'Please Provide Product Image as JPEG, PNG or JPG Format',
            'product_image.max' => 'Product Image Max Size 1024KB',
            // 'product_image.dimensions' => 'Product Image Dimension(Width : 200px, Height : 200px)',
        ];

        $this->validate($request, $rules, $customMessages);

        $image_url = '';
        $image_thumb_url = '';

        if ($request->hasFile('img')) {
            $image_thumb_url = $this->fileUploadService->resizeUpload('img', 650, null, 'photo_galleries', true);
            $image_url = $this->fileUploadService->resizeUpload('img', 1920, null, 'photo_galleries');
        }

        $photo_galleries = new PhotoGallery;
        $photo_galleries->mobile_series_versions_id = $request->mobile_series_versions_id;
        $photo_galleries->title = $request->title;
        $photo_galleries->img = $image_url;
        $photo_galleries->img_thumbnail = $image_thumb_url;
        $photo_galleries->status = 0;
        $photo_galleries->users_id = Auth::id();
        $photo_galleries->save();

        $photo_galleries_id = $photo_galleries->id;

        for ($index = 0; $index < count($request->tags_id); $index++) {
            $photo_galleries_tags = new Photogallariestags;
            $photo_galleries_tags->photo_galleries_id = $photo_galleries_id;
            $photo_galleries_tags->tags_id = $request->tags_id[$index];

            $photo_galleries_tags->save();
        }

        // return response()->json(['success'=>'Successfully uploaded.']);
        return redirect()->route('user.photo_history');
    }

    public function photo_history()
    {
        $photo_galleries = PhotoGallery::query()
            ->with(['tags', 'mobile_series_version:id,name'])
            ->where('users_id', auth()->id())
            ->latest()
            ->paginate(15);

        return view('user.photo_history.index', compact('photo_galleries'));
    }

    public function pending_request()
    {
        $photo_galleries = PhotoGallery::query()
            ->with(['tags', 'mobile_series_version:id,name'])
            ->where('status', 0)
            ->latest()
            ->paginate(15);

        return view('admin.photo_galleries.pending_request', compact('photo_galleries'));
    }

    public function pending_request_approved($id)
    {
        $photo_galleries = PhotoGallery::find($id);

        PhotoGallery::where('id', $photo_galleries->id)->update([
            'status' => 1,
        ]);

        return back();
        // return redirect()->route('admin.approved_request');
    }

    public function update_tags($photo_gallery_id)
    {
        // $mobile_series_versions = MobileSeriesVersion::all();
        $tags = DB::table('tags')->where('status', 1)->get();

        $gallery_photo = PhotoGallery::findOrFail($photo_gallery_id);
        $gallery_photo->load(['mobile_series_version', 'tags']);

        return view('admin.photo_galleries.update', compact('gallery_photo', 'tags'));
    }

    public function update_tags_post(Request $request, $photo_gallery_id)
    {
        $request->validate([
            'tags_id' =>'required|array|min:1'
        ]);

        $photo = PhotoGallery::find($photo_gallery_id);

        try {
            DB::transaction(function () use ($photo) {
                $photo->tags()->detach();

                $tags = request()->tags_id;

                $photo->tags()->attach($tags);
            });
            session()->flash('success', 'Tags updated successfully');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
        }

        return back();
    }

    public function delete_gallery_photo($photo_gallery_id)
    {
        try {
            $photo = PhotoGallery::find($photo_gallery_id);

            Storage::disk('s3')->delete($photo->img);

            DB::transaction(function () use ($photo) {

                $photo->tags()->detach();

                $photo->delete();
            });

            session()->flash('success', 'Successfully deleted');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
        }
        return back();
    }

    public function approved_request()
    {
        $photo_galleries = PhotoGallery::query()
            ->with(['tags', 'mobile_series_version:id,name'])
            ->where('status', 1)
            ->latest()
            ->paginate(15);

        return view('admin.photo_galleries.approved_request', compact('photo_galleries'));
    }
}
