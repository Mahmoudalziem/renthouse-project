@extends('layouts.default')

@section('title')
    Houses
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/pages/services.css') }}" />
@endsection

@section('content')
    @include('layouts.header')
    <section class="page_banner">
            <img src="{{ asset('images/slider/slider3.jpg') }}" alt=""/>
                <div class="container">
                    <div class="page-content">
                        <h3>
                        Houses
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
                                <i class="fa fa-long-arrow-right"></i> Houses
                            </div>
                        </li>
                    </ul>
                    <div class="clear-both"></div>
                    </div>
                </div>
    </section>
    <!------>
    <div  class="houses-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="houses-container-filter">
                        <!------>
                        <div class="filter-body">
                            {!! Form::open(['method' => 'POST','action' => 'pagesController@filter','class' => 'filter','name' => 'filter']) !!}
                                {!! Form::hidden('_method','post',['class' => 'method']) !!}
                                <label data-target="#property" data-toggle="collapse" aria-expanded="false" aria-controls="property">
                                    <span>houses type</span>
                                    <span><i class="fa fa-arrow-down"></i></span>
                                </label>
                                <div id="property" class="collapse show">
                                    <select name="property" required>
                                        <option>All Show</option>
                                        <option value="villa">Apartment</option>
                                        <option selected value="villa">Villa</option>
                                        <option value="villa">House</option>
                                        <option value="villa">studio</option>
                                        <option value="villa">flat</option>
                                    </select>
                                </div>
                                <!------>
                                <label data-target="#bedroom" data-toggle="collapse" aria-expanded="true" aria-controls="bedroom">
                                    <span>bedroom</span>
                                    <span><i class="fa fa-arrow-down"></i></span>
                                </label>
                                <div id="bedroom" class="collapse">
                                    <select name="bed" required>
                                        <option  value="1">1</option>
                                        <option selected value="2">2</option>
                                        <option  value="3">3</option>
                                        <option  value="4">4</option>
                                        <option  value="5">5</option>
                                        <option  value="6">6</option>
                                    </select>
                                </div>
                                <!------>
                                <label data-target="#bath" data-toggle="collapse" aria-expanded="true" aria-controls="bath">
                                    <span>bathroom</span>
                                    <span><i class="fa fa-arrow-down"></i></span>
                                </label>
                                <div id="bath" class="collapse">
                                    <select name="bath" required>
                                        <option  value="1">1</option>
                                        <option selected value="2">2</option>
                                        <option  value="3">3</option>
                                        <option  value="4">4</option>
                                    </select>
                                </div>
                                <!------>
                                <label data-target="#price" data-toggle="collapse" aria-expanded="true" aria-controls="price">
                                    <span>Price</span>
                                    <span><i class="fa fa-arrow-down"></i></span>
                                </label>
                                <div id="price" class="collapse">
                                    <div class="body-start">
                                        <div class="start">
                                            <span class="curr">EGP</span>
                                            <input aria-label="Minimum price" min="0" maxlength="5" type="text" name="min_price"  placeholder="3" value="{{ old('min_price') }}" onkeypress="return isNumberKey(event)" required>
                                        </div>
                                        <span class="space">-</span>
                                        <div class="end">
                                            <span class="curr">EGP</span>
                                            <input aria-label="Maximum price" min="0" maxlength="6" type="text" name="max_price" placeholder="954" value="{{ old('max_price') }}" onkeypress="return isNumberKey(event)" required>
                                        </div>
                                    </div>
                                </div>
                                <!------->
                                <label data-target="#sqft" data-toggle="collapse" aria-expanded="true" aria-controls="sqft">
                                    <span>SQFT</span>
                                    <span><i class="fa fa-arrow-down"></i></span>
                                </label>
                                <div id="sqft" class="collapse">
                                    <div class="body-start">
                                        <div class="start">
                                            <span class="sqft">SQFT</span>
                                            <input aria-label="Minimum sqft" min="0" maxlength="2" type="text" name="min_sqft" class="sqft" placeholder="20" value="{{ old('min_sqft') }}" onkeypress="return isNumberKey(event)" required>
                                        </div>
                                        <span class="space">-</span>
                                        <div class="end">
                                            <span class="sqft">SQFT</span>
                                            <input aria-label="Maximum sqft" min="0" maxlength="3" type="text" name="max_sqft" class="sqft" placeholder="800" value="{{ old('max_sqft') }}" onkeypress="return isNumberKey(event)" required>
                                        </div>
                                    </div>
                                </div>
                                <!------->
                                <input type="submit" class="btn" value="FILTER" />
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="houses-container-content">
                        <div class="search_house clear-both">
                            <input type="search" placeholder="Search for your house">
                            <i class="fa fa-search"></i>
                        </div>
                        <!------>
                        @Auth
                        <div class="access-location float-right btn" style="border:1px solid limegreen;margin-top:-50px" data-action="{{ url('services/access') }}">
                            Access Location
                        </div>
                        @endauth
                        <div class="clearfix"></div>
                        <!------>
                        <div class="row">
                            <!----->
                            @if(session()->has('houses'))
                                @foreach(session('houses') as $house)
                                    <div class="col-lg-4 col-md-6 col-12">
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
                                                    <!------>
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
                            @else
                                @foreach ($houses as $house)
                                    <div class="col-lg-4 col-md-6 col-12">
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
                                                    <!------>
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
                            @endif
                            <!----->
                        </div>
                        <section class="pagination">
                            {{ $houses->links() }}
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------->
    @include('layouts.footer')
@endsection

@section('scripts')
    {{ Html::script(asset('js/pages/services.js')) }}
    <script>

        function isNumberKey(evt) {

            var charCode = (evt.which) ? evt.which : evt.keyCode

            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>
@endsection

