<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SyncPegawai
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $data_pegawai = DB::connection('pegawai')->table('v_tblpegawai')->get();

        foreach ($data_pegawai as $pegawai) {
            User::updateOrCreate(['simpeg_id' => $pegawai->id], [
                'name'            => $pegawai->nama,
                'username'        => $pegawai->username,
                'password'        => Hash::make('secret'),
                'unit_organisasi' => $pegawai->unit_organisasi,
                'position'        => $pegawai->jabatan,
                'nip'             => $pegawai->nip,
                'approval_name'   => $pegawai->nama,
                'nik'             => $pegawai->nik,
                'golongan'        => $pegawai->golongan,
                'active'          => $pegawai->status_pegawai === '1',
            ]);
        }
    }
}
