<?php

namespace App\Http\Controllers\MonitoringPimpinan\Monitoring;

use App\Http\Controllers\Controller;
use App\Models\Master\SubjectType;
use App\Models\MonitoringPimpinan\Monitoring\Subject;
use Illuminate\Http\Request;

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

        return view(
            'monitoring-pimpinan/monitoring/subject/index',
            compact(
                'subjects',
                'subject_types'
            )
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
        dd($request->opened);
        $request->validate([
            'name'            => 'required|max:50',
            'subject_type_id' => 'required|exists:subject_types,id',
            'opened'          => 'required|date',
        ]);

        Subject::create([
            'name'            => $request->name,
            'comment'         => $request->comment,
            'subject_type_id' => $request->subject_type_id,
            'opened'          => $request->opened,
        ]);

        return redirect('/monitoring-pimpinan/monitoring/subject')->with('success', 'Sukses menambahkan subjek');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        $subject_details = $subject->subjectDetails;

        $subject_detail_pending = $subject->subjectDetails->where('is_done', false);

        $subject_detail_done = $subject->subjectDetails->where('is_done', true);

        return view('monitoring-pimpinan/monitoring/subject/view', compact(
            'subject',
            'subject_details',
            'subject_detail_done',
            'subject_detail_pending'
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
    public function update(Request $request, string $id): void
    {
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
