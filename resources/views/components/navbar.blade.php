<!-- Navbar centrata, fissa e sfocata -->
<div class="fixed top-5 left-0 w-full z-50 ">
    <div class="container mx-auto px-4 bg-white w-1/3 rounded-4xl">

        <flux:navbar class="flex justify-center">
            <flux:brand href="{{ route('home') }}" logo="{{asset('assets/LogoVBC_Black.png')}}" />
            <flux:navbar.item href="{{ route('home') }}" :current="Request::routeIs('home')">Home</flux:navbar.item>

            <flux:navbar.item href="{{ route('storia') }}" :current="Request::routeIs('storia')">Storia
            </flux:navbar.item>
            <flux:navbar.item href="{{ route('direttivo') }}" :current="Request::routeIs('direttivo')">Direttivo
            </flux:navbar.item>
            <flux:navbar.item href="{{ route('staff-tecnico') }}" :current="Request::routeIs('staff-tecnico')">
                Staff
                Tecnico</flux:navbar.item>
            <flux:navbar.item href="{{ route('squadre') }}" :current="Request::routeIs('squadre')">Squadre
            </flux:navbar.item>

            @if (Route::has('login'))
                @auth
                    <flux:navbar.item href="{{ url('/dashboard') }}" :current="Request::is('dashboard')">Dashboard
                    </flux:navbar.item>
                @else
                    <flux:navbar.item href="{{ route('login') }}" :current="Request::routeIs('login')">Log In
                    </flux:navbar.item>
                @endauth
            @endif
        </flux:navbar>

    </div>
</div>
