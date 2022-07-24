<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'level',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // This method will help you to get complete table data as per need
    public function getDaftar()
    {
        $data = Anggota::where('user_id', $this['id'])->first();

        if (empty($data)) {
            return 0;
        } else {
            if ($data->status == 0) {
                return 0;
            } else if ($data->status == 1) {
                return 1;
            } else {
                return 2;
            }
        }
    }

    // Accessor
    public function getDaftarAttribute()
    {
        return $this->getDaftar() ?? null;
    }
}
