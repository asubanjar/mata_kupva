<?php

namespace App\Http\Controllers\Kearsipan\Kedinasan\Peserta;

use App\Http\Controllers\Controller;
use App\Models\Kearsipan\Registrasi\SuratTugas;
use Illuminate\Http\Request;

class SuratTugasPesertaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, SuratTugas $surat_tugas)
    {
        return view(
            'kearsipan/kedinasan/peserta/index',
            compact(
                'surat_tugas',
            )
        );
    }
}
