@extends('admin.master')
@section('content')
<h2> Airlines Information </h2>
<a href="{{url('/airlines/list/form')}}" type="button" class="btn btn-success">view Airlines</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Ailine_Name</th>
      <th scope="col"> contact_information</th>
      <th scope="col">Fleet_information</th>
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