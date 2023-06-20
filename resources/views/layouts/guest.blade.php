<!DOCTYPE html>
<html lang="en" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('partials.head-meta')
    @include('partials.head-css')
    {{-- @vite(['resources/js/app.js']) --}}
    @livewireStyles

    @stack('head')
</head>

<body>
    <div class="auth-main">
        <div class="auth-wrapper v1">
            <div class="auth-form">
                <div class="card my-5">
                    <div class="card-body">
                        <div class="text-center">
                            <a href="{{ url('/') }}"><h2>Orca</h2> </a>
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>


</body>


@include('partials.footer-js')


@stack('body')

@livewireScripts

</html>
