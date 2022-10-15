<?php

namespace App\Http\Controllers\Admin;

use App\Faq;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function index()
    {
        $faqs = Faq::query()
            ->orderBy('question_order', 'asc')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.faqs.index', compact('faqs'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'string|required',
            'answer' => 'string|required',
            'is_active' => 'integer|required|in:1,2',
            'question_order' => 'integer|required|min:1',
        ]);

        try {
            Faq::create($validated);
            session()->flash('success', 'New FAQ created successfully');
        }catch (Exception $e) {
            session()->flash('error', $e->getMessage());
        }

        return back();
    }

    public function update(Request $request, Faq $faq)
    {
        $validated = $request->validate([
            'question' => 'string|required',
            'answer' => 'string|required',
            'is_active' => 'integer|required|in:1,2',
            'question_order' => 'integer|required|min:1',
        ]);

        try {
            $faq->update($validated);
            session()->flash('success', 'FAQ updated successfully');
        }catch (Exception $e) {
            session()->flash('error', $e->getMessage());
        }

        return back();
    }

    public function destroy(Faq $faq)
    {
        try {
            $faq->delete();
            return back()->withSuccess('Deleted successfully');
        } catch (Exception $e) {
            return back()->withError($e->getMessage());
        }
    }
}
