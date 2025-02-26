<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yourvirtualadjuster_2.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main-style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="layout-holder">
    <header>
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo-holder flex-grow-1">
					<?php 
						$custom_logo = get_custom_logo();
						if ($custom_logo) {
							// Add class to the <img> tag
							$custom_logo = str_replace('<img', '<img class="logo"', $custom_logo);
							
							// Modify <a> tag
							$custom_logo = str_replace('<a', '<a class="navbar-brand text-white fw-bold"', $custom_logo);
							
							echo $custom_logo;
						}
					?>
                </div>
                <div class="nav-holder">
                    <nav class="navbar navbar-expand-lg custom-nav">
                        <button class="navbar-toggler <?php echo (is_front_page() || is_home()) ? 'hamburger-black' : 'hamburger-white'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav d-none">
                                <li class="nav-item"><a class="nav-link active" href="#"><i class="fa-solid fa-house"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Solutions</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Testimonials</a></li>
                            </ul>
							<?php 
								wp_nav_menu( array( 
									'theme_location' => 'menu-1',
									// 'menu_class' => 'navbar-nav',
                                    'menu_class' => 'navbar-nav ' . ((is_front_page() || is_home()) ? 'home' : 'other-page'),
									'sort_column' => 'menu_order',
									'depth' => 2,
									'container' => false,
								)); 
							?>
                        </div>
                    </nav>
                </div>
				<div class="d-flex header-buttons-holder ms-2">
                    <a href="tel:855-775-7550" class="btn btn-secondary text-uppercase px-xl-4 py-xl-2 rounded"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/call-icon.svg" alt="" class="small-icon me-2"> Call Us <strong>: 855-775-7550</strong></a>
                    <a href="https://app.yva.claims/" class="btn btn btn-outline-secondary text-uppercase px-xl-4 py-xl-2 ms-3 <?php echo (is_front_page() || is_home()) ? 'btn-outline-secondary' : 'btn-outline-light'; ?>" target="_blank">Login</a>
                </div>
            </div>
        </div>
    </header>