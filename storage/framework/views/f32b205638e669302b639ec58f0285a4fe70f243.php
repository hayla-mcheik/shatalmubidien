<div x-data="{ open: false}">
    <div  class="tk-hastippy" x-on:mouseover="open = true" x-on:mouseleave="open = false">
        <i class="icon-check-circle"></i> 
        <span class="tk-tippycontent" x-show="open" style="display: none;">
            <?php echo e(__('general.verified_user')); ?>

        </span>
    </div>
</div><?php /**PATH C:\xampp\htdocs\shatal\shathalmubdiein-web-panel-main\resources\views/components/verified-tippy.blade.php ENDPATH**/ ?>