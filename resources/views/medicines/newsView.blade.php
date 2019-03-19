@extends('layouts.app')
@section('content')




<div class="container">


<div class="row" style="margin-top:25px;">
@foreach($news as $news)

<article style="width:100%;">
	<h3>{{ $news->title }}</h3>
	<ul class="list-inline">
 		<li class="list-inline-item">{{ $news->created_at  }}</li>
	</ul>
 	<p class="">{{ $news->message }}</p>
  </article>


@endforeach



@if(count($news) == 0)
<div class="alert">
There is no news available</div>
@endif
</div>
</div>



</div>



@stop
