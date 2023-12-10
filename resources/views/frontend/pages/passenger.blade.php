@extends('frontend.master')


@section('content')



<div class="container">
    <form action=""></form>
    <div class="row">
        <div class="col-md-6">
            <h2>Personal Details</h2>

            <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" name="name" class="form-control" id="address" placeholder="name">
            </div>

            <div class="form-group">
                <label for="name">Last Name</label>
                <input type="text" name="name" class="form-control" id="address" placeholder="name">
            </div>



            <div class="form-group">
                <label for="date">Date of birth</label>
                <input type="date" name="date" class="form-control" id="address" placeholder="name">
            </div>


            <div class="form-group">
                <label for="name">Email_Address</label>
                <input type="email" name="email" class="form-control" id="Email" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="name">Contact_number</label>
                <input type="string" name="name" class="form-control" id="address" placeholder="number">
            </div>




            <div class="form-group">
                <label for="name">Country</label>
                <input type="text" name="name" class="form-control" id="address" placeholder="name">
            </div>

            <div class="form-group">
                <label for="name">City</label>
                <input type="text" name="name" class="form-control" id="address" placeholder="name">
            </div>





        </div>
        <div class="col-md-6">
            <div class="card">


                <div class="card-header">
                    <h2>Review-Your Booking</h2>
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                         
                        <h6> Departure_time</h6>
                        
                            {{$Flights->departure_time}} <br>
                            <h6>From_airport</h6>
                            {{$Flights->fromAirport->airport_name}}

                        </div>

                        <div class="col-md-6">
                          <h6> Arrival_time</h6>
                        {{$Flights->arrival_time}} <br>p
                        <h6> To_Airport</h6>
                        {{$Flights->toAirport->airport_name}}

                        

                        </div>
                        
                    </div>
                    <h2> </h2>
                    <hr>
                    <div class="row">
                        <div style="width: 10px; height: 10px;" class="col-md-2">
                            <img src="{{ asset('uploads/passenger/1.jpg') }}" alt="" style="width: 50px; height: 40px;">
                        </div>
                        <div class="col-md-7">
                            <h6> Airlines</h6>
                            {{$Flights->airline->Airlines_name}}
                            
                        </div>
                              
                        <div class="col-md-3"> <h6>price {{$Flights->price}}</div> </h6>
                    </div>
                    <h1></h1>
                </div>

            </div>
        </div>

    </div>
    </form>
</div>
<a class="btn btn-danger form-control text-center" href="{{route('successful.form')}}"> Buy now</a>

@endsection