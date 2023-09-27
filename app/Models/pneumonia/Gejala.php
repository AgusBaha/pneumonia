<?php

namespace App\Models\pneumonia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;
    protected $table = "gejala";
    protected $guarded = [];
}
