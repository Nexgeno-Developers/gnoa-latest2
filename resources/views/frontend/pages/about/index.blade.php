@extends('frontend.layouts.app')

@section('page.title', 'Garib Nawaz Online Academy')

@section('page.description', 'Garib Nawaz Online Academy')

@section('page.type', 'website')

@section('page.content')

<section class="innertitle aboutus">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="inner_titles text-center">About Us</h4>
                <nav aria-label="breadcrumb" class="breadcrumb mb-0">
                    <ol class="breadcrumb d-flex justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="left_wrapper textjustify">
                    <h2 class="heading mb-4 arsenica_fonts" data-aos-once="true" data-aos="fade-up">Get to Know More
                        About GNOA</h2>
                    <p class="me-lg-4 " data-aos-once="true" data-aos="fade-up">
                        As Dawat-e-Islami India is doing its services in more than 80 walks of life with the sole aim of
                        propagating the teachings of Quran and Sunnah and this is another step for those Islamic
                        brothers and sisters who are aged or busy in their worldly affairs but haven’t learned the
                        proper recitation of Quran. We urged to all our Islamic brothers and sisters to take admission
                        in this online Quran academy and learn to read Quran properly.
                    </p>
                    <p class="me-lg-4" data-aos-once="true" data-aos="fade-up">
                        Being a Muslim, it is our religious duty that we should not only recite Quran but also try to
                        understand every word of it and if you are one of them who are unable to recite Quran properly
                        then take admission in this online Quran teaching service and enlighten your heart with the
                        sacred holy book of Almighty. </p>
                    </p>
                    <p class="me-lg-4" data-aos-once="true" data-aos="fade-up">
                        GNOA is an Islamic Education Department, which provides various Islamic courses all over the
                        world.
                    </p>

                    <p class="me-lg-4" data-aos-once="true" data-aos="fade-up">
                        We welcome our users to Online Quran teaching services where we are offering multiple Islamic as
                        well as character building and life reformation courses as per the teachings of Sharia.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1 mb-lg-0 mb-5">
                <div class="right_wrapper">
                    <img src="assets/frontend/images/about.png" data-aos-once="true" data-aos="fade-up" alt="" loading="lazy"/>
                </div>
            </div>
            <div class="col-md-12 order-3 textjustify">
                <p class="me-lg-4" data-aos-once="true" data-aos="fade-up">We have the Best team of both male and female
                    Quran teachers who are committed to their GN online Academy work, university graduates and are
                    highly qualified. Most of them are Hafiz/Hafiza And Alim/Alima Teacher.</p>
                <p class="me-lg-4" data-aos-once="true" data-aos="fade-up">Thousands of individuals have learned to read
                    the Quran with these online Quran classes service in India. we
                    are providing 17-hour service Quran Classes to our students so that students can adjust their
                    tutorial timings according to their availability, ease and comfort.</p>
                <p class="me-lg-4" data-aos-once="true" data-aos="fade-up">People of all ages can study in this department.
                    For example, children, men and women, elderly women, elderly men. The department has a complete
                    system of student teachers and other staff.</p>
                <p class="me-lg-4" data-aos-once="true" data-aos="fade-up">By successfully completing their course of study
                    all students will receive a Certificate issue by our Academy. This department is being handled by
                    our Education Dept. in India.</p>

            </div>
        </div>
    </div>
</section>


<!-------------------------- counter Section --------------------- -->



@include('frontend.component.counter')

<!-------------------------- counter Section --------------------- -->

<!-------------------------- certificate Section --------------------- -->


                @include('frontend.component.certificate')


@endsection