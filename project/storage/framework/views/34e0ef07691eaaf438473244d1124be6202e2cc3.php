
    <li >
        <a href="#menu3" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="icofont-user"></i><?php echo e(__('Users')); ?>

        </a>
        <ul class="collapse list-unstyled" id="menu3" data-parent="#accordion">
            
            <li>
                <a href="<?php echo e(route('admin-user-index')); ?>"><span><?php echo e(__('Users')); ?></span></a>
            </li>            

        </ul>
    </li>

   
    <li >
        <a href="#blog" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-fw fa-newspaper"></i><?php echo e('Master'); ?>

        </a>
        <ul class="collapse list-unstyled" id="blog" data-parent="#accordion">
            <li>
                <a href="<?php echo e(route('admin-cblog-index')); ?>"><span><?php echo e(__('Categories')); ?></span></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-blog-index')); ?>"><span><?php echo e(__('Master')); ?></span></a>
            </li>
        </ul>
    </li>
    
    <li style="display: none;">
        <a href="#blog" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-fw fa-newspaper"></i><?php echo e(__('Blog')); ?>

        </a>
        <ul class="collapse list-unstyled" id="blog" data-parent="#accordion">
            <li>
                <a href="<?php echo e(route('admin-cblog-index')); ?>"><span><?php echo e(__('Categories')); ?></span></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-blog-index')); ?>"><span><?php echo e(__('Posts')); ?></span></a>
            </li>
        </ul>
    </li>

   

    <li>
        <a href="#general" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-cogs"></i><?php echo e(__('General Settings')); ?>

        </a>
        <ul class="collapse list-unstyled" id="general" data-parent="#accordion">
            <li>
                <a href="<?php echo e(route('admin-gs-logo')); ?>"><span><?php echo e(__('Logo')); ?></span></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-gs-fav')); ?>"><span><?php echo e(__('Favicon')); ?></span></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-gs-load')); ?>"><span><?php echo e(__('Loader')); ?></span></a>
            </li>
           
            <li>
            <a href="<?php echo e(route('admin-gs-contents')); ?>"><span><?php echo e(__('Website Contents')); ?></span></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-gs-footer')); ?>"><span><?php echo e(__('Footer')); ?></span></a>
            </li>          

           

            <li>
                <a href="<?php echo e(route('admin-gs-error-banner')); ?>"><span><?php echo e(__('Error Banner')); ?></span></a>
            </li>


            <li>
                <a href="<?php echo e(route('admin-gs-maintenance')); ?>"><span><?php echo e(__('Website Maintenance')); ?></span></a>
            </li>

        </ul>
    </li>

    <li style="display: none;">
        <a href="#homepage" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-edit"></i><?php echo e(__('Home Page Settings')); ?>

        </a>
        <ul class="collapse list-unstyled" id="homepage" data-parent="#accordion">

            <li>
                <a href="<?php echo e(route('admin-service-index')); ?>"><span><?php echo e(__('Services')); ?></span></a>
            </li>
            
        </ul>
    </li>

    <li>
        <a href="#menu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-file-code"></i><?php echo e(__('Pages Settings')); ?>

        </a>
        <ul class="collapse list-unstyled" id="menu" data-parent="#accordion">
            <li>
                <a href="<?php echo e(route('admin-faq-index')); ?>"><span><?php echo e(__('FAQ Page')); ?></span></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-ps-contact')); ?>"><span><?php echo e(__('Contact Us Page')); ?></span></a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-page-index')); ?>"><span><?php echo e(__('Other Pages')); ?></span></a>
            </li>
            
        </ul>
    </li>
    <li>
        <a href="#emails" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-at"></i><?php echo e(__('Email Settings')); ?>

        </a>
        <ul class="collapse list-unstyled" id="emails" data-parent="#accordion">
            <li><a href="<?php echo e(route('admin-mail-index')); ?>"><span><?php echo e(__('Email Template')); ?></span></a></li>
            <li><a href="<?php echo e(route('admin-mail-config')); ?>"><span><?php echo e(__('Email Configurations')); ?></span></a></li>
            <li><a href="<?php echo e(route('admin-group-show')); ?>"><span><?php echo e(__('Group Email')); ?></span></a></li>
        </ul>
    </li>
    
    <li>
        <a href="#socials" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-paper-plane"></i><?php echo e(__('Social Settings')); ?>

        </a>
        <ul class="collapse list-unstyled" id="socials" data-parent="#accordion">
                <li><a href="<?php echo e(route('admin-social-index')); ?>"><span><?php echo e(__('Social Links')); ?></span></a></li>
                <li><a href="<?php echo e(route('admin-social-facebook')); ?>"><span><?php echo e(__('Facebook Login')); ?></span></a></li>
                <li><a href="<?php echo e(route('admin-social-google')); ?>"><span><?php echo e(__('Google Login')); ?></span></a></li>
        </ul>
    </li>
    
    <li>
        <a href="#seoTools" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-wrench"></i><?php echo e(__('SEO Tools')); ?>

        </a>
        <ul class="collapse list-unstyled" id="seoTools" data-parent="#accordion">
           
            <li>
                <a href="<?php echo e(route('admin-seotool-analytics')); ?>"><span><?php echo e(__('Google Analytics')); ?></span></a>
            </li
            >
            <li>
                <a href="<?php echo e(route('admin-seotool-keywords')); ?>"><span><?php echo e(__('Website Meta Keywords')); ?></span></a>
            </li>
        </ul>
    </li>
    


        <li>
            <a href="<?php echo e(route('admin-role-index')); ?>" class=" wave-effect"><i class="fas fa-user-tag"></i><?php echo e(__('Manage Roles')); ?></a>
        </li>
        <li>
            <a href="<?php echo e(route('admin-cache-clear')); ?>" class=" wave-effect"><i class="fas fa-sync"></i><?php echo e(__('Clear Cache')); ?></a>
        </li>
        <li>
            <a href="#sactive" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-cog"></i><?php echo e(__('Backup')); ?>

            </a>
            <ul class="collapse list-unstyled" id="sactive" data-parent="#accordion">

               
                <li><a href="<?php echo e(route('admin-generate-backup')); ?>"> <?php echo e(__('Generate Backup')); ?></a></li>
            </ul>
        </li>