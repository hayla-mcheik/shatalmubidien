<div class="col-lg-4 col-md-12 tb-md-40">
    <div class="tb-dbholder tb-packege-setting">
        <div class="tb-dbbox tb-dbboxtitle">
            <?php if($editMode): ?>
                <h5> <?php echo e(__('languages.update_language')); ?></h5>
            <?php else: ?> 
                <h5> <?php echo e(__('languages.add_language')); ?></h5>
            <?php endif; ?>
        </div>
        <div class="tb-dbbox">
            <form class="tk-themeform">
                <fieldset>
                    <div class="tk-themeform__wrap">
                        <div class="form-group">
                            <label class="tb-label"><?php echo e(__('languages.name')); ?></label>
                            <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> tk-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> "  wire:model.defer="name" required placeholder="<?php echo e(__('languages.name')); ?>">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="tk-errormsg">  
                                    <span><?php echo e($message); ?></span> 
                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label class="tb-label"><?php echo e(__('general.description')); ?></label>
                            <textarea class="form-control" placeholder="<?php echo e(__('general.description')); ?>" wire:model.defer="description" id=""></textarea>
                        </div>
                        <?php if($editMode): ?>
                            <div class="form-group">
                                <label class="tb-label"><?php echo e(__('general.status')); ?>:</label>
                                <div class="tb-email-status">
                                    <span><?php echo e(__('languages.language_status')); ?></span>
                                    <div class="tb-switchbtn">
                                        <label for="tb-emailstatus" class="tb-textdes"><span id="tb-textdes"><?php echo e($status == 'active' ? __('general.active') : __('general.deactive')); ?></span></label>
                                        <input class="tb-checkaction" <?php echo e($status == 'active' ? 'checked' : ''); ?> type="checkbox" id="tb-emailstatus">
                                    </div>
                                </div>
                                <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                                    <div class="tk-errormsg">
                                        <span><?php echo e($message); ?></span> 
                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        <?php endif; ?>
                        <div class="form-group tb-dbtnarea">
                            <a href="javascript:void(0);" wire:click.prevent="update" class="tb-btn "> 
                                <?php if($editMode): ?> 
                                    <?php echo e(__('languages.update_language')); ?>

                                <?php else: ?>
                                    <?php echo e(__('general.add_now')); ?>

                                <?php endif; ?>
                            </a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\shatal\shathalmubdiein-web-panel-main\resources\views\livewire\admin\taxonomies\languages\update.blade.php ENDPATH**/ ?>