<?php

declare(strict_types=1);

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\JenisKegiatan;
use Illuminate\Http\Request;

class JenisKegiatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:master');
    }

    public function index()
    {
        $kegiatans = JenisKegiatan::all();

        return view('master/jenis-kegiatan/index', compact('kegiatans'));
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

        JenisKegiatan::create([
            'nama'       => $request->get('nama'),
            'keterangan' => $request->get('keterangan'),

        ]);

        return redirect('/master/jenis-kegiatan')->with('success', 'Sukses menambahkan Jenis Kegiatan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisKegiatan $jenisKegiatan)
    {
        return response()->json($jenisKegiatan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JenisKegiatan $jenisKegiatan)
    {
        $request->validate([
            'nama'       => 'required',
            'keterangan' => 'required',
        ]);

        $jenisKegiatan->update([
            'nama'       => $request->get('nama'),
            'keterangan' => $request->get('keterangan'),
        ]);

        return redirect('/master/jenis-kegiatan')->with('success', 'Sukses mengubah Jenis Kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisKegiatan $jenisKegiatan)
    {
        $jenisKegiatan->delete();

        return redirect('/master/jenis-kegiatan')->with('success', 'Sukses menghapus Jenis Kegiatan');
    }
}
