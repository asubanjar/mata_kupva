<?php

declare(strict_types=1);

namespace App\Http\Controllers\Kearsipan\Kedinasan\Peserta;

use App\Http\Controllers\Controller;
use App\Models\Kearsipan\Registrasi\SuratTugas;
use App\Models\User;
use Illuminate\Http\Request;

use function view;

class SuratTugasPesertaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, SuratTugas $suratTugas)
    {
        $pesertas = $suratTugas
            ->tanggalTugas()
            ->with('pesertas')
            ->get()
            ->pluck('pesertas')
            ->flatten()
            ->unique('id');

        $data = [
            'surat_tugas' => $suratTugas,
            'users'       => User::orderBy('name')->get()->unique('name'),
            'pesertas'    => $pesertas,
        ];

        return view('kearsipan/kedinasan/peserta/index', $data);
    }
}
