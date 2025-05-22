<?php
/*
Template Name: Databricks Workshops Page
*/
get_header();
?>
<div class="page-content partner_d_page">
<section class="banner_sec inner_banner wi_full" style="background-image: url(<?php the_field('banner_image'); ?>), linear-gradient(to bottom, #192C47, #1B375F);">
    <div class="container-xxl">
        <div class="row align-items-center" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-md-7 col-lg-6 title_col light_blue">
                <div class="subtitle text-uppercase"><?php the_field('sub_heading'); ?></div>
                <h1 class="text-uppercase text-white"><?php the_field('heading'); ?></h1>
                <?php the_field('content_7'); ?>
                <div class="btn_block">
                    <a href="<?php the_field('button_link_1'); ?>" class="button orange_btn"><?php the_field('button_text_1'); ?> <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-5 col-lg-5 ml-auto logo_col text-center">
                <img src="<?php the_field('image'); ?>">
            </div>
        </div>
    </div>
</section>
<section class="tailored_innovation wi_full py_3">
    <div class="container-xxl">
        <div class="row" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-6 title_col">
                <h2 class="text-uppercase text_color"><?php the_field('heading_1'); ?></h2>
            </div>
            <div class="col-lg-6 content_col mt-4 mt-lg-0 light_grey">
                <?php the_field('content_1'); ?>
            </div>
        </div>
    </div>
</section>
<section class="migrating_databricks secbg_lite_blue wi_full py_3">
    <div class="container-xxl">
        <div class="row" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-4 title_col">
                <h2 class="text-uppercase text_color"><?php the_field('heading_2'); ?></h2>
            </div>
            <div class="col-lg-6 ml-auto content_col migrate_list">
                <?php if( have_rows('content_2') ):
                while ( have_rows('content_2') ) : the_row();   ?>
                <div class="ds--item">
                    <div class="item--inner light_grey">
                        <div class="item--icon">
                            <img src="<?php the_sub_field('icon'); ?>" alt="#">
                        </div>
                        <h4 class="text_color"><?php the_sub_field('title'); ?></h4>
                        <?php the_sub_field('text'); ?>
                    </div>
                </div>
                <?php endwhile; endif;?>
            </div>
        </div>
    </div>
</section>
<section class="overview_blueorange fabric_databricks wi_full py_3">
    <div class="container-xxl">
        <div class="sec_bgimg" style="background-image: url(<?php bloginfo('template_url') ?>/newimages/pattern-bg-overview.svg), linear-gradient(to bottom, #192C47, #1B375F);" data-aos="fade-up" data-aos-duration="1500">
            <div class="overview--wrapper overview_why_blueornge">
                <div class="row align-items-end">
                    <div class="col-lg-5 title_col">
                        <h2 class="text-uppercase text-white"><?php the_field('heading_3'); ?></h2>
                    </div>
                </div>
                <div class="why-bo-list row mt-1">
                    <?php if( have_rows('content_3') ):
                    while ( have_rows('content_3') ) : the_row();   ?>
                    <div class="list--item">
                        <div class="item--inner light_blue">
                            <h4 class="text-white"><?php the_sub_field('title'); ?></h4>
                            <?php the_sub_field('text'); ?>
                        </div>
                    </div>
                    <?php endwhile; endif;?>
                </div>
                <div class="light_blue mt-5 text-center">
                    <?php the_field('text'); ?>
                    <div class="btn_block justify-content-center">
                        <a href="/contact-us/" class="button orange_btn">Contact Us <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="how_it_works_list row align-items-center mt-5">
                    <div class="row">
                        <div class="col-lg-5 title_col">
                            <h2 class="text-uppercase text-white mb-3 mb-lg-0"><?php the_field('heading_4'); ?></h2>
                        </div>
                        <div class="col-lg-6 ml-auto how_list">
                            <?php if( have_rows('content_4') ):
                            while ( have_rows('content_4') ) : the_row();   ?>
                            <div class="how_item">
                                <div class="item_inner light_blue">
                                   <h4 class="text-white"><?php the_sub_field('title'); ?></h4>
                                    <?php the_sub_field('text'); ?>
                                </div>
                            </div>
                            <?php endwhile; endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why_fabric_databricks secbg_lite_blue wi_full py_3">
    <div class="container-xxl">
        <div class="row" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-md-8 col-lg-6 mx-auto title_col light_grey">
                <h2 class="text-uppercase text_color"><?php the_field('heading_5'); ?></h2>
                <?php the_field('content_5'); ?>
                <?php the_field('list_content'); ?>
            </div>
        </div>
    </div>
</section>
<section class="reserve_spot wi_full py_3 pb-0" id="request-spot">
    <div class="container-xxl">
        <div class="row">
            <div class="col-lg-7 col-md-10 mx-auto">
                <div class="sec_title text-center mb-0 light_grey">
                    <h2 class="text_color text-uppercase"><?php the_field('heading_6'); ?></h2>
                    <?php the_field('content_6'); ?>
                    <div class="btn_block justify-content-center">
                        <a href="<?php the_field('button_link'); ?>" class="button blue_btn" target="_blank">
                            <?php the_field('button_text'); ?> <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<?php get_footer(); ?>