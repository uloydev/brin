<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/icon-bri.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body class="box-border overflow-hidden">
    <div class="relative flex text-white min-h-screen">
        @include('layouts.partial.sidebar')
        <main class="h-screen flex flex-col justify-between flex-1 overflow-scroll overflow-x-hidden bg-section">
            <header
                class="sticky z-10 top-0 flex items-center justify-between bg-navbar px-8 py-7 shadow-lg lg:text-2xl">
                <span class="-translate-x-1 text-2xl">@yield('title')</span>
                <div id="btnHamburger" class="space-y-1 lg:hidden cursor-pointer transition-transform">
                    <div class="line-1 h-1 w-6 bg-white"></div>
                    <div class="line-2 h-1 w-6 bg-white"></div>
                    <div class="line-3 h-1 w-6 bg-white"></div>
                </div>
                @auth
                    <div class="hidden lg:flex lg:items-center lg:gap-5">
                        <svg class="w-6 h-6" fill="white" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                            </path>
                        </svg>
                        <div class="w-0.5 h-7 bg-white rounded-sm"></div>
                        <span class="font-semibold text-sm">Jones Ferdinand</span>
                        <img class="w-10 rounded-full p-0.5 border-2" src="{{ asset('img/profile.jpg') }}" alt="profile">
                    </div>
                @endauth
            </header>
            <!-- Put Content Here -->
            @yield('content')
            <!-- footer -->
            @include('layouts.partial.footer')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script')

</body>

</html>
