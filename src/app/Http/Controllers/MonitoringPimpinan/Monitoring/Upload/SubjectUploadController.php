<?php

namespace App\Http\Controllers\MonitoringPimpinan\Monitoring\Upload;

use App\Http\Controllers\Controller;
use App\Models\MonitoringPimpinan\Monitoring\Upload\SubjectAttachment;
use Illuminate\Http\Request;

class SubjectUploadController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $uniqid)
    {
        $path = storage_path('app/tmp/uploads/subject/' . $uniqid . '/');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = trim($file->getClientOriginalName());

        $filesize = $file->getSize();

        $mimetype = $file->getClientMimeType();

        $file->move($path, $name);

        SubjectAttachment::create([
            'filename'  => $name,
            'mimetype'  => $mimetype,
            'filesize'  => $filesize,
            'temp_path' => 'tmp/uploads/subject/' . $uniqid . '/' . $name,
            'uniqid'    => $uniqid,
        ]);

        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }
}
