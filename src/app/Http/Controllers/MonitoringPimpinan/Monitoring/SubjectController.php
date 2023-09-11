<?php

namespace App\Http\Controllers\MonitoringPimpinan\Monitoring;

use App\Http\Controllers\Controller;
use App\Models\MonitoringPimpinan\Monitoring\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:subject');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();

        return view('monitoring-pimpinan/monitoring/subject/index', compact('subjects'));
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
    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|max:50',
            // 'opened' => 'required|date',
        ]);

        Subject::create([
            'name'            => $request->name,
            'comment'         => $request->comment,
            'subject_type_id' => '1',
            'opened'          => now(),
        ]);

        return redirect('/monitoring-pimpinan/monitoring/subject')->with('success', 'Sukses menambahkan subjek');
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
    public function edit(string $id): void
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): void
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): void
    {
    }
}