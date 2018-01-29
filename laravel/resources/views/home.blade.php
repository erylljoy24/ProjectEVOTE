@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Welcom {{ $user->name }}! for SSG online voting</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Course: {{ $course->course_name }}
                    @if($user->hasvoted == 0)
                        </br><a href="{{ url('/student') }}">Vote now</a>
                    @else
                        <p>You already voted!</p>
                    @endif


                    <div class="table-responsive table-bordered">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Position to Run</th>
                                    <th>Vote Counts</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i = 0; $i < count($positions); $i++)
                                    @foreach($getCandidatesPos as $allCands)
                                        @if($positions[$i]->id == $allCands->position_id)
                                            <tr>
                                                {{-- <td>{{ $allCands->name }}</td> --}}
                                                <td>{{ $positions[$i]->position_name }}</td>
                                                {{-- <td>{{ $allCands->party_name }}</td> --}}
                                                <td>{{ $allCands->vote_count }}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endfor
                            </tbody>
                        </table>
                    </div>

                    <ul>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Your program parties are:
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled">
                        @foreach($parties as $party)
                            <li><a href="/student/courses/party/{{ $party->id }}">{{ $party->party_name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
