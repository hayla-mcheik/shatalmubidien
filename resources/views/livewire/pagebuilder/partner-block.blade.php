
<section>
	<div  @if(!$site_view) wire:loading.class="tk-section-preloader" @endif>
		@if( !empty($style_css) )
			<style>{{ '.'.$block_key.$style_css }}</style>
		@endif
		@if(!$site_view)
			<div class="preloader-outer" wire:loading>
				<div class="tk-preloader">
					<img class="fa-spin" src="{{ asset('images/loader.png') }}">
				</div>
			</div>
		@endif
        <section>
            <div class="container pt-5"   data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="200"
            data-aos-offset="100">
                <div class="client-logos mt-5 mb-5 ">
                     <!-- Slider main container -->
      <div class="swiperclient">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          @foreach($partner as $partnerItem)
          <!-- Slides -->
          <div class="swiper-slide swiper-slide-logo">
             <div class="card-sliderr">
                <div class="logo-client">
                  <a href={{ $partnerItem->url }}>
                    <img src="{{ asset($partnerItem->image) }}" alt="{{ $partnerItem->title }}" class="img-fluid">

                  </a>
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
	</div>
</section>

@push('styles')
	@vite([
        'public/pagebuilder/css/venobox.min.css', 
    ])
@endpush
@push('scripts')
	<script defer src="{{ asset('pagebuilder/js/venobox.min.js') }}"></script>
	<script>
		document.addEventListener('livewire:load', function () {
			initVenoBox();
		});
		
		function initVenoBox(){
			let venobox = document.querySelector(".tk-themegallery");
			if (venobox !== null) {
				jQuery(".tk-themegallery").venobox({
					spinner : 'cube-grid',
				});
			}
		}
		
	</script>
@endpush
