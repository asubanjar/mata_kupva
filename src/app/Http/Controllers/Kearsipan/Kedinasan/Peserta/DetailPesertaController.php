<?php

declare(strict_types=1);

namespace App\Http\Controllers\Kearsipan\Kedinasan\Peserta;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DetailPesertaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, User $user)
    {
        return response()->json(['success' => true, 'data' => $user]);
    }
}
