<?php

namespace App\Http\Controllers\MonitoringPimpinan\Monitoring;

use App\Http\Controllers\Controller;
use App\Models\Master\Jabatan;
use App\Models\MonitoringPimpinan\Monitoring\Action;
use App\Models\MonitoringPimpinan\Monitoring\Check;
use Illuminate\Http\Request;

class ActionController extends Controller
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
    public function show(Action $action)
    {
        $jabatans = Jabatan::all();

        $interval = $action->start->diff($action->end);

        $diff_days = $interval->format('%a');

        $checks = Check::where('action_id', $action->id)
                    ->where('active', true);

        $checks_over_target = $checks->whereDate('end', '<', now())
                                ->whereNull('finish')
                                ->get();

        $finish = Check::where('action_id', $action->id)
                    ->where('active', true)->whereNotNull('finish')->get();

        $finish_percentage = $finish->count() !== 0
            ? ($finish->count() / $action->checks->count()) * 100
            : 0;

        return view('monitoring-pimpinan/monitoring/action/view', compact(
            'action',
            'checks_over_target',
            'diff_days',
            'finish_percentage',
            'jabatans',
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
    public function update(Request $request, Action $action)
    {
        $request->validate([
            'name'       => 'required',
            'start'      => 'required|date',
            'end'        => 'required|date',
            'jabatan_id' => 'required|exists:jabatans,id',
        ]);

        $action->update([
            'name'       => $request->name,
            'comment'    => $request->comment,
            'start'      => $request->start,
            'end'        => $request->end,
            'active'     => $request->has('active'),
            'jabatan_id' => $request->jabatan_id,
        ]);

        return redirect(
            '/monitoring-pimpinan/monitoring/action/' . $action->id
        )->with('success', 'Sukses mengubah detail aksi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Action $action)
    {
        $action->delete();

        return redirect(
            '/monitoring-pimpinan/monitoring/subject-detail/' . $action->subject_detail_id
        )->with('success', 'Sukses menghapus aksi');
    }
}
