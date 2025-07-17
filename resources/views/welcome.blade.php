<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] flex items-center  min-h-screen flex-col">
    <!-- Navbar centrata, fissa e sfocata -->
    <div class="fixed top-5 left-0 w-full z-50 ">
        <div class="container mx-auto px-4 bg-white w-1/4 rounded-4xl">
            <flux:navbar class="flex justify-center">
                <flux:navbar.item href="#">Home</flux:navbar.item>
                <flux:navbar.item href="#">Features</flux:navbar.item>
                <flux:navbar.item href="#">Pricing</flux:navbar.item>
                <flux:navbar.item href="#">About</flux:navbar.item>
                @if (Route::has('login'))
                    @auth
                        <flux:navbar.item href="{{ url('/dashboard') }}">Dashboard</flux:navbar.item>
                    @else
                        <flux:navbar.item href="{{ route('login') }}">Log In</flux:navbar.item>
                    @endauth
                @endif
            </flux:navbar>
        </div>
    </div>


    <section class="relative h-screen w-full bg-cover bg-center pt-24"
        style="background-image: url('https://images.wallpaperscraft.com/image/single/beach_volleyball_volleyball_net_174330_2160x3840.jpg');">

        <!-- Overlay scuro -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- Contenuto principale -->
        <div
            class="relative container mx-auto h-full flex flex-col justify-center items-center text-center text-white px-4">

            <!-- Logo -->
            <img class="h-1/4 w-auto rounded-lg"
                src="https://main.d1ai49ouxf8zw5.amplifyapp.com/assets/LogoVBC_White-CxnM2p7t.png" alt="Logo" />

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
    @fluxScripts
</body>

</html>
