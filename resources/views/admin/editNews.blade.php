
@extends('layouts.admin')
@section('content')
<div class="container">


<h4 class="mb-3"> <i class="fa fa-plus"></i>  Edit news</h4>

<form method="POST" action="{{ url('admin/news/edit/'.$news->id) }}">

{{ csrf_field() }}



<div class="form-group"><label>title</label><input type="text"name="title" value="{{ $news->title}}" placeholder="title"class="form-control"></div>
<div class="form-group"><label>message</label><input type="text"name="message" value="{{$news->message}}"placeholder="message"class="form-control"></div>



<div class="col-sm">
     <input type="submit" class="btn btn-success btn-block  br-25" value="Add " />
    </div>

</form>





@stop
