<?php

namespace App\Http\Controllers\Pva;

use App\Models\Pva;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PvaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('pvas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pvas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pva' => 'required|string|max:255',
            'pemegang_saham' => 'required|string|max:255',
            'jumlah_aset' => 'required|numeric',
            'catatan_kasus' => 'required|numeric',
            'flag_anomali_transaksi' => 'required|boolean',
            'tingkat_kepatuhan' => 'required|numeric',
        ]);

        Pva::create($request->all());

        return redirect()->route('pvas.index')->with('success', 'PVA created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pva  $pva
     * @return \Illuminate\View\View
     */
    public function show(Pva $pva)
    {
        return view('pvas.show', compact('pva'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pva  $pva
     * @return \Illuminate\View\View
     */
    public function edit(Pva $pva)
    {
        return view('pvas.edit', compact('pva'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pva  $pva
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Pva $pva)
    {
        $request->validate([
            'nama_pva' => 'required|string|max:255',
            'pemegang_saham' => 'required|string|max:255',
            'jumlah_aset' => 'required|numeric',
            'catatan_kasus' => 'required|numeric',
            'flag_anomali_transaksi' => 'required|boolean',
            'tingkat_kepatuhan' => 'required|numeric',
        ]);

        $pva->update($request->all());

        return redirect()->route('pvas.index')->with('success', 'PVA updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pva  $pva
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Pva $pva)
    {
        $pva->delete();

        return redirect()->route('pvas.index')->with('success', 'PVA deleted successfully.');
    }
}