<?php

namespace App\Http\Controllers\MonitoringPimpinan\Monitoring;

use App\Http\Controllers\Controller;
use App\Models\Master\Jabatan;
use App\Models\MonitoringPimpinan\Monitoring\Action;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actions = Action::all();

        $action_pendings = Action::whereNull('finish')->get();

        $jabatans = Jabatan::all();

        $actions_over_target = Action::whereDate('end', '<', now())
        ->whereNull('finish')
        ->get();

        return view(
            'monitoring-pimpinan/monitoring/action/index',
            compact(
                'actions',
                'actions_over_target',
                'action_pendings',
                'jabatans'
            )
        );
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
            'name'       => $request->get('name'),
            'comment'    => $request->get('comment'),
            'start'      => $request->get('start'),
            'end'        => $request->get('end'),
            'active'     => $request->has('active'),
            'jabatan_id' => $request->get('jabatan_id'),
            'finish'     => $request->get('finish'),
        ]);

        return redirect(
            '/monitoring-pimpinan/monitoring/subject/action/' . $action->id . '/check'
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
