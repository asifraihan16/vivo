<?php

namespace App\Http\Controllers;

use App\MobileSeries;
use App\Services\FileUploadService;
use Illuminate\Http\Request;

use Image;
use File;

class MobileSeriesController extends Controller
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
        $data = MobileSeries::all();

        return view('admin.mobile_series.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mobile_series.create');
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
            'name' => 'required|unique:mobile_series',
            // 'product_image' => 'required|mimes:jpeg,png,jpg|max:100|dimensions:width=200,height=200',
            'img' => 'required|mimes:jpeg,jpg|dimensions:width=602,height=602',
        ];

        $customMessages = [
            // 'product_image.required' => 'Please Provide Product Image',
            // 'product_image.mimes' => 'Please Provide Product Image as JPEG, PNG or JPG Format',
            // 'product_image.max' => 'Product Image Max Size 100KB',
            'img.dimensions' => 'Image Dimension(Width : 602px, Height : 602px)',
        ];

        $this->validate($request, $rules, $customMessages);

        $image_url = null;


        if ($request->hasFile('img')) {
            $image_url = $this->fileUploadService->upload('img', 'profile_images');

            //get filename with extension
            /* $filenamewithextension = $request->file('img')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            // $extension = $request->file('img')->getClientOriginalExtension();
            $image = $request->file('img');
            //filename to store
            // $filenametostore = $filename.'_'.time().'.'.$extension;
            $filenametostore = $request->name . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            //Upload File
            $request->file('img')->storeAs('public/profile_images', $filenametostore);


            //Compress Image Code Here
            // $filepath = public_path('storage/profile_images/'.$filenametostore);
            $filepath = storage_path('app/public/profile_images/' . $filenametostore);
            // return 'ok';

            try {
                \Tinify\setKey(env("TINIFY_API_KEY"));
                $source = \Tinify\fromFile($filepath);
                $source->toFile($filepath);
            } catch (\Tinify\AccountException $e) {
                // Verify your API key and account limit.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            } catch (\Tinify\ClientException $e) {
                // Check your source image and request options.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            } catch (\Tinify\ServerException $e) {
                // Temporary issue with the Tinify API.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            } catch (\Tinify\ConnectionException $e) {
                // A network connection error occurred.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            } catch (Exception $e) {
                // Something else went wrong, unrelated to the Tinify API.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            }

            $image_url = 'app/public/profile_images/' . $filenametostore; */

            // return redirect('ROUTE_HERE')->with('success', "Image uploaded successfully.");
        }

        MobileSeries::create([
            'name' => $request->name,
            'img' => $image_url,
            'status' => 1,
        ]);

        return redirect()->route('mobile-series.index')->with('success', $request->name . 'Mobile Series Created Successfully');
    }

    public function _store(Request $request)
    {

        $rules = [
            'name' => 'required|unique:mobile_series',
            // 'product_image' => 'required|mimes:jpeg,png,jpg|max:100|dimensions:width=200,height=200',
            'img' => 'required|mimes:jpeg,jpg|max:2048',
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
            $image_url = $this->fileUploadService->upload('img', 'images');

            /* $image = $request->file('img');
            $imageName = $request->name . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $path = storage_path('/images');

            $img = Image::make($image->getRealPath());
            $img->resize(function ($constraint) {
                $constraint->aspectRatio();
            })->save($path . '/' . $imageName);
            $image_path = 'images';
            $image_url = $image_path . '/' . $imageName; */
        }


        MobileSeries::create([
            'name' => $request->name,
            'img' => $image_url,
            'status' => 1,
        ]);

        return redirect()->route('mobile-series.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MobileSeries  $mobileSeries
     * @return \Illuminate\Http\Response
     */
    public function show(MobileSeries $mobileSeries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MobileSeries  $mobileSeries
     * @return \Illuminate\Http\Response
     */
    public function edit(MobileSeries $mobileSeries)
    {
        $data = MobileSeries::find($mobileSeries);
        // return $data;

        return view('admin.mobile_series.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MobileSeries  $mobileSeries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MobileSeries $mobileSeries)
    {
        $image_url = '';

        $rules = [
            'name' => 'required|unique:mobile_series,name,' . $mobileSeries->id,
            'img' => 'mimes:jpeg,jpg|dimensions:width=602,height=602',
            // 'description' => 'required',
            // 'brand' => 'required',
        ];

        $customMessages = [];

        $this->validate($request, $rules, $customMessages);

        if ($request->file('img') != '') {
            $mobile_series = MobileSeries::find($mobileSeries->id);

            if ($mobileSeries->img != '' && $mobileSeries->img != null) {
                // $image_old = storage_path('') . '/' . $mobileSeries->img;
                // unlink($image_old);
            }
            $image_url = $this->fileUploadService->upload('img', 'profile_images');

            //get filename with extension
            /* $filenamewithextension = $request->file('img')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            // $extension = $request->file('img')->getClientOriginalExtension();
            $image = $request->file('img');
            //filename to store
            // $filenametostore = $filename.'_'.time().'.'.$extension;
            $filenametostore = $request->name . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            //Upload File
            $request->file('img')->storeAs('public/profile_images', $filenametostore);


            //Compress Image Code Here
            // $filepath = public_path('storage/profile_images/'.$filenametostore);
            $filepath = storage_path('app/public/profile_images/' . $filenametostore);
            // return 'ok';

            try {
                \Tinify\setKey(env("TINIFY_API_KEY"));
                $source = \Tinify\fromFile($filepath);
                $source->toFile($filepath);
            } catch (\Tinify\AccountException $e) {
                // Verify your API key and account limit.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            } catch (\Tinify\ClientException $e) {
                // Check your source image and request options.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            } catch (\Tinify\ServerException $e) {
                // Temporary issue with the Tinify API.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            } catch (\Tinify\ConnectionException $e) {
                // A network connection error occurred.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            } catch (Exception $e) {
                // Something else went wrong, unrelated to the Tinify API.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            }
            // return 'ok';

            $image_url = 'app/public/profile_images/' . $filenametostore; */
        }

        if ($image_url == '') {
            $image_url = $mobileSeries->img;
        }

        MobileSeries::where('id', $mobileSeries->id)->update([
            'name' => $request->name,
            'img' => $image_url,
        ]);

        return redirect()->route('mobile-series.index')->with('success', $request->name . ' Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MobileSeries  $mobileSeries
     * @return \Illuminate\Http\Response
     */
    public function destroy(MobileSeries $mobileSeries)
    {
        //
    }

    public function statusUpdate($id)
    {
        $mobile_series = MobileSeries::find($id);

        if ($mobile_series->status == 1) {
            MobileSeries::where('id', $mobile_series->id)->update([
                'status' => 0,
            ]);
        } else {
            MobileSeries::where('id', $mobile_series->id)->update([
                'status' => 1,
            ]);
        }

        return redirect()->route('mobile-series.index');
    }
}
