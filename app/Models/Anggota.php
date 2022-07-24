<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $fillable = [
        "npm",
        "nama",
        "email",
        "no_hp",
        "alamat",
        "status",
        "user_id"
    ];
}
