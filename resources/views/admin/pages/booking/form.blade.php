@extends('admin.master')
@section('content')

<form action="{{route('bookinglist.store')}}"method='post'>
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">booking_id</label>
    <input type="string" name="booking id"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter id">
  
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">booking_date</label>
    <input type="date" name="booking date"class="form-control" id="exampleInputPassword1" placeholder="Enter date">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">passenger_id</label>
    <input type="string" name="passenger id"class="form-control" id="exampleInputPassword1" placeholder="enter passenger id">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">flight_id</label>
    <input type="string" name="flight id"class="form-control" id="exampleInputPassword1" placeholder="enter flight id">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">seat_number</label>
    <input type="string" name="Seat number"class="form-control" id="exampleInputPassword1" placeholder="enter seat number">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Booking_class</label>
    <input type="text" name="booking class"class="form-control" id="exampleInputPassword1" placeholder="enter booking class">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">payment_Amount</label>
    <input type="string" name="payment amount"class="form-control" id="exampleInputPassword1" placeholder="enter payment details">
  </div>


  <div class="form-check">
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection