<x-root-page title="Konsultasi">
    @push('styles')
    @endpush

    <form action="{{ route('similarity') }}" method="POST">
        @csrf
        <label>Pilih Basis Kasus:</label><br>
        <div class="form-check flex flex-wrap">
            @foreach ($dataGejala as $kasus)
                <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5">
                    <input type="checkbox" class="form-check-input" name="selected_gejala[]" id="flexCheckDefault"
                        value="{{ $kasus->id }}">
                    {{ $kasus->nama_gejala }}<br>
                </div>
            @endforeach
            <button type="submit" class="btn bg-gradient-primary btn-icon btn-sm mt-1">Proses Pilihan</button>
        </div>
    </form>


    @push('scripts')
    @endpush
</x-root-page>
