<!DOCTYPE html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">
<!-- [Head] start -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
    <meta name="keywords"
        content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="Phoenixcoded">


    <!-- [Google Font] Family -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/inter/inter.css') }}" id="main-font-link" />

    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}">
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}" id="preset-style-link">


    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- @vite(['resources/js/app.js']) --}}
    @livewireStyles
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body>
    @include('partials.vertical')

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            @include('partials.breadcrumb')
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Hello card</h5>
                        </div>
                        <div class="card-body">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis
                                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                            </p>
                        </div>
                    </div>
                </div>
                <!-- [ sample-page ] end -->
            </div>
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
