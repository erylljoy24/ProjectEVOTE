<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Evote') }}</title>

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
             {{--    <li class="dropdown">
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
                </li> --}}

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="home"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="/student/view/candidates">
                                <i class="fa fa-user fa-fw"></i> View Candidates
                            </a>
                        </li>
                        <li>
                            <a href="ViewParty.html">
                                <i class="fa fa-group"></i> View Party
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-10">
                    <h1 class="page-header">Welcome "student's name"</h1>
                </div>
                <div class="col-lg-2">
                    <a href="/student/votenew">
                        <button type="button" class="btn btn-danger btn-lg page-header"><i class="fa fa-check"></i> Vote Now!</button>
                    </a>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-2">
                                    {{-- <i class="fa fa-desktop fa-5x"></i> --}}
                                </div>
                                <div class="col-xs-10 text-right">
                                    <span><h3 id="live-update">Live Updates!</h3></span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                        <div class="form-group">
                            <h2>TCSC</h2>
                        </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    President
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="col-xs-6 col-sm-6 img1x1">
                                                            <img src="{{ asset('image/download.png') }}">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <strong>John Davis</strong><br/>Liberal Party<br/>
                                                            </div>
                                                            <div class="result-margin">
                                                                <strong># of Vote:</strong> 124</br><strong>Percentage:</strong> 20%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-xs-6 col-sm-6 img1x1">
                                                            <img src="{{ asset('image/download.png') }}">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <strong>John Davis</strong><br/>Liberal Party<br/>
                                                            </div>
                                                            <div class="result-margin">
                                                                <strong># of Vote:</strong> 124</br><strong>Percentage:</strong> 20%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-xs-6 col-sm-6 img1x1">
                                                            <img src="{{ asset('image/download.png') }}">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <strong>John Davis</strong><br/>Liberal Party<br/>
                                                            </div>
                                                            <div class="result-margin">
                                                                <strong># of Vote:</strong> 124</br><strong>Percentage:</strong> 20%
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Vice-President
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="col-xs-6 col-sm-6 img1x1">
                                                            <img src="{{ asset('image/download.png') }}">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <strong>John Davis</strong><br/>Liberal Party<br/>
                                                            </div>
                                                            <div class="result-margin">
                                                                <strong># of Vote:</strong> 124</br><strong>Percentage:</strong> 20%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-xs-6 col-sm-6 img1x1">
                                                            <img src="{{ asset('image/download.png') }}">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <strong>John Davis</strong><br/>Liberal Party<br/>
                                                            </div>
                                                            <div class="result-margin">
                                                                <strong># of Vote:</strong> 124</br><strong>Percentage:</strong> 20%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-xs-6 col-sm-6 img1x1">
                                                            <img src="{{ asset('image/download.png') }}">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <strong>John Davis</strong><br/>Liberal Party<br/>
                                                            </div>
                                                            <div class="result-margin">
                                                                <strong># of Vote:</strong> 124</br><strong>Percentage:</strong> 20%
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                            <div class="form-group">
                                <h2>Program</h2>
                                <select class="form-control">
                                    <option>Information Technology</option>
                                    <option>Education</option>
                                    <option>Engineering</option>
                                    <option>Business Administration</option>
                                    <option>Pharmacy</option>
                                </select>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Program President
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="col-xs-6 col-sm-6 img1x1">
                                                            <img src="{{ asset('image/download.png') }}">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <strong>John Davis</strong><br/>Liberal Party<br/>
                                                            </div>
                                                            <div class="result-margin">
                                                                <strong># of Vote:</strong> 124</br><strong>Percentage:</strong> 20%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-xs-6 col-sm-6 img1x1">
                                                            <img src="{{ asset('image/download.png') }}">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <strong>John Davis</strong><br/>Liberal Party<br/>
                                                            </div>
                                                            <div class="result-margin">
                                                                <strong># of Vote:</strong> 124</br><strong>Percentage:</strong> 20%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-xs-6 col-sm-6 img1x1">
                                                            <img src="{{ asset('image/download.png') }}">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <strong>John Davis</strong><br/>Liberal Party<br/>
                                                            </div>
                                                            <div class="result-margin">
                                                                <strong># of Vote:</strong> 124</br><strong>Percentage:</strong> 20%
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="panel-footer">
                <div class="input-group">
                    University of South Eastern Philippines
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <!-- <script src="../vendor/metisMenu/metisMenu.min.js"></script> -->




</body>

</html>
