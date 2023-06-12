<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-partials.head />
</head>

<body class="bg-gray-100">

    {{-- Header --}}
    <header class="relative flex items-center justify-center h-40 bg-blue-300">
        <img class="absolute z-10 object-cover w-full h-40 opacity-10" src="{{ asset('img/bg/bg-header.jpg') }}" alt="">
        <h2 class="z-50 text-4xs md:text-5xs lg:text-6xs font-bold text-center text-black">Unlock meaningful discussions.</h2>
    </header>

    {{-- Navbar --}}
    <x-partials.nav />

    {{-- Slot --}}
    <div class="mb-8 font-sans antialiased text-gray-900">
        {{ $slot }}
    </div>

    {{-- Footer --}}
   

    {{-- Blade UI Kit --}}
    {{-- @bukScripts(true) --}}

    {{-- Livewire --}}
    <livewire:scripts />

</body>

</html>
