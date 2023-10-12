<x-root-page title="informasi">
    @push('styles')
    @endpush
    <!-- END Section with four info areas left & one card right with image and waves -->
    <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
    <section class="pb-5 position-relative mx-n3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-start mb-5 mt-5">
                    <h3 class=" z-index-1 position-relative">Disease Information</h3>
                    <p class=" opacity-8 mb-0">The following is information about diseases that are characteristic of
                        pneumonia.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="card card-profile mt-4">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mt-n5">
                                <a href="javascript:;">
                                    <div class="p-3 pe-md-0">
                                        <img class="w-100 border-radius-md shadow-lg"
                                            src="{{ asset('assets/img/flu.jpg') }}" alt="image">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-6 col-12 my-auto">
                                <div class="card-body ps-lg-0">
                                    <h5 class="mb-0">Flu</h5>
                                    {{-- <h6 class="text-info">Flu</h6> --}}
                                    <p class="mb-0">Flu atau influenza adalah infeksi virus yang menyerang hidung,
                                        tenggorokan, dan paru-paru.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="card card-profile mt-lg-4 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mt-n5">
                                <a href="javascript:;">
                                    <div class="p-3 pe-md-0">
                                        <img class="w-100 border-radius-md shadow-lg"
                                            src="{{ asset('assets/img/batuk.jpg') }}" alt="image">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-6 col-12 my-auto">
                                <div class="card-body ps-lg-0">
                                    <h5 class="mb-0">Batuk</h5>
                                    {{-- <h6 class="text-info">Batuk</h6> --}}
                                    <p class="mb-0">Batuk adalah respons alami tubuh untuk mengeluarkan benda asing,
                                        seperti kuman, virus, debu, atau zat iritatif.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6 col-12">
                    <div class="card card-profile mt-4 z-index-2">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mt-n5">
                                <a href="javascript:;">
                                    <div class="p-3 pe-md-0">
                                        <img class="w-100 border-radius-md shadow-lg"
                                            src="{{ asset('assets/img/sakit_tenggorokan.jpg') }}" alt="image">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-6 col-12 my-auto">
                                <div class="card-body ps-lg-0">
                                    <h5 class="mb-0">Sakit Tenggorokan</h5>
                                    {{-- <h6 class="text-info">Athlete</h6> --}}
                                    <p class="mb-0">Nyeri atau iritasi tenggorokan yang dapat muncul ketika menelan
                                        atau tidak, sering disertai dengan infeksi, seperti pilek atau flu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="card card-profile mt-lg-4 mt-5 z-index-2">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mt-n5">
                                <a href="javascript:;">
                                    <div class="p-3 pe-md-0">
                                        <img class="w-100 border-radius-md shadow-lg"
                                            src="{{ asset('assets/img/mengigil.jpg') }}" alt="image">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-6 col-12 my-auto">
                                <div class="card-body ps-lg-0">
                                    <h5 class="mb-0">Menggigil</h5>
                                    {{-- <h6 class="text-info">JS Developer</h6> --}}
                                    <p class="mb-0">Merasa kedinginan, meskipun tidak berada dalam lingkungan dingin,
                                        sering disertai dengan menggigil.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
    <section class="my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <h4>Be the first to see the news</h4>
                    <p class="mb-4">
                        Get the latest information about pneumonia.
                    </p>
                    <div class="row">
                        <div class="col-8">
                            <div class="input-group input-group-outline">
                                <label class="form-label">Email Here...</label>
                                <input type="text" class="form-control mb-sm-0">
                            </div>
                        </div>
                        <div class="col-4 ps-0">
                            <button type="button"
                                class="btn bg-gradient-info mb-0 h-100 position-relative z-index-2">Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 ms-auto">
                    <div class="position-relative">
                        <img class="max-width-50 w-100 position-relative z-index-2"
                            src="{{ asset('assets/img/pneumonia3.jpg') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
    @endpush
</x-root-page>
