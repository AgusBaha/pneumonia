<?php

namespace App\Http\Controllers;

use App\Models\pneumonia\BasisKasus;
use App\Models\pneumonia\Gejala;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function dashboard()
    {
        $countGejala = Gejala::count();
        $countKasus = BasisKasus::count();
        $countUser = User::count();

        // Mendapatkan data sebelumnya dari cache atau database
        $previousCountGejala = Cache::get('previousCountGejala', 0);
        $previousCountKasus = Cache::get('previousCountKasus', 0);
        $previousCountUser = Cache::get('previousCountUser', 0);

        // Menghitung persentase kenaikan atau penurunan
        $percentChangeGejala = $previousCountGejala != 0 ? (($countGejala - $previousCountGejala) / $previousCountGejala) * 100 : 0;
        $percentChangeKasus = $previousCountKasus != 0 ? (($countKasus - $previousCountKasus) / $previousCountKasus) * 100 : 0;
        $percentChangeUser = $previousCountUser != 0 ? (($countUser - $previousCountUser) / $previousCountUser) * 100 : 0;

        // Simpan data saat ini untuk digunakan sebagai data sebelumnya selanjutnya
        Cache::put('previousCountGejala', $countGejala, now()->addMinutes(60)); // Gantilah dengan waktu yang sesuai
        Cache::put('previousCountKasus', $countKasus, now()->addMinutes(60)); // Gantilah dengan waktu yang sesuai
        Cache::put('previousCountUser', $countUser, now()->addMinutes(60)); // Gantilah dengan waktu yang sesuai

        return view('dashboard', compact('countGejala', 'countKasus', 'countUser', 'percentChangeGejala', 'percentChangeKasus', 'percentChangeUser'));
    }
}
