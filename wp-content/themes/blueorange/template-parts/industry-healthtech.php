<?php
/*
Template Name: Industry Healhtech Page
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
                <div class="subtitle text-uppercase"><?php the_field('sub_heading_8'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_8'); ?></h2>
                <?php the_field('content_8'); ?>
            </div>
            <div class="col-lg-6 image_col mt-4 mt-lg-0">
                <img src="<?php the_field('image'); ?>" class="w-100">
            </div>
        </div>
    </div>
</section>
<section class="overview_blueorange wi_full">
    <div class="container-xxl">
        <div class="sec_bgimg" style="background-image: url(<?php bloginfo('template_url') ?>/newimages/pattern-bg-second.svg), linear-gradient(to bottom, #192C47, #1B375F);" data-aos="fade-up" data-aos-duration="1500">
            <div class="overview--wrapper overview_why_blueornge">
                <div class="row align-items-end">
                    <div class="col-lg-5 title_col">
                        <div class="subtitle text-uppercase light_blue"><?php the_field('sub_heading_2'); ?></div>
                        <h2 class="text-uppercase text-white"><?php the_field('heading_2'); ?></h2>
                    </div>
                    <div class="col-lg-6 ml-auto content_col light_blue">
                        <?php the_field('content_2'); ?>
                    </div>
                </div>
                <div class="why-bo-list row mt-1">
					<?php if( have_rows('content_4') ):
					while ( have_rows('content_4') ) : the_row();	?>
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
        </div>
    </div>
</section>
<section class="mgmnt_heirarchy wi_full py_3">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-6 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_4'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_4'); ?></h2>
            </div>
            <div class="col-lg-6 ml-auto content_col light_grey">
                <?php the_field('content_6'); ?>
            </div>
        </div>
        <div class="heirarchy_wrapper mt-md-5 mt-3">
             <div class="py-sm-4 px-sm-4 px-2 py-3 outer-animate-box" style='height:100%; background-color:#f6f9fd'
                    style='height:100%; background-color:#f6f9fd'>
                    <div class="position-relative animate-box" style='height:100%;'>
                        <img class="left-img1" style='position:absolute; top:0%; left:0;'
                            src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/left-img1.svg"
                            alt="">
                        <img class="left-img2" style='position:absolute; top:25%; left:0; transform: translateY(-25%);'
                            src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/left-img2.svg"
                            alt="">
                        <img class="left-img3" style='position:absolute; top:50%; left:0; transform: translateY(-50%);'
                            src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/left-img3.svg"
                            alt="">
                        <img class="left-img4" style='position:absolute; top:75%; left:0; transform: translateY(-75%);'
                            src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/left-img4.svg"
                            alt="">
                        <img class="left-img5" style='position:absolute; top:100%; left:0; transform: translateY(-100%);'
                            src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/left-img5.svg"
                            alt="">
                        
                            
                        <img class="center-img"
                            style='position:absolute; top:51%; left:50%;transform: translate(-50%, -50%);'
                            src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/center-img.svg"
                            alt="">

                            
                        <img class="right-img1" style='position:absolute; top:0%; right:0;'
                            src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/right-img1.svg"
                            alt="">
                        <img class="right-img2" style='position:absolute; top:50%; right:0; transform: translateY(-50%);'
                            src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/right-img2.svg"
                            alt="">
                        <img class="right-img3" style='position:absolute; top:100%; right:0; transform: translateY(-100%);'
                            src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/right-img3.svg"
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
                                <linearGradient id="gradientStrokeCenter" x1="-20%" y1="100%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#f7b733" stop-opacity="0" />
                                    <stop offset="100%" stop-color="#f7b733" stop-opacity="1" />
                                </linearGradient>
                            </defs>
                            <path id="path1" class="path1" stroke="url(#gradientStroke)" stroke-width="4"
                                fill="none" />
                            <path id="path2" class="path1" stroke="url(#gradientStroke)" stroke-width="4"
                                fill="none" />
                            <path id="path3" class="path1" stroke="url(#gradientStroke)" stroke-width="4"
                                fill="none" />
                            <path id="path4" class="path1" stroke="url(#gradientStroke)" stroke-width="4"
                                fill="none" />
                            <path id="path5" class="path1" stroke="url(#gradientStroke)" stroke-width="4"
                                fill="none" />

                            <path id="path6" class="path2" stroke="url(#gradientStrokeReverse)" stroke-width="4"
                                fill="none" />
                            <path id="path7" class="path2" stroke="url(#gradientStrokeReverse)" stroke-width="4"
                                fill="none" />
                            <path id="path8" class="path2" stroke="url(#gradientStrokeReverse)" stroke-width="4"
                                fill="none" />
                                
                            <path id="path9" class="center-path" stroke="url(#gradientStrokeCenter)" stroke-width="4"
                                fill="none" />
                        </svg>
                    </div>
                </div>
        </div>
    </div>
</section>
<section class="b_service_sec b_industry_srvc healthtech_tabs wi_full" id="strategySection">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-5 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_3'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_3'); ?></h2>
            </div>
            <div class="col-lg-7 ml-auto content_col light_grey">
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
                                    <div class="btn_block">
                                        <a href="<?php the_sub_field('link'); ?>" class="button orange_btn">Learn More <i class="fa-solid fa-angle-right"></i></a>
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

<style>
    .heirarchy_wrapper{
        height: 25rem;
    }

    @media (max-width: 1200px) {
        .animate-box img {
            width: 20%;
        }
        .heirarchy_wrapper{
            height: 21rem;
        }
    }

    @media (max-width: 768px) {
        .heirarchy_wrapper{
            height: 16rem;
        }
    }

    @media (max-width: 672px) {
        .heirarchy_wrapper{
            height: 14rem;
        }
        .animate-box img {
            width: 25%;
        }
    }

    @media (max-width: 425px) {
        .heirarchy_wrapper{
            height: 11rem;
        }

        .path1 {
            stroke-width: 2 !important;
        }
        .center-path {
            stroke-width: 2 !important;
        }
        .path2 {
            stroke-width: 2 !important;
        }
        .path3 {
            stroke-width: 2 !important;
        }
        .path4 {
            stroke-width: 2 !important;
        }
    }

.animate-box img {
    z-index: 0;
    max-width: 100%;
}

.path1 {
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    fill: none;
    stroke-width: 3;
}
.center-path {
    stroke-dasharray: 1100;
    stroke-dashoffset: 1100;
    fill: none;
    stroke-width: 3;
}

.path2 {
    /* d: path("M 220 300 C 220 390 230 380 150 385"); */
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    fill: none;
    stroke-width: 3;
}

