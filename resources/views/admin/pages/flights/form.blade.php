@extends('admin.master')
@section('content')

<form action="{{route('flightslist.store')}}" method='post'>>
  @csrf
  <div class="form-group">
    <label for="number">Flight Number</label>
    <input type="number"name="number" class="form-control" id="text" aria-describedby="emailHelp" placeholder="Enter flight number">
</div>
  <div class="form-group">
    <label for="Destination">Destination</label>
    <input type="text"name="Destination" class="form-control" id="text" aria-describedby="emailHelp" placeholder="Enter Destination">
    
  </div>
  
  <div class="form-group">
    <label for="arrival time">arrival time</label>
    <input type="time"name="arrival_time" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter arrival time">
</div>
<div class="form-group">
    <label for="departure time">departure time</label>
    <input type="time"name="departure_time" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter departure time">
</div>
<div class="form-group">
    <label for="airlines">airlines</label>
    <input type="text"name="airlines" class="form-control" id="number" aria-describedby="emailHelp" placeholder="Enter airlines name">
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection