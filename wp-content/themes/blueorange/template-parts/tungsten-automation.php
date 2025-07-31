<?php
/*
Template Name: Tungsten Automation Page
*/
get_header();
?>
<div class="page-content">
    <section class="banner_sec inner_banner partner_banner wi_full">
        <div class="container-xxl">
            <div class="banner_title text-center mb-3">
                <h1><img src="<?php the_field('logo'); ?>"></h1>
            </div>
        </div>
    </section>
    <section class="about_partner tungsten_about wi_full py_3 sec_after_sec">
        <div class="container-xxl">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="sec_title">
                        <h2><?php the_field('heading'); ?></h2>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <?php the_field('content'); ?>
                </div>
            </div>
            <div class="tungsten_list row mt_2">
                <?php if( have_rows('tungsten') ):
                while ( have_rows('tungsten') ) : the_row();    ?>
                <div class="col-12 col-sm-6 col-lg-4 tung_item">
                    <div class="item_inner">
                        <div class="item_title">
                            <span class="item_icon">
                                <img src="<?php the_sub_field('icon'); ?>">
                            </span>
                            <h3><?php the_sub_field('heading'); ?></h3>
                        </div>
                        <?php the_sub_field('content'); ?>
                    </div>
                </div>
                <?php endwhile; endif;?>
            </div>
        </div>
    </section>
    <section class="achevemnt_sec wi_full py_3">
        <div class="container-xxl">
            <div class="sec_title max_width text-center">
                <h2><?php the_field('heading_2'); ?></h2>
            </div>
            <div class="achevemnt_list row mt_2">
                <?php if( have_rows('achievements') ):
                while ( have_rows('achievements') ) : the_row();    ?>
                <div class="col-12 col-sm-6 col-lg-3 achevemnt_item">
                    <div class="item_inner">
                        <div class="item_title">
                            <span class="item_icon">
                                <img src="<?php the_sub_field('icon_2'); ?>">                        
                            </span>
                            <h3><?php the_sub_field('heading_2'); ?></h3>
                        </div>
                        <?php the_sub_field('content_2'); ?>
                    </div>
                </div>
                <?php endwhile; endif;?>
            </div>
        </div>
    </section>
    <section class="industry_recognition wi_full py_3">
        <div class="container-xxl">
            <div class="sec_title max_width text-center">
                <h2><?php the_field('heading_3'); ?></h2>
                <?php the_field('content_3'); ?>
            </div>
            <div class="recog_list row mt_2">
                <?php if( have_rows('recognition') ):
                while ( have_rows('recognition') ) : the_row();    ?>
                <div class="col-12 col-sm-6 col-md-4 recog_item">
                    <div class="item_inner text-center">
                        <img src="<?php the_sub_field('logo'); ?>">
                        <p><?php the_sub_field('text'); ?></p>
                    </div>
                </div>
                <?php endwhile; endif;?>
            </div>
        </div>
    </section>
    <section class="transform_tungson wi_full py_3">
        <div class="container-xxl">
            <div class="sec_title max_width text-center">
                <h2><?php the_field('heading_4'); ?></h2>
                <?php the_field('content_4'); ?>
                <div class="btn_block justify-content-center">
                    <a href="<?php the_field('button_link'); ?>" class="button blue_btn"><?php the_field('button_text'); ?> <img src="<?php bloginfo('template_url') ?>/assets/images/icon-arrow-white.svg"></a>
                </div>
            </div>
        </div>
    </section>
    <section class="copilot_insight wi_full py_3">
        <div class="container-xxl">
            <div class="sec_title max_width text-center">
                <h2><?php the_field('heading_5'); ?></h2>
                <?php the_field('content_5'); ?>
            </div>
            <div class="copilot_list row mt_2">
                <?php if( have_rows('copilot') ):
                while ( have_rows('copilot') ) : the_row();    ?>
                <div class="col-12 col-sm-6 copilot_item">
                    <div class="item_inner">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <?php the_sub_field('text'); ?>
                    </div>
                </div>
                <?php endwhile; endif;?>
            </div>
        </div>
    </section>
    <section class="partner_video wi_full py_3">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="sec_title mb_3">
                        <h2><?php the_field('copilot_title'); ?></h2>
                        <?php the_field('copilot_content'); ?>
                        <div class="btn_block">
                            <a href="<?php the_field('copilot_video_button_link'); ?>" class="button orange_btn"><?php the_field('copilot_video_button'); ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="video_boxx">
                        <iframe width="560" height="315" src="<?php the_field('copilot_video_link'); ?>"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>