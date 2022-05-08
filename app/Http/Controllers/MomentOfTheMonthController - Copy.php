<?php

namespace App\Http\Controllers;

use App\MomentOfTheMonth;
use App\Services\FileUploadService;
use Illuminate\Http\Request;

use Image;
use File;

class MomentOfTheMonthController extends Controller
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
        $data = MomentOfTheMonth::all();

        return view('admin.moment_of_the_months.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.moment_of_the_months.create');
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
            'title1' => 'required',
            'img1' => 'mimes:jpeg,jpg|dimensions:width=450,height=450',
            'link1' => 'required',
            'title2' => 'required',
            'img2' => 'mimes:jpeg,jpg|dimensions:width=900,height=450',
            'link2' => 'required',
            'title3' => 'required',
            'img3' => 'mimes:jpeg,jpg|dimensions:width=450,height=450',
            'link3' => 'required',
            'title4' => 'required',
            'img4' => 'mimes:jpeg,jpg|dimensions:width=900,height=900',
            'link4' => 'required',
            'title5' => 'required',
            'img5' => 'mimes:jpeg,jpg|dimensions:width=450,height=450',
            'link5' => 'required',
            'title6' => 'required',
            'img6' => 'mimes:jpeg,jpg|dimensions:width=450,height=450',
            'link6' => 'required',
            'title7' => 'required',
            'img7' => 'mimes:jpeg,jpg|dimensions:width=900,height=450',
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

        $image_url1 = '';
        $image_url2 = '';
        $image_url3 = '';
        $image_url4 = '';
        $image_url5 = '';
        $image_url6 = '';
        $image_url7 = '';

        if ($request->file('img1')) {
            $image_url1 = $this->fileUploadService->upload('img1', 'momentOfTheMonth');
        }

        if ($request->file('img2')) {
            $image_url2 = $this->fileUploadService->upload('img2', 'momentOfTheMonth');
        }

        if ($request->file('img3')) {
            $image_url3 = $this->fileUploadService->upload('img3', 'momentOfTheMonth');
        }

        if ($request->file('img4')) {
            $image_url4 = $this->fileUploadService->upload('img4', 'momentOfTheMonth');
        }

        if ($request->file('img5')) {
            $image_url5 = $this->fileUploadService->upload('img5', 'momentOfTheMonth');
        }

        if ($request->file('img6')) {
            $image_url6 = $this->fileUploadService->upload('img6', 'momentOfTheMonth');
        }

        if ($request->file('img7')) {
            $image_url7 = $this->fileUploadService->upload('img7', 'momentOfTheMonth');
        }

        MomentOfTheMonth::create([
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

        return redirect()->route('moment_of_the_months.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MomentOfTheMonth  $momentOfTheMonth
     * @return \Illuminate\Http\Response
     */
    public function show(MomentOfTheMonth $momentOfTheMonth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MomentOfTheMonth  $momentOfTheMonth
     * @return \Illuminate\Http\Response
     */
    public function edit(MomentOfTheMonth $momentOfTheMonth)
    {
        $data = MomentOfTheMonth::find($momentOfTheMonth);
        // return $data;

        return view('admin.moment_of_the_months.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MomentOfTheMonth  $momentOfTheMonth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MomentOfTheMonth $momentOfTheMonth)
    {
        $rules = [
            'title1' => 'required',
            'img1' => 'mimes:jpeg,jpg|dimensions:width=450,height=450',
            'link1' => 'required',
            'title2' => 'required',
            'img2' => 'mimes:jpeg,jpg|dimensions:width=900,height=450',
            'link2' => 'required',
            'title3' => 'required',
            'img3' => 'mimes:jpeg,jpg|dimensions:width=450,height=450',
            'link3' => 'required',
            'title4' => 'required',
            'img4' => 'mimes:jpeg,jpg|dimensions:width=900,height=900',
            'link4' => 'required',
            'title5' => 'required',
            'img5' => 'mimes:jpeg,jpg|dimensions:width=450,height=450',
            'link5' => 'required',
            'title6' => 'required',
            'img6' => 'mimes:jpeg,jpg|dimensions:width=450,height=450',
            'link6' => 'required',
            'title7' => 'required',
            'img7' => 'mimes:jpeg,jpg|dimensions:width=900,height=450',
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

        if ($request->file('img1') != '') {
            $momentOfTheMonth = MomentOfTheMonth::find($momentOfTheMonth->id);
            if ($momentOfTheMonth->img1 != '' && $momentOfTheMonth->img1 != null) {
                // $image_old = storage_path('') . '/' . $momentOfTheMonth->img1;
                // unlink($image_old);
            }
            $image_url1 = $this->fileUploadService->upload('img1', 'momentOfTheMonth');
        } else {
            $image_url1 = $momentOfTheMonth->img1;
        }

        if ($request->file('img2') != '') {
            $momentOfTheMonth = MomentOfTheMonth::find($momentOfTheMonth->id);
            if ($momentOfTheMonth->img2 != '' && $momentOfTheMonth->img2 != null) {
                // $image_old = storage_path('') . '/' . $momentOfTheMonth->img2;
                // unlink($image_old);
            }
            $image_url2 = $this->fileUploadService->upload('img2', 'momentOfTheMonth');
        } else {
            $image_url2 = $momentOfTheMonth->img2;
        }

        if ($request->file('img3') != '') {
            $momentOfTheMonth = MomentOfTheMonth::find($momentOfTheMonth->id);
            if ($momentOfTheMonth->img3 != '' && $momentOfTheMonth->img3 != null) {
                // $image_old = storage_path('') . '/' . $momentOfTheMonth->img3;
                // unlink($image_old);
            }
            $image_url3 = $this->fileUploadService->upload('img3', 'momentOfTheMonth');
        } else {
            $image_url3 = $momentOfTheMonth->img3;
        }

        if ($request->file('img4') != '') {
            $momentOfTheMonth = MomentOfTheMonth::find($momentOfTheMonth->id);
            if ($momentOfTheMonth->img4 != '' && $momentOfTheMonth->img4 != null) {
                // $image_old = storage_path('') . '/' . $momentOfTheMonth->img4;
                // unlink($image_old);
            }
            $image_url4 = $this->fileUploadService->upload('img4', 'momentOfTheMonth');
        } else {
            $image_url4 = $momentOfTheMonth->img4;
        }

        if ($request->file('img5') != '') {
            $momentOfTheMonth = MomentOfTheMonth::find($momentOfTheMonth->id);
            if ($momentOfTheMonth->img5 != '' && $momentOfTheMonth->img5 != null) {
                // $image_old = storage_path('') . '/' . $momentOfTheMonth->img5;
                // unlink($image_old);
            }
            $image_url5 = $this->fileUploadService->upload('img5', 'momentOfTheMonth');
        } else {
            $image_url5 = $momentOfTheMonth->img5;
        }

        if ($request->file('img6') != '') {
            $momentOfTheMonth = MomentOfTheMonth::find($momentOfTheMonth->id);
            if ($momentOfTheMonth->img6 != '' && $momentOfTheMonth->img6 != null) {
                // $image_old = storage_path('') . '/' . $momentOfTheMonth->img6;
                // unlink($image_old);
            }
            $image_url6 = $this->fileUploadService->upload('img6', 'momentOfTheMonth');
        } else {
            $image_url6 = $momentOfTheMonth->img6;
        }

        if ($request->file('img7') != '') {
            $momentOfTheMonth = MomentOfTheMonth::find($momentOfTheMonth->id);
            if ($momentOfTheMonth->img7 != '' && $momentOfTheMonth->img7 != null) {
                // $image_old = storage_path('') . '/' . $momentOfTheMonth->img7;
                // unlink($image_old);
            }
            $image_url7 = $this->fileUploadService->upload('img7', 'momentOfTheMonth');

        } else {
            $image_url7 = $momentOfTheMonth->img7;
        }

        MomentOfTheMonth::where('id', $momentOfTheMonth->id)->update([
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

        return redirect()->route('moment_of_the_months.index')->with('success', $request->name . ' Home Slider Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MomentOfTheMonth  $momentOfTheMonth
     * @return \Illuminate\Http\Response
     */
    public function destroy(MomentOfTheMonth $momentOfTheMonth)
    {
        //
    }
}
