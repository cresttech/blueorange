<?php
/*
* Template Name: GenAI Solutions Page
* Template Post Type: services
*/
get_header();
?>
<div class="page-content services_page">
<section class="banner_sec inner_banner wi_full" style="background-image: url(<?php the_field('banner_image'); ?>), linear-gradient(to bottom, #192C47, #1B375F);">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-5 title_col text-white">
                <div class="subtitle text-uppercase"><?php the_field('banner_sub_heading'); ?></div>
                <h1 class="text-uppercase mb-lg-0"><?php the_field('banner_heading'); ?></h1>
            </div>
            <div class="col-lg-6 ml-auto content_col light_blue">
                <?php the_field('banner_content'); ?>
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
                <div class="subtitle text-uppercase"><?php the_field('sub_heading_1'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_1'); ?></h2>
                <?php the_field('content_1'); ?>
                <div class="btn_block">
                    <a href="<?php the_field('button_link_2'); ?>" class="button orange_btn"><?php the_field('button_text_2'); ?> <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 image_col mt-4 mt-lg-0">
                <!-- <img src="<?php the_field('image_1'); ?>" class="w-100"> -->
                 <div class="p-4 outer-animate-box">
                    <div class="position-relative animate-box" style='height:100%;'>
                        <img class="top-left-img" style='position:absolute; top:10%; left:10%;'
                            src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/gen-ai-img1.svg"
                            alt="">
                        <img class="bottom-left-img" style='position:absolute; bottom:10%; left:0;'
                            src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/gen-ai-img2.svg"
                            alt="">
                        <img class="center-img"
                            style=''
                            src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/gen-ai-mid-img.svg"
                            alt="">
                        <img class="top-right-img" style='position:absolute; top:10%; right:0;'
                            src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/gen-ai-img3.svg"
                            alt="">
                        <img class="bottom-right-img" style='position:absolute; bottom:10%; right:10%;'
                            src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/gen-ai-img4.svg"
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
                            <path id="path1" class="path1" stroke="url(#gradientStrokeReverse)" stroke-width="4"
                                fill="none" />
                            <path id="path2" class="path2" stroke="url(#gradientStroke)" stroke-width="4"
                                fill="none" />
                            <path id="path3" class="path3" stroke="url(#gradientStrokeReverse)" stroke-width="4"
                                fill="none" />
                            <path id="path4" class="path4" stroke="url(#gradientStrokeReverse)" stroke-width="4"
                                fill="none" />
                            <circle id="dot1" class="dot1" />
                            <circle id="dot2" class="dot2" />
                            <circle id="dot3" class="dot3" />
                            <circle id="dot4" class="dot4" />
                        </svg>
                    </div>
                </div>
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
                <div class="btn_block">
                    <a href="<?php the_field('button_link_3'); ?>" class="button orange_btn"><?php the_field('button_text_3'); ?> <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="data_engg_challenge data_service_list row" data-aos="fade-up" data-aos-duration="2000">
			<?php if( have_rows('services_data') ):
			while ( have_rows('services_data') ) : the_row();	?>
            <div class="col-sm-6 col-lg-3 ds--item">
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
<section class="overview_blueorange gen_ai_solution wi_full">
    <div class="container-xxl">
        <div class="sec_bgimg" style="background-image: url(<?php bloginfo('template_url') ?>/newimages/pattern-bg-second.svg), linear-gradient(to bottom, #192C47, #1B375F);" data-aos="fade-up" data-aos-duration="1500">
            <div class="overview--wrapper">
                <div class="sec_title text-white text-center">
                    <div class="subtitle text-uppercase"><?php the_field('sub_heading_3'); ?></div>
                    <h2 class="text-uppercase"><?php the_field('heading_3'); ?></h2>
                    <?php the_field('content_3'); ?>
                </div>
                <div class="row overvie_genai">
					<?php if( have_rows('services_overview') ):
					while ( have_rows('services_overview') ) : the_row();	?>
                    <div class="col-md-4 ogas_item mt-4">
                        <div class="item_inner text-white text-center">
                            <h2 class="h2_large text-uppercase"><?php the_sub_field('title'); ?></h2>
                            <p><?php the_sub_field('text'); ?></p>
                        </div>
                    </div>
					<?php endwhile; endif;?>
                </div>
                <div class="btn_block justify-content-center">
                    <a href="<?php the_field('button_link_4'); ?>" class="button orange_btn"><?php the_field('button_text_4'); ?> <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
            <div class="why--blueorange mt-4">
                <div class="row align-items-end">
                    <div class="col-lg-5 title_col text-white">
                        <div class="subtitle text-uppercase"><?php the_field('sub_heading_4'); ?></div>
                        <h2 class="text-uppercase"><?php the_field('heading_4'); ?></h2>
                    </div>
                    <div class="col-lg-7 content_col text-white">
                        <?php the_field('content_4'); ?>
                    </div>
                </div>
                <div class="why-bo-list row">
					<?php if( have_rows('strategies') ):
					while ( have_rows('strategies') ) : the_row();	?>
                    <div class="list--item">
                        <!-- <a href="<?php// the_sub_field('link'); ?>" class="item--inner"></a> -->
                        <a class="item--inner">
                            <div class="icon--btn">
                                <span class="item--icon">
                                    <img src="<?php the_sub_field('icon'); ?>" class="ico_msg" />
                                </span>
                                <!-- <span class="cursor-pointer more_button"><img src="<?php// bloginfo('template_url') ?>/newimages/arrow_upward.svg" alt="#"></span> -->
                            </div>
                            <h3><?php the_sub_field('title'); ?></h3>
                            <p><?php the_sub_field('text'); ?></p>
                        </a>
                    </div>
					<?php endwhile; endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service_sec wi_full py_3">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-5 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_6s'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_6s'); ?></h2>
            </div>
            <div class="col-lg-6 ml-auto content_col light_grey">
                <?php the_field('content_6s'); ?>
            </div>
        </div>
        <div class="services_list_container" data-aos="fade-up" data-aos-duration="2000">
			<?php if( have_rows('content_7s') ):
			while ( have_rows('content_7s') ) : the_row();	?>
            <div class="service--item">
                <a href="<?php echo site_url(); ?>/contact-us/" class="item--inner cursor-pointer">
                    <div class="item--title">
                        <div class="item--count">01</div>
                        <h4 class="mb-0"><?php the_sub_field('title'); ?></h4>
                    </div>
                    <div class="item--content light_grey">
                        <p><?php the_sub_field('text'); ?></p>
                        <span class="cursor-pointer more_button"><img src="<?php bloginfo('template_url') ?>/newimages/arrow_upward.svg" alt="#"></span>
                    </div>
                </a>
            </div>
			<?php endwhile; endif;?>
        </div>
    </div>
</section>
<section class="payment_revolution wi_full py_3">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-5 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_5'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_5'); ?></h2>
            </div>
            <div class="col-lg-6 ml-auto content_col light_grey">
                <?php the_field('content_5'); ?>
                <div class="btn_block">
                    <a href="<?php the_field('button_link_5'); ?>" class="button orange_btn"><?php the_field('button_text_5'); ?> <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="strategic_process position-relative" data-aos="fade-up" data-aos-duration="1500">
            <div class="progress-line"></div>
            <div class="strategy_step_progress">
				<?php if( have_rows('list_content') ):
				while ( have_rows('list_content') ) : the_row();	?>
                <div class="sp_item">
                    <h4><?php the_sub_field('title'); ?></h4>
                    <?php the_sub_field('text'); ?>
                </div>
				<?php endwhile; endif;?>
            </div>
        </div>
    </div>
