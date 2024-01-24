<header>
    <div class="header-top-sec ">
        <div class="index-fixed-social-links">
            <a href="https://www.facebook.com/kkrhospital"> <i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/kkrcancerhospital/"> <i class="fab fa-instagram" aria-hidden="true"></i></a>
            <a href=""> <i class="fab fa-youtube"></i></a>

        </div>
        <div class="header-bottom-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-4 ">
                        <div class="header-logo">
                            <a href="/index">
                                <img src="/asset/images/KKR-LOGO.png" class="img-fluid" alt="royal-peral-dental-clinic-logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-8 p-0">
                        <div class="d-flex align-items-center float-end head-menu-sec">
                            <div class="header-nav-area-sec">
                                <div class="head-nav">
                                    <nav class="menu">
                                        <ul class="mb-0 ps-0">
                                            <li>
                                                <a href="/index" class="{{ request()->is('index*') ? 'active' : '' }}">Home</a>
                                            </li>
                                            <li>
                                                <a href="/about" class="{{ request()->is('about*') ? 'active' : '' }}">About Us</a>
                                            </li>

                                            <li>
                                                <a href="/treatment">Treatments</a>
                                                <!-- <ul class="cr-dropdown-menu">
                                                    <li>
                                                        <a href="">Cosmetic Dentistry </a>
                                                    </li>
                                                    <li>
                                                        <a href=""> Root canal treatments</a>
                                                    </li>
                                                   
                                                </ul> -->
                                            </li>
                                            <li>
                                                <a href="#" class="{{ request()->is('photo-gallery*') || request()->is('video-gallery*') ? 'active' : '' }}">Gallery</a>
                                                <ul class="cr-dropdown-menu">
                                                    <li>
                                                        <a href="/photo-gallery">
                                                            Photo
                                                            Gallery
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/video-gallery">
                                                            Video
                                                            Gallery
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="/blogs" class="{{ request()->is('blogs*') ? 'active' : '' }}">Blogs</a>
                                            </li>
                                            <li>
                                                <a href="/testimonials" class="{{ request()->is('testimonials*') ? 'active' : '' }}">Testimonials</a>
                                            </li>
                                            <li>
                                                <a href="/contact" class="{{ request()->is('contact*') ? 'active' : '' }}">Contact Us</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <h4 class="menu-text d-inline-block d-lg-none">MENU</h4>
                                    <!-- Mobile Menu -->
                                    <div class="mobile-menu hidden-lg hidden-xlg hidden-xx hidden-sp"></div>
                                    <!-- //Mobile Menu -->
                                </div>
                            </div>
                            <div class="">
                                <div class="head-appointment-sec">
                                    <div class="head-appointment-area">
                                       
                                        <div class="head-appointment-icon">
                                            <img src="/asset/images/calender-icon.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="head-appointment-content">
                                             <a href="">
                                            <p>Book an</p>
                                            <p>Appointment</p>
                                             </a>
                                        </div>
                                       
                                    </div>
                                    <div class="head-appointment-area">
                                        <div class="head-appointment-icon">
                                            <img src="/asset/images/phone-icon.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="head-appointment-content">
                                            <a href="tel:+91 44 4200 4200">
                                                <p class="call-title">Medical Emergency</p>
                                                <p>+91 44 4200 4200</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>