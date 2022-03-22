@extends('layouts.site')

@section('content')

	<h1 class="text-center text-success m-3">Video darslar</h1>

	<div class="d-flex justify-content-center">
		<input type="text" class="form-control" style="width:40%" id="myInput" placeholder="qidiruv...">
		</div>
		
		


	<div class="container col-sm-9 ">
		<div class="row justify-content-center">
			@if(isset($video))
				@foreach($video as $d)

<div id="myDIV" class="col-sm-3 col-6 p-2 text-justify w3-animate-zoom " >
	<div class="card mt-4">	
			<img src="css/assets/images/{!!  $d->image !!}" class="card-img-top" width="100%" height="130px" >			
			<div class="card-body">
				<h3 class="card-title text-success text-center">{!! $d->name !!}</h3>
				<p class="card-text text-muted">
					{!! $d->info !!}					
				</p>
				<div class="text-center">
				<a class="text-center" href="{!! route('cart.add', ['video'=>$d->id]) !!}" data-toggle="tooltip" data-placement="bottom" title="videoni qo'shish"><button class=" text-center m-2 btn btn-success">+</button></a>
				<a class="text-center" href="{!! route('fullVideo', ['id'=>$d->id]) !!}" data-toggle="tooltip" data-placement="bottom" title="videoni ko'rish"><button class=" text-center m-2 btn btn-danger"><span class="fas fa-caret-square-right"></span></button></a>
				</div>

			</div>


				
				
		</div>	
	</div>		
				@endforeach
				@endif
	</div>


</div>		
			





			
	

@endsection


@section('js')
	<script>
	$(document).ready(function(){
		$("#myInput").on('keyup', function(){
			var value=$(this).val().toLowerCase();
			$("#myDIV*").filter(function(){
				$(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)
			});		
			
			});

});

		function filter(){
		var x=	document.getElementById('price');
		x.sort();
		document.getElementById('demo')

		}

		$(document).ready(function(){
			$('[data-toggle=tooltip]').tooltip();

		});
	
	</script>



@endsection

