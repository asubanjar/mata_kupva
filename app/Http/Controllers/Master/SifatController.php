<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\Sifat;
use Illuminate\Http\Request;

class SifatController extends Controller
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
        $sifats = Sifat::all();

        return view('master/sifat/index', compact('sifats'));
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
            'name'      => 'required|unique:sifats|max:50',
            'code_name' => 'required',
        ]);

        Sifat::create([
            'name'      => $request->name,
            'code_name' => $request->code_name,
        ]);

        return redirect('/master/sifat')->with('success', 'Sukses menambahkan sifat');
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
    public function edit(Sifat $sifat)
    {
        return response()->json($sifat);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sifat $sifat)
    {
        $request->validate([
            'name'      => 'required',
            'code_name' => 'required',
        ]);

        $sifat->update([
            'name'      => $request->name,
            'code_name' => $request->code_name,
            'active'    => $request->active === 'true' ? '1' : '0',
        ]);

        return redirect('/master/sifat')->with('success', 'Sukses mengubah sifat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sifat $sifat)
    {
        $sifat->delete();

        return redirect('/master/sifat')->with('success', 'Sukses menghapus sifat');
    }
}