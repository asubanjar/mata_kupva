<?php

declare(strict_types=1);

namespace App\Http\Controllers\Kearsipan;

use App\Http\Controllers\Controller;
use App\Models\Kearsipan\InboxAttachment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Throwable;
use Yajra\DataTables\Facades\DataTables;

use function abort;
use function file_exists;
use function response;
use function storage_path;

class InboxAttachmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $nid, string $subject): JsonResponse
    {
        $query = InboxAttachment::where('nid', $nid);

        if ($subject === 'lampiran') {
            $query->where('keterangan', 'lampiran');
        }

        $data = $query->get();

        return DataTables::of($data)->toJson();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): void
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): void
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $inbox_attachment)
    {
        //TODO bisa kasih validasi siapa aja yg boleh akses file ini
        $attachment = InboxAttachment::where('nid', $inbox_attachment)
                        ->where('keterangan', 'outbox')->firstOrFail();

        $filePath = 'app/' . $attachment->temp_path;

        if (file_exists(storage_path($filePath))) {
            $headers = [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $attachment->filename . '"',
            ];

            return response()->file(storage_path($filePath), $headers);
        }

        abort(404, 'File not found.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): void
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): void
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InboxAttachment $inbox_attachment)
    {
        try {
            $inbox_attachment->delete();

            return response()->json(['success' => 'Record deleted successfully.']);
        } catch (Throwable) {
            return response()->json(['error' => 'Record could not be deleted.'], 500);
        }
    }
}
