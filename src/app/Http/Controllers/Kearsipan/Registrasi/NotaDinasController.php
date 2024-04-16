<?php

declare(strict_types=1);

namespace App\Http\Controllers\Kearsipan\Registrasi;

use App\Http\Controllers\Controller;
use App\Models\Master\Classification;
use App\Models\Master\JenisNaskah;
use App\Models\Master\SatuanUnit;
use App\Models\Master\Sifat;
use App\Models\Master\Urgensi;
use App\Models\User;
use Illuminate\Http\Request;

use function view;

class NotaDinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): void
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'classifications'   => Classification::all(),
            'jenis_naskahs'      => JenisNaskah::all(),
            'receivers'         => User::whereIn('group_id', ['3'])->get(),
            'satuan_units'      => SatuanUnit::all(),
            'sifats'            => Sifat::all(),
            'signers'           => User::all(),
            'urgensis'          => Urgensi::all(),
        ];

        return view('kearsipan/registrasi/nota-dinas/create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): void
    {
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
