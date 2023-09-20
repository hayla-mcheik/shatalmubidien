<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="rtl">
    <head>
        <?php  
            $sitInfo        = getSiteInfo();
            $siteFavicon    = $sitInfo['site_favicon'];
            $siteTitle      = $sitInfo['site_name'];
            $siteDarkLogo   = $sitInfo['site_dark_logo'];
            $siteLiteLogo   = $sitInfo['site_lite_logo'];

            $adsense_client_id  = setting('_adsense.adsense_client_id');
            $rtl                = setting('_site.rtl');
            $rtl_class          = !empty($rtl) && $rtl == 1 ? 'tk-rtl' : ''; 
            $currentURL         = url()->current();
            $siteLogo           = url('/') == $currentURL ? $siteDarkLogo : $siteLiteLogo;
        ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
      />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <?php if( !empty($title) ): ?>
            <title><?php echo e($title); ?> | <?php echo e($siteTitle); ?> </title>
        <?php else: ?>
            <title> <?php echo e(__('general.dashbaord')); ?> | <?php echo e($siteTitle); ?></title>
        <?php endif; ?>

        <?php if( !empty($page_description) ): ?>
            <meta name="description" content="<?php echo $page_description; ?>">
        <?php endif; ?>
        <?php if( !empty($siteFavicon) ): ?>
            <link rel="icon" href="<?php echo e(asset('storage/'.$siteFavicon)); ?>" type="image/x-icon">
        <?php endif; ?>
        <?php echo app('Illuminate\Foundation\Vite')([
            'public/common/css/bootstrap.min.css',
            'public/css/feather-icons.css',
            'public/css/fontawesome/nunito-font.css',
            'public/css/fontawesome/all.min.css',
            'public/common/css/select2.min.css',
            'public/common/css/jquery.mCustomScrollbar.min.css',
            'public/common/css/jquery-confirm.min.css',
        ]); ?>
        <?php echo $__env->yieldPushContent('styles'); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/main.css')); ?>">
        <?php if( !empty($rtl_class) ): ?>
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/rtl.css')); ?>">
        <?php endif; ?>
        <?php echo \Livewire\Livewire::styles(); ?>


        <?php if( ( !empty($include_menu) || !empty($site_view) ) && !empty($adsense_client_id) ): ?>
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=<?php echo e($adsense_client_id); ?>" crossorigin="anonymous"></script>
            <script>
                (adsbygoogle=window.adsbygoogle||[]).pauseAdRequests=1;
                (adsbygoogle=window.adsbygoogle||[]).push({google_ad_client: "<?php echo e($adsense_client_id); ?>", enable_page_level_ads: true});
            </script>
        <?php endif; ?>
    </head>
    <body class="font-sans antialiased <?php echo e($rtl_class); ?>">

        <div class=" bg-gray-100">
            <?php if( (empty($site_view) || !$site_view)): ?>
                <?php
                    $header_menu = [];
                    if( !empty($include_menu)){
                        $header_menu    = getHeaderMenu();
                    }
                ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => ['sitelogo' => $siteLogo,'headerMenu' => $header_menu]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sitelogo' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($siteLogo),'header_menu' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($header_menu)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php echo $__env->yieldContent('content'); ?>
            <?php if( (empty($site_view) || !$site_view)): ?>
            
                <?php
                    $footer_settings = getFooterSettings('footer_page');
                ?>
                <?php if( !empty($footer_settings) ): ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('page-builder.footer-block', ['pageId' => $footer_settings['page_id'],'blockKey' => $footer_settings['block_key'],'styleCss' => $footer_settings['style_css'],'siteView' => true,'page_id' => $footer_settings['page_id'],'block_key' => $footer_settings['block_key'],'settings' => $footer_settings['settings'],'style_css' => $footer_settings['style_css'],'site_view' => true])->html();
} elseif ($_instance->childHasBeenRendered('VdcCmRQ')) {
    $componentId = $_instance->getRenderedChildComponentId('VdcCmRQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('VdcCmRQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('VdcCmRQ');
} else {
    $response = \Livewire\Livewire::mount('page-builder.footer-block', ['pageId' => $footer_settings['page_id'],'blockKey' => $footer_settings['block_key'],'styleCss' => $footer_settings['style_css'],'siteView' => true,'page_id' => $footer_settings['page_id'],'block_key' => $footer_settings['block_key'],'settings' => $footer_settings['settings'],'style_css' => $footer_settings['style_css'],'site_view' => true]);
    $html = $response->html();
    $_instance->logRenderedChild('VdcCmRQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <?php echo app('Illuminate\Foundation\Vite')([
            'public/common/js/jquery-confirm.min.js',
        ]); ?>
        
        <script src="<?php echo e(asset('common/js/jquery.min.js')); ?>"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
          </script>
          <script>
              const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
      nav:false,
      autoplay:true,
      autoplay: {
          delay: 1000, // Change this value to make it faster (e.g., 1000ms = 1 second)
        },
      
      
            // Breakpoints
            breakpoints: {
            // When window width is <= 576px
            576: {
              slidesPerView: 1, // Number of slides to show
              spaceBetween: 20, // Space between slides
            },
            // When window width is <= 768px
            768: {
              slidesPerView: 2,
              spaceBetween: 30,
            },
            // When window width is <= 992px
            992: {
              slidesPerView: 2,
              spaceBetween: 40,
            },
            // You can add more breakpoints as needed
          },
      });
      const swiperthree = new Swiper('.swiperthree', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
      nav:false,
      autoplay:true,
      autoplay: {
          delay: 1000, // Change this value to make it faster (e.g., 1000ms = 1 second)
        },
      
            // Breakpoints
            breakpoints: {
            // When window width is <= 576px
            576: {
              slidesPerView: 1, // Number of slides to show
              spaceBetween: 20, // Space between slides
            },
            // When window width is <= 768px
            768: {
              slidesPerView: 2,
              spaceBetween: 30,
            },
            // When window width is <= 992px
            992: {
              slidesPerView: 3,
              spaceBetween: 40,
            },
            // You can add more breakpoints as needed
          },
      });
      const swiperclient = new Swiper('.swiperclient', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
      nav:false,
      autoplay:true,
      autoplay: {
          delay: 1000, // Change this value to make it faster (e.g., 1000ms = 1 second)
        },
      
      
            // Breakpoints
            breakpoints: {
            // When window width is <= 576px
            576: {
              slidesPerView: 1, // Number of slides to show
              spaceBetween: 20, // Space between slides
            },
            // When window width is <= 768px
            768: {
              slidesPerView: 2,
              spaceBetween: 30,
            },
            // When window width is <= 992px
            992: {
              slidesPerView: 6,
              spaceBetween: 40,
            },
            // You can add more breakpoints as needed
          },
      });
          </script>
        <?php echo $__env->yieldPushContent('scripts'); ?>
        <?php echo $__env->make('layouts.footer_scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\shatal\shathalmubdiein-web-panel-main\resources\views/layouts/app.blade.php ENDPATH**/ ?>