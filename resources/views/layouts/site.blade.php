 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icode.uz</title>   
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">  
    <script  src="{{ asset('css/app.js') }}"></script>   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    
    <script src="https://kit.fontawesome.com/69ed8726ef.js" crossorigin="anonymous"></script>
        </head>


<body class="bg-light ">
  @section('navbar')
 
       <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
      <a class="navbar-brand" href="{{ route('Home') }}">ICode<span class="fas fa-laptop-code text-success"></span>uz</a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar"><span class="fas fa-bars"></span> </button>           
      
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="{{ route('video') }}">Video darslar</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('tutorial') }}">Darslar</a></li>
        <li class="nav-item"><a  class="nav-link"href="{{ route('team') }}">Biz haqimizda</a></li>
      </ul>
      <ul class=" navbar-nav ml-auto text-white ">

        @guest
         @if (Route::has('register'))
         <li class="nav-item"><a class="nav-link" href="{{ route('register') }}"><span class="fas fa-user-circle"></span>A'zo bo'lish</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><span class="fas fa-sign-in-alt"></span>Kirish</a></li>
                            @endif                                        
                        @else
                           
                                <
                                  <h3 class="fas fa-user-circle m-0 p-0"></h3> <span class="caret"></span> <span class="caret"></span>
                                </a>

                                
                                    <a class="d" href="{{ route('dashboard') }}">Kabinet</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                      <span class="fas fa-sign-out-alt"></span>{{ __('chiqish') }} </a>   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
      </ul>
    </div>
  </div>
</nav>
        @show
              
        
        
      
  
 
 @section('content')
<div class=" row bg-success mr-0 ml-0 mt-2 ">
  <div class=" w3-animate-zoom col-sm-8">
    <h3 class="text-white pt-5 pl-5 pr-5">Biz bilan yangi olamni kashf eting!</h3>
    <h6 class="text-white pt-3 pl-5 pb-5 pr-5">Dasturlashni o'rganishni boshlamoqchimisiz? Tabriklaymiz siz manzildan adashmadinggiz! Hoziroq o'rganishni boshlang </h6>
    <h6 class="pl-5 pb-5 ">
    <a href="{{ route('register') }}" class="text-white border border-white p-3" >A'zo bo'lish</a>
    </h6>
  </div>
  <div class=" w3-animate-zoom col-sm-4">
    <img class=" main mySlides w3-animate-fading p-4 rounded-circle" src="css/assets/images/kyeboard.jpg" alt="mainPhoto">
    <img class=" main mySlides w3-animate-fading p-4 rounded-circle" src="css/assets/images/coding.jpg" alt="mainPhoto">
  </div>
</div>

<!-- Lessons unit-->
<div>
<!-- errors and success -->
    @if(session('status'))
        <div class="alert alert-success  alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
          {{ session('status') }}
        </div>
    @endif
    
    @if(count($errors) > 0)
        <div class="alert alert-danger  alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
          <ul>
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach  
          </ul>
        </div>
    @endif

        <a href=" {{ route('tutorial') }} ">
        <h1 class="text-center m-5 text-dark wow sideInLeft" data-wow-duration="2s">Darslar</h1>
        </a>
</div>  


   <div class="row col-sm-12 justify-content-center">  
        @if(isset($front))
          @foreach($front as $f)
          <div class="col-sm-4 text-center mb-5 px-5">
            <img class="dars  w3-animate-top" src="css/assets/images/{!! $f->images !!} " alt="html">
            <br>
            <h3 class="mt-3"><a href="{!! $f->link !!}">{!! $f->name !!}</a></h3>
            <p class="text-justify">
            {!! $f->text !!}
            </p>
          </div>
          @endforeach
        @endif

        @if(isset($back))
          @foreach($back as $b)
            <div class="col-sm-4 text-center mb-5 px-5">
              <img class="dars  w3-animate-top" src="css/assets/images/{!! $b->images !!} " alt="php">
              <br>
              <h3 class="mt-3"><a href="{!! $b->link !!}">{!! $b->name !!}</a></h3>
              <p class="text-justify">
              {!! $b->text !!}
              </p>
            </div>
          @endforeach
        @endif

        @if(isset($database))
          @foreach($database as $d)
            <div class="col-sm-4 text-center mb-5 px-5">
              <img class="dars  w3-animate-top" src="css/assets/images/{!! $d->images !!} " alt="html">
              <br>
              <h3 class="mt-3"><a href="{!! $d->link !!}">{!! $d->name !!}</a></h3>
              <p class="text-justify">
              {!! $d->text !!}
              </p>
            </div>
          @endforeach
        @endif
  </div>
  <div class="text-center">
    <a href="{{ route('tutorial') }}">
      <button class="btn btn-info  text-center mt-3">barcha darslar</button>
     </a>
  </div>
