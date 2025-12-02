 <header>
     <div class="top_bar">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="wrapper">
                         <div class="new_list pdleft40">
                             <p>
                                 اَلْحَمْدُ لِلّٰہِ رَبِّ الْعٰلَمِیْنَ وَ الصَّلٰوۃُ
                                 وَالسَّلَامُ علٰی سَیِّدِ الْمُرْسَلِیْنَ اَمَّا بَعْدُ
                                 فَاَعُوْذُ بِاللّٰہِ مِنَ الشَیْطٰنِ الرَّجِیْمِ ؕ بِسْمِ
                                 اللّٰہِ الرَّحْمٰنِ الرَّ حِیْمِ
                             </p>
                         </div>
                         <div class="button_area pdrght40">
                             <ul>
                                 <!--<li id="google_translate_element"></li>-->
                                 <li><a href="https://online.gnoa.in/apex/f?p=103:LOGIN_DESKTOP:5123813546755:::::"
                                         target="_blank"> Student Login </a></li>
                                 <li><a href="https://online.gnoa.in/apex/f?p=104:11::::::"
                                         target="_blank">Registration</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--top_bar Section -->
     <!--------===========================================================================--------------------->
     @php
         $course = DB::table('courses')
             ->where('status', '1')
             ->get(['title', 'slug', 'status']);
     @endphp
     <!--------======================================================================-------------------------->
     <!--header Section-->
     <section class="menu_bar">
         <div class="container">
             <nav class="navbar navbar-expand-lg navbar-light bg-light">
                 <!-- Container wrapper -->
                 <button class="navbar-toggler px-0" type="button" data-mdb-toggle="collapse"
                     data-mdb-target="#navbarExampleOnHover" aria-controls="navbarExampleOnHover" aria-expanded="false"
                     aria-label="Toggle navigation">
                     <i class="fas fa-bars"></i>
                 </button>
                 <!-- Collapsible wrapper -->
                 <div class="collapse navbar-collapse" id="navbarExampleOnHover">
                     <!-- Left links -->
                     <ul class="navbar-nav me-auto ps-lg-0 pdleft40">
                         <li class="nav-item">
                             <a href="/">
                                 <img class="logo_width" src="assets/frontend/images/logo.png" alt="" />
                             </a>
                         </li>


                     </ul>


                     <ul class="navbar-nav ms-auto ps-lg-0">

                         <li class="nav-item">
                             <a class="nav-link" href="/">Home</a>
                         </li>
                         <li class="nav-item dropdown dropdown-hover position-static">
                             <a class="nav-link dropdown-toggle" href="{{ url(route('courses')) }}" id="navbarDropdown"
                                 role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                 Courses
                             </a>
                             
                             <!-- Dropdown menu -->
                             <div class="dropdown-menu w-100" aria-labelledby="navbarDropdown"
                                 style="border-top-left-radius: 0;
                                 border-top-right-radius: 0;
                                 ">
                                 <div class="row">
                                     <div class="col-md-10 col-lg-10 mb-3 mb-lg-0">
                                         <div class="list-group list-group-flush">
                                             @foreach ($course as $row)
                                                 <a href="{{ url(route('course-detail', ['slug' => $row->slug])) }}"
                                                     class="list-group-item list-group-item-action">
                                                     {{ $row->title }}
                                                 </a>
                                             @endforeach
                                         </div>
                                     </div>
                                     <div class="col-md-2 col-lg-2">
                                         <img class="menu_img" src="assets/frontend/images/dhanu3.jpeg">
                                     </div>

                                 </div>
                             </div>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="about-us">About Us</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="our-branches">Our Branches</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="contact-us">Contact Us</a>
                         </li>
                         <!-- <li class="nav-item login_btn pdrght40">
                             <a class="nav-link" href="donation.php">Donation</a>
                         </li> -->
                         <!-- Navbar dropdown -->
                     </ul>
                     <!-- Left links -->
                 </div>
                 <!-- Container wrapper -->
             </nav>
         </div>
     </section>
 </header>



 <div class="mobile_header">
     <div class="wrapper_menu">

       <div class="mobile_logo">
          <a href="index.php" aria-label="navbar logo">
              <img class="logo_width" src="assets/frontend/images/logo.png" alt="" />
           </a>
       </div>

         <nav class="nav_mobile">
             <input type="checkbox" id="menu" name="menu" class="m-menu__checkbox">
             <label class="m-menu__toggle" for="menu">
                 <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#007695" stroke-width="2"
                     stroke-linecap="butt" stroke-linejoin="arcs">
                     <line x1="3" y1="12" x2="21" y2="12"></line>
                     <line x1="3" y1="6" x2="21" y2="6"></line>
                     <line x1="3" y1="18" x2="21" y2="18"></line>
                 </svg>
             </label>
             <label class="m-menu__overlay" for="menu"></label>

             <div class="m-menu">
                 <div class="m-menu__header">
                     <label class="m-menu__toggle" for="menu">
                         <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000"
                             stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                             <line x1="18" y1="6" x2="6" y2="18"></line>
                             <line x1="6" y1="6" x2="18" y2="18"></line>
                         </svg>
                     </label>
                     <span>GNOA Menu</span>
                 </div>
                 <ul>
                     <li><label> <a href="{{ url(route('index')) }}">Home</a></label></li>
                     <li>
                         <label class="a-label__chevron" for="item-2">Courses</label>
                         <input type="checkbox" id="item-2" name="item-2" class="m-menu__checkbox">
                         <div class="m-menu">
                             <div class="m-menu__header">
                                 <label class="m-menu__toggle" for="item-2">
                                     <svg width="35" height="35" viewBox="0 0 24 24" fill="none"
                                         stroke="#000000" stroke-width="2" stroke-linecap="butt"
                                         stroke-linejoin="arcs">
                                         <path d="M19 12H6M12 5l-7 7 7 7" />
                                     </svg>
                                 </label>
                                 <span>Courses</span>
                             </div>
                             <ul>
                                 @foreach ($course as $row)
                                     <li><label>
                                             <a href="{{ url(route('course-detail', ['slug' => $row->slug])) }}"
                                                 class="list-group-item list-group-item-action">
                                                 {{ $row->title }}
                                             </a>
                                         </label></li>
                                 @endforeach
                             </ul>
                         </div>
</li>
<li><label> <a href="about-us">About Us</a></label></li>
<li><label> <a href="our-branches">Our Branches</a></label></li>
<li><label> <a href="contact-us">Contact Us</a></label></li>

                 </ul>

                 
             </div>
         </nav>
     </div>
 </div>
