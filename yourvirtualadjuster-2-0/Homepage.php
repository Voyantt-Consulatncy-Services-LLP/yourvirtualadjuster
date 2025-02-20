<?php
/* Template Name: Homepage */

get_header();
?>

    <section class="banner-section position-relative" id="home-hero-banner">
        <div class="left-hero-section position-relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup-of-three-iphones.png" alt="" class="mobile-mockups">
        </div>
        <div class="right-hero-section">
            <div class="d-flex flex-column justify-content-between align-items-start flex-wrap flex-sm-wrap">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <div class="line-container p-2 pe-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/file-board.svg" alt="">
                        <div class="line"></div>
                    </div>
                        
                    <div class="line-container  p-2 pe-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profit-increase-chart.svg" alt="">
                        <div class="line"></div>
                    </div>
                    
                    <div class="line-container p-2 pe-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/people.svg" alt="">
                        <div class="line"></div>
                    </div>
                    <div class="line-container p-2 pe-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/coins-cash.svg" alt="">
                    </div>
                </div>
                <h1 class="my-5 secondary-font black-font font-w-500 font-xl">One Platform, <br> Multiple <span class="text-primary font-w-900">Solutions!</span></h1>
                <h6 class="font-20 mb-5">The Claims Platform Built To Maximize Your Roofing Business</h6>
                <div class="d-flex mt-3">
                    <a href="tel:855-775-7550" class="btn btn-secondary text-uppercase px-4 py-2 rounded me-4 shadow"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/call-icon.svg" alt="" class="small-icon me-2"> Call Us Now</a>
                    <a href="https://calendar.google.com/calendar/u/0/appointments/schedules/AcZssZ2EzC3dZXOACYVprGdin2XEY2nCG7GDhXrBuAReOztsqu-yEN_g4K_27vNIn_2DXCC1JosZ3YDF" class="btn btn-primary text-uppercase px-4 py-2 rounded shadow" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/calender-icon.svg" alt="" class="small-icon me-2"> Book A Demo</a>
                </div>
            </div>
        </div>
    </section>

    <section class="our-solution-section" id="our-solution">
        <div class="container">
            <h3 class="font-24 font-w-600 black-font border-bottom-orange pb-4">Our Solutions</h3>
            <div class="row tab-container">
                <!-- Sidebar (Tabs) -->
                <div class="col-md-5">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
                        <button class="nav-link active" id="tab-1" data-bs-toggle="pill" data-bs-target="#content-1" role="tab">
                            <span class="tab-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/your-claims-team-icon.svg" alt=""></span> Your Claims Team
                        </button>
                        <button class="nav-link" id="tab-2" data-bs-toggle="pill" data-bs-target="#content-2" role="tab">
                            <span class="tab-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/public-adjusting-services-icon.svg" alt=""></span> Public Adjusting Services
                        </button>
                        <button class="nav-link" id="tab-3" data-bs-toggle="pill" data-bs-target="#content-3" role="tab">
                            <span class="tab-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/appraisals-services-icon.svg" alt=""></span> Appraisals
                        </button>
                    </div>
                </div>

                <!-- Content Area -->
                <div class="col-md-7">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="content-1" role="tabpanel">
                            <h3>New <span class="text-secondary">Claims</span></h3>
                            <p>“YCT” acts as your fully integrated, outsourced claims department, handling all aspects of the claims process.</p>
                            <p>Once the contingency agreement has been signed to settlement, including carrier adjuster meetings. We operate seamlessly under your brand, allowing your team to focus on scaling and sales while we manage the complexities of claims. </p>
                            <hr>
                            <h3><span class="text-secondary">Supplementing</span></h3>
                            <p>“YCT” acts as your fully integrated, outsourced claims department, handling all aspects of the claims process. Once the contingency agreement has been signed to settlement, including carrier adjuster meetings. We operate seamlessly under your brand, allowing your team to focus on scaling and sales while we manage the complexities of claims. </p>
                        </div>
                        <div class="tab-pane fade" id="content-2" role="tabpanel">
                            <h3>Public Adjusting <span class="text-secondary">Services</span></h3>
                            <p>Enhance your claims management with Public Adjusting Services powered by Bulldog Adjusters, seamlessly integrated into our platform. Our team of expert adjusters is committed to fiercely advocating for your customer at every stage of the claims process. We thoroughly review every detail, tenaciously negotiate on their behalf, and ensure nothing is overlooked. From the initial assessment to the final resolution, we stand by homeowners, providing unwavering support and clear communication. Our mission is simple: to fight for the settlement they deserve while giving them the confidence and peace of mind to navigate this often-complicated process with ease.</p>
                        </div>
                        <div class="tab-pane fade" id="content-3" role="tabpanel">
                            <h3>Appraisals <span class="text-secondary">Services</span></h3>
                            <p>Upgrade your claims management process by integrating appraisal services seamlessly with the YVA platform. Our expert appraisers deliver precise and timely assessments and efficient dispute resolution. Whether you need a standalone appraisal or one during an active claim, we seamlessly integrate into your workflow. Enhance communication and provide fair outcomes for your clients with our comprehensive appraisal services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="claim-section py-5">
        <div class="container">
            <h2 class="secondary-font black-font font-48 text-center border-top-orange py-4"><span class="text-primary font-w-600">Claim Settlement</span> In four simple Steps</h2>
             <div class="d-flex justify-content-center mt-4 flex-wrap flex-sm-wrap flex-md-nowwrap">
                <div class="card card-custom m-2">
                    <div class="circle mb-3">
                        <span>01</span>
                    </div>
                    <h5 class="mt-3 fw-bold font-20">File Submission & Intake</h5>
                    <p class="font-w-300 lh-sm">Your Claims Journey Begins</p>
                    <p>Submit your claim and let our team review the file and ensure all necessary details are prepared.</p>
                </div>
                <div class="card card-custom m-2">
                    <div class="circle mb-3">
                        <span>02</span>
                    </div>
                    <h5 class="mt-3 fw-bold font-20">Adjuster Meetings & Scoping</h5>
                    <p class="font-w-300 lh-sm">Documenting & Presenting the Loss</p>
                    <p>We schedule and meet with the insurance adjuster and thoroughly document damages.</p>
                </div>
                <div class="card card-custom m-2">
                    <div class="circle mb-3">
                        <span>03</span>
                    </div>
                    <h5 class="mt-3 fw-bold font-20">Negotiation & Communication</h5>
                    <p class="font-w-300 lh-sm">Advocating for You</p>
                    <p>We negotiate with the insurance company while providing consistent follow-ups.</p>
                </div>
                <div class="card card-custom m-2">
                    <div class="circle mb-3">
                        <span>04</span>
                    </div>
                    <h5 class="mt-3 fw-bold font-20">Claim <br>Resolution</h5>
                    <p class="font-w-300 lh-sm">Finalizing & Processing Payments</p>
                    <p>We handle payment releases, AR coordination and ensure all funds are processed smoothly.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="blue-cta">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center blue-bg px-4 py-5 flex-wrap flex-sm-wrap flex-md-nowwrap">
                <div>
                    <h3 class="text-white font-48 font-w-500 secondary-font mb-3">Looking for more <span class="text-secondary">information ?</span></h3>
                    <h5 class="text-white font-w-500 font-24">Reach Out To Us Right Now</h5>
                </div>
                <a href="https://calendar.google.com/calendar/appointments/schedules/AcZssZ2EzC3dZXOACYVprGdin2XEY2nCG7GDhXrBuAReOztsqu-yEN_g4K_27vNIn_2DXCC1JosZ3YDF" class="btn btn-secondary text-uppercase px-4 py-2 rounded me-4 shadow" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/call-icon.svg" alt="" class="small-icon me-2"> Call Us Now</a>
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
                    <h3 class="font-24 font-w-600 black-font border-bottom-orange pb-4">Platform Features</h3>
                    <h2 class="mt-4 secondary-font black-font font-48 py-4">The Only <span class="text-primary font-w-600">Claims Platform</span> You'll Ever Need</h2> 
                    <p>At YVA, we've crafted the ultimate all-in-one claims platform specifically for the roofing and storm restoration industry. Our platform integrates every aspect of claims handling into one smooth, cohesive system, setting a new standard for claims management.</p> 

                    <div class="accordion" id="accordionExample">
                        <!-- Item 1 -->
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/unified-communication-icon.svg" alt="" class="me-3"> Unified Communication
                                </button>
                            </h4>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>With YVA, our communication tools make sure everyone from your team to your clients stays updated and on the same page during the claims process. Everyone, including admins and sales teams, gets clear and consistent information, keeping things smooth and straightforward from start to finish.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-friendly-technology-icon.svg" alt="" class="me-3"> User-Friendly Technology
                                </button>
                            </h4>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Our technology is designed to be intuitive and easy to use, ensuring seamless interactions.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tailored-claims-management-icon.svg" alt="" class="me-3"> Tailored Claims Management
                                </button>
                            </h4>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Customized claims handling processes to fit your organization's needs.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/integrated-services-icon.svg" alt="" class="me-3"> Integrated Services
                                </button>
                            </h4>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Our services are integrated to provide a seamless user experience.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dedicated-support-and-training-icon.svg" alt="" class="me-3"> Dedicated Support and Training
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We offer ongoing support and training to ensure smooth operations.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing-section">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center blue-bg-2 px-4 py-4 mb-5">
                <div>
                    <h3 class="text-white font-48 font-w-500 secondary-font mb-0">Discover A Smarter Way to <span class="text-secondary">Manage Claims</span></h3>
                </div>
                <a href="https://calendar.google.com/calendar/u/0/appointments/schedules/AcZssZ2EzC3dZXOACYVprGdin2XEY2nCG7GDhXrBuAReOztsqu-yEN_g4K_27vNIn_2DXCC1JosZ3YDF" class="btn btn-secondary text-uppercase px-4 py-2 rounded me-4 shadow" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/calender-icon.svg" alt="" class="small-icon me-2"> BOOK A DEMO</a>
            </div>
            <div class="mt-5 pt-5 text-center" id="pricing-section">
                <h3 class="font-24 font-w-600 black-font border-bottom-orange pb-4">Our Pricing</h3>
                <h2 class="mt-4 secondary-font black-font font-48 py-4">Choose a Solution That <span class="text-primary font-w-600">Fits Your Needs</span></h2> 
            </div>
            <div class="card p-5 my-5 d-flex justify-content-between flex-column align-items-center w-75 mx-auto">
                <a href="tel:855-775-7550" class="btn btn-primary text-uppercase px-5 py-3 font-20 mb-5 border-radius10">Free platform access</a>
                <p class="font-w-300 lh-sm">Access our comprehensive claims management platform at <strong>no cost</strong>.</p>
                <ul class="row platform-list w-50">
                    <li class="col-6">Unlimited Users</li>
                    <li class="col-6">Insured Access</li>
                    <li class="col-6">User Access Levels</li>
                    <li class="col-6">Claim Reporting</li>
                </ul>
                <div class="w-50 d-flex align-items-center justify-content-center mt-5">
                    <a href="https://play.google.com/store/apps/details?id=com.bulldogadjuster.yva" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/google-playstore-icon.png" alt="" class="shadow border-radius10 me-2">
                    </a>
                    <a href="https://apps.apple.com/us/app/your-virtual-adjuster/id1595794766" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-store-icon.png" alt="" class="shadow border-radius10 ms-2">
                    </a>
                </div>
            </div>
            <div class="row g-4 mt-5">
                <div class="col-md-12">
                    <h2 class="secondary-font black-font font-48 text-center border-top-orange py-4"><span class="text-primary font-w-600">Rates Tailored To </span> Your Claims</h2>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-stretch g-4 mt-5 flex-wrap flex-sm-wrap flex-md-nowwrap">
                <!-- Card 1 -->
                <div class="p-2 w-25 mx-4 h-100 align-self-stretch">
                    <div class="card pricing-card">
                        <div class="pricing-header text-white font-20">YCT - New Claims</div>
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
                <div class="p-2 w-25 mx-4 h-100 align-self-stretch">
                    <div class="card pricing-card bg-primary text-white">
                        <div class="pricing-header text-primary bg-white font-20">YCT - Supplementing</div>
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
                <div class="p-2 w-25 mx-4 h-100 align-self-stretch">
                    <div class="card pricing-card">
                        <div class="pricing-header text-white font-20">Public Adjusting</div>
                        <div class="card-body d-flex flex-column">
                            <h6 class="text-center font-15">Claim Percentage</h6>
                            <h3 class="text-primary text-center font-48">15%</h3>
                            <p class="text-muted text-center font-w-300 mb-0 pb-0">of the claim amount*</p>
                            <p class="text-center font-w-300 lh-sm mt-auto"><small>*or state fee cap maximum</small></p>
                        </div>
                    </div>
                </div>
                 <!-- Card 4 -->
                <div class="d-flex flex-column p-2 w-25 mx-4 h-100 align-self-stretch">
                    <div class="card pricing-card bg-primary text-white">
                        <div class="pricing-header text-primary bg-white font-20">Appraisals</div>
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
        </div>
    </section>

    <section class="ylla-cta-section pb-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center blue-bg-3 position-relative">
                <div>
                    <h3 class="text-white font-40 font-w-900 secondary-font mb-0 text-uppercase">Learn how we help businesses navigate <br>large loss claims effortlessly. </h3>
                    <a href="https://yourlargelossadjuster.com/" class="btn btn-light text-uppercase px-4 py-2 font-w-500 rounded me-4 shadow mt-4" target="_blank">LEARN MORE</a>
                </div>
                <div class="ylla-logo-holder">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ylla-logo.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-section" id="our-testimonials">
        <div class="container text-center">
            <h3 class="font-24 font-w-600 black-font border-bottom-orange pb-4">Testimonials</h3>
            <h2 class="secondary-font black-font font-48 py-4 mt-4">What Our <span class="text-secondary font-w-600">Customers Say </span></h2>
        </div>
        <div class="testimonial-holder">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="testimonial-card">
                            <div class="owl-carousel testimonial-slider">
                                <!-- Slide 1 -->
                                <div class="p-2">
                                    <h3 class="font-20 font-w-600 mb-4">COMPREHENSIVE CLAIMS MANAGEMENT</h3>
                                    <p>
                                        "Before YVA, managing claims was a major bottleneck in our operations. 
                                        Since switching to the YVA platform, we've seen a dramatic shift. The ability 
                                        to handle everything from initial filings to final settlements through a 
                                        single portal has not only streamlined our process but also enhanced our 
                                        overall productivity."
                                    </p>
                                    <p class="text-secondary">Jake Morrison, Owner, Summit Roofing Solutions</p>
                                </div>
                                <!-- Slide 2 -->
                                <div class="p-2">
                                    <h3 class="font-20 font-w-600 mb-4">EFFICIENCY & PRODUCTIVITY BOOST</h3>
                                    <p>
                                        "YVA’s real-time updates and communication tools have made a significant 
                                        impact on our workflow, ensuring seamless claim management."
                                    </p>
                                    <p class="text-secondary">Sarah Thompson, CEO, ClaimEase</p>
                                </div>

                                <!-- Slide 3 -->
                                <div class="p-2">
                                    <h3 class="font-20 font-w-600 mb-4">SEAMLESS INTEGRATION</h3>
                                    <p>
                                        "Switching to YVA was one of the best decisions for our company. The system 
                                        integrates smoothly with our existing tools and significantly improves our efficiency."
                                    </p>
                                    <p class="text-secondary">Michael Anderson, COO, InsurePro</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partners-section">
        <div class="container text-center">
            <h3 class="font-24 font-w-600 black-font pb-4">Our <span class="text-secondary font-w-600">Strategic</span> Partners</h3>
            <div class="owl-carousel partners-carousel">
                <div class="partner-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners-logo/bulldog-adjusters-logo.png" alt="Bulldog Adjusters">
                </div>
                <div class="partner-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners-logo/iink-logo.png" alt="iink">
                </div>
                <div class="partner-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners-logo/b411-logo.png" alt="Business 411">
                </div>
                <div class="partner-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners-logo/apa-logo.png" alt="American Policyholder Association">
                </div>
                <div class="partner-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners-logo/super-affiliate.png" alt="Super Affiliate">
                </div>
                <div class="partner-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners-logo/only-roofers-logo.png" alt="Bulldog Adjusters">
                </div>
            </div>
        </div>
    </section>

    <section class="roofpro-section">
        <div class="container text-center">
            <div class="d-flex justify-content-center flex-column align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iko-logo.png" alt="IKO RoofPro">
                <!-- Second Row: Three Logos -->
                <div class="d-flex justify-content-between align-items-center my-5 w-75">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iko-advantage.png" class="mx-4" alt="IKO Advantage">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iko-select.png" class="mx-4" alt="IKO Select">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iko-craftsman-premier.png" class="mx-4" alt="IKO Craftsman Premier">
                </div>
            </div>
            <h3 class="font-w-600 font-20">Unlock Your Discounts with Our Partner Program Now!</h3>
        </div>
    </section>
    
</div>

<?php
get_footer();
