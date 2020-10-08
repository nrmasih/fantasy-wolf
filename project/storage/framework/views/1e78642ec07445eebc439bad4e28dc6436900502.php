<?php $__env->startSection('content'); ?>
     
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
                      <img class="ImgCenter" src="<?php echo e(url('assets/images/1600855433ajax-loader.gif')); ?>">
                      <span id="loadChat"></span>
                  </div>
               </div>
            </nav>
         </div>
          
         <span class="university-list">
         <?php if($p==1): ?>
            <?php echo $__env->make('user.buy-a-team', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  
         <?php else: ?>
            <?php echo $__env->make('user.join-a-league', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>                                       
         <?php endif; ?>
         </span>
          
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
                                <form id="userProfilePicture" method="POST" data="<?php echo e(route('user.UpdatePhoto')); ?>" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <?php echo e(csrf_field()); ?>

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
        
        
        <?php $__env->startSection('scripts'); ?>
        <script src="<?php echo e(asset('public/assets/js/UserFuncton.js?v='.rand())); ?>"></script>        
        <script type="text/javascript">
            $(function() {
                $('body').on('click', '.pagination a', function(e) {
                    e.preventDefault();
                    $('#load a').css('color', '#dfecf6');
                    var url = $(this).attr('href');
                    filterBy(url);
                    window.history.pushState("", "", url);
                });            
            });        
            function filterBy(path='') {
                $("#ajaxloader, #ajaxcover").show();
                if(path!=''){
                  var url = path; 
                }else{
                  var url = location.href;  
                }            
                var n = url.indexOf("?");
                var country_id = $("#country_id").val();
                var education_level_id = $("#education_level_id").val();
                var grading_scheme_id = $("#grading_scheme_id").val();
                var program_level_id = $("#program_level_id").val();
                var post_secondary_cat = $("#post_secondary_cat").val();
                var post_secondary_subcat = $("#post_secondary_subcat").val();
                if(n!=-1){
                var base_url = url+"&country_id="+country_id+"&education_level_id="+education_level_id+"&grading_scheme_id="+grading_scheme_id+"&program_level_id="+program_level_id+"&post_secondary_cat="+post_secondary_cat+"&post_secondary_subcat="+post_secondary_subcat; 
                }else{
                var base_url = url+"?country_id="+country_id+"&education_level_id="+education_level_id+"&grading_scheme_id="+grading_scheme_id+"&program_level_id="+program_level_id+"&post_secondary_cat="+post_secondary_cat+"&post_secondary_subcat="+post_secondary_subcat;    
                }
                $.ajax({
                    url : base_url
                }).done(function (data) {
                    $("#ajaxloader, #ajaxcover").hide(); 
                    $('.university-list').html(data);
                }).fail(function () {
                    alert('University could not be loaded.');
                });
            }               
        </script>
        <?php $__env->stopSection(); ?>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>