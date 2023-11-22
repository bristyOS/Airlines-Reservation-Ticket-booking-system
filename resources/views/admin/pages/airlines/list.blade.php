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
  <img src="{{url('/uploads/'.$Airline->image)}}" alt="">
</td>

    </tr>
    @endforeach
  </tbody>
</table>


@endsection