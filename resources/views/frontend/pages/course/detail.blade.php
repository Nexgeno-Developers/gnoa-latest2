@extends('frontend.layouts.app')

@section('page.title', "$detail->meta_title")

@section('page.description', "$detail->meta_description")

@section('page.type', 'practice area')

@section('page.publish_time', "$detail->updated_at")


@section('page.content')

<style>
    .course_other a
    {
        text-decoration:none !important;
    }
</style>

<!-------------------------- courses details Section--------------------- -->

    <div class="course_hero" data-aos-once="true" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="left_wrapper">
                        <h2 class="heading mb-lg-4 mb-2 arsenica_fonts" data-aos-once="true" data-aos="fade-up">{{ $detail->title }}
                        </h2>
                        <p class="text_justify pe-lg-5 pe-0" data-aos-once="true" data-aos="fade-up">
                            {{ $detail->short_description }}
                        </p>

                        <div class="data_lang mb-2">
                            <!--<p>-->
                            <!--    <span><img src="assets/frontend/images/calender.png" alt="" /></span>-->
                            <!--    <span>{{ $detail->updated_at->format('jS F Y') }}</span>-->
                            <!--</p>-->
                            <p>
                                <span><img src="assets/frontend/images/lang.png" alt="" /></span>
                                @php
                                    $lang = json_Decode($detail->language);
                                    $count = count($lang);
                                    $i = 1;
                                @endphp
                                <span>
                                    @foreach ($lang as $row)
                                        {{ $row }}@if ($count > $i)
                                            ,
                                        @endif
                                        @php $i++; @endphp
                                    @endforeach
                                </span>
                            </p>
                            <p class="rating_cls">Rating: <span>{{ $detail->rating }}</span>
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star-half-stroke"></i>
                            </p>
                        </div>

                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-course="{{ $detail->title }}"
                            class="enquiry_btn mt-4 aos-init aos-animate">
                            Enquire Now
                        </button>
                    </div>
                </div>
                  <div class="col-lg-4 sticky d-lg-none d-block mt-4">
                    <div class="right_wrapper courseTop">
                        <div class="course_dtimg">
                            <img src="{{ asset('storage/' . $detail->image) }}" alt="{{ $detail->alt_image }}" />
                        </div>
                        <div class="content">
                            <h3 class="course_dthed arsenica_fonts pt-3 mb-4">{{ $detail->title }}</h3>
                            <div class="common_btn3 blue_bg">
                                <a target="_blank" href="https://online.gnoa.in/apex/f?p=104:11::::::">Apply & Get Instant
                                    Admission</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------- course_hero Section --------------------- -->

    <!-------------------------- course_about Section --------------------- -->

    <div class="course_content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="course_about mb-5">
                        <h3 class="course_heading mb-1">
                            {{ $detail->cont_title }}
                        </h3>
                        <div class="text_justify" data-aos-once="true" data-aos="fade-up">
                            @php echo html_entity_decode($detail->content) @endphp
                        </div>

                    </div>


                    <div class="row">
                        @if (!empty($detail->period_b))
                            <div class="col-md-6">

                                <div class="durationtp_box" data-aos-once="true" data-aos="fade-up">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        class="aos-init aos-animate">
                                        For Brothers</button>
                                </div>

                                <div class="courses_fix_content" data-aos-once="true" data-aos="fade-up">
                                    <p>
                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                        <span><strong>Period :</strong></span>
                                        <span>{{ $detail->period_b }}</span>
                                    </p>
                                    <p>
                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                        <span><strong>Duration :</strong></span>
                                        <span>{{ $detail->duration_b }}</span>
                                    </p>
                                </div>
                            </div>
                        @endif


                        @if (!empty($detail->period_s))
                            <div class="col-md-6">
                                <div class="durationtp_box" data-aos-once="true" data-aos="fade-up">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        class="aos-init aos-animate">
                                        For Sisters</button>
                                </div>


                                <div class="courses_fix_content" data-aos-once="true" data-aos="fade-up">

                                    <p>
                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                        <span><strong>Period :</strong></span>
                                        <span>{{ $detail->period_s }}</span>
                                    </p>
                                    <p>
                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                        <span><strong>Duration :</strong></span>
                                        <span>{{ $detail->duration_s }}</span>
                                    </p>
                                </div>
                            </div>
                        @endif

                    </div>


                    <!--<div class="course_certificate mt-5" data-aos-once="true" data-aos="fade-up">
                      <h3 class="course_heading mb-4">Get a Shareable Certificate</h3>
                       <div class="owl-carousel owl-theme" id="book_slider">
                        <div class="cirtificate_image">
                          <img src="/assets/frontend/images/certificate.png" alt="" />
                        </div>
                        
                        <div class="cirtificate_image">
                          <img src="/assets/frontend/images/certificate.png" alt="" />
                        </div>
                        
                        <div class="cirtificate_image">
                          <img src="/assets/frontend/images/certificate.png" alt="" />
                        </div>
                        
                      </div>
                      
                    </div>-->

                </div>
                <div class="col-md-4 sticky">
                    <div class="right_wrapper courseTop">
                        <div class="course_dtimg">
                            <img src="{{ asset('storage/' . $detail->image) }}" alt="{{ $detail->alt_image }}" />
                        </div>
                        <div class="content">
                            <h3 class="course_dthed arsenica_fonts pt-3 mb-4">{{ $detail->title }}</h3>
                            <div class="common_btn3 blue_bg">
                                <a target="_blank" href="https://online.gnoa.in/apex/f?p=104:11::::::">Apply & Get Instant
                                    Admission</a>
                            </div>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

    @if (!empty($other_courses) && count($other_courses) != 0)
        <section class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="course_other" data-aos-once="true" data-aos="fade-up">
                            <h3 class="course_heading mb-4">Other Courses you can Apply</h3>
                            <div class="owl-carousel owl-theme" id="relatedcourse">
                                @foreach ($other_courses as $row)
                                <a href="{{ url(route('course-detail', ['slug' => $row->slug])) }}">
                                    <div class="card_course" data-aos-once="true" data-aos="fade-up">
                                        <div class="overlay">
                                            <img src="{{ asset('storage/' . $row->image) }}" alt="" />
                                        </div>
                                        <div class="card_content ">
                                            <h3 class="title arsenica_fonts">
                                                {{ $row->title }}
                                            </h3>
                                            <p class="desc">
                                                {{ $row->short_description }}
                                            </p>
                                            <div class="row">
                                                <div class="col-md-6 col-6">
                                                    <div class="social_icons">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-regular fa-star-half-stroke"></i>
                                                        <span>{{ $row->rating }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-6">
                                                    <div class="arrow_btn_slider">
                                                        <!--<a-->
                                                        <!--    href="{{ url(route('course-detail', ['slug' => $row->slug])) }}">-->
                                                            
                                                            <i
                                                                class="fa-solid fa-arrow-right"></i>
                                                                <!--</a>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-------------------------- courses details Section --------------------- -->
@endsection
