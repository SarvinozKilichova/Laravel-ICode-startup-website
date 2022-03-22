@extends('admin.index')

@section('content')


<a href="{{ route('videos') }}"><button class="btn btn-success m-3"><-Orqaga</button></a>
<div class="d-flex justify-content-center container  text-center" >

<div class="mt-3">


{!! Form::open(['url'=>route('videoadd'), 'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}


<div class="form-group ">
		{!!  Form::label('name', 'Name', ['class'=>'col-xs-2 control-label']) !!}
		 <div class="col-xs-8">
		  {!!  Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Please enter name']) !!}	
		 </div>
</div>


<div class="form-group">
		{!!  Form::label('subject', 'Subject', ['class'=>'col-xs-2 control-label']) !!}
		 <div class="col-xs-8">
		  {!!  Form::text('subject', old('subject'), ['class'=>'form-control', 'placeholder'=>'Please enter subject']) !!}	
		 </div>
</div>



<div class="form-group">
		{!!  Form::label('text', 'Text', ['class'=>'col-xs-2 control-label']) !!}
		 <div class="col-xs-8">
		  {!!  Form::textarea('text', old('text'), [ 'id'=>'editor', 'class'=>'form-control', 'placeholder'=>'Please enter text']) !!}	
		 </div>
</div>

<div class="form-group">
		{!!  Form::label('info', 'Information', ['class'=>'col-xs-2 control-label']) !!}
		 <div class="col-xs-8">
		  {!!  Form::textarea('info', old('info'), [ 'id'=>'editora', 'class'=>'form-control', 'placeholder'=>'Please enter text']) !!}	
		 </div>
</div>



<div class="form-group">
		{!!  Form::label('videos', 'Videos', ['class'=>'col-xs-2 control-label']) !!}
		 <div class="col-xs-8">
		  {!!  Form::file('video', ['class'=>'filestyle', 'data-buttonText'=>'Please choose a video', 'data-buttonName'=>'btn btn-success', 'data-placeholder'=>' No video' ]) !!}	
		 </div>
</div>


<div class="form-group">
		{!!  Form::label('image', 'Image', ['class'=>'col-xs-2 control-label']) !!}
		 <div class="col-xs-8">
		  {!!  Form::file('image', ['class'=>'filestyle', 'data-buttonText'=>'Please choose an image', 'data-buttonName'=>'btn btn-success', 'data-placeholder'=>' No image' ]) !!}	
		 </div>
</div>




<div class="form-group">
		
		 <div class="col-xs-offset-2 col-xs-10">
		  {!!  Form::button('Save', ['class'=>'btn btn-success', 'type'=>'submit']) !!}	
		 </div>
</div>


{!!  Form::close() !!}



</div>

</div>





@endsection