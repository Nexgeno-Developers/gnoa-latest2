@php
$testimonial = DB::table('testimonials')->orderBy('id', 'desc')->get();
@endphp

<!------------========== Testimonials ===============-------------->
<section class="social">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="social_icons"data-aos="fade-up" data-aos-once="true">
                <a href="{{ get_settings('twitter') }}"  aria-label="Twitter" class="icon" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="{{ get_settings('linkedin') }}" aria-label="LinkedIn" class="icon"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="{{ get_settings('facebook') }}" aria-label="Facebook" class="icon"><i class="fa fa-facebook" aria-hidden="true"></i></a>
             </div>
          </div>
       </div>
    </div>
   </section>
   <!--Social Icons End-->
   <!--Testimonials Start-->

   @if(count($testimonial) > 0)
      <section class="testimonial">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h4 class="color_heading text-center"data-aos="fade-up" data-aos-once="true">OUR TESTIMONIALS</h4>
               <h2 class="main_heading text-center mb-3"data-aos="fade-up" data-aos-once="true">What our client says about us</h2>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="owl-carousel owl-theme">

                  @foreach ($testimonial as $row)
                     
                     <div class="item">
                        <div class="test_box"data-aos="fade-up" data-aos-once="true">
                           <div class="test_quote_box"data-aos="fade-up" data-aos-once="true">
                              <img
                                 src="{{ asset('/assets/frontend/images/qoute.png') }}"
                                 alt="testimonial quote"
                                 class="test_quote"
                                 />
                           </div>
                           <p class="desc text_justify"data-aos="fade-up" data-aos-once="true">
                              {{ $row->comment }}
                           </p>
                           <h4 class="test_name"data-aos="fade-up" data-aos-once="true">{{ $row->name }}</h4>
                        </div>
                     </div>

                  @endforeach

               </div>
            </div>
         </div>
      </div>
      </section>
   @endif

<!------------============== Testimonials ================----------------->