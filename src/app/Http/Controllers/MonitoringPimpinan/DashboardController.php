<?php

namespace App\Http\Controllers\MonitoringPimpinan;

use App\Http\Controllers\Controller;
use App\Models\Master\Jabatan;
use App\Models\MonitoringPimpinan\Monitoring\Action;
use App\Models\MonitoringPimpinan\Monitoring\Subject;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $subjects = Subject::all();

        $setia_total = Action::whereNull('finish')->whereIn('jabatan_id', Jabatan::where('parent_code', 'uk.1.1.1')->pluck('id'));

        $setia_finish = Action::whereNotNull('finish')->whereIn('jabatan_id', Jabatan::where('parent_code', 'uk.1.1.1')->pluck('id'));

        $asa_total = Action::whereNull('finish')->whereIn('jabatan_id', Jabatan::where('parent_code', 'uk.1.1.9')->pluck('id'));

        $asa_finish = Action::whereNotNull('finish')->whereIn('jabatan_id', Jabatan::where('parent_code', 'uk.1.1.9')->pluck('id'));

        $tegas_total = Action::whereNull('finish')->whereIn('jabatan_id', Jabatan::where('parent_code', 'uk.1.1.2')->pluck('id'));

        $tegas_finish = Action::whereNotNull('finish')->whereIn('jabatan_id', Jabatan::where('parent_code', 'uk.1.1.2')->pluck('id'));

        $pengasuh_total = Action::whereNull('finish')->whereIn('jabatan_id', Jabatan::where('parent_code', 'uk.1.1.12')->pluck('id'));

        $pengasuh_finish = Action::whereNotNull('finish')->whereIn('jabatan_id', Jabatan::where('parent_code', 'uk.1.1.12')->pluck('id'));

        return view(
            'monitoring-pimpinan/index',
            compact(
                'subjects',
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
}
