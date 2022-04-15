<?php

namespace App\Http\Controllers\Photographer;

use App\Http\Controllers\Controller;
use App\MobileSeriesVersion;
use App\Photogallariestags;
use App\PhotoGallery;
use App\Services\FileUploadService;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return view('photographer.photo_galleries.create', compact('mobile_series_versions', 'tags'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'mobile_series_versions_id' => 'required|integer',
            'title' => 'required|string',
            // 'product_image' => 'required|mimes:jpeg,png,jpg|max:100|dimensions:width=200,height=200',
            'img' => 'required|image',
            'tags_id' => 'required|array',
        ]);

        $image_thumb_url = $this->fileUploadService->resizeUpload('img', 650, null, 'photo_galleries', true);
        $image_url = $this->fileUploadService->resizeUpload('img', 1920, null, 'photo_galleries');

        $validated['img'] = $image_url;
        $validated['img_thumbnail'] = $image_thumb_url;
        $validated['status'] = 1;
        $validated['users_id'] = auth()->id();
        $validated['is_photographer_image'] = 1;
        $validated['created_at'] = now();
        $validated['updated_at'] = now();

        $photo_gallery = PhotoGallery::create($validated);

        for ($index = 0; $index < count($request->tags_id); $index++) {
            $photo_galleries_tags = new Photogallariestags();
            $photo_galleries_tags->photo_galleries_id = $photo_gallery->id;
            $photo_galleries_tags->tags_id = $request->tags_id[$index];

            $photo_galleries_tags->save();
        }

        return redirect()->route('photographer.photo_history');
    }

    public function photo_history()
    {
        $photo_galleries = PhotoGallery::query()
            ->with(['tags', 'mobile_series_version:id,name'])
            ->where('users_id', auth()->id())
            ->latest()
            ->paginate(15);

        return view('photographer.photo_history.index', compact('photo_galleries'));
    }
}
