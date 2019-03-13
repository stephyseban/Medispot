@extends('layouts.admin')

@section('content')

<div class ="container">

<!-- Total number of providers={{$users}} -->
<!-- Total number of medicines={{$medicines}} -->

<div class="row">

<div class="col-md-6">

<table class="table table-striped table-bordered">
<thead>
<tr>
<th scope="col">Name</th>
</tr>
</thead>
  <tbody>
  <tr>
@foreach($latest_users as $user)

<th scope="row">{{ $user->name }}</th>

</tr>

@endforeach
</tbody>
</table>
</div>
<div class="col-md-6">



<table class="table table-striped table-bordered">
<thead>
<tr>
  <th>Medicines</th>
</tr>
</thead>

@foreach($latest_medicines as $medicine)


<th scope="row">{{$medicine->name}}    </th>
</tr>


@endforeach
</tbody>
</table></div>

</div>




@stop
