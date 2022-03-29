<?php

namespace App\Http\Controllers;

use App\playlist2_main_vedios;
use Illuminate\Http\Request;

class Playlist2MainVediosController extends Controller
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
        $data = playlist2_main_vedios::all();

        return view('admin.playlist2_main_vedios.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.playlist2_main_vedios.create');
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
           'desc' => 'required',
           'link' => 'required',
           // 'product_image' => 'required|mimes:jpeg,png,jpg|max:100|dimensions:width=200,height=200',
        ];

        $customMessages = [
           // 'product_image.required' => 'Please Provide Product Image',
           // 'product_image.mimes' => 'Please Provide Product Image as JPEG, PNG or JPG Format',
           // 'product_image.max' => 'Product Image Max Size 100KB',
           // 'product_image.dimensions' => 'Product Image Dimension(Width : 200px, Height : 200px)',
        ];

        $this->validate($request, $rules, $customMessages);

        playlist2_main_vedios::create([
                        'title' => $request->title,
                        'desc' => $request->desc,
                        'link' => $request->link,
                    ]);

        return redirect()->route('playlist2_main_vedios.index')->with('success', $request->name.'Tags Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\playlist2_main_vedios  $playlist2_main_vedios
     * @return \Illuminate\Http\Response
     */
    public function show(playlist2_main_vedios $playlist2_main_vedios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\playlist2_main_vedios  $playlist2_main_vedios
     * @return \Illuminate\Http\Response
     */
    public function edit(playlist2_main_vedios $playlist2_main_vedios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\playlist2_main_vedios  $playlist2_main_vedios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, playlist2_main_vedios $playlist2_main_vedios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\playlist2_main_vedios  $playlist2_main_vedios
     * @return \Illuminate\Http\Response
     */
    public function destroy(playlist2_main_vedios $playlist2_main_vedios)
    {
        //
    }
}
