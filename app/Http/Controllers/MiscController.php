<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MiscController extends Controller
{
    public function __construct()
    {
        view()->share('active_menu', '');
    }

    public function faqs()
    {
        $faqs = DB::table('faqs')
            ->where('is_active', 1)
            ->orderBy('question_order', 'asc')
            ->orderBy('id', 'desc')
            ->get();

        return view('frontend.faqs', compact('faqs'));
    }

    public function privacy_policy()
    {
        return view('frontend.privacy_policy');
    }

    public function warranty_terms()
    {
        return view('frontend.waranty_terms');
    }
}
