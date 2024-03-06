<?php

declare(strict_types=1);

namespace App\Http\Controllers\Kearsipan\Kedinasan\Peserta;

use App\Http\Controllers\Controller;
use App\Models\Kearsipan\Registrasi\Peserta;
use App\Models\Kearsipan\Registrasi\SuratTugas;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use function redirect;
use function view;

class PesertaController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, SuratTugas $suratTugas): RedirectResponse
    {
        $request->validate([
            'nama_peserta'          => 'required',
            'status_peserta'        => 'required',
            'instansi_peserta'      => 'required',
            'nip'                   => 'nullable',
            'golongan'              => 'nullable',
            'jabatan'               => 'nullable',
            'unit_organisasi'       => 'nullable',
            'tanggal'               => 'required',
            'pembiayaan_anggaran'   => 'required',
        ]);

        $tanggalTugas = $request->get('tanggal');

        $peserta                      = new Peserta();
        $peserta->surat_tugas_id      = $suratTugas->id;
        $peserta->nama_peserta        = $request->get('instansi_peserta') === 'PPATK'
                ? $request->get('nama')
                : $request->get('nama_peserta');
        $peserta->status_peserta      = $request->get('status_peserta');
        $peserta->instansi_peserta    = $request->get('instansi_peserta');
        $peserta->nip                 = $request->get('nip');
        $peserta->golongan            = $request->get('golongan');
        $peserta->jabatan             = $request->get('jabatan');
        $peserta->unit_organisasi     = $request->get('unit_organisasi');
        $peserta->pembiayaan_anggaran = $request->get('pembiayaan_anggaran');

        $peserta->save();

        $peserta->tanggalTugas()->attach($tanggalTugas);

        return redirect(
            'kearsipan/surat-tugas/' . $suratTugas->id . '/peserta',
        )->with('success', 'Sukses Menambahkan Data Peserta');
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
    public function edit(Peserta $peserta)
    {
        $data = [
            'peserta' => $peserta->load('tanggalTugas'),
        ];

        return view('kearsipan/kedinasan/peserta/edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peserta $peserta): RedirectResponse
    {
        $request->validate([
            'status_peserta'        => 'required',
            'tanggal'               => 'required',
            'pembiayaan_anggaran'   => 'required',
        ]);

        $stid         = $request->get('stid');
        $tanggalTugas = $request->get('tanggal');

        $peserta->update([
            'status_peserta'       => $request->get('status_peserta'),
            'pembiayaan_anggaran'  => $request->get('pembiayaan_anggaran'),
        ]);

        $peserta->tanggalTugas()->sync($tanggalTugas);

        return redirect(
            'kearsipan/surat-tugas/' . $stid . '/peserta',
        )->with('success', 'Sukses Mengubah Data Peserta');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peserta $peserta): void
    {
        $peserta->tanggalTugas()->detach();

        $peserta->delete();
    }
}
