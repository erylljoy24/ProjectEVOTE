<!DOCTYPE html>
<html>
<head>
	<title>USEP Evote</title>
</head>
<body>

	@include('studentviews.header');

	<div class="container">
		<main role="main">

        <div class="jumbotron">
          <ul class="list-group list-inline">
          	<li class="list-group-item">
          		<div>
	                <a href="{{ url('/student/courses/specified') }}">
	            		 <h1>BSAE</h1>
	                </a>
          		</div>
          	</li>
          	<li class="list-group-item">
          		<div>
	                <a href="{{ url('/student/courses/specified') }}">
	            		<h1>BSA</h1>
	                </a>
          		</div>
          	</li>
          	<li class="list-group-item">
          		<div>
	                <a href="{{ url('/student/courses/specified') }}">
	            		<h1>BSIT</h1>
	                </a> 
          		</div>
          	</li>
          	<li class="list-group-item">
          		<div>
	                <a href="{{ url('/student/courses/specified') }}">
	            		<h1>BSF</h1>
	                </a>
          		</div>
          	</li>
            <li class="list-group-item">
              <div>
                <a href="{{ url('/student/courses/specified') }}">
                  <h1>BSEE</h1>
                </a>
              </div>
            </li>
            <li class="list-group-item">
              <div>
                <a href="{{ url('/student/courses/specified') }}">
                  <h1>BSSE</h1>
                </a>
              </div>
            </li>
            <li class="list-group-item">
              <div>
                <a href="{{ url('/student/courses/specified') }}">
                  <h1>BSF</h1>
                </a>
              </div>
            </li>
          </ul>
        </div>
	</div>

</body>
</html>