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
                        <a class="nav-link active" id="pills-feed-tab" data-toggle="pill" href="#pills-feed" role="tab" aria-controls="pills-feed" aria-selected="true">Post a Listing</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-feed" role="tabpanel" aria-labelledby="pills-feed-tab">
                        <div class="container-fluidd e-changePassword mt-4">
                            <ul class="theme-pills nav nav-pills px-0" id="pills-tab2" role="tablist">
                                <li class="nav-item col-md-6 px-3">
                                    <a class="tabs noleftBg col teamCSextion d-flex flex-wrap mb-4 align-items-center active" id="pills-sell-tab" data-toggle="pill" href="#pills-sell" role="tab" aria-controls="pills-sell" aria-selected="true">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <img src="{{url('public/assets/images/sellTeam.png')}}" height="40" class="mt-2">
                                            <h4 class="ml-2 my-0"> Sell a team </h4>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item col-md-6 px-3">
                                    <a class="tabs noleftBg col teamCSextion d-flex flex-wrap mb-4 align-items-center" id="pills-join-tab" data-toggle="pill" href="#pills-join" role="tab" aria-controls="pills-join" aria-selected="false">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <img src="{{url('public/assets/images/joinTeam.png')}}" height="40" class="mt-2">
                                            <h4 class="ml-2 my-0">  Join a spot </h4>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tab2Content">
                                <div class="tab-pane fade active show" id="pills-sell" role="tabpanel" aria-labelledby="pills-sell-tab">
                                    <div class=" row mx-0 mt-4">
                                        <div class="col-md-4 px-3">
                                            <div class="bg-img-none col teamCSextion d-flex flex-wrap mb-4">
                                                <div class="col-12 teamList mx-w-none d-flex flex-wrap align-items-center px-0  border-right-0">
                                                    <h5 class="w-100">
                                                        Sport Information
                                                        <hr>
                                                    </h5>
                                                </div>
                                                <div class="col-12 teamList mx-w-none d-flex flex-wrap align-items-center px-0  border-right-0">
                                                    <div class="team-logo">
                                                        <img src="assets/images/teamLogo.png" width="86">
                                                    </div>
                                                    <div class="ml-4 listName">
                                                        <a class="btn btn-sm btn-primary-outline btn-round d-flex flex-wrap mx-1" href="#"><i class="bx bx-camera mr-1"></i>Add Sport Picture</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 px-3">
                                            <div class="bg-img-none col teamCSextion d-flex flex-wrap mb-4 py-4">
                                                <form class="form w-100" novalidate="">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label>Team Name</label>
                                                                        <input class="form-control" type="text" name="fNAme" placeholder="Enter your Team name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label>Type a Sport</label>
                                                                        <select class="form-control">
                                                                            <option>Cricket</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-lg-12">
                                                                    <div class="form-group">
                                                                        <label>Price</label>
                                                                        <input class="form-control" type="text" name="username" placeholder="Enter your price">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col col-md-12 mb-3">
                                                                    <div class="form-group">
                                                                        <label>Description</label>
                                                                        <textarea class="form-control" rows="5" placeholder="Enter your description"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-6 col-lg-4">
                                                            <button class="btn btn-block btn-primary btn-round-xl" type="submit">Checkout</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-join" role="tabpanel" aria-labelledby="pills-join-tab">
                                    <div class=" row mx-0 mt-4">
                                        <div class="col-md-4 px-3">
                                            <div class="bg-img-none col teamCSextion d-flex flex-wrap mb-4">
                                                <div class="col-12 teamList mx-w-none d-flex flex-wrap align-items-center px-0  border-right-0">
                                                    <h5 class="w-100">
                                                        Sport Information
                                                        <hr>
                                                    </h5>
                                                </div>
                                                <div class="col-12 teamList mx-w-none d-flex flex-wrap align-items-center px-0  border-right-0">
                                                    <div class="team-logo">
                                                        <img src="assets/images/teamLogo.png" width="86">
                                                    </div>
                                                    <div class="ml-4 listName">
                                                        <a class="btn btn-sm btn-primary-outline btn-round d-flex flex-wrap mx-1" href="#"><i class="bx bx-camera mr-1"></i>Add Sport Picture</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 px-3">
                                            <div class="bg-img-none col teamCSextion d-flex flex-wrap mb-4 py-4">
                                                <form class="form w-100" novalidate="">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label>Team Name</label>
                                                                        <input class="form-control" type="text" name="fNAme" placeholder="Enter your Team name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label>Type a Sport</label>
                                                                        <select class="form-control">
                                                                            <option>Cricket</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label>Link to league</label>
                                                                        <input class="form-control" type="text" placeholder="Enter your league link">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label>Start Date</label>
                                                                        <input class="form-control" type="date" placeholder="Enter start date">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col col-md-12 mb-3">
                                                                    <div class="form-group">
                                                                        <label>Description</label>
                                                                        <textarea class="form-control" rows="5" placeholder="Enter your description"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-6 col-lg-4">
                                                            <button class="btn btn-block btn-primary btn-round-xl" type="submit">Join a spot</button>
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
                </div>
            </div>
        </main>
    </div>
</div>
    
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

