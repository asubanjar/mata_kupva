<?php

namespace App\Http\Controllers\MonitoringPimpinan;

use App\Http\Controllers\Controller;
use App\Models\Master\Jabatan;
use App\Models\MonitoringPimpinan\Monitoring\Subject;
use App\Models\MonitoringPimpinan\Monitoring\SubjectDetail;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $subjects = Subject::all();

        $subject_pendings = Subject::whereNull('closed')->get();

        $subject_finishes = Subject::whereNotNull('closed')->get();

        $subject_finish_percentage = $subject_finishes->count()
            ? ($subject_finishes->count() / $subjects->count()) * 100
            : 0;

        $subject_details = SubjectDetail::all();

        $subject_detail_inactives = SubjectDetail::withoutGlobalScope('active')->where('active', false)->get();

        $subject_detail_pendings = SubjectDetail::whereNull('finish')->get();

        $subject_detail_finishes = SubjectDetail::whereNotNull('finish')->get();

        $subject_detail_finish_percentage = $subject_detail_finishes->count()
            ? ($subject_detail_finishes->count() / $subject_details->count()) * 100
            : 0;

        $statistic_jabatan_finishes = Jabatan::select(
            '*',
            DB::raw('(select count(*) from actions where jabatan_id = jabatans.id) as total_action'),
            DB::raw('(select count(*) from actions where jabatan_id = jabatans.id and finish is null) as total_action_pending'),
            DB::raw('(select count(*) from actions where jabatan_id = jabatans.id and finish is not null) as total_action_finish')
        )->orderBy('total_action_finish', 'desc')->orderBy('total_action', 'desc')->limit(3)->get();

        $statistic_jabatan_pendings = Jabatan::select(
            '*',
            DB::raw('(select count(*) from actions where jabatan_id = jabatans.id) as total_action'),
            DB::raw('(select count(*) from actions where jabatan_id = jabatans.id and finish is null) as total_action_pending'),
            DB::raw('(select count(*) from actions where jabatan_id = jabatans.id and finish is not null) as total_action_finish')
        )->orderBy('total_action_pending', 'desc')->orderBy('total_action', 'desc')->limit(3)->get();

        return view(
            'monitoring-pimpinan/index',
            compact(
                'subjects',
                'subject_details',
                'subject_detail_finishes',
                'subject_detail_inactives',
                'subject_detail_pendings',
                'subject_detail_finish_percentage',
                'subject_finishes',
                'statistic_jabatan_finishes',
                'statistic_jabatan_pendings',
                'subject_pendings',
                'subject_finish_percentage',
            )
        );
    }
}
