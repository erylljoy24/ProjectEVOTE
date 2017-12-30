<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>USEP Evote</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="narrow-jumbotron.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="padding-bottom: 3px; padding-top: 3px;">
    <div class="container">
      <a class="navbar-brand" href="#" v-on:click.prevent="navigateTo('/')">Project Evote</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <button class="btn btn-link nav-link" v-on:click.prevent="navigateTo('/')">
              Home
            </button>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item" data-toggle="modal" data-target="#exampleModal">
            <a class="nav-link cd-signin" href="#">Sign in</a>
          </li>
          <li class="nav-item" data-toggle="modal" data-target="#exampleRegistration">
            <a class="nav-link cd-signup" href="#">Sign up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

</body>
</html>