@extends('admin.master')
@section('content')

<form action="{{route('bookinglist.store')}}"method='post'>
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Booking Id</label>
    <input type="email" name="booking id"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter id">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Serial</label>
    <input type="serial" name="Serial"class="form-control" id="exampleInputPassword1" placeholder="Serial">
  </div>
  <div class="form-check">
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection