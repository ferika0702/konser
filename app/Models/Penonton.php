<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Penonton extends Model
{
    use HasFactory;
    public static function generateKode()
    {
        return Str::random(6);
    }

    protected $fillable = ['nama', 'email', 'nomer_telepon', 'kode', 'status'];
    protected $table = 'penonton';
}
