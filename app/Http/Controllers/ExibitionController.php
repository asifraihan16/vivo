<?php

namespace App\Http\Controllers;

use App\Exibition;
use Illuminate\Http\Request;

class ExibitionController extends Controller
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
        // return 'index';
        $data = Exibition::all();

        return view('admin.exibitions.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.exibitions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return 'store';

        $rules = [
          'img1' => 'mimes:jpeg,jpg|dimensions:width=770,height=475|max:80',
          'img2' => 'mimes:jpeg,jpg|dimensions:width=770,height=475|max:80',
          'img3' => 'mimes:jpeg,jpg|dimensions:width=770,height=475|max:80',
          'img4' => 'mimes:jpeg,jpg|dimensions:width=770,height=475|max:80',
          'img5' => 'mimes:jpeg,jpg|dimensions:width=770,height=475|max:80',
          'img6' => 'mimes:jpeg,jpg|dimensions:width=770,height=475|max:80',
          'img7' => 'mimes:jpeg,jpg|dimensions:width=770,height=475|max:80',
          'img8' => 'mimes:jpeg,jpg|dimensions:width=770,height=475|max:80',
        ];

        $customMessages = [
          'img1.dimensions' => 'Image Dimension(Width : 770px, Height : 475px)',
          'img2.dimensions' => 'Image Dimension(Width : 770px, Height : 475px)',
          'img3.dimensions' => 'Image Dimension(Width : 770px, Height : 475px)',
          'img4.dimensions' => 'Image Dimension(Width : 770px, Height : 475px)',
          'img5.dimensions' => 'Image Dimension(Width : 770px, Height : 475px)',
          'img6.dimensions' => 'Image Dimension(Width : 770px, Height : 475px)',
          'img7.dimensions' => 'Image Dimension(Width : 770px, Height : 475px)',
          'img8.dimensions' => 'Image Dimension(Width : 770px, Height : 475px)',
        ];

        $this->validate($request, $rules, $customMessages);

          if ($request->file('img1')) {

              $image_name = 'img1';

            // TODO:
              $upload_path = storage_path().'/app/public/exibition/';

              $image_path = 'app/public/exibition/';

              $image = $request->img1;

              $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

              $image->move($upload_path, $imageName);

              $image_url1 = $image_path.$imageName;
          }

          if ($request->file('img2')) {

              $image_name = 'img2';

            // TODO:
              $upload_path = storage_path().'/app/public/exibition/';

              $image_path = 'app/public/exibition/';

              $image = $request->img2;

              $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

              $image->move($upload_path, $imageName);

              $image_url2 = $image_path.$imageName;
          }

          if ($request->file('img3')) {

              $image_name = 'img3';

            // TODO:
              $upload_path = storage_path().'/app/public/exibition/';

              $image_path = 'app/public/exibition/';

              $image = $request->img3;

              $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

              $image->move($upload_path, $imageName);

              $image_url3 = $image_path.$imageName;
          }

          if ($request->file('img4')) {

              $image_name = 'img4';

            // TODO:
              $upload_path = storage_path().'/app/public/exibition/';

              $image_path = 'app/public/exibition/';

              $image = $request->img4;

              $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

              $image->move($upload_path, $imageName);

              $image_url4 = $image_path.$imageName;
          }

          if ($request->file('img5')) {

              $image_name = 'img5';

            // TODO:
              $upload_path = storage_path().'/app/public/exibition/';

              $image_path = 'app/public/exibition/';

              $image = $request->img5;

              $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

              $image->move($upload_path, $imageName);

              $image_url5 = $image_path.$imageName;
          }

          if ($request->file('img6')) {

              $image_name = 'img6';

            // TODO:
              $upload_path = storage_path().'/app/public/exibition/';

              $image_path = 'app/public/exibition/';

              $image = $request->img6;

              $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

              $image->move($upload_path, $imageName);

              $image_url6 = $image_path.$imageName;
          }

          if ($request->file('img7')) {

              $image_name = 'img7';

            // TODO:
              $upload_path = storage_path().'/app/public/exibition/';

              $image_path = 'app/public/exibition/';

              $image = $request->img7;

              $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

              $image->move($upload_path, $imageName);

              $image_url7 = $image_path.$imageName;
          }

          if ($request->file('img8')) {

              $image_name = 'img8';

            // TODO:
              $upload_path = storage_path().'/app/public/exibition/';

              $image_path = 'app/public/exibition/';

              $image = $request->img8;

              $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

              $image->move($upload_path, $imageName);

              $image_url8 = $image_path.$imageName;
          }

          Exibition::create([
                            'img1' => $image_url1,
                            'img2' => $image_url2,
                            'img3' => $image_url3,
                            'img4' => $image_url4,
                            'img5' => $image_url5,
                            'img6' => $image_url6,
                            'img7' => $image_url7,
                            'img8' => $image_url8,
                          ]);
          // return 'done';

          return redirect()->route('exibition_upload.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exibition  $exibition
     * @return \Illuminate\Http\Response
     */
    public function show(Exibition $exibition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exibition  $exibition
     * @return \Illuminate\Http\Response
     */
    public function edit(Exibition $exibition)
    {
        $data = Exibition::all();
        // return $data[0]->id;

        return view('admin.exibitions.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exibition  $exibition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $exibition = Exibition::find($id);

        // return $exibition->img8;

        $rules = [
          'img1' => 'mimes:jpeg,jpg|dimensions:width=770,height=475|max:80',
          'img2' => 'mimes:jpeg,jpg|dimensions:width=770,height=475|max:80',
          'img3' => 'mimes:jpeg,jpg|dimensions:width=770,height=475|max:80',
          'img4' => 'mimes:jpeg,jpg|dimensions:width=770,height=475|max:80',
          'img5' => 'mimes:jpeg,jpg|dimensions:width=770,height=475|max:80',
          'img6' => 'mimes:jpeg,jpg|dimensions:width=770,height=475|max:80',
          'img7' => 'mimes:jpeg,jpg|dimensions:width=770,height=475|max:80',
          'img8' => 'mimes:jpeg,jpg|dimensions:width=770,height=475|max:80',
        ];

        $customMessages = [
          'img1.dimensions' => 'Image Dimension(Width : 770px, Height : 475px)',
          'img2.dimensions' => 'Image Dimension(Width : 770px, Height : 475px)',
          'img3.dimensions' => 'Image Dimension(Width : 770px, Height : 475px)',
          'img4.dimensions' => 'Image Dimension(Width : 770px, Height : 475px)',
          'img5.dimensions' => 'Image Dimension(Width : 770px, Height : 475px)',
          'img6.dimensions' => 'Image Dimension(Width : 770px, Height : 475px)',
          'img7.dimensions' => 'Image Dimension(Width : 770px, Height : 475px)',
          'img8.dimensions' => 'Image Dimension(Width : 770px, Height : 475px)',
        ];

        $this->validate($request, $rules, $customMessages);

          if ($request->file('img1') != '')
          {
                if($exibition->img1 != '' && $exibition->img1 != null){
                  // TODO:
                   $image_old = storage_path('').'/'.$exibition->img1;

                   unlink($image_old);
                }

              $image_name = 'img1';

            // TODO:
              $upload_path = storage_path().'/app/public/exibition/';

              $image_path = 'app/public/exibition/';

              $image = $request->img1;

              $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

              $image->move($upload_path, $imageName);

              $image_url1 = $image_path.$imageName;
          }
          else
            {
                $image_url1 = $exibition->img1;
            }

          if ($request->file('img2') != '')
          {
                // $exibition = Exibition::find($id);

                if($exibition->img2 != '' && $exibition->img2 != null){
                  // TODO:
                   $image_old = storage_path('').'/'.$exibition->img2;

                   unlink($image_old);
                }

              $image_name = 'img2';

            // TODO:
              $upload_path = storage_path().'/app/public/exibition/';

              $image_path = 'app/public/exibition/';

              $image = $request->img2;

              $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

              $image->move($upload_path, $imageName);

              $image_url2 = $image_path.$imageName;
          }
          else
            {
                $image_url2 = $exibition->img2;
            }

          if ($request->file('img3') != '')
          {
                if($exibition->img3 != '' && $exibition->img3 != null){
                  // TODO:
                   $image_old = storage_path('').'/'.$exibition->img3;

                   unlink($image_old);
                }

              $image_name = 'img3';

            // TODO:
              $upload_path = storage_path().'/app/public/exibition/';

              $image_path = 'app/public/exibition/';

              $image = $request->img3;

              $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

              $image->move($upload_path, $imageName);

              $image_url3 = $image_path.$imageName;
          }
          else
            {
                $image_url3 = $exibition->img3;
            }

          if ($request->file('img4') != '')
          {
                if($exibition->img4 != '' && $exibition->img4 != null){
                  // TODO:
                   $image_old = storage_path('').'/'.$exibition->img4;

                   unlink($image_old);
                }

              $image_name = 'img4';

            // TODO:
              $upload_path = storage_path().'/app/public/exibition/';

              $image_path = 'app/public/exibition/';

              $image = $request->img4;

              $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

              $image->move($upload_path, $imageName);

              $image_url4 = $image_path.$imageName;
          }
          else
            {
                $image_url4 = $exibition->img4;
            }

          if ($request->file('img5') != '')
          {
                if($exibition->img5 != '' && $exibition->img5 != null){
                  // TODO:
                   $image_old = storage_path('').'/'.$exibition->img5;

                   unlink($image_old);
                }

              $image_name = 'img5';

            // TODO:
              $upload_path = storage_path().'/app/public/exibition/';

              $image_path = 'app/public/exibition/';

              $image = $request->img5;

              $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

              $image->move($upload_path, $imageName);

              $image_url5 = $image_path.$imageName;
          }
          else
            {
                $image_url5 = $exibition->img5;
            }

          if ($request->file('img6') != '')
          {
                if($exibition->img6 != '' && $exibition->img6 != null){
                  // TODO:
                   $image_old = storage_path('').'/'.$exibition->img6;

                   unlink($image_old);
                }

              $image_name = 'img6';

            // TODO:
              $upload_path = storage_path().'/app/public/exibition/';

              $image_path = 'app/public/exibition/';

              $image = $request->img6;

              $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

              $image->move($upload_path, $imageName);

              $image_url6 = $image_path.$imageName;
          }
          else
            {
                $image_url6 = $exibition->img6;
            }

          if ($request->file('img7') != '')
          {
                if($exibition->img7 != '' && $exibition->img7 != null){
                  // TODO:
                   $image_old = storage_path('').'/'.$exibition->img7;

                   unlink($image_old);
                }

              $image_name = 'img7';

            // TODO:
              $upload_path = storage_path().'/app/public/exibition/';

              $image_path = 'app/public/exibition/';

              $image = $request->img7;

              $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

              $image->move($upload_path, $imageName);

              $image_url7 = $image_path.$imageName;
          }
          else
            {
                $image_url7 = $exibition->img7;
            }

         if ($request->file('img8') != '')
          {
                if($exibition->img8 != '' && $exibition->img8 != null){
                  // TODO:
                   $image_old = storage_path('').'/'.$exibition->img8;

                   unlink($image_old);
                }

              $image_name = 'img8';

            // TODO:
              $upload_path = storage_path().'/app/public/exibition/';

              $image_path = 'app/public/exibition/';

              $image = $request->img8;

              $imageName = $image_name.'_'.date('YmdHis').'.'.$image->getClientOriginalExtension();

              $image->move($upload_path, $imageName);

              $image_url8 = $image_path.$imageName;
          }
          else
            {
                $image_url8 = $exibition->img8;
            }

            Exibition::where('id', $id)->update([
                    'img1' => $image_url1,
                    'img2' => $image_url2,
                    'img3' => $image_url3,
                    'img4' => $image_url4,
                    'img5' => $image_url5,
                    'img6' => $image_url6,
                    'img7' => $image_url7,
                    'img8' => $image_url8,
                  ]);

          return redirect()->route('exibition_upload.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exibition  $exibition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exibition $exibition)
    {
        //
    }
}
