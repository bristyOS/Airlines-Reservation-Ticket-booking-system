@extends('admin.master')
@section('content')

<form action="{{route('flightslist.store')}}" method='post' enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="number"> Flight Number</label>
    <input type="number"name="number" class="form-control" id="text" aria-describedby="emailHelp" placeholder="Enter flight number">
</div>
<div class="form-group">
    <label for="Destination">Destination</label>
    <input type="text"name="Destination" class="form-control" id="text" aria-describedby="emailHelp" placeholder="Enter Destination">
    
  </div>
  <div class="form-group">
  <label for="exampleInputlocation1">From airport</label>
   <select name="from" id="" class="form-control">
    @foreach($airports as $airport)
    <option value="{{$airport->id}}">{{$airport->airport_name}}</option>
    @endforeach
   </select>
  </div>

  <div class="form-group">
    <label for="exampleInputlocation1">To_airport</label>
    <select name="to" id="" class="form-control">
    @foreach($airports as $airport)
    <option value="{{$airport->id}}">{{$airport->airport_name}}</option>
    @endforeach
   </select>
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
    <label for="exampleInputlocation1">Airline </label>
    <select name="airlines" id="" class="form-control">
    @foreach($airlines as $airline)
    <option value="{{$airline->id}}">{{$airline->Airlines_name}}</option>
    @endforeach
   </select>
    </div>

<div class="form-group">
    <label for="number"> Price</label>
    <input type="string"name="price" class="form-control" id="number" placeholder="Enter price">
</div>

<div class="from-group">
  <label for="" class="form-label">Upload image</label>
  <input class="form-control" name="image" type="file" id="formFileMultiple" multiple>
</div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection