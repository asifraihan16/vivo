<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\CaptureFuture;
use App\CaptureComment;
use App\Services\FileUploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CaptureFutureController extends Controller
{
    protected $fileUploadService;
    public function __construct(FileUploadService $fileUploadService)
    {
        $this->fileUploadService = $fileUploadService;
    }

    public function index()
    {
        $moments = CaptureFuture::query()
            ->when(request()->image_for_page, function ($query) {
                $query->where('image_for_page', request()->image_for_page);
            })
            ->latest()
            ->get();
        return view('admin.capture_the_future.index', compact('moments'));
    }

    public function create()
    {
        return view('admin.capture_the_future.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'string|required',
            'upload_img' => 'image|required',
            'image_order' => 'integer|required|min:1',
            'image_span_col' => 'integer|required|min:1',
            'is_active' => 'integer|required|in:1,2',
        ]);

        try {
            $image_url = $this->fileUploadService->resizeUpload('upload_img', 900, 450, 'CaptureFuture');

            $validated['image_path'] = $image_url;
            $validated['year'] = date('Y');

            CaptureFuture::create($validated);

            session()->flash('success', 'Successfully created moment');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
        }

        return back();
    }

    public function destroy($id)
    {
      
        $moment = CaptureFuture::find($id);
        try {
            Storage::disk('s3')->delete($moment->image_path);
            $moment->delete();

            session()->flash('success', "Deleted successfully");
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
        }

        return back();
    }

    public function updateStatus(CaptureFuture $moment, $status)
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

    public function comment_list()
    {
        $moments = CaptureComment::with('comment_by','capture_future')->where('parent_comment_id',null)
        ->get();
        return view('admin.capture_the_future.comment_list', compact('moments'));
    }

    public function comment_reply_list($id)
    {
        $moments = CaptureComment::with('comment_by','capture_future')->where('parent_comment_id',$id)
        ->get();
        return view('admin.capture_the_future.comment_list_reply', compact('moments'));
    }

    public function comment_delete($id)
    {
        CaptureComment::where('parent_comment_id',$id)->delete();
        CaptureComment::where('id',$id)->delete();

        session()->flash('success', 'Successfully Delete Comment');
        return back();

    }
}
