<?php

declare(strict_types=1);

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Master\Jabatan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasRoles;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'active',
        'approval_name',
        'atasan_code',
        'email',
        'golongan',
        'group_id',
        'id',
        'jabatan_code',
        'name',
        'nik',
        'nip',
        'password',
        'phone',
        'position',
        'simpeg_id',
        'unit_organisasi',
        'username',
        'user_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'active'   => 'boolean',
        'password' => 'hashed',
    ];

    public function jabatan(): Relations\BelongsTo
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_code', 'code');
    }

    public function atasan(): Relations\BelongsTo
    {
        return $this->belongsTo(Jabatan::class, 'atasan_code', 'code');
    }
}
