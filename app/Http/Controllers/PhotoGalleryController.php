<?php

namespace App\Http\Controllers;

use App\PhotoGallery;
use App\Photogallariestags;
use App\MobileSeriesVersion;
use App\Services\FileUploadService;
use App\Tag;
use Illuminate\Http\Request;

use DB;
use Auth;

class PhotoGalleryController extends Controller
{
    protected $fileUploadService;

    public function __construct(FileUploadService $fileUploadService)
    {
        $this->fileUploadService = $fileUploadService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobile_series_versions = MobileSeriesVersion::all();
        $tags = Tag::all();

        return view('user.photo_galleries.create', compact('mobile_series_versions', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        $rules = [
            'mobile_series_versions_id' => 'required',
            'title' => 'required',
            // 'product_image' => 'required|mimes:jpeg,png,jpg|max:100|dimensions:width=200,height=200',
            'img' => 'required|mimes:jpeg,jpg',
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

        if($request->hasFile('img'))
        {
            $image_url = $this->fileUploadService->upload('img', 'photo_galleries');

            /*
            //get filename with extension
            $filenamewithextension = $request->file('img')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            // $extension = $request->file('img')->getClientOriginalExtension();
            $image = $request->file('img');
            //filename to store
            $filenametostore = $request->name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

            //Upload File
            $request->file('img')->storeAs('photo_galleries', $filenametostore);

            //Compress Image Code Here
            // $filepath = public_path('storage/profile_images/'.$filenametostore);
            $filepath = storage_path('app/public/photo_galleries/'.$filenametostore);
            // return 'ok';

            try {
                \Tinify\setKey(env("TINIFY_API_KEY"));
                $source = \Tinify\fromFile($filepath);
                $source->toFile($filepath);
            } catch(\Tinify\AccountException $e) {
                // Verify your API key and account limit.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            } catch(\Tinify\ClientException $e) {
                // Check your source image and request options.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            } catch(\Tinify\ServerException $e) {
                // Temporary issue with the Tinify API.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            } catch(\Tinify\ConnectionException $e) {
                // A network connection error occurred.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            } catch(Exception $e) {
                // Something else went wrong, unrelated to the Tinify API.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            }

            // return 'ok';

            $image_url = 'app/public/photo_galleries/'.$filenametostore;

            // return redirect('ROUTE_HERE')->with('success', "Image uploaded successfully.");*/
        }

        $photo_galleries = new PhotoGallery;
        $photo_galleries->mobile_series_versions_id = $request->mobile_series_versions_id;
        $photo_galleries->title = $request->title;
        $photo_galleries->img = $image_url;
        $photo_galleries->status = 0;
        $photo_galleries->users_id = Auth::id();
        $photo_galleries->save();

        $photo_galleries_id = $photo_galleries->id;

        for($index = 0; $index < count($request->tags_id); $index++)
        {
            $photo_galleries_tags = new Photogallariestags;
            $photo_galleries_tags->photo_galleries_id = $photo_galleries_id;
            $photo_galleries_tags->tags_id = $request->tags_id[$index];

            $photo_galleries_tags->save();
        }

        // return 'submit';
        return redirect()->route('user.photo_history');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function show(PhotoGallery $photoGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(PhotoGallery $photoGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PhotoGallery $photoGallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhotoGallery $photoGallery)
    {
        //
    }

    public function photo_history()
    {
        // return 'history';

        $photo_galleries = DB::table('photo_galleries')
            ->join('mobile_series_versions','mobile_series_versions.id', '=','photo_galleries.mobile_series_versions_id')
            ->select(
                'photo_galleries.*',
                'mobile_series_versions.name as mobile_series_versions_name',
                )
            ->orderBy('photo_galleries.created_at', 'desc')
            ->get();

        $photo_galleries_tag = DB::table('photo_galleries_tags')
            ->join('tags','tags.id', '=','photo_galleries_tags.tags_id')
            ->select(
                'photo_galleries_tags.*',
                'tags.name as tags_name'
                )
            ->orderBy('photo_galleries_tags.created_at', 'desc')
            ->get();

        // return $photo_galleries_tag;
        return view('user.photo_history.index', compact('photo_galleries', 'photo_galleries_tag'));
    }

    public function pending_request()
    {
        // return 'history';

        $photo_galleries = DB::table('photo_galleries')
            ->join('mobile_series_versions','mobile_series_versions.id', '=','photo_galleries.mobile_series_versions_id')
            ->select(
                'photo_galleries.*',
                'mobile_series_versions.name as mobile_series_versions_name',
                )
            ->orderBy('photo_galleries.created_at', 'desc')
            ->where('photo_galleries.status', '=', 0 )
            ->get();

        $photo_galleries_tag = DB::table('photo_galleries_tags')
            ->join('tags','tags.id', '=','photo_galleries_tags.tags_id')
            ->select(
                'photo_galleries_tags.*',
                'tags.name as tags_name'
                )
            ->orderBy('photo_galleries_tags.created_at', 'desc')
            ->get();

        // return $photo_galleries_tag;
        return view('admin.photo_galleries.pending_request', compact('photo_galleries', 'photo_galleries_tag'));
    }

    public function pending_request_approved($id)
    {
        $photo_galleries = PhotoGallery::find($id);

        PhotoGallery::where('id', $photo_galleries->id)->update([
                      'status' => 1,
                    ]);


        // return redirect()->url('admin/approved_request');
        return redirect()->route('admin.approved_request');
    }

    public function approved_request()
    {
        // return 'approved screen';

        $photo_galleries = DB::table('photo_galleries')
            ->join('mobile_series_versions','mobile_series_versions.id', '=','photo_galleries.mobile_series_versions_id')
            ->select(
                'photo_galleries.*',
                'mobile_series_versions.name as mobile_series_versions_name',
                )
            ->orderBy('photo_galleries.created_at', 'desc')
            ->where('photo_galleries.status', '=', 1)
            ->get();

        $photo_galleries_tag = DB::table('photo_galleries_tags')
            ->join('tags','tags.id', '=','photo_galleries_tags.tags_id')
            ->select(
                'photo_galleries_tags.*',
                'tags.name as tags_name'
                )
            ->orderBy('photo_galleries_tags.created_at', 'desc')
            ->get();

        // return $photo_galleries_tag;
        return view('admin.photo_galleries.approved_request', compact('photo_galleries', 'photo_galleries_tag'));
    }
}
