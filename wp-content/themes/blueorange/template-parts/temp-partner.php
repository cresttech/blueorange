<?php
/*
Template Name: Partner Page
*/
get_header();
?>
<div class="page-content partner_page">
<section class="banner_sec inner_banner wi_full" style="background-image: url(<?php the_field('banner_image'); ?>), linear-gradient(to bottom, #192C47, #1B375F);">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-5 title_col text-white">
                <div class="subtitle text-uppercase"><?php the_field('sub_heading_1'); ?></div>
                <h1 class="text-uppercase mb-lg-0"><?php the_field('heading_1'); ?></h1>
            </div>
            <div class="col-lg-6 ml-auto content_col light_blue">
                <?php the_field('content_1'); ?>
                <div class="btn_block">
                    <a href="<?php the_field('button_link_1'); ?>" class="button orange_btn"><?php the_field('button_text_1'); ?> <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tailored_innovation wi_full py_3">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-5 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_2'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_2'); ?></h2>
            </div>
            <div class="col-lg-6 ml-auto content_col light_grey">
                <?php the_field('content_2'); ?>
            </div>
        </div>
    </div>
</section>
<section class="overview_blueorange overview_collaboration wi_full">
    <div class="container-xxl">
        <div class="sec_bgimg" style="background-image: url(<?php bloginfo('template_url') ?>/newimages/pattern-bg-overview.svg), linear-gradient(to bottom, #192C47, #1B375F);" data-aos="fade-up" data-aos-duration="1500">
            <div class="overview--wrapper">
                <div class="sec_title">
                    <div class="subtitle text-uppercase light_blue"><?php the_field('sub_heading_3'); ?></div>
                    <h2 class="text-uppercase text-white"><?php the_field('heading_3'); ?></h2>
                </div>
                <div class="collab_list row">
					<?php if( have_rows('partnerships') ):
					while ( have_rows('partnerships') ) : the_row();	?>
                    <div class="list--item">
                        <div class="item--inner light_blue">
							<?php if(get_sub_field('link') != '') {?><a href="<?php the_sub_field('link'); ?>"><?php } ?>
                            <div class="icon_btn">
                                <img src="<?php the_sub_field('image'); ?>" class="ico_msg">
								<?php if(get_sub_field('link') != '') {?>
									<div class="more_button"><img src="<?php bloginfo('template_url') ?>/newimages/arrow_upward.svg" alt="#"></div>
								<?php } ?>
                            </div>
                            <h4 class="text-white"><?php the_sub_field('title'); ?></h4>
                            <?php the_sub_field('text'); ?>
							<?php if(get_sub_field('link') != '') {?></a><?php } ?>
                        </div>
                    </div>
					<?php endwhile; endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our_certificate wi_full py_3">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-5 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_4'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_4'); ?></h2>
            </div>
            <div class="col-lg-6 ml-auto content_col light_grey">
                <?php the_field('content_3'); ?>
            </div>
        </div>
        <div class="certificate_grid">
            <?php if( have_rows('certification') ):
            while ( have_rows('certification') ) : the_row();    ?>
            <div class="logo_item">
                <img src="<?php the_sub_field('image_1'); ?>" alt="#">
            </div>
            <?php endwhile; endif;?>
        </div>
    </div>
</section>
</div>
<?php get_footer(); ?>