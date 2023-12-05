@extends('admin.master')
@section('content')

<h2> view seat information</h2>
<a href="{{route('seatlist.form')}}" type="button" class="btn btn-success">view seat</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Seat_class</th>
      <th scope="col">Seat_type</th>
      <th scope="col">Seat_price</th>
      <th scope="col">Location</th>
      <th scope="col">seat_allocation</th>
      <th scope="col">Seat_image</th>
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
    @foreach($seats as $key=> $seat)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$seat->seat_class}}</td>
      <td>{{$seat->seat_type}}</td>
      <td>{{$seat->seat_price}}</td>
      <td>{{$seat->location}}</td>
      <td>{{$seat->seat_allocation}}</td>

      <td>
        <img height="120" width="140" src="{{url('uploads/'.$seat->image)}}" alt="image">
      </td>
      
      <td>
        <a href=""class="btn btn-success">view</a>
        <a href=""class="btn btn-primary">Edit</a>
        <a href=""class="btn btn-danger">Delete</a>
</td>
</tr>

      
      @endforeach
    
  </tbody>
</table>

@endsection
