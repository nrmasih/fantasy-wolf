<header>
    <nav class="sb-topnav navbar navbar-expand navbar-light bg-theme shadow-sm">
        <button class="d-lg-none d-inline btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="javaScript:void(0)">
            <span class="bx bx-menu"></span> 
        </button><!-- Navbar Search-->
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <img src="<?php echo e(asset('assets/images/'.$gs->footer_logo)); ?>" alt="Logo" data-aos="zoom-in" width="116px">
        </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="<?php echo e(url('/')); ?>">Home</a>
            </li>
            <li class="nav-item">
                <a target="_blank" class="nav-link text-white" href="<?php echo e(url('/about-us')); ?>">About Us</a>
            </li>
            <li class="nav-item">
                <a target="_blank" class="nav-link text-white" href="<?php echo e(url('/contact-us')); ?>">Contact Us</a>
            </li>
        </ul>
        <div class="d-md-inline-block form-inline">
            <div class="notiBox">
                <div class="dropdown py-0">
                    <a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html" aria-expanded="false" class="btn text-white border-right border-radius-0">
                        <i class="bx bx-bell"></i>
                    </a>
                    <ul class="dropdown-menu shadow-lg notifications" role="menu" aria-labelledby="dLabel">
                        <div class="notification-heading">
                            <h4 class="menu-title">Notifications</h4>
                            <h4 class="menu-title pull-right">View all<i class="bx bx-right-arrow-alt"></i></h4>
                        </div>
                        <li class="divider"></li>
                        <div class="notifications-wrapper">
                            <a class="content" href="#">
                                <div class="notification-item">
                                    <h4 class="item-title">Evaluation Deadline 1 · day ago</h4>
                                    <p class="item-info">Marketing 101, Video Assignment</p>
                                </div>
                            </a>
                            <a class="content" href="#">
                                <div class="notification-item">
                                    <h4 class="item-title">Evaluation Deadline 1 · day ago</h4>
                                    <p class="item-info">Marketing 101, Video Assignment</p>
                                </div>
                            </a>
                            <a class="content" href="#">
                                <div class="notification-item">
                                    <h4 class="item-title">Evaluation Deadline 1 <i class="bx bxs-caret-right-circle"></i> day ago</h4>
                                    <p class="item-info">Marketing 101, Video Assignment</p>
                                </div>
                            </a>
                            <a class="content" href="#">
                                <div class="notification-item">
                                    <h4 class="item-title">Evaluation Deadline 1 <i class="bx bxs-caret-right-circle"></i> day ago</h4>
                                    <p class="item-info">Marketing 101, Video Assignment</p>
                                </div>
                            </a>
                            <a class="content" href="#">
                                <div class="notification-item">
                                    <h4 class="item-title">Evaluation Deadline 1 <i class="bx bxs-caret-right-circle"></i> day ago</h4>
                                    <p class="item-info">Marketing 101, Video Assignment</p>
                                </div>
                            </a>
                            <a class="content" href="#">
                                <div class="notification-item">
                                    <h4 class="item-title">Evaluation Deadline 1 <i class="bx bxs-caret-right-circle"></i> day ago</h4>
                                    <p class="item-info">Marketing 101, Video Assignment</p>
                                </div>
                            </a>
                        </div>
                        <li class="divider"></li>
                        <div class="notification-footer">
                            <h4 class="menu-title mb-0">View all<i class="bx bx-right-arrow-alt"></i></h4>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="py-0 media dtan pl-0 text-white align-items-center nav-link dropdown-toggle" id="userDropdown" href="javaScript:void(0)" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media-body mr-2 font-13 sf-re">Jeanette Shelton</div>
                    <div class="round2">
                        <img class="mr-2" src="<?php echo e(url('public/uploads/users/thumbnail/'.Auth::user()->photo)); ?>" width="40" height="40" alt="<?php echo e(Auth::user()->name); ?>">
                    </div>
                </a>
                <div class="dropdown-menu shadow-lg dropdown-menu shadow-lg-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?php echo e(route('edit-profile')); ?>"><i class="mr-2 bx bx-edit-alt"></i> Edit Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo e(route('user-logout')); ?>"><i class="mr-2 bx bx-log-out"></i>Logout</a>
                </div>
            </li>
        </ul>
    </nav>
</header>