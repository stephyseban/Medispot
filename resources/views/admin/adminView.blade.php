@extends('layouts.admin')

@section('content')

<div class ="container">

<div class="row">
<div class="col-sm-6">
<div class="card">
      <div class="card-body">

<div class="row">

  <div class="col-sm-3" style="
    text-align: center;
    font-size: 40px;
"> <i class="fas fa-user"></i></div>
  <div class="col-sm-9"> <h5 class="card-title">User</h5>
        <p class="card-text">{{ $users }}</p></div>
</div>
      </div>
    </div>
    </div>


<div class="col-sm-6">
<div class="card">
      <div class="card-body">

      <div class="row">
  <div class="col-sm-3" style="
    text-align: center;
    font-size: 40px;
"> <i class="fas fa-file-medical"></i></div>

<div class="col-sm-9"> <h5 class="card-title">Medicines</h5>
        <p class="card-text">{{$medicines}}</p>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>

<div class="row">

<div class="col-md-6">

<table class="table table-striped table-bordered">
<thead>
<tr>
<th scope="col">Name</th>
<th scope="col">Email</th>
</tr>
</thead>
  <tbody>
  <tr>
@foreach($latest_users as $user)

<th scope="row">{{ $user->name }}</th>
<th scope="row">{{ $user->email }}</th>

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
  <th>Code</th>
</tr>
</thead>

@foreach($latest_medicines as $medicine)


<th scope="row">{{$medicine->name}}    </th>
<th scope="row">{{$medicine->code }}    </th>
</tr>


@endforeach
</tbody>
</table></div>

</div>




@stop
