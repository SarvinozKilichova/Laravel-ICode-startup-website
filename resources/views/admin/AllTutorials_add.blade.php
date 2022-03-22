@extends('admin.index')

@section('content')


<a href="{{ route('AllTutorials') }}"><button class="btn btn-success m-3"><-Orqaga</button></a>
<div class="d-flex justify-content-center container  text-center" >

<div class="mt-3">


{!! Form::open(['url'=>route('AllTutorialsAdd'), 'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}


<div class="form-group ">
		{!!  Form::label('name', 'Name', ['class'=>'col-xs-2 control-label']) !!}
		 <div class="col-xs-8">
		  {!!  Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Please enter name']) !!}	
		 </div>
</div>


<div class="form-group">
		{!!  Form::label('subject', 'Subject', ['class'=>'col-xs-2 control-label']) !!}
		 <div class="col-xs-8">
		  {!!  Form::text('subject', old('subject'), ['class'=>'form-control', 'placeholder'=>'Please enter duty']) !!}	
		 </div>
</div>



<div class="form-group">
		{!!  Form::label('text1', 'Text1', ['class'=>'col-xs-2 control-label']) !!}
		 <div class="col-xs-8">
		  {!!  Form::textarea('text1', old('text1'), [ 'id'=>'editor', 'class'=>'form-control', 'placeholder'=>'Please enter text']) !!}	
		 </div>
</div>

<div class="form-group">
		{!!  Form::label('text2', 'Text2', ['class'=>'col-xs-2 control-label']) !!}
		 <div class="col-xs-8">
		  {!!  Form::textarea('text2', old('text2'), [ 'id'=>'editor', 'class'=>'form-control', 'placeholder'=>'Please enter text']) !!}	
		 </div>
</div>

<div class="form-group">
		{!!  Form::label('text3', 'Text3', ['class'=>'col-xs-2 control-label']) !!}
		 <div class="col-xs-8">
		  {!!  Form::textarea('text3', old('text3'), [ 'id'=>'editor', 'class'=>'form-control', 'placeholder'=>'Please enter text']) !!}	
		 </div>
</div>



<div class="form-group">
		{!!  Form::label('image1', 'Image1', ['class'=>'col-xs-2 control-label']) !!}
		 <div class="col-xs-8">
		  {!!  Form::file('image1', ['class'=>'filestyle', 'data-buttonText'=>'Please choose an image', 'data-buttonName'=>'btn btn-success', 'data-placeholder'=>' No image' ]) !!}	
		 </div>
</div>


<div class="form-group">
		{!!  Form::label('image2', 'Image2', ['class'=>'col-xs-2 control-label']) !!}
		 <div class="col-xs-8">
		  {!!  Form::file('image2', ['class'=>'filestyle', 'data-buttonText'=>'Please choose an image', 'data-buttonName'=>'btn btn-success', 'data-placeholder'=>' No image' ]) !!}	
		 </div>
</div>

<div class="form-group">
		{!!  Form::label('image3', 'Image3', ['class'=>'col-xs-2 control-label']) !!}
		 <div class="col-xs-8">
		  {!!  Form::file('image3', ['class'=>'filestyle', 'data-buttonText'=>'Please choose an image', 'data-buttonName'=>'btn btn-success', 'data-placeholder'=>' No image' ]) !!}	
		 </div>
</div>




<div class="form-group">
		
		 <div class="col-xs-offset-2 col-xs-10">
		  {!!  Form::button('Save', ['class'=>'btn btn-success', 'type'=>'submit']) !!}	
		 </div>
</div>


{!!  Form::close() !!}

<script>
	

</script>

</div>

</div>





@endsection