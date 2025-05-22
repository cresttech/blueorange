<?php
/*
Template Name: Leadership Page
*/
get_header();
?>
<div class="page-content leader_page">
<section class="banner_sec inner_banner wi_full" style="background-image: url(<?php the_field('banner_image'); ?>), linear-gradient(to bottom, #192C47, #1B375F);">
    <div class="container-xxl">
        <div class="row align-items-center" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-6 title_col light_blue">
                <div class="subtitle text-uppercase"><?php the_field('subtitle'); ?></div>
                <h1 class="text-uppercase text-white"><?php the_field('heading_1'); ?></h1>
            </div>
            <div class="col-lg-6 ml-auto content_col light_blue">
                <?php the_field('content_1'); ?>
                <div class="btn_block">
                    <a href="<?php the_field('button_link_2'); ?>" class="button orange_btn"><?php the_field('button_text_2'); ?> <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="leader_team_sec wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title text-center light_grey">
            <h2 class="text_color"><?php the_field('heading_3'); ?></h2>
            <?php the_field('content_3'); ?>
        </div>
        <div class="row team_List mt_2">
            <?php if( have_rows('team') ):
            while ( have_rows('team') ) : the_row();    ?>
            <div class="col-12 col-sm-6 col-lg-4 team_item mt-3">
                <div class="item--inner light_grey">
                    <img src="<?php the_sub_field('image'); ?>"class="mem_img">
                    <h3 class="text_color"><?php the_sub_field('heading'); ?></h3>
                    <a href="<?php the_sub_field('linkedin'); ?>" target="_blank" class="mem_pos text_color">
                        <span><?php the_sub_field('position'); ?></span>
                        <img src="<?php bloginfo('template_url') ?>/assets/images/linkedin-blue.png">
                    </a>
                    <?php the_sub_field('content'); ?>
                </div>
            </div>
            <?php endwhile; endif;?>
        </div>
    </div>
</section>
<section class="overview_blueorange join_sec wi_full">
    <div class="container-xxl">
        <div class="sec_bgimg" style="background-image: url(<?php bloginfo('template_url') ?>/newimages/pattern-bg-second.svg), linear-gradient(to bottom, #192C47, #1B375F);" data-aos="fade-up" data-aos-duration="1500">
            <div class="overview--wrapper">
                <div class="sec_title text-center light_blue">
                    <div class="subtitle text-uppercase"><?php the_field('subtitle_2'); ?></div>
                    <h2 class="text-white text-uppercase"><?php the_field('heading_2'); ?></h2>
                    <?php the_field('content_2'); ?>
                    <div class="btn_block justify-content-center">
                        <a href="<?php the_field('button_link'); ?>" class="button orange_btn"><?php the_field('button_text'); ?> <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact_sec wi_full py_3 mt_3 pb-0">
    <div class="container-xxl">
        <div class="sec_title">
            <h2 class="text_color"><?php the_field('contact_title'); ?></h2>
        </div>
        <div class="contact_form">
            <div class="row">
                <div class="col-12 col-md-5 col-lg-6 info_column">
                    <div class="contct_addres text_color">
                        <?php the_field('contact_content'); ?>
                        <ul class="mt_3 no_disc">
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/assets/images/orange-email.png">
                                <a href="mailto:<?php the_field('email','option'); ?>"><?php the_field('email','option'); ?></a>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/assets/images/orange-phone.png">
                                <a href="tel:<?php the_field('phone','option'); ?>"><?php the_field('phone','option'); ?></a>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/assets/images/orange-location.png">
                                <address><?php the_field('address','option'); ?></address>
                            </li>
                        </ul>
                        <div class="contact_social mt_3">
                            <a href="https://www.linkedin.com/company/blue-orange-digital"><img src="<?php bloginfo('template_url') ?>/assets/images/linkedin-alt.png"></a>
                            <a href="https://twitter.com/BlueOrangeData"><img src="<?php bloginfo('template_url') ?>/assets/images/twitter-alt.png"></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-6 form_column">
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                    <script>
                      hbspt.forms.create({
                        region: "na1",
                        portalId: "7577521",
                        formId: "e1c6a1b6-052e-432d-9284-9c5864683740"
                      });
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<?php get_footer(); ?>