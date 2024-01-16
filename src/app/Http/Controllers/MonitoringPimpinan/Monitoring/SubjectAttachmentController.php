<?php

namespace App\Http\Controllers\MonitoringPimpinan\Monitoring;

use App\Http\Controllers\Controller;
use App\Models\MonitoringPimpinan\Monitoring\Subject;
use App\Models\MonitoringPimpinan\Monitoring\Upload\SubjectAttachment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Throwable;
use Yajra\DataTables\Facades\DataTables;

class SubjectAttachmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Subject $subject): JsonResponse
    {
        return DataTables::of($subject->attachments())->toJson();
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
    public function store(Request $request, Subject $subject): void
    {
        $lampirans = SubjectAttachment::where('uniqid', $request->get('uniqid'))->get();

        foreach ($lampirans as $lampiran) {
            $path = 'app/subject/';

            $source = $lampiran->temp_path;
            $destination = 'uploads/subject_attachments/' . $lampiran->uniqid . '-' . $lampiran->filename;

            if (Storage::disk('local')->exists($source)) {
                Storage::copy($source, $destination);

                $lampiran->update([
                    'subject_id' => $subject->id,
                    'path'       => $path . $lampiran->uniqid . '-' . $lampiran->filename,
                    'user_id'    => Auth::user()->id,
                ]);
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): void
    {
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
    public function destroy(SubjectAttachment $subject_attachment)
    {
        try {
            $subject_attachment->delete();

            return response()->json(['success' => 'Record deleted successfully.']);
        } catch (Throwable $e) {
            return response()->json(['error' => 'Record could not be deleted.'], 500);
        }
    }
}
