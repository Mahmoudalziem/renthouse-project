@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
    <section class="houses-section">
        <div class="container">
            <div class="row">
                @foreach ($houses as $house)
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="house-body" data-id="{{$house->id}}">
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
                                        {{ $house->title }}
                                        <span class="edit-houses">
                                            <a href="admin/updatehouse/{{ str_replace(' ','_',$house->title)}}">
                                                <span class="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </span>
                                            </a>
                                            <!----->
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#deleteing_row" data-id="{{$house->id}}">
                                                <span class="delete">
                                                    <i class="fa fa-trash"></i>
                                                </span>
                                            </a>
                                            <!----->
                                        </span>
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
                <!------->
            </div>
        </div>
    </section>
    <!------>
    <section class="pagination">
        {{ $houses->links() }}
    </section>
    <!------>
    <div class="modal deleteing_row fade" tabindex="-1" role="dialog" id="deleteing_row"
        aria-labelledby="deleteing_row" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!----->
                <div class="modal-body">
                    <div class="modal_body_content">
                        <span>Do you want To Delete</span>
                        <span>House</span>
                    </div>
                </div>
                <!----->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" type="button" data-id="" data-action="{{ url('admin/deletehouse') }}">Yes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">
@stop

@section('js')
    <script src="{{ asset('js/admin/dashboard.js') }}"></script>
@stop


