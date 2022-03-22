@extends('admin.index')

@section('content')


<a href="{{ route('tutorials') }}"><button class="btn btn-success m-3"><-Orqaga</button></a>
<div class="d-flex justify-content-center container  text-center" >

<div class="mt-3">


{!! Form::open(['url'=>route('tutorialadd'), 'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}


<div class="form-group ">
		{!!  Form::label('name', 'Name', ['class'=>'col-xs-2 control-label']) !!}
		 <div class="col-xs-8">
		  {!!  Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Please enter tutorials name']) !!}	
		 </div>
</div>


<div class="form-group ">
		{!!  Form::label('link', 'Link', ['class'=>'col-xs-2 control-label']) !!}
		 <div class="col-xs-8">
		  {!!  Form::text('link', old('Link'), ['class'=>'form-control', 'placeholder'=>'Please enter tutorials name']) !!}	
		 </div>
</div>


<div class="form-group">
		{!!  Form::label('subject', 'Subject', ['class'=>'col-xs-2 control-label']) !!}
		 <div class="col-xs-8">
		  {!!  Form::text('subject', old('subject'), ['class'=>'form-control', 'placeholder'=>'Please enter subject']) !!}	
		 </div>
</div>



<div class="form-group">
		{!!  Form::label('icon', 'Icon', ['class'=>'col-xs-2 control-label']) !!}
		 <div class="col-xs-8">
		  {!!  Form::text('icon', old('icon'), ['class'=>'form-control', 'placeholder'=>'Please enter new icon']) !!}	
		 </div>
</div>



<div class="form-group">
		{!!  Form::label('text', 'Text', ['class'=>'col-xs-2 control-label']) !!}
		 <div class="col-xs-8">
		  {!!  Form::textarea('text', old('text'), [ 'id'=>'editor', 'class'=>'form-control', 'placeholder'=>'Please enter text']) !!}	
		 </div>
</div>



<div class="form-group">
		{!!  Form::label('images', 'Images', ['class'=>'col-xs-2 control-label']) !!}
		 <div class="col-xs-8">
		  {!!  Form::file('images', ['class'=>'filestyle', 'data-buttonText'=>'Please choose an image', 'data-buttonName'=>'btn btn-success', 'data-placeholder'=>' No image' ]) !!}	
		 </div>
</div>




<div class="form-group">
		
		 <div class="col-xs-offset-2 col-xs-10">
		  {!!  Form::button('Save', ['class'=>'btn btn-success', 'type'=>'submit']) !!}	
		 </div>
</div>


{!!  Form::close() !!}

<script>
	CKEDITOR.replace('editor');

</script>

</div>

</div>





@endsection