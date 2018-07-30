<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EVOTE Admin</title>

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
                <a class="navbar-brand" href="index.html">Evote: Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
        

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
                            <a href="admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
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
                            <a href="#"><i class="fa fa-user fa-fw"></i> Student Council Candidate</span></a>
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
                    <h1 class="page-header">LIVE</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-2">
                                    <i class="fa fa-desktop fa-5x"></i>
                                </div>
                                <div class="col-xs-10 text-right">
                                    <span><h3>Live Updates!</h3></span>
                                    <button type="button" class="btn btn-primary"><i class="fa fa-comments"></i> Send Notification</button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                        <div class="form-group">
                            <h2>Program</h2>
                        </div>
                            @for($i = 0; $i < count($positions); $i++)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        {{ $positions[$i]->position_name }}
                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                                <tbody>
                                                    <tr>
                                                        @foreach($getCandidatesPos as $allCands)
                                                            @if($positions[$i]->id == $allCands->position_id)
                                                                {{-- <tr> --}}
                                                                    {{-- <td></td> --}}
                                                                    {{-- <td>{{ $positions[$i]->position_name }}</td> --}}
                                                                    {{-- <td>{{ $allCands->party_name }}</td> --}}
                                                                    {{-- <td></td> --}}
                                                                {{-- </tr> --}}
                                                                <td>
                                                                    <div class="col-xs-6 col-sm-6 img1x1">
                                                                        <img src="{{ asset('storage/' .'profilepics'. $allCands->image) }}">
                                                                    </div>
                                                                    <div class="col-xs-6 col-sm-6">
                                                                        <div class="result-margin">
                                                                            <strong>{{ $allCands->name }}</strong><br/>{{ $allCands->party_name }}<br/>
                                                                        </div>
                                                                        <div class="result-margin">
                                                                            <strong># of Vote:</strong> 
                                                                            @if($allCands->vote_count != 0)
                                                                                {{ $allCands->vote_count }}
                                                                            @else
                                                                                {{ 0 }}
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                            @endif
                                                        @endforeach
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                            <nav aria-label="Page navigation example" class="text-center">
                              {{ $positions->links() }}
                            </nav>
                            <!-- /.panel -->
                            {{-- <div class="form-group">
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
                                                            <img src="photo/id_1.png">
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
                                                            <img src="photo/id_1.png">
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
                                                            <img src="photo/id_1.png">
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
                                </div>
                            </div> --}}


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
    <script src="{{asset('js/metisMenu.min.js')}}"></script>
    <script src="{{asset('js/sb-admin-2.js')}}"></script>



</body>

</html>
