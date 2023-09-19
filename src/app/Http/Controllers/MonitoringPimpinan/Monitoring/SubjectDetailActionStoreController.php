<?php

namespace App\Http\Controllers\MonitoringPimpinan\Monitoring;

use App\Http\Controllers\Controller;
use App\Models\MonitoringPimpinan\Monitoring\Action;
use App\Models\MonitoringPimpinan\Monitoring\SubjectDetail;
use Illuminate\Http\Request;

class SubjectDetailActionStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, SubjectDetail $subject_detail)
    {
        $request->validate([
            'name'       => 'required|max:50',
            'start'      => 'required|date',
            'end'        => 'required|date',
            'jabatan_id' => 'required|exists:jabatans,id',
        ]);

        Action::create([
            'name'              => $request->name,
            'comment'           => $request->comment,
            'start'             => $request->start,
            'end'               => $request->end,
            'subject_detail_id' => $subject_detail->id,
            'jabatan_id'        => $request->jabatan_id,
        ]);

        return redirect(
            '/monitoring-pimpinan/monitoring/subject-detail/' . $subject_detail->id
        )->with('success', 'Sukses menambahkan aksi');
    }
}
