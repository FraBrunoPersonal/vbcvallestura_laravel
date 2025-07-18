<x-layouts.website>
    <div
        class="container mx-auto lg:my-auto sm:my-auto my-10 px-4 sm:px-8 lg:px-16 py-10 sm:py-20 lg:py-40 overflow-x-hidden overflow-y-auto">
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-800">Direttivo</h1>
        <div class="w-16 sm:w-20 lg:w-24 h-1 bg-gray-800 mb-4 sm:mb-6 lg:mb-8"></div>
        <div class="flex justify-center mb-4 sm:mb-6 lg:mb-8">
            <figure class="w-full max-w-lg">
                <img class="h-auto w-full rounded-lg" src="{{ asset('assets/img_direttivo_page/direttivo.png') }}"
                    alt="Fondatori della V.B.C. Valle Stura" />
                <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">
                    Direttivo della V.B.C. Valle Stura
                </figcaption>
            </figure>
        </div>

        <div class="container mx-auto px-4 py-10">
            <div class="grid gap-4 sm:gap-6 lg:gap-8 lg:my-20 md:my-20">

                {{-- Presidente --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                    <div class="hidden lg:block"></div>
                    <div class="flex justify-center col-span-1 sm:col-span-2 lg:col-span-2">
                        @php $presidente = $members[0]; @endphp
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-sm">
                            <img class="w-full h-48 object-cover object-top"
                                src="{{ asset('assets/img_direttivo_page/' . $presidente['img']) }}"
                                alt="{{ $presidente['name'] }}">
                            <div class="p-4 text-center">
                                <h2 class="text-xl sm:text-2xl font-bold mb-2">{{ $presidente['name'] }}</h2>
                                <p class="text-gray-700">{{ $presidente['role'] }}</p>
                                @if ($presidente['mail'] !== '#')
                                    <a href="mailto:{{ $presidente['mail'] }}" type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 mt-3.5 inline-flex justify-center w-1/2 text-center">
                                        Contatta
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="hidden lg:block"></div>
                </div>

                {{-- Vice Presidente e Segretario --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                    <div class="hidden lg:block"></div>
                    @foreach (array_slice($members, 1, 2) as $member)
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden w-full">
                            <img class="w-full h-48 object-cover object-top"
                                src="{{ asset('assets/img_direttivo_page/' . $member['img']) }}"
                                alt="{{ $member['name'] }}">
                            <div class="p-4 text-center">
                                <h2 class="text-xl sm:text-2xl font-bold mb-2">{{ $member['name'] }}</h2>
                                <p class="text-gray-700">{{ $member['role'] }}</p>
                                @if ($member['mail'] !== '#')
                                    <a href="mailto:{{ $member['mail'] }}" type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 mt-3.5 inline-flex justify-center w-1/2 text-center">
                                        Contatta
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                    <div class="hidden lg:block"></div>
                </div>

                {{-- Consiglieri --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-8">
                    @foreach (array_slice($members, 3) as $member)
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden w-full">
                            <img class="w-full h-48 object-cover object-top"
                                src="{{ asset('assets/img_direttivo_page/' . $member['img']) }}"
                                alt="{{ $member['name'] }}">
                            <div class="p-4 text-center">
                                <h2 class="text-xl sm:text-2xl font-bold mb-2">{{ $member['name'] }}</h2>
                                <p class="text-gray-700">{{ $member['role'] }}</p>
                                @if ($member['mail'] !== '#')
                                    <a href="mailto:{{ $member['mail'] }}" type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 mt-3.5 inline-flex justify-center w-1/2 text-center">
                                        Contatta
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

    </div>
</x-layouts.website>
