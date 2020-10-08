@extends('layouts.front')

@section('content')
	
    <section class="fxt-template-animation auth-section loaded">
         <div class="container-fluid">
            <div class="row justify-content-center">
               <div class="col-md-6 col-12 order-md-1 fxt-bg-color">
                  <div class="fxt-content aos-init aos-animate " data-aos="fade-in">
                     <a href="{{url('/')}}" class="fxt-logo">
                     <img src="{{asset('assets/images/'.$gs->logo)}}" alt="Logo" data-aos="zoom-in" class="no-border">
                     </a>
                     <div class="fxt-form">
                        <h2> Reset Password </h2>
                            <form method="POST" data="{{route('front.resetPasswordForm')}}"  id="resetPassword">
                                     <div class="form-group">  
                                        <label for="email" class="input-label"> New password </label>                                              
                                        <input id="password" type="password" class="form-control" name="password" placeholder="Enter your password" required="required">
                                     </div>
                                     <div class="form-group">  
                                        <label for="email" class="input-label"> Retype password </label>                                              
                                        <input id="cpassword" type="password" class="form-control" name="cpassword" placeholder="Retype password" required="required">
                                     </div>
                                     <div class="form-group">
                                         <input type="hidden" value="{{$email}}" name="email">
                                        <button class="btn-block btn btn-primary btn-round-xl resetPassword"> Reset Password </button> 
                                     </div>
                            </form>
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