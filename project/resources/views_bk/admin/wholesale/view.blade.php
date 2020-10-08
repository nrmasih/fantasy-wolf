@extends('layouts.admin')

@section('content')

            <div class="content-area">
              <div class="mr-breadcrumb">
              <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading">{{ __("Wholesale") }}</h4>
                    <ul class="links">
                      <li>
                        <a href="{{ route('admin.dashboard') }}">{{ __("Dashboard") }} </a>
                      </li>
                      <li>
                        <a href="{{ route('admin-subscription-index') }}">{{ __("Wholesale") }}</a>
                      </li>
                      <li>
                        <a href="{{ route('admin-subscription-index') }}">{{ __("View") }}</a>
                      </li>
                    </ul>
                </div>
              </div>
            </div>
              <div class="add-product-content">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="product-description">
                      <div class="body-area">
                        @include('includes.admin.form-error')  
                        
                        @if($ps->ftype=='retailer')
                        <div class="row">
                          <div class="col-12 text-center">
                                <h3> <b> Retailer </b> </h3>
                            </div>        
                          <form id="frmRetailer" data="{{route('front.formRetailer')}}" class="mb-5" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }} 
                            
                            <div class="col-12 text-center">
                                <h3> Primary Contact Information </h3>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="inputFirstName">First Name*</label>
                                            <input value="{{$ps->first_name}}" name="first_name" type="text" class="form-control"  placeholder="First Name" required="">
                                         </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="inputLastName">Last Name*</label>
                                            <input value="{{$ps->last_name}}" name="last_name" type="text" class="form-control"  placeholder="Last Name" required="">
                                         </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="inputtitle">Title</label>
                                            <input value="{{$ps->title}}" name="title" type="text" class="form-control"  placeholder="Title">
                                         </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="inputEmailid">Email*</label>
                                            <input value="{{$ps->email}}" name="email" type="email" class="form-control"  placeholder="Email" required="required">
                                         </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="inputPhoneno">Phone*</label>
                                            <input value="{{$ps->phone}}" name="phone" type="text" class="form-control"  placeholder="Phone">
                                         </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="inputFax">Fax</label>
                                            <input value="{{$ps->fax}}" name="fax" type="text" class="form-control"  placeholder="Fax">
                                         </div>
                                    </div>
                                    
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="inputBillingName">Billing Contact Name *</label>
                                            <input value="{{$ps->billing_contact_name}}" name="billing_contact_name" type="text" class="form-control"  placeholder="Name">
                                         </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="inputBillingEmailid">Billing Email*</label>
                                            <input value="{{$ps->billing_email}}" name="billing_email" type="email" class="form-control"  placeholder="Email">
                                         </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="inputBillingPhonne">Billing Phone*</label>
                                            <input value="{{$ps->billing_phone}}" name="billing_phone" type="text" class="form-control" id="inputBillingPhonne" placeholder="Phone">
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <h3>Organization Information</h3>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="inputOrganizationName">Organization Name*</label>
                                            <input value="{{$ps->organization_name}}" name="organization_name" type="text" class="form-control"  placeholder="Organization Name">
                                         </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="inputWebsite">Website*</label>
                                            <input value="{{$ps->website}}" name="website" type="url" class="form-control"  placeholder="Website">
                                         </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="inputBusinessYears">Years in Business*</label>
                                            <input value="{{$ps->years_in_business}}" name="years_in_business" type="number" class="form-control"  placeholder="Years in Business">
                                         </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="numberLocations">Number of Locations *</label>
                                            <input value="{{$ps->number_of_locations}}"  type="text" class="form-control"  >
                                            
                                          </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="appxVolume">Appx Volume (Total Units) *</label>
                                            <input value="{{$ps->appx_volume}}"  type="text" class="form-control"  >
                                            
                                          </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="onlineSell">Do you plan to sell online? *</label>
                                            <input value="{{$ps->sell_online}}"  type="text" class="form-control"  >
                                            
                                          </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="addressHeadquarters">Full Address of Headquarters *</label>
                                            <textarea  name="hq_address" class="form-control"  rows="3" placeholder="Address"> {{$ps->hq_address}} </textarea>
                                          </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="shippingAddress">Full Shipping Address *</label>
                                            <textarea name="ship_address" class="form-control"  rows="3" placeholder="Address"> {{$ps->ship_address}} </textarea>
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <h3>Store Images</h3>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="form-group">
                                            <label for="storeImage1">Store Image 1*</label>
                                            <div>
                                            @if(!empty($ps->storeImage1))
                                            <img src="{{asset('assets/images/wholesale/'.$ps->storeImage1)}}" width="100">
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="form-group">
                                            <label for="storeImage2">Store Image 2*</label>
                                            <div>
                                            @if(!empty($ps->storeImage2))
                                            <img src="{{asset('assets/images/wholesale/'.$ps->storeImage2)}}" width="100">
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="form-group">
                                            <label for="storeImage3">Store Image 3(Optional)</label>
                                            <div>
                                            @if(!empty($ps->storeImage3))
                                            <img src="{{asset('assets/images/wholesale/'.$ps->storeImage3)}}" width="100">
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="form-group">
                                            <label for="storeImage4">Store Image 4(Optional)</label>
                                            <div>
                                            @if(!empty($ps->storeImage4))
                                            <img src="{{asset('assets/images/wholesale/'.$ps->storeImage4)}}" width="100">
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <h3>Organization Types</h3>
                            </div>
                            <br />
                            <div class="col-12 mb-4">
                                <div class="row">
                                    <input value="{{$ps->organization_type}}"  type="text" class="form-control"  >
                                    
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <h3>Tell us a little more</h3>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                   <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="brandNmae">Top 5 notable brands you carry? *</label>
                                            <textarea name="brands_carry" class="form-control" rows="3" placeholder=""> {{$ps->brands_carry}} </textarea>
                                          </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="customers">Who are your customers? *</label>
                                            <textarea name="your_customers" class="form-control"  rows="3" placeholder=""> {{$ps->your_customers}} </textarea>
                                          </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="howtofind">How did you find us?*</label>
                                            <input value="{{$ps->how_find_us}}"  type="text" class="form-control"  >
                                            
                                          </div>
                                    </div>
                                    <div class="col-12"><strong>Social Media Handles</strong></div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label for="facebookinfo">facebook.com/</label>
                                        <input value="{{$ps->facebookinfo}}" name="facebookinfo" type="text" class="form-control"  placeholder="">
                                     </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label for="twitterinfo">twitter.com</label>
                                        <input value="{{$ps->twitterinfo}}" name="twitterinfo" type="text" class="form-control"  placeholder="">
                                     </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label for="instagraminfo">instagram.com/</label>
                                        <input value="{{$ps->instagraminfo}}" name="instagraminfo" type="text" class="form-control"  placeholder="">
                                     </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label for="pinterestinfo">pinterest.com*</label>
                                        <input value="{{$ps->pinterestinfo}}" name="pinterestinfo" type="text" class="form-control"  placeholder="">
                                     </div>
                                </div>
                                   </div>
                                </div>
                            </div>
                            
                          </form>
                        </div>
                        @else
                        <div class="row">
                             <div class="col-12 text-center">
                                  <h3><b>Distributor</b></h3>
                                  
                              </div>
                            <form id="frmDistributor" data="{{route('front.formRetailer')}}"  class="mb-5" method="post" enctype="multipart/form-data">
                              {{ csrf_field() }}      
                              <div class="col-12 text-center">
                                  
                                  <h3>Primary Contact Information</h3>
                              </div>
                              <div class="col-12 mb-4">
                                  <div class="row">
                                      <div class="col-md-4 col-sm-6">
                                          <div class="form-group">
                                              <label for="inputFirstName">First Name*</label>
                                              <input value="{{$ps->first_name}}" name="first_name" type="text" class="form-control"  placeholder="First Name">
                                           </div>
                                      </div>
                                      <div class="col-md-4 col-sm-6">
                                          <div class="form-group">
                                              <label for="inputLastName">Last Name*</label>
                                              <input value="{{$ps->last_name}}" name="last_name" type="text" class="form-control"  placeholder="Last Name">
                                           </div>
                                      </div>
                                      <div class="col-md-4 col-sm-6">
                                          <div class="form-group">
                                              <label for="inputtitle">Title</label>
                                              <input value="{{$ps->title}}" name="title" type="text" class="form-control" id="inputtitle" placeholder="Title">
                                           </div>
                                      </div>
                                      <div class="col-md-4 col-sm-6">
                                          <div class="form-group">
                                              <label for="inputEmailid">Email*</label>
                                              <input value="{{$ps->email}}" name="email" type="email" class="form-control"  placeholder="Email">
                                           </div>
                                      </div>
                                      <div class="col-md-4 col-sm-6">
                                          <div class="form-group">
                                              <label for="inputPhoneno">Phone*</label>
                                              <input value="{{$ps->phone}}" name="phone" type="text" class="form-control"  placeholder="Phone">
                                           </div>
                                      </div>
                                      <div class="col-md-4 col-sm-6">
                                          <div class="form-group">
                                              <label for="inputFax">Fax</label>
                                              <input value="{{$ps->fax}}" name="fax" type="text" class="form-control"  placeholder="Fax">
                                           </div>
                                      </div>
                                      
                                      <div class="col-md-4 col-sm-6">
                                          <div class="form-group">
                                              <label for="inputBillingName">Billing Contact Name *</label>
                                              <input value="{{$ps->billing_contact_name}}" name="billing_contact_name" type="text" class="form-control"  placeholder="Name">
                                           </div>
                                      </div>
                                      <div class="col-md-4 col-sm-6">
                                          <div class="form-group">
                                              <label for="inputBillingEmailid">Billing Email*</label>
                                              <input value="{{$ps->billing_email}}" name="billing_email" type="email" class="form-control" placeholder="Email">
                                           </div>
                                      </div>
                                      <div class="col-md-4 col-sm-6">
                                          <div class="form-group">
                                              <label for="inputBillingPhonne">Billing Phone*</label>
                                              <input value="{{$ps->billing_phone}}" name="billing_phone" type="text" class="form-control"  placeholder="Phone">
                                           </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-12 text-center">
                                  <h3>Organization Information</h3>
                              </div>
                              <div class="col-12 mb-4">
                                  <div class="row">
                                      <div class="col-md-4 col-sm-6">
                                          <div class="form-group">
                                              <label for="inputOrganizationName">Organization Name*</label>
                                              <input value="{{$ps->organization_name}}" name="organization_name" type="text" class="form-control"  placeholder="Organization Name">
                                           </div>
                                      </div>
                                      <div class="col-md-4 col-sm-6">
                                          <div class="form-group">
                                              <label for="inputWebsite">Website*</label>
                                              <input value="{{$ps->website}}" name="website" type="url" class="form-control"  placeholder="Website">
                                           </div>
                                      </div>
                                      <div class="col-md-4 col-sm-6">
                                          <div class="form-group">
                                              <label for="inputBusinessYears">Years in Business*</label>
                                              <input value="{{$ps->years_in_business}}" name="years_in_business" type="number" class="form-control"  placeholder="Years in Business">
                                           </div>
                                      </div>
                                      <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="">Last Year's Revenue*</label>
                                            <input value="{{$ps->last_year_revenue}}" name="last_year_revenue" type="number" class="form-control"  placeholder="Last Year's Revenue">
                                         </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="">Number of Sales Staff*</label>
                                            <input value="{{$ps->num_sales_staff}}" name="num_sales_staff" type="number" class="form-control"  placeholder="Number of Sales Staff">
                                         </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="">Number of Support Staff*</label>
                                            <input value="{{$ps->num_support_staff}}" name="num_support_staff" type="number" class="form-control"  placeholder="Number of Support Staff">
                                         </div>
                                    </div>
                                      <div class="col-md-6 col-sm-12">
                                          <div class="form-group">
                                              <label for="">Full Address of Headquarters *</label>
                                              <textarea name="hq_address" class="form-control"  rows="3" placeholder="Address"> {{$ps->hq_address}} </textarea>
                                            </div>
                                      </div>
                                      <div class="col-md-6 col-sm-12">
                                          <div class="form-group">
                                              <label for="">Full Shipping Address *</label>
                                              <textarea name="ship_address" class="form-control"  rows="3" placeholder="Address"> {{$ps->ship_address}} </textarea>
                                            </div>
                                      </div>
                                      <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="">Other Vendors Represented *</label>
                                            <textarea name="other_vendors" class="form-control"  rows="3" placeholder="Address"> {{$ps->other_vendors}} </textarea>
                                          </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="">Major Retailers Sold To *</label>
                                            <textarea name="major_retailers" class="form-control"  rows="3" placeholder=""> {{$ps->major_retailers}} </textarea>
                                          </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label for="">Type of Resaler Merchandise *</label>
                                          <textarea name="resaler_merchandise" class="form-control"  rows="3" placeholder=""> {{$ps->resaler_merchandise}} </textarea>
                                        </div>
                                  </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="">Why do you want to be our Distributor? *</label>
                                            <textarea name="why_distributor" class="form-control"  rows="3" placeholder="Address"> {{$ps->why_distributor}} </textarea>
                                          </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="">Why do you feel Bottles would resonate with your customers? *</label>
                                            <textarea name="resonate_customers" class="form-control"  rows="3" placeholder="Address"> {{$ps->resonate_customers}} </textarea>
                                          </div>
                                    </div>
                                      <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="">How did you hear us</label>
                                            <input value="{{$ps->how_find_us}}"  type="text" class="form-control"  >
                                          </div>
                                    </div>
                                  </div>
                              </div>
                              
                            </form>
                          </div>
                        @endif  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function() { 
     $("input,textarea,select").attr("disabled", "disabled");
});

$("#limit").on('change',function() {
  val = $(this).val();
    if(val == 1) {
        $("#limits").show();
        $("#allowed_products").prop("required", true);
    }
    else
    {
        $("#limits").hide();
        $("#allowed_products").prop("required", false);

    }
});

</script>
@endsection

