@extends('layouts.app')
@section('content')

<div class="container">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">address</th>

      </tr>
  </thead>
  <tbody>

<tr>
      <td>{{ $user->address }}</td>
     
      </tr>

@foreach
      <td>{{ $user->medicines}}</td>

@stop
