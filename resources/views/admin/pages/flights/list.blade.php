@extends('admin.master')
@section('content')
<h2> Flights Information</h2>
<a href="{{route('flightslist.form')}}" type="button" class="btn btn-success">Add flights</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">number</th>
      <th scope="col">destination</th>
      <th scope="col">From_airport</th>
      <th scope="col">To_airport</th>
      <th scope="col">arrival_time</th>
      <th scope="col">departure_time</th>
      <th scope="col">airlines</th>
      <th scope="col">price</th>
      <th scope="col">seats</th>
      <th scope="col">travel_class</th>
      <th scope="col">image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($flights as $key=> $flight)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$flight->number}}</td>
      <td>{{$flight->destination}}</td>
      <td>{{$flight->fromAirport->airport_name}}</td>
      <td>{{$flight->toAirport->airport_name}}</td>
      <td>{{$flight->arrival_time}}</td>
      <td>{{$flight->departure_time}}</td>
      <td>{{$flight->airline->Airlines_name}}</td>
      <td>{{$flight->price}}</td>
      <td>{{$flight->seats}}</td>
      <td>{{$flight->travel_class}}</td>
</td>
<td>
<img height="70" width="70" src="{{url('uploads/'.$flight->image)}}" alt="image">



</td>

      <td>
      
      <a href="" class="btn btn-primary">Edit</a>
      <a href="{{route('flights.delete',$flight->id)}}" class="btn btn-danger">Delete</a>
</td>
    </tr>
    
    @endforeach
  </tbody>
</table>


@endsection
