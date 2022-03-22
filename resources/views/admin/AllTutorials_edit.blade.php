@extends('admin.index')

@section('content')

<a href="{{ route('AllTutorials') }}"><button class="btn btn-success m-2"><-Orqaga</button></a>

<div class="wrapper container d-flex justify-content-center container  text-center">
{!! Form::open(['url' => route('AllTutorialsEdit',array('tutorials'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
    	{!! Form::hidden('id', $data['id']) !!}
	     {!! Form::label('name', 'Name:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('name', $data['name'], ['class' => 'form-control','placeholder'=>'please enter new name']) !!}
		 </div>
    </div>
    
     <div class="form-group">     	
	     {!! Form::label('subject', 'Subject:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('subject', $data['subject'], ['class' => 'form-control','placeholder'=>'please enter duty']) !!}
		 </div>
    </div>


    <div class="form-group">
	     {!! Form::label('text1', 'Text1:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::textarea('text1', $data['text1'], ['id'=>'editor','class' => 'form-control','placeholder'=>'Enter text']) !!}
		 </div>
    </div>

    <div class="form-group">
	     {!! Form::label('text2', 'Text2:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::textarea('text2', $data['text2'], ['id'=>'editor','class' => 'form-control','placeholder'=>'Enter text']) !!}
		 </div>
    </div>

    <div class="form-group">
	     {!! Form::label('text3', 'Text3:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::textarea('text3', $data['text3'], ['id'=>'editor','class' => 'form-control','placeholder'=>'Enter text']) !!}
		 </div>
    </div>
    
    <div class="form-group">
    	{!! Form::label('old_image1', 'Image1:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-xs-10">
			{!! Html::image('old_image1', $data['image1']) !!}
    	</div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('image1', 'Image1:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::file('image1', ['class' => 'filestyle','data-buttonText'=>'choose image','data-buttonName'=>"btn-primary",'file-placeholder'=>"No file"]) !!}
		 </div>
    </div>

    <div class="form-group">
    	{!! Form::label('old_image2', 'Image2:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-xs-10">
			{!! Html::image('old_image3', $data['image2']) !!}
    	</div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('image2', 'Image2:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::file('image2', ['class' => 'filestyle','data-buttonText'=>'choose image','data-buttonName'=>"btn-primary",'file-placeholder'=>"No file"]) !!}
		 </div>
    </div>

    <div class="form-group">
    	{!! Form::label('old_image3', 'Images:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-xs-10">
			{!! Html::image('old_image3', $data['image3']) !!}
    	</div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('image3', 'Image3:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::file('image3', ['class' => 'filestyle','data-buttonText'=>'choose image','data-buttonName'=>"btn-primary",'file-placeholder'=>"No file"]) !!}
		 </div>
    </div>
    

    
      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10">
	      {!! Form::button('Save', ['class' => 'btn btn-success','type'=>'submit']) !!}
	    </div>
	  </div>
    
{!! Form::close() !!}

 <script>
	
</script>
</div>






@endsection