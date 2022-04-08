<?php

namespace App\Http\Controllers;

use App\Exibition;
use App\Services\FileUploadService;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

class ExibitionController extends Controller
{
    protected $fileUploadService;

    public function __construct(FileUploadService $fileUploadService)
    {
        $this->middleware('auth');
        $this->fileUploadService = $fileUploadService;
    }

    public function index()
    {
        $data = Exibition::all();
        return view('admin.exibitions.index', compact('data'));
    }

    public function create()
    {
        return view('admin.exibitions.create');
    }

    public function store(Request $request)
    {
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
            $image_url1 = $this->fileUploadService->upload('img1', 'exibition');
        }

        if ($request->file('img2')) {
            $image_url2 = $this->fileUploadService->upload('img2', 'exibition');
        }

        if ($request->file('img3')) {
            $image_url3 = $this->fileUploadService->upload('img3', 'exibition');
        }

        if ($request->file('img4')) {
            $image_url4 = $this->fileUploadService->upload('img4', 'exibition');
        }

        if ($request->file('img5')) {
            $image_url5 = $this->fileUploadService->upload('img5', 'exibition');
        }

        if ($request->file('img6')) {
            $image_url6 = $this->fileUploadService->upload('img6', 'exibition');
        }

        if ($request->file('img7')) {
            $image_url7 = $this->fileUploadService->upload('img7', 'exibition');
        }

        if ($request->file('img8')) {
            $image_url8 = $this->fileUploadService->upload('img8', 'exibition');
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

        return redirect()->route('exibition_upload.index');
    }

    public function show(Exibition $exibition)
    {
        //
    }

    public function edit(Exibition $exibition)
    {
        $data = Exibition::all();
        return view('admin.exibitions.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $exibition = Exibition::find($id);

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

        $image_url1 = $exibition->img1;
        $image_url2 = $exibition->img2;
        $image_url3 = $exibition->img3;
        $image_url4 = $exibition->img4;
        $image_url5 = $exibition->img5;
        $image_url6 = $exibition->img6;
        $image_url7 = $exibition->img7;
        $image_url8 = $exibition->img8;

        if ($request->file('img1') != '') {
            if ($exibition->img1 != '' && $exibition->img1 != null) {
                // $image_old = storage_path('') . '/' . $exibition->img1;
                // unlink($image_old);
            }
            $image_url1 = $this->fileUploadService->upload('img1', 'exibition');
        }

        if ($request->file('img2') != '') {
            if ($exibition->img2 != '' && $exibition->img2 != null) {
                // $image_old = storage_path('') . '/' . $exibition->img2;
                // unlink($image_old);
            }
            $image_url2 = $this->fileUploadService->upload('img2', 'exibition');
        }

        if ($request->file('img3') != '') {
            if ($exibition->img3 != '' && $exibition->img3 != null) {
                // $image_old = storage_path('') . '/' . $exibition->img3;
                // unlink($image_old);
            }
            $image_url3 = $this->fileUploadService->upload('img3', 'exibition');
        }

        if ($request->file('img4') != '') {
            if ($exibition->img4 != '' && $exibition->img4 != null) {
                // $image_old = storage_path('') . '/' . $exibition->img4;
                // unlink($image_old);
            }
            $image_url4 = $this->fileUploadService->upload('img4', 'exibition');
        }

        if ($request->file('img5') != '') {
            if ($exibition->img5 != '' && $exibition->img5 != null) {
                // $image_old = storage_path('') . '/' . $exibition->img5;
                // unlink($image_old);
            }
            $image_url5 = $this->fileUploadService->upload('img5', 'exibition');
        }

        if ($request->file('img6') != '') {
            if ($exibition->img6 != '' && $exibition->img6 != null) {
                // $image_old = storage_path('') . '/' . $exibition->img6;
                // unlink($image_old);
            }
            $image_url6 = $this->fileUploadService->upload('img6', 'exibition');
        }

        if ($request->file('img7') != '') {
            if ($exibition->img7 != '' && $exibition->img7 != null) {
                // $image_old = storage_path('') . '/' . $exibition->img7;
                // unlink($image_old);
            }
            $image_url7 = $this->fileUploadService->upload('img7', 'exibition');
        }

        if ($request->file('img8') != '') {
            if ($exibition->img8 != '' && $exibition->img8 != null) {
                // $image_old = storage_path('') . '/' . $exibition->img8;
                // unlink($image_old);
            }
            $image_url8 = $this->fileUploadService->upload('img8', 'exibition');
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

    public function destroy(Exibition $exibition)
    {
        //
    }
}
