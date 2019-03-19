@extends('layouts.app')
@section('content')
<div class="container">




<div class="row">

@foreach ($shops as $shop)
<div class="col-md-4">
<div class="card" style="width: 20rem;">

  <div class="card-header">
 <a href="{{ url('/search/'.$shop->id.'?q='.$search) }}" class="shopname">{{ $shop->shopname }}</a>
<p>Location {{$shop->location}}</p>
  </div>
<div>
</div>

@endforeach
</div>
</div>





@stop
