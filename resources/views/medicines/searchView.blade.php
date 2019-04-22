
@extends('layouts.app')
@section('content')
<div class="container">

<div class="row">

@foreach ($shops as $shop)
<div class="col-md-12">

<a href="{{ url('/search/'.$shop->id.'?q='.$search) }}" >
<div class="card" style="width: 20rem;" >
  <div class="card-header">
  <h3><b>{{$shop->name}}</b></h3><br>
Shopname :  {{ $shop->shopname }} <br>
Location : {{$shop->location}}
</div>
</div>

</div>
</a>
@endforeach
</div>

</div>

@if(count($shops) == 0)
<div class="alert">
These  medicine not available</div>
@endif

@stop
