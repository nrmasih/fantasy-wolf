@extends('layouts.front')

@section('content')
	
    <section class="fxt-template-animation auth-section loaded">
         <div class="container-fluid">
            <div class="row justify-content-center">
               <div class="col-xl-6 col-lg-8 col-md-10 col-12 order-md-1 fxt-bg-color">
                  <div class="fxt-content aos-init aos-animate " data-aos="fade-in">
                     <a href="{{url('/')}}" class="fxt-logo">
                     <img src="{{asset('assets/images/'.$gs->logo)}}" alt="Logo" data-aos="zoom-in" class="no-border">
                     </a>
                     <div class="fxt-form">
                        <h2>Forgot Password</h2>
                  <form method="POST" data="{{route('front.forgotPasswordForm')}}"  id="forgotPassword">
                           <div class="form-group">  
                              <label for="email" class="input-label">Email Address</label>                                              
                              <input type="email" id="email" class="form-control" name="email" placeholder="Enter your email id" required="required">
                           </div>
                           <div class="form-group">
                              <button class="btn-block btn btn-primary btn-round-xl forgotPassword"> Reset Password </button> 
                           </div>
                  </form>
                     </div>

                     <div class="col-md-6 col-12 order-md-1" id="ResetLink">

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