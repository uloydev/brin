@extends('layouts.app')

@section('title', 'Pengajuan Proposal')

@section('content')

    <section class="relative p-8 ">
        <a href="{{ route('user.submission.new') }}">
            <div
                class="absolute w-10 h-10 cursor-pointer hover:bg-gray-300 bg-white rounded-xl top-10 right-10 flex justify-center border-2 border-black items-center font-bold text-black text-lg">
                +</div>
        </a>
        <div class="overflow-x-auto my-4 md:mx-20 md:my-10">
            <table class="w-full table-auto">
                <tr class="w-full border-b-2 border-white border-solid">
                    <th>ID.</th>
                    <th>Tahun</th>
                    <th>Bidang</th>
                    <th>Judul</th>
                    <th>Dokumen</th>
                </tr>
                @foreach ($proposals as $proposal)
                <tr>
                    <td>{{ $proposal->id }}</td>
                    <td>{{ $proposal->research_date->format('Y')}}</td>
                    <td>{{ $proposal->proposalCategory->name }}</td>
                    <td>{{ $proposal->title }}</td>
                    <td><a href="{{ Storage::url($proposal->file) }}"><i class="fas fa-file-pdf text-red-700 bg-white scale-150 mx-auto"></i></a></td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="md:mx-20">
            {{ $proposals->links() }}
        </div>
    </section>

@endsection