.path3 {
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    fill: none;
    stroke-width: 3;
}

.path4 {
    /* d: path("M 356 300 C 355 390 355 380 425 385"); */
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    fill: none;
    stroke-width: 3;
}


.top-right-img,
.top-left-img,
.bottom-right-img,
.bottom-left-img {
    opacity: 0;
    z-index: 1 !important;
}

.left-img1,
.left-img2,
.left-img3,
.left-img4,
.left-img5,
.right-img1,
.right-img2,
.right-img3,
.center-img
{
    opacity: 0;
}

.left-img2{
    animation: visible2 2s 1s ease forwards;
}

.right-img1{
    animation: visible2 2s 1s ease forwards;
}


/* animation flow */

.outer-animate-box.animate-started .left-img1{
    animation: visible 2s 1s ease forwards;
}

.outer-animate-box.animate-started .left-img2{
    animation: visible 2s 1s ease forwards;
}

.outer-animate-box.animate-started .left-img3 {
    animation: visible 2s 1s ease forwards;
}

.outer-animate-box.animate-started .left-img4 {
    animation: visible 2s 1s ease forwards;
}

.outer-animate-box.animate-started .left-img5 {
    animation: visible 2s 1s ease forwards;
}

.outer-animate-box.animate-started .path1{
    animation: draw2 3s ease-in-out forwards;
}




