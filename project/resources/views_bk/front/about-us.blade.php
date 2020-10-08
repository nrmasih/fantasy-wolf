@extends('layouts.front')
@section('content')
 <!-- overlay -->
 <section class="click-overlay"></section>
 <!--  -->
  <div class="main-wrapper">
      <div class="container">
          <div class="row text-center">
              <div class="col-12 pt-5 pb-3">
                 <h1 class="font-weight-bold">{{ strtoupper($b1->title) }}</h1>
                 <hr>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4 col-sm-5 mb-5">
                  <img src="{{asset('assets/images/banners/'.$b1->photo)}}" alt="owner">
              </div>
              <div class="col-md-8 col-sm-7 mb-5">
                 {!! $b1->details !!}
              </div>
              <div class="col-12 text-center">
                  
                  <hr>
              </div>
            
          </div>  
      </div>
 </div>
@endsection