<?php

declare(strict_types=1);

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\JenisPerjadin;
use Illuminate\Http\Request;

class JenisPerjadinController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:master');
    }

    public function index()
    {
        $perjadins = JenisPerjadin::all();

        return view('master/jenis-perjadin/index', compact('perjadins'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'       => 'required',
            'keterangan' => 'required',
        ]);

        JenisPerjadin::create([
            'nama'       => $request->get('nama'),
            'keterangan' => $request->get('keterangan'),

        ]);

        return redirect('/master/jenis-perjadin')->with('success', 'Sukses menambahkan Jenis Perjadin');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisPerjadin $jenisPerjadin)
    {
        return response()->json($jenisPerjadin);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JenisPerjadin $jenisPerjadin)
    {
        $request->validate([
            'nama'       => 'required',
            'keterangan' => 'required',
        ]);

        $jenisPerjadin->update([
            'nama'       => $request->get('nama'),
            'keterangan' => $request->get('keterangan'),
        ]);

        return redirect('/master/jenis-perjadin')->with('success', 'Sukses mengubah Jenis Perjadin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisPerjadin $jenisPerjadin)
    {
        $jenisPerjadin->delete();

        return redirect('/master/jenis-perjadin')->with('success', 'Sukses menghapus Jenis Perjadin');
    }
}
