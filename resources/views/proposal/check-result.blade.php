@extends('layouts.app')

@section('title', 'Hasil Seleksi')

@section('content')
    @include('layouts.partial.alert')
    <section class="flex-1 py-8 px-2 md:px-8 flex flex-col items-center">
        <!-- Register Card-->
        <div
            class=" bg-white max-w-2xl w-full space-y-8 px-4 sm:px-6 py-7 rounded-3xl text-black flex flex-col items-center tracking-tighter">
            <img src="{{asset('/img/brin-logo-black.png')}}" alt="brin logo" class="w-48 sm:w-60">
            <p class="font-bold text-xl">Pengecekan Hasil Seleksi</p>
            <form class="w-full space-y-5 leading-none tracking-tighter px-6" action="{{ route('user.result-form') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="space-y-3">
                    <label class="text-sm font-medium" for="usernameInput">
                        Nama Lengkap <span class="text-red-600">*</span>
                    </label>
                    <input type="text" id="usernameInput"
                        class="block w-full rounded-md placeholder-gray-400 py-2 px-6"
                        placeholder="Ketik disini" name="full_name" required autocomplete="off">
                </div>
                <div class="space-y-3">
                    <label class="text-sm font-medium" for="judulInput">Judul Penelitian <span
                            class="text-red-600">*</span></label>
                    <input type="text" id="judulInput"
                        class="block w-full rounded-md placeholder-gray-400 py-2 px-6" name="title"
                        placeholder="Ketik disini" required autocomplete="off">
                </div>
                <div class="flex justify-center pt-5">
                    <button
                        class="rounded-xl bg-indigo-500 hover:bg-indigo-600 shadow-indigo-700  shadow-md text-white md:py-3 font-bold"
                        type="submit" value="SUBMIT">Submit
                    </button>
                </div>
            </form>
        </div>
    </section>

@endsection