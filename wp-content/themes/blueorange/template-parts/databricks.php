<?php
/*
Template Name: Databricks Page
*/
get_header();
?>
<div class="page-content partner_d_page">
<section class="banner_sec inner_banner wi_full" style="background-image: url(<?php the_field('banner_image'); ?>), linear-gradient(to bottom, #192C47, #1B375F);">
    <div class="container-xxl">
        <div class="row align-items-center" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-md-7 col-lg-6 title_col light_blue">
                <div class="subtitle text-uppercase"><?php the_field('sub_heading_1'); ?></div>
                <h1 class="text-uppercase text-white"><?php the_field('heading_1'); ?></h1>
                <?php the_field('content_1'); ?>
                <div class="btn_block">
                    <a href="<?php the_field('button_link_1'); ?>" class="button orange_btn"><?php the_field('button_text_1'); ?> <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-5 col-lg-5 ml-auto logo_col text-center">
                <img src="<?php the_field('image_1'); ?>">
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
            </div>
            <div class="col-lg-6 image_col mt-4 mt-lg-0">
                <img src="<?php the_field('image_2'); ?>" class="w-100">
            </div>
        </div>
    </div>
</section>
<section class="migrating_databricks secbg_lite_blue wi_full py_3 mt_3">
    <div class="container-xxl">
        <div class="row" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-6 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_3'); ?></div>
                <h2 class="text-uppercase text_color mb-lg-0"><?php the_field('heading_3'); ?></h2>
            </div>
            <div class="col-lg-6 ml-auto content_col migrate_list">
				<?php if( have_rows('content_3') ):
				while ( have_rows('content_3') ) : the_row();	?>
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
<section class="b_service_sec databricke_tabs wi_full py_3" id="strategySection">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-5 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_4'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_4'); ?></h2>
            </div>
            <div class="col-lg-6 ml-auto content_col light_grey">
                <?php the_field('content_4'); ?>
            </div>
        </div>
        <div class="case--tabs-wrapper row mt-5" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-5">
                <ul class="nav nav-tabs" id="strategyTabs" role="tablist">
					<?php if( have_rows('services') ):
					$count = 0;
					while ( have_rows('services') ) : the_row();	?>
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
					<?php if( have_rows('services') ):
					$count = 0;
					while ( have_rows('services') ) : the_row();	?>
                    <div class="tab-pane card <?php if($count == 0) { echo 'active'; } ?>" id="Tab<?php echo $count; ?>" role="tabpanel">
                        <div class="card-header" role="tab" id="tabheading-<?php echo $count; ?>">
                            <a class="" data-toggle="collapse" href="#collapse-<?php echo $count; ?>" aria-controls="collapse-<?php echo $count; ?>"><?php the_sub_field('title'); ?></a>
                        </div>
                        <div id="collapse-<?php echo $count; ?>" class="collapse <?php if($count == 0) { echo 'show'; } ?>" data-parent="#strategyTabContent" role="tabpanel" aria-labelledby="tabheading-<?php echo $count; ?>">
                            <div class="sec_bgimg tab--data" style="background-image: url(<?php the_sub_field('image'); ?>), linear-gradient(to bottom, #192C47, #1B375F);">
                                <h3 class="text-white"><?php the_sub_field('title'); ?></h3>
                                <div class="text_wrap_box light_blue">
                                    <?php the_sub_field('text'); ?>
                                    <div class="btn_block">
                                        <a href="<?php the_sub_field('link'); ?>" class="button orange_btn">Schedule Consultation <i class="fa-solid fa-angle-right"></i></a>
                                    </div>
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
<section class="workshop_sec wi_full py_3">
    <div class="container-xxl">
        <div class="row flex-lg-row-reverse align-items-center" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-6 title_col light_grey">
                <div class="subtitle text-uppercase"><?php the_field('sub_heading_5'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_5'); ?></h2>
                <div class="ws_list mt-4 mb-4 mb-lg-5">
                    <?php the_field('content_5'); ?>
                </div>
                <div class="btn_block">
                    <a href="<?php the_field('button_link_2'); ?>" class="button orange_btn"><?php the_field('button_text_2'); ?> <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 image_col mt-4 mt-lg-0">
                <img src="<?php the_field('image_3'); ?>" class="w-100">
            </div>
        </div>
    </div>
</section>
<section class="casestudy_sec wi_full py_3">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-sm-8 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_6'); ?></div>
                <h2 class="text-uppercase text_color mb-0"><?php the_field('heading_6'); ?></h2>
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