
@if( !empty($style_css) )
<style>{{ '.'.$block_key.$style_css }}</style>
@endif
<section class=" tk-projectsection {{ $block_key }} {{$custom_class}}" @if(!$site_view) wire:click="$emit('getBlockSetting', '{{ $block_key }}')" @endif>

	<div wire:loading.class="tk-section-preloader">
		@if(!$site_view)
            <div class="preloader-outer" wire:loading>
                <div class="tk-preloader">
                    <img class="fa-spin" src="{{ asset('images/loader.png') }}">
                </div>1
            </div>
        @endif
   

<section>
	@if(!empty($projects))
	<div class="card-middle mt-5 mb-5" >
	<div class="container-fluid">
		<div class="row">
			@if(!$projects->isEmpty())
			@foreach($projects as $single)
			<div class="col-md-4 col-12"   data-aos="fade-up"
			data-aos-duration="1000"
			data-aos-delay="200"
			data-aos-offset="100">
				<div class="card">
					<div class="card-home-desc">
						<h5>{{ $single->project_title }}</h5>
					<p></p>{{ $single->project_small_description }}
					</div>
				</div>
			</div>
			@endforeach
			@endif
		
		</div>
		</div>
	</div>
	@endif






