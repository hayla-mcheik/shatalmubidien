<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        @php  
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
        @endphp
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
      />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @if( !empty($title) )
            <title>{{ $title }} | {{ $siteTitle }} </title>
        @else
            <title> {{ __('general.dashbaord') }} | {{ $siteTitle }}</title>
        @endif

        @if( !empty($page_description) )
            <meta name="description" content="{!! $page_description !!}">
        @endif
        @if( !empty($siteFavicon) )
            <link rel="icon" href="{{ asset('storage/'.$siteFavicon) }}" type="image/x-icon">
        @endif
        @vite([
            'public/common/css/bootstrap.min.css',
            'public/css/feather-icons.css',
            'public/css/fontawesome/nunito-font.css',
            'public/css/fontawesome/all.min.css',
            'public/common/css/select2.min.css',
            'public/common/css/jquery.mCustomScrollbar.min.css',
            'public/common/css/jquery-confirm.min.css',
        ])
        @stack('styles')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
        @if( !empty($rtl_class) )
            <link rel="stylesheet" type="text/css" href="{{ asset('css/rtl.css') }}">
        @endif
        @livewireStyles

        @if( ( !empty($include_menu) || !empty($site_view) ) && !empty($adsense_client_id) )
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client={{$adsense_client_id}}" crossorigin="anonymous"></script>
            <script>
                (adsbygoogle=window.adsbygoogle||[]).pauseAdRequests=1;
                (adsbygoogle=window.adsbygoogle||[]).push({google_ad_client: "{{$adsense_client_id}}", enable_page_level_ads: true});
            </script>
        @endif
    </head>
    <body class="font-sans antialiased {{ $rtl_class }}">

        <div class=" bg-gray-100">
            @if( (empty($site_view) || !$site_view))
                @php
                    $header_menu = [];
                    if( !empty($include_menu)){
                        $header_menu    = getHeaderMenu();
                    }
                @endphp
                <x-header :sitelogo="$siteLogo" :header_menu="$header_menu" />
            @endif

            @yield('content')
            @if( (empty($site_view) || !$site_view))
            
                @php
                    $footer_settings = getFooterSettings('footer_page');
                @endphp
                @if( !empty($footer_settings) )
                    <livewire:page-builder.footer-block 
                        :page_id="$footer_settings['page_id']" 
                        :block_key="$footer_settings['block_key']" 
                        :settings="$footer_settings['settings']" 
                        :style_css="$footer_settings['style_css']" 
                        :site_view="true"
                    />
                @endif
            @endif
        </div>

        @vite([
            'public/common/js/jquery-confirm.min.js',
        ])
        
        <script src="{{ asset('common/js/jquery.min.js') }}"></script>
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
        @stack('scripts')
        @include('layouts.footer_scripts')
        @livewireScripts
    </body>
</html>
