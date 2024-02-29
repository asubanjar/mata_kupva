<?php

declare(strict_types=1);

namespace App\Http\Controllers\Kearsipan\Registrasi;

use App\Http\Controllers\Controller;
use App\Models\Kearsipan\Registrasi\SuratTugas;
use App\Models\Master\JenisKegiatan;
use App\Models\Master\JenisPerjadin;
use App\Models\Master\KotaKabupaten;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

use function explode;
use function redirect;
use function view;

class SuratTugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data = ['surat_tugas' => SuratTugas::all()->sortByDesc('created_at')];

        return view('kearsipan/kotak-keluar/surat-tugas/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'kegiatans' => JenisKegiatan::all(),
            'kotakabs'  => KotaKabupaten::all(),
            'perjadins' => JenisPerjadin::all(),
        ];

        return view('kearsipan/registrasi/permohonan-st/create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'unit_kerja'         => 'required',
            'no_nodis'           => 'required',
            'tgl_nodis'          => 'required',
            'perihal_nodis'      => 'required',
            'dasar_penugasan'    => 'required',
            'detail_penugasan'   => 'required',
            'nama_kegiatan_id'   => 'required',
            'detail_kegiatan'    => 'required',
            'jenis_perjadin_id'  => 'required',
            'jenis_transportasi' => 'required',
            'jenis_pembiayaan'   => 'required',
            'target_kinerja'     => 'required',
            'nama_kota'          => $request->get('nama_negara') ? 'nullable' : 'required',
            'nama_negara'        => $request->get('nama_negara') ? 'required' : 'nullable',
        ]);

        $suratTugas = SuratTugas::create([
            'unit_kerja'         => $request->get('unit_kerja'),
            'no_nodis'           => $request->get('no_nodis'),
            'tgl_nodis'          => $request->get('tgl_nodis'),
            'perihal_nodis'      => $request->get('perihal_nodis'),
            'dasar_penugasan'    => $request->get('dasar_penugasan'),
            'detail_penugasan'   => $request->get('detail_penugasan'),
            'nama_kegiatan_id'   => $request->get('nama_kegiatan_id'),
            'detail_kegiatan'    => $request->get('detail_kegiatan'),
            'jenis_perjadin_id'  => $request->get('jenis_perjadin_id'),
            'jenis_transportasi' => $request->get('jenis_transportasi'),
            'jenis_pembiayaan'   => $request->get('jenis_pembiayaan'),
            'target_kinerja'     => $request->get('target_kinerja'),
            'nama_kota'          => $request->get('nama_negara') ?
                $request->get('nama_negara') : $request->get('nama_kota'),

        ]);

        if ($request->get('jenis_pembiayaan') === 'Biaya PPATK') {
            foreach ($request->get('array_anggaran') as $anggaran) {
                $suratTugas->pembiayaan()->create([
                    'kode_akun'          => $anggaran['kode_akun'],
                    'nama_akun'          => $anggaran['nama_akun'],
                    'pagu_anggaran'      => $anggaran['pagu_anggaran'],
                    'perkiraan_anggaran' => $anggaran['perkiraan_anggaran'],
                    'realisasi'          => $anggaran['realisasi'],
                ]);
            }
        }

        foreach (explode(', ', $request->get('tgl_st_start')) as $tgl) {
            $formattedDate = Carbon::createFromFormat('Y-m-d', $tgl)->format('Y-m-d');
            $suratTugas->tanggalTugas()->create(['tanggal' => $formattedDate]);
        }

        return redirect(
            'kearsipan/surat-tugas/' . $suratTugas->id . '/peserta',
        )->with('success', 'Sukses menambahkan ST, silahkan menambahkan peserta');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $data = [
            'st' => SuratTugas::findOrFail($id),
        ];

        return view('kearsipan/kotak-keluar/surat-tugas/detail', $data);
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
