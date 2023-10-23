@extends('admin.master')
@section('content')

<form action="{{route('ticketlist.store')}}" method='post'>
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Enter ID</label>
    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Amount</label>
    <input type="amount" class="form-control" id="exampleInputPassword1" placeholder="amount">
  </div>
  <div class="form-check">
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection