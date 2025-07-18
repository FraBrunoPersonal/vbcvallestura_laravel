<x-layouts.website>

    <section class="relative h-screen w-full bg-cover bg-center pt-24"
        style="background-image: url('{{ asset('assets/IMG_0528.png') }}');">

        <!-- Overlay scuro -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- Contenuto principale -->
        <div
            class="relative container mx-auto h-full flex flex-col justify-center items-center text-center text-white px-4">

            <!-- Logo -->
            <img class="h-1/4 w-auto rounded-lg" src="{{ asset('assets/LogoVBC_White.png') }}" alt="Logo" />

            <!-- Titolo -->
            <h1 class="text-4xl md:text-6xl font-bold mb-4 mt-4">Benvenuti!</h1>

            <!-- Sottotitolo -->
            <p class="text-lg md:text-2xl mb-6">
                Unisciti a noi per vivere la passione per la pallavolo
            </p>

            <!-- Call-to-action button -->
            <a href="#"
                class="bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-800 transition duration-300">
                Unisciti a Noi
            </a>

        </div>
    </section>

    <br><br><br><br><br><br>
</x-layouts.website>
