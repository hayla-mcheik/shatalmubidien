
<section>
	<div  <?php if(!$site_view): ?> wire:loading.class="tk-section-preloader" <?php endif; ?>>
		<?php if( !empty($style_css) ): ?>
			<style><?php echo e('.'.$block_key.$style_css); ?></style>
		<?php endif; ?>
		<?php if(!$site_view): ?>
			<div class="preloader-outer" wire:loading>
				<div class="tk-preloader">
					<img class="fa-spin" src="<?php echo e(asset('images/loader.png')); ?>">
				</div>
			</div>
		<?php endif; ?>
        <section>
            <div class="container pt-5"   data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="200"
            data-aos-offset="100">
                <div class="client-logos mt-5 mb-5 ">
                     <!-- Slider main container -->
      <div class="swiperclient">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <?php $__currentLoopData = $partner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partnerItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <!-- Slides -->
          <div class="swiper-slide swiper-slide-logo">
             <div class="card-sliderr">
                <div class="logo-client">
                  <a href=<?php echo e($partnerItem->url); ?>>
                    <img src="<?php echo e(asset($partnerItem->image)); ?>" alt="<?php echo e($partnerItem->title); ?>" class="img-fluid">

                  </a>
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
	</div>
</section>

<?php $__env->startPush('styles'); ?>
	<?php echo app('Illuminate\Foundation\Vite')([
        'public/pagebuilder/css/venobox.min.css', 
    ]); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
	<script defer src="<?php echo e(asset('pagebuilder/js/venobox.min.js')); ?>"></script>
	<script>
		document.addEventListener('livewire:load', function () {
			initVenoBox();
		});
		
		function initVenoBox(){
			let venobox = document.querySelector(".tk-themegallery");
			if (venobox !== null) {
				jQuery(".tk-themegallery").venobox({
					spinner : 'cube-grid',
				});
			}
		}
		
	</script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\shatal\shathalmubdiein-web-panel-main\resources\views/livewire/pagebuilder/partner-block.blade.php ENDPATH**/ ?>