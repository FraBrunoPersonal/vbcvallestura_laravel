<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] flex items-center  min-h-screen flex-col">
    <x-navbar />

    {{ $slot }}

    <x-footer />
    @fluxScripts
</body>

</html>
