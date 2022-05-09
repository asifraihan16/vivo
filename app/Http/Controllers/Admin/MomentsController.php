<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Moment;
use App\Services\FileUploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MomentsController extends Controller
{
    protected $fileUploadService;
    public function __construct(FileUploadService $fileUploadService)
    {
        $this->fileUploadService = $fileUploadService;
    }

    public function index()
    {
        $moments = Moment::query()
            ->when(request()->image_for_page, function ($query) {
                $query->where('image_for_page', request()->image_for_page);
            })
            ->latest()
            ->get();
        return view('admin.moments.index', compact('moments'));
    }

    public function create()
    {
        return view('admin.moments.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'string|required',
            'upload_img' => 'image|required',
            'image_order' => 'integer|required|min:1',
            'image_span_col' => 'integer|required|min:1',
            'is_active' => 'integer|required|in:1,2',
            'image_for_page' => 'integer|required|in:1,2',
        ]);

        try {
            $image_url = $this->fileUploadService->resizeUpload('upload_img', 900, 450, 'momentOfTheMonth');

            $validated['image_path'] = $image_url;

            Moment::create($validated);

            session()->flash('success', 'Successfully created moment');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
        }

        return back();
    }

    public function destroy(Moment $moment)
    {
        try {
            Storage::disk('s3')->delete($moment->image_path);
            $moment->delete();

            session()->flash('success', "Deleted successfully");
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
        }

        return back();
    }

    public function updateStatus(Moment $moment, $status)
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
