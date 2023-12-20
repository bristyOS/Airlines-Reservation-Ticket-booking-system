@extends('frontend.master')

@section('content')

<div class="card-header">

    <h2> Air Ticket</h2>
</div>

<div class="card-body">
    <div class="row">
        <div class="col-md-4">
            <h6> Name of Passenger </h6>
            Farjana Haque
            
            <h6>From_airport</h6>
            {{$Flight_id->fromAirport->airport_name}}

            <h6> Gate</h6>
                A22

        </div>

        <div class="col-md-4">
            <h6> Arrival_time</h6>
            {{$Flight_id->arrival_time}}
            <h6> To_Airport</h6>
            {{$Flight_id->toAirport->airport_name}}

            <h6> Seat</h6>
                    22A

        </div>
        
        <div class="col-md-4">
        <h6> Departure_time</h6>
            {{$Flight_id->departure_time}}
           

            <h6> Boarding Time</h6>
            {{$Flight_id->toAirport->airport_name}}
          
            <h6> Economy Class</h6>
     </div>
        </div>
    </div>
   
    <hr> 
    <div class="row">
       
        <div class="col-md-7">
            <h6> Airlines Name</h6>
            {{$Flight_id->airline->Airlines_name}}
        </div>

        <div class="col-md-3">
            <h6>price
            {{$Flight_id->price}}
        </div>
        
    </div>
    










@endsection