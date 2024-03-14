<?php

declare(strict_types=1);

namespace App\Http\Controllers\Kearsipan;

use App\Http\Controllers\Controller;
use App\Models\Kearsipan\InboxAttachment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function file_exists;
use function mkdir;
use function response;
use function storage_path;
use function trim;

class NaskahUploadController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $uniqid, string|null $type = null)
    {
        $path = storage_path('app/tmp/uploads/naskah/draft/' . $uniqid . '/');

        //TODO cari cara jangan 777
        if (! file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = trim($file->getClientOriginalName());

        $filesize = $file->getSize();

        $mimetype = $file->getClientMimeType();

        $file->move($path, $name);

        $upload = [
            'id'                => Str::uuid()->toString(),
            'filename'          => $name,
            'mimetype'          => $mimetype,
            'filesize'          => $filesize,
            'temp_path'         => 'tmp/uploads/naskah/draft/' . $uniqid . '/' . $name,
            'uniqid'            => $uniqid,
            'keterangan'        => $type,
            'user_id'           => $request->user()->id,
            'people_role_id'    => $request->user()->jabatan_code,
        ];

        InboxAttachment::insert($upload);

        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }
}
