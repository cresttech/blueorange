<?php
/*
Template Name: Fintech Page
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
                    <a href="<?php the_field('button_link'); ?>" class="button orange_btn"><?php the_field('button_text'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="empowring_Sec wi_full py_3">
    <div class="container-xxl">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="sec_content">
                    <h2><?php the_field('heading_1'); ?></h2>
                    <?php the_field('content_1'); ?>
                    <div class="btn_block mt-0">
                        <a href="<?php the_field('button_link_1'); ?>" class="button blue_btn"><?php the_field('button_text_1'); ?> <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-arrow-white.svg"></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="sec_image">
                    <img src="<?php the_field('image_1'); ?>">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="challenge_Sec wi_full">
    <div class="container-xxl">
        <div class="sec_title text-center mb-3">
            <h2><?php the_field('heading_2'); ?></h2>
        </div>
        <div class="row challenge_list">
			<?php if( have_rows('content_2') ):
			while ( have_rows('content_2') ) : the_row();	?>
            <div class="col-12 col-lg-6 chlnge_li_item">
                <div class="chlng_inner">
                    <h3><?php the_sub_field('title'); ?></h3>
                    <p><?php the_sub_field('text'); ?></p>
                </div>
            </div>
			<?php endwhile; endif;?>
        </div>
    </div>
</section>
<section class="empowring_Sec wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title text-center max_width mb-3">
            <h2><?php the_field('heading_3'); ?></h2>
            <?php the_field('content_3'); ?>
            <div class="centered_logos">
				<?php if( have_rows('logos') ):
				while ( have_rows('logos') ) : the_row();	?>
                <span class="cl_icon">
                    <img src="<?php the_sub_field('image'); ?>">
                </span>
				<?php endwhile; endif;?>
            </div>
        </div>
        <div class="row empowring_list">
            <div class="col-12 col-lg-6 empowring_item">
                <div class="item_inner">
                     <?php the_field('content_4'); ?>
                </div>
            </div>
            <div class="col-12 col-lg-6 empowring_item">
                <div class="item_inner">
                    <?php the_field('content_5'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="realtime_Sec wi_full">
    <div class="container-xxl">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="sec_content">
                    <h2><?php the_field('heading_4'); ?></h2>
                    <div class="rtc_list">
						<?php if( have_rows('content_6') ):
						while ( have_rows('content_6') ) : the_row();	?>
                        <div class="rtc_item">
                            <img src="<?php the_sub_field('icon'); ?>">
                            <h3><?php the_sub_field('title'); ?></h3>
                            <p><?php the_sub_field('text'); ?></p>
                        </div>
						<?php endwhile; endif;?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="sec_image">
                    <img src="<?php the_field('image_2'); ?>">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="growth_Sec wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title text-center max_width mb-3">
            <h2 class="mb-3"><?php the_field('heading_5'); ?></h2>
            <img src="<?php the_field('image_3'); ?>" class="graph_img">
        </div>
        <div class="sec_video_img">
            <img src="<?php the_field('image_4'); ?>" class="cashap_img">
            <?php the_field('content_7'); ?>
            <div class="growth_video">
               <?php the_field('video'); ?>
            </div>
        </div>
    </div>
</section>
<section class="fin_benfit_Sec wi_full py_3 pt-0">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="sec_content">
                    <h2 class="mb-4"><?php the_field('heading_6'); ?></h2>
                    <div class="row fb_list">
						<?php if( have_rows('content_8') ):
						while ( have_rows('content_8') ) : the_row();	?>
                        <div class="col-12 col-lg-6 fb_item">
                            <div class="item_inner">
                                <h3><?php the_sub_field('title'); ?></h3>
                                <p><?php the_sub_field('text'); ?></p>
                            </div>
                        </div>
						<?php endwhile; endif;?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="sec_image">
                    <img src="<?php the_field('image_5'); ?>">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="echosystem_Sec wi_full">
    <div class="container-xxl">
        <div class="row flex-lg-row-reverse align-items-center">
            <div class="col-12 col-lg-6">
                <div class="sec_content">
                    <h2><?php the_field('heading_7'); ?></h2>
                    <div class="eco_list">
						<?php if( have_rows('content_9') ):
						while ( have_rows('content_9') ) : the_row();	?>
                        <div class="eco_item">
                            <h3><?php the_sub_field('title'); ?></h3>
                            <p><?php the_sub_field('text'); ?></p>
                        </div>
						<?php endwhile; endif;?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="sec_image">
                    <img src="<?php the_field('image_6'); ?>">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="empowring_Sec wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title text-center max_width">
            <h2><?php the_field('heading_8'); ?></h2>
             <?php the_field('content_10'); ?>
            <div class="btn_block justify-content-center">
                <a href="<?php the_field('button_link_2'); ?>" class="button blue_btn"><?php the_field('button_text_2'); ?> <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-arrow-white.svg"></a>
            </div>
        </div>
    </div>
</section>
</div>
<?php get_footer(); ?>