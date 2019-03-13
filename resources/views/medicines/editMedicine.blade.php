@extends('layouts.app')

@section('content')

<div class="container">


<h4 class="mb-3"> <i class="fa fa-plus"></i>  Edit Medicine</h4>

<form method="POST" action="{{ url('medicine/edit/'.$medicine->id) }}">

{{ csrf_field() }}



  <div class="form-group">
<label>Name</label>
<input type="text" placeholder="name"value="{{$medicine->name}}" class="form-control" name="name" style="border-radius:2px;" required />
</div>



<div class="form-group">
<label>Code</label>
<input type="text" placeholder="code"value="{{$medicine->code}}" class="form-control" name="code" style="border-radius:2px;" required />
</div>


<div class="form-group">
    <label >Description</label>
    <textarea class="form-control" placeholder="description of medicine"  name="description" style="border-radius:2x;" required >{{$medicine->description}}</textarea>

  </div>




  <div class="form-group">
    <label >Compostion</label>
    <input type="text" placeholder="compound contains medicine"value="{{$medicine->compostion}}" class="form-control" name="compostion" style="border-radius:2x;" required />
  </div>





  <div class="form-group">
    <label >Manufacturer</label>
    <input type="text" placeholder="manufacturer" value="{{$medicine->manufacturer}}" class="form-control" name="manufacturer" style="border-radius:2x;" required />
  </div>




  <div class="form-group">
    <label >Avilability</label>
    <input type="text" placeholder="avilability" value="{{$medicine->availability }}" class="form-control" name="availability" style="border-radius:2x;" required />
  </div>



  <div class="col-sm">
      <input type="submit" class="btn btn-success btn-lg"  value="Edit" />

    </div>
</form>



</div>
@stop
