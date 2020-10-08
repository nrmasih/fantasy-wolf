@extends('layouts.front')

@section('content')
	
     <section class="fxt-template-animation auth-section loaded">
         <div class="container-fluid">
            <div class="row justify-content-center">
               <div class="col-md-6 col-12 order-md-1 fxt-bg-color">
                  <div class="fxt-content aos-init aos-animate " data-aos="fade-in">
                     <a href="{{url('/')}}" class="fxt-logo">
                     <img src="{{asset('assets/images/'.$gs->logo)}}" alt="Logo" data-aos="zoom-in">
                     </a>
                     <h3 class=" text-center">Enjoy the Hunt</h3>
                     <div class="fxt-form">
                        <h2>Login</h2>

                        <form data="{{route('user.login.submit')}}" method="POST" id="userLogin" >
                           {{ csrf_field() }}
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
                              <div class="fxt-checkbox-area">
                                 <div class="checkbox">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">Keep me logged in</label>
                                 </div>
                                 <a href="{{route('front.forgotPassword')}}" class="switcher-text ">Forgot Password</a>
                              </div>
                           </div>
                           <div class="form-group">
                              <input type="hidden" name="action" value="{{route('user-dashboard')}}">
                              <button type="submit" class="btn-block btn btn-primary btn-round-xl userLogin">Log in</button>
                           </div>
                        </form>
                     </div>
                     <div class="fxt-footer">
                        <p class=" ">Don't have an account?&nbsp;<a href="{{route('front.register')}}" class="switcher-text ">Register</a></p>
                        <ul class="fxt-socials">
                           <li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-4"><a href="#" title="Facebook"><i class="bx bxl-facebook"></i></a></li>
                           <li class="fxt-google fxt-transformY-50 fxt-transition-delay-6"><a href="#" title="google"><i class="bx bxl-google-plus"></i></a></li>
                           <li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-7"><a href="register.html" title="linkedin"><i class="bx bx-envelope"></i></a></li>
                        </ul>
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