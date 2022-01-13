@extends('layouts.app')

@section('content')

    <section class="flex flex-col justify-center overflow-visible p-8">
        <!--Section 1 Card begin -->
        <section class="flex items-center justify-evenly flex-col lg:flex-row  gap-5 p-3 w-full">
            <div
                class="flex justify-around lg:grid lg:grid-cols-8 lg:w-80 lg:h-40 w-full h-48 bg-aside rounded-xl py-6 px-2 gap-10">
                <div class="lg:col-span-5 text-center lg:space-y-6 space-y-11">
                    <span class="text-slate-400 font-bold flex-grow-3">Total Proposal Masuk</span>
                    <div class="text-2xl text-slate-400 font-semibold break-words">
                        <span>{{ $proposal['total'] }}</span>
                        <p class="text-xs tracking-wide">Proposal</p>
                    </div>
                </div>
                <div class="flex flex-col lg:col-span-2 items-center space-y-3 lg:space-y-1">
                    <span class="text-emerald-500">+{{ $proposal['percentageDay'] }}%</span>
                    <div class="lg:w-20 w-24">
                        <canvas id="myChart" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
            <div
                class="flex justify-around lg:grid lg:grid-cols-8 lg:w-80 lg:h-40 w-full h-48 bg-aside rounded-xl py-6 px-3 gap-10">
                <div class="col-span-5 text-center lg:space-y-6 space-y-11">
                    <span class="text-slate-400 font-bold flex-grow-3">Total Proposal Approved</span>
                    <div class="text-2xl text-slate-400 font-semibold break-words">
                        <span>{{ $proposalApproved['total'] }}</span>
                        <p class="text-xs tracking-wide">Proposal</p>
                    </div>
                </div>
                <div class="flex flex-col col-span-2 items-center space-y-3 lg:space-y-1">
                    <span class="text-emerald-500">+{{ $proposalApproved['percentageDay'] }}%</span>
                    <div class="lg:w-20 w-24">
                        <canvas id="myChart1" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
        </section>
        <!-- Card End -->

        <!-- Section 2 -->
        <section class="text-white font-semibold py-5 px-3  ">
            <div class="flex flex-col items-center gap-3 md:flex-row md:justify-between px-1 py-4 md:items-center w-full">
                <h1>Total Proposal</h1>
                <div class="flex justify-between items-center md:block md:space-x-3 w-full md:w-auto">
                    <span>Provisions Month</span>
                    <input class="w-36 border-2 text-black font-semibold p-0.5 rounded-lg" type="date">
                </div>
            </div>
            <!-- Bar Chart start -->
            <div class="bg-aside p-4 rounded-md">
                <header class="flex justify-between items-center px-1">
                    <div>
                        <h3 class="text-gray-300">Persebaran Per Bidang</h3>
                        <small class="text-xs text-gray-500">Total</small>
                    </div>
                    <i class="fas fa-ellipsis-h"></i>
                </header>
                <main class="p-6 ">
                    <canvas id="barChart" width="800" height="300"></canvas anvas>
                </main>
            </div>
        </section>

        <!-- Section 3-->
        {{-- @if (auth()->user()->is_reviewer)
            <section class="flex flex-col md:grid md:grid-cols-9 p-4 md:gap-24">
                <div class="md:col-span-4 font-semibold">
                    <h1>Penyerahan Dana Penelitian</h1>
                    <div class="-mt-10 w-80 h-auto">
                        <canvas id="myChart3" width="400" height="400"></canvas>
                    </div>
                </div>
                <div class="md:col-span-5  font-semibold">
                    <h1>Pelaksanaan Penelitian</h1>
                    <div class="flex items-center my-4 lg:mt-16">
                        <h1 class="text-2xl font-bold">9.500</h1>
                        <small class="text-gray-500 text-xs ml-2">Total</small>
                    </div>
                    <!-- progress Bar -->
                    <div
                        class="ml-5  progress-bar mt-3 w-4/5 h-5 rounded-full relative overflow-hidden transition-all will-change-transform shadow-lg bg-indigo-800">

                        <div class="absolute h-full w-4/5 bg-indigo-500 rounded-full "></div>
                    </div>
                </div>
            </section>
        @endif --}}

        <!-- Section 4 -->
        <section class="font-semibold py-5 px-3">
            <div class="bg-aside p-4 rounded-md py-12">
                <header class="text-center px-1">
                    <h1 class="text-white text-3xl md:w-3/12 font-bold mx-auto">Proses Pengajuan Penelitian</h1>
                </header>
                <main class="flex flex-col items-center space-y-6 md:flex-row justify-evenly p-6 mt-8">
                    <div class="text-center flex justify-center items-center flex-col w-36 space-y-5">
                        <img src="./img/upload (1) 1.png" alt="upload">
                        <small class="text-zinc-500">Upload Proposal Pengajuan</small>
                    </div>
                    <div class="text-center flex justify-center items-center flex-col w-36 space-y-5">
                        <img src="./img/review 1.png" alt="upload">
                        <small class="text-zinc-500">Upload Proposal Pengajuan</small>
                    </div>
                    <div class="text-center flex justify-center items-center flex-col w-36 space-y-5">
                        <img src="./img/review (1) 1.png" alt="upload">
                        <small class="text-zinc-500">Upload Proposal Pengajuan</small>
                    </div>
                </main>
            </div>
        </section>

        <!-- section 5 Pengumuman-->
        <section class="text-center p-4">
            <h1 class="text-3xl font-bold mb-7">Pengumuman</h1>
            <!-- cards -->
            <div class="space-y-8">
                <div class="bg-aside rounded-xl w-full py-10 px-5 text-left space-y-4">
                    <div class="flex gap-6 items-center">
                        <div class="w-24 flex justify-between font-bold">
                            <span>Nomor </span>
                            <span>:</span>
                        </div>
                        <span>01.11.2018</span>
                    </div>
                    <div class="flex gap-6 items-center">
                        <div class="w-24 flex justify-between font-bold">
                            <span>Tentang </span>
                            <span>:</span>
                        </div>
                        <a href="#">
                            <i class="fas fa-file-pdf text-red-700 bg-white mx-1"></i>
                            Permenristekdikti Nomor 40 Tahu 2018 Tentang Program Prioritas Riset Nasional
                        </a>
                    </div>
                </div>
                <div class="bg-aside rounded-xl w-full py-10 px-5 text-left space-y-4">
                    <div class="flex gap-6 items-center">
                        <div class="w-24 flex justify-between font-bold">
                            <span>Nomor </span>
                            <span>:</span>
                        </div>
                        <span>01.11.2018</span>
                    </div>
                    <div class="flex gap-6 items-center">
                        <div class="w-24 flex justify-between font-bold">
                            <span>Tentang </span>
                            <span>:</span>
                        </div>
                        <a href="#">
                            <i class="fas fa-file-pdf text-red-700 bg-white mx-1"></i>
                            Permenristekdikti Nomor 40 Tahu 2018 Tentang Program Prioritas Riset Nasional
                        </a>
                    </div>
                </div>
                <div class="bg-aside rounded-xl w-full py-10 px-5 text-left space-y-4">
                    <div class="flex gap-6 items-center">
                        <div class="w-24 flex justify-between font-bold">
                            <span>Nomor </span>
                            <span>:</span>
                        </div>
                        <span>01.11.2018</span>
                    </div>
                    <div class="flex gap-6 items-center">
                        <div class="w-24 flex justify-between font-bold">
                            <span>Tentang </span>
                            <span>:</span>
                        </div>
                        <a href="#">
                            <i class="fas fa-file-pdf text-red-700 bg-white mx-1"></i>
                            Permenristekdikti Nomor 40 Tahu 2018 Tentang Program Prioritas Riset Nasional
                        </a>
                    </div>
                </div>
            </div>
            <!-- cards end -->
        </section>
    </section>
@endsection


@section('script')

    <script src="{{ asset('js/chart.js') }}"></script>

@endsection
