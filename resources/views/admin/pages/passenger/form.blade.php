@extends('admin.master')
@section('content')

<form action="{{route('passengerlist.store')}}" method='post'>
  @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text"name="name" class="form-control" id="text" aria-describedby="emailHelp" placeholder="Enter your name">
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email"name="email_address" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text"name="address" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter your Address">
</div>
<div class="form-group">
    <label for="contact">Contact Number</label>
    <input type="number"name="number" class="form-control" id="number" aria-describedby="emailHelp" placeholder="Enter your contact number">
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@endsection