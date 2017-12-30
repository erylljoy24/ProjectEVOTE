<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    public function index()
    {
    	return view('studentviews.maincontent.dashboard');
    }

    public function showCourses()
    {
    	return view('studentviews.maincontent.courses');
    }
    public function showSpecifiedCourse()
    {
    	return view('studentviews.maincontent.specifiedcourse');
    }
    public function showPartyPages()
    {
        return view('studentviews.maincontent.partypage');
    }
}
