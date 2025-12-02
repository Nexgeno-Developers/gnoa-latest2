 <section class="footer">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="footer_top">
                     <div class="row">
                         <div class="col-lg-4 col-md-6">
                             <div class="info_wrapper">
                                 <h3 class="title" data-aos-once="true" data-aos="fade-up">
                                     Connect To Quran Teacher
                                 </h3>
                                 <p class="mt-3 mb-0 fs-16" data-aos-once="true" data-aos="fade-up">
                                     <b>Garib Nawaz Online Academy</b>
                                 </p>
                                 <p data-aos-once="true" data-aos="fade-up">
                                     Faizane Madina Dawateislami India 50,Tantanpura Street Khadak Police Chowki Mumbai
                                     400009 Maharashtra
                                 </p>
                                 <p class="mb-0">
                                     <a href="mailto:support@gnoa.in" data-aos-once="true"
                                         data-aos="fade-up">support@gnoa.in</a>
                                 </p>
                                 <p>
                                     <a href="tel:+91-9137589497" data-aos-once="true"
                                         data-aos="fade-up">+91-9137589497</a>
                                 </p>
                                 <div class="social_icon" data-aos-once="true" data-aos="fade-up">
                                     <a target="_blank" href="https://www.facebook.com/garibnawazonlineacademy/" aria-label="Visit Gharib Nawaz Acadmey on Facebook"><i class="fa-brands fa-facebook"></i></a>
                                     <a target="_blank" href="https://www.instagram.com/Garibnawazonlineacademy/" aria-label="Visit Gharib Nawaz Acadmey on Instagram"><i class="fa-brands fa-instagram"></i></a>
                                     <!--<a href="" aria-label="Visit Gharib Nawaz Acadmey on Twitter"><i class="fa-brands fa-twitter"></i></a>-->
                                     <a href="">Lets get together</a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-2 col-md-3 col-6 mt-md-0 mt-4">
                             <h3 class="title" data-aos-once="true" data-aos="fade-up">
                                 Main Menu
                             </h3>
                             <ul data-aos-once="true" data-aos="fade-up">
                                 <li><a href="about-us">About Us </a></li>
                                 <li><a href="courses">Courses </a></li>
                                 <li><a href="our-branches">Our Branches </a></li>
                                 <li><a href="career">Career</a></li>
                             </ul>
                         </div>
                         <div class="col-lg-2 col-md-3 col-6 mt-md-0 mt-4">
                             <h3 class="title" data-aos-once="true" data-aos="fade-up">
                                 Quick Links
                             </h3>
                             <ul data-aos-once="true" data-aos="fade-up">
                                 <li>
                                     <a href="contact-us">Contact Us </a>
                                 </li>
                                 <li>
                                     <a href="privacy-policy"> Privacy Policy </a>
                                 </li>
                                 <li>
                                     <a href="terms-conditions"> Terms & Conditions </a>
                                 </li>

                                 <!-- <li>
                                     <a href="#"> Donation</a>
                                 </li> -->
                             </ul>
                         </div>


                         @include('frontend.component.footer_form')


                     </div>
                 </div>
             </div>
             <hr />
             <div class="col-lg-12 col-md-12">
                 <div class="footer_bottom">
                     <a href="https://online.gnoa.in/apex/f?p=104:11::::::"
                         target="_blank"><button>Registration</button></a>
                     <p>Copyright © 2024 GNOA. All rights reserved.</p>
                     <!--<p>Design By <a target="_blank" href="https://nexgeno.in/">NEXGENO</a></p>-->
                    
                 </div>
             </div>
         </div>
     </div>
 </section>

 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="popup_wrapper">
                 <button type="button" class="close_btn" data-bs-dismiss="modal" aria-label="Close">
                     <img src="assets/frontend/images/remove.png" alt="" />
                 </button>

                  @include('frontend.component.popup_form')
             </div>
         </div>
     </div>
 </div>

 <!--whatsapp chat open-->

 <div class="desktop_whatsapp">
     <div class="whatsapp_chat_support wcs_fixed_right" id="example_1">

         <div class="wcs_button wcs_button_circle">
             <div class="whatsapp_blink">
                 <span href="" class="btn-whatsapp-pulse">
                     <span class="fa-brands fa-whatsapp"></span>
                 </span>
             </div>
         </div>
         <div class="wcs_button_label">
             Need Help? Chat with us
         </div>

         <div class="wcs_popup">
             <div class="wcs_popup_close">
                 <span class="fa fa-close"></span>
             </div>
             <div class="wcs_popup_header">
                 <strong>Need Help? Chat with us</strong>
                 <br>
                 <div class="wcs_popup_header_description">Click one of our representatives below</div>
             </div>
             <div class="wcs_popup_person_container">
                 <div class="wcs_popup_person" data-number="+91-9137589497">
                     <div class="wcs_popup_person_img"><img src="assets/frontend/images/favicon.ico" alt="" /></div>
                     <div class="wcs_popup_person_content">
                         <div class="wcs_popup_person_name">Garib Nawaz Online Academy</div>
                         <div class="wcs_popup_person_status">I'm Online</div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 
 <script
      src="https://ai.gnoa.in/chatjs/chatai/ai.js"
      data-bg-color="#5c7fb8"
      data-position="right"
      data-icon-image="https://ai.nexgeno.in/chatjs-nexgeno/chat.png"
      profile-image="https://gnoa.in/assets/images/globe_icon1.png"
      data-name="Gnoa"
      data-status="Online" 
      data-url="https://ai.gnoa.in/"></script>
 

 <!--whatsapp chat close-->