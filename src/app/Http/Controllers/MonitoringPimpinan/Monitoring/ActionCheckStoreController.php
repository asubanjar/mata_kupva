<?php

namespace App\Http\Controllers\MonitoringPimpinan\Monitoring;

use App\Http\Controllers\Controller;
use App\Models\MonitoringPimpinan\Monitoring\Action;
use App\Models\MonitoringPimpinan\Monitoring\Check;
use Illuminate\Http\Request;

class ActionCheckStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Action $action)
    {
        $request->validate([
            'name'  => 'required|max:50',
            'start' => 'required|date',
            'end'   => 'required|date',
        ]);

        Check::create([
            'name'      => $request->name,
            'start'     => $request->start,
            'end'       => $request->end,
            'action_id' => $action->id,
        ]);

        return redirect(
            '/monitoring-pimpinan/monitoring/action/' . $action->id
        )->with('success', 'Sukses menambahkan ceklist pada aksi');
    }
}
