<?php

declare(strict_types=1);

namespace App\Http\Controllers\Kearsipan\Kedinasan\Peserta;

use App\Http\Controllers\Controller;
use App\Models\Kearsipan\Registrasi\Peserta;
use App\Models\Kearsipan\Registrasi\SuratTugas;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use function redirect;

class PesertaController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, SuratTugas $suratTugas): RedirectResponse
    {
        $request->validate([
            'nama_peserta'      => 'required',
            'status_peserta'    => 'required',
            'instansi_peserta'  => 'required',
            'nip'               => 'nullable',
            'golongan'          => 'nullable',
            'jabatan'           => 'nullable',
            'unit_organisasi'   => 'nullable',
            'tanggal'           => 'required',
        ]);

        foreach ($request->get('tanggal') as $tanggal) {
            $peserta                   = new Peserta();
            $peserta->tanggal_tugas_id = $tanggal;
            $peserta->nama_peserta     = $request->get('instansi_peserta') === 'PPATK'
                ? $request->get('nama')
                : $request->get('nama_peserta');
            $peserta->status_peserta   = $request->get('status_peserta');
            $peserta->instansi_peserta = $request->get('instansi_peserta');
            $peserta->nip              = $request->get('nip');
            $peserta->golongan         = $request->get('golongan');
            $peserta->jabatan          = $request->get('jabatan');
            $peserta->unit_organisasi  = $request->get('unit_organisasi');

            $peserta->save();
        }

        return redirect(
            'kearsipan/surat-tugas/' . $suratTugas->id . '/peserta',
        )->with('success', 'Sukses');
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
