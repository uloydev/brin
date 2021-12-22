@extends('layouts.app')

@section('title', 'Login To Brin')

@section('content')
<section class="flex-1 py-8 px-2 md:px-8 flex flex-col items-center">
    <!-- Login Card-->
    <div
        class=" bg-white max-w-lg w-full space-y-8 px-4 sm:px-6 py-7 rounded-3xl text-black flex flex-col items-center">
        <img src="{{asset("img/brin-logo-black.png")}}" alt="brin logo" class="w-48 sm:w-60">
        <form class="w-full space-y-8" action="" method="POST">
            <div class="w-full px-1 sm:px-2 max-w-md space-y-5">
                <div class="px-2 tracking-tighter space-y-2">
                    <label class="text-sm font-medium leading-none" for="email">Masukkan Nama Pengguna /
                        Email
                        Address</label>
                    <input type="email" id="email" 
                        class="block w-full rounded-md placeholder-gray-400 py-2 px-6 @error('email') border-red-500 @enderror" name="email"
                        value="{{ old('email') }}"
                        placeholder="Nama pengguna atau email">
                    @error('email')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="px-2 tracking-tighter space-y-2">
                    <label class="text-sm font-medium leading-none" for="email">Masukkan Password</label>
                    <input type="password" id="password"
                        class="block w-full rounded-md placeholder-gray-400 py-2 px-6 @error('password') border-red-500 @enderror" name="password"
                        placeholder="Password">
                    @error('password')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
            </div>
            <div class="w-full px-3">
                <button
                    class="w-full rounded-xl bg-indigo-500 hover:bg-indigo-600 shadow-indigo-700  shadow-md text-white md:py-3 font-bold">Masuk
                </button>
            </div>
            <div class="leading-none text-sm py-5 text-center">
                <span>Belum memilki akun? <a class="text-blue-600 font-semibold hover:text-blue-800"
                        href="register.html">Daftar
                        disini</a></span>
            </div>
        </form>
    </div>
</section>
@endsection
