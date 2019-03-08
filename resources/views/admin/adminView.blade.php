@extends('layouts.admin')

@section('content')

<div class ="container">

Total number of providers={{$users}}
Total number of medicines={{$medicines}}


<table>
<tr>
  <th>Name</th>
</tr>
@foreach($latest_users as $user)

<tr>
    <td>{{ $user->name }} </td>

</tr>
@endforeach

<tr>
  <th>Medicines</th>
</tr>
@foreach($latest_medicines as $medicine)

<tr>
<td> {{$medicine->name}}    </td>
</tr>


@endforeach
</table>


@stop
