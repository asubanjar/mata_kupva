<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteUploadController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $uniqid, string $class)
    {
        DB::table($class)
                ->where('filename', $request->get('filename'))
                ->where('uniqid', $uniqid)
                ->whereNull('subject_id')->delete();

        return response()->json([
            'filename' => $request->get('filename'),
        ]);
    }
}
