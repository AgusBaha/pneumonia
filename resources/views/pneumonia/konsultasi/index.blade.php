<x-root-page title="Konsultasi">
    @push('styles')
    @endpush

    <form action="{{ route('similarity') }}" method="POST">
        @csrf
        <section class="py-7">
            <div class="container">
                <div class="row justify-space-between py-2">
                    <div class="col-lg-4 mx-auto">
                        <div class="input-group input-group-static mb-4">
                            <h6><b> Basis Kasus:</b></h6><br>
                            <div class="input-group input-group-static">
                                <div class="form-check">
                                    @foreach ($dataGejala as $kasus)
                                        <input type="checkbox" class="form-check-input" name="selected_gejala[]"
                                            id="flexCheckDefault" value="{{ $kasus->id }}">
                                        {{ $kasus->nama_gejala }}<br>
                                    @endforeach


                                    <button type="submit" class="btn bg-gradient-primary btn-icon btn-sm mt-2">Proses
                                        Pilihan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>


    @push('scripts')
    @endpush
</x-root-page>
