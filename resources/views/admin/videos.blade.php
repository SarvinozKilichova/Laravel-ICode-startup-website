@extends('admin.index')

@section('content')
@if($video)



<div class="text-center text-dark m-5" >

<a href="{{ route('videoadd') }}"><button class="btn btn-success m-2 ">yangi video dars qo'shish-></button></a>

<table class="table table-hover table-collapse border">
<thead>
        <tr>
            <th>N/r</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Text</th>
            <th>Information</th>
            <th>Videos</th> 
            <th>Image</th>           
            <th>Created_at</th>
            <th>Delete</th>
        </tr>
</thead>
<tbody>

@foreach($video as $k=>$v)

<tr>

<td>{{ $v->id }}</td>
<td><a href="{{ route('videoedit', ['id'=>$v->id]) }}"> {{ $v->name }}</a></td>
<td>{{ $v->subject }}</td>
<td>{{ $v->text }}</td>
<td>{{ $v->info }}</td>
<td>{{ $v->videos }}</td>
<td>{{ $v->image }}</td>
<td>{{ $v->created_at }}</td>
<td>

{!! Form::open(['url'=>route('videoedit', ['id'=>$v->id]), 'class'=>'form-horizontal', 'method'=>'POST' ]) !!}

{{ method_field('DELETE') }}
{!!  Form::button('delete', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}

{!! Form::close() !!}


</td>




</tr>

@endforeach
</tbody>
</table>
@endif

<a  class="text-success" href="{{ route('videoadd') }}">Yangi video dars qo'shish</a>
</div>





@endsection