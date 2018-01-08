@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-3">{{ $party->party_name }}</h1>
        <p>{{ $party->propaganda }}</p>
    </div>
    <div class="row">

      @foreach($getCandidatesPos as $candidate)
        <div class="col-md-4 text-center">
          <img class="img-thumbnail" src="{{ asset('image/download.png') }}">
          <h3 style="margin-top: 0px; padding-bottom: 0px;">{{ $candidate->name }}</h3>
          <p><a class="btn btn-secondary" href="#" role="button">{{ $candidate->position_name }} &raquo;</a></p>
        </div>
      @endforeach
      
    </div>

    <hr>
  </div>
@endsection