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
                            <a href="#"><i class="fa fa-user fa-fw"></i> Candidate<span class="fa arrow"></span></a>
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
                            <a href="#"><i class="fa fa-group"></i> Party<span class="fa arrow"></span></a>
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
                    <h1 class="page-header">Candidates</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

<!-- STUDENT START -->                    
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <i class="fa fa-user"></i> View Candidate
                        </div>
                        <div class="panel-body">
                            <div class="row">

    <!-- LIST CANDIDATE START --> 
                                <div class="col-lg-12">
                                    <h1>List of Candidates <i class="fa fa-th-list"></i></h1>
                                    <form role="form">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                {{-- <div class="form-group input-group">
                                                    <input type="text" class="form-control" placeholder="Search Candidate">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                                        </button>
                                                    </span>
                                                </div> --}}
                                                {{-- <form class="form-group col-lg-6">
                                                    <div class="form-group col-lg-12">
                                                        <label>Party</label>
                                                        <select class="form-control">
                                                            <option>All</option>
                                                            <option>Liberal</option>
                                                            <option>Democratic Unionist</option>
                                                            <option>Elite</option>
                                                            <option>People's Reform Party</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-xs-12">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form> --}}
                                                <div class="table-responsive table-bordered">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Name</th>
                                                                <th>Position to Run</th>
                                                                <th>Party</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($getCandidatesPos as $cands)
                                                                <tr>
                                                                    <td><img src="{{ asset('storage/' .'profilepics'. $cands->image) }}"></td>
                                                                    <td>{{ $cands->name }}</td>
                                                                    <td>{{ $cands->position_name }}</td>
                                                                    <td>{{ $cands->party_name }}</td>
                                                                    <td>
                                                                        <a class="btn btn-danger" href="/admin/delete/{{ $cands->name }}">
                                                                            delete
                                                                        </a>
                                                                    </td>
                                                                    <td><a><i class="fa fa-pencil"></i></a></td>
                                                                    <td><a><i class="fa fa-times"></i></a></td>

                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    <nav aria-label="Page navigation example" class="text-center">
                                                      {{ $getCandidatesPos->links() }}
                                                    </nav>
                                                </div>
                                                <!-- /.table-responsive -->
                                            </div>
                                            <!-- /.panel-body -->
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
    <!-- LIST CANDIDATE END --> 
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
