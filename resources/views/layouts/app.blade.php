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
                class="sticky z-10 top-0 flex items-center justify-between bg-navbar px-8 py-7 shadow-lg">
                <span class="-translate-x-1 text-xl">@yield('title')</span>
                <div id="btnHamburger" class="space-y-1 lg:hidden cursor-pointer transition-transform">
                    <div class="line-1 h-1 w-6 bg-white"></div>
                    <div class="line-2 h-1 w-6 bg-white"></div>
                    <div class="line-3 h-1 w-6 bg-white"></div>
                </div>
                @auth
                    <div class="hidden lg:flex lg:items-center lg:gap-5">
                        <span class="font-semibold text-sm">{{ Auth::user()->name }}</span>
                        <img class="w-10 rounded-full p-0.5 border-2" src="{{ asset('img/profile.jpg') }}" alt="profile">
                        <div class="w-0.5 h-7 bg-white rounded-sm"></div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="px-2 py-3 hover:bg-gray-400 flex items-center space-x-2 text-base">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Logout</span>
                            </button>
                        </form>
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
    <script>
        const btn = document.getElementById('btnHamburger');
        const sideBar = document.querySelector('.sidebar');

        btn.addEventListener('click', () => {
            sideBar.classList.toggle("-translate-x-full");
        });
    </script>
    @yield('script')

</body>

</html>
