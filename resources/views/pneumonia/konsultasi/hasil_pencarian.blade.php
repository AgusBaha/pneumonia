<x-root-page title="Hasil Test">
    @push('styles')
        <!-- Add Bootstrap CSS link here (make sure to include the appropriate Bootstrap CSS file) -->
    @endpush

    <div class="container">
        <h1 class="text-center">Hasil Pencarian Similarity Tertinggi</h1>

        @if (!empty($result))
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nama Kasus</th>
                            <th>Detail Kasus</th>
                            <th>Gejala Dipilih</th>
                            <th>Bobot Gejala</th>
                            <th>Similarity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $result['kasus'] }}</td>
                            <td>{{ $result['detailBasisKasus'] }}</td>
                            <td>
                                <ul>
                                    @foreach ($result['selectedGejala'] as $gejala)
                                        <li>{{ $gejala['nama_gejala'] }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    @foreach ($result['selectedGejala'] as $gejala)
                                        <li>{{ $gejala['bobot'] }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>{{ $result['similarity'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-center mt-3">Tidak ada hasil similarity yang ditemukan.</p>
        @endif
    </div>

    @push('scripts')
        <!-- Add Bootstrap JavaScript and Popper.js if needed (make sure to include the appropriate Bootstrap JS files) -->
    @endpush
</x-root-page>
