
@if( !empty($style_css) )
<style>{{ '.'.$block_key.$style_css }}</style>
@endif
<section class=" tk-projectsection">

	<div wire:loading.class="tk-section-preloader">
		@if(!$site_view)
            <div class="preloader-outer" wire:loading>
                <div class="tk-preloader">
                    <img class="fa-spin" src="{{ asset('images/loader.png') }}">
                </div>1
            </div>
        @endif

        <section>
            <div class="container pt-100"   data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="200"
            data-aos-offset="100">
                <div class="client-logos mt-5 mb-5 ">
                     <!-- Slider main container -->
      <div class="swiperclient">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          @foreach($partner as $partner)
          <!-- Slides -->
          <div class="swiper-slide swiper-slide-logo">
             <div class="card-sliderr">
                <div class="logo-client">
                   <img src="{{ asset($partner->image) }}" class="img-fluid">
                </div>
             </div>
          </div>
          @endforeach
          

        </div>

      
    
      </div>
                </div>
            </div>
          </section>


</section>
