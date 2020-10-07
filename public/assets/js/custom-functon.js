// JavaScript Document

$(document).ready(function () {
    loadChat();
    var path = document.getElementById("base_url").value;
    $('.btn-default').click(function () {
        parent.history.back();
        return false;
    });


    /****/
    $('.resetPassword').click(function () {
        $("#resetPassword").validate({            
            submitHandler: function (form) {
                var path = document.getElementById("base_url").value;
                var action=$("#resetPassword").attr('data');  
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
                               window.location.href= data.response.url;
                            },3000);
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
    $('.forgotPassword').click(function () {
        $("#forgotPassword").validate({            
            submitHandler: function (form) {
                var path = document.getElementById("base_url").value;
                var action=$("#forgotPassword").attr('data');  
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
                               window.location.href= data.response.url;
                            },3000);
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
    $('.userLogin').click(function () {
        $("#userLogin").validate({            
            submitHandler: function (form) {
                var path = document.getElementById("base_url").value;
                var action=$("#userLogin").attr('data');  
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
                            //alert(data.response.url);
                            $(".response_msg").removeClass("alert-danger");
                            $(".response_msg").addClass("alert-success");
                            $('.response_msg').html(errhtml);
                            setTimeout(function () {
                                 window.location.href= data.response.url;
                                 window.reload();
                            },1200);
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
    
    $('.userRegister').click(function () {
        $("#userRegister").validate({
            rules : {
                password : {
                    minlength : 3
                },
                password_confirm : {
                    minlength : 3,
                    equalTo : "#password"
                }
            },
            submitHandler: function (form) {
                var path = document.getElementById("base_url").value;
                var action=$("#userRegister").attr('data');  
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
                            //alert(errhtml);
                            $(".response_msg").removeClass("alert-danger");
                            $(".response_msg").addClass("alert-success");
                            $('.response_msg').html(errhtml);
                            setTimeout(function () {
                                 window.location.href= data.response.url;
                            },3000);
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

function loadChat(){
    var path = document.getElementById("base_url").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {       
        //setTimeout(function(){ 
           $(".ImgCenter").hide(); 
           document.getElementById("loadChat").innerHTML = this.responseText;
        //},400);
    }
    };
    xhttp.open("GET",path+"/user/load-chat", true);
    xhttp.send();                
    return false;
}

function toast(msg){
    $().toasty({
    message: msg,
    autoHide: 3000,
    position: "tr"
    });     
}

function activityTrack(page,section,str){
    var path = document.getElementById("base_url").value;
    var data = "page="+page+"&section="+section+"&str="+str;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {       
    }
    };
    xhttp.open("POST",path+"activity-track", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(data);                
    return false;
}
function ajaxPost(step,str){
    var path = document.getElementById("base_url").value;
    var data = "step="+step+"&str="+str;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {       
    }
    };
    xhttp.open("POST",path+"chatbot", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(data);                
    return false;
}

function delete_attached(rid, tbl, tid) {
    var siteurl = document.getElementById("base_url").value;
    var token = $('meta[name="csrf-token"]').attr('content');
    var info = 'rid=' + rid + '&tbl=' + tbl + '&tid=' + tid + '&_token=' + token;
    if (confirm("Are you sure you want to delete?")) {
        $.ajax({
            type: "POST",
            url: siteurl + '/deleteReords',
            data: info,
            async: false,
            success: function () {
                window.location.reload();
            }
        });
    }
}
function validateFileExtension(f) {
        var fi = f;
        var filePath = fi.value;
        if(filePath!=''){
        var allowedExtensions = /(\.pdf|\.png|\.csv|\.xls|\.xlsx|\.docx|\.doc|\.jpg|\.jpeg)$/i;
        if (!allowedExtensions.exec(filePath)) {
            alert('Please upload file having extensions .pdf/.png/.xls/.xlsx/.docx/.doc/.jpg/.jpeg only.');
            //fi.value = '';
            f.form.reset()
            return false;
        }else{
           FileDetails();
        }
        }
}



