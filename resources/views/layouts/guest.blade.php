{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SGInfo') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html> --}}
<!----======== Navbar & Carousel TDTZ========= -->
<!doctype html>
<html lang="en">

<head>
    <x-partials.header />
</head>

<body>

    <!-- start nav -->
    <x-partials.nav />
    <!-- end nav -->

    <x-partials.login />
    <x-partials.register />

    @livewire('add-house-component')
    @livewire('add-general-component')
    @livewire('add-job-component')

    {{ $slot }}

    <!-- footer -->
    <footer class="section-footer">
        <x-partials.footer />
    </footer>
    <!-- end of footer -->

    @livewireScripts()

    @stack('scripts')

</body>

</html>
