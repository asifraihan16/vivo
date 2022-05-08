<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Services\FileUploadService;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    protected $fileUploadService;

    public function __construct(FileUploadService $fileUploadService)
    {
        $this->middleware('auth');
        $this->fileUploadService = $fileUploadService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Campaign::all();

        // return $data;

        return view('admin.campaigns.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.campaigns.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'title_detail' => 'required',
            // 'product_image' => 'required|mimes:jpeg,png,jpg|max:100|dimensions:width=200,height=200',
            'img1' => 'dimensions:width=1920,height=850',
            'img2' => 'dimensions:width=1920,height=850',
            'img3' => 'dimensions:width=1920,height=850',
            'desc' => 'required',
        ];

        $customMessages = [
            // 'product_image.required' => 'Please Provide Product Image',
            // 'product_image.mimes' => 'Please Provide Product Image as JPEG, PNG or JPG Format',
            // 'product_image.max' => 'Product Image Max Size 100KB',
            'img1.dimensions' => 'Image Dimension(Width : 1920px, Height : 850px)',
            'img2.dimensions' => 'Image Dimension(Width : 1920px, Height : 850px)',
            'img3.dimensions' => 'Image Dimension(Width : 1920px, Height : 850px)',
        ];

        $this->validate($request, $rules, $customMessages);

        $image_url1 = '';
        $image_url2 = '';
        $image_url3 = '';

        if ($request->file('img1')) {
            $image_url1 = $this->fileUploadService->upload('img1', 'campaign');
        }

        if ($request->file('img2')) {
            $image_url2 = $this->fileUploadService->upload('img2', 'campaign');
        }

        if ($request->file('img3')) {
            $image_url3 = $this->fileUploadService->upload('img3', 'campaign');
        }

        Campaign::create([
            'title' => $request->title,
            'title_detail' => $request->title_detail,
            'img1' => $image_url1,
            'img2' => $image_url2,
            'img3' => $image_url3,
            'desc' => $request->desc,
        ]);

        return redirect()->route('campaigns.index');
        // return Redirect::to("admin/mobile_series");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        $data = Campaign::find($campaign);
        // return $data;

        return view('admin.campaigns.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
    {
        $rules = [
            'title' => 'required',
            'title_detail' => 'required',
            // 'product_image' => 'required|mimes:jpeg,png,jpg|max:100|dimensions:width=200,height=200',
            'img1' => 'dimensions:width=1920,height=850',
            'img2' => 'dimensions:width=1920,height=850',
            'img3' => 'dimensions:width=1920,height=850',
            'desc' => 'required',
        ];

        $customMessages = [

            'img1.dimensions' => 'Image Dimension(Width : 1920px, Height : 850px)',
            'img2.dimensions' => 'Image Dimension(Width : 1920px, Height : 850px)',
            'img3.dimensions' => 'Image Dimension(Width : 1920px, Height : 850px)',
        ];

        $this->validate($request, $rules, $customMessages);

        $image_url1 = $campaign->img1;
        $image_url2 = $campaign->img2;
        $image_url3 = $campaign->img3;


        if ($request->file('img1') != '') {
            if ($campaign->img1 != '' && $campaign->img1 != null) { // delete existing image
                // $image_old = storage_path('') . '/' . $campaign->img1;
                // unlink($image_old);
            }
            $image_url1 = $this->fileUploadService->upload('img1', 'campaign');
        }

        if ($request->file('img') != '') {
            if ($campaign->img != '' && $campaign->img != null) {
                // $image_old = storage_path('') . '/' . $campaign->img;
                // unlink($image_old);
            }
            $image_url2 = $this->fileUploadService->upload('img2', 'campaign');
        }

        if ($request->file('img3') != '') {
            if ($campaign->img3 != '' && $campaign->img3 != null) {
                // $image_old = storage_path('') . '/' . $campaign->img3;
                // unlink($image_old);
            }
            $image_url3 = $this->fileUploadService->upload('img3', 'campaign');
        }

        Campaign::where('id', $campaign->id)->update([
            'title' => $request->title,
            'title_detail' => $request->title_detail,
            'img1' => $image_url1,
            'img2' => $image_url2,
            'img3' => $image_url3,
            'desc' => $request->desc,
        ]);

        return redirect()->route('campaigns.index')->with('success', $request->name . ' Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        //
    }
}
