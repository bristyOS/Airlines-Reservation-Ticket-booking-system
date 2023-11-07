@extends('admin.master')
@section('content')

<form action="{{route('airlineslist.store')}}" method='post'>
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Airlines ID</label>
    <input type="email" name="airport id"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID">
  
  </div>
  <div class="form-group">
    <label for="exampleInputlocation1">Location</label>
    <input type="location"name="location" class="form-control" id="exampleInputlocation1" placeholder="location">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection