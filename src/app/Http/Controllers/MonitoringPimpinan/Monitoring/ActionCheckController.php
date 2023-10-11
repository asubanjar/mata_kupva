<?php

namespace App\Http\Controllers\MonitoringPimpinan\Monitoring;

use App\Http\Controllers\Controller;
use App\Models\Master\Jabatan;
use App\Models\MonitoringPimpinan\Monitoring\Action;
use App\Models\MonitoringPimpinan\Monitoring\Check;
use Illuminate\Http\Request;

class ActionCheckController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Action $action)
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
}
