<?php
/*
 * Template Name: Services - Data Engineering
 * Template Post Type: services
 */
   
?>
<?php get_header();  ?>
<div class="page-content services_page">
<section class="banner_sec inner_banner wi_full" style="background-image: url(<?php the_field('banner_image'); ?>), linear-gradient(to bottom, #192C47, #1B375F);">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-6 title_col text-white">
                <div class="subtitle text-uppercase"><?php the_field('sub_heading_1'); ?></div>
                <h1 class="text-uppercase"><?php the_field('heading_1'); ?></h1>
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
				<?php if( have_rows('logos') ):
				while ( have_rows('logos') ) : the_row();	?>
					<div class="item text-center"><img src="<?php the_sub_field('image'); ?>" alt="#"></div>
				<?php endwhile; endif;?>
            </div>
            <div class="client--wrapper">
                <?php if( have_rows('logos') ):
				while ( have_rows('logos') ) : the_row();	?>
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
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_4'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_4'); ?></h2>
            </div>
            <div class="col-lg-6 ml-auto content_col light_grey">
                <?php the_field('content_2'); ?>
            </div>
        </div>
        <div class="row data_engg_challenge" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-6">
                <div class="data_service_list row">
					<?php if( have_rows('content_4') ):
					while ( have_rows('content_4') ) : the_row();	?>
                    <div class="col-sm-6 ds--item">
                        <div class="item--inner light_grey">
                            <div class="item--icon">
                                <img src="<?php the_sub_field('image'); ?>" alt="#">
                            </div>
                            <h4 class="text_color"><?php the_sub_field('title'); ?></h4>
                            <?php the_sub_field('text'); ?>
                        </div>
                    </div>
					<?php endwhile; endif;?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-4 outer-animate-box">
                    <div class="position-relative animate-box" style='height:100%;'>
                        <img class="top-left-img" style='position:absolute; top:0; left:0;'
                            src="<?php the_field('image_2'); ?>"
                            alt="">
                        <img class="bottom-left-img" style='position:absolute; bottom:0; left:0;'
                            src="<?php the_field('image_3'); ?>"
                            alt="">
                        <img class="center-img"
                            style='position:absolute; top:50%; left:50%;transform: translate(-50%, -50%);'
                            src="<?php the_field('image_1'); ?>"
                            alt="">
                        <img class="top-right-img" style='position:absolute; top:0; right:0;'
                            src="<?php the_field('image_4'); ?>"
                            alt="">
                        <img class="bottom-right-img" style='position:absolute; bottom:0; right:0;'
                            src="<?php the_field('image_5'); ?>"
                            alt="">

                        <svg id="svg-lines"
                            style="position:absolute; top:0; left:0; width:100%; height:100%; pointer-events:none;"
                            xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="gradientStroke" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" stop-color="#f7b733" stop-opacity="0" />
                                    <stop offset="100%" stop-color="#f7b733" stop-opacity="1" />
                                </linearGradient>
                                <linearGradient id="gradientStrokeReverse" x1="100%" y1="0%" x2="0%" y2="0%">
                                    <stop offset="0%" stop-color="#f7b733" stop-opacity="0" />
                                    <stop offset="100%" stop-color="#f7b733" stop-opacity="1" />
                                </linearGradient>
                            </defs>
                            <path id="path1" class="path1" stroke="url(#gradientStroke)" stroke-width="4"
                                fill="none" />
                            <path id="path2" class="path2" stroke="url(#gradientStroke)" stroke-width="4"
                                fill="none" />
                            <path id="path3" class="path3" stroke="url(#gradientStrokeReverse)" stroke-width="4"
                                fill="none" />
                            <path id="path4" class="path4" stroke="url(#gradientStrokeReverse)" stroke-width="4"
                                fill="none" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="b_service_sec dataengg_tabs wi_full py_3" id="strategySection">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-6 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_2'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_2'); ?></h2>
            </div>
            <div class="col-lg-6 ml-auto content_col light_grey">
                <?php the_field('content_3'); ?>
            </div>
        </div>
        <div class="case--tabs-wrapper row mt-5" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-5">
                <ul class="nav nav-tabs" id="strategyTabs" role="tablist">
					<?php if( have_rows('our_approaches') ):
					$count = 0;
					while ( have_rows('our_approaches') ) : the_row();	?>
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
					<?php if( have_rows('our_approaches') ):
					$count = 0;
					while ( have_rows('our_approaches') ) : the_row();	?>
                    <div class="tab-pane card <?php if($count == 0) { echo 'active'; } ?>" id="Tab<?php echo $count; ?>" role="tabpanel">
                        <div class="card-header" role="tab" id="tabheading-<?php echo $count; ?>">
                            <a class="<?php if($count != 0) { echo 'collapsed'; } ?>" data-toggle="collapse" href="#collapse-<?php echo $count; ?>" aria-controls="collapse-<?php echo $count; ?>"><?php the_sub_field('title'); ?></a>
                        </div>
                        <div id="collapse-<?php echo $count; ?>" class="collapse <?php if($count == 0) { echo 'show'; } ?>" data-parent="#strategyTabContent" role="tabpanel" aria-labelledby="tabheading-<?php echo $count; ?>">
                            <div class="sec_bgimg tab--data" style="background-image: url(<?php the_sub_field('image'); ?>), linear-gradient(to bottom, #192C47, #1B375F);">
                                <h3 class="text-white"><?php the_sub_field('title'); ?></h3>
                                <?php the_sub_field('text'); ?>
                                <div class="btn_block">
                                    <a href="/contact-us/" class="button orange_btn">Learn More <i class="fa-solid fa-angle-right"></i></a>
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
<section class="overview_blueorange servce_partner wi_full">
    <div class="container-xxl">
        <div class="sec_bgimg" style="background-image: url(<?php bloginfo('template_url') ?>/newimages/pattern-bg-second.svg), linear-gradient(to bottom, #192C47, #1B375F);" data-aos="fade-up" data-aos-duration="1500">
            <div class="overview--wrapper">
                <div class="sec_title text-white text-center">
                    <div class="subtitle text-uppercase"><?php the_field('sub_heading_5'); ?></div>
                    <h2 class="text-uppercase"><?php the_field('heading_5'); ?></h2>
                    <div class="btn_block justify-content-center">
                        <a href="<?php the_field('button_link_3'); ?>" class="button orange_btn"><?php the_field('button_text_3'); ?> <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="partner_slide_wraper mt-5">
                    <div class="partner--carousel">
                        <div class="partner--wrapper">
							<?php if( have_rows('partners') ):
							while ( have_rows('partners') ) : the_row();	?>
								<div class="item text-center"><img src="<?php the_sub_field('logo'); ?>" alt="#"></div>
							<?php endwhile; endif;?>
                        </div>
                        <div class="partner--wrapper">
                            <?php if( have_rows('partners') ):
							while ( have_rows('partners') ) : the_row();	?>
								<div class="item text-center"><img src="<?php the_sub_field('logo'); ?>" alt="#"></div>
							<?php endwhile; endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why_partnering_bo wi_full py_3 mt_3">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-4 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_6'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_6'); ?></h2>
            </div>
            <div class="col-lg-6 ml-auto content_col light_grey">
                <?php the_field('content_5'); ?>
            </div>
        </div>
        <div class="data_service_list row" data-aos="fade-up" data-aos-duration="2000">
			<?php if( have_rows('list_content') ):
			while ( have_rows('list_content') ) : the_row();	?>
            <div class="col-md-4 ds--item">
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
                    <a href="<?php the_field('button_link_5'); ?>" class="button border_btn"><?php the_field('button_text_5'); ?></a>
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
            'posts_per_page' => '2',
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
            <a href="<?php the_field('button_link_5'); ?>" class="button border_btn"><?php the_field('button_text_5'); ?></a>
        </div>
    </div>
