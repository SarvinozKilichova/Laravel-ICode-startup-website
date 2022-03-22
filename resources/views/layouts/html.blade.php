@extends('layouts.site')
@section('navbar')


<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">

      <a class="navbar-brand" href="{{ route('Home') }}">ICode<span class="fas fa-laptop-code text-success"></span>uz</a>
      <button type="button" class="navbar-toggler border-0 text-white " data-toggle="collapse" data-target="#myNavbar"><h6 class="d-inline-block">ko'proq</h6> <span class="fas fa-caret-down"></span></button>           
      
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="{{ route('video') }}">Video darslar</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('tutorial') }}">Darslar</a></li>     
        <li class="nav-item"><a  class="nav-link"href="{{ route('html') }}">Html</a></li>
        <li class="nav-item"><a  class="nav-link"href="{{ route('css') }}">Css</a></li>
        <li class="nav-item"><a  class="nav-link"href="{{ route('js') }}">Javascript</a></li>
        <li class="nav-item"><a  class="nav-link"href="{{ route('php') }}">Php</a></li>
        <li class="nav-item"><a  class="nav-link"href="{{ route('mysql') }}">Mysql</a></li>
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
                                  <h3 class="fas fa-user-circle m-0 p-0"></h3> <span class="caret"></span> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">Kabinet</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                      <span class="fas fa-sign-out-alt"></span>{{ __('Logout') }} </a>    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
      </ul>
    </div>
  </div>
</nav>
@endsection

@section('content')
<div class="  w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  
    <!-- every  tutorial's links in sidebar -->
        @if(isset($HtmlNav))
        @foreach($HtmlNav as $h)
        <a href="{!! route('HtmlId',['id'=>$h->id]) !!}" class="w3-bar-item w3-button">{!! $h->name !!}</a>
        @endforeach
        @endif

        @if(isset($CssNav))
        @foreach($CssNav as $c)
        <a href="{!! route('CssId',['id'=>$c->id]) !!}" class="w3-bar-item w3-button">{!! $c->name !!}</a>
        @endforeach
        @endif

        @if(isset($JsNav))
        @foreach($JsNav as $j)
        <a href="{!! route('jsId',['id'=>$j->id]) !!}" class="w3-bar-item w3-button">{!! $j->name !!}</a>
        @endforeach
        @endif

        @if(isset($MysqlNav))
        @foreach($MysqlNav as $m)
        <a href="{!! route('mysqlId',['id'=>$m->id]) !!}" class="w3-bar-item w3-button">{!! $m->name !!}</a>
        @endforeach
        @endif

        @if(isset($PhpNav))
        @foreach($PhpNav as $p)
        <a href="{!! route('CssId',['id'=>$p->id]) !!}" class="w3-bar-item w3-button">{!! $p->name !!}</a>
        @endforeach
        @endif
</div>

<div class="w3-main" style="margin-left:200px">
<div class=" text-success">
  <button class="  w3-button  w3-large w3-hide-large " onclick="w3_open()">&#9776;</button>
  </div>

  <!-- main page contents -->
  <div class="text-justify text-secondary mt-5">

          @if(isset($HtmlContent))
            @foreach($HtmlContent as $H)
                        <h1  class=" text-center text-success">
                        {{ $H->name }}               
                        </h1>
                        <div class="p-5">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


                        </div>
                        @endforeach
                        @endif

             @if(isset($CssContent))
            @foreach($CssContent as $C)
                        <h1 class="text-center text-success">
                        {{ $C->name }}               
                        </h1>
                        <div class="p-5">
                           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
             @endforeach
            @endif           
                       
            @if(isset($JsContent))
            @foreach($JsContent as $J)
                        <h1 class="text-center text-success">
                        {{ $J->name }}               
                        </h1>
                        <div class="p-5">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                        @endforeach
                        @endif   

             @if(isset($PhpContent))
            @foreach($PhpContent as $P)
                        <h1 class="text-center text-success">
                        {{ $P->name }}               
                        </h1>
                        <div class="p-5">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                        @endforeach
                        @endif 

            @if(isset($MysqlContent))
            @foreach($MysqlContent as $M)
                        <h1 class="text-center text-success">
                        {{ $M->name }}               
                        </h1>
                        <div class="p-5">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                        @endforeach
                        @endif          
                        
</div>


<!-- when tutorial comes with id here shows these contents -->

<div class="text-justify text-secondary mt-5">

            @if(isset($HtmlIdContent))
            <h1 class="text-center text-success">
                {!! $title !!}               
            </h1>
            <div class="p-5">
                {!! $HtmlIdContent->text1 !!}
            </div>
            @endif


            @if(isset($CssIdContent))
            <h1 class="text-center text-success">
                {!! $title !!}                
            </h1>
            <div class="p-5">
                {!! $CssIdContent->text1 !!}
            </div>
            @endif



            @if(isset($JsIdContent))
            <h1 class="text-center text-success">
                {!! $title !!}                
            </h1>
            <div class="p-5">
                {!! $JsIdContent->text1 !!}
            </div>
            @endif


            @if(isset($MysqlIdContent))
            <h1 class="text-center text-success">
                {!! $title !!}                
            </h1>
            <div class="p-5">
                {!! $MysqlIdContent->text1 !!}
            </div>
            @endif


            @if(isset($PhpIdContent))
            <h1 class="text-center text-success">
                {!! $title !!}                
            </h1>
            <div class="p-5">
                {!! $PhpIdContent->text1 !!}
            </div>
            @endif


</div>





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


@endsection
@section('footer')
@endsection
@section('js')
<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>



@endsection