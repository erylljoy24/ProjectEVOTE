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
                            <a href="/home"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="/student/view/parties">
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
                <div class="col-lg-12">
                    <h1 class="page-header">List of Party</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

<!-- PARTY START -->                    
                    <div class="panel-body">
                            <div class="row">

<!-- LIST PARTY START -->
                                <div class="col-lg-6">
                                    
                                    <form role="form">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="table-responsive table-bordered">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Party Name</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($parties as $party)
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td><a href="/student/courses/party/{{ $party->id }}">{{ $party->party_name }}</a></td>
                                                                    <td><a><i class="fa fa-eye"></i></a></td>
                                                                    <td><a><i class="fa fa-pencil"></i></a></td>
                                                                    <td><a><i class="fa fa-times"></i></a></td>
                                                                </tr>
                                                            @endforeach
                                                            
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.table-responsive -->
                                            </div>
                                            <!-- /.panel-body -->
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
    <!-- LIST PARTY END -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
<!-- PARTY END -->


                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
