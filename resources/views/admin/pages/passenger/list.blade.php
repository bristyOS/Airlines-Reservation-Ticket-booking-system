@extends('admin.master')
@section('content')
<h2> Passenger Information </h2>
<a href="{{url('/passenger/list/form')}}" type="button" class="btn btn-success">Add Passenger</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Address </th>
      <th scope="col">E-Mail</th>
      <th scope="col">contact_number</th>
    </tr>
  </thead>
  <tbody>
    @foreach($passengers as $key=> $passenger)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$passenger->name}}</td>
      <td>{{$passenger->address}}</td>
      <td>{{$passenger->email}}</td>
      <td>{{$passenger->contact_number}}</td>
    </tr>
   
  @endforeach  
  </tbody>
</table>


@endsection
