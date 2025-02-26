<?php
/* Template Name: Homepage */

get_header();
?>

    <section class="banner-section position-relative" id="home-hero-banner">
        <div class="left-hero-section position-relative">
            <img src="<?php echo esc_url(get_field('hero_image')); ?>" alt="" class="mobile-mockups">
        </div>
        <div class="right-hero-section">
            <div class="d-flex flex-column justify-content-between align-items-start flex-wrap flex-sm-wrap">

                <div class="d-flex justify-content-between align-items-center mb-5">
                    <?php for ($i = 1; $i <= 4; $i++) : 
                        $icon = get_field("icon_{$i}");
                    ?>
                        <div class="line-container p-2 pe-4">
                            <?php if ($icon) : ?>
                                <img src="<?php echo esc_url($icon); ?>" alt="">
                            <?php endif; ?>
                            <?php if ($i < 4) : ?><div class="line"></div><?php endif; ?>
                        </div>
                    <?php endfor; ?>
                </div>

                <h1 class="my-5 secondary-font black-font font-w-500 font-xl"><?php the_field('hero_heading'); ?></h1>
                <h6 class="font-20 mb-5"><?php the_field('hero_subheading'); ?></h6>

                <div class="d-flex mt-3">

                    <a href="tel:<?php the_field('call_button_link'); ?>" class="btn btn-secondary text-uppercase px-4 py-2 rounded me-4 shadow"><img src="<?php echo esc_url(get_field('call_button_icon')); ?>" alt="" class="small-icon me-2"> <?php the_field('call_button_text'); ?></a>

                    <a href="<?php the_field('book_demo_button_link'); ?>" class="btn btn-primary text-uppercase px-4 py-2 rounded shadow" target="_blank"><img src="<?php echo esc_url(get_field('book_demo_button_icon')); ?>" alt="" class="small-icon me-2"> <?php the_field('book_demo_button_text'); ?></a>
                </div>

            </div>
        </div>
    </section>

    <section class="our-solution-section" id="our-solution">
        <div class="container">
            <h3 class="font-24 font-w-600 black-font border-bottom-orange pb-4"><?php the_field('our_solutions_title'); ?></h3>

            <?php if( have_rows('our_solutions') ): ?>
                <div class="row tab-container">
                    
                    <!-- Sidebar (Tabs) -->
                    <div class="col-md-5">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
                            <?php $tab_index = 1; ?>
                            <?php while( have_rows('our_solutions') ) : the_row(); ?>
                                <button class="nav-link <?php echo ($tab_index === 1) ? 'active' : ''; ?>" 
                                        id="tab-<?php echo $tab_index; ?>" 
                                        data-bs-toggle="pill" 
                                        data-bs-target="#content-<?php echo $tab_index; ?>" 
                                        role="tab">
                                    <span class="tab-icon">
                                        <img src="<?php the_sub_field('tab_icon'); ?>" alt="">
                                    </span> 
                                    <?php the_sub_field('tab_title'); ?>
                                </button>
                                <?php $tab_index++; ?>
                            <?php endwhile; ?>
                        </div>
                    </div>

                    <!-- Content Area -->

                    <div class="col-md-7">
                        <div class="tab-content" id="v-pills-tabContent">
                            <?php 
                            $content_index = 1; 
                            reset_rows('our_solutions'); // Reset to loop through content again
                            ?>
                            <?php while( have_rows('our_solutions') ) : the_row(); ?>
                                <div class="tab-pane fade <?php echo ($content_index === 1) ? 'show active' : ''; ?>" 
                                    id="content-<?php echo $content_index; ?>" 
                                    role="tabpanel">
                                    <?php the_sub_field('tab_content'); ?>
                                </div>
                                <?php $content_index++; ?>
                            <?php endwhile; ?>
                        </div>
                    </div>

                </div>
            <?php endif; ?>
                
        </div>
    </section>

    <section class="claim-section py-5">
        <div class="container">
            <h2 class="secondary-font black-font font-48 text-center border-top-orange py-4">
                <?php the_field('claim_steps_heading'); ?>
            </h2>

            <?php if( have_rows('claim_steps') ): ?>
                <div class="d-flex justify-content-center mt-4 flex-wrap flex-sm-wrap flex-md-nowwrap">
                    <?php while( have_rows('claim_steps') ): the_row(); ?>
                        <div class="card card-custom m-3">
                            <div class="circle mb-3">
                                <span><?php the_sub_field('step_number'); ?></span>
                            </div>
                            <h5 class="mt-3 fw-bold font-20"><?php the_sub_field('step_title'); ?></h5>
                            <p class="font-w-300 lh-sm"><?php the_sub_field('step_subtitle'); ?></p>
                            <p><?php the_sub_field('step_description'); ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="blue-cta">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center blue-bg px-4 py-5 flex-wrap flex-sm-wrap flex-md-nowwrap">
                <div>
                    <h3 class="text-white font-48 font-w-500 secondary-font mb-3"><?php the_field('cta_heading'); ?></h3>
                    <h5 class="text-white font-w-500 font-24"><?php the_field('cta_subheading'); ?></h5>
                </div>
                <a href="tel:<?php the_field('cta_button_link'); ?>" class="btn btn-secondary text-uppercase px-4 py-2 rounded me-4 shadow"><img src="<?php the_field('cta_button_icon'); ?>" alt="" class="small-icon me-2"> <?php the_field('cta_button_text'); ?></a>
            </div>
        </div>
    </section>

    <section class="platform-features-section" id="platform-feature">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="left-mobile-holder d-flex justify-content-between align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/large-mobile-mockup.png" alt="" class="large-mobile">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spark-arrow.svg" alt="" class="d-none d-md-block d-sm-none">
                    </div>
                </div>
                <div class="col-md-7">
                    <h3 class="font-24 font-w-600 black-font border-bottom-orange pb-4">
                        <?php the_field('platform_features_heading'); ?>
                    </h3>
                    <h2 class="mt-4 secondary-font black-font font-48 py-4">
                        <?php the_field('platform_features_title'); ?>
                    </h2> 
                    <p><?php the_field('platform_features_description'); ?></p> 

                    
                        <?php if( have_rows('platform_features_accordion') ): ?>
                            <div class="accordion" id="accordionExample">
                                <?php 
                                $index = 0; // Counter for unique IDs
                                while( have_rows('platform_features_accordion') ) : the_row(); 
                                    $index++;
                                    $heading_id = 'heading' . $index;
                                    $collapse_id = 'collapse' . $index;
                                    $is_first = $index === 1; // First item should be open
                                ?>
                                    <div class="accordion-item">
                                        <h4 class="accordion-header" id="<?php echo esc_attr($heading_id); ?>">
                                            <button class="accordion-button <?php echo !$is_first ? 'collapsed' : ''; ?>" 
                                                    type="button" 
                                                    data-bs-toggle="collapse" 
                                                    data-bs-target="#<?php echo esc_attr($collapse_id); ?>" 
                                                    aria-expanded="<?php echo $is_first ? 'true' : 'false'; ?>" 
                                                    aria-controls="<?php echo esc_attr($collapse_id); ?>">
                                                
                                                <?php if( get_sub_field('accordion_icon') ) : ?>
                                                    <img src="<?php the_sub_field('accordion_icon'); ?>" alt="" class="me-3">
                                                <?php endif; ?>
                                                
                                                <?php the_sub_field('accordion_title'); ?>
                                            </button>
                                        </h4>
                                        <div id="<?php echo esc_attr($collapse_id); ?>" 
                                            class="accordion-collapse collapse <?php echo $is_first ? 'show' : ''; ?>" 
                                            aria-labelledby="<?php echo esc_attr($heading_id); ?>" 
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p><?php the_sub_field('accordion_description'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>

                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="pricing-section">
        <div class="container">
            <?php if( have_rows('manage_claims_cta') ): ?>
                <?php while( have_rows('manage_claims_cta') ) : the_row(); ?>
                    <div class="d-flex justify-content-lg-between justify-content-center align-items-center blue-bg-2 px-4 py-4 mb-5">
                        <div>
                            <h3 class="text-white font-48 font-w-500 secondary-font mb-0"><?php the_sub_field('pricing_main_heading'); ?></h3>
                        </div>
                        <a href="<?php the_sub_field('pricing_cta_button_link'); ?>" class="btn btn-secondary text-uppercase px-4 py-2 rounded me-lg-4 shadow" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/calender-icon.svg" alt="" class="small-icon me-2"> <?php the_sub_field('pricing_cta_button_text'); ?></a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            
            <?php if( have_rows('pricing_introduction_section') ): ?>
                <?php while( have_rows('pricing_introduction_section') ) : the_row(); ?>

                    <div class="mt-5 pt-5 text-center" id="pricing-section">
                        <h3 class="font-24 font-w-600 black-font border-bottom-orange pb-4"><?php the_sub_field('pricing_intro_subheading'); ?></h3>
                        <h2 class="mt-4 secondary-font black-font font-48 py-4"><?php the_sub_field('pricing_intro_heading'); ?></h2> 
                    </div>

                    <div class="card p-5 my-5 d-flex justify-content-between flex-column align-items-center w-75 mx-auto">
                        <a href="<?php the_sub_field('pricing_intro_cta_link'); ?>" class="btn btn-primary text-uppercase px-5 py-3 font-20 mb-5 border-radius10" target="_blank">
                            <?php the_sub_field('pricing_intro_cta'); ?>
                        </a>
                        <p class="font-w-300 lh-sm"><?php the_sub_field('pricing_intro_paragraph'); ?></p>

                        <?php if( have_rows('pricing_features') ): ?>
                            <ul class="row platform-list w-50">
                                <?php while( have_rows('pricing_features') ) : the_row(); ?>
                                    <li class="col-6"><?php the_sub_field('pricing_feature'); ?></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>

                        <div class="w-50 d-flex align-items-center justify-content-center mt-5 apps-icons">
                            <?php if( get_sub_field('pricing_playstore_buttons_link') && get_sub_field('pricing_playstore_buttons_image') ): ?>
                                <a href="<?php the_sub_field('pricing_playstore_buttons_link'); ?>" target="_blank">
                                    <img src="<?php the_sub_field('pricing_playstore_buttons_image'); ?>" alt="Play Store" class="shadow border-radius10 me-2">
                                </a>
                            <?php endif; ?>

                            <?php if( get_sub_field('pricing_appstore_buttons_link') && get_sub_field('pricing_appstore_buttons_image') ): ?>
                                <a href="<?php the_sub_field('pricing_appstore_buttons_link'); ?>" target="_blank">
                                    <img src="<?php the_sub_field('pricing_appstore_buttons_image'); ?>" alt="App Store" class="shadow border-radius10 ms-2">
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

            <?php if( have_rows('pricing_card_group') ): ?>
                <?php while( have_rows('pricing_card_group') ) : the_row(); ?>
                
                    <div class="row g-4 mt-5">
                        <div class="col-md-12">
                            <h2 class="secondary-font black-font font-48 text-center border-top-orange py-4"><?php the_sub_field('pricing_card_title'); ?></h2>
                        </div>
                    </div>

                    <?php if( have_rows('pricing_card_repeater') ): ?>
                        <div class="d-flex justify-content-between align-items-stretch g-4 my-5 flex-wrap flex-sm-wrap flex-md-nowwrap">
                            <?php while( have_rows('pricing_card_repeater') ) : the_row(); ?>
                                <div class="pricing-coulmn p-2 w-25 mx-xl-4 mx-2 h-100 align-self-stretch">
                                    <div class="card pricing-card">
                                        <div class="pricing-header font-20">
                                            <?php the_sub_field('plan_name'); ?>
                                        </div>
                                        <div class="card-body d-flex flex-column">
                                            <?php the_sub_field('plan_description'); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                    <div class="d-none justify-content-between align-items-stretch g-4 mt-5 flex-wrap flex-sm-wrap flex-md-nowwrap">
                        <!-- Card 1 -->
                        <div class="pricing-coulmn p-2 w-25 mx-xl-4 mx-2 h-100 align-self-stretch">
                            <div class="card pricing-card">
                                <div class="pricing-header font-20">YCT - New Claims</div>
                                <div class="card-body d-flex flex-column">
                                    <h6 class="text-center font-15">File Setup Fee</h6>
                                    <h3 class="text-primary text-center font-48">$250</h3>
                                    <p class="text-center font-15 font-w-300">per file</p>
                                    <h6 class="text-center font-15">Claim Percentage</h6>
                                    <h3 class="text-primary text-center font-48">12%</h3>
                                    <p class="text-center font-15 font-w-300">of the RCV*</p>
                                    <p class="text-muted font-w-300 mb-0 pb-0 lh-sm"><small>*Locked in at 12% even if the claim moves to supplementing or PA Service.</small></p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="pricing-coulmn p-2 w-25 mx-xl-4 mx-2 h-100 align-self-stretch">
                            <div class="card pricing-card">
                                <div class="pricing-header font-20">YCT - Supplementing</div>
                                <div class="card-body d-flex flex-column">
                                    <h6 class="text-center font-15 text-white">Fee Structure</h6>
                                    <p class="text-center font-15 font-w-300 text-white">The greater of</p>
                                    <h3 class="text-secondary text-center font-48 mb-0">$250</h3>
                                    <p class="text-center font-15 font-w-300 mb-0 text-white">or</p>
                                    <h3 class="text-secondary text-center font-48">15%</h3>
                                    <p class="font-w-300 mb-0 pb-0 lh-sm text-white">of the increase in the claim amount</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="pricing-coulmn p-2 w-25 mx-xl-4 mx-2 h-100 align-self-stretch">
                            <div class="card pricing-card">
                                <div class="pricing-header font-20">Public Adjusting</div>
                                <div class="card-body d-flex flex-column">
                                    <h6 class="text-center font-15">Claim Percentage</h6>
                                    <h3 class="text-primary text-center font-48">15%</h3>
                                    <p class="text-muted text-center font-w-300 mb-0 pb-0">of the claim amount*</p>
                                    <p class="text-center font-w-300 lh-sm mt-auto"><small>*or state fee cap maximum</small></p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div class="pricing-coulmn d-flex flex-column p-2 w-25 mx-xl-4 mx-2 h-100 align-self-stretch">
                            <div class="card pricing-card">
                                <div class="pricing-header font-20">Appraisals</div>
                                <div class="card-body d-flex flex-column">
                                    <h6 class="text-center font-15 text-white">Payment Options</h6>
                                    <h3 class="text-secondary text-center font-48 mb-0">$949</h3>
                                    <p class="text-center font-15 font-w-300 mb-0 text-white">platform claim appraisals</p>
                                    <p class="text-center font-15 font-w-300 mb-0 text-white">or</p>
                                    <h3 class="text-secondary text-center font-48">$1300</h3>
                                    <p class="text-center font-w-300 mb-0 pb-0 lh-sm text-white">non-platform claim appraisals</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php endwhile; ?>
            <?php endif; ?>


        </div>
    </section>

    <section class="ylla-cta-section pb-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center blue-bg-3 position-relative">
                <div>
                    <h3 class="text-white font-40 font-w-900 secondary-font mb-0 text-uppercase"><?php the_field('ylla_cta_heading'); ?></h3>
                    <a href="<?php the_field('ylla_cta_button_link'); ?>" class="btn btn-light text-uppercase px-4 py-2 font-w-500 rounded me-4 shadow mt-4" target="_blank"><?php the_field('ylla_cta_button_text'); ?></a>
                </div>
                <div class="ylla-logo-holder">
                    <img src="<?php the_field('ylla_logo'); ?>" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-section" id="our-testimonials">
        <div class="container text-center">
            <h3 class="font-24 font-w-600 black-font border-bottom-orange pb-4"><?php the_field('testimonials_section_heading'); ?></h3>
            <h2 class="secondary-font black-font font-48 py-4 mt-4"><?php the_field('testimonials_main_heading'); ?></h2>
        </div>
        <div class="testimonial-holder">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="testimonial-card">
                            <div class="owl-carousel testimonial-slider">

                                <!-- Slides -->
                                <?php if( have_rows('testimonials_repeater') ): ?>
                                    <?php while( have_rows('testimonials_repeater') ) : the_row(); ?>
                                        <div class="p-2">
                                            <h3 class="font-20 font-w-600 mb-4"><?php the_sub_field('testimonial_title'); ?></h3>
                                            <p>
                                                "<?php the_sub_field('testimonial_content'); ?>"
                                            </p>
                                            <p class="text-secondary"><?php the_sub_field('testimonial_author_name'); ?>, <?php the_sub_field('testimonial_author_designation'); ?></p>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partners-section">
        <div class="container text-center">
            <h3 class="font-24 font-w-600 black-font pb-4"><?php the_field('partners_heading');?></h3>

            <div class="owl-carousel partners-carousel">
                <?php if( have_rows('partner_logos') ): ?>
                    <?php while( have_rows('partner_logos') ) : the_row(); ?>
                        <div class="partner-item">
                            <img src="<?php the_sub_field('partner_image');?>" alt="">
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="roofpro-section">
        <div class="container text-center">
            <div class="d-flex justify-content-center flex-column align-items-center">
                <img src="<?php the_field('roofpro_main_logo'); ?>" alt="IKO RoofPro">
                <!-- Second Row: Three Logos -->
                <div class="d-flex justify-content-between align-items-center my-5 w-75">
                    <?php if( have_rows('roofpro_logos') ): ?>
                        <?php while( have_rows('roofpro_logos') ) : the_row(); ?>
                            <img src="<?php the_sub_field('roofpro_logo_image');?>" class="mx-md-4" alt="IKO Advantage">
                        <?php endwhile; ?>
                    <?php endif; ?>                
                </div>
            </div>
            <h3 class="font-w-600 font-20"><?php the_field('roofpro_heading'); ?></h3>
        </div>
    </section>
    
</div>

<style>
html{overflow-x:hidden;}
</style>    

<?php
get_footer();
