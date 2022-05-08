<?php

namespace App\Http\Controllers;

use App\Photographer;
use App\MobileSeries;
use App\MobileSeriesVersion;
use Illuminate\Http\Request;

class PhotographerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Photographer::all();

        return view('admin.photographers.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photographers.create');
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
            'mobile_series_id' => 'required',
            'mobile_series_versions_id1' => 'required',
            'img1' => 'dimensions:width=602,height=602',
            'mobile_series_versions_id2' => 'required',
            'img2' => 'dimensions:width=586,height=825',
            'mobile_series_versions_id3' => 'required',
            'img3' => 'dimensions:width=602,height=602',
            'mobile_series_versions_id4' => 'required',
            'img4' => 'dimensions:width=602,height=602',
            'mobile_series_versions_id5' => 'required',
            'img5' => 'dimensions:width=602,height=602',
            'mobile_series_versions_id6' => 'required',
            'img6' => 'dimensions:width=602,height=602',
            'mobile_series_versions_id7' => 'required',
            'img7' => 'dimensions:width=602,height=602',
            'mobile_series_versions_id8' => 'required',
            'img8' => 'dimensions:width=602,height=602',
            'mobile_series_versions_id9' => 'required',
            'img9' => 'dimensions:width=602,height=602',
        ];

        $customMessages = [
            'img1.dimensions' => 'Image Dimension(Width : 602px, Height : 602px)',
            'img2.dimensions' => 'Image Dimension(Width : 586px, Height : 825px)',
            'img3.dimensions' => 'Image Dimension(Width : 602px, Height : 602px)',
            'img4.dimensions' => 'Image Dimension(Width : 602px, Height : 602px)',
            'img5.dimensions' => 'Image Dimension(Width : 602px, Height : 602px)',
            'img6.dimensions' => 'Image Dimension(Width : 602px, Height : 602px)',
            'img7.dimensions' => 'Image Dimension(Width : 602px, Height : 602px)',
            'img8.dimensions' => 'Image Dimension(Width : 602px, Height : 602px)',
        ];

        $this->validate($request, $rules, $customMessages);

        if ($request->file('img1')) {

            $image_name = $request->title1;

            $upload_path = storage_path() . '/app/public/photographer/';

            $image_path = 'app/public/photographer/';

            $image = $request->img1;

            $imageName = $image_name . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url1 = $image_path . $imageName;
        }

        if ($request->file('img2')) {

            $image_name = $request->title2;

            $upload_path = storage_path() . '/app/public/photographer/';

            $image_path = 'app/public/photographer/';

            $image = $request->img2;

            $imageName = $image_name . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url2 = $image_path . $imageName;
        }

        if ($request->file('img3')) {

            $image_name = $request->title3;

            $upload_path = storage_path() . '/app/public/photographer/';

            $image_path = 'app/public/photographer/';

            $image = $request->img3;

            $imageName = $image_name . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url3 = $image_path . $imageName;
        }

        if ($request->file('img4')) {

            $image_name = $request->title4;

            $upload_path = storage_path() . '/app/public/photographer/';

            $image_path = 'app/public/photographer/';

            $image = $request->img4;

            $imageName = $image_name . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url4 = $image_path . $imageName;
        }

        if ($request->file('img5')) {

            $image_name = $request->title25;

            $upload_path = storage_path() . '/app/public/photographer/';

            $image_path = 'app/public/photographer/';

            $image = $request->img5;

            $imageName = $image_name . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url5 = $image_path . $imageName;
        }

        if ($request->file('img6')) {

            $image_name = $request->title6;

            $upload_path = storage_path() . '/app/public/photographer/';

            $image_path = 'app/public/photographer/';

            $image = $request->img6;

            $imageName = $image_name . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url6 = $image_path . $imageName;
        }

        if ($request->file('img7')) {

            $image_name = $request->title7;

            $upload_path = storage_path() . '/app/public/photographer/';

            $image_path = 'app/public/photographer/';

            $image = $request->img7;

            $imageName = $image_name . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url7 = $image_path . $imageName;
        }

        Photographer::create([
            'title1' => $request->title1,
            'img1' => $image_url1,
            'link1' => $request->link1,

            'title2' => $request->title2,
            'img2' => $image_url2,
            'link2' => $request->link2,

            'title3' => $request->title3,
            'img3' => $image_url3,
            'link3' => $request->link3,

            'title4' => $request->title4,
            'img4' => $image_url4,
            'link4' => $request->link4,

            'title5' => $request->title5,
            'img5' => $image_url5,
            'link5' => $request->link5,

            'title6' => $request->title6,
            'img6' => $image_url6,
            'link6' => $request->link6,

            'title7' => $request->title7,
            'img7' => $image_url7,
            'link7' => $request->link7,

            // 'title8' => $request->title8,
            // 'img8' => $image_url8,
            // 'link8' => $request->link8,
        ]);

        return redirect()->route('photographers.index');
        // return Redirect::to("admin/mobile_series");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photographer  $photographer
     * @return \Illuminate\Http\Response
     */
    public function show(Photographer $photographer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photographer  $photographer
     * @return \Illuminate\Http\Response
     */
    public function edit(Photographer $photographer)
    {
        $data = Photographer::find($photographer);
        // return $data;

        return view('admin.photographers.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photographer  $photographer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photographer $photographer)
    {
        $rules = [
            'title1' => 'required',
            'img1' => 'dimensions:width=450,height=450',
            'link1' => 'required',
            'title2' => 'required',
            'img2' => 'dimensions:width=900,height=450',
            'link2' => 'required',
            'title3' => 'required',
            'img3' => 'dimensions:width=450,height=450',
            'link3' => 'required',
            'title4' => 'required',
            'img4' => 'dimensions:width=900,height=900',
            'link4' => 'required',
            'title5' => 'required',
            'img5' => 'dimensions:width=450,height=450',
            'link5' => 'required',
            'title6' => 'required',
            'img6' => 'dimensions:width=450,height=450',
            'link6' => 'required',
            'title7' => 'required',
            'img7' => 'dimensions:width=900,height=450',
            'link7' => 'required',
        ];

        $customMessages = [
            'img1.dimensions' => 'Image Dimension(Width : 450px, Height : 450px)',
            'img2.dimensions' => 'Image Dimension(Width : 900px, Height : 450px)',
            'img3.dimensions' => 'Image Dimension(Width : 450px, Height : 450px)',
            'img4.dimensions' => 'Image Dimension(Width : 900px, Height : 900px)',
            'img5.dimensions' => 'Image Dimension(Width : 450px, Height : 450px)',
            'img6.dimensions' => 'Image Dimension(Width : 450px, Height : 450px)',
            'img7.dimensions' => 'Image Dimension(Width : 900px, Height : 450px)',
        ];

        $this->validate($request, $rules, $customMessages);

        $photographers = Photographer::find($photographer->id);

        if ($request->file('img1') != '') {

            if ($photographers->img1 != '' && $photographers->img1 != null) {

                $image_old = storage_path('') . '/' . $photographers->img1;

                unlink($image_old);
            }

            $image_name = $request->title1;

            $upload_path = storage_path() . '/app/public/photographers/';

            $image_path = 'app/public/photographers/';

            $image = $request->img1;

            $imageName = $image_name . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url1 = $image_path . $imageName;
        } else {
            $image_url1 = $photographers->img1;
        }

        if ($request->file('img2') != '') {

            if ($photographers->img2 != '' && $photographers->img2 != null) {

                $image_old = storage_path('') . '/' . $photographers->img2;

                unlink($image_old);
            }

            $image_name = $request->title2;

            $upload_path = storage_path() . '/app/public/photographers/';

            $image_path = 'app/public/photographers/';

            $image = $request->img2;

            $imageName = $image_name . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url2 = $image_path . $imageName;
        } else {
            $image_url2 = $photographers->img2;
        }

        if ($request->file('img3') != '') {

            if ($photographers->img3 != '' && $photographers->img3 != null) {

                $image_old = storage_path('') . '/' . $photographers->img3;

                unlink($image_old);
            }

            $image_name = $request->title3;

            $upload_path = storage_path() . '/app/public/photographers/';

            $image_path = 'app/public/photographers/';

            $image = $request->img3;

            $imageName = $image_name . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url3 = $image_path . $imageName;
        } else {
            $image_url3 = $photographers->img3;
        }

        if ($request->file('img4') != '') {

            if ($photographers->img4 != '' && $photographers->img4 != null) {

                $image_old = storage_path('') . '/' . $photographers->img4;

                unlink($image_old);
            }

            $image_name = $request->title4;

            $upload_path = storage_path() . '/app/public/photographers/';

            $image_path = 'app/public/photographers/';

            $image = $request->img4;

            $imageName = $image_name . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url4 = $image_path . $imageName;
        } else {
            $image_url4 = $photographers->img4;
        }

        if ($request->file('img5') != '') {

            if ($photographers->img5 != '' && $photographers->img5 != null) {

                $image_old = storage_path('') . '/' . $photographers->img5;

                unlink($image_old);
            }

            $image_name = $request->title25;

            $upload_path = storage_path() . '/app/public/photographers/';

            $image_path = 'app/public/photographers/';

            $image = $request->img5;

            $imageName = $image_name . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url5 = $image_path . $imageName;
        } else {
            $image_url5 = $photographers->img5;
        }

        if ($request->file('img6') != '') {

            if ($photographers->img6 != '' && $photographers->img6 != null) {

                $image_old = storage_path('') . '/' . $photographers->img6;

                unlink($image_old);
            }

            $image_name = $request->title6;

            $upload_path = storage_path() . '/app/public/photographers/';

            $image_path = 'app/public/photographers/';

            $image = $request->img6;

            $imageName = $image_name . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url6 = $image_path . $imageName;
        } else {
            $image_url6 = $photographers->img6;
        }

        if ($request->file('img7') != '') {

            if ($photographers->img7 != '' && $photographers->img7 != null) {

                $image_old = storage_path('') . '/' . $photographers->img7;

                unlink($image_old);
            }

            $image_name = $request->title7;

            $upload_path = storage_path() . '/app/public/photographers/';

            $image_path = 'app/public/photographers/';

            $image = $request->img7;

            $imageName = $image_name . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url7 = $image_path . $imageName;
        } else {
            $image_url7 = $photographers->img7;
        }

        if ($request->file('img8') != '') {

            if ($photographers->img8 != '' && $photographers->img8 != null) {

                $image_old = storage_path('') . '/' . $photographers->img8;

                unlink($image_old);
            }

            $image_name = $request->title7;

            $upload_path = storage_path() . '/app/public/photographers/';

            $image_path = 'app/public/photographers/';

            $image = $request->img8;

            $imageName = $image_name . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url8 = $image_path . $imageName;
        } else {
            $image_url8 = $photographers->img8;
        }

        if ($request->file('img9') != '') {

            if ($photographers->img9 != '' && $photographers->img9 != null) {

                $image_old = storage_path('') . '/' . $photographers->img9;

                unlink($image_old);
            }

            $image_name = $request->title7;

            $upload_path = storage_path() . '/app/public/photographers/';

            $image_path = 'app/public/photographers/';

            $image = $request->img9;

            $imageName = $image_name . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url9 = $image_path . $imageName;
        } else {
            $image_url9 = $photographers->img9;
        }

        Photographer::where('id', $photographers->id)->update([
            'title1' => $request->title1,
            'img1' => $image_url1,
            'link1' => $request->link1,

            'title2' => $request->title2,
            'img2' => $image_url2,
            'link2' => $request->link2,

            'title3' => $request->title3,
            'img3' => $image_url3,
            'link3' => $request->link3,

            'title4' => $request->title4,
            'img4' => $image_url4,
            'link4' => $request->link4,

            'title5' => $request->title5,
            'img5' => $image_url5,
            'link5' => $request->link5,

            'title6' => $request->title6,
            'img6' => $image_url6,
            'link6' => $request->link6,

            'title7' => $request->title7,
            'img7' => $image_url7,
            'link7' => $request->link7,
        ]);

        return redirect()->route('photographers.index')->with('success', $request->name . ' Home Slider Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photographer  $photographer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photographer $photographer)
    {
        //
    }
}
