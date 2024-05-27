<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\SubjectType;
use Illuminate\Http\Request;

class SubjectTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:master');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subject_types = SubjectType::all();

        return view('master/subject-type/index', compact('subject_types'));
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
            'name'      => 'required|unique:subject_types|max:50',
            'code_name' => 'required',
        ]);

        SubjectType::create([
            'name'      => $request->name,
            'code_name' => $request->code_name,
        ]);

        return redirect('/master/subject-type')->with('success', 'Sukses menambahkan subject type');
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
    public function edit(SubjectType $subject_type)
    {
        return response()->json($subject_type);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubjectType $subject_type)
    {
        $request->validate([
            'name'      => 'required',
            'code_name' => 'required',
        ]);

        $subject_type->update([
            'name'      => $request->name,
            'code_name' => $request->code_name,
            'active'    => $request->active === 'true' ? '1' : '0',
        ]);

        return redirect('/master/subject-type')->with('success', 'Sukses mengubah subject type');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubjectType $subject_type)
    {
        $subject_type->delete();

        return redirect('/master/subject-type')->with('success', 'Sukses menghapus subject type');
    }
}