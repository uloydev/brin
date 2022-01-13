@extends('layouts.app')

@section('title', 'Pengajuan Proposal')

@section('content')
    @include('layouts.partial.alert')
    <section class="flex-1 py-8 px-2 md:px-8 flex flex-col items-center">
        <!-- Register Card-->
        <div
            class=" bg-white max-w-2xl w-full space-y-8 px-4 sm:px-6 py-7 rounded-3xl text-black flex flex-col items-center tracking-tighter">
            <img src="{{asset('/img/brin-logo-black.png')}}" alt="brin logo" class="w-48 sm:w-60">
            <form class="w-full space-y-5 leading-none tracking-tighter px-6" action="{{ route('user.submission.new') }}" method="POST" enctype="multipart/form-data">
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
                    <label class="text-sm font-medium" for="instansiInput">Nama Instansi <span
                            class="text-red-600">*</span></label>
                    <input type="text" id="instansiInput"
                        class="block w-full rounded-md placeholder-gray-400 py-2 px-6" name="instance"
                        placeholder="Ketik disini" required autocomplete="off">
                </div>
                <div class="space-y-3">
                    <label class="text-sm font-medium" for="judulInput">Judul Penelitian <span
                            class="text-red-600">*</span></label>
                    <input type="text" id="judulInput"
                        class="block w-full rounded-md placeholder-gray-400 py-2 px-6" name="title"
                        placeholder="Ketik disini" required autocomplete="off">
                </div>
                <div class="w-full flex flex-row items-center gap-3">
                    <div class="w-1/2 space-y-3">
                        <label class="text-sm font-medium" for="bidangInput">Jenis Bidang <span
                                class="text-red-600">*</span></label>
                        <select id="bidangInput" name="category"
                            class="block w-full rounded-md py-2 px-6 invalid:text-gray-400 cursor-pointer"
                            required>
                            <option value="" disabled selected hidden>--Pilih--</option>
                            @foreach ($proposalCategory as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-1/2 space-y-3">
                        <label class="text-sm font-medium" for="tglPenelitian">Tanggal Penelitian <span
                                class="text-red-600">*</span></label>
                        <input type="date" id="tglPenelitian"
                            class="block w-full rounded-md placeholder-gray-400 py-2 px-6 invalid:text-gray-400"
                            name="research_date" placeholder="Ketik disini" required>
                    </div>
                </div>
                <div class="space-y-3">
                    <label class="text-sm font-medium" for="fileInput">Upload Proposal <span
                            class="text-red-600">*</span></label>
                    <div class="w-full">
                        <input type="file" id="fileInput" class="hidden" name="file" accept=".pdf" required>
                        <label for="fileInput" id="fileLabel"
                            class="label-control w-full flex justify-between items-center rounded-md cursor-pointer border border-gray-500 border-solid py-3 px-6 text-gray-400">
                            <span class="file-name">Upload</span>
                            <i class="fas fa-cloud-upload-alt"></i>
                        </label>
                    </div>
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

@section('script')
    <script>
        let inputFile = document.getElementById('fileInput');
        let fileLabel = document.getElementById('fileLabel');

        inputFile.addEventListener('change', () => {
            fileLabel.innerHTML = '<span class="file-name">' + inputFile.files[0].name + '</span>';
        })
    </script>
@endsection