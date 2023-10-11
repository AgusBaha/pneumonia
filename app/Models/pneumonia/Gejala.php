<?php

namespace App\Models\pneumonia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;
    protected $table = "gejala";
    protected $guarded = [];

    // Kode Gejala Otomatis
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($gejala) {
            if (!$gejala->kode_gejala) {
                $lastGejala = static::orderBy('id', 'desc')->first();
                $lastNumber = $lastGejala ? intval(substr($lastGejala->kode_gejala, 2)) : 0;
                $gejala->kode_gejala = 'G-' . ($lastNumber + 1);
            }
        });
    }

    public function basisKasus()
    {
        return $this->belongsToMany(BasisKasus::class, 'basis_kasus_gejala'); // Jika Anda memiliki kolom tambahan dalam tabel pivot
    }
}
