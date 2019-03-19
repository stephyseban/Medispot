@extends('layouts.app')

@section('content')

<div class="container">


<h4 class="mb-3"> <i class="fa fa-plus"></i>  Add Medicine</h4>

<form method="POST" action="{{ url('medicine/new') }}">

{{ csrf_field() }}



  <div class="form-group">
<label>Name</label>
<input type="text" placeholder="Name of Medicine" class="form-control" name="name" style="border-radius:2px;" required />
</div>



<div class="form-group">
<label>Code</label>
<input type="text" placeholder="code" class="form-control" name="code" style="border-radius:2px;" required />
</div>


<div class="form-group">
    <label >Description</label>
    <textarea class="form-control" placeholder="description of medicine"  name="description" style="border-radius:2x;" required ></textarea>

  </div>




  <div class="form-group">
    <label >Compostion</label>
    <input type="text" placeholder="compound contains medicine" class="form-control" name="compostion" style="border-radius:2x;" required />
  </div>





  <div class="form-group">
    <label >Manufacturer</label>
    <input type="text" placeholder="manufacturer" class="form-control" name="manufacturer" style="border-radius:2x;" required />
  </div>




  <div class="form-group">
    <label >Avilability</label>
    <input type="number" placeholder="avilability" class="form-control" name="availability" style="border-radius:2x;" required />
  </div>



  <div class="col-sm">
     <input type="submit" class="btn btn-success btn-sm br-25" value="Add " />
    </div>


</form>



</div>
@stop
