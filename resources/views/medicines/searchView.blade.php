@extends('layouts.app')
@section('content')
<div class="container">

@foreach ($shops as $shop)
<div class="row">
<div class="col-md-12">

<div class="card" style="width: 20rem;" >

  <div class="card-header">
  <h3><b>{{$shop->name}}</b></h3><br>
Shopname : <a href="{{ url('/search/'.$shop->id.'?q='.$search) }}" class="shopname">{{ $shop->shopname }}</a><br>
Location : {{$shop->location}}
</div>
<div>
</div>
</div>
@endforeach
</div>

@if(count($shops) == 0)
<div class="alert">
These  medicine not available</div>
@endif

@stop
