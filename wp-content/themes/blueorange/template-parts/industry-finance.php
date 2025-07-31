<?php
/*
Template Name: Financial Page
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
<section class="data_services wi_full py_3">
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
        <div class="data_service_list row" data-aos="fade-up" data-aos-duration="2000">
            <?php if( have_rows('content_4') ):
			while ( have_rows('content_4') ) : the_row();	?>
            <div class="col-md-6 col-lg-3 ds--item">
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
</section>
<section class="b_service_sec b_industry_srvc finance_tabs wi_full py_3" id="strategySection">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-6 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_3'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_3'); ?></h2>
            </div>
            <div class="col-lg-6 ml-auto content_col light_grey">
                <?php the_field('content_3'); ?>
            </div>
        </div>
        <div class="case--tabs-wrapper row mt-5" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-5">
                <ul class="nav nav-tabs" id="strategyTabs" role="tablist">
					<?php if( have_rows('content_5') ):
					$count = 0;
					while ( have_rows('content_5') ) : the_row();	?>
                    <li class="nav-item">
                        <a class="nav-link bo_progress_tab <?php if($count == 0) { echo 'active'; } ?>" data-toggle="tab" href="#Tab<?php echo $count; ?>" role="tab" data-index="<?php echo $count; ?>"><?php the_sub_field('title'); ?></a>
                        <div class="progress" data-index="0">
                            <div class="progress-bar tab-progress" id="progressBar<?php echo $count; ?>"></div>
                        </div>
                    </li>
					<?php $count++; endwhile; endif;?>
                </ul>
            </div>
            <div class="col-lg-7">
                <div class="tab-content" id="strategyTabContent">
					<?php if( have_rows('content_5') ):
					$count = 0;
					while ( have_rows('content_5') ) : the_row();	?>
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
<section class="overview_blueorange wi_full py_3 pt-0">
    <div class="container-xxl">
        <div class="sec_bgimg" style="background-image: url(<?php bloginfo('template_url') ?>/newimages/pattern-bg-overview.svg), linear-gradient(to bottom, #192C47, #1B375F);" data-aos="fade-up" data-aos-duration="1500">
            <div class="overview--wrapper overview_why_blueornge">
                <div class="sec_title text-white">
                    <div class="subtitle text-uppercase"><?php the_field('sub_heading_4'); ?></div>
                    <h2 class="text-uppercase"><?php the_field('heading_4'); ?></h2>
                </div>
                <div class="why-bo-list row mt-1">
					<?php if( have_rows('services') ):
					while ( have_rows('services') ) : the_row();	?>
                    <div class="list--item">
                        <a class="item--inner light_blue">
                            <span class="item--icon">
                                <img src="<?php the_sub_field('icon'); ?>" class="ico_msg">
                            </span>
                            <h4 class="text-white"><?php the_sub_field('title'); ?></h4>
                            <?php the_sub_field('text'); ?>
                        </a>
                    </div>
					<?php endwhile; endif;?>
                </div>
            </div>
            <div class="service_sec mt-4">
                <div class="row align-items-end" data-aos="fade-up" data-aos-duration="2000">
                    <div class="col-lg-5 title_col text-white">
                        <div class="subtitle text-uppercase"><?php the_field('sub_heading_5'); ?></div>
                        <h2 class="text-uppercase"><?php the_field('heading_5'); ?></h2>
                    </div>
                    <div class="col-lg-6 ml-auto content_col light_blue">
                        <?php the_field('content_6'); ?>
                    </div>
                </div>
                <div class="services_list_container" data-aos="fade-up" data-aos-duration="2500">
					<?php if( have_rows('content_7') ):
					$count2 = 1;
					while ( have_rows('content_7') ) : the_row();	?>
                    <div class="service--item">
                        <div class="item--inner">
                            <div class="item--title">
                                <div class="item--count light_blue">0<?php echo $count2; ?></div>
                                <h4 class="mb-0 text-white"> <?php the_sub_field('title'); ?></h4>
                            </div>
                            <div class="item--content light_blue">
                                 <?php the_sub_field('text'); ?>
                            </div>
                        </div>
                    </div>
					<?php $count2++; endwhile; endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our_partnership wi_full py_3">
    <div class="container-xxl" data-aos="fade-up" data-aos-duration="1500">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto title_col text-center">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_6'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_6'); ?></h2>
                <div class="btn_block justify-content-center">
                    <a href="<?php the_field('button_link_2'); ?>" class="button orange_btn"><?php the_field('button_text_2'); ?> <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="partner_slide_wraper mt-5">
			<div class="partner--carousel">
				<div class="partner--wrapper">
					<?php if( have_rows('logos') ):
					while ( have_rows('logos') ) : the_row();	?>
						<div class="item text-center"><img src="<?php the_sub_field('logo'); ?>" alt="#"></div>
					<?php endwhile; endif;?>
				</div>
				<div class="partner--wrapper">
					<?php if( have_rows('logos') ):
					while ( have_rows('logos') ) : the_row();	?>
						<div class="item text-center"><img src="<?php the_sub_field('logo'); ?>" alt="#"></div>
					<?php endwhile; endif;?>
				</div>
			</div>
        </div>
    </div>
</section>
<section class="casestudy_sec wi_full py_3">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-sm-8 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_7'); ?></div>
                <h2 class="text-uppercase text_color mb-0"><?php the_field('heading_7'); ?></h2>
            </div>
            <div class="col-sm-4 content_col light_grey">
                <div class="btn_block justify-content-end v_dsktop">
                    <a href="<?php the_field('button_link_3'); ?>" class="button border_btn"><?php the_field('button_text_3'); ?></a>
                </div>
            </div>
        </div>
        <div class="casestudy--container" data-aos="fade-up" data-aos-duration="2000">
            <div class="casestudy-list row">
				<?php
            $postidss = get_field('case_studies');
            //$postids = array(999, 1034, 1035 );

            $args = array(
            'post_type' => 'case-studies' , 
            "order" => "DESC", 
            'posts_per_page' => '-1',
			'post__in' => $postidss,
            );
            $query = new WP_Query( $args ); 
            if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : 
            $query->the_post();
             //$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                $featured_img = '';
                if ( has_post_thumbnail() ) {
						$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
						$featured_img = $large_image_url[0];
					} else {
						$default_mage = get_field('default_mage');
					}
			$post__id = get_the_ID();
			$taxonomies = get_the_terms( $post__id, 'case_studies_tags' );
			$technology = get_the_terms( $post__id, 'technology_studies_tags' );
			$industries = get_the_terms( $post__id, 'industries_studies_tags' );
            ?>
                <div class="col-sm-6 list--item">
                    <a href="<?php the_permalink(); ?>" class="item--inner light_grey">
                        <div class="item--icon">
							<?php if(!empty($featured_img)) { ?>
								<img src="<?php echo $featured_img; ?>" alt="#" >
							<?php } else { 
								echo $default_mage;
							}  ?>
                        </div>
                        <div class="p-3 p-lg-4">
                            <div class="servie_type text-uppercase"><?php if ( ! empty( $taxonomies ) && ! is_wp_error( $taxonomies ) ) {  $term_names = wp_list_pluck( $taxonomies, 'name' ); echo implode( ', ', $term_names ); echo ' • '; } if ( ! empty( $technology ) && ! is_wp_error( $technology ) ) {  $technology_names = wp_list_pluck( $technology, 'name' ); echo implode( ', ', $technology_names ); } if ( ! empty( $industries ) && ! is_wp_error( $industries ) ) { echo ' • ';  $industries_names = wp_list_pluck( $industries, 'name' ); echo implode( ', ', $industries_names ); } ?></div>
                            <h4 class="text_color mt-3"><?php the_title(); ?></h4>
                            <?php
                              $excerpt       = get_the_excerpt();
                              $excerpt       = substr( $excerpt, 0, 300 );
                              $short_excerpt = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
                              if ( ! empty( $short_excerpt ) ) { ?>
                                    <p><?php echo esc_html( $short_excerpt ); ?>&hellip;</p>
                           <?php } ?>
                            <div class="btn_block mt-3">
                                <span class="cursor-pointer button blue_btn text-white">Learn more <i class="fa-solid fa-angle-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
				<?php endwhile; endif;  wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="btn_block v_mobile">
            <a href="<?php the_field('button_link_3'); ?>" class="button border_btn"><?php the_field('button_text_3'); ?></a>
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