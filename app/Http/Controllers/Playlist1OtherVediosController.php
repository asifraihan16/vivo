<?php

namespace App\Http\Controllers;

use App\playlist1_other_vedios;
use App\Services\FileUploadService;
use Illuminate\Http\Request;

class Playlist1OtherVediosController extends Controller
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
        $data = playlist1_other_vedios::all();

        // return $data;

        return view('admin.playlist1_other_vedios.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.playlist1_other_vedios.create');
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
           'link' => 'required',
            'img' => 'required|mimes:jpeg,jpg',
           // 'product_image' => 'required|mimes:jpeg,png,jpg|max:100|dimensions:width=200,height=200',
        ];

        $customMessages = [
           // 'product_image.required' => 'Please Provide Product Image',
           // 'product_image.mimes' => 'Please Provide Product Image as JPEG, PNG or JPG Format',
           // 'product_image.max' => 'Product Image Max Size 100KB',
           // 'product_image.dimensions' => 'Product Image Dimension(Width : 200px, Height : 200px)',
        ];

        $this->validate($request, $rules, $customMessages);

        $image_url = '';

        if ($request->file('img')) {
            $image_url = $this->fileUploadService->upload('img', 'photo_galleries');
        }

        playlist1_other_vedios::create([
                        'link' => $request->link,
                        'img' => $image_url,
                    ]);

        return redirect()->route('playlist1_other_vedios.index')->with('success', $request->name.'Tags Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\playlist1_other_vedios  $playlist1_other_vedios
     * @return \Illuminate\Http\Response
     */
    public function show(playlist1_other_vedios $playlist1_other_vedios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\playlist1_other_vedios  $playlist1_other_vedios
     * @return \Illuminate\Http\Response
     */
    public function edit(playlist1_other_vedios $playlist1_other_vedios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\playlist1_other_vedios  $playlist1_other_vedios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, playlist1_other_vedios $playlist1_other_vedios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\playlist1_other_vedios  $playlist1_other_vedios
     * @return \Illuminate\Http\Response
     */
    public function destroy(playlist1_other_vedios $playlist1_other_vedios)
    {
        //
    }
}
