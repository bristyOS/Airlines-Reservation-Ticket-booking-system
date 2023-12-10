@extends('frontend.master')
@section('content')
<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6 banner-left">

            </div>
            <div class="col-md-6">

                






    </div>

    </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start popular-destination Area -->
<section class="popular-destination-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Popular Airlines</h1>
                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day.</p>
                </div>
            </div>
        </div>

        <div class="row">

            @foreach($Airlines as $key=> $Airline)
            <div class="col-md-4">
                <div class="single-destination relative">
                    <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="{{url('uploads/'.$Airline->image)}}" alt="">
                    </div>
                    <div class="desc" style=>
                        <a href="{{route('single.airline',$Airline->id)}}" class="price-btn"></a>
                        <h4 style=>Airlines</h4>
                        <p>{{$Airline->Airlines_name}} </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
    </div>
</section>
<!-- End popular-Airlines Area -->



<!-- Start other-issue Area -->
<section class="other-issue-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-10">Other issues we can help you </h1>
                    <p>passenger can saw available seats</p>
                </div>
            </div>
        </div>
        <div class="row">

        
        @foreach($seats as $key=> $seat)
            <div class="col-md-4">
                <div class="single-destination relative">
                    <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="{{url('uploads/'.$seat->image)}}" alt="">
                       
                    </div>
                    <div class="desc">
                        <a href="#" class="price-btn"></a>
                        <h4></h4>
                        <p>{{$seat->seat_class}}</p>
                        <p>{{$seat->seat_type}}</p>
                        <p>{{$seat->seat_price}}</p>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</section>
<!-- End other-issue Area -->


<!-- Start testimonial Area -->
<section class="testimonial-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10"> Available Destination from our Clients</h1>
                    <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-testimonial">
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('uploads/passenger/1.jpg') }}" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
                        </p>
                        <h4>Chittagong</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('uploads/passenger/1.jpg') }}" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                        </p>
                        <h4>Barishal</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('uploads/passenger/1.jpg') }}" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
                        </p>
                        <h4>Cox's Bazar</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('uploads/passenger/1.jpg') }}" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                        </p>
                        <h4>Dhaka</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('uploads/passenger/1.jpg') }}" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
                        </p>
                        <h4>Barishal</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('uploads/passenger/1.jpg') }}" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                        </p>
                        <h4>Shylet</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End testimonial Area -->

<!-- Start home-about Area -->
 <!--<section class="home-about-area">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-end">
            <div class="col-lg-6 col-md-12 home-about-left">
                <h1>
                    Did not find your Package? <br>
                    Feel free to ask us. <br>
                    We‘ll make it for you
                </h1>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.
                </p>
                <a href="#" class="primary-btn text-uppercase">request custom price</a>
            </div>
            <div class="col-lg-6 col-md-12 home-about-right no-padding">
                <img class="img-fluid" src="img/about-img.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->


<!-- Start blog Area -->
<!--section class="recent-blog-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-10">Latest from Our Blog</h1>
                    <p>With the exception of Nietzsche, no other madman has contributed so much to human sanity as has.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-recent-blog-carusel">
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b1.jpg" alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#">
                            <h4 class="title">Low Cost Advertising</h4>
                        </a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b2.jpg" alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#">
                            <h4 class="title">Creative Outdoor Ads</h4>
                        </a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b3.jpg" alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#">
                            <h4 class="title">It's Classified How To Utilize Free</h4>
                        </a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b1.jpg" alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#">
                            <h4 class="title">Low Cost Advertising</h4>
                        </a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b2.jpg" alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#">
                            <h4 class="title">Creative Outdoor Ads</h4>
                        </a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b3.jpg" alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#">
                            <h4 class="title">It's Classified How To Utilize Free</h4>
                        </a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section--->
@endsection