
<?php if( !empty($style_css) ): ?>
<style><?php echo e('.'.$block_key.$style_css); ?></style>
<?php endif; ?>
<section class=" tk-projectsection <?php echo e($block_key); ?> <?php echo e($custom_class); ?>" <?php if(!$site_view): ?> wire:click="$emit('getBlockSetting', '<?php echo e($block_key); ?>')" <?php endif; ?>>

	<div wire:loading.class="tk-section-preloader">
		<?php if(!$site_view): ?>
            <div class="preloader-outer" wire:loading>
                <div class="tk-preloader">
                    <img class="fa-spin" src="<?php echo e(asset('images/loader.png')); ?>">
                </div>1
            </div>
        <?php endif; ?>
   

<section>
	<?php if(!empty($projects)): ?>
	<div class="card-middle mt-5 mb-5" >
	<div class="container-fluid">
		<div class="row">
			<?php if(!$projects->isEmpty()): ?>
			<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-4 col-12"   data-aos="fade-up"
			data-aos-duration="1000"
			data-aos-delay="200"
			data-aos-offset="100">
				<div class="card">
					<div class="card-home-desc">
						<h5><?php echo e($single->project_title); ?></h5>
					<p></p><?php echo e($single->project_small_description); ?>

					</div>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>
		
		</div>
		</div>
	</div>
	<?php endif; ?>






<?php /**PATH C:\xampp\htdocs\shatal\shathalmubdiein-web-panel-main\resources\views/livewire/pagebuilder/projects-block.blade.php ENDPATH**/ ?>