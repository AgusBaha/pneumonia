<x-apps-layout title="Tabel Gejala">
    @push('styles')
    @endpush

    <div class="w-full px-6 py-6 mx-auto">
        <!-- table 1 -->

        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">

                <div class="max-w-full px-3 mb-4 lg:mb-0 lg:w-full lg:flex-none">
                    <div
                        class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-4 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <div class="flex flex-wrap">
                                <div class="flex-none w-1/2 max-w-full px-3 text-left">
                                    <a class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25"
                                        href="{{ route('gejala.create') }}"> <i class="fas fa-plus"> </i>&nbsp;&nbsp;Add
                                        New Gejala</a>
                                </div>
                                <div class="flex-none w-1/2 max-w-full px-3 text-right">
                                    <form action="{{ route('gejala.index') }}" method="GET">
                                        <div class="relative flex items-stretch w-full">
                                            <input type="text" name="search" placeholder="Search..."
                                                class="block w-full border-2 border-gray-200 rounded py-2 px-4 placeholder-gray-500 focus:outline-none focus:ring focus:ring-indigo-300 focus:border-indigo-300 focus:placeholder-gray-400">
                                            <button type="submit" class="absolute top-0 right-0 p-2 text-gray-600">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="flex-auto p-4">
                            <div class="flex-auto p-4 overflow-x-auto">
                                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                    <thead
                                        class="max-w-full items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                        <tr>
                                            <th
                                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                No.</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                ID Gejala</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Gejala</th>
                                            <th
                                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Bobot</th>
                                            <th
                                                class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse ($dataGejala as $data_gejala)
                                            <tr>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <div class="flex px-2 py-1">
                                                        <div class="flex flex-col justify-center">
                                                            <h6 class="mb-0 text-sm leading-normal">
                                                                {{ $startingNumber++ }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p class="mb-0 text-xs font-semibold leading-tight">
                                                        {{ $data_gejala->kode_gejala }}</p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p class="mb-0 text-xs font-semibold leading-tight">
                                                        {{ $data_gejala->nama_gejala }}</p>
                                                </td>
                                                <td
                                                    class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p class="mb-0 text-xs font-semibold leading-tight">
                                                        {{ $data_gejala->bobot }}</p>
                                                </td>
                                                <td
                                                    class="p-1 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <div class="ml-auto text-center">
                                                        <a class="inline-block px-2 py-1 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700"
                                                            href="{{ route('gejala.edit', $data_gejala->id) }}"><i
                                                                class="mr-2 fas fa-pencil-alt text-slate-700"
                                                                aria-hidden="true"></i>Edit</a>
                                                        <form action="{{ route('gejala.destroy', $data_gejala->id) }}"
                                                            method="POST"
                                                            class="relative z-10 inline-block px-2 py-1 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm('Apakah Anda yakin ingin menghapus ini?')"><i
                                                                    class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Hapus</button>
                                                        </form>

                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"
                                                    colspan="4">
                                                    <div
                                                        class="flex items-center justify-center text-xs font-semibold leading-tight text-slate-400 h-full">
                                                        Data gejala tidak tersedia!
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                <nav aria-label="Page navigation example">
                                    <ul class="inline-flex -space-x-px text-sm">
                                        <li>
                                            <a href="{{ $dataGejala->previousPageUrl() }}"
                                                class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover-text-gray-700 dark:bg-gray-800 dark-border-gray-700 dark-text-gray-400 dark:hover-bg-gray-700 dark:hover-text-white @if (!$dataGejala->previousPageUrl()) opacity-50 cursor-not-allowed @endif">Previous</a>
                                        </li>
                                        @foreach ($dataGejala->getUrlRange(1, $dataGejala->lastPage()) as $page => $url)
                                            <li>
                                                <a href="{{ $url }}"
                                                    aria-current="{{ $page == $dataGejala->currentPage() ? 'page' : null }}"
                                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover-bg-gray-100 hover-text-gray-700 dark-bg-gray-800 dark-border-gray-700 dark-text-gray-400 dark-hover-bg-gray-700 dark-hover-text-white @if ($page == $dataGejala->currentPage()) text-blue-600 bg-blue-50 border-blue-600 hover-bg-blue-100 hover-text-blue-700 dark-border-blue-700 dark-bg-gray-700 dark-text-white @endif">{{ $page }}</a>
                                            </li>
                                        @endforeach
                                        <li>
                                            <a href="{{ $dataGejala->nextPageUrl() }}"
                                                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover-bg-gray-100 hover-text-gray-700 dark-bg-gray-800 dark-border-gray-700 dark-text-gray-400 dark-hover-bg-gray-700 dark-hover-text-white @if (!$dataGejala->nextPageUrl()) opacity-50 cursor-not-allowed @endif">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    @endpush
</x-apps-layout>
