@extends('adminviews.header')

@section('content')
<div class="container">
    <div id="wrapper">
        <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

<!-- CANDIDATE START -->                    
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <i class="fa fa-user"></i> Add Candidate
                        </div>
                        <div class="panel-body">
                            <div class="row">
    <!-- ADD CANDIDATE START -->                                   
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input class="form-control" placeholder="Candidates First Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input class="form-control" placeholder="Candidates Last Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Middle Name</label>
                                            <input class="form-control" placeholder="Candidates Middle Name">
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <div class="col-lg-3">
                                                <label>Birth Date</label>
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="number" class="form-control" placeholder="Year">
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="number" class="form-control" placeholder="Month">
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="number" class="form-control" placeholder="Day">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><i class="fa fa-camera-retro"></i> Candidate Photo</label>
                                            <input type="file">
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group col-xs-6">
                                                <label>Course</label>
                                                <select class="form-control">
                                                    <option>Education</option>
                                                    <option>Civil Engineering</option>
                                                    <option>Businees Administration</option>
                                                    <option>Information Technology Education</option>
                                                    <option>Accountancy</option>
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
                                                <select class="form-control">
                                                    <option>President</option>
                                                    <option>Vice-President</option>
                                                    <option>Secretary</option>
                                                    <option>Muse</option>
                                                    <option>Course Rep.</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-xs-6">
                                                <label>Party/Group</label>
                                                <select class="form-control">
                                                    <option>Party Party!</option>
                                                    <option>Anak Pawis</option>
                                                    <option>Walang Forever</option>
                                                    <option>Elite Party</option>
                                                    <option>Indepent</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-warning">Reset</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
    <!-- ADD CANDIDATE END -->

    <!-- LIST CANDIDATE START --> 
                                <div class="col-lg-6">
                                    <h1>List of Candidates <i class="fa fa-th-list"></i></h1>
                                    <form role="form">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="form-group input-group">
                                                    <input type="text" class="form-control" placeholder="Search Candidate">
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
                                                                <th>Name</th>
                                                                <th>Position to Run</th>
                                                                <th>Party</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Mark Otto</td>
                                                                <td>President</td>
                                                                <td>Independent</td>
                                                                <td><a><i class="fa fa-eye"></i></a></td>
                                                                <td><a><i class="fa fa-pencil"></i></a></td>
                                                                <td><a><i class="fa fa-times"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Jacob Thornthon</td>
                                                                <td>President</td>
                                                                <td>Party Party</td>
                                                                <td><a><i class="fa fa-eye"></i></a></td>
                                                                <td><a><i class="fa fa-pencil"></i></a></td>
                                                                <td><a><i class="fa fa-times"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Larry Bird</td>
                                                                <td>Secretary</td>
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
    <!-- LIST CANDIDATE END --> 
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
<!-- CANDIDATE END -->


<!-- PARTY START -->
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <i class="fa fa-group"></i> Add Party
                        </div>
                        <div class="panel-body">
                            <div class="row">
    <!-- ADD PARTY START -->
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Party Name</label>
                                            <input class="form-control" placeholder="Party Name">
                                        </div>
                                        <div class="form-group">
                                            <label><i class="fa fa-camera-retro"></i> Party Photo</label>
                                            <input type="file">
                                        </div>
                                        <div class="form-group">
                                            <label>Party Motto</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-warning">Reset</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
    <!-- ADD PARTY END -->

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
    </div>
    <!-- /#wrapper -->
@endsection
