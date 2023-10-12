<?php

namespace App\Http\Controllers\pneumonia;

use App\Http\Controllers\Controller;
use App\Models\pneumonia\BasisKasus;
use App\Models\pneumonia\Gejala;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function konsultasi()
    {
        $dataGejala = Gejala::all();
        return view('pneumonia.konsultasi.index', compact('dataGejala'));
    }

    public function calculateSimilarity(Request $request)
    {
        // Mengambil data dari form checkbox yang dipilih
        $selectedGejala = $request->input('selected_gejala');

        // Validasi: Pastikan gejala yang dipilih ada
        if (empty($selectedGejala)) {
            return view('pneumonia.konsultasi.hasil_pencarian', ['result' => null]);
        }

        // Mengambil semua basis kasus dari database
        $basisKasus = BasisKasus::all();

        // Inisialisasi variabel untuk menyimpan hasil similarity tertinggi
        $highestSimilarityResult = null;

        try {
            foreach ($basisKasus as $kasus) {
                $similarity = 0; // Nilai similarity awal

                // Mendapatkan gejala dari basis kasus
                $gejalaKasus = $kasus->gejala;

                // Inisialisasi array untuk menyimpan gejala yang dipilih
                $selectedGejalaData = [];

                // Memeriksa setiap gejala yang dipilih
                foreach ($selectedGejala as $gejalaId) {
                    // Mengambil gejala yang dipilih dari database
                    $gejala = Gejala::find($gejalaId);

                    if ($gejala) {
                        // Cek apakah gejala ada dalam gejala basis kasus
                        $gejalaBasisKasus = $gejalaKasus->where('id', $gejala->id)->first();

                        if ($gejalaBasisKasus) {
                            // Tambahkan bobot gejala yang cocok ke similarity
                            $similarity += $gejalaBasisKasus->bobot;

                            // Simpan gejala yang dipilih beserta bobotnya
                            $selectedGejalaData[] = [
                                'nama_gejala' => $gejala->nama_gejala,
                                'bobot' => $gejalaBasisKasus->bobot,
                            ];
                        }
                    }
                }

                // Periksa apakah similarity saat ini lebih tinggi dari similarity tertinggi yang ada
                if ($highestSimilarityResult === null || $similarity > $highestSimilarityResult['similarity']) {
                    // Simpan hasil pencarian dengan nilai similarity tertinggi
                    $highestSimilarityResult = [
                        'kasus' => $kasus->nama_basis_kasus,
                        'detailBasisKasus' => $kasus->detail_basis_kasus,
                        'similarity' => $similarity,
                        'selectedGejala' => $selectedGejalaData,
                    ];
                }
            }
        } catch (\Exception $e) {
            // Kesalahan terjadi selama perhitungan similarity
            return view('pneumonia.konsultasi.hasil_pencarian', ['result' => null]);
        }

        // Tampilkan hasil pencarian dengan nilai similarity tertinggi
        return view('pneumonia.konsultasi.hasil_pencarian', ['result' => $highestSimilarityResult]);
    }

    public function informasi()
    {
        return view('page.informasi');
    }
}
