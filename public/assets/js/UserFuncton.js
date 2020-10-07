// JavaScript Document

$(document).ready(function () {
    
    var path = document.getElementById("base_url").value;
    $('.btn-default').click(function () {
        parent.history.back();
        return false;
    });


    $('#emailNotification').click(function(){
            if($(this).is(":checked")){
                $("#result").html("Checkbox is checked.");
            }
            else if($(this).is(":not(:checked)")){
                $("#result").html("Checkbox is unchecked.");
            }
     });


    /** Common Function **/


   $('.submitForm').click(function () {
        var form = $(this).parents('form:first');
        $(form).validate({            
            submitHandler: function (form) {
                var path = document.getElementById("base_url").value;
                var action=$(form).attr('data');  
                $.ajax({
                    type: "POST",
                    url: action,
                    cache: false,
                    data: new FormData(form),
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $("#ajaxloader, #ajaxcover").show();                        
                    },
                    complete: function () {
                        $("#ajaxloader, #ajaxcover").hide(); 
                    },
                    success: function (data) {
                        if (data.status == 1) { 
                            $('.msgdiv').show(); 
                            var errhtml = data.message;
                            toast(errhtml);
                            $(".response_msg").removeClass("alert-danger");
                            $(".response_msg").addClass("alert-success");
                            $('.response_msg').html(errhtml);
                            setTimeout(function () {
                               //location.reload();
                               $("#UserProfilePic").attr("src",data.response.url);
                            },2000);
                        }  else {
                            $('.msgdiv').show();
                            var errhtml = data.message;
                            toast(errhtml);
                            $(".response_msg").removeClass("alert-success");
                            $(".response_msg").addClass("alert-danger");
                            $('.response_msg').html(errhtml);
                            setTimeout(function () {
                               $('.msgdiv').show();
                            },3000);
                        }
                    }
                });
                return false;
            }

        });
    }); 



    /****/
    $('.userProfilePicture').click(function () {
        $("#userProfilePicture").validate({            
            submitHandler: function (form) {
                var path = document.getElementById("base_url").value;
                var action=$("#userProfilePicture").attr('data');  
                $.ajax({
                    type: "POST",
                    url: action,
                    cache: false,
                    data: new FormData(form),
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $("#ajaxloader, #ajaxcover").show();                        
                    },
                    complete: function () {
                        $("#ajaxloader, #ajaxcover").hide(); 
                    },
                    success: function (data) {
                        if (data.status == 1) { 
                            $('.msgdiv').show(); 
                            var errhtml = data.message;
                            toast(errhtml);
                            $(".response_msg").removeClass("alert-danger");
                            $(".response_msg").addClass("alert-success");
                            $('.response_msg').html(errhtml);
                            setTimeout(function () {
                               //location.reload();
                               $("#UserProfilePic").attr("src",data.response.url);
                            },2000);
                        }  else {
                            $('.msgdiv').show();
                            var errhtml = data.message;
                            toast(errhtml);
                            $(".response_msg").removeClass("alert-success");
                            $(".response_msg").addClass("alert-danger");
                            $('.response_msg').html(errhtml);
                            setTimeout(function () {
                               $('.msgdiv').show();
                            },3000);
                        }
                    }
                });
                return false;
            }

        });
    });     

});

function getstatebyid(id,url) {
        var token = $('meta[name="csrf-token"]').attr('content');
        var data = "id="+id+ '&_token=' + token;
        jQuery.ajax({
            type: "GET",
            url: url,
            data: data,
            success: function (data) {
                jQuery('select').chosen();
                jQuery("#state_id").html(data);
                jQuery("#state_id").trigger("chosen:updated");
            }
        });
}
function getcitybyid(id,url) {
        var token = $('meta[name="csrf-token"]').attr('content');
        var data = "id="+id+ '&_token=' + token;
        jQuery.ajax({
            type: "GET",
            url: url,
            data: data,
            success: function (data) {
                jQuery('select').chosen();
                jQuery("#city_id").html(data);
                jQuery("#city_id").trigger("chosen:updated");
            }
        });
}



