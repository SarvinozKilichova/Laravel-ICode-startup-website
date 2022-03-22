@extends('admin.index')

@section('content')
@if($tutorial)



<div class="text-center text-dark m-5" >

<a href="{{ route('tutorialadd') }}"><button class="btn btn-success m-2 ">yangi dars qo'shish-></button></a>

<table class="table table-hover table-collapse border">
<thead>
        <tr>
            <th>N/r</th>
            <th>Name</th>
             <th>Link</th>
            <th>Subject</th>
            <th>Text</th>
            <th>Images</th>
            <th>Icon</th>
            <th>Created_at</th>
            <th>Delete</th>
        </tr>
</thead>
<tbody>

@foreach($tutorial as $k=>$t)

<tr>
    <td>{{ $t->id }}</td>
    <td>
        <a href="{{ route('tutorialedit', ['id'=>$t->id]) }}"> {{ $t->name }}</a>
    </td>
    <td>{{ $t->link }}</td>
    <td>{{ $t->subject }}</td>
    <td>{{ $t->text }}</td>
    <td><img scr="/css/assets/images/{{ $t->images }}" width="100" hight="100" alt="{{ $t->images }}"></td>
    <td>{{ $t->icon }}</td>
    <td>{{ $t->created_at }}</td>
    <td>
        {!! Form::open(['url'=>route('tutorialedit', ['id'=>$t->id]), 'class'=>'form-horizontal', 'method'=>'POST' ]) !!}
        {{ method_field('DELETE') }}
        {!!  Form::button('delete', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
        {!! Form::close() !!}
    </td>
</tr>

@endforeach
</tbody>
</table>
@endif

<a  class="text-success" href="{{ route('tutorialadd') }}">Yangi dars qo'shish</a>
</div>






@endsection