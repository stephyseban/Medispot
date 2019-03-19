@extends('layouts.admin')
@section('content')






<div class="container">



  <table class="table table-striped ">

    <tr>
      <th scope="col">Name</th>
      <th scope="col">Code</th>
      <th scope="col">Description</th>
      <th scope="col">Compostion</th>
      <th scope="col">Manufacturer</th>
      <th scope="col">Availibility</th>
       <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>




@foreach($medicines as $medicine)
<tr>
<td>{{$medicine->name}}</td>
<td>{{$medicine->code}}</td>
<td>{{$medicine->description}}</td>
<td>{{$medicine->compostion}}</td>
<td>{{$medicine->manufacturer}}</td>
<td>{{$medicine->availability}}</td>
<td>

<a class="btn btn-success btn-sm br-25" href="{{ url('admin/users/medicines/edit/'.$medicine->id) }}" >  Edit  </a>
       <a class="btn btn-success text-white btn-sm br-25" onclick="return confirmDelete({{ $medicine->id }});"  > Delete </a>
       </a>
</tr>

@if(count($medicines) == 0)
<tr>
<td colspan="6">Currently, there is no medicines</td>
</tr>
@endif
@endforeach
</tbody>
</table>


{{ $medicines->render() }}

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
      window.location.href = "{{ url('admin/users/medicines/delete/') }}/"+id;
      }
})

}
</script>

@endsection