.outer-animate-box.animate-started .center-img {
    animation: visible 2s 2.5s ease forwards;
}

.outer-animate-box.animate-started .center-path{
    animation: draw 4s 2.5s ease forwards;
}




.outer-animate-box.animate-started .path2{
    animation: draw 3s 4.5s ease forwards;
}


.outer-animate-box.animate-started .right-img1{
    animation: visible 2s 5s ease forwards;
}

.outer-animate-box.animate-started .right-img2 {
    animation: visible 2s 5s ease forwards;
}

.outer-animate-box.animate-started .right-img3 {
    animation: visible 2s 5s ease forwards;
}










@keyframes draw {
    to {
        stroke-dashoffset: 0;
    }
}
@keyframes draw2 {
    to {
        stroke-dashoffset: 800;
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
</style>


<script>
    const distance = (x, y) => {
            console.log("dis", x-y)
            return (x-y);
        };

    function makeLines(centerTopLeft1, fromL1, id){
        document.querySelector(`#path${id}`).setAttribute("d",
            `M ${centerTopLeft1.x} ${centerTopLeft1.y} 
            Z H ${centerTopLeft1.x - distance(centerTopLeft1.x,fromL1.x)/20 } 
            Q ${centerTopLeft1.x - distance(centerTopLeft1.x,fromL1.x)/10} ${centerTopLeft1.y} ${centerTopLeft1.x - distance(centerTopLeft1.x,fromL1.x)/5} ${centerTopLeft1.y - distance(centerTopLeft1.y,fromL1.y)/6}
         C ${centerTopLeft1.x - distance(centerTopLeft1.x,fromL1.x)/5} ${centerTopLeft1.y - distance(centerTopLeft1.y,fromL1.y)/6},
           ${fromL1.x + distance(centerTopLeft1.x,fromL1.x)/2.5} ${fromL1.y + distance(centerTopLeft1.y,fromL1.y)/7}, 
           ${fromL1.x + distance(centerTopLeft1.x,fromL1.x)/2.5} ${fromL1.y + distance(centerTopLeft1.y,fromL1.y)/7} 
           Q ${fromL1.x + distance(centerTopLeft1.x,fromL1.x)/3.1} ${fromL1.y} ${fromL1.x + distance(centerTopLeft1.x,fromL1.x)/4} ${fromL1.y}
           H ${fromL1.x}
           `
        );
    }


    function makeLines2(centerTopRight1, fromR1, id){
        document.querySelector(`#path${id}`).setAttribute("d",
            `M ${centerTopRight1.x} ${centerTopRight1.y} 
            Z H ${centerTopRight1.x - distance(centerTopRight1.x,fromR1.x)/20 }
            Q ${centerTopRight1.x - distance(centerTopRight1.x,fromR1.x)/10} ${centerTopRight1.y} ${centerTopRight1.x - distance(centerTopRight1.x,fromR1.x)/5} ${centerTopRight1.y - distance(centerTopRight1.y,fromR1.y)/6}
         C ${centerTopRight1.x - distance(centerTopRight1.x,fromR1.x)/5} ${centerTopRight1.y - distance(centerTopRight1.y,fromR1.y)/6},
           ${fromR1.x + distance(centerTopRight1.x,fromR1.x)/2.5} ${fromR1.y + distance(centerTopRight1.y,fromR1.y)/7}, 
           ${fromR1.x + distance(centerTopRight1.x,fromR1.x)/2.5} ${fromR1.y + distance(centerTopRight1.y,fromR1.y)/7} 
           Q ${fromR1.x + distance(centerTopRight1.x,fromR1.x)/3.1} ${fromR1.y} ${fromR1.x + distance(centerTopRight1.x,fromR1.x)/4} ${fromR1.y}
           H ${fromR1.x}
           `
        );
    }

    function updatePaths() {
        const getMidCenter1 = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                // x: rect.left + rect.width / 2.2,
                x: rect.left - rect.width / 6.66,
                y: rect.top + rect.height / 3.33
            };
        };
        const getMidCenter2 = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                // x: rect.left + rect.width / 2.2,
                x: rect.left  - rect.width / 6.66,
                y: rect.top + rect.height / 2.5
            };
        };
        const getMidCenter3 = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                // x: rect.left + rect.width / 2.2,
                x: rect.left  - rect.width / 6.66,
                y: rect.top + rect.height / 2
            };
        };
        const getMidCenter4 = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                // x: rect.left + rect.width / 2.2,
                x: rect.left  - rect.width / 6.66,
                y: rect.top + rect.height / 1.66
            };
        };
        const getMidCenter5 = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                // x: rect.left + rect.width / 2.2,
                x: rect.left  - rect.width / 6.66,
                y: rect.top + rect.height / 1.42
            };
        };

        const getMidCenter6 = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                // x: rect.left + rect.width / 2.2,
                x: rect.right + rect.width / 6.66,
                y: rect.top + rect.height / 2.5
            };
        };
        const getMidCenter7 = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                // x: rect.left + rect.width / 2.2,
                x: rect.right + rect.width / 6.66,
                y: rect.top + rect.height / 2
            };
        };
        const getMidCenter8 = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                // x: rect.left + rect.width / 2.2,
                x: rect.right + rect.width / 6.66,
                y: rect.top + rect.height / 1.66
            };
        };
        

        const getMidLeft = (el) => {
            const rect = el.getBoundingClientRect();
            return {
                // x: rect.left + rect.width / 1.2,
                x: rect.left + rect.width ,
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

        const left1 = document.querySelector(".left-img1");
        const left2 = document.querySelector(".left-img2");
        const left3 = document.querySelector(".left-img3");
        const left4 = document.querySelector(".left-img4");
        const left5 = document.querySelector(".left-img5");

        const center = document.querySelector(".center-img");

        const right1 = document.querySelector(".right-img1");
        const right2 = document.querySelector(".right-img2");
        const right3 = document.querySelector(".right-img3");

        const rel = (pt) => ({
            x: pt.x - svgRect.left,
            y: pt.y - svgRect.top
        });

        const fromL1 = rel(getMidLeft(left1));
        const fromL2 = rel(getMidLeft(left2));
        const fromL3 = rel(getMidLeft(left3));
        const fromL4 = rel(getMidLeft(left4));
        const fromL5 = rel(getMidLeft(left5));

        const centerTopLeft1 = rel(getMidCenter1(center));
        const centerTopLeft2 = rel(getMidCenter2(center));
        const centerTopLeft3 = rel(getMidCenter3(center));
        const centerTopLeft4 = rel(getMidCenter4(center));
        const centerTopLeft5 = rel(getMidCenter5(center));

        const centerTopRight1 = rel(getMidCenter6(center));
        const centerTopRight2 = rel(getMidCenter7(center));
        const centerTopRight3 = rel(getMidCenter8(center));

        const fromR1 = rel(getMidRight(right1));
        const fromR2 = rel(getMidRight(right2));
        const fromR3 = rel(getMidRight(right3));

        const ctrlOffset = 40;

        const distance = (x, y) => {
            console.log("dis", x-y)
            return (x-y);
        };

        makeLines(centerTopLeft1, fromL1, 1)
        makeLines(centerTopLeft2, fromL2, 2)
        makeLines(centerTopLeft3, fromL3, 3)
        makeLines(centerTopLeft4, fromL4, 4)
        makeLines(centerTopLeft5, fromL5, 5)

        makeLines2(centerTopRight1, fromR1, 6)
        makeLines2(centerTopRight2, fromR2, 7)
        makeLines2(centerTopRight3, fromR3, 8)

        // document.querySelector(`#path3`).setAttribute("d",
        //     `M ${centerTopLeft3.x} ${centerTopLeft3.y} 
        //     Z H ${centerTopLeft3.x - distance(centerTopLeft3.x,fromL3.x)/20 } 
        //     Q ${centerTopLeft3.x - distance(centerTopLeft3.x,fromL3.x)/10} ${centerTopLeft3.y} ${centerTopLeft3.x - distance(centerTopLeft3.x,fromL3.x)/5} ${centerTopLeft3.y - distance(centerTopLeft3.y,fromL3.y)/6}
        //  C ${centerTopLeft3.x - distance(centerTopLeft3.x,fromL3.x)/5} ${centerTopLeft3.y - distance(centerTopLeft3.y,fromL3.y)/6},
        //    ${fromL3.x + distance(centerTopLeft3.x,fromL3.x)/4} ${fromL3.y + distance(centerTopLeft3.y,fromL3.y)/7}, 
        //    ${fromL3.x + distance(centerTopLeft3.x,fromL3.x)/4} ${fromL3.y + distance(centerTopLeft3.y,fromL3.y)/7} 
        //    H ${fromL3.x}
        // //    Q ${fromL3.x + distance(centerTopLeft3.x,fromL3.x)/3.1} ${fromL3.y} ${fromL3.x + distance(centerTopLeft3.x,fromL3.x)/4} ${fromL3.y}
        //    `
        // );


        const getCenterBottomStart = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                x: rect.left + rect.width / 10,
                y: rect.bottom + rect.height / 10
            };
        };

        const getCenterBottomEnd = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                x: rect.right - rect.width / 10,
                y: rect.bottom + rect.height / 10
            };
        };

        const getCenterRightStart = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                x: rect.right + rect.width / 10,
                y: rect.bottom - rect.height / 10
            };
        };

        const getCenterRightEnd = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                x: rect.right + rect.width / 10,
                y: rect.top + rect.height / 10
            };
        };

        const getCenterTopStart = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                x: rect.right - rect.width / 10,
                y: rect.top - rect.height / 10
            };
        };

        const getCenterTopEnd = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                x: rect.left + rect.width / 10,
                y: rect.top - rect.height / 10
            };
        };

        const getCenterLeftStart = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                x: rect.left - rect.width / 10,
                y: rect.top + rect.height / 10
            };
        
        };
        const getCenterLeftEnd = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                x: rect.left - rect.width / 10,
                y: rect.bottom - rect.height / 10
            };
        };

        const fromBottomStart = rel(getCenterBottomStart(center));
        const fromBottomEnd = rel(getCenterBottomEnd(center));
        const fromRightStart = rel(getCenterRightStart(center));
        const fromRightEnd = rel(getCenterRightEnd(center));
        const fromTopStart = rel(getCenterTopStart(center));
        const fromTopEnd = rel(getCenterTopEnd(center));
        const fromLeftStart = rel(getCenterLeftStart(center));
        const fromLeftEnd = rel(getCenterLeftEnd(center));

        document.querySelector("#path9").setAttribute("d",
            `M ${fromBottomStart.x} ${fromBottomStart.y} 
            Z H ${fromBottomEnd.x } 
            C ${fromRightStart.x} ${fromBottomEnd.y} ${fromRightStart.x} ${fromBottomEnd.y} ${fromRightStart.x} ${fromRightStart.y} 
            V ${fromRightEnd.y}
            C ${fromRightEnd.x} ${fromTopStart.y} ${fromRightEnd.x} ${fromTopStart.y} ${fromTopStart.x} ${fromTopStart.y}
            H ${fromTopEnd.x } 
            C ${fromLeftStart.x} ${fromTopEnd.y} ${fromLeftStart.x} ${fromTopEnd.y} ${fromLeftStart.x} ${fromLeftStart.y} 
            V ${fromLeftEnd.y} 
            C ${fromLeftEnd.x} ${fromBottomStart.y} ${fromLeftEnd.x} ${fromBottomStart.y} ${fromBottomStart.x} ${fromBottomStart.y}`
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