        
@extends('layouts.app1')

@section('content')

<div class="col-sm-12">
 @if(session()->has('message'))
            <div class="alert alert-success  alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
               {{session('message')}}
            </div>
        @endif

        {{-- display error message --}}

        @if(session()->has('error'))
        <div class="alert alert-danger  alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{session('error')}}
        </div>
        @endif
</div>

<div class="container-fluid p-0">
<div class="row justify-content-center p-0 m-0 mb-1">
<h3><span  id="open" class="fas fa-bars text-success pr-5 w3 w3-animate-left" onclick="f_open()"></span></h3>
    <div class='col-sm-2 col-4 mt-n2 p-0 w3-animate-left text-white' id="side">
        <ul  class="w3-sidebar  nav flex-column shadow-lg bg-dark pl-2 ">
        <li class=" pl-3 nav-item text-right text-success"><a class="nav-link"><span id="close" class="fas fa-times" onclick="f_close()"></span></a> </li>
        <li class="nav-item "><img class="nav-link img-responsive radius-rounded" src="/css/assets/images/mainPhoto.jpg" height="auto" width="100%"> </li>
         <li class="  nav-item"><p" class="nav-link"><span class="fas fa-user"></span> {{ Auth::user()->name }} </p></li>
        <li class="nav-item"><a href="{{ route('cart.index') }}" class="nav-link"><span class="fas fa-film"></span><span class="badge bg-danger" style="color: white">            
          {{ $total }}</span> Video darslarim</a> </li>
        <li class=" nav-item"><li class="nav-item"><a href="{{ route('dashboard') }}" onclick="info()" class="nav-link"><span class="fas fa-info-circle"></span> Ma'lumotlarim</a> </li>
        <li class=" nav-item"><a class="nav-link text-white" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                      <span class="fas fa-sign-out-alt"></span>{{ __('chiqish') }} </a>  
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"></li>
        
        </ul>
</div>


    
    <div class="container col-sm-9 col-8" style="height: 100%">
         <h2 class="text-center text-success">Video darslarim</h2> 
        <div class="row justify-content-center">
                    @if($cartItems)
                    @foreach($cartItems as $cart)

                    <div class="col-sm-3 col-6 p-2 text-justify w3-animate-zoom " >
                        <div class="card mt-4"> 
                            <img src="/css/assets/images/{{ $cart->attributes->image }}" class="card-img-top" width="100%" height="100%" >           
                            <div class="card-body">
                                <h3 class="card-title text-success text-center">{{ $cart->name }}</h3>
                                <p class="card-text text-muted">
                                                      
                                </p>
                            </div> 
                                 <a class="text-center text-white bg-success p-1 rounded mr-2 ml-2 border" href="{!! route('fullVideo', ['id'=>$cart->id]) !!}">ko'rish <span class="fas fa"></span></a>
                                <a class="text-center text-white bg-danger p-1 rounded mr-2 ml-2 border" href="{!! route('cart.destroy',  ['videoId'=>$cart->id]) !!}"> <span class="fas fa-trash-alt"></span></a>                             
                        </div> 

                    </div>
                   @endforeach                
         @endif 

    </div>
    <a class="text-right text-secondary" href="{{route('video') }}">video dars qo'shish...</a>

        
        
          
</div>      
            

    

              
<script >

    function d_open(){
       document.getElementById("open").style.display="block";
        document.getElementById("side").style.display="none";
    }

   function  f_close(){
    document.getElementById("side").style.display="none";
    document.getElementById("open").style.display="block";

}

function  f_open(){
    document.getElementById("side").style.display="block";
    document.getElementById("open").style.display="none";

}

function info(){

document.getElementById("info").style.display="block";


}
</script>
   
@endsection

@section('register')
@endsection