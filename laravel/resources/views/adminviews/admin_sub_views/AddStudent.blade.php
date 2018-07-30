<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin-2.css') }}">
    <link href="{{ asset('css/custom-evote.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom-evote.css') }}">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Evote</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <!-- <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="register.html"><i class="fa fa-user fa-fw"></i> Add Student Account</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="AddCandidate.html"><i class="fa fa-user fa-fw"></i> Add Candidate</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="AddParty.html"><i class="fa fa-gear fa-fw"></i> Add Party</a>
                        </li>
                    </ul>
                </li> -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Candidate</span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/add">Add Candidates</a>
                                </li>
                                <li>
                                    <a href="/admin/view">View Candidates</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Add TCSC Candidate</span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/add/tcscCand">Add Candidates</a>
                                </li>
                                <li>
                                    <a href="/admin/view/tcscCand">View Candidates</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-group"></i> Party</span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/add/parties">Add Party</a>
                                </li>
                                <li>
                                    <a href="/admin/view/parties">View Party</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Student</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

<!-- STUDENT START -->                    
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <i class="fa fa-user"></i> Add Student
                        </div>
                        <div class="panel-body">
                            <div class="row">
    <!-- ADD STUDENT START -->                                   
                                <div class="col-lg-12">
                                    <form method="POST" action="/admin/add/tcscCand/now" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input class="form-control" name="first_name" placeholder="Candidates First Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input class="form-control" name="last_name" placeholder="Candidates Last Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Middle Name</label>
                                            <input class="form-control" name="middle_name" placeholder="Candidates Middle Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Student #</label>
                                            <input class="form-control" name="student_id" placeholder="Student #">
                                        </div>
                                        <div class="form-group">
                                            <label><i class="fa fa-camera-retro"></i> Candidate Photo</label>
                                            <input type="file" name="image">
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group col-xs-6">
                                                <label>Course</label>
                                                <select name="courses" class="form-control">
                                                    @foreach($courses as $course)
                                                        <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-xs-6">
                                                <label>Year</label>
                                                <select class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group col-xs-6">
                                                <label>Position to Run</label>
                                                <select name="position" class="form-control">

                                                    @foreach($positions as $position)
                                                        <option value="{{ $position->id }}">{{ $position->position_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-xs-6">
                                                <label>Party/Group</label>
                                                <select name="party" class="form-control">
                                                    @foreach($parties as $party)
                                                        <option value="{{ $party->id }}">{{ $party->party_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-warning">Reset</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
    <!-- ADD STUDENT END -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
<!-- CANDIDATE END -->


                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/metisMenu.min.js')}}"></script>
    <script src="{{asset('js/sb-admin-2.js')}}"></script>

</body>

</html>
