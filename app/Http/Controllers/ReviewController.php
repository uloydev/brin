<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposal;
use App\Models\Answer;
use App\Models\Question;
use App\Models\QuestionChoice;

class ReviewController extends Controller
{
    public function index()
    {
        return view('proposal.review', [
            'proposals' => Proposal::where('score', NULL)->paginate(5),
        ]);
    }

    public function showQuestion(Proposal $proposal)
    {
        $answeredQuestionId = Answer::where('proposal_id', $proposal->id)->pluck('question_id');
        $choiceId = Answer::where('proposal_id', $proposal->id)->pluck('value');
        $currentScore = QuestionChoice::whereIn('id', $choiceId)->pluck('value')->sum();
        $question = Question::with('questionChoices')->whereNotIn('id', $answeredQuestionId)->first();

        if (! $question) {
            $proposal->score = $currentScore;
            $proposal->save();
            return redirect()->route('reviewer.review.index')->withError('there is no question left!');
        }
        return view('proposal.question', [
            'proposal' => $proposal,
            'question' => $question,
            'questionCount' => Question::count(),
            'questionAnswered' => count($answeredQuestionId),
            'currentScore' => $currentScore,
        ]);
    }

    public function saveAnswer(Request $request, Proposal $proposal)
    {
        Answer::create([
            'proposal_id' => $proposal->id,
            'question_id' => $request->question_id,
            'value' => $request->value,
        ]);

        return redirect()->route('reviewer.review.question', $proposal->id);
    }

    public function history()
    {
        return view('proposal.review-result', [
            'proposals' => Proposal::with('proposalCategory')->withCount('answeredQuestions')->where('score', '!=', NULL)->paginate(5),
            'questionCount' => Question::count(),
        ]);
    }
}
