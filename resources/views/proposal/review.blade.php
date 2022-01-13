@extends('layouts.app')

@section('title', 'Review Proposal')

@section('content')
    @include('layouts.partial.alert')
    <section class="relative p-8 ">
        <div class="overflow-x-auto my-4 md:mx-20 md:my-10">
            <table class="w-full table-auto">
                <tr class="w-full border-b-2 border-white border-solid">
                    <th>ID.</th>
                    <th>Tahun</th>
                    <th>Bidang</th>
                    <th>Judul</th>
                    <th>Dokumen</th>
                    <th>Action</th>
                </tr>
                @foreach ($proposals as $proposal)
                <tr>
                    <td>{{ $proposal->id }}</td>
                    <td>{{ $proposal->research_date->format('Y')}}</td>
                    <td>{{ $proposal->proposalCategory->name }}</td>
                    <td>{{ $proposal->title }}</td>
                    <td><a href="{{ Storage::url($proposal->file) }}"><i class="fas fa-file-pdf text-red-700 bg-white scale-150 mx-auto"></i></a></td>
                    <td><a href="{{ route('reviewer.review.question', $proposal->id) }}" class="text-white font-semibold text-sm bg-teal-500 px-8 py-4 cursor-pointer rounded-lg">review</a></td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="md:mx-20">
            {{ $proposals->links() }}
        </div>
    </section>

@endsection
