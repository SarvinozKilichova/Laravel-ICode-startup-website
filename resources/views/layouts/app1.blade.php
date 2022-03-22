<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ICode.uz</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">  
    <script  src="{{ asset('css/app.js') }}"></script>
    <script  src="{{ asset('css/assets/alertify/alertify.js') }}"></script>

       
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/69ed8726ef.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light" onload="d_open()" >

 <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
      <a class="navbar-brand" href="{{ route('Home') }}">ICode<span class="fas fa-laptop-code text-success"></span>uz</a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar"><span class="fas fa-bars"></span> </button>           
      
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="navbar-nav">
        <li  class="nav-item"><a class="nav-link" href="{{ route('video') }}">Video darslar</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('tutorial') }}">Darslar</a></li>
        <li class="nav-item"><a  class="nav-link"href="{{ route('team') }}">Biz haqimizda</a></li>
      </ul>
      <ul class=" navbar-nav ml-auto text-white ">
       
        @guest
        <li class="nav-item pr-3"><a  class="nav-link" href="{{ route('register') }}"><span class="fas fa-user"></span> A'zo bo'lish</a></li>
         @if (Route::has('register'))
           <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><span class="fas fa-sign-in-alt"></span>Kirish</a></li>
                            @endif                                        
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <h3 class="fas fa-user-circle m-0 p-0"></h3> <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">Kabinet</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                      <span class="fas fa-sign-out-alt"></span>{{ __('Chiqish') }} </a>                               
                                                                                                                                              
                                                                            

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
      </ul>
    </div>
  </div>
</nav>

@section('register')
<div class="mt-5 text-center w3-animate-zoom">

                          @if (Route::has('register'))
                            <h4 class="d-inline-block"><a class="text-success " href="{{ route('login') }}">{{ __('Kirish') }}</a></h4>
                                
                                <h4 class="text-success d-inline-block">/</h4>
                          
                              <h4 class="d-inline-block"><a class="text-success" href="{{ route('register') }}">{{ __("Ro'yhatdan o'tish") }}</a></h4> 
                                    
                                
                            @endif
                          
                            </div>
@show
<main class="">
            @yield('content')
            
        </main>





 <div class="container-fluid bg-dark text-white p-3">
<div class="row">
<div class=" pl-5 col-sm-6">
<h3>Murojat uchun</h3>
<br>
<p class="d-inline-block"><i class="fas fa-phone-square-alt"></i>  Tel: +998-99-999-99-99</p>
<br>
<p class="d-inline-block"><i class="fas fa-fax"></i>  Fax: +998-99-999-99-99</p> 
<br>
  <p class="d-inline-block"><i class="fas fa-map-marked-alt"></i>Manzil: O'zbekiston Jizzax vil. Sharof Rashidov tumani</p>
<h4>Biz ijtimoiy tarmoqlarda</h4>
<i class="fab fa-telegram-plane ml-3" style="font-size:25px" ></i>
<i class="fab fa-facebook ml-3" style="font-size:25px"></i>
<i class="fab fa-youtube ml-3" style="font-size:25px"></i>
<i class="fab fa-whatsapp ml-3" style="font-size:25px"></i>    
</div>

<div class="col-sm-6 pl-5 pr-5 ">
<h4 class="text-center"> Qayta aloqa</h4>
<form action="{{ route('Home') }}" method="POST">
<div class="form-group">
<label for="username">Ism</label>
<input type="text" class="form-control" id="username" placeholder="ism" name="username">
<label for="username">Email</label>
<input type="email" class="form-control" id="email" placeholder="emailingiz" name="email">
<label for="comment">Xabar matni</label>
<textarea name="comment"  placeholder="xabar mazmuni" class="form-control" id="comment" rows="5"></textarea>
<button class="btn btn-success text-left mt-1">yuborish</button>
@csrf 

</form>
</div>

</div>
</div>


</div>
@show

<div class="footer col-12 text-center text-white p-2">
<small>&copy; ICode.uz</small>
<p>2020 Uzbekistan</p>
</div>
        </body>


</html>










