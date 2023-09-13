<?php

namespace App\Http\Controllers\MonitoringPimpinan\Monitoring;

use App\Http\Controllers\Controller;
use App\Models\MonitoringPimpinan\Monitoring\SubjectDetail;
use Illuminate\Http\Request;

class SubjectDetailController extends Controller
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
    public function show(string $id): void
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubjectDetail $subject_detail)
    {
        return response()->json($subject_detail);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubjectDetail $subject_detail)
    {
        // dd($request->start);

        $request->validate([
            'name'    => 'required',
            'comment' => 'required',
            'start'   => 'required|date',
            // 'end'     => 'required|date',
        ]);

        if ($request->is_done === 'true') {
            $finish = now();
        } else {
            $finish = null;
        }

        $subject_detail->update([
            'name'           => $request->name,
            'comment'        => $request->comment,
            'start'          => $request->start,
            'end'            => $request->end,
            'is_done'        => $request->is_done === 'true' ? '1' : '0',
            'finish'         => $finish,
            'action_comment' => $request->action_comment,
            'active'         => $request->active === 'true' ? '1' : '0',
        ]);

        return redirect('/monitoring-pimpinan/monitoring/subject/' . $subject_detail->subject_id)->with('success', 'Sukses mengubah subject detail');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): void
    {
    }
}
