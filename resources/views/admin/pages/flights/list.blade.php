@extends('admin.master')
@section('content')
<h2> Flights Information</h2>
<a href="{{route('flightslist.form')}}" type="button" class="btn btn-success">view flights</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">number</th>
      <th scope="col">destination</th>
      <th scope="col">arrival_time</th>
      <th scope="col">departure_time</th>
      <th scope="col">airlines</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($flights as $key=> $flight)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$flight->number}}</td>
      <td>{{$flight->destination}}</td>
      <td>{{$flight->arrival_time}}</td>
      <td>{{$flight->departure_time}}</td>
      <td>{{$flight->airlines}}</td>
      <td>
      <a href="" class="btn btn-success">View</a>
      <a href="" class="btn btn-warning">Edit</a>
      <a href="" class="btn btn-danger">Delete</a>
</td>
    </tr>
    
    @endforeach
  </tbody>
</table>


@endsection
