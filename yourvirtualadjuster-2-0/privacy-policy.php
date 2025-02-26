<?php
/* Template Name: Privacy policy */

get_header();
?>

		<section class="privacy-section position-relative text-white text-center py-5">
            <div class="container">
                <h1 class="text-white">Privacy <span class="text-secondary">Policy</span></h1>
                <p class="text-white"><?php the_field('privacy_policy_revised'); ?></p>
            </div>
        </section>

		<section class="privacy-content container py-md-5 py-3">

			<div class="row">

				<!-- Sidebar Navigation -->

				<div class="col-lg-4 col-12 py-5 px-4">
					<?php if( have_rows('privacy_policy_section') ): ?>
						<ul class="list-unstyled privacy-sidebar sticky-top">
							<?php while( have_rows('privacy_policy_section') ): the_row(); ?>
								<li>
									<a class="text-primary font-w-600 d-block py-3" href="#<?php the_sub_field('section_id'); ?>">
										<?php the_sub_field('section_title'); ?>
									</a>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>

				<!-- Main Content -->
				
				<div class="col-lg-8 col-12 p-5 pe-0">
					<div class="privacy-container">
						<p><?php the_content(); ?></p>

						<?php if( have_rows('privacy_policy_section') ): ?>
							<?php while( have_rows('privacy_policy_section') ): the_row(); ?>
								<div class="mb-5">
									<h2 id="<?php the_sub_field('section_id'); ?>" class="font-20 font-w-600 black-font border-bottom-orange pb-4">
										<?php the_sub_field('section_title'); ?>
									</h2>
									<div class="mt-5">
										<?php the_sub_field('section_content'); ?>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>

			</div>

		</section>
		
<?php
get_footer();
