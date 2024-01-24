<footer>
    <div class="footer-sec ">

        <div class="footer-top-address-sec">
            <div class="container">
                <div class="footer-bg-area">
                    <div class="row align-items-center">
                        <div class="foot-appointment-sec">
                            <div class="foot-appointment-content">
                                <h3 class="color-white">Subscribe to our Newsletter</h3>
                                <p class="color-white">Sed sagittis magna vitae purus viverra condimentum. Maecenas eget</p>
                            </div>
                            
                            <div class="subscribe-form">
                             <div class="alert-msg">
                         
                                        @if(Session::has('success'))
                                        {{Session::get('success') }}
                                        @endif
                                    </div>
                                 <form action="/subscribe_form" method="post">
                      {{ csrf_field() }}
                                <input type="email" name="email" class="subscribe-input" placeholder="Enter your email">
                                <button  type="submit" class="subscribe-button">Subscribe</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-sec  pb-5">
            <div class="container">
                <div class="row">
                    <div class="footer-contact-area">
                        <div class="footer-address-box d-flex gap-3  phone-num-area">
                            <div class="footer-address-iocn">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="footer-address-content">
                                <h5 class="mb-0">Call Us</h5>
                                <p class="mb-0"><a href="tel:044-42067705">044-42067705</a> - <a href="tel:+91-8883000123">+91-8883000123</a></p>
                            </div>
                        </div>
                        <div class="footer-address-box d-flex gap-3  mail-area">
                            <div class="footer-address-iocn">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div class="footer-address-content">
                                <h5 class="mb-0">Write us</h5>
                                <p class="mb-0"> <a href="mailto:kkrhospital123@gmail.com">kkrhospital123@gmail.com</a></p>
                            </div>
                        </div>

                        <div class="footer-address-box d-flex gap-3  location-area">
                            <div class="footer-address-iocn">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="footer-address-content ">
                                <h5 class="mb-0">Visit us</h5>
                                <p><a href="contact#mapaddress">No: 26/49, Venkatakrishna Road, Near Mandaveli Bus Stand, Mandaveli
                                        Chennai, TN - 600028</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-between ">
                    <div class="col-lg-3 col-md-5 col-sm-5 footer-area-col">
                        <div class="footer-logo-area ">
                            <img src="/asset/images/footer-logo.png" class="img-fluid" alt="footer-logo">
                            <ul class="footer-list-item pt-4 pb-3">
                                <li> <a href="/privacy-policy">Privacy Policy</a></li>
                                 <li> <a href="/terms-and-conditions">Terms & Conditions</a></li>
                                  <li> <a href="/booking-cancellation-and-refund-policy">Cancellation & Refund Policy</a></li>
                            </ul>
                        </div>
                        <div class="footer-socila-area d-flex gap-3 ">
                            <a href="https://www.facebook.com/kkrhospital" target="_blank">
                                <div class="footer-social-sec  ">
                                    <i class="fab fa-facebook-f"></i>

                                </div>
                            </a>
                            <a href="https://www.instagram.com/kkrcancerhospital/" target="_blank">
                                <div class="footer-social-sec  ">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>

                                </div>
                            </a>
                            <!-- <a href="" target="_blank">
                                <div class="footer-social-sec  ">
                                    <i class="fab fa-youtube"></i>

                                </div>
                            </a> -->
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-7 col-sm-7">
                        <div class="footer-quick-links-sec align-items-center ">
                            <div class="footer-links-title">
                                <h5>Qucik Links</h5>
                            </div>
                            <div class="footer-list-area ">

                                <ul class="footer-list-item">
                                    <li>
                                        <a href="/index">Home</a>
                                    </li>
                                    <li>
                                        <a href="/about">About Us</a>
                                    </li>

                                    <li>
                                        <a href="/photo-gallery">Photo Gallery</a>
                                    </li>
                                    <li>
                                        <a href="/video-gallery">Video Gallery</a>
                                    </li>

                                    <li>
                                        <a href="/treatment">Treatments</a>
                                    </li>

                                    <li>
                                        <a href="/blogs">Blogs</a>
                                    </li>
                                    <li>
                                        <a href="/testimonials">Testimonials</a>
                                    </li>
                                    <li>
                                        <a href="/contact">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="treatment-footer-area">
                            <div class="footer-links-title">
                                <h5>Treatments</h5>
                            </div>
                            <div class="footer-area-list-sec">
                                <ul class="footer-list-item">
                                    <li><a href="/bladder-cancer"> Bladder Cancer </a></li>
                                    <li><a href="/kidney-cancer"> Kidney Cancer </a></li>
                                    <li><a href="/blood-cancer"> Blood Cancer </a></li>
                                    <li><a href="/liver-cancer"> Liver Cancer </a></li>
                                    <li><a href="/melanoma"> Melanoma </a></li>
                                    <li><a href="/non-hodgkin-lymphoma"> Non-Hodgkin Lymphoma </a></li>
                                    <li><a href="/pancreatic-cancer">Pancreatic Cancer</a></li>
                                    <li><a href="/prostate-cancer">Prostate Cancer</a></li>
                                </ul>
                                <ul class="footer-list-item">
                                    <li><a href="/thyroid-cancer"> Thyroid Cancer</a></li>
                                    <li><a href="/tongue-cancer">Tongue Cancer</a></li>
                                    <li><a href="/uterus-cancer">Uterus Cancer</a></li>
                                    <li><a href="/stomach-cancer">Stomach Cancer</a></li>
                                    <li><a href="/brain-cancer">Brain Cancer</a></li>
                                    <li><a href="/breast-cancer">Breast Cancer</a></li>
                                    <li><a href="/bone-cancer">Bone Cancer</a></li>
                                </ul>
                                <ul class="footer-list-item">
                                    <li><a href="/colon-and-rectal-cancer">Colon and Rectal Cancer </a></li>
                                    <li><a href="/ovarian-cancer"> Ovarian Cancer</a></li>
                                    <li><a href="/food-pipe-cancer">Food Pipe Cancer</a></li>
                                    <li><a href="/cheek-cancer">Cheek Cancer</a></li>
                                    <li><a href="/intestinal-cancer">Intestinal Cancer</a></li>
                                    <li><a href="/rectal-cancer">Rectal Cancer</a></li>
                                    <li><a href="/wide-spread-cancer">Wide Spread Cancer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copy-right-content">
                            <p class="copy-para-left mb-0">
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                KKR Hospital. All Rights Reserved.
                            </p>
                            <p class="copy-para-right mb-0">
                                Powered By:
                                <a href="https://www.cortexmarketing.in/" target="_blank">Cortex Media Marketing Pvt Ltd</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>