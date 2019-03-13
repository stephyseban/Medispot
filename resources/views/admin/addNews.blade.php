@extends('layouts.admin')

@section('content')
<div class ="container">

<h4 class="mb-3"> <i class="fa fa-plus"></i>  Add news</h4>

<form method="POST" action="{{ url('admin/news/add') }}">

{{ csrf_field() }}

<div class="form-group"><label>title</label><input type="text" name="title" placeholder="title"class="form-control">
<div class="form-group"><label>message</label><textarea class="form-control" name="message" placeholder="message"class="form-control"></textarea>


</div>



<div class="col-sm">
     <input type="submit" class="btn btn-success   br-25" value="Add " />
    </div>
</form>

@stop
