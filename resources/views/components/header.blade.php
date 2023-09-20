@props(['sitelogo', 'header_menu'])
@php

    $currentURL = url()->current();
    $currentURLFaq = url()->current() . '/faq';
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
@endphp
<!-- HEADER START -->
<header class="d-none d-lg-block">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">

        <div class="container-fluid">

            <a class="navbar-brand" href="{{ url('/')}}"><img src="{{asset('images/logo.png')}}" alt="{{ __('general.logo') }}" /></a>
            @if( Auth::guest() || ( Auth::user() && !empty($top_menue) ))
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @endif
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav-right">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $currentURLFaq }}">كيف يعمل</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('search-projects') }}">تصفح الوظيفة</a>
                    </li>       
                </ul>
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">تسجيل دخول</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">انشاء حساب جديد</a>
                    </li>       
                </ul>
            </div>
        </div>
  
    </nav>
    <div class="bottom-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            @if( Auth::user() && !empty($top_menue))
          <div id="tenavbar" class="space-between">
            
            <ul class="bottom-ul mb-2 mt-2">
                @if( !empty($header_menu) && $header_menu->count() > 0 ) 
                @foreach( $header_menu as $menu)
                    <x-menu-item :menu="$menu" />
                @endforeach
                @endif
            </ul >    
            <ul class="bottom-ul mb-2 mt-2">
              <li class="nav-item nav-search-relative position-relative d-flex mx-5">
                <input type="text" class="form-control" placeholder="البحث...">
                <img src="{{ asset('images/Search.png') }}" width="w-10">
                    </li>
            </ul> 
</div>



@endif

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
                        @if( !empty($header_menu) && $header_menu->count() > 0 ) 
                        @foreach( $header_menu as $menu)
                        <li class="nav-item">
                            <x-menu-item :menu="$menu" />
                        </li>
                        @endforeach
                        @endif
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
    </div>