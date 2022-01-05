<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProposalCategory;
use App\Models\Proposal;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = Proposal::count();
        $todayCount = Proposal::where('created_at', '>=', today())->count();

        $totalApproved = Proposal::where('score', '>', 70)->count();
        $todayApprovedCount = Proposal::where('score', '>', 70)->where('created_at', '>=', today())->count();

        return view('index', [
            'proposal' => [
                'total' => $total,
                'percentageDay' => 100 - ($todayCount / $total * 100),
            ],
            'proposalApproved' => [
                'total' => $totalApproved,
                'percentageDay' => 100 - ($todayApprovedCount / $totalApproved * 100),
            ],
        ]);
    }

    public function getChartData()
    {
        $time = today();
        $time->subWeek(1);

        $categories = ProposalCategory::withCount('proposals')->get();

        return response()->json([
            'proposal' => [
                'total' => Proposal::count(),
                'totalWeek' => Proposal::where('created_at', '>=', $time)->count(),
            ],
            'proposalApproved' => [
                'total' => Proposal::where('score', '>', 70)->count(),
                'totalWeek' => Proposal::where('score', '>', 70)->where('created_at', '>=', $time)->count(),
            ],
            'category' => [
                'labels' => $categories->pluck('name'),
                'values' => $categories->pluck('proposals_count'),
            ],
        ]);
    }
}
