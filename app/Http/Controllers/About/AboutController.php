<?php

namespace App\Http\Controllers\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Show the About page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('about.index');
    }
}