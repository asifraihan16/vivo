<?php

namespace App\Http\Controllers;

use App\HomeSlider;
use Illuminate\Http\Request;

use Image;

class HomeSliderController extends Controller
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
        $data = HomeSlider::all();

        return view('admin.home_sliders.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home_sliders.create');
    }

    public function store(Request $request)
    {

        $rules = [
           'name' => 'required|unique:home_sliders',
           // 'product_image' => 'required|mimes:jpeg,png,jpg|max:100|dimensions:width=200,height=200',
           'img' => 'required|mimes:jpeg,jpg|dimensions:width=1920,height=850|max:250',
        ];

        $customMessages = [
           // 'product_image.required' => 'Please Provide Product Image',
           // 'product_image.mimes' => 'Please Provide Product Image as JPEG, PNG or JPG Format',
           // 'product_image.max' => 'Product Image Max Size 100KB',
           // 'product_image.dimensions' => 'Product Image Dimension(Width : 200px, Height : 200px)',
        ];

        $this->validate($request, $rules, $customMessages);

        if ($request->file('img'))
        {
            $image = $request->file('img');

            $imageName = $request->name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();
            // TODO:
            $path = storage_path('/images');

            $img = Image::make($image->getRealPath());

            $img->resize(function ($constraint) {
                $constraint->aspectRatio();
            })->save($path.'/'.$imageName);

            $image_path = 'images';

            $image_url = $image_path.'/'.$imageName;
        }
        else
        {
            $image_url = '';
        }


        HomeSlider::create([
                          'name' => $request->name,
                          'img' => $image_url,
                          'status' => 1,
                        ]);

        return redirect()->route('home_sliders.index');
        // return Redirect::to("admin/mobile_series");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MobileSeries  $mobileSeries
     * @return \Illuminate\Http\Response
     */
    public function show(HomeSlider $homeSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MobileSeries  $mobileSeries
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeSlider $homeSlider)
    {
        $data = HomeSlider::find($homeSlider);
        // return $data;

        return view('admin.home_sliders.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MobileSeries  $mobileSeries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeSlider $homeSlider)
    {
        $image_url = '';

        $rules = [
        'name' => 'required|unique:home_sliders,name,'.$homeSlider->id,
        'img' => 'mimes:jpeg,jpg|dimensions:width=1920,height=850|max:250',
        // 'description' => 'required',
        // 'brand' => 'required',
        ];

        $customMessages = [
        // 'name.required' => 'Please Provide Name',
        // 'name.unique' => 'Already There Is a Mobile Series With This Name',
        // 'img.mimes' => 'Please Provide Image as JPEG or JPG Format',
        // 'product_image.max' => 'Product Image Max Size 100KB',
        // 'product_image.dimensions' => 'Product Image Dimension(Width : 200px, Height : 200px)',
        // 'description.required' => 'Please Provide Product Description',
        ];

        $this->validate($request, $rules, $customMessages);

        if ($request->file('img') != '')
        {

            $home_sliders = HomeSlider::find($homeSlider->id);

            if($homeSlider->img != '' && $homeSlider->img != null){
                // TODO:

               $image_old = storage_path('').'/'.$homeSlider->img;

               unlink($image_old);
            }

            // return $image_old;

            $image = $request->file('img');

            $imageName = $request->name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();
            // TODO:
            $path = storage_path('/images');

            $img = Image::make($image->getRealPath());

            $img->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->save($path.'/'.$imageName);

            $image_path = 'images';

            $image_url = $image_path.'/'.$imageName;
        }

        if($image_url == '')
        {
            $image_url = $homeSlider->img;
        }

        HomeSlider::where('id', $homeSlider->id)->update([
                'name' => $request->name,
                'img' => $image_url,
              ]);

        return redirect()->route('home_sliders.index')->with('success', $request->name.' Home Slider Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MobileSeries  $mobileSeries
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeSlider $homeSlider)
    {
        //
    }
}
