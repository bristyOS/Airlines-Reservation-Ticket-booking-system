@extends('admin.master')
@section('content')

<h2> Ticket Information</h2>
<a href="{{url('/ticket/list/form')}}" type="button" class="btn btn-success">view ticket</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ticket ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>1111</td>
      <td>Business Class</td>
      <td>$799.00</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>2222</td>
      <td>Economy</td>
      <td>$500.00</td>
    </tr>
    
  </tbody>
</table>

@endsection
