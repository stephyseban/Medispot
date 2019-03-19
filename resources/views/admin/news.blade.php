@extends('layouts.admin')
@section('content')
<div class ="container">

<div style="margin-bottom:60px;">
  <div class="float-right"><a class="btn btn-primary " href="{{ url('admin/news/add/') }}" >  Add News </a></div>
</div>

<table class="table table-striped table-bordered">

<tr>
<th> Title  </th>
<th> Message  </th>
<th> Action  </th>
</tr>

@foreach($news as $post)
<tr>
<td>{{$post->title}}</td>
<td>{{$post->message}}</td>
<td>
<a class="btn btn-success btn-sm br-25" href="{{ url('admin/news/edit/'.$post->id) }}" >  Edit  </a>
<a class="btn btn-success text-white btn-sm br-25" onclick="return confirmDelete({{ $post->id}});"  > Delete </a>
</td>
</tr>
@endforeach

@if(count($news) == 0)
<tr>
<td colspan=3> There is no news available</td>
</tr>
@endif

</table>


{{ $news->render()  }}

@stop
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" />
<script>

function confirmDelete(id){
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.value) {
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      );
      window.location.href = "{{ url('admin/news/delete/') }}/"+id;
      }
})

}
</script>

@endsection
