<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UploadController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $uniqid, string $class)
    {
        $path = storage_path('app/tmp/uploads/' . $class . '/' . $uniqid . '/');

        //TODO cari cara jangan 777
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = trim($file->getClientOriginalName());

        $filesize = $file->getSize();

        $mimetype = $file->getClientMimeType();

        $file->move($path, $name);

        $upload = [
            'id'        => Str::uuid()->toString(),
            'filename'  => $name,
            'mimetype'  => $mimetype,
            'filesize'  => $filesize,
            'temp_path' => 'tmp/uploads/' . $class . '/' . $uniqid . '/' . $name,
            'uniqid'    => $uniqid,
        ];

        DB::table($class)->insert($upload);

        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }
}
