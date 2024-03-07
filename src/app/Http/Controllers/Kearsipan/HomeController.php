<?php

declare(strict_types=1);

namespace App\Http\Controllers\Kearsipan;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

use function view;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index(): Renderable
    {
        return view('kearsipan/index');
    }
}
