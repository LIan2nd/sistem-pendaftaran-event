<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class AnotherController extends Controller
{
    public function our()
    {
        return view('etc.our');
    }

    public function done(Request $request)
    {
        return view('etc.done', [
            'role' => $request->user
        ]);
    }
    public function lord()
    {
        return view('etc.lord');
    }

    public function thx()
    {
        return view('etc.thx');
    }

    public function subs()
    {
        return view('etc.subs');
    }
}