<?php
/*
Template Name: Industry Fintech Payments
*/
get_header();
?>
<div class="page-content industry_page">
<section class="banner_sec inner_banner wi_full" style="background-image: url(<?php the_field('banner_image'); ?>), linear-gradient(to bottom, #192C47, #1B375F);">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-6 title_col text-white">
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
         <div class="banner_logos_wraper real_estate_bnr_logo mt-5" data-aos="fade-up" data-aos-duration="2500">
            <div class="client--wrapper">
				<?php if( have_rows('banner_logos') ):
				while ( have_rows('banner_logos') ) : the_row();	?>
					<div class="item text-center"><img src="<?php the_sub_field('image'); ?>" alt="#"></div>
				<?php endwhile; endif;?>
            </div>
            <div class="client--wrapper">
                <?php if( have_rows('banner_logos') ):
				while ( have_rows('banner_logos') ) : the_row();	?>
					<div class="item text-center"><img src="<?php the_sub_field('image'); ?>" alt="#"></div>
				<?php endwhile; endif;?>
            </div>
        </div>
    </div>
</section>
<section class="tailored_innovation wi_full py_3">
    <div class="container-xxl">
        <div class="row flex-lg-row-reverse align-items-center" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-6 title_col light_grey">
                <div class="subtitle text-uppercase"><?php the_field('sub_heading_2'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_2'); ?></h2>
                <?php the_field('content_2'); ?>
                <div class="btn_block">
                    <a href="<?php the_field('button_link_2'); ?>" class="button orange_btn"><?php the_field('button_text_2'); ?> <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 image_col mt-4 mt-lg-0">
                <img src="<?php the_field('image_1'); ?>" class="w-100">
            </div>
        </div>
    </div>
</section>
<section class="data_services wi_full py_3">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-5 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_3'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_3'); ?></h2>
            </div>
            <div class="col-lg-6 ml-auto content_col light_grey">
                <?php the_field('content_3'); ?>
            </div>
        </div>
        <div class="data_service_list row" data-aos="fade-up" data-aos-duration="2000">
			<?php if( have_rows('content_4_1') ):
			while ( have_rows('content_4_1') ) : the_row();	?>
            <div class="col-md-6 col-lg-3 ds--item">
                <div class="item--inner light_grey">
                    <div class="item--icon">
                        <img src="<?php the_sub_field('icon'); ?>" alt="#">
                    </div>
                    <h4 class="text_color"><?php the_sub_field('title'); ?></h4>
                    <?php the_sub_field('content'); ?>
                </div>
            </div>
			<?php endwhile; endif;?>
        </div>
    </div>
