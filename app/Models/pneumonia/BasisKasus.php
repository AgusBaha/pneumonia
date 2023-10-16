<?php

namespace App\Models\pneumonia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasisKasus extends Model
{
    use HasFactory;
    protected $table = 'basis_kasus';
    protected $guarded = [];

    public function gejala()
    {
        return $this->belongsToMany(Gejala::class, 'basis_kasus_gejala'); // Jika Anda memiliki kolom tambahan dalam tabel pivot
    }
}
