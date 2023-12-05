@extends('admin.master')
@section('content')
<h2> Airlines Information </h2>
<a href="{{route('airlineslist.form')}}" type="button" class="btn btn-success">view Airlines</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Ailines_Name</th>
      <th scope="col"> Airport_Name</th>
      <th scope="col"> Airlines_image</th>
      <th scope="col"> Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Airlines as $key=> $Airline)

    <tr>
      <th scope="row"> {{$key+1}}</th>
    <td>{{$Airline->Airlines_name}}</td>
    <td>{{$Airline->Airport_name}}</td>
</td>
<td>

  <img height="120" width="120" src="{{url('uploads/'.$Airline->image)}}" alt="image">
</td>
<td>
  <a href=""class="btn btn-success">view</a>
        <a href=""class="btn btn-primary">Edit</a>
        <a href="#"class="btn btn-danger">Delete</a>
</td>

    </tr>
    @endforeach
  </tbody>
</table>


@endsection