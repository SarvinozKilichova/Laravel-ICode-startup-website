@extends('admin.index')

@section('content')
@if($tutorials)



<div class="text-center text-dark m-5" >

<a href="{{ route('AllTutorialsAdd') }}"><button class="btn btn-success m-2 ">yangi dars qo'shish-></button></a>

<table class="table table-hover table-collapse border">
<thead>
        <tr>
            <th>N/r</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Text1</th>
            <th>Text2</th>
            <th>Text3</th>
            <th>Images1</th> 
            <th>Images2</th> 
            <th>Images3</th>           
            <th>Created_at</th>
            <th>Delete</th>
        </tr>
</thead>
<tbody>

@foreach($tutorials as $k=>$t)

<tr>

<td>{{ $t->id }}</td>
<td><a href="{{ route('AllTutorialsEdit', ['id'=>$t->id]) }}"> {{ $t->name }}</a></td>
<td>{{ $t->subject }}</td>
<td>{{ $t->text1 }}</td>
<td>{{ $t->text2 }}</td>
<td>{{ $t->text3 }}</td>
<td>{{ $t->images1 }}</td>
<td>{{ $t->images2 }}</td>
<td>{{ $t->images3 }}</td>
<td>{{ $t->created_at }}</td>
<td>

{!! Form::open(['url'=>route('AllTutorialsEdit', ['id'=>$t->id]), 'class'=>'form-horizontal', 'method'=>'POST' ]) !!}

{{ method_field('DELETE') }}
{!!  Form::button('delete', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}

{!! Form::close() !!}


</td>




</tr>

@endforeach
</tbody>
</table>
@endif

<a  class="text-success" href="{{ route('AllTutorialsAdd') }}">Yangi dars qo'shish</a>
</div>





@endsection