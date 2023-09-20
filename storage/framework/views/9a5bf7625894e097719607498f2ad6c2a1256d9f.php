<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['sitelogo', 'header_menu']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['sitelogo', 'header_menu']); ?>
<?php foreach (array_filter((['sitelogo', 'header_menu']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php

    $currentURL = url()->current();
    if( url('/') == $currentURL ){
        $class = '';
    } 
    $logo = url('/') == $currentURL ? 'images/logo.png' : 'images/logo.png';
    $userInfo   = getUserInfo();
    $userRole   = !empty( $userInfo['user_role'] ) ? $userInfo['user_role'] : '';
    $top_menue  = [];
    
    if( in_array($userRole, ['admin','seller']) ){
        $top_menue['search-projects']   = __('navigation.explore_all_projects');
        if($userRole == 'seller'){
            $top_menue['dashboard']     = __('navigation.dashboard');
        }
        if($userRole == 'admin'){
            $top_menue['search-sellers'] = __('navigation.search_seller');
            $top_menue['search-gigs']    = __('navigation.search_gigs');
        }
    }
?>
<!-- HEADER START -->
<header class="d-none d-lg-block">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">

        <div class="container-fluid">

            <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('images/logo.png')); ?>" alt="<?php echo e(__('general.logo')); ?>" /></a>
            <?php if( Auth::guest() || ( Auth::user() && !empty($top_menue) )): ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php endif; ?>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav-right">
                    <?php if( !empty($footer_menu) && $footer_menu->count() > 0 ): ?>  
                            <?php $__currentLoopData = $footer_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li  class="nav-item">
                                    <a href="<?php echo e(!empty($menu->route) ? url($menu->route ) : 'javascript:;'); ?>"><?php echo ucfirst($menu->label); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
                <?php endif; ?>
       
                </ul>
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>">تسجيل دخول</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('register')); ?>">انشاء حساب جديد</a>
                    </li>       
                </ul>
            </div>
        </div>
  
    </nav>
    <div class="bottom-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            <?php if( Auth::user() && !empty($top_menue)): ?>
          <div id="tenavbar" class="space-between">
            
            <ul class="bottom-ul mb-2 mt-2">
                <?php if( !empty($header_menu) && $header_menu->count() > 0 ): ?> 
                <?php $__currentLoopData = $header_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu-item','data' => ['menu' => $menu]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['menu' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($menu)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </ul >    
            <ul class="bottom-ul mb-2 mt-2">
              <li class="nav-item nav-search-relative position-relative d-flex mx-5">
                <input type="text" class="form-control" placeholder="البحث...">
                <img src="<?php echo e(asset('images/Search.png')); ?>" width="w-10">
                    </li>
            </ul> 
</div>

<?php elseif(Auth::guest()): ?>

<div id="tenavbar" class="space-between">
            
    <ul class="bottom-ul mb-2 mt-2">
        <?php if( !empty($header_menu) && $header_menu->count() > 0 ): ?> 
        <?php $__currentLoopData = $header_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="nav-item">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu-item','data' => ['menu' => $menu]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['menu' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($menu)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </ul >    
    <ul class="bottom-ul mb-2 mt-2">
      <li class="nav-item nav-search-relative position-relative d-flex mx-5">
        <input type="text" class="form-control" placeholder="البحث...">
        <img src="<?php echo e(asset('images/Search.png')); ?>" width="w-10">
            </li>
    </ul> 
</div>

<?php endif; ?>
</div>
        </div>
    </div>
    </div>
    </header>

    <div class="mobile-header d-block d-lg-none">
      <div class="container-fluid">
 
          <nav class="navbar space-between d-flex navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid space-between">
                <a class="navbar-brand" href="#">
            <img src="/assets/img/logo.png">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav-block d-block">
 
                        <li class="nav-item">
                          <a class="nav-link" href="#">ابجث عن وظيفة</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">وظف مستقلين</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">احصل على افكار</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">احصل على افكار</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">عن المشروع</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">الموارد</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">كيف يعمل</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">تصفح الوظيفة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">تسجيل دخول</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">انشاء حساب جديد</a>
                    </li>
                    <li class="nav-item nav-search-relative position-relative d-flex">
                      <input type="text" class="form-control" placeholder="البحث...">
                      <img src="/assets/img/Search.png" width="w-10">
                          </li>
                    </ul>
                </div>
           
        </nav>
        </div>
      </div>
    </div><?php /**PATH C:\xampp\htdocs\shatal\shathalmubdiein-web-panel-main\resources\views\components\header.blade.php ENDPATH**/ ?>