<?php

namespace App\Http\Controllers\MonitoringPimpinan\Monitoring;

use App\Http\Controllers\Controller;
use App\Models\MonitoringPimpinan\Monitoring\Check;
use Illuminate\Http\Request;

class CheckFinishController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Check $check, string $status)
    {
        if ($status === 'finish') {
            $finish = now();
        } else {
            $finish = null;
        }

        $check->update([
            'finish'    => $finish,
        ]);

        return redirect(
            '/monitoring-pimpinan/monitoring/action/' . $check->action_id
        )->with('success', 'Sukses mengubah status cek');
    }
}
