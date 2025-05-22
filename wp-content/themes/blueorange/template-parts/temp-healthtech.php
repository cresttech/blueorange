<?php
/*
Template Name: Healthtech Page
*/
get_header();
?>
<div class="page-content">
<section class="banner_sec inner_banner fintech__banner new_banner wi_full">
    <img src="<?php the_field('banner_image'); ?>" class="desktop_banner w-100">
    <img src="<?php the_field('image_mobile'); ?>" class="mobile_banner w-100">
    <div class="banner__wrap">
        <div class="container-xxl">
            <div class="banner_title text-center mb-3 private_title">
                <h1><?php the_field('heading'); ?></h1>
            </div>
            <div class="banner_content text-center">
                <div class="btn_block justify-content-center mt_2">
                    <a href="<?php the_field('button_link'); ?>" class="button orange_btn"><?php the_field('button_text'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="empowring_Sec empowering_health wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title text-center max_width mb-0">
            <h2><?php the_field('heading_1'); ?></h2>
            <?php the_field('content_1'); ?>
        </div>
    </div>
</section>
<section class="centr_partner wi_full">
    <div class="container-xxl">
        <div class="sec_subtitle">Our Partners</div>
        <div class="centered_logos">
			<?php if( have_rows('partners') ):
			while ( have_rows('partners') ) : the_row();	?>	
            <span class="cl_icon">
                <img src="<?php the_sub_field('image'); ?>">
            </span>
			<?php endwhile; endif;?>
        </div>
    </div>
</section>
<section class="tranform_health wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title text-center mb-3">
            <h2><?php the_field('heading_2'); ?> </h2>
        </div>
        <div class="row thelth_list">
			<?php if( have_rows('solutions') ):
			while ( have_rows('solutions') ) : the_row();	?>	
            <div class="col-12 col-sm-6 col-lg-3 thelth_item">
                <div class="item_inner">
                    <img src="<?php the_sub_field('icon'); ?>">
                    <h3><?php the_sub_field('title'); ?></h3>
                    <p><?php the_sub_field('content'); ?></p>
                </div>
            </div>
			<?php endwhile; endif;?>
        </div>
    </div>
</section>
<section class="health_dataintl wi_full">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="sec_image">
                    <h3>Healthcare Data Management Hierarchy</h3>
                    <img src="<?php the_field('image_1'); ?>">
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="sec_content">
                    <h2><?php the_field('heading_3'); ?></h2>
                    <?php the_field('content_2'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tranform_health wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title text-center max_large_width mb-3">
            <h2><?php the_field('heading_4'); ?></h2>
            <?php the_field('content_3'); ?>
        </div>
        <div class="row trans_hlth_list">
			<?php if( have_rows('content_4') ):
			while ( have_rows('content_4') ) : the_row();	?>	
            <div class="col-12 col-sm-6 col-lg-4 trans_hlth_item">
                <div class="item_inner">
                    <h3><?php the_sub_field('title'); ?></h3>
                    <?php the_sub_field('text'); ?>
                </div>
            </div>
			<?php endwhile; endif;?>
        </div>
    </div>
</section>
<section class="empowring_Sec empowering_health wi_full py_3 pt-0">
    <div class="container-xxl">
        <div class="sec_title text-center max_width mb-0">
            <h2><?php the_field('heading_5'); ?></h2>
            <?php the_field('content_5'); ?>
            <div class="btn_block justify-content-center">
                <a href="<?php the_field('button_link_1'); ?>" class="button blue_btn"> <?php the_field('button_text_1'); ?> <img src="<?php bloginfo('template_url') ?>/assets/images/icon-arrow-white.svg"></a>
            </div>
        </div>
    </div>
</section>
</div>
<?php get_footer(); ?>