<?php

namespace App\Http\Controllers\MonitoringPimpinan\Statistic;

use App\Http\Controllers\Controller;
use App\Models\Master\Jabatan;
use App\Models\MonitoringPimpinan\Monitoring\Action;
use Illuminate\Support\Facades\DB;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actions = Action::all();

        $action_pendings = Action::whereNull('finish')->get();

        $statistic_actions = Jabatan::select(
            '*',
            DB::raw('(select count(*) from actions where jabatan_id = jabatans.id) as total_action'),
            DB::raw('(select count(*) from actions where jabatan_id = jabatans.id and finish is null) as total_action_pending'),
            DB::raw('(select count(*) from actions where jabatan_id = jabatans.id and finish is not null) as total_action_finish')
        )->orderBy('total_action_pending', 'desc')->orderBy('total_action', 'desc')->get();

        return view(
            'monitoring-pimpinan/statistic/action',
            compact(
                'actions',
                'action_pendings',
                'statistic_actions'
            )
        );
    }
}
