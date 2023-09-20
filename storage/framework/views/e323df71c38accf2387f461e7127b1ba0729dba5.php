
<?php if( !empty($style_css) ): ?>
<style><?php echo e('.'.$block_key.$style_css); ?></style>
<?php endif; ?>
<section class=" tk-projectsection">

	<div wire:loading.class="tk-section-preloader">
		<?php if(!$site_view): ?>
            <div class="preloader-outer" wire:loading>
                <div class="tk-preloader">
                    <img class="fa-spin" src="<?php echo e(asset('images/loader.png')); ?>">
                </div>1
            </div>
        <?php endif; ?>

        <section>
            <div class="container pt-100"   data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="200"
            data-aos-offset="100">
                <div class="client-logos mt-5 mb-5 ">
                     <!-- Slider main container -->
      <div class="swiperclient">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <?php $__currentLoopData = $partner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <!-- Slides -->
          <div class="swiper-slide swiper-slide-logo">
             <div class="card-sliderr">
                <div class="logo-client">
                   <img src="<?php echo e(asset($partner->image)); ?>" class="img-fluid">
                </div>
             </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          

        </div>

      
    
      </div>
                </div>
            </div>
          </section>


</section>
<?php /**PATH C:\xampp\htdocs\shatal\shathalmubdiein-web-panel-main\resources\views/front-end/partner.blade.php ENDPATH**/ ?>