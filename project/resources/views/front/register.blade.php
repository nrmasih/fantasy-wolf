@extends('layouts.front')

@section('content')
	
    <section class="fxt-template-animation auth-section loaded">
         <div class="container-fluid">
            <div class="row justify-content-center">
               <div class="col-xl-6 col-lg-8 col-md-10 col-12 order-md-1 fxt-bg-color">
                  <div class="fxt-content aos-init aos-animate " data-aos="fade-in">
                     <a href="{{url('/')}}" class="fxt-logo">
                     <img src="{{asset('assets/images/'.$gs->logo)}}" alt="Logo" data-aos="zoom-in">
                     </a>
                     <h3 class=" text-center">Welcome to Fantasy Wolf start hunting today</h3>
                     <div class="fxt-form">
                        <h2>Registration</h2>
                        
                        <form data="{{route('front.registerUser')}}" method="POST" id="userRegister">
                           <div class="form-group">  
                              <label for="email" class="input-label">First Name</label>                                            
                              <input type="text" id="fname" class="form-control" name="first_name" placeholder="Enter your first name" required="required">
                           </div>
                           <div class="form-group">  
                              <label for="email" class="input-label">Last Name</label>                                             
                              <input type="text" id="lname" class="form-control" name="last_name" placeholder="Enter your last name" required="required">
                           </div>
                           <div class="form-group">  
                              <label for="email" class="input-label">Email Address</label>                                              
                              <input type="email" id="email" class="form-control" name="email" placeholder="Enter your email id" required="required">
                           </div>
                           <div class="form-group">
                              <label for="password" class="input-label">Password</label>                                               
                              <div class="input-group align-items-center" id="show_hide_password">
                                 <input id="password" type="password" class="form-control" name="password" placeholder="Enter your password" required="required">
                                 <div class="input-group-addon">
                                    <a href=""><i class="fa fa-eye-slash " aria-hidden="true"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="password" class="input-label">Confirm Password</label>                                               
                              <div class="input-group align-items-center" id="show_hide_password2">
                                 <input id="password" type="password" class="form-control" name="cpassword" placeholder="Re-enter your password" required="required">
                                 <div class="input-group-addon">
                                    <a href=""><i class="fa fa-eye-slash " aria-hidden="true"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <button type="submit" class="btn-block btn btn-primary btn-round-xl userRegister"> Sign Up </button> 
                           </div>
                        </form>
                     </div>
                     <div class="fxt-footer">
                        <p class="">Do you have an account?&nbsp;<a href="{{route('front.index')}}" class="switcher-text ">Sign In</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>   

@endsection

@section('scripts')

<script>
    $(window).on('load',function() {

    });
</script>  
  
@endsection