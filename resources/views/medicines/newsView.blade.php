@extends('layouts.app')
@section('content')







<div class="row" style="margin-top:25px;">
@foreach($news as $news)

<div class="col-sm-3" style="min-height:125px;">
<div class="card">
   <div class="card-body">
    <h5 class="card-title">{{ $news->title }}</h5>
    <p class="card-text">{{ $news->message }}</p>

  </div></div>
</div>

@endforeach

</div>


</div>



@stop
