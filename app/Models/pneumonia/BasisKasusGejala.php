<?php

namespace App\Models\pneumonia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasisKasusGejala extends Model
{
    use HasFactory;
    protected $table = 'basis_kasus_gejala';
    protected $guarded = [];
}
