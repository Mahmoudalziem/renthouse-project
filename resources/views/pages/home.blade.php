
@extends('layouts.default')

@section('title')
    Home
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}" />
@endsection

@section('content')
    @include('layouts.header')
    <div id="main-slider"class="carousel slide">
            <ol class="carousel-indicators slider-header">
            <li data-target="#main-slider"data-slide-to="0"class="active"></li>
            <li data-target="#main-slider"data-slide-to="1"></li>
            <li data-target="#main-slider"data-slide-to="2"></li>
            </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{  asset('images/slider/slider.jpg')}}" alt="First slide">
                <div class="container">
                <div class="content col-12">
                    <h1 class="col-12">
                        All what you want is here in this site don’t worry
                    </h1>
                    <p class="col-12">
                        Rent house Sell Your house is the place for you.
                        We make the whole procedure incredibly simple
                        so that our customers can have peace of mind.
                    </p>
                    <a href="/register" class="btn">
                        Get Start Now
                    </a>
                    </div>
                    </div>
                </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{  asset('images/slider/slider.jpg')}}" alt="First slide">
                <div class="container">
            <div class="content col-12">
                <h1 class="col-12">Gear up to land 
                        somewhere new.
                </h1>
                <p class="col-12">See how your users experience your website in realtime or view 
                trends to see any changes in performance over time.
                </p>
                <a href="/register" class="btn">
                Get Start Now
                </a>
                <a href="/about" class="btn">
                Learn More
                </a>
                </div>  
                </div>
            </div>
            <div class="carousel-item ">
                <img class="d-block w-100" src="{{  asset('images/slider/slider.jpg')}}" alt="First slide">
                <div class="container">
            <div class="content col-12">
                <h1 class="col-12">Your customers will love you 
                            one minute from now.
                </h1>
                <p class="col-12">See how your users experience your website in realtime or view 
                trends to see any changes in performance over time.
                </p>
                <a href="/register" class="btn">
                Get Start Now
                </a>
                <a href="/about" class="btn">
                Learn More
                </a>
                </div> 
                </div>
            </div>
        </div>
        <div class="control">
        <a href="#main-slider"class="carousel-control-prev"data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#main-slider"class="carousel-control-next"data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>

    <!------>
    <div class="home-about">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-12">
                    <div class="about-body">
                        <div class="about-body-icon">
                            <i class="fa fa-edit"></i>
                        </div>
                        <div class="about-body-content">
                            <h3>Free Instant Valuation</h3>
                            <p>
                                Type in your house registration number and details
                                 into the bar to receive your instant free house valuation.
                                 Quick, easy and simple – there are no lengthy forms to complete.
                            </p>
                            <!---- FancyBox----->
                            <div class="d-none">
                                <div class="fancybox-content" id="exact">
                                    <div class="content-body">
                                        Type in your house registration number and details
                                        into the bar to receive your instant free house valuation.
                                        Quick, easy and simple – there are no lengthy forms to complete.
                                    </div>
                                </div>
                            </div>
                            <!---- FancyBox Link -->
                                <a href="#exact" id="inline" class="about-body-readmore">Learn More</a>
                            <!---- FancyBox Link -->
                        </div>
                    </div>
                </div>
                <!------>
                <div class="col-md-3 col-12">
                    <div class="about-body">
                        <div class="about-body-icon">
                            <i class="fa fa-trophy"></i>
                        </div>
                        <div class="about-body-content">
                            <h3>house Inspection</h3>
                            <p>
                                Choose a time that’s most convenient for you
                                to go and visit your local branch of Quick Sell
                                Your house so that we can inspect your house for an accurate valuation.
                            </p>
                            <!---- FancyBox----->
                            <div class="d-none">
                                <div class="fancybox-content" id="exact2">
                                    <div class="content-body">
                                        Choose a time that’s most convenient for you
                                        to go and visit your local branch of Quick Sell
                                        Your house so that we can inspect your house for an accurate valuation.
                                    </div>
                                </div>
                            </div>
                            <!------->
                            <a href="#exact2" class="about-body-readmore">Learn More</a>
                        </div>
                    </div>
                </div>
                <!------>
                <div class="col-md-3 col-12">
                    <div class="about-body">
                        <div class="about-body-icon">
                            <i class="fa fa-university"></i>
                        </div>
                        <div class="about-body-content">
                            <h3>Mony In Your Bank</h3>
                            <p>
                                Sold! Once we've checked your documentation and
                                appraised the vehicle, we will confirm the valuation,
                                finish off the paperwrok and organise a cash payment
                                straight into your account.
                            </p>
                            <!---- FancyBox----->
                            <div class="d-none">
                                <div class="fancybox-content" id="exact3">
                                    <div class="content-body">
                                        Sold! Once we've checked your documentation and
                                        appraised the vehicle, we will confirm the valuation,
                                        finish off the paperwrok and organise a cash payment
                                        straight into your account.
                                    </div>
                                </div>
                            </div>
                            <!-------->
                            <a href="#exact3" class="about-body-readmore">Learn More</a>
                        </div>
                    </div>
                </div>
                <!------>
                <div class="col-md-3 col-12">
                    <div class="about-body">
                        <div class="about-body-icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <div class="about-body-content">
                            <h3>Mony In Your Bank</h3>
                            <p>
                                Sold! Once we've checked your documentation and
                                appraised the vehicle, we will confirm the valuation,
                                finish off the paperwrok and organise a cash payment
                                straight into your account.
                            </p>
                            <!---- FancyBox----->
                            <div class="d-none">
                                <div class="fancybox-content" id="exact3">
                                    <div class="content-body">
                                        Sold! Once we've checked your documentation and
                                        appraised the vehicle, we will confirm the valuation,
                                        finish off the paperwrok and organise a cash payment
                                        straight into your account.
                                    </div>
                                </div>
                            </div>
                            <!-------->
                            <a href="#exact3" class="about-body-readmore">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------->
    <div class="feature">
        <div class="container">
            <div class="feature-body">
                <h3> Featured <span>Properties</span> in Zagazig</h3>
                <!----->
                <div class="feature-container">
                    <div class="feature-container-filter">
                        <button type="button" data-filter="all">All</button>
                        <button type="button" data-filter=".apartment">Apartment</button>
                        <button type="button" data-filter=".villa">Villa</button>
                        <button type="button" data-filter=".house">House</button>
                        <button type="button" data-filter=".studio">Studio</button>
                        <button type="button" data-filter=".flat">Flat</button>
                    </div>
                    <!------>
                    <div class="feature-container-body">
                        <div class="row">
                            @foreach ($houses as $house)
                                <div class="col-lg-3 col-md-4 col-12 mix {{$house->property}}">
                                    <div class="house-body">
                                        <div class="house-body-content">
                                            <div class="body-image owl-carousel owl-loaded owl-theme owl-drag" id="body-image">
                                                @foreach ($images as $image)
                                                    @if($house->id == $image->course_id)
                                                        <div class="item">
                                                            <img src="{{ $image->path }}" alt="Slider Image">
                                                        </div>
                                                    @endif
                                                @endforeach
                                                <!------->
                                            </div>
                                            <!----->
                                            <div class="body-price">{{ $house->price }} EGB</div>
                                            <!------>
                                            <div class="body-content">
                                                <div class="body-content-title">
                                                    <a href="house/{{ str_replace(' ','_',$house->title) }}">
                                                        {{ $house->title }}
                                                    </a>
                                                </div>
                                                <!----->
                                                <div class="body-content-location">
                                                    <i class="fa fa-map-marker"></i>
                                                    {{ $house->location }}
                                                </div>
                                                <!------>
                                                <div class="body-content-details">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="info">
                                                                {{ $house->bedroom }} Bed
                                                            </div>
                                                        </div>
                                                        <!------>
                                                        <div class="col-4">
                                                            <div class="info">
                                                                {{ $house->bathroom }} Bath
                                                            </div>
                                                        </div>
                                                        <!------>
                                                        <div class="col-4">
                                                            <div class="info border-0">
                                                                {{ $house->sqft }} sqft
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!----->
                        </div>
                    </div>
                    <!------->
                </div>
            </div>
        </div>
    </div>
    <!------>
    <div class="sell-body">
        <div class="body-container">
            <div class="sell-body-left">
                    Sell your Home So <span>easy & Fast</span>
                    <br>
                    With House Rent
                </div>

                <div class="sell-body-right text-center">
                    <div class="d-none">
                        <div class="fancybox-content" id="more">
                            <div class="right-body">
                                So how do you sell your house fast?
                                    Once you’ve completed the first steps in
                                    getting your free online house valuation, you
                                    will receive your quote and then be given an
                                    option to make an appointment at your local branch
                                    of Quick Sell Your house – our staff are very friendly
                                    and have great experience with buying used Houses.
                            </div>
                        </div>
                    </div>
                    <!----->
                    <a href="#more" id="inline" class="about-body-readmore btn-primary">Learn More</a>
                </div>
        </div>
    </div>
    <!-------->

    <div class="testmonials"id="Testmonials">
         <h3>More <span>25,600</span> Happy Clients</h3>
        <div class="container">
            <div class="owl-carousel owl-loaded owl-theme owl-drag" id="testmonials">
                <!----======First Item========---->
             <div class="col-6 mx-auto">
              <div class="item">
                  <div class="first-testmonials">
                      <div class="item-image">
                    <img src="{{ asset('images/testmonials/1.jpg') }}" alt="testmonials image">
                      </div>
                  <p>I would like to express my appreciation to one of your representatives
                    in Egypt, Mr Jai Bhagwan.I rented a vehicle from the Mall of the Emirates
                    and  after a couple of days a problem with the battery came
                    up</p>
                  <footer>Albert Einstein</footer>
                  </div>
              </div>
             </div>
                <!----=========second Item========---->
             <div class="col-6 mx-auto">
              <div class="item">
                  <div class="first-testmonials">
                      <div class="item-image">
                    <img src="{{ asset('images/testmonials/2.jpg') }}" alt="testmonials image">
                      </div>
                  <p>The availability of customer support service is 24x7
                        . All payment, contract terms and transactions are transparent.
                        Great promotions and support from sales team helped me get a brand
                        new SUV</p>
                  <footer>Bassem Mohamed</footer>
                  </div>
              </div>
             </div>
                <!----=========three Item========---->
             <div class="col-6 mx-auto">
              <div class="item">
                  <div class="first-testmonials">
                      <div class="item-image">
                        <img src="{{ asset('images/testmonials/4.jpg') }}" alt="testmonials image">   
                      </div>
                  <p>Great Service, Absolutely Terrific staff, extremely professional!!!
                                This was my first ever houseRenting experience, Awesome!! keep up this very
                                 good services and i see you the best in houserental fields thanks best regards</p>
                  <footer>Vasilis Giorgas</footer>
                  </div>
              </div>
             </div>
                <!-----======End Items======---->
            </div>
        </div>
        </div>

    <!-------->
    <div class="achivement">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-12">
                    <div class="achivement-content">
                        <h3>Our's <span>achivement</span></h3>
                        <p>
                            At Quick Sell Your House, we work to a strict time limit
                            and can buy your house on the day of your appointment. We
                            are one of the largest online housebuyers and so can buy
                            Houses for cash which means that you will receive your payment
                            within 24 hours of your visit. The money will be transferred
                            directly into your bank account by direct BACS payment meaning no
                            cheques or fraudulent notes to worry about; the process will be stress free.
                        </p>
                        <div class="achivement-counter">
                            <div class="row">
                                <div class="col-md-3 col-12">
                                    <div class="counter-content">
                                        <div class="counter-content-count counter">300</div>
                                        <div class="counter-content-title">Renter</div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="counter-content">
                                        <div class="counter-content-count counter">125</div>
                                        <div class="counter-content-title">Rent House</div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="counter-content">
                                        <div class="counter-content-count counter">200</div>
                                        <div class="counter-content-title">Sell House</div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="counter-content">
                                        <div class="counter-content-count counter">400</div>
                                        <div class="counter-content-title">Satisfaction Client</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-5 col-12">
                    <div class="achivement-exper">
                        <img  src="{{  asset('images/slider/slider.jpg')}}" />
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!------->
    <div class="partners_content">
        <div class="container">
            <!----->
            <h3 class="partners_header">
                Our <span>Partners</span>
            </h3>
            <!------>
            <div class="our-partenrs">
                <div id="Our_Parteners" class="owl-carousel owl-theme owl-loaded">

                    <div class="item">
                        <div class="partners_content_image">
                            <img src="{{ asset('images/partners/1.jpg') }}" alt="Partners_image" />
                        </div>
                    </div>


                    <div class="item">
                        <div class="partners_content_image">
                            <img src="{{ asset('images/partners/2.jpg') }}" alt="Partners_image" />
                        </div>
                    </div>


                    <div class="item">
                        <div class="partners_content_image">
                            <img src="{{ asset('images/partners/3.jpg') }}" alt="Partners_image" />
                        </div>
                    </div>


                    <div class="item">
                        <div class="partners_content_image">
                            <img src="{{ asset('images/partners/4.jpg') }}" alt="Partners_image" />
                        </div>
                    </div>


                    <div class="item">
                        <div class="partners_content_image">
                            <img src="{{ asset('images/partners/5.png') }}" alt="Partners_image" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/assets/jquery.counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/pages/home.js') }}"></script>
@endsection


