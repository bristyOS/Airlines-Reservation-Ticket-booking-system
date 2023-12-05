@extends('admin.master')
@section('content')
<h2> Airport Information </h2>
<a href="{{route('airportlist.form')}}" type="button" class="btn btn-success">view Airport</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Airport_code</th>
      <th scope="col"> Airport_Name</th>
      <th scope="col"> Form_airport</th>
      <th scope="col"> To_airport</th>
      <th scope="col">Location</th>
      <th scope="col">terminal_information</th>
      <th scope="col">service_available</th>
      <th scope="col">runway_information</th>
      <th scope="col">gate_information</th>
    </tr>
  </thead>
  <tbody>
    @foreach($airports as $key=> $airport)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$airport->Airport_code}}</td>
      <td>{{$airport->airport_name}}</td>
      <td>{{$airport->form_airport}}</td>
      <td>{{$airport->to_airport}}</td>
      <td>{{$airport->location}}</td>
      <td>{{$airport->terminal}}</td>
      <td>{{$airport->service_available}}</td>
      <td>{{$airport->runway}}</td>
      <td>{{$airport->gateway}}</td>
</td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection