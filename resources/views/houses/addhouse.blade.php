@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
    <div class="add-houses">
        <div class="container">
            <!------>
            <div class="form_add_house">
                {!! Form::open(['action' => 'housesController@store','method' => 'POST','name' => 'form_house', 'class' => 'form_information_house' ,'enctype'=>"multipart/form-data"]) !!}
                    {!! Form::hidden('_method','POST',['class' => 'form_method']) !!}
                    <div class="validate_error d-none"></div>
                    <div class="house_information_details">
                        <div class="row">
                            <!----->
                            <div class="col-12">
                                <div class="house_information_right">
                                    <div class="course_handling d-none"></div>
                                    <!----->
                                    <div class="form_course_title">
                                        <label>House Title</label>
                                        <input type="text" name="title" placeholder="e.g. 'Charming  penthouse for rent in zamalek'" required />
                                    </div>
                                    <!---->
                                    <div class="form_course_subtitle">
                                        <label>House Location</label>
                                        <input type="text" name="location" placeholder="e.g. 'El Gezirah St., Zamalek, Cairo'" required />
                                    </div>
                                    <!---->
                                    <div class="row">
                                        <div class="col-md-3 col-12">
                                            <div class="form_course_hours">
                                                <label>House Price</label>
                                                <input type="text" onkeypress="return isNumberKey(event)" name="price" placeholder="House Price" maxlength="7" required>
                                            </div>
                                        </div>
                                        <!------->
                                        <div class="col-md-3 col-12">
                                            <div class="form_course_hours">
                                                <label>House Latitude</label>
                                                <input type="text"  name="lat" onkeypress="return isNumberKey(event)" placeholder="House Latitude" required />
                                            </div>
                                        </div>
                                        <!------>
                                        <div class="col-md-3 col-12">
                                            <div class="form_course_hours">
                                                <label>House Longitude</label>
                                                <input type="text"  name="log" onkeypress="return isNumberKey(event)" placeholder="House Longitude" required />
                                            </div>
                                        </div>
                                        <!------>
                                        <div class="col-md-3 col-12">
                                            <div class="form_course_hours">
                                                <label>House SQFT</label>
                                                <input type="text" onkeypress="return isNumberKey(event)" maxlength="4" name="sqft" placeholder="House SQFT" required />
                                            </div>
                                        </div>
                                    </div>
                                    <!----->
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form_seller">
                                                <label>Seller</label>
                                                <!---->
                                                <select  name="seller" required>
                                                        @foreach($sellers as $seller)
                                                            <option value="{{ $seller->id }}">{{ $seller->name }}</option>
                                                        @endforeach
                                                </select>
                                                <!----->
                                            </div>
                                        </div>
                                        <!------>
                                        <div class="col-md-6 col-12">
                                            <div class="property">
                                                <label>Property Type</label>
                                                <!---->
                                                <select name="property" required>
                                                    <option value="aprtment">Apartment</option>
                                                    <option selected value="villa">Villa</option>
                                                    <option value="house">House</option>
                                                    <option value="studio">Studio</option>
                                                    <option value="flat">Flat</option>
                                                </select>
                                                <!----->
                                            </div>
                                        </div>
                                    </div>
                                    <!------>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="bedroom">
                                                <label>Bedroom</label>
                                                <!---->
                                                <select name="bedroom" required>
                                                    <option value="1">1</option>
                                                    <option value="2" selected>2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                                <!----->
                                            </div>
                                        </div>
                                        <!------>
                                        <div class="col-md-6 col-12">
                                            <div class="bathroom">
                                                <label>Bathroom</label>
                                                <!---->
                                                <select name="bathroom" required>
                                                    <option value="1">1</option>
                                                    <option value="2" selected>2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                                <!----->
                                            </div>
                                        </div>
                                    </div>
                                    <!----->
                                    <div class="form_course_descri_content">
                                        <!---->
                                        <div class="form_course_descri_content_head">
                                            <span>House Description</span>
                                            <span>
                                                <i class="fa fa-angle-down icon-arrow-down"></i>
                                            </span>
                                        </div>
                                        <!---->
                                        <div class="form_course_descri">
                                            <div class="container_content">
                                                <textarea id="form_course_descri" rows="10"
                                                    cols="80"
                                                    placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <!----->
                                    </div>
                                    <!----->
                                </div>
                                <!----->
                            </div>
                            <!----->
                        </div>
                        <!----->
                    </div>
                    <!------>
                    <div class="house_information_branding border-bottom-0">
                        <div class="row">
                            <!---->
                            <div class="col-12">
                                <div class="house_information_branding_right">
                                    <!---->
                                    <div class="information_branding_right_image">
                                        <div class="box_uploads" id="holder">
                                            <h1>Drag Images here</h1>
                                            <p>- or -</p>
                                            <input type="file" class="import_images d-none" data-type="image" name="images[]" id="import_csv_file" accept=".jpg,.jpeg,.png" multiple>
                                            <button class="btn btn--primary import_images_button" type="button" for="import_csv_file">Choose Images</button>
                                        </div>
                                        <!------>
                                        <div class="box_upload_content">
                                        </div>
                                    </div>
                                    <!----->
                                    <div class="information_branding_right_video">
                                        <div class="row">
                                            <div class="col-md-8 col-lg-9">
                                                <div class="branding_video_container">
                                                    <a href="#" title="course_prom" target="_self" class="video">
                                                        <i class="fa fa-play"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!------>
                                            <div class="col-md-4 col-lg-3">
                                                <div class="branding_video_details">
                                                    <div class="branding_video_details_upload" data-toggle="modal" data-target="#video_modaling">
                                                        <span class="button_update_video">upload Video</span>
                                                    </div>
                                                    <!---->
                                                    <div class="half_opaque">
                                                        <span>
                                                            Recommended format
                                                        </span>
                                                        <!------>
                                                        <ul>
                                                            <li>MP4, M4V, AVI</li>
                                                            <li>640-1280px wide</li>
                                                            <li>Compress as much as possible
                                                            </li>
                                                        </ul>
                                                        <!------>
                                                    </div>
                                                    <!------>
                                                </div>
                                                <!------>
                                            </div>
                                        </div>
                                    </div>
                                    <!------>
                                </div>
                            </div>
                            <!---->
                        </div>
                    </div>
                    <!---->
                    <div class="course_push_button text-center border-0">
                        <button class="btn" type="submit">
                            <span class="d-none">
                                <i class="fa fa-spinner"></i>
                            </span>
                            <!----->
                            <span>
                                Add House
                            </span>
                        </button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <!---- Modaling ---->
    <div class="modal video_modaling fade" tabindex="-1" role="dialog" id="video_modaling" aria-labelledby="video_modaling" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Adding Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body mt-0">
                        <div class="container">
                            <!----->
                            <div class="video_url_content">
                                <div class="group_input" data-validate="Video Url Required">
                                    <input type="text" class="input_100" name="video"
                                        placeholder="https://www.youtube.com">
                                </div>
                            </div>
                            <!----->
                        </div>
                    </div>
                    <!---->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add Video</button>
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Close</button>
                    </div>
                    <!----->
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/houses/addhouse.css') }}">
@stop

@section('js')
    <script src="{{asset('js/houses/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/houses/addhouse.js') }}" async></script>
    <script>

        function isNumberKey(evt) {

            var charCode = (evt.which) ? evt.which : evt.keyCode

            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>
@stop
