
 @if( !empty($style_css) )
        <style>{{ '.'.$block_key.$style_css }}</style>
    @endif

        <section>
            <div class="third-card mt-50"  data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="200"
            data-aos-offset="100">
              <div class="container-fluid">
                @if( !empty($categories) && !$categories->isEmpty() )
                <div class="row">


                    @foreach( $categories as $single )
                  <div class="col-md-4 col-12 mt-2">
                    <div class="card-slider card-zoom">
                      <div class="card-slider-desc">
                       <h2>{!! $single->name !!}</h2>
                     <p>20 ألف مستقل</p>
                      </div>
                  </div>
                  </div>
@endforeach



                  </div>


                  @endif
                </div>
              </div>
            </div>
          </section>
 
</section>
   