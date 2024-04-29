<?php

declare(strict_types=1);

namespace App\Http\Controllers\MonitoringPimpinan\Monitoring;

use App\Http\Controllers\Controller;
use App\Models\Master\SubjectType;
use App\Models\MonitoringPimpinan\Monitoring\Subject;
use App\Models\MonitoringPimpinan\Monitoring\Upload\SubjectAttachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use function compact;
use function redirect;
use function view;

class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:subject');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();

        $subject_types = SubjectType::all();

        $subject_openeds = $subjects->whereNull('closed');

        $subject_closeds = Subject::whereNotNull('closed');

        $progress_percentage = $subject_closeds->count()
            ? $subject_closeds->count() / $subjects->count() * 100
            : 0;

        return view(
            'monitoring-pimpinan/monitoring/subject/index',
            compact(
                'progress_percentage',
                'subjects',
                'subject_closeds',
                'subject_openeds',
                'subject_types',
            ),
        );
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
    public function store(Request $request)
    {
        $request->validate([
            'name'            => 'required|max:50',
            'subject_type_id' => 'required|exists:subject_types,id',
            'opened'          => 'required|date',
        ]);

        $subject = Subject::create([
            'name'            => $request->get('name'),
            'comment'         => $request->get('comment'),
            'subject_type_id' => $request->get('subject_type_id'),
            'opened'          => $request->get('opened'),
        ]);

        $lampirans = SubjectAttachment::where('uniqid', $request->get('uniqid'))->get();

        foreach ($lampirans as $lampiran) {
            $path = 'app/subject/';

            $source      = $lampiran->temp_path;
            $destination = 'uploads/subject_attachments/' . $lampiran->uniqid . '-' . $lampiran->filename;

            if (! Storage::disk('local')->exists($source)) {
                continue;
            }

            Storage::copy($source, $destination);

            $lampiran->update([
                'subject_id' => $subject->id,
                'path'       => $path . $lampiran->uniqid . '-' . $lampiran->filename,
                'user_id'    => Auth::user()->id,
            ]);
        }

        return redirect('/monitoring-pimpinan/monitoring/subject')->with('success', 'Sukses menambahkan subjek');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        $subject_types = SubjectType::all();

        $subject_details = $subject->subjectDetails;

        $subject_detail_pending = $subject->subjectDetails->whereNull('finish');

        $subject_detail_done = $subject->subjectDetails->whereNotNull('finish');

        return view('monitoring-pimpinan/monitoring/subject/view', compact(
            'subject',
            'subject_details',
            'subject_detail_done',
            'subject_detail_pending',
            'subject_types',
        ));
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
    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'name'            => 'required|max:50',
            'subject_type_id' => 'required|exists:subject_types,id',
            'opened'          => 'required|date',
            'closed'          => 'nullable|date',
        ]);

        $subject->update([
            'name'            => $request->get('name'),
            'comment'         => $request->get('comment'),
            'subject_type_id' => $request->get('subject_type_id'),
            'opened'          => $request->get('opened'),
            'closed'          => $request->get('closed'),
        ]);

        return redirect(
            '/monitoring-pimpinan/monitoring/subject/' . $subject->id,
        )->with('success', 'Sukses mengubah detail aksi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();

        return redirect('/monitoring-pimpinan/monitoring/subject')->with('success', 'Sukses menghapus subjek');
    }
}
