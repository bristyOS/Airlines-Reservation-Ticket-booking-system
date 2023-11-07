@extends('admin.master')
@section('content')
<h2> User Information </h2>
<a href="{{url('/users/list/form')}}" type="button" class="btn btn-success">Add users</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Address </th>
      <th scope="col">E-Mail</th>
      <th scope="col">contact_number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  
     @endsection 