<?php

namespace App\Http\Controllers\Dashboard;

use function view;
use App\Models\Pva;
use App\Models\Watchlist;
use App\Models\LaporanKupva;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AhuOnline;
use Illuminate\Contracts\Support\Renderable;

class DashboardController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display the dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request): Renderable
    {
        // Example data fetching from existing models
        $laporanKupvaCount = LaporanKupva::count();
        $pvaCount = Pva::count();
        $watchlistCount = Watchlist::count();
        $ahuOnlineCount = AhuOnline::count();

        // Validate and cast the sorting parameters
        $sortPva = $request->get('sortPva', 'jumlah_aset');
        $orderPva = $request->get('orderPva', 'desc');

        // Ensure sortPva is a string and orderPva is either 'asc' or 'desc'
        $validSortColumns = ['jumlah_aset', 'nama_pva', 'pemegang_saham', 'catatan_kasus', 'flag_anomali_transaksi',
         'tingkat_kepatuhan'];
        $sortPva = in_array($sortPva, $validSortColumns) ? $sortPva : 'jumlah_aset';
        $orderPva = in_array($orderPva, ['asc', 'desc']) ? $orderPva : 'desc';

        $pvas = Pva::orderBy($sortPva, $orderPva)->get();

        return view('dashboard.index', compact('laporanKupvaCount', 'pvaCount', 'watchlistCount', 'ahuOnlineCount'
            , 'pvas', 'sortPva', 'orderPva'));
    }
}