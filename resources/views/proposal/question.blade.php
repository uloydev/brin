@extends('layouts.app')

@section('title', 'Review Proposal')

@section('content')

<section class="flex-1 py-6 px-8 space-y-5">
    <!-- title Proposal -->
    <h4 class="uppercase">{{ $proposal->title }}</h4>
    <!-- review Card -->
    <div class="bg-white max-w-full px-8 py-5 rounded-3xl text-black">
        <div class="font-semibold flex flex-col items-end mb-3 lg:mb-1">
            <div>
                <span>Total Nilai : <span>{{ $currentScore }}</span></span>
                <p>Item yang Dinilai <span>{{ $questionAnswered }}</span> dari <span>{{ $questionCount }}</span></p>
            </div>
        </div>
        <h4>{{ $question->text }}</h4>
        <form action="{{ route('reviewer.review.question', $proposal->id) }}" method="POST" id="reviewForm">
            @csrf
            <div class="text-sm space-y-4 my-6">
                <input type="hidden" name="question_id" value="{{ $question->id }}" required>
                @if (count($question->questionChoices))
                    @foreach ($question->questionChoices as $item)
                        <div class="flex items-center space-x-3">
                            <input type="radio" id="radioBtn{{ $item->id }}" class="btn-check" name="value" value="{{ $item->id }}" required>
                            <label for="radioBtn{{ $item->id }}">{{ $item->text }}</label>
                        </div>
                    @endforeach
                @else
                    <input type="text" placeholder="Your Answer" name="value" class=" appearance-none rounded shadow p-3 text-grey-dark mr-2 focus:outline-none" required>
                @endif
            </div>
        </form>
    </div>
    <div class="flex justify-end">
        <button class="text-white font-semibold text-sm bg-success" type="submit" form="reviewForm">simpan & lanjutkan</button>
    </div>

</section>

@endsection