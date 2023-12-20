@extends('admin.master')
@section('content')

<form action="{{route('bookinglist.store')}}"method='post'>
  @csrf
  

  <div class="form-group">
    <label for="exampleInputPassword1">user_id</label>
    <input type="string" name="user_id"class="form-control" id="exampleInputPassword1" placeholder="Enter user id">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">departure_date</label>
    <input type="dateTime" name="departure_date"class="form-control" id="exampleInputPassword1" placeholder="enter departure date">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">arrival_date</label>
    <input type="dateTime" name="arrival_date"class="form-control" id="exampleInputPassword1" placeholder="enter arrival date">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">trip_type</label>
    <input type="string" name="trip_type"class="form-control" id="exampleInputPassword1" placeholder="enter trip type">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">seat_count</label>
    <input type="string" name="seat_count"class="form-control" id="exampleInputPassword1" placeholder="enter seat count">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">class_id</label>
    <input type="string" name="class_id"class="form-control" id="exampleInputPassword1" placeholder="enter class id">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">flight_id</label>
    <input type="string" name="flight_id"class="form-control" id="exampleInputPassword1" placeholder="enter flight id">
  </div>

 


  <div class="form-check">
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection