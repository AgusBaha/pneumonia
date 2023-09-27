<x-apps-layout title="Create Gejala">
    @push('style')
    @endpush
    <div class="w-full px-6 py-6 mx-auto">
        <!-- table 1 -->

        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">

                <div class="max-w-full px-3 mb-4 lg:mb-0 lg:w-full lg:flex-none">
                    <div class="max-w-full px-3 mb-4 lg:mb-0 lg:w-full lg:flex-none">
                        <div
                            class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                            <div
                                class="p-4 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                                <div class="flex flex-wrap -mx-3">
                                    <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                                        <h6 class="mb-0">Create New Gejala</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-auto p-4">
                                <form role="form" method="POST" action="{{ route('gejala.store') }}">
                                    @csrf
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700"
                                                for="gejala">Gejala</label>
                                            <div class="mb-4">
                                                <input type="text" id="gejala" name="nama_gejala"
                                                    :value="old('gejala')" required autofocus autocomplete="username"
                                                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                                    placeholder="gejala" aria-label="gejala"
                                                    aria-describedby="gejala-addon" />
                                            </div>
                                        </div>
                                        <div class="max-w-full px-3 md:w-1/2 md:flex-none">
                                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700"
                                                for="bobot">Bobot</label>
                                            <div class="mb-4">
                                                <input type="number" id="bobot" name="bobot"
                                                    :value="old('bobot')" required autofocus autocomplete="username"
                                                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                                    placeholder="bobot" aria-label="bobot"
                                                    aria-describedby="bobot-addon" />
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
    </div>

    @push('script')
    @endpush
</x-apps-layout>
