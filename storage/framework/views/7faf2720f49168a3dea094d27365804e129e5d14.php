
<?php $__env->startSection('title'); ?>
Partner
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="row">
            <div class="col-md-12">


                <div class="card">
                    <div class="card-header">
                        <h4>Partner
                            <a href="<?php echo e(url('admin/partner/create')); ?>" class="btn btn-primary btn-sm float-end">
                                Add Partner</a></h4>
</div>

<div class="card-body">
    <div class="table-responsive">
        <table class="table tb-table tb-dbholder">
            <thead>
    <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Url</th>
           <th>Image</th>
            <th>Action</th>
</thead>
<tbody>

<?php $__currentLoopData = $partner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <td data-label="<?php echo e(__('#' )); ?>"><?php echo e($partner->id); ?></td>
    <td data-label="<?php echo e(__('Title' )); ?>"><?php echo e($partner->title); ?></td>
    <td data-label="<?php echo e(__('Url' )); ?>"><?php echo e($partner->url); ?></td>
    <td data-label="<?php echo e(__('Image' )); ?>">
        <?php
        if(!empty($partner->image)){
            $image_url      = getProfileImageURL($partner->image, '100x100');
        }
    ?>
        <img src="<?php echo e(asset($image_url)); ?>" style="width:70px; height:70px;" alt="Slider" >
    </td>
    <td>
        <a href="<?php echo e(url('admin/partner/'.$partner->id.'/edit')); ?>" class="btn btn-success" >Edit</a>

    </td>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>
</table>
    </div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shatal\shathalmubdiein-web-panel-main\resources\views/admin/partner/index.blade.php ENDPATH**/ ?>