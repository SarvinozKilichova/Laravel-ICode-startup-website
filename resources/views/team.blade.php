@extends('layouts.site')

@section('content')
<br>
<h2 class="text-center text-success">Bizning jamoa</h2>
<br>

@if(isset($team))
@foreach($team as $t)
<div class="container mb-5 p-3 bg-white shadow-lg">
    <div class="row text-black-50 text-center">
        <div class='col-sm-4 w3-animate-zoom'>
                <img  src="css/assets/images/{!!  $t->images !!} " class="team rounded-circle mb-n5"  alt="">
                <div class="border pt-5">
                <h5>{!!  $t->name !!}</h5>
                <a href="#">ICode.uz</a>
                <br>
                <a href="t/me@sarvinoz" class="text-success"><i class="fab fa-telegram-plane ml-3" style="font-size:25px" ></i>t.me/{!!  $t->name !!}</a>
                </div>
             </div>
                <div class="col-sm-8 w3-animate-zoom">

                    <div class="mt-5  pt-5 text-left">
                        <h5>{!!  $t->duty !!}</h5>
                        <p>ICode.uz </p>
                        <p>{!!  $t->text !!}.</p>
                    </div>
            </div>



    </div>
</div>
@endforeach
@endif
@endsection

