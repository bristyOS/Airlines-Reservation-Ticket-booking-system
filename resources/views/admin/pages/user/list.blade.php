@extends('admin.master')
@section('content')
<h2> User list </h2>
<a href="{{route('user.form')}}" type="button" class="btn btn-success">see user list</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">role</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
</tbody>
@foreach($users as $key=> $user)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->role}}</td>
      <td>{{$user->email}}</td>
      <td>
        <a href=""class="btn btn-success">view</a>
        <a href=""class="btn btn-primary">edit</a>
        <a href="{{route('user.delete',$user->id)}}"class="btn btn-danger">delete</a>
      </td>

      
      @endforeach
     @endsection 