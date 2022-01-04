<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposal;
use App\Models\ProposalCategory;

class ProposalController extends Controller
{
    public function submission()
    {
        $proposals = Proposal::with('proposalCategory')->where('user_id', auth()->id())->paginate(5);
        if (count($proposals)) {
            return view('proposal.submission', [
                'proposals' => $proposals,
            ]);
        }
        return redirect()->route('user.submission.new');
    }

    public function submissionForm()
    {
        return view('proposal.submission-form', [
            'proposalCategory' => ProposalCategory::all(),
        ]);
    }

    public function submitProposal(Request $request)
    {
        // dd($request);
        $path = $request->file('file')->store('public/file/proposal');
        Proposal::create([
            'full_name' => $request->full_name,
            'instance' => $request->instance,
            'title' => $request->title,
            'proposal_category_id' => $request->category,
            'user_id' => auth()->id(),
            'research_date' => $request->research_date,
            'file' => $path,
        ]);

        return redirect()->route('user.submission')->withSuccess('proposal sumbited');
    }

    public function resultForm()
    {
        return view('proposal.check-result');
    }

    public function searchResult(Request $request)
    {
        $proposal = Proposal::where('user_id', auth()->id())
            ->where('full_name', $request->full_name)
            ->where('title', $request->title)
            ->first();

        if ($proposal) {
            return redirect()->route('user.result', $proposal->id);
        }

        return redirect()->route('user.result-form')->withErrors('there is no proposal with that criteria');
    }

    public function showResult(Proposal $proposal)
    {
        return view('proposal.result',[
            'proposal' => $proposal
        ]);
    }
}
