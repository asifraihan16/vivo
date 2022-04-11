<?php

namespace App\Http\Controllers;

use App\playlist2_main_vedios;
use App\Services\FileUploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Playlist2MainVediosController extends Controller
{
    protected $fileUploadService;
    public function __construct(FileUploadService $fileUploadService)
    {
        $this->middleware('auth');
        $this->fileUploadService = $fileUploadService;
    }

    public function index()
    {
        $data = playlist2_main_vedios::all();
        return view('admin.playlist2_main_vedios.index', compact('data'));
    }

    public function create()
    {
        return view('admin.playlist2_main_vedios.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            // 'desc' => 'required',
            'link' => 'required',
            // 'img' => 'required|mimes:jpeg,jpg',
        ];

        $customMessages = [
            // 'product_image.required' => 'Please Provide Product Image',
            // 'product_image.mimes' => 'Please Provide Product Image as JPEG, PNG or JPG Format',
            // 'product_image.max' => 'Product Image Max Size 100KB',
            // 'img.dimensions' => 'Image Dimension(Width : 602px, Height : 602px)',
        ];

        $this->validate($request, $rules, $customMessages);

        $image_url = '';

        if ($request->file('img')) {
            $image_url = $this->fileUploadService->resizeUpload('img', 550, 340, 'images');
        }

        playlist2_main_vedios::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'link' => $request->link,
            'img' => $image_url,
        ]);

        return redirect()->route('playlist2_main_vedios.index')->with('success', $request->name . 'Tags Created Successfully');
    }

    public function destroy($id)
    {
        try {
            $data = playlist2_main_vedios::find($id);
            Storage::disk('s3')->delete($data->img);
            $data->delete();
            return back()->withSuccess('Deleted successfully');
        } catch (\Exception $e) {
            return back()->withError($e->getMessage());
        }
    }
}
