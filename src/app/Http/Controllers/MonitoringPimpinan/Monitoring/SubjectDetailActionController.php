<?php

namespace App\Http\Controllers\MonitoringPimpinan\Monitoring;

use App\Http\Controllers\Controller;
use App\Models\MonitoringPimpinan\Monitoring\SubjectDetail;
use Illuminate\Http\Request;

class SubjectDetailActionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, SubjectDetail $subject_detail)
    {
        $request->validate([
            'action_comment'    => 'required',
        ]);

        if ($request->has('is_done') === true) {
            $finish = now();
        } else {
            $finish = null;
        }

        $subject_detail->update([
            'action_comment' => $request->action_comment,
            'finish'         => $finish,
        ]);

        return redirect('/monitoring-pimpinan/monitoring/subject-detail/' . $subject_detail->id)->with('success', 'Sukses mengubah detail subjek');
    }
}
