
<?php $__env->startSection('title'); ?>
Partner
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Partner
                    <a href="<?php echo e(url('admin/partner/create')); ?>" class="btn btn-danger btn-sm float-end">
                        Back
</a>
                </h3>
</div>

<div class="card-body">


<form action="<?php echo e(url('admin/partner')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row">


<div class="mb-3">
<label>Title</label>
<input type="text" name="title"  class="form-control"/>
<?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-white"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="mb-3">
    <label>Url</label>
    <input type="text" name="url"  class="form-control"/>
    <?php $__errorArgs = ['url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-white"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

<div class="mb-3">
<label>Upload Image </label>
<input type="file" name="image" class="form-control" required>
</div>


<div class="col-md-12 mb-3">
    <button type="submit" class="btn btn-primary float-end">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shatal\shathalmubdiein-web-panel-main\resources\views/admin/partner/create.blade.php ENDPATH**/ ?>