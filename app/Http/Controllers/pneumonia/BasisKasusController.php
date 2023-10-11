<?php

namespace App\Http\Controllers\pneumonia;

use App\Http\Controllers\Controller;
use App\Models\pneumonia\BasisKasus;
use App\Models\pneumonia\Gejala;
use Illuminate\Http\Request;

class BasisKasusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search'); // Ambil nilai pencarian dari request
        $dataBasisKasus = BasisKasus::when($search, function ($query) use ($search) {
            $query->where('id_basis_kasus', 'like', '%' . $search . '%')
                ->orWhere('nama_basis_kasus', 'like', '%' . $search . '%')
                ->orWhere('detail_basis_kasus', 'like', '%' . $search . '%');
        })->latest()->paginate(10);

        $dataBasisKasus->withPath(route('basiskasus.index', ['search' => $search])); // Mengatur URL pagination dengan parameter pencarian
        $dataBasisKasus->appends(['search' => $search]); // Menyertakan query parameter saat berpindah halaman

        $current_page = $dataBasisKasus->currentPage();
        $perPage = $dataBasisKasus->perPage();
        $startingNumber = ($current_page - 1) * $perPage + 1;

        return view('pneumonia.basisKasus.index', compact('dataBasisKasus', 'startingNumber', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gejalaOptions = Gejala::all();
        return view('pneumonia.basisKasus.create', compact('gejalaOptions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $basisKasus = new BasisKasus();
            $basisKasus->id_basis_kasus = $request->input('id_basis_kasus');
            $basisKasus->nama_basis_kasus = $request->input('namaBasisKasus');
            $basisKasus->detail_basis_kasus = $request->input('detail_basis_kasus');
            $basisKasus->save();

            // Simpan relasi dengan gejala yang dipilih
            $basisKasus->gejala()->sync($request->input('gejala'));

            return redirect()->route('basiskasus.index')->with('success', 'Data berhasil diperbarui');
        } catch (\Exception $e) {
            // Tangani kesalahan di sini, misalnya log pesan kesalahan
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
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
    public function edit(BasisKasus $basiskasus, $id)
    {
        $gejalaOptions = Gejala::all();
        $basiskasus = BasisKasus::find($id);

        if (!$basiskasus) {
            return redirect()->route('basiskasus.index')->with('error', 'Data tidak ditemukan');
        }

        return view('pneumonia.basisKasus.edit', compact('basiskasus', 'gejalaOptions'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $basisKasus = BasisKasus::find($id);
            // Pastikan $basisKasus ditemukan
            if (!$basisKasus) {
                return redirect()->route('basiskasus.index')->with('error', 'Data tidak ditemukan');
            }

            // Update data berdasarkan input dari form
            $basisKasus->id_basis_kasus = $request->input('id_basis_kasus');
            $basisKasus->nama_basis_kasus = $request->input('namaBasisKasus');
            $basisKasus->detail_basis_kasus = $request->input('detail_basis_kasus');
            $basisKasus->save();

            // Simpan relasi dengan gejala yang dipilih
            $basisKasus->gejala()->sync($request->input('gejala'));

            return redirect()->route('basiskasus.index')->with('success', 'Data berhasil diperbarui');
        } catch (\Exception $e) {
            // Tangani kesalahan di sini, misalnya log pesan kesalahan
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $basisKasus = BasisKasus::find($id);
            // Pastikan $basisKasus ditemukan
            if (!$basisKasus) {
                return redirect()->route('basiskasus.index')->with('error', 'Data tidak ditemukan');
            }

            // Hapus data
            $basisKasus->delete();

            return redirect()->route('basiskasus.index')->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            // Tangani kesalahan di sini, misalnya log pesan kesalahan
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function generateId()
    {
        $lastBasis = BasisKasus::orderBy('id', 'desc')->first();

        if ($lastBasis) {
            $lastId = $lastBasis->id_basis_kasus;
            $lastNumericPart = intval(substr($lastId, 3)); // Mengambil bagian numerik dan mengubahnya menjadi integer
            $nextNumericPart = $lastNumericPart + 1;
            $newId = 'BK-' . $nextNumericPart;
        } else {
            $newId = 'BK-1';
        }

        // Kemudian, Anda dapat mengembalikan $newId
        return response()->json($newId);
    }
}
