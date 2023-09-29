<?php

declare(strict_types=1);

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\JenisBiaya;
use Illuminate\Http\Request;

class JenisBiayaController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:master');
    }

    public function index()
    {
        $biayas = JenisBiaya::all();

        return view('master/jenis-biaya/index', compact('biayas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'       => 'required',
            'pembiayaan' => 'required',
            'keterangan' => 'required',
        ]);

        JenisBiaya::create([
            'nama'       => $request->get('nama'),
            'pembiayaan' => $request->get('pembiayaan'),
            'keterangan' => $request->get('keterangan'),

        ]);

        return redirect('/master/jenis-biaya')->with('success', 'Sukses menambahkan Jenis Biaya');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisBiaya $jenisBiaya)
    {
        return response()->json($jenisBiaya);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JenisBiaya $jenisBiaya)
    {
        $request->validate([
            'nama'       => 'required',
            'pembiayaan' => 'required',
            'keterangan' => 'required',
        ]);

        $jenisBiaya->update([
            'nama'       => $request->get('nama'),
            'pembiayaan' => $request->get('pembiayaan'),
            'keterangan' => $request->get('keterangan'),
        ]);

        return redirect('/master/jenis-biaya')->with('success', 'Sukses mengubah Jenis Biaya');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisBiaya $jenisBiaya)
    {
        $jenisBiaya->delete();

        return redirect('/master/jenis-biaya')->with('success', 'Sukses menghapus Jenis Biaya');
    }
}
