<!DOCTYPE html>
<html lang="en" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('partials.head-meta')
    @include('partials.head-css')
    @vite(['resources/js/app.js'])
    @livewireStyles

    @stack('head')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    
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

    <style>
        .scroll-block {
            overflow: scroll;
        }
    </style>
</body>
<!-- [Body] end -->


</html>
