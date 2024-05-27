<?php

namespace App\Http\Controllers\Watchlist;

use App\Http\Controllers\Controller;
use App\Models\MonitoringPimpinan\Monitoring\Check;
use Illuminate\Http\Request;

class CheckFinishController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Check $check, string $status)
    {
        if ($status === 'finish') {
            $finish = now();
        } else {
            $finish = null;
        }

        $check->update([
            'finish'    => $finish,
        ]);

        return redirect(
            '/watchlist/subject/action/' . $check->action_id . '/check'
        )->with('success', 'Sukses mengubah status cek');
    }
}