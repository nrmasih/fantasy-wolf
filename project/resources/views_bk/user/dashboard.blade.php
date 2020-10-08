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
                        <a class="nav-link active" id="pills-feed-tab" data-toggle="pill" href="#pills-feed" role="tab" aria-controls="pills-feed" aria-selected="true">Feed</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="pills-inbox-tab" data-toggle="pill" href="#pills-inbox" role="tab" aria-controls="pills-inbox" aria-selected="false">Inbox</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                     </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                     <div class="tab-pane fade show active" id="pills-feed" role="tabpanel" aria-labelledby="pills-feed-tab">
                        <div class="postLisitng">
                           <a href="{{route('user.postlisting')}}" class="btn btn-sm btn-primary btn-round-xl d-flex flex-wrap mx-1"><i class="bx bx-user-plus mr-1"></i>Post a Listing</a>
                        </div>
                        <div class="row mx-0">
                           <div class="col-md-12 px-0">
                              <div class="feed_filter d-flex flex-wrap justify-content-between align-items-center">
                                 <div class="price_range">
                                    <label class="price-min mb-3">Price Range</label>
                                    <div data-role="rangeslider">
                                       <div id="mySlider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                          <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0;width: 50.3337%;"></div>
                                          <p>
                                             <span class="ml-2 span1">$0</span>
                                             <span class="ml-2  span2">$100</span>
                                          </p>
                                          <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0;"></span><span class="ui-slider-handle ui-state-default ui-corner-all ui-state-hover" tabindex="0" style="left: 49.545%;"></span>
                                          <span class="scroll-text">$50</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="mx-4">
                                       <label class="m-0 fs-11">SPORTS</label>
                                       <div class="dropdown">
                                          <button type="button" class="dtan  p-0 btn dropdown-toggle" data-toggle="dropdown">
                                          All sports <i class="ml-3 bx bx-chevron-down"></i>
                                          </button>
                                          <div class="dropdown-menu">
                                             <a class="dropdown-item" href="#">Link 1</a>
                                             <a class="dropdown-item" href="#">Link 2</a>
                                             <a class="dropdown-item" href="#">Link 3</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="mx-4">
                                       <label class="m-0 fs-11">TYPE</label>
                                       <div class="dropdown">
                                          <button type="button" class="dtan  p-0 btn dropdown-toggle" data-toggle="dropdown">
                                          Buy a Team <i class="ml-3 bx bx-chevron-down"></i>
                                          </button>
                                          <div class="dropdown-menu">
                                             <a class="dropdown-item" href="#">Link 1</a>
                                             <a class="dropdown-item" href="#">Link 2</a>
                                             <a class="dropdown-item" href="#">Link 3</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div>
                                       <div class="input-group theme-group bg-white">
                                          <div class="input-group-prepend">
                                             <span class="input-group-text" id="basic-addon1"><i class="bx bx-search"></i></span>
                                          </div>
                                          <input type="text" class="form-control border-0" placeholder="Search Teams" aria-label="Username" aria-describedby="basic-addon1">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row mx-0 mt-4">
                            
                            <div class="col-md-12 px-3">
                              <div class="col teamCSextion d-flex flex-wrap mb-4">
                                 <div class="teamList d-flex flex-wrap align-items-center">
                                    <!--button class="shadow-lg fav-btn fav-active btn btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-heart"></i></button-->
                                    <div class="picx">
                                       <img src="{{url('public/assets/images/user2.png')}}" width="86">
                                    </div>
                                    <div class="ml-4 listName">
                                       <h5 class="mb-0">Kobe Bryant</h5>
                                       <div class="des">
                                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="d-flex flex-wrap align-items-center ml-4">
                                    <div class="ml-4 listName mr-4">
                                       <h5>Buy a Team</h5>
                                       <h4>$15.00</h4>
                                    </div>
                                    <div class="ml-4 team-logo">
                                       <img src="{{url('public/assets/images/teamLogo.png')}}" width="86">
                                    </div>
                                 </div>
                                 <div class="d-flex flex-wrap align-items-center ml-lg-1  btn-theme-group">
                                    <div class="mt-3 mt-lg-0 ml-lg-3 d-flex flex-wrap">
                                       <button class="btn btn-sm btn-primary-outline btn-round d-flex flex-wrap mx-1"><i class="bx bx-baseball mr-1"></i>Sport Type</button>
                                       <div class="mx-lg-3 vr"></div>
                                       <button class="btn btn-sm btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-plus mr-1"></i>Buy a Team</button><button class="btn btn-sm btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-heart mr-1"></i>Favourite</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                            <div class="col-md-12 px-3">
                              <div class="col teamCSextion teamCSextion2 d-flex flex-wrap mb-4">
                                 <div class="teamList d-flex flex-wrap align-items-center">
                                    <!--button class="shadow-lg fav-btn btn btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-heart"></i></button-->
                                    <div class="picx">
                                       <img src="{{url('public/assets/images/user3.png')}}" width="86">
                                    </div>
                                    <div class="ml-4 listName">
                                       <h5 class="mb-0">Kobe Bryant</h5>
                                       <div class="des">
                                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="d-flex flex-wrap align-items-center ml-4">
                                    <div class="ml-4 listName mr-4">
                                       <h5>Buy a Team</h5>
                                       <h4>$15.00</h4>
                                    </div>
                                    <div class="ml-4 team-logo">
                                       <img src="{{url('public/assets/images/teamLogo.png')}}" width="86">
                                    </div>
                                 </div>
                                 <div class="d-flex flex-wrap align-items-center ml-lg-1  btn-theme-group">
                                    <div class="mt-3 mt-lg-0 ml-lg-3 d-flex flex-wrap">
                                       <button class="btn btn-sm btn-primary-outline btn-round d-flex flex-wrap mx-1"><i class="bx bx-baseball mr-1"></i>Sport Type</button>
                                       <div class="mx-lg-3 vr"></div>
                                       <button class="btn btn-sm btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-plus mr-1"></i>Buy a Team</button><button class="btn btn-sm btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-heart mr-1"></i>Favourite</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                            
                            <div class="col-md-12 px-3">
                              <div class="col teamCSextion d-flex flex-wrap mb-4">
                                 <div class="teamList d-flex flex-wrap align-items-center">
                                    <!--button class="shadow-lg fav-btn fav-active btn btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-heart"></i></button-->
                                    <div class="picx">
                                       <img src="{{url('public/assets/images/user2.png')}}" width="86">
                                    </div>
                                    <div class="ml-4 listName">
                                       <h5 class="mb-0">Kobe Bryant</h5>
                                       <div class="des">
                                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="d-flex flex-wrap align-items-center ml-4">
                                    <div class="ml-4 listName mr-4">
                                       <h5>Buy a Team</h5>
                                       <h4>$15.00</h4>
                                    </div>
                                    <div class="ml-4 team-logo">
                                       <img src="{{url('public/assets/images/teamLogo.png')}}" width="86">
                                    </div>
                                 </div>
                                 <div class="d-flex flex-wrap align-items-center ml-lg-1  btn-theme-group">
                                    <div class="mt-3 mt-lg-0 ml-lg-3 d-flex flex-wrap">
                                       <button class="btn btn-sm btn-primary-outline btn-round d-flex flex-wrap mx-1"><i class="bx bx-baseball mr-1"></i>Sport Type</button>
                                       <div class="mx-lg-3 vr"></div>
                                       <button class="btn btn-sm btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-plus mr-1"></i>Buy a Team</button><button class="btn btn-sm btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-heart mr-1"></i>Favourite</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                            <div class="col-md-12 px-3">
                              <div class="col teamCSextion teamCSextion2 d-flex flex-wrap mb-4">
                                 <div class="teamList d-flex flex-wrap align-items-center">
                                    <!--button class="shadow-lg fav-btn btn btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-heart"></i></button-->
                                    <div class="picx">
                                       <img src="{{url('public/assets/images/user3.png')}}" width="86">
                                    </div>
                                    <div class="ml-4 listName">
                                       <h5 class="mb-0">Kobe Bryant</h5>
                                       <div class="des">
                                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="d-flex flex-wrap align-items-center ml-4">
                                    <div class="ml-4 listName mr-4">
                                       <h5>Buy a Team</h5>
                                       <h4>$15.00</h4>
                                    </div>
                                    <div class="ml-4 team-logo">
                                       <img src="{{url('public/assets/images/teamLogo.png')}}" width="86">
                                    </div>
                                 </div>
                                 <div class="d-flex flex-wrap align-items-center ml-lg-1  btn-theme-group">
                                    <div class="mt-3 mt-lg-0 ml-lg-3 d-flex flex-wrap">
                                       <button class="btn btn-sm btn-primary-outline btn-round d-flex flex-wrap mx-1"><i class="bx bx-baseball mr-1"></i>Sport Type</button>
                                       <div class="mx-lg-3 vr"></div>
                                       <button class="btn btn-sm btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-plus mr-1"></i>Buy a Team</button><button class="btn btn-sm btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-heart mr-1"></i>Favourite</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                            
                            
                            <div class="col-md-12 px-3">
                              <div class="col teamCSextion d-flex flex-wrap mb-4">
                                 <div class="teamList d-flex flex-wrap align-items-center">
                                    <!--button class="shadow-lg fav-btn fav-active btn btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-heart"></i></button-->
                                    <div class="picx">
                                       <img src="{{url('public/assets/images/user2.png')}}" width="86">
                                    </div>
                                    <div class="ml-4 listName">
                                       <h5 class="mb-0">Kobe Bryant</h5>
                                       <div class="des">
                                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="d-flex flex-wrap align-items-center ml-4">
                                    <div class="ml-4 listName mr-4">
                                       <h5>Buy a Team</h5>
                                       <h4>$15.00</h4>
                                    </div>
                                    <div class="ml-4 team-logo">
                                       <img src="{{url('public/assets/images/teamLogo.png')}}" width="86">
                                    </div>
                                 </div>
                                 <div class="d-flex flex-wrap align-items-center ml-lg-1  btn-theme-group">
                                    <div class="mt-3 mt-lg-0 ml-lg-3 d-flex flex-wrap">
                                       <button class="btn btn-sm btn-primary-outline btn-round d-flex flex-wrap mx-1"><i class="bx bx-baseball mr-1"></i>Sport Type</button>
                                       <div class="mx-lg-3 vr"></div>
                                       <button class="btn btn-sm btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-plus mr-1"></i>Buy a Team</button><button class="btn btn-sm btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-heart mr-1"></i>Favourite</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                            <div class="col-md-12 px-3">
                              <div class="col teamCSextion teamCSextion2 d-flex flex-wrap mb-4">
                                 <div class="teamList d-flex flex-wrap align-items-center">
                                    <!--button class="shadow-lg fav-btn btn btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-heart"></i></button-->
                                    <div class="picx">
                                       <img src="{{url('public/assets/images/user3.png')}}" width="86">
                                    </div>
                                    <div class="ml-4 listName">
                                       <h5 class="mb-0">Kobe Bryant</h5>
                                       <div class="des">
                                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="d-flex flex-wrap align-items-center ml-4">
                                    <div class="ml-4 listName mr-4">
                                       <h5>Buy a Team</h5>
                                       <h4>$15.00</h4>
                                    </div>
                                    <div class="ml-4 team-logo">
                                       <img src="{{url('public/assets/images/teamLogo.png')}}" width="86">
                                    </div>
                                 </div>
                                 <div class="d-flex flex-wrap align-items-center ml-lg-1  btn-theme-group">
                                    <div class="mt-3 mt-lg-0 ml-lg-3 d-flex flex-wrap">
                                       <button class="btn btn-sm btn-primary-outline btn-round d-flex flex-wrap mx-1"><i class="bx bx-baseball mr-1"></i>Sport Type</button>
                                       <div class="mx-lg-3 vr"></div>
                                       <button class="btn btn-sm btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-plus mr-1"></i>Buy a Team</button><button class="btn btn-sm btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-heart mr-1"></i>Favourite</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                                                       
                            
                        </div>
                     </div>
                     <div class="tab-pane fade" id="pills-inbox" role="tabpanel" aria-labelledby="pills-inbox-tab">
                        <div class="row mx-0 mt-4">
                           <div class="col-md-12 px-3">
                              <div class="bg-img-none col teamCSextion d-flex flex-wrap mb-4">
                                 <div class="col-lg-12  px-0 d-flex flex-wrap align-items-center ml-lg-4  btn-theme-group">
                                    <h2 class="text-center">
                                       &nbsp;
                                    </h2>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row mx-0 mt-4">
                           <div class="col-md-12 px-3">
                              <div class="bg-img-none col teamCSextion d-flex flex-wrap mb-4">
                                 <div class="col teamList d-flex flex-wrap align-items-center px-0">
                                    <div class="picx">
                                       <img src="{{url('public/uploads/users/thumbnail/'.Auth::user()->photo)}}" width="86">
                                    </div>
                                    <div class="ml-4 listName">
                                       <h5 class="mb-0"> {{Auth::user()->name}} </h5>
                                       <div class="des">
                                          <p><i class="bx bx-mail-send mr-1 h6 mb-0"></i> {{Auth::user()->email}} </p>
                                          <p><i class="h6 mb-0 mr-1">@</i>{{str_slug(Auth::user()->name)}}</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col d-flex flex-wrap align-items-center ml-4">
                                    <div class="ml-4 listName mr-4">
                                       <h5>About</h5>
                                       <p class="mb-0"> {{Auth::user()->bio}}  </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-3  px-0 d-flex flex-wrap align-items-center ml-lg-4  btn-theme-group">
                                    <div class="mt-3 mt-lg-0 ml-lg-3 d-flex flex-wrap">
                                       <a data-toggle="modal" class="btn btn-sm btn-primary btn-round d-flex flex-wrap mx-1" href="#profileChanges"><i class="bx bx-pencil mr-1"></i>Edit Profile</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row mx-0 mt-3">
                           <div class="col-md-12 px-3">
                              <div class="col d-flex flex-wrap">
                                 <div class="col-12 d-flex flex-wrap justify-content-center">
                                    <ul class="theme-pills nav nav-pills" id="pills-tab3" role="tablist">
                                       <li class="nav-item mx-3">
                                          <a class="w-100 nav-link bg-img-none teamCSextion mx-2 px-4 active" id="pills-teamHis-tab" data-toggle="pill" href="#pills-teamHis" role="tab" aria-controls="pills-teamHis" aria-selected="true">Favourite Team</a>
                                       </li>
                                       <li class="nav-item mx-3">
                                          <a class="w-100 nav-link bg-img-none teamCSextion mx-2 px-4" id="pills-bought-tab" data-toggle="pill" href="#pills-bought" role="tab" aria-controls="pills-bought" aria-selected="false">Bought Team</a>
                                       </li>
                                       <li class="nav-item mx-3">
                                          <a class="w-100 nav-link bg-img-none teamCSextion mx-2 px-4" id="pills-sold-tab" data-toggle="pill" href="#pills-sold" role="tab" aria-controls="pills-sold" aria-selected="false">Sold Team</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-content" id="pills-tabContent3">
                           <div class="tab-pane fade active show" id="pills-teamHis" role="tabpanel" aria-labelledby="pills-teamHis-tab">
                              <div class="row mx-0 mt-4">
                                 <div class="col-md-12">
                                    <div class="col-12 d-flex flex-wrap align-items-center px-3 mb-3">
                                    </div>
                                    <div class="col d-flex flex-wrap mb-4">
                                       <div class="col d-flex flex-wrap align-items-center px-0">
                                          <table class="table table-borderd">
                                             <thead class="theme-dark">
                                                <tr>
                                                   <th>Sr. No.</th>
                                                   <th>Profile picture</th>
                                                   <th>Full name</th>
                                                   <th style="width: 350px;">Description</th>
                                                   <th>Sport</th>
                                                   <th>Favourite</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td class="align-middle">
                                                      <span>1</span>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_img"> <img src="{{url('public/assets/images/profile_img.png')}}" alt="sunil" class="img-fluid"> </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_ib px-0">
                                                         <h5>Jeanette Shelton</h5>
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_ib px-0">
                                                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Lorem ipsum dolor sit.</p>
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="team-logo-xs">
                                                         <img src="{{url('public/assets/images/teamLogo.png')}}" class="img-fluid">
                                                      </div>
                                                   </td>
                                                   <td class="align-middle"><button class="shadow-lg fav-btn fav-active btn btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-heart"></i></button></td>
                                                </tr>
                                                 <tr>
                                                   <td class="align-middle">
                                                      <span>1</span>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_img"> <img src="{{url('public/assets/images/profile_img.png')}}" alt="sunil" class="img-fluid"> </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_ib px-0">
                                                         <h5>Jeanette Shelton</h5>
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_ib px-0">
                                                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Lorem ipsum dolor sit.</p>
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="team-logo-xs">
                                                         <img src="{{url('public/assets/images/teamLogo.png')}}" class="img-fluid">
                                                      </div>
                                                   </td>
                                                   <td class="align-middle"><button class="shadow-lg fav-btn fav-active btn btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-heart"></i></button></td>
                                                </tr>
                                                 <tr>
                                                   <td class="align-middle">
                                                      <span>1</span>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_img"> <img src="{{url('public/assets/images/profile_img.png')}}" alt="sunil" class="img-fluid"> </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_ib px-0">
                                                         <h5>Jeanette Shelton</h5>
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_ib px-0">
                                                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Lorem ipsum dolor sit.</p>
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="team-logo-xs">
                                                         <img src="{{url('public/assets/images/teamLogo.png')}}" class="img-fluid">
                                                      </div>
                                                   </td>
                                                   <td class="align-middle"><button class="shadow-lg fav-btn fav-active btn btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-heart"></i></button></td>
                                                </tr>
                                                 <tr>
                                                   <td class="align-middle">
                                                      <span>1</span>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_img"> <img src="{{url('public/assets/images/profile_img.png')}}" alt="sunil" class="img-fluid"> </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_ib px-0">
                                                         <h5>Jeanette Shelton</h5>
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_ib px-0">
                                                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Lorem ipsum dolor sit.</p>
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="team-logo-xs">
                                                         <img src="{{url('public/assets/images/teamLogo.png')}}" class="img-fluid">
                                                      </div>
                                                   </td>
                                                   <td class="align-middle"><button class="shadow-lg fav-btn fav-active btn btn-primary btn-round d-flex flex-wrap mx-1"><i class="bx bx-heart"></i></button></td>
                                                </tr>
                                                
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-bought" role="tabpanel" aria-labelledby="pills-bought-tab">
                              <div class="row mx-0 mt-4">
                                 <div class="col-md-12">
                                    <div class="col-12 d-flex flex-wrap align-items-center px-3 mb-3">
                                    </div>
                                    <div class="col d-flex flex-wrap mb-4">
                                       <div class="col d-flex flex-wrap align-items-center px-0">
                                          <table class="table table-borderd">
                                             <thead class="theme-dark">
                                                <tr>
                                                   <th>Sr. No.</th>
                                                   <th>Profile picture</th>
                                                   <th>Full name</th>
                                                   <th style="width: 350px;">Description</th>
                                                   <th>Sport</th>
                                                   <th>Price</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td class="align-middle">
                                                      <span>1</span>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_img"> <img src="{{url('public/assets/images/profile_img.png')}}" alt="sunil" class="img-fluid"> </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_ib px-0">
                                                         <h5>Jeanette Shelton</h5>
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_ib px-0">
                                                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Lorem ipsum dolor sit.</p>
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="team-logo-xs">
                                                         <img src="{{url('public/assets/images/teamLogo.png')}}" class="img-fluid">
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">$15</td>
                                                </tr>
                                                 <tr>
                                                   <td class="align-middle">
                                                      <span>1</span>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_img"> <img src="{{url('public/assets/images/profile_img.png')}}" alt="sunil" class="img-fluid"> </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_ib px-0">
                                                         <h5>Jeanette Shelton</h5>
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_ib px-0">
                                                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Lorem ipsum dolor sit.</p>
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="team-logo-xs">
                                                         <img src="{{url('public/assets/images/teamLogo.png')}}" class="img-fluid">
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">$15</td>
                                                </tr>
                                                 <tr>
                                                   <td class="align-middle">
                                                      <span>1</span>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_img"> <img src="{{url('public/assets/images/profile_img.png')}}" alt="sunil" class="img-fluid"> </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_ib px-0">
                                                         <h5>Jeanette Shelton</h5>
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_ib px-0">
                                                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Lorem ipsum dolor sit.</p>
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="team-logo-xs">
                                                         <img src="{{url('public/assets/images/teamLogo.png')}}" class="img-fluid">
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">$15</td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-sold" role="tabpanel" aria-labelledby="pills-sold-tab">
                              <div class="row mx-0 mt-4">
                                 <div class="col-md-12">
                                    <div class="col-12 d-flex flex-wrap align-items-center px-3 mb-3">
                                    </div>
                                    <div class="col d-flex flex-wrap mb-4">
                                       <div class="col d-flex flex-wrap align-items-center px-0">
                                          <table class="table table-borderd">
                                             <thead class="theme-dark">
                                                <tr>
                                                   <th>Sr. No.</th>
                                                   <th>Profile picture</th>
                                                   <th>Full name</th>
                                                   <th style="width: 350px;">Description</th>
                                                   <th>Sport</th>
                                                   <th>Price</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td class="align-middle">
                                                      <span>1</span>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_img"> <img src="{{url('public/assets/images/profile_img.png')}}" alt="sunil" class="img-fluid"> </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_ib px-0">
                                                         <h5>Jeanette Shelton</h5>
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_ib px-0">
                                                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Lorem ipsum dolor sit.</p>
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="team-logo-xs">
                                                         <img src="{{url('public/assets/images/teamLogo.png')}}" class="img-fluid">
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">$15</td>
                                                </tr>
                                                
                                                <tr>
                                                   <td class="align-middle">
                                                      <span>1</span>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_img"> <img src="{{url('public/assets/images/profile_img.png')}}" alt="sunil" class="img-fluid"> </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_ib px-0">
                                                         <h5>Jeanette Shelton</h5>
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_ib px-0">
                                                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Lorem ipsum dolor sit.</p>
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="team-logo-xs">
                                                         <img src="{{url('public/assets/images/teamLogo.png')}}" class="img-fluid">
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">$15</td>
                                                </tr>
                                                
                                                <tr>
                                                   <td class="align-middle">
                                                      <span>1</span>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_img"> <img src="{{url('public/assets/images/profile_img.png')}}" alt="sunil" class="img-fluid"> </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_ib px-0">
                                                         <h5>Jeanette Shelton</h5>
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="chat_ib px-0">
                                                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Lorem ipsum dolor sit.</p>
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">
                                                      <div class="team-logo-xs">
                                                         <img src="{{url('public/assets/images/teamLogo.png')}}" class="img-fluid">
                                                      </div>
                                                   </td>
                                                   <td class="align-middle">$15</td>
                                                </tr>
                                                
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
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
        <script src="{{asset('public/assets/js/UserFuncton.js?v='.rand())}}"></script>
        @endsection
        
@endsection