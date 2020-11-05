@extends('layouts.default')

@section('title')
    About Us
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/pages/about.css') }}" />
@endsection

@section('content')
    @include('layouts.header')
    <section class="page_banner">
            <img src="{{ asset('images/slider/slider3.jpg') }}" alt=""/>
                <div class="container">
                    <div class="page-content">
                        <h3>
                        About Us
                    </h3>
                    <ul class="content-nav">
                        <li>
                        <a href="/" target="_self">
                            <i class="fa fa-home"></i> Home
                        </a>
                        </li>
                        <!------>
                        <li>
                            <div>
                                <i class="fa fa-long-arrow-right"></i> About Us
                            </div>
                        </li>
                    </ul>
                    <div class="clear-both"></div>
                    </div>
                </div>
    </section>
    <!------>
    <section class="page_about_us_video">
        <div class="about_us_video_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="about_us_left">
                            <h2>
                                <span>House Rent</span>
                                <span>Story</span>
                            </h2>
                            <p>
                                As part of the RentPath Small Property Network, Rentals.com is
                                 a leading online resource for residential rentals nationwide.
                                 Millions of unique visitors come to The RentPath Network to
                                 find single-family houses, apartments, condos and townhouses
                                  for rent. Rentals.com is also a powerful tool for property
                                  owners and managers. It increases rental responses and
                                  delivers accurate reporting and tracking for proven results.
                            </p>
                            <p>
                                Rentals.com is here to give the best possible customer service
                                to property managers and landlords advertising their properties,
                                 as well as potential tenants searching for their next house. If
                                  you have any questions or comments please use the form below
                                  and we will get back to you within 24 hours or by the end of
                                  the next business day.
                                </p>
                        </div>
                    </div>

                    <div class="col-md-6 offset-md-1">
                        <div class="about_us_right with-video">
                            <a href="https://www.youtube.com/watch?v=UMCpk6HGnEg?showinfo=0&amp;rel=0" class="btn-circle video">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
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
    <!------>
    <section class="mission_content">
        <div class="container">
            <div class="row">

                <div class="col-md-5 col-12">
                    <div class="mission_content_details">
                        <h2>
                            Our
                            <span>Mission</span>                            </h2>
                        <p>
                            Rent House, Inc.s mission is to
                            set the standard of high performance and manage
                             residential and commercial properties for the
                             success of our clients while ensuring all of our
                             residents have the best quality, most comforting
                             and affordable living experience possible. The key
                             to our growth and prosperity is a direct result of
                             our exceptional management team and together we strive
                             for excellence and to ensure the success of our client
                        </p>
                        <p>
                            Rent House, Inc.s vision is to continue to be the property
                             management company of choice, providing full service and
                              care to our clients, properties, and to our team members
                              by setting the standard in the multi-family housing,
                              property management, and development industries.
                        </p>
                    </div>
                </div>

                <div class="col-md-7 col-12">
                    <div class="row">

                        <div class="col-md-6 col-12">
                            <div class="mission_content_image w-100">
                                <img class="w-100 d-block" src="{{ asset('images/slider/slider1.jpg') }}">
                            </div>
                        </div>

                        <div class="col-md-6 col-12 d-md-block d-none">
                            <div class="mission_content_image w-100 two">
                                <img class="w-100 d-block" src="{{ asset('images/slider/slider2.jpg') }}">
                            </div>
                        </div>

                        <div class="col-md-6 col-12 d-md-block d-none">
                            <div class="mission_content_image w-100">
                                <img class="w-100 d-block" src="{{ asset('images/slider/slider3.jpg') }}">
                            </div>
                        </div>

                        <div class="col-md-6 col-12 d-md-block d-none">
                            <div class="mission_content_image w-100 four">
                                <img class="w-100 d-block" src="{{ asset('images/slider/slider.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------->
    <div class="meet_team text-center">
        <div class="container">
            <div class="meet_team_header">
                Meet Our
                <span>Team</span>                </div>
            <!----->
            <div class="row justify-content-center">
                <div class="col-md-4 col-12">
                    <div class="instr_body">
                        <div class="row no-gutters">
                            <div class="col-md-5">
                                <div class="instr_image">
                                    <img src="{{ asset('images/team/user.png') }}" alt="team_image">
                                    <div class="overlay_social">
                                        <a href="https://www.facebook.com/alshaimaa.tantawy.7" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                        <!----->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="instr_name">
                                    Dr/Alshaimaa Tantawy
                                </div>
                                <div class="instr_title">
                                    Project Manager
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!----->
                <div class="col-md-4 col-12">
                    <div class="instr_body">
                        <div class="row no-gutters">
                            <div class="col-md-5">
                                <div class="instr_image">
                                    <img src="{{ asset('images/team/user.png') }}" alt="team_image">
                                    <div class="overlay_social">
                                        <a href="https://www.facebook.com/profile.php?id=100008532549187" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                        <!----->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="instr_name">
                                    Islam Samy
                                </div>
                                <div class="instr_title">
                                    Teaching Assistant
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!----->

                <div class="col-md-4 col-12">
                    <div class="instr_body">
                        <div class="row no-gutters">
                            <div class="col-md-5">
                                <div class="instr_image">
                                    <img src="{{ asset('images/team/bassem.jpg') }}" alt="team_image">
                                    <div class="overlay_social">
                                        <a href="https://www.facebook.com/beso.khaled.142" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <!----->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="instr_name">
                                    Bassem khaled
                                </div>
                                <div class="instr_title">
                                    Back End
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!----->


                <div class="col-md-4 col-12">
                    <div class="instr_body">
                        <div class="row no-gutters">
                            <div class="col-md-5">
                                <div class="instr_image">
                                    <img src="{{ asset('images/team/user.png') }}" alt="team_image">
                                    <div class="overlay_social">
                                        <a href="https://www.facebook.com/profile.php?id=100009590115940" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <!----->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="instr_name">
                                    Mohsen mostfa
                                </div>
                                <div class="instr_title">
                                    Back End
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!----->
                
                <div class="col-md-4 col-12">
                    <div class="instr_body">
                        <div class="row no-gutters">
                            <div class="col-md-5">
                                <div class="instr_image">
                                    <img src="{{ asset('images/team/fouad.jpg') }}" alt="team_image">
                                    <div class="overlay_social">
                                        <a href="https://www.facebook.com/profile.php?id=100009909966185" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <!----->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="instr_name">
                                    Ahmed fouad
                                </div>
                                <div class="instr_title">
                                    Front End
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!----->

                <div class="col-md-4 col-12">
                    <div class="instr_body">
                        <div class="row no-gutters">
                            <div class="col-md-5">
                                <div class="instr_image">
                                    <img src="{{ asset('images/team/omran.jpg') }}" alt="team_image">
                                    <div class="overlay_social">
                                        <a href="https://www.facebook.com/kareem.omran.315" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <!----->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="instr_name">
                                    Kareem omran
                                </div>
                                <div class="instr_title">
                                    analysis 
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!------->
            </div>
            <!----->
            <div class="row mx-auto justify-content-center">
                <!----->
                <div class="col-md-3 col-12">
                    <div class="instr_body">
                        <div class="instr_image matchHeight">
                            <img src="{{ asset('images/team/attia.jpg') }}" alt="team_image">
                            <div class="overlay_social">
                                <a href="https://www.facebook.com/profile.php?id=100012904602584" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <!----->
                            </div>
                        </div>
                        <div class="instr_name">
                            Mohamed attia
                        </div>
                        <div class="instr_title">
                            Front End
                        </div>
                    </div>
                </div>
                <!----->
            </div>
            <!-- End Owl Carousel container -->
        </div>
        <!-- End Container -->
    </div>
    <!------->
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
    <script type="text/javascript" src="{{ asset('js/pages/about.js') }}"></script>
@endsection


