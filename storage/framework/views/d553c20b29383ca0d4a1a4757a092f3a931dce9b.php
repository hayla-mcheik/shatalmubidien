
<?php $__env->startSection('title'); ?>
Latest News
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<script>
        var desc = function(event, id) {
            var output = document.getElementById(id);
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
<div class="row">
    <div class="col-md-12">                                                     
        <div class="card">
            <div class="card-header">
                <h3>Edit Partner
                    <a href="<?php echo e(url('admin/partner/edit')); ?>" class="btn btn-danger btn-sm float-end">
                        Back
</a>
                </h3>
</div>

<div class="card-body">

<?php if($errors->any()): ?>
<div class="alert alert-warning">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div><?php echo e($error); ?> </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>

<form action="<?php echo e(url('admin/partner/'.$partner->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="row">


<div class="mb-3">
<label>Title</label>
<input type="text" name="title" value="<?php echo e($partner->title); ?>" class="form-control"/>
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
    <input type="text" name="url" value="<?php echo e($partner->url); ?>" class="form-control"/>
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
<label>Image</label>
                                                <br>
                                                <div align="center">
                                                    <img id="img<?php echo e($partner->id); ?>"
                                                        src="<?php echo e(asset($partner->image)); ?>" alt=""
                                                        style="width: 50%">
                                                </div>
                                                <br>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" accept="image/*"
                                                        id="customFile"
                                                        onchange="desc(event,'img<?php echo e($partner->id); ?>');"
                                                        name="image">
                                           
                                                    <label class="custom-file-label" for="customFile">Choose
                                                        file...</label>
                                                </div>
                                                <br>
</div>
<div>



</div>


<div class="col-md-12 mb-3">
    <button type="btn" class="btn btn-primary float-end">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shatal\shathalmubdiein-web-panel-main\resources\views/admin/partner/edit.blade.php ENDPATH**/ ?>