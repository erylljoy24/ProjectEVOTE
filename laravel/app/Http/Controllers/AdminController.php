<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Party;
use App\User;
use App\Position;
use App\Candidate;
use App\Ssg_candidate;
use App\Ssg_party;
use Auth;
use Image;
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
        $positions = Position::paginate(1);
        $parties = Party::all();
        $getCandidatesPos = \DB::table('candidates')
                            ->join('positions', 'positions.id', '=', 'candidates.position_id')
                            ->join('parties', 'parties.id', '=', 'candidates.party_id')->get();
        // dd($getCandidatesPos);
        $partyWithCourse = \DB::table('parties')
                            ->join('courses', 'courses.id', '=', 'parties.course_id')->get();
        return view('adminviews.admin_sub_views.index', compact('courses', 'positions', 
            'parties', 'getCandidatesPos', 'partyWithCourse'));
    }

    

    /*
    *   Adding Candidates Functions
    */
    public function displayAddCandidates()
    {
        $courses = Course::all();
        $positions = Position::paginate(1);
        $parties = Party::all();
        $partyWithCourse = \DB::table('parties')
                            ->join('courses', 'courses.id', '=', 'parties.course_id')->get();

        return view('adminviews.admin_sub_views.AddCandidate', compact('courses', 'positions', 
            'parties', 'partyWithCourse'));
    }

    public function store(Request $request)
    {
        
        $post = new Candidate;
        $name = $request->first_name .' '. $request->last_name . ' ' . $request->middle_name;
        $post->name = $name;

        $image = $request->file('image');
        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('storage\profilepics' . $filename);

        Image::make($image->getRealPath())->resize(100, 100)->save($path);
        $post->image = $filename;

        $post->course_id = Input::get('courses');
        $post->party_id = $request->get('party');
        $post->position_id = $request->get('position');
        $post->save();
        return redirect('/admin');
    }

    public function viewAllCandidates()
    {
        $getCandidatesPos = \DB::table('candidates')
                            ->join('positions', 'positions.id', '=', 'candidates.position_id')
                            ->join('parties', 'parties.id', '=', 'candidates.party_id')->paginate(5);
        return view('adminviews.admin_sub_views.ViewCandidate', compact('getCandidatesPos'));
    }
    /*
    *   end Adding Candidates Functions
    */



    /*
    *   Adding Parties Functions
    */
    public function displayStoreParty()
    {
        $courses = Course::all();
        return view('adminviews.admin_sub_views.AddParty', compact('courses'));
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

    public function displayAddProgramParty()
    {
        $parties = Party::all();
        $partyWithCourse = \DB::table('parties')
                            ->join('courses', 'courses.id', '=', 'parties.course_id')->get();
        return view('adminviews.admin_sub_views.ViewParty', compact('parties', 'partyWithCourse'));
    }
    /*
    *   end Adding Parties Functions
    */



    public function displayStoreTCSCCanidates()
    {
        $courses = Course::all();
        $positions = Position::all();
        $parties = Ssg_party::all();
        return view('adminviews.admin_sub_views.AddStudent', compact('courses', 'positions', 'parties'));
    }

    public function storeTCSCCanidates(Request $request)
    {
        // dd($request);
        $post = new Ssg_candidate;
        $name = $request->first_name .' '. $request->last_name . ' ' . $request->middle_name;
        $post->name = $name;
        $post->student_id = $request->student_id;

        $image = $request->file('image');
        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('storage\profilepics' . $filename);

        Image::make($image->getRealPath())->resize(100, 100)->save($path);
        $post->image = $filename;

        $post->course_id = $request->get('courses');
        $post->ssg_party_id = $request->get('party');
        $post->position_id = $request->get('position');
        $post->save();
        return redirect('/admin');
    }

    public function viewStoredTCSCCanidates()
    {
        $getCandidatesPos = \DB::table('ssg_candidates')
                            ->join('positions', 'positions.id', '=', 'ssg_candidates.position_id')
                            ->join('ssg_parties', 'ssg_parties.id', '=', 'ssg_candidates.ssg_party_id')->get();
        // dd($getCandidatesPos);
        return view('adminviews.admin_sub_views.ViewStudent', compact('getCandidatesPos'));
    }
    









    public function deleteCandidate($request)
    {
        $table = Candidate::where('name', '=', $request)->get();
        foreach ($table as $key) 
        {
            \DB::table('candidates')->delete($key->id);
        }
        return redirect('/admin');
    }

    public function sendBurstSms()
    {
        $basic  = new \Nexmo\Client\Credentials\Basic('30e587fc', 'ad702f759e516aad');
        $client = new \Nexmo\Client($basic);
        $users = User::all();
        // 09094966920

        for($x = 0; $x < count($users); $x++)
        {
            // var_dump();
            
            $message = $client->message()->send([
                'to' => $users[$x]->contact_number,
                'from' => 'Acme Inc',
                'text' => 'And the winners are...'
            ]);
        }

        
        return redirect()->back();
    }

}
