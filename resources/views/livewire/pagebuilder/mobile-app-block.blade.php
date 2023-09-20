
<section>
    @if( !empty($style_css) )
        <style>{{ '.'.$block_key.$style_css }}</style>
    @endif
    <div wire:loading.class="tk-section-preloader">
        @if(!$site_view)
            <div class="preloader-outer" wire:loading>
                <div class="tk-preloader">
                    <img class="fa-spin" src="{{ asset('images/loader.png') }}">
                </div>
            </div>
        @endif
        <section>
        <div class="card-slider-relative">
            <div class="container-fluid mt-50 mb-50 pt-5">
                <div class="row">
    
    <!-- Slider main container -->
    <div class="swiper swiper-with-blue">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="card-slider">
                <div class="card-slider-desc">
                    <a href="{{ url('create-project') }}">
                        <h2>انشر وظيفة</h2>
                    </a>
                    <p>انشر وظيفة مجانا و باسهل طريقة. ما عليك سوى ملء العنوان والوصف الميزانية والعطاءات التنافسية في غضون دقائق.</p>
                </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card-slider">
                <div class="card-slider-desc">
                    <a href="{{ url('search-sellers') }}">
            <h2>اختر المستقلين</h2>
                    </a>
                <p>لا وظيفة كبيرة جدا أو صغيرة جدا لدينا مترجمون مستقلون لوظائف أي حجم للميزانية ، عبر 1800+ المهارات.لا توجد مهمة معقدة للغاية يمكن إنجازه!</p>
                </div>
            </div>
          </div>
    
          
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      
    
      </div>
    
                </div>
                </div>
                <div class="img-slider-blue">
                    <img src="{{ asset('images/img-blue.png') }}" class="width-50">
                    <div class="text-img-slider">
                        <img src="{{ asset('images/small-img.png') }}" class="w-50 d-flex">
    
                        <h2 class="d-none d-md-block">بحاجة الى شيء ما؟</h2>
                    </div>
                </div>
            </div>  
    
    
    
    </section>
    </div>
</section>


