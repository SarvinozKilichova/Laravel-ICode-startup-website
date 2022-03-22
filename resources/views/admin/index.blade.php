<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icode.uz</title>

   
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">  
    <script  src="{{ asset('css/app.js') }}"></script>
    <script  type="text/javascript" src="{{ asset('css/js/ckeditor/ckeditor.js') }}"></script>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    
    <script src="https://kit.fontawesome.com/69ed8726ef.js" crossorigin="anonymous"></script>
    </head>



<body>
<a href="{{ route('Home') }}" ><h1 class="text-center text-dark">ICode<span class="fas fa-laptop-code text-success"></span>uz</a></h1></a>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="{{ route('Home') }}">ICode.uz</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('team') }}">Bizning Jamoa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('video') }}">Video darslar</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="{{ route('tutorial') }}" id="navbardrop" data-toggle="dropdown">
    Darslar
      </a>
      <div class="dropdown-menu bg-light">
      <h6 class='container'>Front-end kurslar</h6>
        <a class="dropdown-item" href="{{ route('html')}}">Html</a>
        <a class="dropdown-item" href="{{ route('css')}}">Css</a>
        <a class="dropdown-item" href="{{ route('js')}}">Javascript</a>
        <h6 class="container" >Back-end kurslar</h6>
        <a class="dropdown-item" href="{{ route('php')}}">PHP</a>
        <h6 class='container'>Database</h6>
        <a class="dropdown-item" href="{{ route('mysql')}}">Mysql</a>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link mr-auto" href="{{ route('login') }}">Kirish</a>
    </li>
   
  </ul>
</nav>
   

@if (count($errors)>0)
                        <div class="alert alert-danger mt-5" >
                        <ul>
                        @foreach($errors as $error)
                        {{ session('status') }}
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>

                            
                        </div>
                    @endif


@if (session('status'))
                        <div class="alert alert-success m-5" >
                            {{ session('status') }}
                        </div>
                    @endif





@section('navbar')
<div class="text-center text-dark mt-5">
<h2 >{{ $title }}</h2>

<a href="{{ route('teams') }}"><button class="btn btn-success mt-2">Jamoa</button></a>
<a href="{{ route('AllTutorials') }}"><button class="btn btn-success mt-2">Barcha Darslar</button></a>
<a href="{{ route('videos') }}"><button class="btn btn-success mt-2">Video darslar</button></a>
<a href="{{ route('tutorials') }}"><button class="btn btn-success mt-2">Darslar</button></a>



</div>
 @show
@section('content')
 <div class="m-5">
  </div>
 @show
</body>





 </html>