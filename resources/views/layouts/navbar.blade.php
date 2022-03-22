<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   
    @section('nav')
     <nav class="navbar navbar-expand-md bg-dark navbar-dark">
     	<a class="navbar-brand" href="#"><a href="{{ route('Home') }}" ><h1 class=" text-white w3-animate-top">ICode.<span class="text-success">uz</span></h1></a>
  </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">  </button>           
      
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#">Video darslar</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Darslar</a></li>
        <li class="nav-item"><a  class="nav-link"href="#">Biz haqimizda</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>       
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item"><a href="#"><span class="glyphicon glyphicon-user"></span> A'zo bo'lish</a></li>
        <li class="nav-item"><a href="#"><span class="glyphicon glyphicon-log-in"></span>Kirish</a></li>
      </ul>
    </div>
  </div>
</nav>
@show
 </body>
</html>