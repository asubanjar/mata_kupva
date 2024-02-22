<?php

declare(strict_types=1);

namespace App\Http\Controllers\Kearsipan\Kedinasan\Peserta;

use App\Http\Controllers\Controller;
use App\Models\Kearsipan\Registrasi\Peserta;
use App\Models\Kearsipan\Registrasi\SuratTugas;
use App\Models\User;
use Illuminate\Http\Request;

use function view;

class SuratTugasPesertaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, SuratTugas $surat_tugas)
    {
        $data = [
            'surat_tugas' => $surat_tugas,
            'users'       => User::orderBy('name')->get()->unique('name'),
            'pesertas'    => Peserta::where('surat_tugas_id', $surat_tugas->id)->get(),
        ];

        return view('kearsipan/kedinasan/peserta/index', $data);
    }
}
