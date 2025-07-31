<?php
/*
Template Name: Databricks Happy Hour Page
*/
get_header();
?>
<div class="page-content">
<section class="banner_sec inner_banner fintech__banner new_banner wi_full">
    <img src="<?php the_field('banner_image'); ?>" class="desktop_banner w-100">
    <img src="<?php the_field('image_mobile'); ?>" class="mobile_banner w-100">
    <div class="banner__wrap">
        <div class="container-xxl">
            <div class="banner_title text-center mb-3">
                <h1><?php the_field('heading'); ?></h1>
            </div>
            <div class="banner_content text-center">
                <div class="btn_block justify-content-center mt_2">
                    <a href="<?php the_field('button_link'); ?>" class="button orange_btn"><?php the_field('banner_text'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="centr_partner_col wi_full py_3 pb-0">
    <div class="container-xxl">
        <div class="centered_logos">
			<?php if( have_rows('logos') ):
			while ( have_rows('logos') ) : the_row();	?>
            <span class="cl_icon">
                <img src="<?php the_sub_field('image'); ?>">
            </span>
			<?php endwhile; endif;?>
        </div>
    </div>
</section>
<section class="vip_happy_hrs wi_full py_3">
    <div class="container-xxl">
        <div class="max_width">
            <div class="sec_title text-center mb-3">
                <h2><?php the_field('heading_1'); ?></h2>
                <p><strong><?php the_field('content_1'); ?></strong></p>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 mt-4">
                    <div class="sec_content">
                        <?php the_field('content_2'); ?>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="sec_image mt-4">
                        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=400&amp;height=300&amp;hl=en&amp;q=310 W 40th St, Manhattan, New York, NY, 10018&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://sprunkin.com">Sprunki Mods</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:300px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:300px;}.gmap_iframe {height:300px!important;}</style></div>
                    </div>
                </div>
            </div>
            <div class="sec_title text-center mb-0 mt-5">
                <?php the_field('content_3'); ?>
                <div class="btn_block justify-content-center mt_2">
                    <a href="#request-spot" class="button blue_btn">Request Your Spot <img src="<?php bloginfo('template_url') ?>/assets/images/icon-arrow-white.svg"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why_attend wi_full py_3 bg_bluee">
    <div class="container-xxl">
        <div class="sec_title text-center mb-3">
            <h2><?php the_field('heading_2'); ?></h2>
        </div>
        <div class="row attend_list">
			<?php if( have_rows('content_4') ):
			while ( have_rows('content_4') ) : the_row();	?>
            <div class="col-12 col-sm-6 col-lg-4 attend_item">
                <div class="item_inner">
                    <img src="<?php the_sub_field('icon'); ?>" class="tick_icn">
                    <h3><?php the_sub_field('title'); ?></h3>
                    <p><?php the_sub_field('text'); ?></p>
                </div>
            </div>
			<?php endwhile; endif;?>
        </div>
    </div>
</section>
<section class="databricks_digital wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title text-center max_width mb-0">
            <h2><?php the_field('heading_3'); ?></h2>
            <?php the_field('content_5'); ?>
        </div>
    </div>
</section>
<section class="reserve_spot wi_full py_3 bg_bluee" id="request-spot">
    <div class="container-xxl">
        <div class="sec_title text-center max_width mb-0">
             <h2><?php the_field('heading_4'); ?></h2>
            <?php the_field('content_6'); ?>
            <div class="btn_block justify-content-center">
                <a href="<?php the_field('button_link_1'); ?>" class="button blue_btn" target="_blank"><?php the_field('banner_text_1'); ?> <img src="<?php bloginfo('template_url') ?>/assets/images/icon-arrow-white.svg"></a>
            </div>
        </div>
    </div>
</section>
</div>
<?php get_footer(); ?>