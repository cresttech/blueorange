<?php
/*
Template Name: About Page
*/
get_header();
?>
<div class="page-content about_page">
<section class="banner_sec inner_banner wi_full" style="background-image: url(<?php the_field('image_1'); ?>), linear-gradient(to bottom, #192C47, #1B375F);">
    <div class="container-xxl">
        <div class="row align-items-center" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-6 title_col light_blue">
                <div class="subtitle text-uppercase"><?php the_field('sub_heading_1'); ?></div>
                <h1 class="text-uppercase text-white"><?php the_field('heading_1'); ?></h1>
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
<section class="about_after_bnr">
    <div class="container-xxl" data-aos="fade-up" data-aos-duration="2500">
        <img src="<?php the_field('image_2'); ?>" class="w-100
        ">
    </div>
</section>
<section class="b_service_sec aboutus_tabs wi_full py_3">
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
        <div class="case--tabs-wrapper row mt-5" id="strategySection" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-5">
                <ul class="nav nav-tabs" id="strategyTabs" role="tablist">
					<?php if( have_rows('content_4') ):
					$count = 0;
					while ( have_rows('content_4') ) : the_row();	?>
                    <li class="nav-item">
                        <a class="nav-link bo_progress_tab <?php if($count == 0) { echo 'active'; } ?>" data-toggle="tab" href="#Tab<?php echo $count; ?>" role="tab" data-index="<?php echo $count; ?>"><?php the_sub_field('title'); ?></a>
                        <div class="progress" data-index="<?php echo $count; ?>">
                            <div class="progress-bar tab-progress" id="progressBar<?php echo $count; ?>"></div>
                        </div>
                    </li>
					<?php $count++; endwhile; endif;?>
                </ul>
            </div>
            <div class="col-lg-7">
                <div class="tab-content" id="strategyTabContent">
					<?php if( have_rows('content_4') ):
					$count = 0;
					while ( have_rows('content_4') ) : the_row();	?>
                    <div class="tab-pane card <?php if($count == 0) { echo 'active'; } ?>" id="Tab<?php echo $count; ?>" role="tabpanel">
                        <div class="card-header" role="tab" id="tabheading-<?php echo $count; ?>">
                            <a class="" data-toggle="collapse" href="#collapse-<?php echo $count; ?>" aria-controls="collapse-<?php echo $count; ?>"><?php the_sub_field('title'); ?></a>
                        </div>
                        <div id="collapse-<?php echo $count; ?>" class="collapse <?php if($count == 0) { echo 'show'; } ?>" data-parent="#strategyTabContent" role="tabpanel" aria-labelledby="tabheading-<?php echo $count; ?>">
                            <div class="sec_bgimg tab--data" style="background-image: url(<?php the_sub_field('image'); ?>), linear-gradient(to bottom, #192C47, #1B375F);">
                                <h3 class="text-white"><?php the_sub_field('title'); ?></h3>
                                <div class="text_wrap_box light_blue">
                                    <?php the_sub_field('text'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php $count++; endwhile; endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tailored_innovation wi_full py_3">
    <div class="container-xxl">
        <div class="row flex-lg-row-reverse align-items-center" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-6 title_col light_grey">
                <h2 class="text-uppercase text_color"><?php the_field('heading_3'); ?></h2>
                <?php the_field('content_3'); ?>
            </div>
            <div class="col-lg-6 image_col mt-4 mt-lg-0">
                <img src="<?php the_field('image_3'); ?>" class="w-100">
            </div>
        </div>
    </div>
</section>
<section class="team_testimonial secbg_lite_blue wi_full py_3">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-5 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_3'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_4'); ?></h2>
            </div>
            <div class="col-lg-6 ml-auto content_col light_grey">
                <?php the_field('content_5'); ?>
            </div>
        </div>
        <div class="slider_wrapper mt-4">
            <div class="team_testi_carousel owl-carousel">
				<?php if( have_rows('our_team') ):
				while ( have_rows('our_team') ) : the_row();	?>
                <div class="item light_grey">
                    <div class="mem_img">
                        <img src="<?php the_sub_field('image'); ?>" class="profile_img">
                        <div class="user_name">
                            <h3 class="text_color"><?php the_sub_field('title'); ?></h3>
                            <a class="mem_pos">
                                <span><?php the_sub_field('position'); ?></span>
                            </a>
                        </div>
                    </div>
                    <?php the_sub_field('text'); ?>
                </div>
				<?php endwhile; endif;?>
            </div>
        </div>
    </div>
</section>
<section class="service_sec our_values wi_full mt_3">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-5 title_col light_grey">
                <div class="subtitle text-uppercase"><?php the_field('sub_heading_4'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_5'); ?></h2>
            </div>
            <div class="col-lg-6 ml-auto content_col light_grey">
               <?php the_field('content_6'); ?>
            </div>
        </div>
        <img src="<?php the_field('image_4'); ?>" class="full_img_value w-100 mt-3 mb-3" data-aos="fade-up" data-aos-duration="2500">
        <div class="services_list_container" data-aos="fade-up" data-aos-duration="3000">
			<?php if( have_rows('content_7') ):
			$vcount = 1;
			while ( have_rows('content_7') ) : the_row();	?>
            <div class="service--item">
                <div class="item--inner">
                    <div class="item--title">
                        <div class="item--count light_grey">0<?php echo $vcount; ?></div>
                        <h4 class="mb-0 text_color"><?php the_sub_field('title'); ?></h4>
                    </div>
                    <div class="item--content light_grey">
                        <?php the_sub_field('text'); ?>
                    </div>
                </div>
            </div>
			<?php $vcount; endwhile; endif;?>
        </div>
    </div>
</section>
</div>
<?php get_footer(); ?>

<script>
$(document).ready(function () {
  if ($(window).width() >= 992) {
    let hasRun = false;

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !hasRun) {
          hasRun = true;
          runTabScript();
          observer.disconnect(); // Stop observing once it's run
        }
      });
    });

    observer.observe(document.getElementById('strategySection'));

    function runTabScript() {
      const duration = 20000;
      let index = 0;
      let interval;

      function resetAllProgressBars() {
        $('.tab-progress').stop(true, true).css('width', '0%');
      }

      function startProgressBar(i) {
        resetAllProgressBars();
        const $bar = $(`#progressBar${i}`);
        $bar.stop(true, true).css('width', '0%');
        $bar[0].offsetWidth; // Force reflow
        $bar.animate({ width: '100%' }, duration, 'linear');
      }

      function switchTab(i) {
        $('#strategyTabs .nav-link').removeClass('active');
        const $activeLink = $('#strategyTabs .nav-link').eq(i);
        $activeLink.addClass('active');

        $('#strategyTabContent .tab-pane').removeClass('active');
        const targetId = $activeLink.attr('href');
        $(targetId).addClass('active');

        startProgressBar(i);
      }

      function startAutoRotation() {
        startProgressBar(index);
        interval = setInterval(() => {
          index = (index + 1) % <?php echo $count; ?>;
          switchTab(index);
        }, duration);
      }

      $('.bo_progress_tab').click(function () {
        index = parseInt($(this).data('index'));
        clearInterval(interval);
        switchTab(index);
        startAutoRotation();
      });

      // Init
      switchTab(index);
      startAutoRotation();
    }
  }
});
</script>