@extends('layouts.app')

@section('title', 'Hasil Review Proposal')

@section('content')
    @include('layouts.partial.alert')

    <section class="p-8 space-y-6">
        <header class="space-x-3">
            <h3 class="inline-block">Status</h3>
            <span class="bg-success text-white font-semibold text-sm px-4 py-2 rounded-lg"> Terbuka</span>
        </header>
        <div class="overflow-x-scroll md:overflow-x-hidden">
            <table class="w-full">
                <tr class="w-full border-b-2 border-white border-solid">
                    <th>ID</th>
                    <th>Tahun</th>
                    <th>Bidang</th>
                    <th>Judul</th>
                    <th>Dokumen</th>
                    <th>Penilaian</th>
                </tr>
                @foreach ($proposals as $proposal)
                    <tr>
                        <td>{{ $proposal->id }}</td>
                        <td>{{ $proposal->research_date->format('Y') }}</td>
                        <td>{{ $proposal->proposalCategory->name }}</td>
                        <td>{{ $proposal->title }}</td>
                        <td><i class="fas fa-file-pdf text-red-700 bg-white scale-150 mx-auto"></i></td>
                        <td>
                            <div class="flex flex-col justify-evenly h-full items-center text-center">
                                <span>Nilai {{ $proposal->score }}</span>
                                <div class="{{ $proposal->score > 70 ? 'text-green-500' : 'text-danger' }}">
                                    <p class="leading-none font-semibold">Komponen dinilai</p>
                                    <span>{{ $proposal->answered_questions_count }} dari {{ $questionCount }}</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{-- <div class="flex justify-end space-x-3">
            <button class="bg-danger">unduh hasil penilaian</button>
            <button class="bg-success">Simpan</button>
        </div> --}}
    </section>

@endsection
