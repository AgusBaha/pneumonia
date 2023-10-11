<x-apps-layout title="Edit Basis Kasus">
    @push('styles')
    @endpush
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div class="max-w-full px-3 mb-4 lg:mb-0 lg:w-full lg:flex-none">
                    <div
                        class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-4 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <div class="flex flex-wrap -mx-3">
                                <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                                    <h6 class="mb-0">Edit Basis Kasus</h6>
                                </div>
                            </div>
                        </div>
                        <div class="flex-auto p-4">
                            <form role="form" method="POST"
                                action="{{ route('basiskasus.update', $basiskasus->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="flex flex-wrap -mx-3">
                                    <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                        <label class="mb-2 ml-1 font-bold text-xs text-slate-700"
                                            for="idBasisKasus">Kode Basis Kasus</label>
                                        <div class="mb-4">
                                            <input type="text" id="idBasisKasus" name="id_basis_kasus" required
                                                readonly value="{{ $basiskasus->id_basis_kasus }}"
                                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                                placeholder="id" aria-label="id" aria-describedby="id-addon" />
                                            @error('id_basis_kasus')
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="max-w-full px-3 md:w-1/2 md:flex-none">
                                        <label class="mb-2 ml-1 font-bold text-xs text-slate-700"
                                            for="namaBasisKasus">Nama Basis Kasus</label>
                                        <div class="mb-4">
                                            <input type="text" id="namaBasisKasus" name="namaBasisKasus"
                                                value="{{ $basiskasus->nama_basis_kasus }}" required autofocus
                                                autocomplete="username"
                                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                                placeholder="namaBasisKasus" aria-label="namaBasisKasus"
                                                aria-describedby="namaBasisKasus-addon" />
                                            @error('namaBasisKasus')
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                        <label class="mb-2 ml-1 font-bold text-xs text-slate-700"
                                            for="detailBasisKasus">Detail Basis Kasus</label>
                                        <div class="mb-4">
                                            <textarea id="detailBasisKasus" name="detail_basis_kasus" required autofocus
                                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                                placeholder="Detail Basis Kasus" aria-label="id" aria-describedby="id-addon" style="height: 7.14em;">{{ $basiskasus->detail_basis_kasus }}</textarea>
                                            @error('detailBasisKasus')
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="max-w-full px-3 md:w-1/2 md:flex-none">
                                        <label class="mb-2 ml-1 font-bold text-xs text-slate-700"
                                            for="gejala">Gejala</label>
                                        <div class="mb-4">
                                            <select id="gejala" name="gejala[]" required autofocus multiple
                                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                                aria-label="gejala" aria-describedby="gejala-addon">
                                                <option value="" disabled>Pilih Gejala</option>
                                                @foreach ($gejalaOptions as $gejala)
                                                    <option value="{{ $gejala->id }}"
                                                        {{ in_array($gejala->id, $basiskasus->gejala->pluck('id')->toArray()) ? 'selected' : '' }}>
                                                        {{ $gejala->nama_gejala }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('gejala')
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit"
                                            class="inline-block w-full ml-2 px-6 py-3 mt-1 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                // Fungsi untuk menghasilkan ID Basis
                function generateId() {
                    $.ajax({
                        type: "GET", // Atau "POST" tergantung pada kebutuhan Anda
                        url: "/generate-id-basis", // Ganti dengan URL yang sesuai
                        success: function(data) {
                            $("#idBasisKasus").val(data); // Set nilai input ID Basis
                            // $("#generatedId").text(data); // Tampilkan ID Basis di dalam span
                        }
                    });
                }

                // Panggil fungsi generateId saat halaman dimuat
                generateId();
            });
        </script> --}}
    @endpush
</x-apps-layout>
