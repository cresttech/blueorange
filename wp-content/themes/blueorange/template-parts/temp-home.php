<?php
/*
Template Name: Home Page
*/
get_header();
?>
<div class="page-content">
<section class="banner_sec main_banner wi_full" style="background-image: url(<?php the_field('banner_image'); ?>), linear-gradient(to bottom, #192C47, #1B375F);">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-5 title_col">
                <div class="subtitle text-uppercase light_blue"><?php the_field('sub_heading'); ?></div>
                <h1 class="text-uppercase pr-2 mb-lg-0 text-white"><?php the_field('heading_1'); ?></h1>
            </div>
            <div class="col-lg-6 ml-auto content_col light_blue">
                <?php the_field('content_1'); ?>
                <div class="btn_block">
                    <a href="<?php the_field('button_link'); ?>" class="button orange_btn"><?php the_field('button_text'); ?> <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="banner_logos" data-aos="fade-up" data-aos-duration="2500">
            <?php if( have_rows('technologies') ):
            while ( have_rows('technologies') ) : the_row();    ?>
            <div class="item"><img src="<?php the_sub_field('image'); ?>" alt="#"></div>
            <?php endwhile; endif;?>
        </div>
    </div>
</section>
<section class="video_sec wi_full py_3">
    <div class="container-xxl">
        <div class="row align-items-center" data-aos="fade-up" data-aos-duration="2500">
            <div class="col-lg-6 title_col light_grey">
                <div class="subtitle text-uppercase"><?php the_field('sub_heading_v'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_v'); ?></h2>
                <?php the_field('content_v'); ?>
            </div>
            <div class="col-lg-6 video_col">
                <div class="video_wrapper">
                    <video id="myVideo" width="100%" controls height="345" poster="<?php the_field('video_thumb'); ?>">
                        <source src="<?php echo site_url(); ?>/wp-content/uploads/2025/04/dental-xchange.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service_sec wi_full py_3">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-5 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_1'); ?></div>
                <h2 class="text-uppercase text_color mb-lg-0"><?php the_field('heading_8'); ?></h2>
            </div>
            <div class="col-lg-6 ml-auto content_col light_grey">
                <?php the_field('content_2'); ?>
            </div>
        </div>
        <div class="services_list_container" data-aos="fade-up" data-aos-duration="2000">
			<?php
			$location_query = new WP_Query( array(
			'post_type' => 'services',
			'posts_per_page' => '-1', 
			'post_status' => 'publish', 
			'orderby' => 'date',   
			'order' => 'DESC', 
			) );
			$listresults = array();
			$count = 1;
			while ( $location_query->have_posts() ) : $location_query->the_post();
			$date = date('d.m.Y', strtotime('-6 hours'));
			$thumb_id = get_post_thumbnail_id();
			$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
			?>
            <div class="service--item">
                <a href="<?php the_permalink(); ?>" class="item--inner">
                    <div class="item--title">
                        <div class="item--count">0<?php echo $count; ?></div>
                        <h4 class="mb-0"><?php the_title(); ?></h4>
                    </div>
                    <div class="item--content light_grey">
                        <?php the_content(); ?>
                        <span class="cursor-pointer more_button"><img src="<?php bloginfo('template_url') ?>/newimages/arrow_upward.svg" alt="#"></span>
                    </div>
                </a>
            </div>
			<?php $count++; endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<section class="overview_blueorange wi_full">
    <div class="container-xxl">
        <div class="sec_bgimg" style="background-image: url(<?php bloginfo('template_url') ?>/newimages/pattern-bg-second.svg), linear-gradient(to bottom, #192C47, #1B375F);" data-aos="fade-up" data-aos-duration="1500">
            <div class="overview--wrapper">
                <div class="sec_title text-white text-center">
                    <div class="subtitle text-uppercase"><?php the_field('statistics_title'); ?></div>
                    <h2 class="text-uppercase"><?php the_field('heading_9'); ?></h2>
                </div>
                <?php if( have_rows('counters') ): ?>
                <div class="brag_wraper row">
                    <?php while( have_rows('counters') ): the_row(); ?>
                    <div class="col-6 col-md-3 brag_item">
                        <div class="brag_inner text-center">
                            <h2 class="h2_large test"><?php the_sub_field('counter'); ?></h2>
                            <p><?php the_sub_field('title'); ?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="why--blueorange mt-4">
                <div class="row align-items-end">
                    <div class="col-lg-5 title_col text-white">
                        <div class="subtitle text-uppercase"><?php the_field('sub_heading_2'); ?></div>
                        <h2 class="text-uppercase mb-lg-0"><?php the_field('heading_10'); ?></h2>
                    </div>
                    <div class="col-lg-7 content_col text-white">
                        <?php the_field('content_3'); ?>
                    </div>
                </div>
                <div class="why-bo-list row">
					<?php if( have_rows('list_content') ):
					$count = 1;
					while ( have_rows('list_content') ) : the_row();	?>
                    <div class="list--item">
                        <a class="item--inner">
                            <div class="icon--btn">
                                <div class="animate--icon">
									<?php if($count == 2) { echo '<span class="needle_span">'; } ?>
                                    <img src="<?php the_sub_field('icon_1'); ?>" class="<?php if($count == 1) { echo 'ico_wheel'; } elseif($count == 2) { echo 'ico_circle'; } else{ echo 'ico_globe'; } ?>" />
                                    <?php if($count == 3) { echo '<span class="ribbon_adjustmnt">'; } ?><img src="<?php the_sub_field('icon_2'); ?>" class="<?php if($count == 1) { echo 'ico_plane'; } elseif($count == 2) { echo 'ico_needle'; } else{ echo 'ico_ribbon'; } ?>" /><?php if($count == 3) { echo '</span>'; } ?>
									<?php if($count == 2) { echo '</span>'; ?>
									<img src="<?php bloginfo('template_url') ?>/newimages/icon-mesage.svg" class="ico_msg" />
									<?php } ?>
                                </div>
                                <!-- <span class="cursor-pointer more_button"><img src="<?php// bloginfo('template_url') ?>/newimages/arrow_upward.svg" alt="#"></span> -->
                            </div>
                            <h3><?php the_sub_field('title'); ?></h3>
                            <?php the_sub_field('text'); ?>
                        </a>
                    </div>
					<?php $count++; endwhile; endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="client_sec wi_full py_3 position-relative">
    <div class="container-xxl" data-aos="fade-up" data-aos-duration="1500">
        <div class="row">
            <div class="col-lg-5 title_col">
                <div class="subtitle light_grey text-uppercase"><?php the_field('heading_4'); ?></div>
            </div>
            <div class="col-lg-7 title_col">
                <h2 class="text-uppercase text_color"><?php the_field('heading_11'); ?></h2>
            </div>
        </div>
        <div class="client_slide_wraper mt_2">
            <div class="client--carousel">
                <div class="client--wrapper">
                    <?php if( have_rows('clients') ):
                    while ( have_rows('clients') ) : the_row(); ?>
                    <div class="item text-center"><img src="<?php the_sub_field('image'); ?>" alt="#"></div>
                    <?php endwhile; endif;?>
                </div>
                <div class="client--wrapper">
                    <?php if( have_rows('clients') ):
                    while ( have_rows('clients') ) : the_row(); ?>
                    <div class="item text-center"><img src="<?php the_sub_field('image'); ?>" alt="#"></div>
                    <?php endwhile; endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="case_study_sec home_case_study wi_full py_3" id="strategySection" style="background-image: url(<?php bloginfo('template_url') ?>/newimages/pattern-bg-third.svg), linear-gradient(to bottom, #192C47, #1B375F);">
    <div class="container-xxl">
        <div class="row" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-9">
                <div class="sec_title text-white">
                	<div class="subtitle text-uppercase"><?php the_field('heading_5'); ?></div>
                    <h2 class="text-uppercase"><?php the_field('heading_12'); ?></h2>
                </div>
            </div>
        </div>
        <div class="case--tabs-wrapper row" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-6">
                <ul class="nav nav-tabs" id="strategyTabs" role="tablist">
					<?php 
					$postidss = get_field('case_studies');
					$args = array( 'post_type' => 'case-studies' , "order" => "DESC",'post__in' => $postidss);
					$query = new WP_Query( $args ); 
					if ( $query->have_posts() ) { 
					$count = 1;
                    $index = 0;
					while ( $query->have_posts() ) {
					$query->the_post();   ?>
					<li class="nav-item">
                        <a class="nav-link bo_progress_tab" data-toggle="tab" href="#Tab<?php echo $count; ?>" role="tab"  data-index="<?php echo $index; ?>"><?php the_title(); ?></a>
                        <div class="progress" data-index="<?php echo $index; ?>">
                            <div class="progress-bar tab-progress" id="progressBar<?php echo $index; ?>"></div>
                        </div>
                    </li>
					<?php $count++; $index++; } wp_reset_postdata(); } ?>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="tab-content" id="strategyTabContent">
					<?php 
					$args = array( 'post_type' => 'case-studies' , "order" => "DESC", 'post__in' => $postidss);
					$query = new WP_Query( $args ); 
					if ( $query->have_posts() ) { 
					$count = 1;
					while ( $query->have_posts() ) {
					$query->the_post();
					$featured_img = '';
					if ( has_post_thumbnail() ) {
						$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
						$featured_img = $large_image_url[0];
					} else {
						$default_mage = get_field('default_mage');
					}
					?>
                    <div class="tab-pane <?php if($count == 1) { echo 'active'; } ?>" id="Tab<?php echo $count; ?>" role="tabpanel">
                        <div class="card-header" role="tab" id="tabheading-<?php echo $count; ?>">
                            <a class="<?php if($count != 1) { echo 'collapsed'; } ?>" data-toggle="collapse" href="#collapse-<?php echo $count; ?>" aria-controls="collapse-<?php echo $count; ?>"><?php the_title(); ?></a>
                        </div>
                        <div id="collapse-<?php echo $count; ?>" class="collapse <?php if($count == 1) { echo 'show'; } ?>" data-parent="#strategyTabContent" role="tabpanel" aria-labelledby="tabheading-<?php echo $count; ?>">
                            <div class="tab--data text-white">
    							<?php if(!empty($featured_img)) { ?>
    								<img src="<?php echo $featured_img; ?>" alt="#"  class="w-100">
    							<?php } else { 
    								echo $default_mage;
    							}  ?>
                                <h4 class="mt-4"><?php the_title(); ?></h4>
                                <?php the_excerpt(); ?>
                                <div class="btn_block">
                                    <a href="<?php the_permalink(); ?>" class="button orange_btn">Learn More <i class="fa-solid fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php $count++; } wp_reset_postdata(); } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="industry_sec wi_full py_3">
    <div class="container-xxl">
        <div class="row" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-8"> 
                <div class="sec_title mb-0">
                    <div class="subtitle text-uppercase light_grey"><?php the_field('heading_6'); ?></div>
                    <h2 class="text-uppercase text_color"><?php the_field('sub_heading_3'); ?></h2>
                </div>
            </div>
        </div>
        <div class="industries--container" data-aos="fade-up" data-aos-duration="2000">
            <div class="industry-list row">
				<?php if( have_rows('industries') ):
				$count = 1;
				while ( have_rows('industries') ) : the_row();	?>
                <div class="col-md-6 col-lg-4 list--item">
                    <a href="<?php the_sub_field('link'); ?>" class="item--inner light_grey">
                        <div class="item--icon">
                            <img src="<?php the_sub_field('icon'); ?>" alt="#" />
                        </div>
                        <h4 class="text_color"><?php the_sub_field('title'); ?></h4>
                        <?php the_sub_field('text'); ?>
                        <div class="btn_block">
                            <span class="cursor-pointer text_color">Learn more <i class="fa-solid fa-angle-right"></i></span>
                        </div>
                    </a>
                </div>
				<?php $count++; endwhile; endif;?>
            </div>
        </div>
    </div>
</section>
<section class="our_partnership wi_full py_3">
    <div class="container-xxl" data-aos="fade-up" data-aos-duration="1500">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto title_col text-center">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_title'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_7'); ?></h2>
                <div class="btn_block justify-content-center">
                    <a href="<?php the_field('button_link_1'); ?>" class="button orange_btn"><?php the_field('button_text_1'); ?> <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="partner_slide_wraper mt-5">
            <div class="partner--carousel">
                <div class="partner--wrapper">
                    <?php if( have_rows('partners') ):
                    while ( have_rows('partners') ) : the_row(); ?>
                    <div class="item text-center"><img src="<?php the_sub_field('image'); ?>" alt="#"></div>
                    <?php endwhile; endif;?>
                </div>
                <div class="partner--wrapper">
                    <?php if( have_rows('partners') ):
                    while ( have_rows('partners') ) : the_row(); ?>
                    <div class="item text-center"><img src="<?php the_sub_field('image'); ?>" alt="#"></div>
                    <?php endwhile; endif;?>
                </div>
            </div>
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
          index = (index + 1) % <?php echo $index; ?>;
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

<script>
    var countValues = [];

    // Collect the initial text values and reset them to 0
    $('.countss').each(function () {
        countValues.push($(this).text());
        $(this).text('0');
    });

    var isAlreadyRun = false;
    $(window).scroll(function () {
        if (isAlreadyRun) return;

        $('.service_sec').each(function () {
            var bottom_of_object = $(this).offset().top + $(this).outerHeight() / 2;
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            if (bottom_of_window > bottom_of_object + 20) {
                $('.countss').each(function (index) {
                    $(this).prop('Counter', 0).animate({
                        Counter: countValues[index]
                    }, {
                        duration: 3500,
                        easing: 'swing',
                        step: function (now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                });
                isAlreadyRun = true;
                return false; // Break out of .each() early
            }
        });
    });
</script>