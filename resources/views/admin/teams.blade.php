
@extends('admin.index')

@section('content')
@if($team)



<div class="text-center text-dark m-5" >

<a href="{{ route('teamadd') }}"><button class="btn btn-success m-2 ">yangi jamoa a'zosini qo'shish-></button></a>

<table class="table table-hover table-collapse border">
<thead>
        <tr>
            <th>N/r</th>
            <th>Name</th>
            <th>Duty</th>
            <th>Text</th>
            <th>Images</th>           
            <th>Created_at</th>
            <th>Delete</th>
        </tr>
</thead>
<tbody>

@foreach($team as $k=>$t)

<tr>

<td>{{ $t->id }}</td>
<td><a href="{{ route('teamedit', ['id'=>$t->id]) }}"> {{ $t->name }}</a></td>
<td>{{ $t->duty }}</td>
<td>{{ $t->text }}</td>
<td>{{ $t->images }}</td>
<td>{{ $t->created_at }}</td>
<td>

{!! Form::open(['url'=>route('teamedit', ['id'=>$t->id]), 'class'=>'form-horizontal', 'method'=>'POST' ]) !!}

{{ method_field('DELETE') }}
{!!  Form::button('delete', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}

{!! Form::close() !!}


</td>




</tr>

@endforeach
</tbody>
</table>
@endif

<a  class="text-success" href="{{ route('teamadd') }}">Yangi jamoa a'zosini qo'shish</a>
</div>





@endsection