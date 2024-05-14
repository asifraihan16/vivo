<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ChronicleMagazine;
use App\Services\FileUploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChronicleMagazineController extends Controller
{
    protected $fileUploadService;
    public function __construct(FileUploadService $fileUploadService)
    {
        $this->fileUploadService = $fileUploadService;
    }

    public function index()
    {
        $moments = ChronicleMagazine::query()
            ->latest()
            ->get();
        return view('admin.chronicle_magazine.index', compact('moments'));
    }

    public function create()
    {
        return view('admin.chronicle_magazine.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'string|required',
            'upload_img' => 'image|required',
            'is_active' => 'integer|required|in:1,2',
            'link'=>'required',
            'doc'=> 'file|nullable',
        ]);

        try {
            $image_url = $this->fileUploadService->resizeUpload('upload_img', 900, 450, 'CaptureFuture');
            $validated['image_path'] = $image_url;
            $file_url = $this->fileUploadService->upload('doc', 'chronicle_magazine');
            $validated['file_path'] = $file_url;
            ChronicleMagazine::create($validated);

            session()->flash('success', 'Successfully created moment');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
        }

        return back();
    }
    public function updateStatus(ChronicleMagazine $moment, $status)
    {
        try {
            $moment->is_active = $status;
            $moment->save();

            session()->flash('success', "Updated successfully");
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
        }

        return back();
    }

}
