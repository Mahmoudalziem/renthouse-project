"use strict";$(document).ready(function(){$(".body-image").each(function(){$(this).owlCarousel({loop:!0,autoplay:!1,autoplayTimeout:4e3,margin:0,lazyLoad:!0,nav:!0,dots:!1,slideSpeed:800,smartSpeed:500,autoHeight:!0,mouseDrag:!0,touchDrag:!0,responsiveClass:!0,items:1,responsive:{0:{items:1,autoHeight:!0,mouseDrag:!1,touchDrag:!0},576:{items:1}}})});var a=$("#image_crop_avater").croppie({enableExif:!0,viewport:{width:200,height:200,type:"circle"},boundary:{height:300}});$(document).on("click","span.user_image_upload",function(){$('input[name="image_user_content"]').trigger("click")}),$("button.crop_user_image").on("click",function(){var t=$(this);a.croppie("result",{type:"canvas",size:"viewport"}).then(function(e){$.ajax({url:$(t).attr("data-action"),method:"POST",data:{image:e},beforeSend:function(){$(t).text("Waiting")},success:function(){$("img.user_image_avater").attr("src",e),$(t).text("Import Image"),$("#user_image").modal("hide")}})})}),$('input[name="image_user_content"]').change(function(){var e=new FileReader;e.onload=function(e){a.croppie("bind",{url:e.target.result})},e.readAsDataURL(this.files[0]),$("#user_image").modal("show")}),$(document).on("keyup",'input[type="search"]',function(e){for(var t=$(this).val().toLowerCase(),a=0,o=$("div.body-content-title a");a<o.length;a++)$(o[a]).html().toLowerCase().includes(t)?$(o[a]).parents(".house-body").parent().css("display","block"):$(o[a]).parents(".house-body").parent().css("display","none")}),$('form[name="formUpdate"]').on("submit",function(){var e=$('input[name="name"]').val(),t=$('input[name="password"]').val(),a=$('input[name="confirm_password"]').val();if(""==e)return $("div.validate_error").text("Name Required").removeClass("d-none"),!1;if(t!=a)return $("div.validate_error").text("Password Not Matched").removeClass("d-none"),!1;var o=new FormData(this);return $.ajax({url:$(this).attr("action"),data:o,method:"post",processData:!1,dataType:!1,contentType:!1,beforeSend:function(){$("button.submit_form").text("Waiting")},success:function(e){$("button.submit_form").html('update Info <i class="fa fa-long-arrow-right"></i>'),$("div.validate_error").text("Info Update Success").removeClass("d-none"),$('input[name="password"]').val(""),$('input[name="confirm_password"]').val(""),$("div.user_name").text(e),setTimeout(function(){$("div.validate_error").text("").addClass("d-none")},1e3)}}),!1})});