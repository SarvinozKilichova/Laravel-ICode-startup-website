@extends('layouts.app1')

@section('content')

<div class="container-fluid p-0">
<h3 class="d-inline"><span  id="open" class="fas fa-bars text-success pr-5 w3 w3-animate-left" onclick="f_open()"></span></h3>
    <div class='mt-n2 p-0 w3-animate-left text-white ' id="side" style="width: 25%" >
        <ul  class=" w3-sidebar nav flex-column shadow-lg bg-dark pl-2">
        <li class=" pl-3 nav-item text-right text-success"><a class="nav-link"><span id="close" class="fas fa-times" onclick="f_close()"></span></a> </li>
         <li class="nav-item pl-1"><img class="nav-link img-responsive radius-rounded" src="css/assets/images/mainPhoto.jpg" height="auto" width="100%"> </li>
         <li class="  nav-item"><p" class="nav-link"><span class="fas fa-user"></span> {{ Auth::user()->name }} </p></li>
        <li class=" nav-item"><a href="{{ route('cart.index') }}" class="nav-link"><span class="fas fa-film"></span><span class="badge bg-danger" style="color: white">            
          {{ $total }}</span> Video darslarim</a> </li>
        <li class=" nav-item"><a href="" onclick="info()" class="nav-link"><span class="fas fa-info-circle"></span> Ma'lumotlarim</a> </li>
        <li class=" nav-item"><a class="nav-link text-white" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                      <span class="fas fa-sign-out-alt"></span>{{ __('chiqish') }} </a>  
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
        
        </ul>
</div>



   
   
    <div id="info" class="  d-flex justify-content-center" style="width: 100%" >
    
   
        <table class="table text-secondary table-striped mt-5  bg-white shadow-lg text-justify"  style="width: 60%">
          
            <tbody>
              <tr>
                <td><h2 class="text-center text-success"> Foydalanuvchi</h2></td>
                <td><h2 class="text-left text-success">ma'lumotlari</h2></td>
              </tr>
                <tr>
                    <td class="font-weight-bolder">Ism:</td>
                    <td>{{ Auth::user()->name }}</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bolder">Ro'yhatdan o'tgan Email:</td>
                    <td>{{ Auth::user()->email }}</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bolder">Saytga a'zoligi:</td>
                    <td>{{ Auth::user()->created_at }} dan buyon</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bolder">Video darslar soni</td>
                    <td>{{ $total }}</td>
                  </tr>
         
            </tbody>
        </table>
</div>


<br>
<br>

<script >

    function d_open(){
       document.getElementById("open").style.display="none";

       
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