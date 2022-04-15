<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Moment;
use Illuminate\Http\Request;

class MomentsController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $moments = Moment::query()
            ->latest()
            ->get();
        return view('admin.moments.index', compact('moments'));
    }
}
