<footer class="pt-2 section footer-classic context-dark bg-theme">
    <div class="container-fluid px-4">
        <div class="row row-30 justify-content-center">
            <div class="col-xl-3 col-md-12 col-xl-4">
                <div class="pr-xl-4 d-flex align-items-center">
                    <a class="brand mr-3" href="{{url('/')}}"><img class="brand-logo-light" src="{{asset('assets/images/'.$gs->footer_logo)}}" alt="" width="140"></a>
                    <p class="text-white mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                    <!-- Rights-->
                </div>
                <div class="col-12 mb-1 social-container d-flex">
                    <div class="col"><a class="social-inner" href="#"><span class="bx bxl-facebook"></span></a></div>
                    <div class="col"><a class="social-inner" href="#"><span class="bx bxl-instagram"></span></a></div>
                    <div class="col"><a class="social-inner" href="#"><span class="bx bxl-twitter"></span></a></div>
                    <div class="col"><a class="social-inner" href="#"><span class="bx bxl-google"></span></a></div>
                </div>
            </div>
            <div class="mt-4 mt-sm-0 col-lg-3  col-md-5 col-xl-3">
                <h5>Contacts</h5>
                <dl class="contact-list">
                    <dd><strong class="mr-2">Address:</strong> Lorem Ipsum is simply dummy</dd>
                </dl>
                <dl class="contact-list">
                    <dd><strong class="mr-2">Email:</strong><a href="mailto:#">admin@gmail.com</a></dd>
                </dl>
                <dl class="contact-list">
                    <dd><strong class="mr-2">Phones:</strong><a href="tel:#">+00 000 0000 000</a> 
                    </dd>
                </dl>
            </div>
            <div class="mt-4 mt-sm-0 col-lg-3  col-md-5 col-xl-3">
                <h5>Links</h5>
                <ul class="nav-list nav-inline">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="about_us.html">About Us</a></li>
                    <li><a href="contact_us.html">Contact Us</a></li>
                    <li><a href="#">Terms and conditions</a></li>
                    <li><a href="#">Privacy policy</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-white rights mb-0 text-center"><span>©  </span><span class="copyright-year">{{date('/')}}</span><span> </span><span>The Fantasy Wolf</span><span>. </span><span>All Rights Reserved.</span></p>
            </div>
        </div>
    </div>
</footer>