</section>
</div>

<style>

.outer-animate-box{
    height: 100%;
    width: 100%;
    background-color: #F2F6F9;
}

.animate-box img {
    z-index: 1;
}

.path1 {
    /* d: path("M 220 130 C 220 46 230 46 150 46"); */
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    fill: none;
    stroke: url(#gradientStroke);
    stroke-width: 4;
}

.path2 {
    /* d: path("M 220 300 C 220 390 230 380 150 385"); */
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    fill: none;
    stroke: url(#gradientStroke);
    stroke-width: 4;
}

.path3 {
    /* d: path("M 356 130 C 355 46 355 46 425 46"); */
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    fill: none;
    stroke: url(#gradientStrokeReverse);
    stroke-width: 4;
}

.path4 {
    /* d: path("M 356 300 C 355 390 355 380 425 385"); */
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    fill: none;
    stroke: url(#gradientStrokeReverse);
    stroke-width: 4;
}


.top-right-img,
.top-left-img,
.bottom-right-img,
.bottom-left-img,
.center-img {
    opacity: 0;
}


.outer-animate-box.animate-started .top-left-img{
    animation: visible2 2s ease forwards;
}

.outer-animate-box.animate-started .bottom-left-img {
    animation: visible2 2s ease forwards;
}

.outer-animate-box.animate-started .path1{
    animation: draw 3s 1s ease forwards;
}

.outer-animate-box.animate-started .path2{
    animation: draw 3s 1s ease forwards;
}


.outer-animate-box.animate-started .center-img {
    animation: visible 2s 1.5s ease forwards;
}

.outer-animate-box.animate-started .path3{
    animation: draw 3s 2.5s ease forwards;
}

.outer-animate-box.animate-started .path4{
    animation: draw 3s 2.5s ease forwards;
}

.outer-animate-box.animate-started .top-right-img {
    animation: visible2 2s 3s ease forwards;
}

.outer-animate-box.animate-started .bottom-right-img {
    animation: visible2 2s 3s ease forwards;
}

@keyframes draw {
    to {
        stroke-dashoffset: 0;
    }
}

@keyframes visible {
    from {
        opacity: 0;
        transform: translate(-50%, -50%) scale(0.8);
    }

    to {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
    }
}

@keyframes visible2 {
    from {
        opacity: 0;
        transform: scale(0.8);
    }

    to {
        opacity: 1;
        transform: scale(1);
    }
}


@media (max-width: 992px) {
    .outer-animate-box{
        aspect-ratio: 100 / 70;
    }
}

@media (max-width: 768px) {
    .animate-box img {
        max-width: 25%;
    }
    .animate-box .center-img {
        max-width: 30% !important;
    }
}

@media (max-width: 576px) {
    .outer-animate-box{
        aspect-ratio: 100 / 90;
    }
    .animate-box img {
        max-width: 25%;
    }

    .animate-box .center-img {
        max-width: 35% !important;
    }
}

@media (max-width: 425px) {
    .outer-animate-box{
        aspect-ratio: 100 / 100;
    }

    .animate-box .center-img {
        max-width: 40% !important;
    }
}
</style>

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


<script>
    function updatePaths() {
        const getMidTopLeftCenter = (el) => {
            const rect = el.getBoundingClientRect();
            console.log(rect.top)
            return {
                x: rect.left + rect.width / 4,
                y: rect.top + rect.height / 10
            };
        };
        const getMidBottomLeftCenter = (el) => {
            const rect = el.getBoundingClientRect();
            console.log(rect.top)
            return {
                x: rect.left + rect.width / 4,
                y: rect.bottom - rect.height / 10
            };
        };
        const getMidTopRightCenter = (el) => {
            const rect = el.getBoundingClientRect();
            return {
                x: rect.right - rect.width / 4,
                y: rect.top + rect.height / 10
            };
        };
        const getMidBottomRightCenter = (el) => {
            const rect = el.getBoundingClientRect();
            return {
                x: rect.right - rect.width / 4,
                y: rect.bottom - rect.height / 10
            };
        };
        const getMidLeft = (el) => {
            const rect = el.getBoundingClientRect();
            return {
                x: rect.left + rect.width,
                y: rect.top + rect.height / 2
            };
        };

        const getMidRight = (el) => {
            const rect = el.getBoundingClientRect();
            return {
                x: rect.right - rect.width,
                y: rect.top + rect.height / 2
            };
        };

        const svg = document.querySelector("#svg-lines");
        const svgRect = svg.getBoundingClientRect();

        const topLeft = document.querySelector(".top-left-img");
        const topRight = document.querySelector(".top-right-img");
        const bottomLeft = document.querySelector(".bottom-left-img");
        const bottomRight = document.querySelector(".bottom-right-img");
        const center = document.querySelector(".center-img");

        const rel = (pt) => ({
            x: pt.x - svgRect.left,
            y: pt.y - svgRect.top
        });

        const fromTL = rel(getMidLeft(topLeft));
        const fromTR = rel(getMidRight(topRight));
        const fromBL = rel(getMidLeft(bottomLeft));
        const fromBR = rel(getMidRight(bottomRight));
        const centerTopLeftPt = rel(getMidTopLeftCenter(center));
        const centerBottomLeftPt = rel(getMidBottomLeftCenter(center));
        const centerTopRightPt = rel(getMidTopRightCenter(center));
        const centerBottomRightPt = rel(getMidBottomRightCenter(center));

        // Control offset – smaller values give tighter curves
        const ctrlOffset = 40;

        // document.querySelector("#path1").setAttribute("d",
        //     `M ${fromTL.x} ${fromTL.y} 
        //      C ${fromTL.x} ${fromTL.y + ctrlOffset}, 
        //        ${centerPt.x - ctrlOffset} ${centerPt.y}, 
        //        ${centerPt.x} ${centerPt.y}`
        // );
        //     d: path("M 130.5 70.5 C 214 70.5 214 70.5 214 186");

        document.querySelector("#path1").setAttribute("d",
            `M ${fromTL.x} ${fromTL.y} 
         C ${centerTopLeftPt.x} ${fromTL.y},
           ${centerTopLeftPt.x} ${fromTL.y}, 
           ${centerTopLeftPt.x} ${centerTopLeftPt.y}`
        );

        // document.querySelector("#path2").setAttribute("d",
        //     `M ${fromBL.x} ${fromBL.y} 
        //      C ${fromBL.x} ${fromBL.y - ctrlOffset}, 
        //        ${centerPt.x - ctrlOffset} ${centerPt.y}, 
        //        ${centerPt.x} ${centerPt.y}`
        // );
        document.querySelector("#path2").setAttribute("d",
            `M ${fromBL.x} ${fromBL.y} 
         C ${centerBottomLeftPt.x} ${fromBL.y}, 
           ${centerBottomLeftPt.x} ${fromBL.y}, 
           ${centerBottomLeftPt.x} ${centerBottomLeftPt.y}`
        );

        // document.querySelector("#path3").setAttribute("d",
        //     `M ${fromTR.x} ${fromTR.y} 
        //      C ${fromTR.x} ${fromTR.y + ctrlOffset}, 
        //        ${centerPt.x + ctrlOffset} ${centerPt.y}, 
        //        ${centerPt.x} ${centerPt.y}`
        // );
        document.querySelector("#path3").setAttribute("d",
            `M ${centerTopRightPt.x} ${centerTopRightPt.y} 
         C ${centerTopRightPt.x} ${fromTR.y}, 
           ${centerTopRightPt.x} ${fromTR.y}, 
           ${fromTR.x} ${fromTR.y}`
        );

        // document.querySelector("#path4").setAttribute("d",
        //     `M ${fromBR.x} ${fromBR.y} 
        //      C ${fromBR.x} ${fromBR.y - ctrlOffset}, 
        //        ${centerPt.x + ctrlOffset} ${centerPt.y}, 
        //        ${centerPt.x} ${centerPt.y}`
        // );
        document.querySelector("#path4").setAttribute("d",
            `M ${centerBottomRightPt.x} ${centerBottomRightPt.y} 
         C ${centerBottomRightPt.x} ${fromBR.y}, 
           ${centerBottomRightPt.x} ${fromBR.y}, 
           ${fromBR.x} ${fromBR.y}`
        );
    }

    function handleIntersection(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // updatePaths(); // Draw paths
                document.querySelector('.outer-animate-box').classList.add('animate-started'); // Trigger animations
                observer.unobserve(entry.target); // Remove observer after triggering
            }
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        const observer = new IntersectionObserver(handleIntersection, {
            threshold: 0.3
        });

        const target = document.querySelector('.outer-animate-box');
        if (target) {
            observer.observe(target);
        }

        window.addEventListener("resize", updatePaths);
        window.addEventListener("load", () => setTimeout(updatePaths, 100)); // allow layout to stabilize
    });
</script>
