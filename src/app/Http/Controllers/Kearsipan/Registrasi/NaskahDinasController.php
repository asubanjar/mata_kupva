<?php

declare(strict_types=1);

namespace App\Http\Controllers\Kearsipan\Registrasi;

use App\Enums\JenisNaskahEnum;
use App\Enums\StatusNaskahDinasEnum;
use App\Http\Controllers\Controller;
use App\Models\Kearsipan\KonsepNaskah;
use App\Models\Master\Classification;
use App\Models\Master\JenisNaskah;
use App\Models\Master\SatuanUnit;
use App\Models\Master\Sifat;
use App\Models\Master\Urgensi;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;
use Yajra\DataTables\Facades\DataTables;

use function date;
use function implode;
use function rand;
use function redirect;
use function response;
use function view;

class NaskahDinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = KonsepNaskah::with(
        //     'jenisNaskah',
        //     'penandatangan',
        // )->get();

        // dd($data[0]);

        return view('kearsipan/registrasi/naskah-dinas/index');
    }

    /**
     * Display a listing of the resource.
     */
    public function data(): JsonResponse
    {
        $data = KonsepNaskah::with(
            'jenisNaskah',
            'penandatangan',
        )->get();

        return DataTables::of($data)
        ->addColumn('jenis_naskah_name', static function ($a) {
            return $a->jenisNaskah->name ?? 'N/A';
        })
        ->addColumn('penandatangan_name', static function ($b) {
            return $b->penandatangan->name ?? 'N/A';
        })
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'classifications'   => Classification::all(),
            'jenis_naskahs'     => JenisNaskah::all(),
            'receivers'         => User::whereIn('group_id', ['3'])->get(),
            'satuan_units'      => SatuanUnit::all(),
            'sifats'            => Sifat::all(),
            'signers'           => User::all(),
            'urgensis'          => Urgensi::all(),
        ];

        return view('kearsipan/registrasi/naskah-dinas/create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'jenis_naskah_code'     => 'required|exists:jenis_naskahs,code',
            'nomor_naskah'          => 'required',
            'tanggal_naskah'        => 'required',
            'is_public'             => 'required',
            'jumlah_lampiran'       => 'nullable',
            'satuan_unit_code'      => $request->get('jumlah') ? 'required' : 'nullable',
            'classification_id'     => 'required|exists:classifications,id',
            'urgensi_code'          => 'required|exists:urgensis,code',
            'sifat_code'            => 'required|exists:sifats,code',
            'hal'                   => 'required',
            'jabatan_to_code'       => 'required',
            'jabatan_cc_code'       => 'nullable',
            'signer_id'             => 'required|exists:users,id',
            'jenjang'               => 'required',
            'ttd_page'              => 'required|numeric',
            'signer_quantity'       => 'required|numeric',
            'note'                  => 'nullable',
        ]);

        $nid = $user->id . date('YmdHis') . rand(10000000000000, 99999999999999);

        if ($request->get('jenjang') === 'AL') {
            $approverId = User::where('group_id', '3')
                            ->where('jabatan_code', $user->atasan_code)
                            ->firstOrFail()->id;
        } elseif ($request->get('jenjang') === 'L') {
            $approverId = $request->get('approver_id');
        } else {
            $approverId = $user->id;
        }

        KonsepNaskah::create([
            'nid'                   => $nid,
            'gir_id'                => $nid,
            'jenis_naskah_code'     => $request->get('jenis_naskah_code'),
            'jumlah_lampiran'       => $request->get('jumlah_lampiran'),
            'satuan_unit_code'      => $request->get('satuan_unit_code'),
            'sifat_code'            => $request->get('sifat_code'),
            'urgensi_code'          => $request->get('urgensi_code'),
            'receiver_as'           => JenisNaskahEnum::NASKAH_DINAS_UPLOAD,
            'classification_id'     => $request->get('classification_id'),
            'jabatan_from_code'     => $user->jabatan_code,
            'jabatan_to_code'       => ! empty($request->get('jabatan_to_code')) ? implode(
                ',',
                $request->get('jabatan_to_code'),
            ) : null,
            'jabatan_cc_code'       => ! empty($request->get('jabatan_cc_code')) ? implode(
                ',',
                $request->get('jabatan_cc_code'),
            ) : null,
            'approve_people_id'     => $approverId,
            'jenjang'               => $request->get('jenjang'),
            'status_naskah'         => StatusNaskahDinasEnum::DRAFT,
            'registration_date'     => date('Y-m-d H:i:s'),
            'hal'                   => $request->get('hal'),
            'tanggal_naskah'        => $request->get('tanggal_naskah'),
            'created_by'            => $user->id,
            'nomor_naskah'          => $request->get('nomor_naskah'),
            'location'              => 'Jakarta',
            'ttd_page'              => $request->get('ttd_page'),
            'signer_id'             => $request->get('signer_id'),
            'note'                  => $request->get('note'),
            'is_public'             => $request->get('is_public'),
            'signer_quantity'       => $request->get('signer_quantity'),
        ]);

        return redirect(
            'kearsipan/registrasi/naskah-dinas',
        )->with('success', 'Sukses melakukan registrasi naskah dinas');
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
    public function destroy(KonsepNaskah $naskah_dina): JsonResponse
    {
        try {
            $naskah_dina->delete();

            return response()->json(['success' => 'Record deleted successfully.']);
        } catch (Throwable) {
            return response()->json(['error' => 'Record could not be deleted.'], 500);
        }
    }
}
