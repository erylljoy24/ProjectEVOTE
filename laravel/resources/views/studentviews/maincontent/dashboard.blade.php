@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">You Course Parties</div>
                <div class="panel-body">
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
                    
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection