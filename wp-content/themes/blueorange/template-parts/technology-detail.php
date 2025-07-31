<?php
/*
Template Name: Technology Detail
*/
get_header();
?>
<div class="page-content">
<section class="banner_sec inner_banner wi_full" style="background: url(<?php the_field('banner_image'); ?>) no-repeat center; background-size: cover;">
    <div class="container-xxl">
        <div class="banner_title text-center mb-3 small_title">
            <h1><?php the_field('heading_1'); ?></h1>
        </div>
        <div class="banner_content text-center">
            <?php the_field('content_1'); ?>
            <div class="btn_block justify-content-center mt_2">
                <a href="<?php the_field('button_link_1'); ?>" class="button orange_btn"><?php the_field('button_text_1'); ?></a>
            </div>
        </div>
    </div>
</section>
<section class="analysis_ec wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title max_width text-center">
            <h2><?php the_field('heading_2'); ?></h2>
        </div>
        <div class="max_width text-center">
            <?php the_field('heading_2'); ?>
            <div class="btn_block justify-content-center">
                <a href="<?php the_field('button_link_2'); ?>" class="button orange_btn"><?php the_field('button_text_2'); ?></a>
            </div>
        </div>
    </div>
</section>
<section class="tech_partner wi_full py_3 position-relative">
    <div class="container-xxl">
        <div class="sec_title text-center">
            <h2><?php the_field('heading_3'); ?></h2>
        </div>
        <div class="tecpart_wrapper row">
			<?php if( have_rows('technologies') ):
			while ( have_rows('technologies') ) : the_row();	?>
				<div class="item"><img src="<?php the_sub_field('image'); ?>" alt="#"></div>
			<?php endwhile; endif;?>
        </div>
        <div class="sec_subtitle"><?php the_field('heading_3'); ?></div>
    </div>
</section>
<section class="open_source_sec wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title max_width text-center">
            <h2><?php the_field('heading_4'); ?></h2>
			<?php the_field('content_3'); ?>
        </div>
        <div class="source_logo row mt_3">
			<?php if( have_rows('logos') ):
			while ( have_rows('logos') ) : the_row();	?>
            <div class="logo_item">
                <img src="<?php the_sub_field('image'); ?>" alt="#">
            </div>
			<?php endwhile; endif;?>
        </div>
        <div class="btn_block justify-content-center">
            <a href="<?php the_field('button_link_3'); ?>" class="button blue_btn"><?php the_field('button_text_3'); ?> <img src="<?php bloginfo('template_url') ?>/assets/images/icon-arrow-white.svg"></a>
        </div>
    </div>
</section>
<section class="certificate_sec wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title max_width text-center">
            <h2><?php the_field('heading_5'); ?></h2>
        </div>
        <div class="certificate_logo row mt_3">
			<?php if( have_rows('certifications') ):
			while ( have_rows('certifications') ) : the_row();	?>
            <div class="logo_item">
                <img src="<?php the_sub_field('image'); ?>" alt="#">
            </div>
			<?php endwhile; endif;?>
        </div>
    </div>
</section>
</div>
<?php get_footer(); ?>