@extends('layouts.site')
@section('content')


<div class='row mr-0'>
    <div class="col-sm-4">

<h2 class="text-center text-dark mt-5">Front-end darslar</h2>


@if (isset($front))

@foreach($front as $f)

<div class="m-5">
    <div class=" shadow-lg bg-white text-success">
        <ul class="p-2">
            <li class='list-unstyled'>
                <h4  class="d-inline-block border-right pr-2"><i class="{!! $f->icon!!} text-left"></i></h4>
                <h4 class="d-inline-block text-right pl-5"><a href="{!! $f->link !!}">{!! $f->name !!}</a>  </h4><span class="badge badge-warning align-top text-white">top</span>
            </li>
        </ul>

    </div>


</div>
@endforeach
@endif
</div>

<div class="col-sm-4">
<h2 class="text-center text-dark mt-5">Back-end darslar</h2>
@if (isset($back))
@foreach($back as $b)

<div class="m-5 ">
    <div class="shadow-lg bg-white text-success">
        <ul class="p-2">
            <li class='list-unstyled '>
                <h4  class="d-inline-block border-right pr-2"><i class="{!! $b->icon!!} text-left"></i></h4>
                <h4 class="d-inline-block text-right pl-5"><a href="{!! $b->link !!}">{!! $b->name !!}</a> </h4>
            </li>
        </ul>

    </div>


</div>
@endforeach
@endif
</div>

<div class="col-sm-4">
<h2 class="text-center text-dark mt-5">Database</h2>
@if (isset($database))
@foreach($database as $d)

<div class="m-5 ">
    <div class="shadow-lg bg-white text-success">
        <ul class="p-2">
            <li class='list-unstyled '>
                <h4  class="d-inline-block border-right pr-2"><i class="{!! $d->icon!!} text-left"></i></h4>
                <h4 class="d-inline-block text-right pl-5"><a href="{!! $d->link !!}">{!! $d->name !!}</a></h4>
            </li>
        </ul>

    </div>


</div>
@endforeach
@endif
</div>



</div>














@endsection



