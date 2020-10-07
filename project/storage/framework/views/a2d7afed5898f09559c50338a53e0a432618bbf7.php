<?php $__env->startSection('content'); ?>

            <div class="content-area">

              <div class="add-product-content">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="product-description">
                      <div class="body-area">
                        <?php echo $__env->make('includes.admin.form-error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  
                      <form id="geniusformdata" action="<?php echo e(route('admin-sb-store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading"> <?php echo e('Page Name'); ?> </h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <select class="input-field" name="page" >
                               <option value="home"> Home  </option>    
                               <?php
                               $pages = Helper::pages();
                               ?>
                               <?php if($pages): ?> 
                               <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <option value="<?php echo e($r->slug); ?>"> <?php echo e($r->title); ?>  </option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               <?php endif; ?>
                            </select>                            
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading"> <?php echo e('Content Type'); ?> </h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <select class="input-field" name="type" >
                               <option value="Large"> Large  </option>
                               <option value="B1"> Banner -1  </option>
                               <option value="B2"> Banner -2  </option>
                               <option value="B3"> Banner -3  </option>
                               <option value="B4"> Banner -4  </option>
                               <option value="B5"> Banner -5  </option>
                               <option value="B6"> Banner -6  </option>
                               <option value="B7"> Banner -7  </option>
                               <option value="Testi"> Testimonial  </option>
                               <option value="Slider"> Slider  </option>
                               <option value="Ext"> Extra Content  </option>
                            </select>                            
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading"> <?php echo e('Section Type'); ?> </h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <select class="input-field" name="part" >
                               <option value="P1"> Part -1  </option>
                               <option value="P2"> Part -2  </option>
                               <option value="P3"> Part -3  </option>
                               <option value="P4"> Part -4  </option>
                               <option value="P5"> Part -5  </option>
                            </select>                            
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading"><?php echo e(__('Current Featured Image')); ?> *</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <div class="img-upload full-width-img">
                                <div id="image-preview" class="img-preview" style="background: url(<?php echo e(asset('assets/admin/images/upload.png')); ?>);">
                                    <label for="image-upload" class="img-label" id="image-label"><i class="icofont-upload-alt"></i><?php echo e(__('Upload Image')); ?></label>
                                    <input type="file" name="photo" class="img-upload" id="image-upload">
                                  </div>
                                  <p class="text"><?php echo e(__('Prefered Size: (1280x600) or Square Sized Image')); ?></p>
                            </div>

                          </div>
                        </div>

                        

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading"> <?php echo e('Title'); ?> </h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="title" placeholder="Title" value="">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading"> <?php echo e('Description'); ?> </h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <textarea class="nic-edit-p" name="descp" placeholder="Description"></textarea>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading"> <?php echo e('Extra Text'); ?> </h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <textarea class="input-field" name="extraTxt" placeholder="Extra Text"></textarea>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading"> <?php echo e('Section 1'); ?> </h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <textarea class="input-field nic-edit-p" name="section1" placeholder="Section 1"></textarea>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading"> <?php echo e('Section 2'); ?> </h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <textarea class="input-field nic-edit-p" name="section2" placeholder="Section 2"></textarea>
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading"><?php echo e(__('Link')); ?> *</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="link" placeholder="<?php echo e(__('Link')); ?>" value="">
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading"><?php echo e(__('Extra Image-1')); ?> *</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <div class="img-upload">                                
                                    <label for="image-upload" class="img-label" id="image-label-1"><i class="icofont-upload-alt"></i></label>
                                    <input type="file" name="extimg" class="img-upload" >
                                  </div>                                  
                            </div>
                          </div>
                          
                          
                          <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading"><?php echo e(__('Extra Image-2')); ?> *</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <div class="full-width-img">                                
                                    <label for="image-upload" class="img-label" id="image-label-1"><i class="icofont-upload-alt"></i></label>
                                    <input type="file" name="extimg2" class="img-upload" >
                                  </div>                                  
                            </div>
                          </div>
                        

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <button class="addProductSubmit-btn" type="submit"><?php echo e(__('Create Banner')); ?></button>
                          </div>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.load', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>