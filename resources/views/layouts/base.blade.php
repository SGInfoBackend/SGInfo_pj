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
<x-partials.register />
<x-partials.login />

    @livewire('add-house-component')
    @livewire('add-general-component')
    @livewire('add-job-component')

    {{$slot}}


    <footer class="section-footer">
        <x-partials.footer />
    </footer>

    @livewireScripts()

    @stack('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @livewireScripts()

    @stack('scripts')
</body>
</html>
