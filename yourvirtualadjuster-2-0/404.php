<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package yourvirtualadjuster_2.0
 */

get_header();
?>
<section class="privacy-section position-relative text-white text-center py-5">
    <div class="container">
        <h1 class="text-white secondary-font font-w-500 font-xl">404 - Page Not Found</h1>
    </div>
</section>
<section class="privacy-content text-center py-md-5 py-3">
	<div class="container">
		<h5 class="font-24 font-w-600 text-primary"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'yourvirtualadjuster-2-0' ); ?></h5>
	</div>
</section>
<?php
get_footer();
