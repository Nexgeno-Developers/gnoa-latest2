@extends('frontend.layouts.app')

@section('page.title', 'Garib Nawaz Online Academy')

@section('page.description', 'Garib Nawaz Online Academy')

@section('page.type', 'website')

@section('page.content')

<!----------========== contact start ===============-------------------->
<section class="innertitle aboutus">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="inner_titles text-center">Contact Us</h4>
                <nav aria-label="breadcrumb" class="breadcrumb mb-0">
                    <ol class="breadcrumb d-flex justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>


<section class="sectionpadd45 courses_listing contact_us_pg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                <div class="contact_boxex" data-aos-once="true" data-aos="fade-up">
                    <div class="contacticnbx">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <h4>Phone Number</h4>
                    <p> <a href="tel:+91-9137589497"> +91-9137589497 </a></p>
                    <p>Office Timing - 10:00 AM to 10:00 PM</p>
                    <p>Working Day - Sunday - Friday</p>

                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                <div class="contact_boxex" data-aos-once="true" data-aos="fade-up">
                    <div class="contacticnbx">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <h4>Email ID</h4>
                    <p> <a href="mailto:admonlineind@gmail.com">admonlineind@gmail.com</a></p>
                    <p> <a href="mailto:support@gnoa.in">support@gnoa.in</a></p>
                    <p><a href="mailto:feedback@gnoa.in">feedback@gnoa.in</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="contact_boxex" data-aos-once="true" data-aos="fade-up">
                    <div class="contacticnbx">
                        <i class="fa-solid fa-map"></i>
                    </div>
                    <h4>Address</h4>
                    <p>Faizane Madina Dawateislami India 50,Tantanpura Street Khadak Police Chowki Mumbai 400009
                        Maharashtra</p>
                </div>
            </div>

        </div>


        <div class="row pt-4">
            <div class="col-lg-4">
                <div class="question_sec" data-aos-once="true" data-aos="fade-up">
                    <span>If you have any Question... !</span>
                    <h3 class="arsenica_fonts heading">Dont be a stranger<br>just say hello.</h3>
                    <p>We will connect back to you in next few<br>moments. Our team of professional<br>alims and
                        scholars are always there to<br>help and guide you.</p>
                </div>


                <div class="socail_icons" data-aos-once="true" data-aos="fade-up">
                    <h4 class="arsenica_fonts blue_clr">Follow Us On Social Media</h4>
                    <ul>
                        <li>
                            <a target="_blank" href="https://web.whatsapp.com/send?phone=+91-9137589497&text=Hi,%20I%20have%20some%20questions%20about%20this%20page:%20http://127.0.0.1:8000/contact-us!"><i class="fa-brands fa-whatsapp"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/garibnawazonlineacademy/"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.instagram.com/Garibnawazonlineacademy/" ><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li>
                            <!--<a href="#"><i class="fa-brands fa-twitter"></i></a>-->
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="contact_from pt-5" data-aos-once="true" data-aos="fade-up">
                    
                    @include('frontend.component.contact_us_form')


                </div>
            </div>
        </div>
    </div>
</section>

<!-------------=============== contact end =============== -------------------->

@endsection