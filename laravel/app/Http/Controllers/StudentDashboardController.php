<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Party;
use App\Candidate;

class StudentDashboardController extends Controller
{
    public function index()
    {
    	return view('studentviews.maincontent.dashboard');
    }
    public function showSpecifiedCourse()
    {
    	return view('studentviews.maincontent.specifiedcourse');
    }
    public function showPartyPages($id)
    {
        $party = Party::find($id);
        $candidates = Candidate::where('party_id', '=', $party->id)->get();
        $getCandidatesPos = \DB::table('candidates')
                            ->join('positions', 'candidates.position_id', '=', 'positions.id')
                            ->where('party_id', '=', $party->id)->get();
        return view('studentviews.maincontent.partypage', compact('party', 'getCandidatesPos'));
    }
}
