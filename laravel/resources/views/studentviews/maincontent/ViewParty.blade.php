<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <div class="col-lg-12">
                    <h1 class="page-header">Candidates</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

<!-- PARTY START -->                    
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <i class="fa fa-user"></i> View Candidate
                        </div>
                        <div class="panel-body">
                            <div class="row">

<!-- LIST PARTY START -->
                                <div class="col-lg-6">
                                    <h1>List of Party <i class="fa fa-th-list"></i></h1>
                                    <form role="form">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="form-group input-group">
                                                    <input type="text" class="form-control" placeholder="Search Party">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                                <div class="table-responsive table-bordered">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Party Name</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Party Party!</td>
                                                                <td><a><i class="fa fa-eye"></i></a></td>
                                                                <td><a><i class="fa fa-pencil"></i></a></td>
                                                                <td><a><i class="fa fa-times"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Anak Pawis</td>
                                                                <td><a><i class="fa fa-eye"></i></a></td>
                                                                <td><a><i class="fa fa-pencil"></i></a></td>
                                                                <td><a><i class="fa fa-times"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Elite Party</td>
                                                                <td><a><i class="fa fa-eye"></i></a></td>
                                                                <td><a><i class="fa fa-pencil"></i></a></td>
                                                                <td><a><i class="fa fa-times"></i></a></td>
                                                            </tr>
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
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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
