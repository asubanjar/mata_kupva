<?php

namespace App\Http\Controllers\MonitoringPimpinan\Monitoring;

use App\Http\Controllers\Controller;
use App\Models\Master\Jabatan;
use App\Models\MonitoringPimpinan\Monitoring\SubjectDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): void
    {
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
    public function show(SubjectDetail $subject_detail)
    {
        $jabatans = Jabatan::all();

        $dist_jabatan_count = DB::table('actions')
        ->where('subject_detail_id', $subject_detail->id)
        ->distinct('jabatan_id')
        ->count('jabatan_id');

        $interval = $subject_detail->start->diff($subject_detail->end);

        $diff_days = $interval->format('%a');

        return view('monitoring-pimpinan/monitoring/subject-detail/view', compact(
            'diff_days',
            'dist_jabatan_count',
            'jabatans',
            'subject_detail',
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubjectDetail $subject_detail): void
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubjectDetail $subject_detail)
    {
        $request->validate([
            'name'    => 'required',
            'comment' => 'required',
            // 'start'   => 'required|date',
            // 'end'     => 'required|date',
        ]);

        $subject_detail->update([
            'name'    => $request->name,
            'comment' => $request->comment,
            'start'   => $request->start,
            'end'     => $request->end,
            'active'  => $request->has('active'),
        ]);

        return redirect('/monitoring-pimpinan/monitoring/subject-detail/' . $subject_detail->id)->with('success', 'Sukses mengubah subject detail');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): void
    {
    }
}
