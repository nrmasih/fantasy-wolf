<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(isset($page->meta_tag) && isset($page->meta_description))
    <meta name="keywords" content="{{ $page->meta_tag }}">
    <meta name="description" content="{{ $page->meta_description }}">
    <title>{{$gs->title}}</title>
    @else
    <meta name="keywords" content="{{ $seo->meta_keys }}">
    <meta name="author" content="Eshop">
    <title>{{$gs->title}}</title>
    @endif
    <!-- favicon -->
    <link rel="icon"  type="image/x-icon" href="{{asset('assets/images/'.$gs->favicon)}}"/> 
    <link href="{{asset('assets/images/'.$gs->favicon)}}" rel="apple-touch-icon">   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css?v='.rand())}}">   
    <!-- custom style -->    
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css?v='.rand())}}">  
    <link rel="stylesheet" href="{{asset('public/assets/css/dashboard.css?v='.rand())}}">    
    <link rel="stylesheet" href="{{asset('public/assets/css/fontFamily.css?v='.rand())}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/responsive.css?v='.rand())}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/aos.css?v='.rand())}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/custom.css?v='.rand())}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/plugin/toasty/toasty.css')}}"> 
    <script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
</head>
<body>
    
    <input type="hidden" value="{{url('/')}}" id="base_url">
    <div id="ajaxloader" class="fa fa-circle-o-notch fa-spin"  style="display: none;"></div>
    <div id="ajaxcover" style="display: none;"></div> 
    
    @yield('content')

    @yield('scripts')

    <script src="{{asset('public/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/assets/js/aos.js')}}"></script>
    <script src="{{asset('public/assets/js/main.js')}}"></script>
    <script src="{{asset('public/plugin/toasty/toasty.js')}}"></script>    
    <script src="{{asset('public/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('public/assets/js/custom-functon.js?v='.rand())}}"></script>

</body>
</html>
