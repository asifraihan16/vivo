<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
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
        $data = Tag::all();

        return view('admin.tags.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');
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
           'name' => 'required|unique:tags',
           // 'product_image' => 'required|mimes:jpeg,png,jpg|max:100|dimensions:width=200,height=200',
        ];

        $customMessages = [
           // 'product_image.required' => 'Please Provide Product Image',
           // 'product_image.mimes' => 'Please Provide Product Image as JPEG, PNG or JPG Format',
           // 'product_image.max' => 'Product Image Max Size 100KB',
           // 'product_image.dimensions' => 'Product Image Dimension(Width : 200px, Height : 200px)',
        ];

        $this->validate($request, $rules, $customMessages);

        Tag::create([
                        'name' => $request->name,
                        'status' => 1,
                    ]);

        return redirect()->route('tags.index')->with('success', $request->name.'Tags Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        $data = Tag::find($tag);
        // return $data;

        return view('admin.tags.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $rules = [
        'name' => 'required|unique:tags,name,'.$tag->id,
        // 'img' => 'mimes:jpeg,jpg',
        // 'description' => 'required',
        // 'brand' => 'required',
        ];

        $customMessages = [
        ];

        $this->validate($request, $rules, $customMessages);

        Tag::where('id', $tag->id)->update([
                'name' => $request->name,
              ]);

        return redirect()->route('tags.index')->with('success', $request->name.' Tag Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        //
    }

    public function statusUpdate($id)
    {
        $tags = Tag::find($id);

        if($tags->status == 1)
        {
            Tag::where('id', $tags->id)->update([
                          'status' => 0,
                        ]);
        }
        else
        {
            Tag::where('id', $tags->id)->update([
                          'status' => 1,
                        ]);
        }

        return redirect()->route('tags.index');
    }

}
