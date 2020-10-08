@extends('layouts.load')

@section('content')
            <div class="content-area">

              <div class="add-product-content">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="product-description">
                      <div class="body-area">
                        @include('includes.admin.form-error') 
                      <form id="geniusformdata" action="{{route('admin-sb-update',$data->id)}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading"> {{'Page Name'}} </h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <select class="input-field" name="page" >
                               <option value="home"> Home  </option>    
                               @php
                               $pages = Helper::pages();
                               @endphp
                               @if($pages) 
                               @foreach($pages as $r)
                               <option @if($data->page==$r->slug) selected @endif value="{{$r->slug}}"> {{$r->title}}  </option>
                               @endforeach
                               @endif
                            </select>                            
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading"> {{'Content Type'}} </h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <select class="input-field" name="type" >
                               <option @if($data->type=='Large') selected @endif value="Large"> Large  </option>
                               <option @if($data->type=='B1') selected @endif value="B1"> Banner -1  </option>
                               <option @if($data->type=='B2') selected @endif value="B2"> Banner -2  </option>
                               <option @if($data->type=='B3') selected @endif value="B3"> Banner -3  </option>
                               
                               <option @if($data->type=='B4') selected @endif value="B4"> Banner -4  </option>
                               <option @if($data->type=='B5') selected @endif value="B5"> Banner -5  </option>
                               <option @if($data->type=='B6') selected @endif value="B6"> Banner -6  </option>
                               <option @if($data->type=='B7') selected @endif value="B7"> Banner -7  </option>
                               
                               <option @if($data->type=='Testi') selected @endif value="Testi"> Testimonial  </option>
                               <option @if($data->type=='Slider') selected @endif value="Slider"> Slider  </option>
                               <option @if($data->type=='Ext') selected @endif value="Ext"> Extra Content  </option>
                            </select>                            
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading"> {{'Section Type'}} </h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <select class="input-field" name="part" >
                               <option @if($data->part=='P1') selected @endif value="P1"> Part -1  </option>
                               <option @if($data->part=='P2') selected @endif value="P2"> Part -2  </option>
                               <option @if($data->part=='P3') selected @endif value="P3"> Part -3  </option>
                               <option @if($data->part=='P4') selected @endif value="P4"> Part -4  </option>
                               <option @if($data->part=='P5') selected @endif value="P5"> Part -5  </option>
                            </select>                            
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Current Featured Image') }} *</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <div class="img-upload full-width-img">
                                <div id="image-preview" class="img-preview" style="background: url({{ $data->photo ? asset('assets/images/banners/'.$data->photo):asset('assets/images/noimage.png') }});">
                                    <label for="image-upload" class="img-label" id="image-label"><i class="icofont-upload-alt"></i>{{ __('Upload Image') }}</label>
                                    <input type="file" name="photo" class="img-upload" id="image-upload">
                                  </div>
                                  <p class="text">{{ __('Prefered Size: (1280x600) or Square Sized Image') }}</p>
                            </div>

                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading"> {{'Title'}} </h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="title" placeholder="Title" value="{{ $data->title }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading"> {{'Description'}} </h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <textarea class="nic-edit-p" name="descp" placeholder="Description"> {{ $data->descp }} </textarea>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading"> {{'Extra Text'}} </h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <textarea class="input-field" name="extraTxt" placeholder="Extra Text"> {{ $data->extraTxt }} </textarea>
                          </div>
                        </div>
                        
                        
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading"> {{'Section 1'}} </h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <textarea class="input-field nic-edit-p" name="section1" placeholder="Section 1"> {{$data->section1}} </textarea>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading"> {{'Section 2'}} </h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <textarea class="input-field nic-edit-p" name="section2" placeholder="Section 2"> {{$data->section2}} </textarea>
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Link') }} *</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="link" placeholder="{{ __('Link') }}" value="{{ $data->link }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Extra Image -1') }} *</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <div class="img-upload">  

                                    <input type="file" name="extimg" class="img-upload" >
                                   
                                    <img src="{{ $data->extimg ? asset('assets/images/banners/'.$data->extimg):asset('assets/images/noimage.png') }}">
                                    
                                    
                                  </div>                                  
                            </div>
                          </div>
                          
                          
                          <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Extra Image -2') }} *</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <div class="img-uploads">  

                                    <input type="file" name="extimg2" class="img-upload" >
                                   
                                    <img src="{{ $data->extimg2 ? asset('assets/images/banners/'.$data->extimg2):asset('assets/images/noimage.png') }}">
                                    
                                    
                                  </div>                                  
                            </div>
                          </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <button class="addProductSubmit-btn" type="submit">{{ __('Save') }}</button>
                          </div>
                        </div>
                      </form>


                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


@endsection