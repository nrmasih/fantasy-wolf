@extends('layouts.user')
@section('content')

    <div id="layoutSidenav">
         <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
               <div class="searcBar">
                  <div class="d-flex">
                     <div class="input-group theme-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon1"><i class="bx bx-search"></i></span>
                        </div>
                        <input type="text" class="form-control border-0" placeholder="Search Message..." aria-label="Username" aria-describedby="basic-addon1">
                     </div>
                     <!--button class="ml-2 btn btn-primary btn-circle"><i class="bx bx-plus"></i></button-->
                  </div>
               </div>
               <div class="inbox_chat">
                  <div class="chat_list active_chat">
                     <img class="ImgCenter" src="{{url('assets/images/1600855433ajax-loader.gif')}}">
                      <span id="loadChat"></span>
                  </div>
               </div>
            </nav>
         </div>
         <div id="layoutSidenav_content">
            <main>
               <div class="container-fluid px-0">
                  <ul class="theme-pills nav nav-pills" id="pills-tab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" id="pills-feed-tab" data-toggle="pill" href="#pills-feed" role="tab" aria-controls="pills-feed" aria-selected="true">Edit Profile</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Setting</a>
                     </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                     <div class="tab-pane fade show active" id="pills-feed" role="tabpanel" aria-labelledby="pills-feed-tab">
                        <div class="container-fluid e-changePassword mt-4">
                           <div class="row mx-0 mt-4">
                              <div class="col-md-12 px-3">
                                 <div class="bg-img-none col teamCSextion d-flex flex-wrap mb-4">
                                    <div class="col teamList mx-w-none d-flex flex-wrap align-items-center px-0">
                                       <div class="picx">
                                           <img id="UserProfilePic" src="{{url('public/uploads/users/thumbnail/'.Auth::user()->photo)}}" width="86">
                                       </div>
                                       <div class="ml-4 listName">
                                          <h5 class="mb-0"> {{Auth::user()->name}} </h5>
                                          <div class="des">
                                             <p><i class="bx bx-mail-send mr-1 h6 mb-0"></i> {{Auth::user()->email}} </p>
                                             <p><i class="h6 mb-0 mr-1">@</i> {{str_slug(Auth::user()->name)}} </p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col  px-0 d-flex flex-wrap align-items-center ml-lg-4  btn-theme-group justify-content-end">
                                       <div class="mt-3 mt-lg-0 ml-lg-3 d-flex flex-wrap">
                                          <a data-toggle="modal" class="btn btn-sm btn-primary btn-round d-flex flex-wrap mx-1" href="#profileChanges"><i class="bx bx-camera mr-1"></i>Edit Picture</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 px-3">
                                 <div class="bg-img-none col teamCSextion d-flex flex-wrap mb-4 py-4">
                                    <form class="form w-100" novalidate="" method="POST" data="{{route('user.updateProfile')}}" enctype="multipart/form-data">
                                       {{ csrf_field() }} 
                                       <div class="row">
                                          <div class="col">
                                             <div class="row">
                                                <div class="col-md-6 col-lg-6">
                                                   <div class="form-group">
                                                      <label>First Name</label>
                                                      <input name="first_name" value="{{Auth::user()->first_name}}" class="form-control" type="text" name="fNAme" placeholder="Enter your first name"/>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                   <div class="form-group">
                                                      <label>Last Name</label>
                                                      <input name="last_name" value="{{Auth::user()->last_name}}" class="form-control" type="text" name="lNAme" placeholder="Enter your last name"/>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                   <div class="form-group">
                                                      <label>Username</label>
                                                      <input name="name" value="{{Auth::user()->name}}" class="form-control" type="text" name="username" placeholder="Enter your username"/>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                   <div class="form-group">
                                                      <label>Email</label>
                                                      <input  value="{{Auth::user()->email}}" class="form-control" type="email" placeholder="Enter your email id">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-6 col-lg-6">
                                                   <div class="form-group">
                                                      <label>Phone No.</label>
                                                      <input name="phone" value="{{Auth::user()->phone}}" class="form-control" type="text" placeholder="Enter your phone no." required="required">
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                   <div class="form-group">
                                                      <label>Age</label>
                                                      <input name="age" value="{{Auth::user()->age}}" class="form-control" type="date" placeholder="Enter your age">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-6 col-lg-4">
                                                   <div class="form-group">
                                                      <label>Country</label>
                                                      <select id="country_id"  name="country_id" class="form-control" onchange="getstatebyid(this.value,'{{route('ajaxState')}}')">
                                                         <option>Select your country</option>
                                                                @if(!empty($country))
                                                                @foreach($country as $r)
                                                                <option @if(Auth::user()->country_id==$r->country_id) selected @endif   value="{{$r->country_id}}"> {{$r->name}} </option>
                                                                @endforeach                                    
                                                                @endif
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                   <div class="form-group">
                                                      <label>State</label>
                                                      <select id="state_id" name="state_id" onchange="getcitybyid(this.value,'{{route('ajaxCity')}}')" class="form-control">
                                                         <option>Select your state</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                   <div class="form-group">
                                                      <label>City</label>
                                                      <select id="city_id" name="city_id" class="form-control">
                                                         <option>Select your city</option>
                                                      </select>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col col-md-12 mb-3">
                                                   <div class="form-group">
                                                      <label>About</label>
                                                      <textarea name="bio" class="form-control" rows="5" placeholder="Enter your bio">{{Auth::user()->bio}}</textarea>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row justify-content-center">
                                          <div class="col-md-6 col-lg-4">
                                             <button class="btn btn-block btn-primary btn-round-xl submitForm" type="submit">Save Changes</button>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="container-fluid e-changePassword mt-4">
                           <div class="row mx-0 mt-4 justify-content-center">
                              <div class="col-md-6 px-3">
                                 <div class="bg-img-none col teamCSextion d-flex flex-wrap mb-4 py-4 justify-content-center">
                                    <ul class="list-group w-100">
                                       <li for="exampleCheck1" class="switch list-group-item ">
                                          <label class="d-flex flex-wrap justify-content-between align-items-center">Email Notification
                                              <input data="{{route('emailNotification')}}" name="emailNotification" type="checkbox" id="emailNotification" >
                                          <span class="slider"></span>
                                          </label>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="row mx-0 mt-4">
                              <div class="col-md-12 px-3">
                                 <div class="bg-img-none col teamCSextion d-flex flex-wrap mb-4 py-4">
                                     <form class="form w-100" id="ChangePassword" novalidate="" method="POST" data="{{route('user.changePassword')}}" enctype="multipart/form-data">
                                       {{ csrf_field() }} 
                                       <div class="row">
                                          <div class="col">
                                             <div class="row">
                                                <div class="col-md-6 col-lg-4">
                                                   <div class="form-group">
                                                      <label>Current Password</label>
                                                      <input class="form-control" type="password" name="oldpassword" id="oldpassword" placeholder="Enter your current password" value="" required="required">
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                   <div class="form-group">
                                                      <label>New Password</label>
                                                      <input class="form-control" type="password" name="password" id="newpassword" placeholder="Enter your new password" value="" required="required">
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                   <div class="form-group">
                                                      <label>confirm password</label>
                                                      <input class="form-control" type="password" name="cpassword" id="cpassword" placeholder="Confirm your new password" value="" required="required">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row justify-content-center mt-3">
                                          <div class="col-md-6 col-lg-4">
                                             <button class="btn btn-block btn-primary btn-round-xl ChangePassword" type="submit">Save Changes</button>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </main>
         </div>
      </div>

        <!-- Profile Image Changes -->
        <div id="profileChanges" class="modal fade"> 
            <div class="modal-dialog"> 
                <div class="modal-content"> 						
                    <div class="modal-body"> 
                        <button type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-hidden="true">×</button>
                              
                            <div class="container">
                                <h4> Change Profile </h4>
                                <form id="userProfilePicture" method="POST" data="{{route('user.UpdatePhoto')}}" enctype="multipart/form-data">
                                    <div class="form-group">
                                        {{ csrf_field() }}
                                        <label for="email">Choose image:</label>
                                        <input  class="form-control" type="file" id="photo" name="photo" accept="image/x-png,image/gif,image/jpeg" required="">
                                    </div> 
                                    <button type="submit" class="btn btn-primary userProfilePicture">Submit</button>
                                </form>
                            </div>
                    </div> 
                </div> 
            </div> 
        </div> 
        <!-- End Profile Image Changes -->
@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css">
<script type="text/javascript">
    $(function() {
        $("select").chosen();
    });
    setTimeout(function () {
    getstatebyid('{{Auth::user()->country_id}}','{{route('ajaxState')}}');
    getcitybyid('{{Auth::user()->state_id}}','{{route('ajaxCity')}}');

        setTimeout(function () {
            @if(!empty(Auth::user()->state_id))
            jQuery("#state_id").val({{Auth::user()->state_id}}).trigger("chosen:updated");
            @endif
            
            @if(!empty(Auth::user()->city_id))
            jQuery("#city_id").val({{Auth::user()->city_id}}).trigger("chosen:updated");
            @endif
            
          },1000);
       },2000);
</script>
<script src="{{asset('public/assets/js/UserFuncton.js?v='.rand())}}"></script>
@endsection
@endsection

