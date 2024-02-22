<?php

declare(strict_types=1);

namespace App\Http\Controllers\Kearsipan\Kedinasan\Peserta;

use App\Http\Controllers\Controller;
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
            'nama_pegawai_id' => 'required',
            'unit_organisasi' => 'required',
        ]);

        $suratTugas->peserta()->create([
            'pegawai_id'      => $request->get('nama_pegawai_id'),
            'unit_organisasi' => $request->get('unit_organisasi'),
        ]);

        foreach ($request->get('array_anggaran') as $anggaran) {
            $suratTugas->pembiayaan()->create([
                'kode_akun'          => $anggaran['kode_akun'],
                'nama_akun'          => $anggaran['nama_akun'],
                'pagu_anggaran'      => $anggaran['pagu_anggaran'],
                'perkiraan_anggaran' => $anggaran['perkiraan_anggaran'],
                'realisasi'          => $anggaran['realisasi'],
            ]);
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
