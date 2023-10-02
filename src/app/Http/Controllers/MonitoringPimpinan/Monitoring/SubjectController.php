<?php

namespace App\Http\Controllers\MonitoringPimpinan\Monitoring;

use App\Http\Controllers\Controller;
use App\Models\Master\Jabatan;
use App\Models\Master\SubjectType;
use App\Models\MonitoringPimpinan\Monitoring\Action;
use App\Models\MonitoringPimpinan\Monitoring\Subject;
use App\Models\MonitoringPimpinan\Monitoring\SubjectDetail;
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

        $subject_actives = Subject::where('active', true)->get();

        //TODO HARUSNYA SUBJECT NYA JUGA YANG AKTIF
        $subject_detail_actives = SubjectDetail::where('active', true)->get();

        $subject_detail_openeds = $subject_detail_actives->whereNull('finish');

        $subject_detail_closeds = $subject_detail_actives->whereNotNull('finish');

        $subject_openeds = $subject_actives->whereNull('closed');

        $subject_closeds = $subject_actives->whereNotNull('closed');

        $actions = Action::where('active', true)->get();

        $actions_active = Action::where('active', true)->whereNull('finish')->get();

        $subject_types = SubjectType::all();

        $progress_percentage = ($subject_closeds->count() / $subject_actives->count());

        $setia_total = Action::whereNull('finish')->whereIn('jabatan_id', Jabatan::where('parent_code', 'uk.1.1.1')->pluck('id'));

        $setia_finish = Action::whereNotNull('finish')->whereIn('jabatan_id', Jabatan::where('parent_code', 'uk.1.1.1')->pluck('id'));

        $asa_total = Action::whereNull('finish')->whereIn('jabatan_id', Jabatan::where('parent_code', 'uk.1.1.9')->pluck('id'));

        $asa_finish = Action::whereNotNull('finish')->whereIn('jabatan_id', Jabatan::where('parent_code', 'uk.1.1.9')->pluck('id'));

        $tegas_total = Action::whereNull('finish')->whereIn('jabatan_id', Jabatan::where('parent_code', 'uk.1.1.2')->pluck('id'));

        $tegas_finish = Action::whereNotNull('finish')->whereIn('jabatan_id', Jabatan::where('parent_code', 'uk.1.1.2')->pluck('id'));

        $pengasuh_total = Action::whereNull('finish')->whereIn('jabatan_id', Jabatan::where('parent_code', 'uk.1.1.12')->pluck('id'));

        $pengasuh_finish = Action::whereNotNull('finish')->whereIn('jabatan_id', Jabatan::where('parent_code', 'uk.1.1.12')->pluck('id'));

        return view(
            'monitoring-pimpinan/monitoring/subject/index',
            compact(
                'actions',
                'actions_active',
                'progress_percentage',
                'subjects',
                'subject_actives',
                'subject_closeds',
                'subject_detail_actives',
                'subject_detail_closeds',
                'subject_detail_openeds',
                'subject_openeds',
                'subject_types',
                'setia_total',
                'setia_finish',
                'asa_total',
                'asa_finish',
                'tegas_total',
                'tegas_finish',
                'pengasuh_total',
                'pengasuh_finish',
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

        $subject_detail_pending = $subject->subjectDetails->whereNull('finish');

        $subject_detail_done = $subject->subjectDetails->whereNotNull('finish');

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
