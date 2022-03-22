@extends('admin.index')

@section('content')

<a href="{{ route('teams') }}"><button class="btn btn-success m-2"><-Orqaga</button></a>

<div class="wrapper container d-flex justify-content-center container  text-center">
{!! Form::open(['url' => route('teamedit',array('page'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
    	{!! Form::hidden('id', $data['id']) !!}
	     {!! Form::label('name', 'Name:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('name', $data['name'], ['class' => 'form-control','placeholder'=>'please enter new name']) !!}
		 </div>
    </div>
    
     <div class="form-group">     	
	     {!! Form::label('duty', 'Duty:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('duty', $data['duty'], ['class' => 'form-control','placeholder'=>'please enter duty']) !!}
		 </div>
    </div>


    <div class="form-group">
	     {!! Form::label('text', 'Text:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::textarea('text', $data['text'], ['id'=>'editor','class' => 'form-control','placeholder'=>'Enter text']) !!}
		 </div>
    </div>
    
    <div class="form-group">
    	{!! Form::label('old_images', 'Images:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-xs-10">
			{!! Html::image('css/assets/images'.$data['images'],'',['class'=>'img-circle img-responsive','width'=>'150px']) !!}
			{!! Html::image('old_images', $data['images']) !!}
    	</div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('images', 'Images:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::file('images', ['class' => 'filestyle','data-buttonText'=>'choose image','data-buttonName'=>"btn-primary",'file-placeholder'=>"No file"]) !!}
		 </div>
    </div>
    

    
      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10">
	      {!! Form::button('Save', ['class' => 'btn btn-success','type'=>'submit']) !!}
	    </div>
	  </div>
    
{!! Form::close() !!}

 <script>
	CKEDITOR.replace( 'editor' );
</script>
</div>






@endsection