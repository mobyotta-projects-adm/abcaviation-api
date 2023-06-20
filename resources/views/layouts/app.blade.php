<!DOCTYPE html >
<html lang="en" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('partials.head-meta')
    @include('partials.head-css')
    {{-- @vite(['resources/js/app.js']) --}}
    @livewireStyles

    @stack('head')
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body>
    @include('partials.vertical')

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">

            <!-- [ Main Content ] start -->
            <main>
                {{ $slot }}
            </main>

            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
    @include('partials.footer-block')
    @include('partials.footer-js')

    <script src="{{ asset('assets/js/layout-horizontal.js') }}"></script>

    @stack('body')

    @livewireScripts
</body>
<!-- [Body] end -->

</html>
