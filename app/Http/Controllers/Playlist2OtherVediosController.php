<?php

namespace App\Http\Controllers;

use App\playlist2_other_vedios;
use App\Services\FileUploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Playlist2OtherVediosController extends Controller
{
    protected $fileUploadService;
    public function __construct(FileUploadService $fileUploadService)
    {
        $this->middleware('auth');
        $this->fileUploadService = $fileUploadService;
    }

    public function index()
    {
        $data = playlist2_other_vedios::all();

        return view('admin.playlist2_other_vedios.index', compact('data'));
    }

    public function create()
    {
        return view('admin.playlist2_other_vedios.create');
    }

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
            // $image_url = $this->FileUploadService->upload('img', 'photo_galleries');
            $image_url = $this->fileUploadService->resizeUpload('img', 550, 340, 'images');
        }

        playlist2_other_vedios::create([
            'link' => $request->link,
            'img' => $image_url,
        ]);

        return redirect()->route('playlist2_other_vedios.index')->with('success', $request->name . 'Tags Created Successfully');
    }

    public function destroy($id)
    {
        try {
            $data = playlist2_other_vedios::find($id);
            Storage::disk('s3')->delete($data->img);
            $data->delete();
            return back()->withSuccess('Deleted successfully');
        } catch (\Exception $e) {
            return back()->withError($e->getMessage());
        }
    }
}
