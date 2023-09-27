<?php

namespace App\Http\Controllers\pneumonia;

use App\Http\Controllers\Controller;
use App\Models\pneumonia\Gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Gejala::latest()->paginate(10);
        return view('gejala.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gejala.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data dari $request
        $request->validate([
            'nama_gejala' => 'required|string|max:255',
            'bobot' => 'required|numeric',
            //Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Simpan data gejala baru ke dalam database
        Gejala::create([
            'nama_gejala' => $request->input('nama_gejala'),
            'bobot' => $request->input('bobot'),
            //Tambahkan kolom lainnya sesuai kebutuhan
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('gejala.index')->with('success', 'Gejala baru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gejala $gejala)
    {
        return view('gejala.edit', compact('gejala'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gejala $gejala)
    {
        // Validasi data dari $request
        $request->validate([
            'nama_gejala' => 'required|string|max:255',
            'bobot' => 'required|numeric',
            //Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Perbarui data gejala
        $gejala->update([
            'nama_gejala' => $request->input('nama_gejala'),
            'bobot' => $request->input('bobot'),
            //Tambahkan kolom lainnya sesuai kebutuhan
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('gejala.index')->with('success', 'Gejala berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gejala $gejala)
    {
        // Hapus gejala dari database
        $gejala->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('gejala.index')->with('success', 'Gejala berhasil dihapus.');
    }
}
