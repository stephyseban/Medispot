@extends('layouts.app')

@section('content')
<div class="container">
<div class="float-right">
  <a href="{{ url('medicine/new') }}" class="btn btn-success">Add Medicine</a>
</div>
  <table class="table">
  <thead class="thead-dark">
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
  <td> <a class="btn btn-success btn-sm br-25" href="{{ url('/medicine/edit/'.$medicine->id) }}" > Edit </a>
     <a href="{{ url('edit/'.$medicine->id) }}"> <i class="fa fa-edit"></i> </a>
      <input type="submit" class="btn btn-success btn-sm  br-25" value="Delete " /></td>


 </tr>








@endforeach
</tbody>
</table>


</div>
@endsection
