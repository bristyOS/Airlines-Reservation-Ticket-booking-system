@extends('admin.master')
@section('content')
<h2> Booking Information</h2>
<a href="{{url('/booking/list/form')}}" type="button" class="btn btn-success">view List</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">booking_id</th>
      <th scope="col">booking_date</th>
      <th scope="col">passenger_id</th>
      <th scope="col">flight_id</th>
      <th scope="col">seat_number</th>
      <th scope="col">Booking_class</th>
      <th scope="col">payment_details</th>
      <th scope="col">booking_status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>01@f</td>
      <td>1/5/23</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>02@j</td>
      <td>8/6/23</td>
      <td>@fat</td>
    </tr>
    
  </tbody>
</table>

@endsection