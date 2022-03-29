<?php

namespace App\Http\Controllers;

use App\MobileSeries;
use App\MobileSeriesVersion;
use Illuminate\Http\Request;

use DB;
use Image;
use File;

class MobileSeriesVersionController extends Controller
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
        $data = DB::table('mobile_series_versions')
            ->join('mobile_series','mobile_series.id', '=','mobile_series_versions.mobile_series_id')
            ->select(
                    'mobile_series_versions.*',
                    'mobile_series.name as mobile_series_name',
                  )
            ->get();

        return view('admin.mobile_series_versions.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobile_series = MobileSeries::all();

        return view('admin.mobile_series_versions.create', compact('mobile_series'));
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
            'name' => 'required|unique:mobile_series',
            // 'product_image' => 'required|mimes:jpeg,png,jpg|max:100|dimensions:width=200,height=200',
            // 'img' => 'required|mimes:jpeg,jpg|dimensions:width=602,height=602|max:50',
        ];

        $customMessages = [
           // 'product_image.required' => 'Please Provide Product Image',
           // 'product_image.mimes' => 'Please Provide Product Image as JPEG, PNG or JPG Format',
           // 'product_image.max' => 'Product Image Max Size 100KB',
           // 'product_image.dimensions' => 'Product Image Dimension(Width : 200px, Height : 200px)',
        ];

        $this->validate($request, $rules, $customMessages);

        if($request->hasFile('img'))
        {
            //get filename with extension
            $filenamewithextension = $request->file('img')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            // $extension = $request->file('img')->getClientOriginalExtension();
            $image = $request->file('img');
            //filename to store
            $filenametostore = $request->name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

            // TODO:
            //Upload File
            $request->file('img')->storeAs('public/profile_images', $filenametostore);


            //Compress Image Code Here
            // $filepath = public_path('storage/profile_images/'.$filenametostore);
            $filepath = storage_path('app/public/profile_images/'.$filenametostore);
            // return 'ok';

            try {
                \Tinify\setKey(env("TINIFY_API_KEY"));
                $source = \Tinify\fromFile($filepath);
                $source->toFile($filepath);
            } catch(\Tinify\AccountException $e) {
                // Verify your API key and account limit.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            } catch(\Tinify\ClientException $e) {
                // Check your source image and request options.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            } catch(\Tinify\ServerException $e) {
                // Temporary issue with the Tinify API.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            } catch(\Tinify\ConnectionException $e) {
                // A network connection error occurred.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            } catch(Exception $e) {
                // Something else went wrong, unrelated to the Tinify API.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            }

            // return 'ok';

            $image_url = 'app/public/profile_images/'.$filenametostore;

            // return redirect('ROUTE_HERE')->with('success', "Image uploaded successfully.");
        }
        else
        {
            $image_url = '';
        }

        MobileSeriesVersion::create([
                          'mobile_series_id' => $request->mobile_series_id,
                          'name' => $request->name,
                          'img' => $image_url,
                          'status' => 1,
                        ]);

        return redirect()->route('mobile_series_versions.index');
        // return Redirect::to("admin/mobile_series");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MobileSeriesVersion  $mobileSeriesVersion
     * @return \Illuminate\Http\Response
     */
    public function show(MobileSeriesVersion $mobileSeriesVersion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MobileSeriesVersion  $mobileSeriesVersion
     * @return \Illuminate\Http\Response
     */
    public function edit(MobileSeriesVersion $mobileSeriesVersion)
    {
        $data = MobileSeriesVersion::find($mobileSeriesVersion);
        $mobile_series = MobileSeries::all();
        // return $mobile_series_versions[0];

        return view('admin.mobile_series_versions.edit', compact('data', 'mobile_series'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MobileSeriesVersion  $mobileSeriesVersion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MobileSeriesVersion $mobileSeriesVersion)
    {
        $rules = [
            // 'mobile_series_id' => 'required',
            'name' => 'required|unique:mobile_series_versions,name,'.$mobileSeriesVersion->id,
            // 'product_image' => 'required|mimes:jpeg,png,jpg|max:100|dimensions:width=200,height=200',
            'img' => 'mimes:jpeg,jpg|dimensions:width=602,height=602|max:50',
        ];

        $customMessages = [
           // 'product_image.required' => 'Please Provide Product Image',
           // 'product_image.mimes' => 'Please Provide Product Image as JPEG, PNG or JPG Format',
           // 'product_image.max' => 'Product Image Max Size 100KB',
           // 'product_image.dimensions' => 'Product Image Dimension(Width : 200px, Height : 200px)',
        ];

        $this->validate($request, $rules, $customMessages);
        // return $request;

        if ($request->file('img') != '')
        {
            $filenamewithextension = $request->file('img')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            // $extension = $request->file('img')->getClientOriginalExtension();
            $image = $request->file('img');
            //filename to store
            $filenametostore = $request->name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

            // TODO:
            //Upload File
            $request->file('img')->storeAs('public/profile_images', $filenametostore);


            //Compress Image Code Here
            // $filepath = public_path('storage/profile_images/'.$filenametostore);
            $filepath = storage_path('app/public/profile_images/'.$filenametostore);
            // return 'ok';

            try {
                \Tinify\setKey(env("TINIFY_API_KEY"));
                $source = \Tinify\fromFile($filepath);
                $source->toFile($filepath);
            } catch(\Tinify\AccountException $e) {
                // Verify your API key and account limit.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            } catch(\Tinify\ClientException $e) {
                // Check your source image and request options.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            } catch(\Tinify\ServerException $e) {
                // Temporary issue with the Tinify API.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            } catch(\Tinify\ConnectionException $e) {
                // A network connection error occurred.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            } catch(Exception $e) {
                // Something else went wrong, unrelated to the Tinify API.
                return redirect('ROUTE_HERE')->with('error', $e->getMessage());
            }

            // return 'ok';

            $image_url = 'app/public/profile_images/'.$filenametostore;
        }
        else
        {
            $image_url = $mobileSeriesVersion->img;
        }

        MobileSeriesVersion::where('id', $mobileSeriesVersion->id)->update([
                'mobile_series_id' => $request->mobile_series_id,
                'name' => $request->name,
                'img' => $image_url,
              ]);

        return redirect()->route('mobile_series_versions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MobileSeriesVersion  $mobileSeriesVersion
     * @return \Illuminate\Http\Response
     */
    public function destroy(MobileSeriesVersion $mobileSeriesVersion)
    {
        //
    }

    public function statusUpdate($id)
    {
        $mobile_series_versions = MobileSeriesVersion::find($id);

        if($mobile_series_versions->status == 1)
        {
            MobileSeriesVersion::where('id', $mobile_series_versions->id)->update([
                          'status' => 0,
                        ]);
        }
        else
        {
            MobileSeriesVersion::where('id', $mobile_series_versions->id)->update([
                          'status' => 1,
                        ]);
        }

        return redirect()->route('mobile_series_versions.index');
    }
}