</section>
<section class="migrating_databricks secbg_lite_blue wi_full py_3">
    <div class="container-xxl">
        <div class="row" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-6 title_col light_grey">
                <div class="subtitle text-uppercase"><?php the_field('sub_heading_4_o'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_4_o'); ?></h2>
                <?php the_field('content_5'); ?>
            </div>
            <div class="col-lg-6 ml-auto content_col data_service_list">
				<?php if( have_rows('content_4_2') ):
				while ( have_rows('content_4_2') ) : the_row();	?>
                <div class="ds--item">
                    <div class="item--inner light_grey">
                        <div class="item--icon">
                            <img src="<?php the_sub_field('icon'); ?>" alt="#">
                        </div>
                        <h4 class="text_color"><?php the_sub_field('title'); ?></h4>
                        <?php the_sub_field('content'); ?>
                    </div>
                </div>
				<?php endwhile; endif;?>
            </div>
        </div>
    </div>
</section>
<section class="overview_blueorange payment_future wi_full py_3 pb-0">
    <div class="container-xxl">
        <div class="sec_bgimg" style="background-image: url(<?php bloginfo('template_url') ?>/newimages/pattern-bg-overview.svg), linear-gradient(to bottom, #192C47, #1B375F);" data-aos="fade-up" data-aos-duration="1500">
            <div class="overview--wrapper">
                <div class="row align-items-end">
                    <div class="col-lg-5 title_col">
                        <div class="subtitle text-uppercase light_blue"><?php the_field('sub_heading_4'); ?></div>
                        <h2 class="text-uppercase text-white"><?php the_field('heading_4'); ?></h2>
                    </div>
                    <div class="col-lg-6 ml-auto content_col light_blue">
                        <?php the_field('content_6'); ?>
                    </div>
                </div>
                <div class="pymnt_futur_list row">
                    <div class="col-md-6 list--item">
                        <div class="item--inner light_blue">
                            <?php the_field('content_7'); ?>
                        </div>
                    </div>
                    <div class="col-md-6 list--item">
                        <div class="item--inner light_blue">
                            <?php the_field('content_8_f'); ?>
                        </div>
                    </div>
                </div>
                <div class="pymnt_futur_growth row align-items-center mt-5">
                    <div class="col-md-6 text_col light_blue">
                        <div class="subtitle text-uppercase"><?php the_field('sub_heading_5f'); ?></div>
                        <h2 class="text-uppercase text-white"><?php the_field('heading_5f'); ?></h2>
                        <?php the_field('content_5f'); ?>
                        <div class="btn_block">
                            <a href="<?php the_field('button_link_4'); ?>" class="button orange_btn"><?php the_field('button_text_4'); ?> <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 video_col mt-3 mt-md-0">
                        <iframe title="Block redefines financial services with the help of Databricks" width="100%" height="360" src="<?php the_field('youtube_link'); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="data_services wi_full py_3">
    <div class="container-xxl">
        <div class="row data_engg_challenge flex-lg-row-reverse" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-6">
                <div class="sec-title">
                    <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_8'); ?></div>
                    <h2 class="text-uppercase text_color mb-0"><?php the_field('heading_8'); ?></h2>
                </div>
                <div class="data_service_list row">
					<?php if( have_rows('content_12') ):
					while ( have_rows('content_12') ) : the_row();	?>
                    <div class="col-sm-6 ds--item mt-3">
                        <div class="item--inner light_grey">
                            <div class="item--icon">
                                <img src="<?php the_sub_field('icon'); ?>" alt="#">
                            </div>
                            <h4 class="text_color"><?php the_sub_field('title'); ?></h4>
                            <p><?php the_sub_field('text'); ?></p>
                        </div>
                    </div>
					<?php endwhile; endif;?>
                </div>
            </div>
            <div class="col-lg-6 img_col">
                <img src="<?php the_field('image_2'); ?>" class="w-100">
            </div>
        </div>
    </div>
</section>
<section class="strategic_partnership payment_revolution no_bg_color wi_full py_3 pb-2">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-6 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_9'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_9'); ?></h2>
            </div>
            <div class="col-lg-6 ml-auto content_col light_grey">
                <?php the_field('content_13'); ?>
            </div>
        </div>
        <div class="strategic_process position-relative" data-aos="fade-up" data-aos-duration="1500">
            <div class="progress-line"></div>
            <div class="strategy_step_progress">
				<?php if( have_rows('content_14') ):
				while ( have_rows('content_14') ) : the_row();	?>
                <div class="sp_item">
                    <h4><?php the_sub_field('title'); ?></h4>
                    <p><?php the_sub_field('text'); ?></p>
                </div>
				<?php endwhile; endif;?>
            </div>
        </div>
    </div>
</section>
</div>
<?php get_footer(); ?>

<script>
$(document).ready(function () {
  const $steps = $('.sp_item');
  const totalSteps = $steps.length;
  const delayPerStep = 500;
  const totalDuration = totalSteps * delayPerStep;

  const observer = new IntersectionObserver(function (entries, observer) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        // Show steps
        $steps.each(function (i) {
          const $step = $(this);
          setTimeout(() => {
            $step.addClass('visible');
          }, i * delayPerStep);
        });

        // Animate progress line
        const $progressLine = $('.progress-line');
        const isMobile = window.innerWidth <= 576;

        if (isMobile) {
          $progressLine.css({
            transition: `height ${totalDuration}ms ease-in-out`,
            height: '100%'
          });
        } else {
          $progressLine.css({
            transition: `width ${totalDuration}ms ease-in-out`,
            width: '100%'
          });
        }

        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  observer.observe(document.querySelector('.strategy_step_progress'));
});
</script>