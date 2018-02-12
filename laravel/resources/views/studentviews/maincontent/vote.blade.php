<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Evote') }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin-2.css') }}">
    <link href="{{ asset('css/custom-evote.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom-evote.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <a class="navbar-brand" href="home">Evote</a>
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
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="ViewCandidate.html">
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
                    <h1 class="page-header">Vote now "student's name"</h1>
                </div>
            </div>
            <form method="POST" action="/student/votes">
                {{ csrf_field() }}
                <ul class="list-unstyled">
                    @for($i = 0; $i < count($positions); $i++)
                        <li>
                            {{ $positions[$i]->position_name }} 
                        </li>
                        @foreach($getCandidatesPos as $allCands)
                            @if($positions[$i]->id == $allCands->position_id)
                                <input type="checkbox" name="candidates[]" value="{{ $allCands->id }}">{{ $allCands->name }}
                                <br><br>
                            @endif
                        @endforeach
                    @endfor
                
                    {{-- @foreach($positions as $position)
                        
                        <select class="form-control">
                            <option>Reginald</option>
                            <option>Lebron James</option>
                        </select>
                    @endforeach --}}
                </ul>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <!-- /.row -->
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
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
                                                            <img src="photo/id_1.png">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <input type="radio" name="President" id="optionsRadiosInline1" value="option1" checked><strong>John Davis</strong> - Liberal Party<br/>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-xs-6 col-sm-6 img1x1">
                                                            <img src="photo/id_1.png">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <input type="radio" name="President" id="optionsRadiosInline2" value="option2" checked><strong>John Davis</strong> - Liberal Party<br/>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td>
                                                        <div class="col-xs-6 col-sm-6 img1x1">
                                                            <img src="photo/id_1.png">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <input type="radio" name="President" id="optionsRadiosInline3" value="option3" checked><strong>John Davis</strong> - Liberal Party<br/>
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
                                                            <img src="photo/id_1.png">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <input type="radio" name="VP" id="optionsRadiosInline1" value="option1" checked><strong>John Davis</strong> - Liberal Party<br/>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-xs-6 col-sm-6 img1x1">
                                                            <img src="photo/id_1.png">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <input type="radio" name="VP" id="optionsRadiosInline2" value="option2" checked><strong>John Davis</strong> - Liberal Party<br/>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td>
                                                        <div class="col-xs-6 col-sm-6 img1x1">
                                                            <img src="photo/id_1.png">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <input type="radio" name="VP" id="optionsRadiosInline3" value="option3" checked><strong>John Davis</strong> - Liberal Party<br/>
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
                                <h2 for="disabledSelect">Program</h2>
                                <select id="disabledSelect" class="form-control">
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
                                                            <img src="photo/id_1.png">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <input type="radio" name="ProgP" id="optionsRadiosInline1" value="option1" checked><strong>John Davis</strong> - Liberal Party<br/>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-xs-6 col-sm-6 img1x1">
                                                            <img src="photo/id_1.png">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <input type="radio" name="ProgP" id="optionsRadiosInline2" value="option2" checked><strong>John Davis</strong> - Liberal Party<br/>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td>
                                                        <div class="col-xs-6 col-sm-6 img1x1">
                                                            <img src="photo/id_1.png">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <input type="radio" name="ProgP" id="optionsRadiosInline3" value="option3" checked><strong>John Davis</strong> - Liberal Party<br/>
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
                                    Program Representatives<br/><strong>Please select 3 or less</strong>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="col-xs-6 col-sm-6 img1x1">
                                                            <img src="photo/id_1.png">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <input type="checkbox"><strong>John Davis</strong> - Liberal Party<br/>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-xs-6 col-sm-6 img1x1">
                                                            <img src="photo/id_1.png">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <input type="checkbox"><strong>John Davis</strong> - Liberal Party<br/>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td>
                                                        <div class="col-xs-6 col-sm-6 img1x1">
                                                            <img src="photo/id_1.png">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <input type="checkbox"><strong>John Davis</strong> - Liberal Party<br/>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="col-xs-6 col-sm-6 img1x1">
                                                            <img src="photo/id_1.png">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <input type="checkbox"><strong>John Davis</strong> - Liberal Party<br/>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-xs-6 col-sm-6 img1x1">
                                                            <img src="photo/id_1.png">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <input type="checkbox"><strong>John Davis</strong> - Liberal Party<br/>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td>
                                                        <div class="col-xs-6 col-sm-6 img1x1">
                                                            <img src="photo/id_1.png">
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="result-margin">
                                                                <input type="checkbox"><strong>John Davis</strong> - Liberal Party<br/>
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
                            <div class="col-lg-12">
                                    <button type="button" class="btn btn-success btn-lg page-header"><i class="fa fa-check"></i> Submit Vote!</button>
                                    <button type="reset" class="btn btn-warning btn-lg page-header"">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="panel-footer">
                <div class="input-group">
                    University of South Eastern Philippines
                </div>
            </div> --}}
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="../vendor/flot/excanvas.min.js"></script>
    <script src="../vendor/flot/jquery.flot.js"></script>
    <script src="../vendor/flot/jquery.flot.pie.js"></script>
    <script src="../vendor/flot/jquery.flot.resize.js"></script>
    <script src="../vendor/flot/jquery.flot.time.js"></script>
    <script src="../vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="../data/flot-data.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>



</body>

</html>
