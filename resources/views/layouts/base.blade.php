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

    {{$slot}}

<<<<<<< HEAD
    <!-- footer -->
    <footer class="section-footer">
        <x-partials.footer />
    </footer>
    <!-- end of footer -->

    @livewireScripts()

    @stack('scripts')
=======
<!-- footer -->
<footer class="section-footer">
    <x-partials.footer />
</footer>
<!-- end of footer -->

@livewireScripts()

@stack('scripts')
>>>>>>> f3d5fc4134e7459416b52e59d329daf7de8996ff


</body>
</html>
