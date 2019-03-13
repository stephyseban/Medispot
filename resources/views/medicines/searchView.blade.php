@extends('layouts.app')
@section('content')
<div class="container">


@foreach ($users as $user)
<div class="card" style="width: 20rem;">

<div class="card">
  <div class="card-header">
 <a href="{{ url('/search/'.$user->id) }}" class="shopname">Shopname</a>
  </div>
<div>

<tr>

      <td>{{ $user->shopname }}</td>


</tr>
</div>

@endforeach
</div
@stop
