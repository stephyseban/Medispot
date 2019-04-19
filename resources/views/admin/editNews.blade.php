
@extends('layouts.admin')
@section('content')
<div class="container">


<h4 class="mb-3"> <i class="fa fa-plus"></i>  Edit news</h4>

<form method="POST" action="{{ url('admin/news/edit/'.$news->id) }}">

{{ csrf_field() }}



<div class="form-group"><label>Title</label><input type="text"name="title" value="{{ $news->title}}" placeholder="Title"class="form-control"></div>
<div class="form-group"><label>Message</label><textarea class="form-control"name="message" value="{{$news->message}}"placeholder="Message"class="form-control"></textarea></div>



<div class="col-sm">
     <input type="submit" class="btn btn-success btn-block  br-25" value="Add " />
    </div>

</form>





@stop
