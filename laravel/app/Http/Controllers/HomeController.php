<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Course;
use App\Party;
use App\Position;
use Auth;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $positions = Position::all();
        $course = Course::find($user->course_id);
        $parties = Party::where('course_id', '=', $user->course_id)->get();

        $getCandidatesPos = \DB::table('positions')
                            ->join('candidates', 'positions.id', '=', 'candidates.position_id')
                            ->where('course_id', '=', $user->course_id)->orderBy('candidates.position_id')->get();
 
        return view('home', compact('user', 'course', 'parties', 'positions', 'getCandidatesPos'));
    }
}
