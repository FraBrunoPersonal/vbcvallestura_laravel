<footer class="bg-black text-gray-300 w-full">
    <div class="mx-auto w-full max-w-screen-xl px-4 py-6 lg:py-10">
        <div class="md:flex md:justify-between">
            {{-- Logo --}}
            <div class="mb-6 md:mb-0">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('assets/LogoVBC_White.png') }}" alt="V.B.C. Valle Stura Logo" class="h-20 me-3" />
                </a>
            </div>

            {{-- Sezioni --}}
            <div class="grid grid-cols-2 gap-8 sm:grid-cols-3">
                {{-- Info societarie --}}
                <div>
                    <h2 class="mb-4 text-sm font-semibold uppercase text-white">V.B.C. Valle Stura A.s.d.</h2>
                    <ul class="space-y-2 text-sm">
                        <li>P. IVA 02930590043</li>
                        <li>C.F. 96040690040</li>
                        <li>C.A. FIPAV 010030170</li>
                        <li>C.A. CSI 01200065</li>
                    </ul>
                </div>

                {{-- Social --}}
                <div>
                    <h2 class="mb-4 text-sm font-semibold uppercase text-white">Seguici</h2>
                    <ul class="space-y-2 text-sm">
                        <li>
                            <a href="https://www.instagram.com/vbcvallestura" target="_blank"
                                class="hover:underline hover:text-white">
                                Instagram
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=100095199594971" target="_blank"
                                class="hover:underline hover:text-white">
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@SpikeVolley_TV" target="_blank"
                                class="hover:underline hover:text-white">
                                SpikeVolley TV
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@vbcvallestura" target="_blank"
                                class="hover:underline hover:text-white">
                                YouTube
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- Legal --}}
                <div>
                    <h2 class="mb-4 text-sm font-semibold uppercase text-white">Legal</h2>
                    <ul class="space-y-2 text-sm">
                        <li>
                            <a href="#" class="hover:underline hover:text-white">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline hover:text-white">Terms & Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <hr class="my-6 border-gray-600" />

        {{-- Footer bottom --}}
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-400 sm:text-center">
                © 2025 <a href="{{ route('home') }}" class="hover:underline text-white">V.B.C. Valle Stura A.S.D.</a>.
                Tutti i diritti riservati.
            </span>
        </div>
    </div>
</footer>
