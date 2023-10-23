@extends('admin.master')
@section('content')
<h2> Flights Information</h2>
<a href="{{url('/flights/list/form')}}" type="button" class="btn btn-success">view flights</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Infant</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>General</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Business class</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


@endsection
