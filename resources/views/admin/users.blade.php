@extends('layouts.admin')

@section('content')

<div class="container">



  <table class="table table-striped table-bordered">
  <thead >
    <tr>
    <th scope="col">User name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Shopname</th>
      <th scope="col">Location</th>
       <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

@foreach($users as $user)
<tr>
      <td scope="row">{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->address }}</td>
      <td>{{ $user->shopname }}</td>
      <td>{{ $user->location }}</td>

<td>
    <a class="btn btn-success btn-sm br-25" href="{{ url('admin/users/edit/'.$user->id) }}" >  Edit  </a>
       <a class="btn btn-success text-white btn-sm br-25"  onclick="return confirmDelete({{ $user->id }});"  > Delete </a>

      <a class="btn btn-success btn-sm br-25" href="{{ url('admin/users/medicines/'.$user->id) }}" >  Medicines  </a>
       </a>


     </td>
     </tr>



@endforeach



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
      window.location.href = "{{ url('admin/users/delete') }}/"+id;
      }
})

}
</script>

@endsection