<br>
<br>


<!-- video lessons unit -->
<div>
    <h1 class="text-center text-dark">Video darslar</h1>
</div>
 <a href="#">
  <div class="container text-center ">
    <div id="demo" class="carousel slide" data-ride="carousel"> 
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img  class="video" src="css/assets/images/html.jpg" alt="Html">
          <div class="carousel-caption text-dark font-weight-bolder">
            
          </div>   
        </div>
        <div class="carousel-item">
          <img class="video" src="css/assets/images/css.jpg" alt="Css" >
          <div class="carousel-caption text-dark font-weight-bolder">
            
          </div>   
        </div>
        <div class="carousel-item">
          <img class="video" src="css/assets/images/php.jpg" alt="Php" >
          <div class="carousel-caption text-dark font-weight-bolder">
            
          </div>   
        </div>
        <div class="carousel-item">
          <img class="video" src="css/assets/images/js.jpg" alt="Js" >
          <div class="carousel-caption text-dark font-weight-bolder">
            
          </div>   
        </div>
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>
</a>
@show



<!-- footer unit -->
@section('footer') 
<br>
<div class="containe-fluid text-white bg-secondary p-3">
 <h3 class="text-center  mt-5">Оnlayn ta'lim haqida</h3>
    <br> 
    <h4>Eng yetakchi o‘qituvchilar</h4>
    <br>
    <p>Yurtimizning eng yetakchi o‘qituvchilari tomonidan tayyorlangan videodarslarni tomosha qilib,
    siz nafaqat ishonchli o‘qituvchi qidirishdan holi bo‘lasiz,
    balki noyob metodika orqali darslarni qiziq va oson yo‘llar bilan tushunishingiz mumkin.</p> 
    <hr>
    <h4>Hamyonbop narxlar</h4>

    <br>
    <p>Onlayn darslar bir necha 10 baravar sizga arzonroqqa tushadi.
    O‘qituvchilarga, transportga sarflaydigan xarajatlaringizni va vaqtingizni tejab 
    qolishingiz mumkin..</p> 
    <hr>
    <br>
    <h4>Cheksiz qulayliklar</h4>

    <br>
    <p>Istalgan joydan, istalgan vaqtda va istalgan qurilma orqali darslarimizga ulanishingiz mumkin.
    Har bir darsdan keyin qiziq mashqlar va testlarni yechishingiz mumkin.
    Natijalaringizni esa darhol bilgan holda, berilgan tushunchalar orqali mavzuni tahlil qilishingiz mumkin.
    <br></p> 
    <hr>
    <h4>Natijalaringizni kuzating</h4>


    <p>To‘playotgan ballaringizni kuzatib boring.
    Erishayotgan yutuqlaringizni faqatgina siz emas, balki ota-onangiz, yaqinlaringiz va o‘qituvchilaringiz ham 
    kuzatib borishlari mumkin. Boshqa o‘quvchilar bilan ham bellashib o‘z bilimlaringizni sinashingiz mumkin.</p> 

  </div>



<br>



 <div class="container-fluid bg-dark text-white p-3">
<div class="row">
<div class=" pl-5 col-sm-6 ">
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


@section('js')
<div class="footer col-12 text-center text-white p-2">
  <small>&copy; ICode.uz</small>
  <p>2020 Uzbekistan</p>
</div>
<script>
  var myIndex = 0;
    carousel();
    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 3000);    
    }
</script>

@show

</body>
</html>