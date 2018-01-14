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


                    <ul>
                        @for($i = 0; $i < count($positions); $i++)
                            <li>
                                <h3 class="text-danger">{{ $positions[$i]->position_name }}</h3>
                            </li>
                            @foreach($getCandidatesPos as $allCands)
                                @if($positions[$i]->id == $allCands->position_id)
                                    <p class="lead">{{ $allCands->name }}: {{ $allCands->vote_count }}</p>
                                @endif
                            @endforeach
                        @endfor
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
