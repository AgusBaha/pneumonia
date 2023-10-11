 <nav
     class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
     <div class="container-fluid px-0">
         <a class="navbar-brand font-weight-bolder ms-sm-3" href="/" rel="tooltip"
             title="Designed and Coded by Creative Tim" data-placement="bottom">
             Pneumonia
         </a>
         <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
             data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
             aria-label="Toggle navigation">
             <span class="navbar-toggler-icon mt-2">
                 <span class="navbar-toggler-bar bar1"></span>
                 <span class="navbar-toggler-bar bar2"></span>
                 <span class="navbar-toggler-bar bar3"></span>
             </span>
         </button>
         <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
             <ul class="navbar-nav navbar-nav-hover ms-auto">
                 <li class="nav-item dropdown dropdown-hover mx-2">
                     <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages"
                         data-bs-toggle="dropdown" aria-expanded="false">
                         <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                         Pages
                         <img src="{{ asset('assets/img/down-arrow-dark.svg') }}" alt="down-arrow"
                             class="arrow ms-auto ms-md-2">
                     </a>
                     <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3"
                         aria-labelledby="dropdownMenuPages">
                         <div class="d-none d-lg-block">
                             <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                 Landing Pages
                             </h6>
                             <a href="Javascript:void(0)" class="dropdown-item border-radius-md">
                                 <span>Tentang Kami</span>
                             </a>
                             <a href="Javascript:void(0)" class="dropdown-item border-radius-md">
                                 <span>Informasi Penyakit</span>
                             </a>
                             <a href="{{ route('konsultasi') }}" class="dropdown-item border-radius-md">
                                 <span>Konsultasi</span>
                             </a>
                             <h6
                                 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                 Account
                             </h6>
                             <a href="{{ route('login') }}" class="dropdown-item border-radius-md">
                                 <span>Masuk</span>
                             </a>
                         </div>

                         <div class="d-lg-none">
                             <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                 Landing Pages
                             </h6>

                             <a href="Javascript:void(0)" class="dropdown-item border-radius-md">
                                 <span>Tentang Kami</span>
                             </a>
                             <a href="Javascript:void(0)" class="dropdown-item border-radius-md">
                                 <span>Informasi Penyakit</span>
                             </a>
                             <a href="{{ route('konsultasi') }}" class="dropdown-item border-radius-md">
                                 <span>Konsultasi</span>
                             </a>

                             <h6
                                 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                 Account
                             </h6>
                             <a href="{{ route('login') }}" class="dropdown-item border-radius-md">
                                 <span>Masuk</span>
                             </a>

                         </div>

                     </div>
                 </li>

                 <li class="nav-item dropdown dropdown-hover mx-2">
                     <a href="{{ route('konsultasi') }}"
                         class="nav-link ps-2 d-flex cursor-pointer align-items-center font-weight-bold">
                         <i class="material-icons opacity-6 me-2 text-md">article</i>
                         Konsultasi
                         {{-- <!-- <img src="{{ asset('assets/') }}img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2"> --> --}}
                     </a>
                 </li>
                 <li class="nav-item my-auto ms-3 ms-lg-0">

                     <a href="{{ route('login') }}"
                         class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Login</a>

                 </li>
             </ul>
         </div>
     </div>
 </nav>
