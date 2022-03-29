<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
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
        $data = Blog::all();

        return view('admin.blogs.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
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
           // 'product_image' => 'required|mimes:jpeg,png,jpg|max:100|dimensions:width=200,height=200',
           'img' => 'required|mimes:jpeg,jpg|max:150',
           'desc' => 'required',
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
            $image_name = $request->title;

            // TODO:
            $upload_path = storage_path().'/app/public/blog/';

            $image_path = 'app/public/blog/';

            $image = $request->img;

            $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url = $image_path.$imageName;

        }
        else
        {
            $image_url = '';
        }


        Blog::create([
                          'title' => $request->title,
                          'img' => $image_url,
                          'desc' => $request->desc,
                        ]);

        return redirect()->route('blogs.index');
        // return Redirect::to("admin/mobile_series");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $data = Blog::find($blog);
        // return $data;

        return view('admin.blogs.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $rules = [
           'title' => 'required',
           // 'product_image' => 'required|mimes:jpeg,png,jpg|max:100|dimensions:width=200,height=200',
           'img' => 'mimes:jpeg,jpg|max:100',
           'desc' => 'required',
        ];

        $customMessages = [
           // 'product_image.required' => 'Please Provide Product Image',
           // 'product_image.mimes' => 'Please Provide Product Image as JPEG, PNG or JPG Format',
           // 'product_image.max' => 'Product Image Max Size 100KB',
           // 'product_image.dimensions' => 'Product Image Dimension(Width : 200px, Height : 200px)',
        ];

        $this->validate($request, $rules, $customMessages);

        if ($request->file('img') != '')
        {
            $blogs = Blog::find($blog->id);

            if($blog->img != '' && $blog->img != null){
                // TODO:
               $image_old = storage_path('').'/'.$blog->img;

               unlink($image_old);
            }

            $image_name = $request->title;

            // TODO:
            $upload_path = storage_path().'/app/public/blog/';

            $image_path = 'app/public/blog/';

            $image = $request->img;

            $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

            $image->move($upload_path, $imageName);

            $image_url = $image_path.$imageName;

        }
        else
        {
            $image_url = $blog->img;
        }

        Blog::where('id', $blog->id)->update([
                'title' => $request->title,
                'img' => $image_url,
                'desc' => $request->desc,
              ]);

        return redirect()->route('blogs.index')->with('success', $request->name.' Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
