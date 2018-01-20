<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Party;
use App\Position;
use App\Candidate;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth:admin');
    }

    public function index()
    {
        $courses = Course::all();
        $positions = Position::all();
        $parties = Party::all();
        $getCandidatesPos = \DB::table('candidates')
                            ->join('positions', 'positions.id', '=', 'candidates.position_id')
                            ->join('parties', 'candidates.party_id', '=', 'parties.id')->get();
        $partyWithCourse = \DB::table('parties')
                            ->join('courses', 'courses.id', '=', 'parties.course_id')->get();
    	return view('adminviews.admin', compact('courses', 'positions', 
            'parties', 'getCandidatesPos', 'partyWithCourse'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $post = new Candidate;
        $name = $request->first_name .' '. $request->last_name . ' ' . $request->middle_name;
        $post->name = $name;
        $post->course_id = Input::get('courses');
        $post->party_id = $request->get('party');
        $post->position_id = $request->get('position');
        $post->save();
        return redirect('/admin');
    }



    public function storeParty(Request $request)
    {
        $post = new Party;
        $post->party_name = $request->party_name;
        $post->propaganda = $request->party_motto;
        $post->course_id = $request->get('course');
        $post->save();
        return redirect('/admin');
    }

    public function sendBurstSms()
    {
        $basic  = new \Nexmo\Client\Credentials\Basic('30e587fc', 'ad702f759e516aad');
        $client = new \Nexmo\Client($basic);

        $message = $client->message()->send([
            'to' => '+639284629589',
            'from' => 'Acme Inc',
            'text' => 'And the winners are...'
        ]);
        return redirect()->back();
    }

}
