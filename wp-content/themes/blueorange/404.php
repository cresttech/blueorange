<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<section class="error_sec wi_full" style="background-image: url(<?php the_field('image_404', 'options'); ?>), linear-gradient(to bottom, #192C47, #1B375F);">
	<!-- <img src="<?php// echo site_url(); ?>/wp-content/uploads/2025/05/404.svg" class="pos_404"> -->
    <div class="container-xxl position-relative">
        <div class="sec_content text-center light_blue">
        	<img src="<?php the_field('error_logo', 'options'); ?>" class="error_icon">
			<h1 class="text-white"><?php the_field('title_404', 'options'); ?></h1>
			<p><?php the_field('text_404', 'options'); ?></p>
			<div class="btn_block justify-content-center">
				<a href="<?php echo site_url(); ?>/" class="button orange_btn">Go back to home <i class="fas fa-angle-right"></i></a>
			</div>
        </div>
    </div>
</section>

<?php
get_footer();