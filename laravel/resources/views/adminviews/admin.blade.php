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
                            
                            <div class="row">
                                <div class="col-md-10">
                                    <i class="fa fa-user"></i> Add Candidate
                                </div>
                                <div class="col-md-2 float-right">
                                    {{-- <button class="btn btn-danger">Announce Winners</button> --}}
                                    <a href="/admin/send" class="btn btn-primary">Send SMS</a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="panel-body">
                            <div class="row">
    <!-- ADD CANDIDATE START -->                                   
                                <div class="col-lg-4">
                                    <form method="POST" action="/admin/candidates" enctype="multipart/form-data">
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
    <!-- ADD CANDIDATE END -->

    <!-- LIST CANDIDATE START --> 
                                <div class="col-lg-8">
                                    
                                    <form role="form">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                List of Candidates
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
                                                <div class="table-responsive table-bordered">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
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
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <i class="fa fa-group"></i> Add Party
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST" action="/admin">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Party Name</label>
                                            <input class="form-control" name="party_name" placeholder="Party Name">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label><i class="fa fa-camera-retro"></i> Party Photo</label>
                                            <input type="file">
                                        </div> --}}

                                        <div class="form-group">
                                            <label>Party Motto</label>
                                            <textarea class="form-control" name="party_motto" rows="3"></textarea>
                                        </div>

                                        <div class="form-group">
                                                <label>Position to Run</label>
                                                <select name="course" class="form-control">

                                                    @foreach($courses as $course)
                                                        <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-warning">Reset</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
    <!-- ADD PARTY END -->

    <!-- LIST PARTY START -->
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                List of Party
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                {{-- <div class="form-group input-group">
                                                    <input type="text" class="form-control" placeholder="Search Party">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                                        </button>
                                                    </span>
                                                </div> --}}
                                                <div class="table-responsive table-bordered">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Party Name</th>
                                                                <th>Party Course</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @for($i = 0; $i < count($partyWithCourse); $i++)
                                                                <tr>
                                                                    <td>{{ $i+1 }}</td>
                                                                    <td>{{ $partyWithCourse[$i]->party_name }}</td>
                                                                    <td>{{ $partyWithCourse[$i]->course_name }}</td>
                                                                </tr>
                                                            @endfor
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
