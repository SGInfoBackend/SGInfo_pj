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

<!-- footer -->
<footer class="section-footer">
    <x-partials.footer />
</footer>
<!-- end of footer -->

@livewireScripts()

@stack('scripts')

</body>
</html>
