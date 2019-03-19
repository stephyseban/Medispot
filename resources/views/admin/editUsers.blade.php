@extends('layouts.admin')

@section('content')

<div class="container">

<h4 class="mb-3"> <i class="fa fa-plus"></i>  Edit Users</h4>

<form method="POST" action="{{ url('admin/users/edit/'.$user->id) }}">

{{ csrf_field() }}



<div class="form-group"><label>name</label><input type="text"name="name" value="{{ $user->name}}" placeholder="name"class="form-control"></div>
<div class="form-group"><label>email</label><input type="text"name="email" value="{{$user->email}}"placeholder="email"class="form-control"></div>
<div class="form-group"><label>address</label><input type="text"name="address" value="{{$user->address}}"placeholder="address"class="form-control"></div>
<div class="form-group"><label>shopname</label><input type="text"name="shopname" value="{{$user->shopname}}"placeholder="shopname"class="form-control"></div>
<div class="form-group"><label>location</label><input type="text"name="location" value="{{$user->location}}"placeholder="location"class="form-control"></div>
<div class="form-group"><label>Latitude</label><input type="text"name="lat" value="{{$user->lat}}" placeholder="Latitude" class="form-control"></div>
<div class="form-group"><label>Longitude</label><input type="text"name="lon" value="{{$user->lon}}" placeholder="Longitude" class="form-control"></div>


<div class="">
     <input type="submit" class="btn btn-success  br-25" value="Save" />
    </div>

</form>



@stop
