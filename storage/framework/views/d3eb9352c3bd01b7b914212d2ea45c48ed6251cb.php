
 <?php if( !empty($style_css) ): ?>
        <style><?php echo e('.'.$block_key.$style_css); ?></style>
    <?php endif; ?>

        <section>
            <div class="third-card mt-50"  data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="200"
            data-aos-offset="100">
              <div class="container-fluid">
                <?php if( !empty($categories) && !$categories->isEmpty() ): ?>
                <div class="row">


                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-md-4 col-12 mt-2">
                    <div class="card-slider card-zoom">
                      <div class="card-slider-desc">
                       <h2><?php echo $single->name; ?></h2>
                     <p>20 ألف مستقل</p>
                      </div>
                  </div>
                  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                  </div>


                  <?php endif; ?>
                </div>
              </div>
            </div>
          </section>
 
</section>
   <?php /**PATH C:\xampp\htdocs\shatal\shathalmubdiein-web-panel-main\resources\views/livewire/pagebuilder/categories-block.blade.php ENDPATH**/ ?>