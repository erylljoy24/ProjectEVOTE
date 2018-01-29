<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Party;
use App\Candidate;
use App\Position;
use App\Course;
use Illuminate\Support\Facades\Input;

class StudentDashboardController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $positions = Position::all();
        $user = Auth::user();   
        $getCandidatesPos = \DB::table('positions')
                            ->join('candidates', 'positions.id', '=', 'candidates.position_id')
                            ->where('course_id', '=', $user->course_id)->orderBy('candidates.position_id')->get();
        
    	return view('studentviews.maincontent.dashboard', compact('positions','getCandidatesPos'));
    }
    public function showSpecifiedCourse()
    {
    	return view('studentviews.maincontent.specifiedcourse');
    }
    public function showPartyPages($id)
    {
        $party = Party::find($id);
        $candidates = Candidate::where('party_id', '=', $party->id)->get();
        $getCandidatesPos = \DB::table('positions')
                            ->join('candidates', 'candidates.position_id', '=', 'positions.id')
                            ->where('party_id', '=', $party->id)->get();
        // dd($getCandidatesPos);
        return view('studentviews.maincontent.partypage', compact('party', 'getCandidatesPos'));
    }

    public function showCandidate($id)
    {
        
        $candidate = Candidate::find($id);
        // dd($candidate);
        return view('studentviews.maincontent.candidate', compact('candidate'));
    }


    public function store(Request $req)
    {
        $sampleArray = Input::get('candidates');
        foreach ($sampleArray as $getEach) 
        {
            $candidates = Candidate::where('id', '=', $getEach)->get();
            foreach ($candidates as $cands) 
            {
                \DB::table('candidates')
                    ->where('id', $cands->id)
                    ->update(['vote_count' => $cands->vote_count+1,
                ]);
            }
            
        }
        return redirect('/home');
    }

    public function showMainData()
    {
        $user = Auth::user();   
        $getCandidatesPos = \DB::table('positions')
                            ->join('candidates', 'positions.id', '=', 'candidates.position_id')
                            ->where('course_id', '=', $user->course_id)->orderBy('candidates.position_id')->get();   
        return $getCandidatesPos;
    }
}
