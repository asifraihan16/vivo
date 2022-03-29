<?php

namespace App\Http\Controllers;

use App\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
        // return $request;

        $rules = [
           'title' => 'required',
           'title_detail' => 'required',
           // 'product_image' => 'required|mimes:jpeg,png,jpg|max:100|dimensions:width=200,height=200',
           'img1' => 'mimes:jpeg,jpg|dimensions:width=1920,height=850|max:250',
           'img2' => 'mimes:jpeg,jpg|dimensions:width=1920,height=850|max:250',
           'img3' => 'mimes:jpeg,jpg|dimensions:width=1920,height=850|max:250',
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

        if ($request->file('img1'))
        {
            $image_name = $request->title.'img1';

            // TODO:
            $upload_path = storage_path().'/app/public/campaign/';

            $image_path = 'app/public/campaign/';

            $image = $request->img1;

            $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url1 = $image_path.$imageName;

        }
        else
        {
            $image_url1 = '';
        }

        if ($request->file('img2'))
        {
            $image_name = $request->title.'img2';

            // TODO:
            $upload_path = storage_path().'/app/public/campaign/';

            $image_path = 'app/public/campaign/';

            $image = $request->img2;

            $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url2 = $image_path.$imageName;

        }
        else
        {
            $image_url2 = '';
        }

        if ($request->file('img3'))
        {
            $image_name = $request->title.'img3';

            // TODO:
            $upload_path = storage_path().'/app/public/campaign/';

            $image_path = 'app/public/campaign/';

            $image = $request->img3;

            $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url3 = $image_path.$imageName;

        }
        else
        {
            $image_url3 = '';
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
           'img1' => 'mimes:jpeg,jpg|dimensions:width=1920,height=850|max:250',
           'img2' => 'mimes:jpeg,jpg|dimensions:width=1920,height=850|max:250',
           'img3' => 'mimes:jpeg,jpg|dimensions:width=1920,height=850|max:250',
           'desc' => 'required',
        ];

        $customMessages = [

            'img1.dimensions' => 'Image Dimension(Width : 1920px, Height : 850px)',
            'img2.dimensions' => 'Image Dimension(Width : 1920px, Height : 850px)',
            'img3.dimensions' => 'Image Dimension(Width : 1920px, Height : 850px)',
        ];

        $this->validate($request, $rules, $customMessages);

        if ($request->file('img1') != '')
        {
            // $blog = Campaign::find($blog->id);

            if($campaign->img1 != '' && $campaign->img1 != null){
                // TODO:
               $image_old = storage_path('').'/'.$campaign->img1;

               unlink($image_old);
            }

            $image_name = $request->title.'img1';

            // TODO:
            $upload_path = storage_path().'/app/public/campaign/';

            $image_path = 'app/public/campaign/';

            $image = $request->img1;

            $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url1 = $image_path.$imageName;

        }
        else
        {
            $image_url1 = $campaign->img1;
        }

        if ($request->file('img') != '')
        {
            // $blog = Campaign::find($blog->id);

            if($campaign->img != '' && $campaign->img != null){
                // TODO:
               $image_old = storage_path('').'/'.$campaign->img;

               unlink($image_old);
            }

            $image_name = $request->title.'img2';

            // TODO:
            $upload_path = storage_path().'/app/public/campaign/';

            $image_path = 'app/public/campaign/';

            $image = $request->img2;

            $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url2 = $image_path.$imageName;

        }
        else
        {
            $image_url2 = $campaign->img2;
        }

        if ($request->file('img3') != '')
        {
            // $blog = Campaign::find($blog->id);

            if($campaign->img3 != '' && $campaign->img3 != null){
                // TODO:
               $image_old = storage_path('').'/'.$campaign->img3;

               unlink($image_old);
            }

            $image_name = $request->title.'img3';

            // TODO:
            $upload_path = storage_path().'/app/public/campaign/';

            $image_path = 'app/public/campaign/';

            $image = $request->img3;

            $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url3 = $image_path.$imageName;

        }
        else
        {
            $image_url3 = $campaign->img3;
        }

        Campaign::where('id', $campaign->id)->update([
                'title' => $request->title,
                'title_detail' => $request->title_detail,
                'img1' => $image_url1,
                'img2' => $image_url2,
                'img3' => $image_url3,
                'desc' => $request->desc,
              ]);

        return redirect()->route('campaigns.index')->with('success', $request->name.' Blog Updated Successfully');
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
