@extends('admin.index')

@section('content')

<a href="{{ route('videos') }}"><button class="btn btn-success m-2"><-Orqaga</button></a>

<div class="wrapper container d-flex justify-content-center container  text-center">
{!! Form::open(['url' => route('videoedit',array('videos'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
    	{!! Form::hidden('id', $data['id']) !!}
	     {!! Form::label('name', 'Name:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('name', $data['name'], ['class' => 'form-control','placeholder'=>'please enter new tutorial name']) !!}
		 </div>
    </div>
    
     <div class="form-group">     	
	     {!! Form::label('subject', 'Subject:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('subject', $data['subject'], ['class' => 'form-control','placeholder'=>'please enter new subject name']) !!}
		 </div>
    </div>


    <div class="form-group">
	     {!! Form::label('text', 'Text:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::textarea('text', $data['text'], ['id'=>'editor','class' => 'form-control','placeholder'=>'Enter text ']) !!}
		 </div>
    </div>



    <div class="form-group">
	     {!! Form::label('info', 'Information:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::textarea('info', $data['info'], ['id'=>'editora','class' => 'form-control','placeholder'=>'Enter info']) !!}
		 </div>
    </div>
    
    <div class="form-group">
    	{!! Form::label('old_videos', ' Old Videos:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-xs-10">			
			{!! Html::image('old_videos', $data['videos']) !!}
    	</div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('videos', 'Videos:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::file('videos', ['class' => 'filestyle','data-buttonText'=>'choose video','data-buttonName'=>"btn-primary",'file-placeholder'=>"No file"]) !!}
		 </div>
    </div>


     <div class="form-group">
    	{!! Form::label('old_image', 'Old Image:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-xs-10">			
			{!! Html::image('old_image', $data['image']) !!}
    	</div>
    </div>

     <div class="form-group">
	     {!! Form::label('image', 'Image:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::file('image', ['class' => 'filestyle','data-buttonText'=>'choose image','data-buttonName'=>"btn-primary",'file-placeholder'=>"No file"]) !!}
		 </div>
    </div>
    

    
      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10">
	      {!! Form::button('Save', ['class' => 'btn btn-success','type'=>'submit']) !!}
	    </div>
	  </div>
    
{!! Form::close() !!}


	

</div>






@endsection