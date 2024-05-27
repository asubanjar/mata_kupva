<?php

declare(strict_types=1);

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\AkunLembur;
use Illuminate\Http\Request;

class AkunLemburController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:master');
    }

    public function index()
    {
        $lemburs = AkunLembur::all();

        return view('master/akun-lembur/index', compact('lemburs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode'  => 'required',
            'nama'  => 'required',
            'jenis' => 'required',
            'tahun' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
        ]);

        AkunLembur::create([
            'kode'  => $request->get('kode'),
            'nama'  => $request->get('nama'),
            'jenis' => $request->get('jenis'),
            'tahun' => $request->get('tahun'),

        ]);

        return redirect('/master/akun-lembur')->with('success', 'Sukses menambahkan Akun Lembur');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AkunLembur $akunLembur)
    {
        return response()->json($akunLembur);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AkunLembur $akunLembur)
    {
        $request->validate([
            'kode'  => 'required',
            'nama'  => 'required',
            'jenis' => 'required',
            'tahun' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
        ]);

        $akunLembur->update([
            'kode'  => $request->get('kode'),
            'nama'  => $request->get('nama'),
            'jenis' => $request->get('jenis'),
            'tahun' => $request->get('tahun'),
        ]);

        return redirect('/master/akun-lembur')->with('success', 'Sukses mengubah Akun Lembur');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AkunLembur $akunLembur)
    {
        $akunLembur->delete();

        return redirect('/master/akun-lembur')->with('success', 'Sukses menghapus Akun Lembur');
    }
}