</section>
<section class="why_partnering_bo wi_full py_3">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-5 title_col light_grey">
                <div class="subtitle text-uppercase"><?php the_field('sub_heading_6'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_6'); ?></h2>
                <?php the_field('content_6'); ?>
            </div>
            <div class="col-lg-7">
                <div class="data_service_list row" data-aos="fade-up" data-aos-duration="2000">
					<?php if( have_rows('list_content_1') ):
					while ( have_rows('list_content_1') ) : the_row();	?>
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
                <div class="btn_block">
                    <a href="<?php the_field('button_link_6'); ?>" class="button orange_btn"><?php the_field('button_text_6'); ?> <i class="fa-solid fa-angle-right"></i></a>
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
                    <div class="subtitle text-uppercase"><?php the_field('sub_heading_7'); ?></div>
                    <h2 class="text-uppercase"><?php the_field('heading_7'); ?></h2>
                    <div class="btn_block justify-content-center">
                        <a href="<?php the_field('button_link_7'); ?>" class="button orange_btn"><?php the_field('button_text_7'); ?> <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="partner_slide_wraper mt-5">
                    <div class="partner--carousel">
                        <div class="partner--wrapper">
							<?php if( have_rows('partner_logos') ):
							while ( have_rows('partner_logos') ) : the_row();	?>
								<div class="item text-center"><img src="<?php the_sub_field('image'); ?>" alt="#"></div>
							<?php endwhile; endif;?>
                        </div>
                        <div class="partner--wrapper">
                            <?php if( have_rows('partner_logos') ):
							while ( have_rows('partner_logos') ) : the_row();	?>
								<div class="item text-center"><img src="<?php the_sub_field('image'); ?>" alt="#"></div>
							<?php endwhile; endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="casestudy_sec wi_full py_3">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-sm-8 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_8'); ?></div>
                <h2 class="text-uppercase text_color mb-0"><?php the_field('heading_9'); ?></h2>
            </div>
            <div class="col-sm-4 content_col light_grey">
                <div class="btn_block justify-content-end v_dsktop">
                    <a href="/case-studies/" class="button border_btn">View more</a>
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
            <a href="/case-studies/" class="button border_btn">View more</a>
        </div>
    </div>
</section>
</div>
<?php get_footer(); ?>


<style>

.outer-animate-box{
    height: 100%;
    width: 100%;
    background-color: #F2F6F9;
}

.animate-box img {
    z-index: 0;
    max-width: 100%;
    /* opacity: 0 !important; */
}

.path1 {
    /* d: path("M 220 130 C 220 46 230 46 150 46"); */
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    fill: none;
    stroke: url(#gradientStroke);
    stroke-width: 3;
}

.path2 {
    /* d: path("M 220 300 C 220 390 230 380 150 385"); */
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    fill: none;
    stroke: url(#gradientStroke);
    stroke-width: 3;
}

.path3 {
    /* d: path("M 356 130 C 355 46 355 46 425 46"); */
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    fill: none;
    stroke: url(#gradientStrokeReverse);
    stroke-width: 3;
}

.path4 {
    /* d: path("M 356 300 C 355 390 355 380 425 385"); */
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    fill: none;
    stroke: url(#gradientStrokeReverse);
    stroke-width: 3;
}


.top-right-img,
.top-left-img,
.bottom-right-img,
.bottom-left-img {
    opacity: 0;
    z-index: 1 !important;
}


/* animation flow */

.outer-animate-box.animate-started .center-img {
    opacity: 0;
    animation: visible 2s ease forwards;
}

.outer-animate-box.animate-started .dot1{
    opacity: 0;
    animation: visible 1s 2s ease forwards;
}

.outer-animate-box.animate-started .path1{
    animation: draw 3s 2s ease forwards;
}

.outer-animate-box.animate-started .top-left-img{
    animation: visible2 2s 2s ease forwards;
}

.outer-animate-box.animate-started .dot2{
    opacity: 0;
    animation: visible 1s 1s ease forwards;
}

.outer-animate-box.animate-started .path2{
    animation: draw 3s 1s ease forwards;
}

.outer-animate-box.animate-started .bottom-left-img {
    animation: visible2 2s 1s ease forwards;
}

.outer-animate-box.animate-started .dot4{
    opacity: 0;
    animation: visible 1s 3s ease forwards;
}

.outer-animate-box.animate-started .path4{
    animation: draw 3s 3s ease forwards;
}

.outer-animate-box.animate-started .bottom-right-img {
    animation: visible2 2s 3s ease forwards;
}

.outer-animate-box.animate-started .dot3{
    opacity: 0;
    animation: visible 1s 4s ease forwards;
}

.outer-animate-box.animate-started .path3{
    animation: draw 3s 4s ease forwards;
}

.outer-animate-box.animate-started .top-right-img {
    animation: visible2 2s 4s ease forwards;
}

@keyframes draw {
    to {
        stroke-dashoffset: 0;
    }
}

@keyframes visible {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
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


<script>
    function updatePaths() {
        const getMidTopLeftCenter = (el) => {
            const rect = el.getBoundingClientRect();
            console.log(rect.top)
            return {
                x: rect.left + rect.width / 2.2,
                y: rect.top + rect.height / 3.8
            };
        };
        const getMidBottomLeftCenter = (el) => {
            const rect = el.getBoundingClientRect();
            console.log(rect.top)
            return {
                x: rect.left + rect.width / 2.85,
                y: rect.bottom - rect.height / 3.8
            };
        };
        const getMidTopRightCenter = (el) => {
            const rect = el.getBoundingClientRect();
            return {
                x: rect.right - rect.width / 3,
                y: rect.top + rect.height / 3.8
            };
        };
        const getMidBottomRightCenter = (el) => {
            const rect = el.getBoundingClientRect();
            return {
                x: rect.right - rect.width / 2.3,
                y: rect.bottom - rect.height / 3.8
            };
        };
        const getMidLeft = (el) => {
            const rect = el.getBoundingClientRect();
            return {
                x: rect.left + rect.width / 1.2,
                y: rect.top + rect.height / 2
            };
        };

        const getMidRight = (el) => {
            const rect = el.getBoundingClientRect();
            return {
                x: rect.right - rect.width / 1.2,
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

        const ctrlOffset = 40;

        document.querySelector("#path1").setAttribute("d",
            `M ${centerTopLeftPt.x} ${centerTopLeftPt.y} 
         C ${centerTopLeftPt.x} ${fromTL.y},
           ${centerTopLeftPt.x} ${fromTL.y}, 
           ${fromTL.x} ${fromTL.y}`
        );

        document.querySelector("#path2").setAttribute("d",
            `M ${centerBottomLeftPt.x} ${centerBottomLeftPt.y} 
         C ${centerBottomLeftPt.x} ${fromBL.y}, 
           ${centerBottomLeftPt.x} ${fromBL.y}, 
           ${fromBL.x} ${fromBL.y}`
        );

        document.querySelector("#path3").setAttribute("d",
            `M ${centerTopRightPt.x} ${centerTopRightPt.y} 
         C ${centerTopRightPt.x} ${fromTR.y}, 
           ${centerTopRightPt.x} ${fromTR.y}, 
           ${fromTR.x} ${fromTR.y}`
        );

        document.querySelector("#path4").setAttribute("d",
            `M ${centerBottomRightPt.x} ${centerBottomRightPt.y} 
         C ${centerBottomRightPt.x} ${fromBR.y}, 
           ${centerBottomRightPt.x} ${fromBR.y}, 
           ${fromBR.x} ${fromBR.y}`
        );

        const dot1 = document.querySelector("#dot1");

        setTimeout(() => {
            dot1.setAttribute("cx", centerTopLeftPt.x);
            dot1.setAttribute("cy", centerTopLeftPt.y);
            dot1.setAttribute("r", 4);
            dot1.setAttribute("fill", "#f7b733");
        }, 1000);

        const dot2 = document.querySelector("#dot2");
        dot2.setAttribute("cx", centerBottomLeftPt.x);
        dot2.setAttribute("cy", centerBottomLeftPt.y);
        dot2.setAttribute("r", 4);
        dot2.setAttribute("fill", "#f7b733");

        const dot3 = document.querySelector("#dot3");
        dot3.setAttribute("cx", centerTopRightPt.x);
        dot3.setAttribute("cy", centerTopRightPt.y);
        dot3.setAttribute("r", 4);
        dot3.setAttribute("fill", "#f7b733");

        const dot4 = document.querySelector("#dot4");
        dot4.setAttribute("cx", centerBottomRightPt.x);
        dot4.setAttribute("cy", centerBottomRightPt.y);
        dot4.setAttribute("r", 4);
        dot4.setAttribute("fill", "#f7b733");

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