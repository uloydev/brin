@extends('layouts.app')

@section('title', 'Hasil Seleksi')

@section('content')
    @include('layouts.partial.alert')
    <section class="flex-1 py-8 px-2 md:px-8 flex flex-col items-center">
        <!-- Register Card-->
        <div
            class=" bg-white max-w-2xl w-full space-y-8 px-4 sm:px-6 py-7 rounded-3xl text-black flex flex-col items-center tracking-tighter">
            <img src="{{asset('/img/brin-logo-black.png')}}" alt="brin logo" class="w-48 sm:w-60">
            <div class="w-full">
                <p class="mt-2">Nama Lengkap : {{ $proposal->full_name }}</p>
                <p class="mt-2">Nama Instansi &nbsp; : {{ $proposal->instance }}</p>
                <p class="mt-2">Judul Penelitian : {{ $proposal->title }}</p>
                <p class="mt-2">Jenis Bidang &nbsp; &nbsp; &nbsp; : {{ $proposal->proposalCategory->name }}</p>
                <p class="text-2xl text-green-500 font-bold text-center my-12">SELEMAT PENGAJUAN ANDA DI SETUJUI</p>
                <p class="text-2xl text-red-500 font-bold text-center my-12">MAAF PENGAJUAN ANDA TIDAK DI SETUJUI</p>
                <p>tahap selanjutnya untuk mengklaim pendanaan riset, anda diharapkan untuk memenuhi persyaratan dibawah ini :</p>
                <br>
                <p>Dokumen kontrak riset</p>
                <a href="https://s.id/kelengkapanpendanaanriset2021">https://s.id/kelengkapanpendanaanriset2021</a>
            </div>
        </div>
    </section>

@endsection