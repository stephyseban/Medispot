@extends('layouts.app')
@section('content')

<div class="container" style="display:flex;
    justify-content: center; align-items:center;text-align-center;">

<form method="POST" action="{{ url('/profile') }}" style="width:500px">

{{ csrf_field() }}
<div class="form-group row">
<label class="col-sm-6 col-form-label">Password</label> <div class="col-sm-6">
<input type="password" placeholder="Password" class="form-control" name="password" style="border-radius:2px;" required />
</div>
</div>
<div class="form-group row">
<label  class="col-sm-6 col-form-label">Confirm  Password</label> <div class="col-sm-6">
<input type="password" placeholder="Confirmed Password" class="form-control" name="cpassword" style="border-radius:2px;" required />
</div>
</div>

<div class="form-group row pull-right" style="float:right">
<input type="submit" value="Submit"  class="btn btn-praimary"/>
</div>
</div>



</form>
</div>
@stop
