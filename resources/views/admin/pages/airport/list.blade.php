@extends('admin.master')
@section('content')
<h2> Airport Information </h2>
<a href="{{url('/airport/list/form')}}" type="button" class="btn btn-success">view Airport</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Airport ID</th>
      <th scope="col"> Airport Name</th>
      <th scope="col">Location</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>d1@g5</td>
      <td>Hazrat Sahajalal International Airport</td>
      <td>Dhaka</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>c1@g5</td>
      <td>Shah Amanat International Airport</td>
      <td>Chittagong</td>
    </tr>
    
  </tbody>
</table>


@endsection