<?php

declare(strict_types=1);

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\Dipa;
use Illuminate\Http\Request;

class DipaController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:master');
    }

    public function index()
    {
        $dipas = Dipa::all();

        return view('master/dipa/index', compact('dipas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode'       => 'required',
            'tahun'      => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
            'pembiayaan' => 'required',
        ]);

        Dipa::create([
            'kode'       => $request->get('kode'),
            'tahun'      => $request->get('tahun'),
            'pembiayaan' => $request->get('pembiayaan'),

        ]);

        return redirect('/master/dipa')->with('success', 'Sukses menambahkan DIPA');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dipa $dipa)
    {
        return response()->json($dipa);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dipa $dipa)
    {
        $request->validate([
            'kode'       => 'required',
            'tahun'      => 'required',
            'pembiayaan' => 'required',
        ]);

        $dipa->update([
            'kode'       => $request->get('kode'),
            'tahun'      => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
            'pembiayaan' => $request->get('pembiayaan'),
        ]);

        return redirect('/master/dipa')->with('success', 'Sukses mengubah DIPA');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dipa $dipa)
    {
        $dipa->delete();

        return redirect('/master/dipa')->with('success', 'Sukses menghapus DIPA');
    }
}
