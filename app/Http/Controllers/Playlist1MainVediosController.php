<?php

namespace App\Http\Controllers;

use App\playlist1_main_vedios;
use Illuminate\Http\Request;
use Image;

class Playlist1MainVediosController extends Controller
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
        $data = playlist1_main_vedios::all();

        return view('admin.playlist1_main_vedios.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.playlist1_main_vedios.create');
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
           'desc' => 'required',
           'link' => 'required',
           'img' => 'required|mimes:jpeg,jpg|max:150',
        ];

        $customMessages = [
           // 'product_image.required' => 'Please Provide Product Image',
           // 'product_image.mimes' => 'Please Provide Product Image as JPEG, PNG or JPG Format',
           // 'product_image.max' => 'Product Image Max Size 100KB',
           // 'img.dimensions' => 'Image Dimension(Width : 602px, Height : 602px)',
        ];

        $this->validate($request, $rules, $customMessages);

        if ($request->file('img'))
        {
            $image = $request->file('img');

            $imageName = $request->title.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();
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

        playlist1_main_vedios::create([
                        'title' => $request->title,
                        'desc' => $request->desc,
                        'link' => $request->link,
                        'img' => $image_url,
                    ]);

        return redirect()->route('playlist1_main_vedios.index')->with('success', $request->name.'Tags Created Successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\playlist1_main_vedios  $playlist1_main_vedios
     * @return \Illuminate\Http\Response
     */
    public function show(playlist1_main_vedios $playlist1_main_vedios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\playlist1_main_vedios  $playlist1_main_vedios
     * @return \Illuminate\Http\Response
     */
    public function edit(playlist1_main_vedios $playlist1_main_vedios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\playlist1_main_vedios  $playlist1_main_vedios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, playlist1_main_vedios $playlist1_main_vedios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\playlist1_main_vedios  $playlist1_main_vedios
     * @return \Illuminate\Http\Response
     */
    public function destroy(playlist1_main_vedios $playlist1_main_vedios)
    {
        //
    }
}
