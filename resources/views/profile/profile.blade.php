@extends('layouts.app')
@section('content')

<div class="container" style="display:flex;
    justify-content: center; align-items:center;text-align-center;">

<form method="POST" action="{{ url('/profile') }}" style="width:500px">

{{ csrf_field() }}

<div class="form-group row">
<label class="col-sm-6 col-form-label">Name</label> <div class="col-sm-6">
<input type="text"  class="form-control" value="{{Auth::user()->name}}" name="name" style="border-radius:2px;" required />
</div>
</div>



<div class="form-group row">
  <label  class="col-md-6 col-form-label ">Shopname</label><div class="col-sm-6">
 <input id="shopname" type="text" class="form-control"value="{{Auth::user()->shopname}}"  name="shopname" style="border-radius:2px;" required />
</div>
</div>


<div class="form-group row">
  <label  class="col-md-6 col-form-label ">Address</label><div class="col-sm-6">
 <input type="textarea" class="form-control"  name="address" value="{{Auth::user()->address}}" style="border-radius:2px;" required />
</div>
</div>


<div class="form-group row">
  <label  class="col-md-6 col-form-label ">Location</label><div class="col-sm-6">
 <input type="text" class="form-control"  value="{{Auth::user()->location}}" name="location" style="border-radius:2px;" required />
</div>
</div>



<div class="form-group row">
  <label  class="col-md-6 col-form-label ">Latitude</label><div class="col-sm-6">
 <input type="numeric" class="form-control"  value="{{Auth::user()->lat}}" name="lat" style="border-radius:2px;" required />
</div>
</div>


<div class="form-group row">
  <label  class="col-md-6 col-form-label ">Longitude</label><div class="col-sm-6">
 <input type="numeric" class="form-control"  value="{{Auth::user()->lon}}" name="lon" style="border-radius:2px;" required />
</div>
</div>




<div class="form-group row">
  <label  class="col-md-6 col-form-label ">Phone Number</label><div class="col-sm-6">
 <input type="phonenumber" class="form-control" name="phonenumber" value="{{Auth::user()->phonenumber}}" style="border-radius:2px;" required />
</div>
</div>

<div class="form-group row">
  <label  class="col-md-6 col-form-label ">Email</label><div class="col-sm-6">
 <input type="text" class="form-control" name="email"  value="{{Auth::user()->email}}" style="border-radius:2px;" required />
</div>
</div>



<div class="form-group row">
<label class="col-sm-6 col-form-label">Password</label> <div class="col-sm-6">
<input type="password" placeholder="Password" class="form-control" name="password" style="border-radius:2px;" required />
</div>
</div>
<div class="form-group row">
<label  class="col-sm-6 col-form-label">Confirm  Password</label> <div class="col-sm-6">
<input type="password" placeholder="Confirm Password" class="form-control" name="cpassword" style="border-radius:2px;" required />
</div>
</div>

<div class="form-group row pull-right" style="float:right">
<input type="submit" value="Submit"  class="btn btn-primary btn-sm"/>
</div>
</div>

</form>
</div>






@stop
