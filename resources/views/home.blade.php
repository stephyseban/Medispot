@extends('layouts.app')
@section('content')

<div class="container">
<div class="float-right" style="margin-bottom:30px;">
  <a href="{{ url('medicine/new') }}" class="btn btn-default btn-main-sm"><i class="fa fa-plus"></i> Add Medicine</a>
</div>

  <table   class="table table-responsive product-dashboard-table" style="
    display: inline-table;">
  <thead>
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
      <th scope="row">{{ $medicine->name }}</th>
      <td>{{ $medicine->code }}</td>
      <td>{{ $medicine->description }}</td>
      <td>{{ $medicine->compostion }}</td>
      <td>{{ $medicine->manufacturer }}</td>
      <td>{{ $medicine->availability }}</td>
  <td>
     <a class="btn  btn-main-sm br-25" href="{{ url('/medicine/edit/'.$medicine->id) }}" > Edit </a>
      <a class="btn  btn-main-sm br-25 text-white" onclick="return confirmDelete({{ $medicine->id }});"  > Delete </a>
  </td>
 </tr>

@endforeach


@if(count($medicines) == 0)
<tr><td colspan="7">
No data available</td></tr>
@endif

</tbody>
</table>


{{{ $medicines->render() }}}
</div>

@endsection

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
      window.location.href = "{{ url('medicine/delete/') }}/"+id;
      }
})

}
</script>

@endsection
