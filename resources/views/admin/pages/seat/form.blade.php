@extends('admin.master')
@section('content')

<form action="{{route('seatlist.store')}}" method='post'>
  @csrf
  <div class="form-group">
    <label for="flight number">flight number</label>
    <input type="number" class="form-control" id="text" placeholder="Enter flight number" name="flight_number">
  
  </div>

  <div class="form-group">
    <label for="seat_number">seat number</label>
    <input type="number" class="form-control" id="text" placeholder="Enter seat number" name="seat_number">
  </div>

  <div class="form-group">
    <label for="seat class">seat class</label>
    <input type="text" class="form-control" id="text" placeholder="Enter seat class" name="seat_class">
  </div>

  <div class="form-group">
    <label for="seat type">seat type</label>
    <input type="text" class="form-control" id="text" placeholder="Enter seat type" name="seat_type">
  </div>

  <div class="form-group">
    <label for="seat price">seat price</label>
    <input type="number" class="form-control" id="text" placeholder="Enter seat price" name="seat_price">
  </div>

  <div class="form-group">
    <label for="location">location</label>
    <input type="text" class="form-control" id="text" placeholder="Enter location" name="location">
  </div>

  <div class="form-group">
    <label for="seat allocation">seat allocation</label>
    <input type="number" class="form-control" id="text" placeholder="Enter seat allocate" name ="seat_allocation">
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection