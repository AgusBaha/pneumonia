<x-root-page title="Welcome">
    @push('styles')
    @endpush

    {{-- Count --}}
    <section class="pt-3 pb-4" id="count-stats">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto py-3">
                    <div class="row">
                        <div class="col-md-4 position-relative">
                            <div class="p-3 text-center">
                                <h1 class="text-gradient text-primary"><span id="state1" countTo="70">70</span>+
                                </h1>
                                <h5 class="mt-3">Jumlah Yang Terjangkit</h5>
                                <p class="text-sm font-weight-normal">Angka kejadian pneumonia lebih sering terjadi
                                    di negara
                                    berkembang.
                                </p>
                            </div>
                            <hr class="vertical dark">
                        </div>
                        <div class="col-md-4 position-relative">
                            <div class="p-3 text-center">
                                <h1 class="text-gradient text-primary"><span id="state2" countTo="15">15</span>+
                                </h1>
                                <h5 class="mt-3">Konsultasi</h5>
                                <p class="text-sm font-weight-normal">Jumlah Konsultasi Menggunakan Aplikasi</p>
                            </div>
                            <hr class="vertical dark">
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 text-center">
                                <h1 class="text-gradient text-primary" id="state3" countTo="4">4</h1>
                                <h5 class="mt-3">Pages</h5>
                                <p class="text-sm font-weight-normal">Kemudahan Penggunan aplikasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Konsultasi --}}
    <section class="py-sm-7" id="download-soft-ui">
        <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
            <img src="{{ asset('assets/img/shapes/waves-white.svg') }}" alt="pattern-lines"
                class="position-absolute start-0 top-md-0 w-100 opacity-2">
            <div class="container py-7 postion-relative z-index-2 position-relative">
                <div class="row">
                    <div class="col-md-7 mx-auto text-center">
                        <h3 class="text-white mb-0">Apakah anda menyukai ini</h3>
                        <h3 class="text-white">Deteksi Pneumonia?</h3>
                        <p class="text-white mb-5">Apakah Anda akan melanjutkan berkonsultasi untuk mengetahui anda
                            terjangkit
                            Pneumonia!</p>
                        <a href="Javascript:void(0)" class="btn btn-primary btn-lg mb-3 mb-sm-0">Konsultasi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Info Pneumonia --}}
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-12 my-auto">
                    <h3 class="text-gradient text-primary mb-0">You liked it and</h3>
                    <h3>Want more?</h3>
                    <p class="pe-md-5 mb-4">
                        Pneumonia adalah suatu kondisi peradangan paru-paru yang dapat disebabkan oleh berbagai agen
                        infeksi,
                        seperti bakteri,
                        virus, atau jamur. Gejalanya seringkali melibatkan demam, batuk, dan kesulitan bernapas, dan
                        kondisi ini
                        dapat
                        memengaruhi orang dari berbagai kelompok usia. Pemahaman yang baik tentang faktor risiko,
                        gejala, serta
                        langkah-langkah
                        pencegahan dan pengobatan yang diperlukan sangat penting untuk mengelola pneumonia secara
                        efektif dan
                        meminimalkan
                        dampaknya pada kesehatan paru-paru seseorang.
                    </p>
                    <div class="github-buttons">
                        <a href="Javascript:void(0)" class="btn bg-gradient-primary mb-5 mb-sm-0">Konsultasi</a>
                        <div class="github-button">
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-12 my-auto">
                    <a href="javascript:void(0)">
                        <img class="w-100 border-radius-lg shadow-lg" src="{{ asset('assets/img/pneumonia2.jpg') }}"
                            alt="Product Image">
                    </a>
                </div>
            </div>
        </div>
    </section>


    @push('scripts')
    @endpush
</x-root-page>
