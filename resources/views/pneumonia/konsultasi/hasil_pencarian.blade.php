<x-root-page title="Hasil Test">
    @push('styles')
    @endpush

    <div class="container">
        <h1>Hasil Pencarian Similarity Tertinggi</h1>

        @if (!empty($result))
            <table class="table">
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
        @else
            <p>Tidak ada hasil similarity yang ditemukan.</p>
        @endif
    </div>

    @push('scripts')
    @endpush
</x-root-page>
