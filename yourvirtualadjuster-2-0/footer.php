<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yourvirtualadjuster_2.0
 */

?>
    <footer id="contact-us-sec">
        <div class="container">
            <div class="row">
                <!-- Contact Form Section -->
                <div class="col-lg-7">
                    <h2 class="text-white font-w-500 font-xl secondary-font mb-lg-5 mb-4">Contact Form</h2>
                    <!-- <form class="contact-form d-none">
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <input type="text" placeholder="Name *" class="form-field">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Company Name *" class="form-field">
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <input type="email" placeholder="Email *" class="form-field">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Phone *" class="form-field">
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <input type="text" placeholder="State *" class="form-field">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Zip Code *" class="form-field">
                            </div>
                        </div>
                        <div class="mb-3 mt-5">
                            <h5 class="text-white text-start font-20 font-w-500 mt-5 mb-3">How Did You Hear of Us?</h5>
                            <select class="form-field">
                                <option selected disabled>Please choose an option</option>
                                <option>Google</option>
                                <option>Social Media</option>
                                <option>Referral</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-submit border-radius-xl">SUBMIT</button>
                    </form> -->
                    <?php 
                        echo do_shortcode('[contact-form-7 id="2af1a31" title="Contact form"]'); 
                    ?>
                </div>

                <!-- Get In Touch Section -->
                <div class="col-lg-5 mt-4 mt-lg-0">
                    <h2 class="text-white font-w-500 font-xl secondary-font mb-lg-5 mb-4">Get In Touch</h2>
                    <div class="contact-info">
                        <div class="d-flex align-items-start justify-content-start mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/address-icon.svg" alt="" class="mt-3"> 
                            <p class="text-white ms-4">
                                <span class="text-secondary font-20 font-w-500 mb-2">Address:</span><br> 
                                <a href="https://www.google.com/maps/place/Bulldog+Adjusters,+499+NW+70th+Ave+Suite+114,+Plantation,+FL+33317,+United+States/@26.1275846,-80.2410893,17z/data=!4m6!1m3!3m2!1s0x88d907ae5dc00001:0xc68dfcbacc36d5a4!2s499+NW+70th+Ave+Suite+Suite+114,+Plantation,+FL+33317,+USA!3m1!1s0x88d9aa4a797647cf:0xd3d7b2e9ccd36540" class="text-white" target="_blank"> 3127 W Hallandale Beach Blvd,<br> Ste #102 Hallandale Beach FL,<br> 33009</a>
                            </p>
                        </div>
                        <div class="d-flex align-items-start justify-content-start mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hours-icon.svg" alt="" class="mt-3"> 
                            <p class="text-white ms-4">
                                <span class="text-secondary font-20 font-w-500 mb-2">Business Hours:</span><br> Mon - Fri: 9AM - 5PM</p>
                        </div>
                        <div class="d-flex align-items-start justify-content-start mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-call-icon.svg" alt="" class="mt-3"> 
                            <p class="text-white ms-4">
                                <span class="text-secondary font-20 font-w-500 mb-2">Phone Number:</span><br> <a href="tel:855-775-7550" class="text-white text-decoration-underline"> 855-775-7550</a></p>
                        </div>
                    </div>
                    <ul class="social d-flex justify-content-start align-items-center mb-5">
                        <li><a href="https://www.instagram.com/yourvirtualadjuster/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/YourVirtualAdjuster/" target="_blank"><i class="fa-brands fa-square-facebook"></i></a></li> 
                        <li><a href="https://www.linkedin.com/company/yourvirtualadjuster/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li> 
                        <li><a href="https://www.youtube.com/channel/UC1tRU9dtrqRpS5QaFNAsqmg?themeRefresh=1" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>   
                    </ul>
                    <h5 class="mt-5 text-white font-20 font-w-600 mb-3">DOWNLOAD OUR CLAIMS APP</h5>
                    <div class="app-buttons d-flex my-4">
                        <a href="https://play.google.com/store/apps/details?id=com.bulldogadjuster.yva" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/google-playstore-icon.png" alt="" class="border-radius10 me-2">
                        </a>
                        <a href="https://apps.apple.com/us/app/your-virtual-adjuster/id1595794766" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-store-icon.png" alt="" class="border-radius10 ms-2">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section -->
        <div class="bottom-footer border-top">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <p class="text-white mb-0 pb-0 copyright"><small>Copyright © 2025 YOUR VIRTUAL ADJUSTER | All Rights Reserved.</small></p>
                    <ul class="footer-nav d-none justify-content-end align-items-center">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Solutions</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Testimonials</a></li>
                    </ul>
                    <?php wp_nav_menu( array( 
                            'theme_location' => 'footer-menu-1',
                            'menu_class' => 'footer-nav d-flex justify-content-end align-items-center',
                    ) ); ?>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery (Required for Owl Carousel) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
    $(document).ready(function(){
        $(".testimonial-slider").owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 600,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:1
                },
                1024:{
                    items:1
                }
            }
        });
         $(".partners-carousel").owlCarousel({
            loop: true,
            margin: 5,
            nav: false,
            dots: false,
            autoplay: true,
            smartSpeed: 1200,
            responsive: {
                0: {
                    items: 3
                },
                600: {
                    items: 3
                },
                768: {
                    items: 3 // Tablets
                },
                1024: {
                    items: 4 // Small desktops/laptops
                },
                1200: {
                    items: 5 // Desktops
                },
                1440: {
                    items: 5 // Large desktops
                }
            }
        });
    });
    </script>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
