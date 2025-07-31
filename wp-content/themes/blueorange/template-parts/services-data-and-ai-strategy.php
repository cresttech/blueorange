<?php
/*
 * Template Name: Services - Data & AI Strategy
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
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_2'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_2'); ?></h2>
            </div>
            <div class="col-lg-6 ml-auto content_col light_grey">
                <?php the_field('content_2'); ?>
            </div>
        </div>
        <div class="data_service_list row" data-aos="fade-up" data-aos-duration="2000">
			<?php if( have_rows('services_mig') ):
			while ( have_rows('services_mig') ) : the_row();	?>
            <div class="col-md-4 ds--item">
                <div class="item--inner">
                    <div class="item--icon">
                        <img src="<?php the_sub_field('icon'); ?>" alt="#">
                    </div>
                    <h4 class="mb-0"><?php the_sub_field('title'); ?></h4>
                </div>
            </div>
			<?php endwhile; endif;?>
        </div>
    </div>
</section>
<section class="tailored_strategy wi_full py_3">
    <div class="container-xxl">
        <div class="row" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-5 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_3'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_3'); ?></h2>
            </div>
            <div class="col-lg-6 ml-auto content_col light_grey">
                <?php the_field('content_3'); ?>
                <div class="btn_block">
                    <a href="<?php the_field('button_link_2'); ?>" class="button orange_btn"><?php the_field('button_text_2'); ?> <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="b_service_sec wi_full py_3" id="strategySection">
    <div class="container-xxl">
        <div class="case--tabs-wrapper row" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-5">
                <div class="sec_title">
                    <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_4'); ?></div>
                    <h2 class="text-uppercase text_color"><?php the_field('heading_4'); ?></h2>
                </div>
                <ul class="nav nav-tabs" id="strategyTabs" role="tablist">
					<?php if( have_rows('content_4') ):
					$count = 0;
					while ( have_rows('content_4') ) : the_row();	?>
                    <li class="nav-item">
                        <a class="nav-link bo_progress_tab <?php if($count == 0) { echo 'active'; } ?>" data-toggle="tab" href="#Tab<?php echo $count; ?>" role="tab" data-index="<?php echo $count; ?>"><?php the_sub_field('title'); ?> <?php the_sub_field('text'); ?></a>
                        <div class="progress" data-index="0">
                            <div class="progress-bar tab-progress" id="progressBar<?php echo $count; ?>"></div>
                        </div>
                    </li>
					<?php $count++; endwhile; endif;?>
                </ul>
            </div>
            <div class="col-lg-7">
                <div class="tab-content ai_strategy_tab_p" id="strategyTabContent">
					<?php if( have_rows('content_4') ):
					$count = 0;
					while ( have_rows('content_4') ) : the_row();	?>
                    <div class="tab-pane card <?php if($count == 0) { echo 'active'; } ?>" id="Tab<?php echo $count; ?>" role="tabpanel">
                        <div class="card-header" role="tab" id="tabheading-<?php echo $count; ?>">
                            <a class="<?php if($count != 0) { echo 'collapsed'; } ?>" data-toggle="collapse" href="#collapse-<?php echo $count; ?>" aria-controls="collapse-<?php echo $count; ?>"><?php the_sub_field('title'); ?></a>
                        </div>
                        <div id="collapse-<?php echo $count; ?>" class="collapse <?php if($count == 0) { echo 'show'; } ?>" data-parent="#strategyTabContent" role="tabpanel" aria-labelledby="tabheading-<?php echo $count; ?>">
                            <div class="tab--data">
                                <?php the_sub_field('text'); ?>
                                <?php if($count == 0) { ?>
                                    <div class="p-41 outer-animate-box" style='height:100%; background-color:#f6f9fd'
                                        style='height:100%; background-color:#f6f9fd'>
                                        <div class="position-relative animate-box" style='height:100%; padding: 5rem 1.5rem'>
                                            <img class="top-left-img" style='position:absolute; top:10%; left:5%;'
                                                src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/data-ai-img1.svg"
                                                alt="">
                                            <img class="bottom-left-img" style='position:absolute; bottom:15%; left:15%;'
                                                src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/data-ai-img2.svg"
                                                alt="">
                                            <img class="center-img"
                                                src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/data-ai-mid-img.svg"
                                                alt="">
                                            <img class="top-right-img" style='position:absolute; top:10%; right:5%;'
                                                src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/data-ai-img3.svg"
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
                                <?php } ?>

                                <?php if($count == 1) { ?>
                                    <div class="p-41" style='height:100%; background-color:#f6f9fd'
                                        style='height:100%; background-color:#f6f9fd'>
                                        <div class="position-relative animate-box" style='height:100%;'>

                                            <div class="center" style="margin:auto; width: fit-content; position: relative;">
                                                <img class="center-img2"
                                                    src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/ai-life-2.svg"
                                                    alt="">

                                                <div class="circles circle-1">1</div>
                                                <div class="circles circle-2">2</div>
                                                <div class="circles circle-3">3</div>
                                                <div class="circles circle-4">4</div>



                                                <img class="outer-img1"
                                                src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/outer-img1.svg"
                                                alt="">

                                                <img class="outer-img2"
                                                src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/outer-img2.svg"
                                                alt="">

                                                <img class="outer-img3"
                                                src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/outer-img3.svg"
                                                alt="">

                                                <img class="outer-img4"
                                                src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/outer-img4.svg"
                                                alt="">

                                            </div>

                                            <svg id="svg-lines2"
                                                style="position:absolute; top:0; left:0; width:100%; height:100%; pointer-events:none;"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <defs>
                                                    <linearGradient id="gradientStroke1" x1="0%" y1="0%" x2="0%" y2="50%">
                                                        <stop offset="0%" stop-color="#f7b733" stop-opacity="0" />
                                                        <stop offset="100%" stop-color="#f7b733" stop-opacity="1" />
                                                    </linearGradient>
                                                    <linearGradient id="gradientStroke2" x1="100%" y1="0%" x2="0%" y2="0%">
                                                        <stop offset="0%" stop-color="#f7b733" stop-opacity="0" />
                                                        <stop offset="100%" stop-color="#f7b733" stop-opacity="1" />
                                                    </linearGradient>
                                                    <linearGradient id="gradientStroke3" x1="0%" y1="130%" x2="0%" y2="0%">
                                                        <stop offset="0%" stop-color="#f7b733" stop-opacity="0" />
                                                        <stop offset="100%" stop-color="#f7b733" stop-opacity="1" />
                                                    </linearGradient>
                                                    <linearGradient id="gradientStroke4" x1="0%" y1="0%" x2="100%" y2="0%">
                                                        <stop offset="0%" stop-color="#f7b733" stop-opacity="0" />
                                                        <stop offset="100%" stop-color="#f7b733" stop-opacity="1" />
                                                    </linearGradient>
                                                    
                                                </defs>
                                                <path id="path12" class="path12" stroke="url(#gradientStroke1)" stroke-width="4"
                                                    fill="none" />
                                                <path id="path22" class="path22" stroke="url(#gradientStroke2)" stroke-width="4"
                                                    fill="none" />
                                                <path id="path32" class="path32" stroke="url(#gradientStroke3)" stroke-width="4"
                                                    fill="none" />
                                                <path id="path42" class="path42" stroke="url(#gradientStroke4)" stroke-width="4"
                                                    fill="none" />


                                                <path id="tri12" class="tri1" stroke-width="0"
                                                    fill="#f7b733" />
                                                <path id="tri22" class="tri2" stroke-width="0"
                                                    fill="#f7b733" />
                                                <path id="tri32" class="tri3" stroke-width="0"
                                                    fill="#f7b733" />
                                                <path id="tri42" class="tri4" stroke-width="0"
                                                    fill="#f7b733" />
                                            </svg>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if($count == 2) { ?>
                                    <!-- <img src="<?php the_sub_field('image'); ?>" alt="#"> -->

                                    <div class="custom-padding px-0" style='height:100%; background-color:#f6f9fd; padding-left: 0 !important;'
                                        style='height:100%; background-color:#f6f9fd'>

                                        <img class="graph-border "
                                            src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/graph-border.svg"
                                            alt="">

                                        <div class="position-relative animate-box animate-box3"
                                            style='height:100%; padding:0; padding-bottom: 4rem; width: fit-content;'>

                                            


                                            <img class="custom-width graph-outer-img1 "
                                                src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/graph-out-img1.svg"
                                                alt="">
                                            <img class="custom-width graph-outer-img2"
                                                src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/graph-out-img2.svg"
                                                alt="">
                                            <img class="custom-width graph-outer-img3"
                                                src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/graph-out-img3.svg"
                                                alt="">
                                            <img class="custom-width graph-outer-img4"
                                                src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/graph-out-img4.svg"
                                                alt="">

                                            <div class="graph d-flex align-items-end">
                                                <img class="graph-img1 me-2"
                                                    src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/graph-img1.svg"
                                                    alt="">
                                                <img class="graph-img2 me-2"
                                                    src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/graph-img2.svg"
                                                    alt="">
                                                <img class="graph-img3 me-2"
                                                    src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/graph-img3.svg"
                                                    alt="">
                                                <img class="graph-img4 me-2"
                                                    src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/graph-img4.svg"
                                                    alt="">
                                                <img class="graph-img5 me-2"
                                                    src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/graph-img5.svg"
                                                    alt="">
                                                <img class="graph-img6 me-2"
                                                    src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/graph-img6.svg"
                                                    alt="">
                                                <img class="graph-img7 "
                                                    src="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/themes/blueorange/newimages/graph-img7.svg"
                                                    alt="">
                                            </div>

                                            <svg id="svg-lines3"
                                                style="position:absolute; top:0; left:0; width:100%; height:100%; pointer-events:none;"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <defs>
                                                    <linearGradient id="gradientStroke1" x1="0%" y1="0%" x2="0%" y2="50%">
                                                        <stop offset="0%" stop-color="#f7b733" stop-opacity="0" />
                                                        <stop offset="100%" stop-color="#f7b733" stop-opacity="1" />
                                                    </linearGradient>
                                                    <linearGradient id="gradientStroke2" x1="100%" y1="0%" x2="0%" y2="0%">
                                                        <stop offset="0%" stop-color="#f7b733" stop-opacity="0" />
                                                        <stop offset="100%" stop-color="#f7b733" stop-opacity="1" />
                                                    </linearGradient>
                                                    <linearGradient id="gradientStroke3" x1="0%" y1="130%" x2="0%" y2="0%">
                                                        <stop offset="0%" stop-color="#f7b733" stop-opacity="0" />
                                                        <stop offset="100%" stop-color="#f7b733" stop-opacity="1" />
                                                    </linearGradient>
                                                    <linearGradient id="gradientStroke4" x1="0%" y1="0%" x2="100%" y2="0%">
                                                        <stop offset="0%" stop-color="#f7b733" stop-opacity="0" />
                                                        <stop offset="100%" stop-color="#f7b733" stop-opacity="1" />
                                                    </linearGradient>

                                                    <linearGradient id="gradientStroke" x1="0%" y1="0%" x2="100%" y2="0%">
                                                        <stop offset="0%" stop-color="#f7b733" stop-opacity="0" />
                                                        <stop offset="100%" stop-color="#f7b733" stop-opacity="1" />
                                                    </linearGradient>
                                                    <linearGradient id="gradientStrokeReverse" x1="100%" y1="0%" x2="0%" y2="0%">
                                                        <stop offset="0%" stop-color="#f7b733" stop-opacity="0" />
                                                        <stop offset="100%" stop-color="#f7b733" stop-opacity="1" />
                                                    </linearGradient>

                                                </defs>
                                                <path id="path13" class="path13" stroke="#ffdc95" stroke-width="2" fill="none" />
                                                <path id="path23" class="path23" stroke="#ffdc95" stroke-width="2" fill="none" />
                                                <path id="path33" class="path33" stroke="#ffdc95" stroke-width="2" fill="none" />
                                                <path id="path43" class="path43" stroke="#ffdc95" stroke-width="2" fill="none" />
                                                <path id="path53" class="path53" stroke="#f7b733" stroke-width="2" fill="none" />
                                                <path id="path63" class="path63" stroke="#f7b733" stroke-width="2" fill="none" />
                                                <path id="path73" class="path73" stroke="#f7b733" stroke-width="2" fill="none" />


                                                <circle id="dot12" class="dot12" />
                                                <circle id="dot22" class="dot22" />
                                                <circle id="dot32" class="dot32" />
                                                <circle id="dot42" class="dot42" />
                                                <circle id="dot52" class="dot52" />
                                                <circle id="dot62" class="dot62" />
                                                <circle id="dot72" class="dot72" />
                                            </svg>
                                        </div>
                                    </div>
                                <?php } ?>
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
<section class="strategic_partnership wi_full py_3 pb-2">
    <div class="container-xxl">
        <div class="row" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-5 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_6'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_6'); ?></h2>
            </div>
            <div class="col-lg-6 ml-auto content_col light_grey">
                <?php the_field('content_5'); ?>
                <div class="btn_block">
                    <a href="<?php the_field('button_link_4'); ?>" class="button blue_btn"><?php the_field('button_text_4'); ?> <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="strategic_process position-relative" data-aos="fade-up" data-aos-duration="1500">
            <div class="progress-line"></div>
            <div class="strategy_step_progress">
				<?php if( have_rows('strategies') ):
				while ( have_rows('strategies') ) : the_row();	?>
                <div class="sp_item"><h4><?php the_sub_field('title'); ?></h4></div>
				<?php endwhile; endif;?>
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

<?php get_footer(); ?>

<style>

    .graph-border{
        position: absolute;
        left: 0;
        bottom: 1rem;
        transform: scale(0.98);
    }

.outer-animate-box{
    height: 100%;
    width: 100%;
    background-color: #F2F6F9;
}

.animate-box{
        padding: 5rem 1.5rem;
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
    width: 20% !important;
}


/* animation flow */

.outer-animate-box.animate-started .center-img {
    opacity: 0;
    animation: visible 2s ease forwards;
}

.outer-animate-box.animate-started .dot1{
    opacity: 0;
    animation: visible 1s 1s ease forwards;
}

.outer-animate-box.animate-started .path1{
    animation: draw 3s 1s ease forwards;
}

.outer-animate-box.animate-started .top-left-img{
    animation: visible2 2s 1s ease forwards;
}

.outer-animate-box.animate-started .dot2{
    opacity: 0;
    animation: visible 1s 2s ease forwards;
}

.outer-animate-box.animate-started .path2{
    animation: draw 3s 2s ease forwards;
}

.outer-animate-box.animate-started .bottom-left-img {
    animation: visible2 2s 2s ease forwards;
}

.outer-animate-box.animate-started .dot3{
    opacity: 0;
    animation: visible 1s 3s ease forwards;
}

.outer-animate-box.animate-started .path3{
    animation: draw 3s 3s ease forwards;
}

.outer-animate-box.animate-started .top-right-img {
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









/* 2nd animation */

.circles{
    background-color: #8fb0d8;
    color: #fff;
    padding: 4px 10px;
    position: absolute;
    border-radius: 50%;
}

.outer-img1,
.outer-img2,
.outer-img3,
.outer-img4{
    position: absolute;
    z-index: 5;
    width: unset !important;
    opacity: 0;
}

.outer-img1{
    top: 0;
    left: 105%;
}
.outer-img2{
    bottom: 0;
    left: 105%;
}
.outer-img3{
    bottom: 0;
    right: 105%;
}
.outer-img4{
    top: 0;
    right: 105%;
}

.circle-1{
    top: 0;
    right: 0;
}
.circle-2{
    bottom: 0;
    right: 0;
}
.circle-3{
    bottom: 0;
    left: 0;
}
.circle-4{
    top: 0;
    left: 0;
}

.animate-box img {
    z-index: 0;
    max-width: 100%;
    /* opacity: 0 !important; */
}

.path12 {
    /* d: path("M 220 130 C 220 46 230 46 150 46"); */
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    fill: none;
    /* stroke: url(#gradientStroke); */
    stroke-width: 3;
}

.path22 {
    /* d: path("M 220 300 C 220 390 230 380 150 385"); */
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    fill: none;
    /* stroke: url(#gradientStroke); */
    stroke-width: 3;
}

.path32 {
    /* d: path("M 356 130 C 355 46 355 46 425 46"); */
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    fill: none;
    /* stroke: url(#gradientStrokeReverse); */
    stroke-width: 3;
}

.path42 {
    /* d: path("M 356 300 C 355 390 355 380 425 385"); */
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    fill: none;
    /* stroke: url(#gradientStrokeReverse); */
    stroke-width: 3;
}


.top-right-img,
.top-left-img,
.bottom-right-img,
.bottom-left-img {
    opacity: 0;
    z-index: 1 !important;
    width: 20%;
}


.circles{
    opacity: 0;
}

/* animation flow */

.center-img2 {
    opacity: 0;
    animation: visible 2s ease forwards;
}

.circle-1, .outer-img1{
    animation: visible 2s 0.5s ease forwards;
}

.circle-2, .outer-img2{
    animation: visible 2s 2s ease forwards;
}

.circle-3, .outer-img3{
    animation: visible 2s 3.3s ease forwards;
}

.circle-4, .outer-img4{
    animation: visible 2s 4.6s ease forwards;
}


.path12{
    animation: draw 3s 1s normal forwards;
}

.path22{
    animation: draw 3s 2.3s normal forwards;
}

.path32{
    animation: draw 3s 3.6s normal forwards;
}

.path42{
    animation: draw 3s 4.9s normal forwards;
}





.tri1{
    opacity: 0;
    animation: visible .5s 2s ease forwards;
}

.tri2{
    opacity: 0;
    animation: visible .5s 3.3s ease forwards;
}

.tri3{
    opacity: 0;
    animation: visible .5s 4.6s ease forwards;
}

.tri4{
    opacity: 0;
    animation: visible .5s 6s ease forwards;
}


@media (max-width: 768px) {
    .circle-1, .outer-img1{
        animation: visible 2s 0.5s ease forwards;
    }

    .circle-2, .outer-img2{
        animation: visible 2s 1.8s ease forwards;
    }

    .circle-3, .outer-img3{
        animation: visible 2s 2.77s ease forwards;
    }

    .circle-4, .outer-img4{
        animation: visible 2s 3.6s ease forwards;
    }

    .path12{
        animation: draw 5s 1s normal forwards;
    }

    .path22{
        animation: draw 5s 2s normal forwards;
    }

    .path32{
        animation: draw 5s 3s normal forwards;
    }

    .path42{
        animation: draw 5s 4s normal forwards;
    }

    .tri1{
        opacity: 0;
        animation: visible .5s 1.8s ease forwards;
    }

    .tri2{
        opacity: 0;
        animation: visible .5s 2.95s ease forwards;
    }

    .tri3{
        opacity: 0;
        animation: visible .5s 3.75s ease forwards;
    }

    .tri4{
        opacity: 0;
        animation: visible .5s 4.84s ease forwards;
    }
}




/* 3rd */

.custom-padding{
    padding: 4rem 0;
    padding-left: 2.5rem;
    padding-bottom: 4rem;
}

.animate-box3{
    margin: auto;
}


.graph {
    position: relative;
}

.graph-outer-img1,
.graph-outer-img2,
.graph-outer-img3,
.graph-outer-img4 {
    position: absolute;
    /* width: unset !important; */
}

.graph-outer-img1 {
    bottom: 0;
    left: 25%;
}

.graph-outer-img2 {
    bottom: 3%;
    left: 57%;
}

.graph-outer-img3 {
    bottom: 15%;
    left: 70%;
}

.graph-outer-img4 {
    bottom: 27%;
    left: 84%;
}

/* animation flow */

.graph-border {
    opacity: 0;
    animation: visible 2s ease forwards;
}

.graph-img1,
.graph-img2,
.graph-img3,
.graph-img4,
.graph-img5,
.graph-img6,
.graph-img7{
    opacity: 0;
}

.graph-img1{
    animation: visible 1s 1s ease-in-out forwards;
}
.graph-img2{
    animation: visible 1s 1.5s ease-in-out forwards;
}
.graph-img3{
    animation: visible 1s 2s ease-in-out forwards;
}
.graph-img4{
    animation: visible 1s 2.5s ease-in-out forwards;
}
.graph-img5{
    animation: visible 1s 3s ease-in-out forwards;
}
.graph-img6{
    animation: visible 1s 3.5s ease-in-out forwards;
}
.graph-img7{
    animation: visible 1s 4s ease-in-out forwards;
}






.dot12{
    opacity: 0;
    animation: visible 1s 4.5s ease-in-out forwards;
}
.dot22{
    opacity: 0;
    animation: visible 1s 4.5s ease-in-out forwards;
}
.dot32{
    opacity: 0;
    animation: visible 1s 4.5s ease-in-out forwards;
}
.dot42{
    opacity: 0;
    animation: visible 1s 4.5s ease-in-out forwards;
}

.dot52{
    opacity: 0;
    animation: visible 1s 6.2s ease-in-out forwards;
}
.dot62{
    opacity: 0;
    animation: visible 1s 7.2s ease-in-out forwards;
}
.dot72{
    opacity: 0;
    animation: visible 1s 8.2s ease-in-out forwards;
}








.path13{
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    animation: draw 3s 5s ease-in-out forwards;
}
.path23{
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    animation: draw 2.5s 5s ease-in-out forwards;
}
.path33{
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    animation: draw 3.5s 5s ease-in-out forwards;
}
.path43{
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    animation: draw 3.2s 5s ease-in-out forwards;
}

.path53{
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    animation: draw 3s 6.5s ease-in-out forwards;
}
.path63{
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    animation: draw 2.5s 7.5s ease-in-out forwards;
}
.path73{
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    animation: draw 3.5s 8.5s ease-in-out forwards;
}





.graph-outer-img1{
    opacity: 0;
    animation: visible 1s 6s ease-in-out forwards;
}
.graph-outer-img2{
    opacity: 0;
    animation: visible 1s 7.1s ease-in-out forwards;
}
.graph-outer-img3{
    opacity: 0;
    animation: visible 1s 8.2s ease-in-out forwards;
}
.graph-outer-img4{
    opacity: 0;
    animation: visible 1s 9.5s ease-in-out forwards;
}

.me-2{
    margin-right: 0.5rem;
}




@media (min-width: 1600px){
    .custom-padding {
        padding: 9rem 0;
        padding-left: 8.5rem;
        padding-bottom: 6.5rem;
    }
}

@media (min-width: 1200px) and (max-width: 1300px) {
    .animate-box3 {
        margin-right: 120px !important;
    }
}


@media (min-width: 992px) and (max-width: 1250px) {
    .outer-img1,
    .outer-img2,
    .outer-img3,
    .outer-img4{
        width: 35% !important;
    }
}
@media (min-width: 992px) and (max-width: 1200px) {
    .graph {
        position: relative;
        transform: scale(0.8);
        left: -10%;
    }

    .graph-outer-img1 {
        bottom: 0;
        left: 21% !important;
    }

    .graph-outer-img2 {
        bottom: 3%;
        left: 47% !important;
    }

    .graph-outer-img3 {
        bottom: 15%;
        left: 57% !important;
    }

    .graph-outer-img4 {
        bottom: 27%;
        left: 67% !important;
    }

    .custom-padding{
        /* padding: 5rem 0; */
        padding-left: 2rem !important;
    }
}

@media (min-width: 768px) and (max-width: 991px) {
    .custom-padding {
        padding: 5rem 0rem;
        padding-left: 6.5rem !important;
    }
}

@media (min-width: 710px) and (max-width: 767px) {
    .custom-padding {
        padding: 5rem 0rem;
        padding-left: 3.5rem !important;
    }
}

@media (min-width: 681px) and (max-width: 760px) {
    .animate-box3 {
        margin: auto;
        margin-right: 130px;
    }
}


@media (min-width: 600px) and (max-width: 680px) {
    .graph {
        position: relative;
        transform: scale(0.8);
        left: -10%;
    }

    .graph-outer-img1 {
        bottom: 0;
        left: 21% !important;
    }

    .graph-outer-img2 {
        bottom: 3%;
        left: 47% !important;
    }

    .graph-outer-img3 {
        bottom: 15%;
        left: 57% !important;
    }

    .graph-outer-img4 {
        bottom: 27%;
        left: 67% !important;
    }

    .custom-padding{
        /* padding: 5rem 0; */
        padding-left: 2.5rem !important;
    }
}

@media (min-width: 600px) and (max-width: 615px) {
    .custom-padding {
        padding: 5rem 0rem;
        padding-left: 1.5rem !important;
    }
}


@media (min-width: 500px) and (max-width: 600px) {
    .graph {
        position: relative;
        transform: scale(0.7);
        left: -15%;
    }

    .graph-outer-img1 {
        bottom: 0;
        left: 19% !important;
    }

    .graph-outer-img2 {
        bottom: 3%;
        left: 43% !important;
    }

    .graph-outer-img3 {
        bottom: 15%;
        left: 54% !important;
    }

    .graph-outer-img4 {
        bottom: 27%;
        left: 64% !important;
    }

    /* .custom-padding{
        padding: 5rem 0;
        padding-left: 2rem !important;
    } */

    .animate-box3 {
        margin: auto;
        margin-left: 35px;
    }
}

@media (min-width: 500px) and (max-width: 600px) {
    .custom-padding {
        padding: 0rem 0rem !important;
        padding-left: 2rem !important;
        padding-bottom: 3.5rem !important;
    }

    .animate-box3{
        padding-bottom : 2rem !important;
    }


    .animate-box3 .graph-outer-img1{
        width: 20% !important;
    }
    .animate-box3 .graph-outer-img2{
        width: 22% !important;
    }
    .animate-box3 .graph-outer-img3{
        width: 30% !important;
    }
    .animate-box3 .graph-outer-img4{
        width: 32% !important;
    }
}

@media (min-width: 400px) and (max-width: 500px) {
    .graph {
        position: relative;
        transform: scale(0.5);
        left: -25%;
    }

    .graph-outer-img1 {
        bottom: 0;
        left: 18% !important;
    }

    .graph-outer-img2 {
        bottom: 4%;
        left: 41% !important;
    }

    .graph-outer-img3 {
        bottom: 15%;
        left: 50% !important;
    }

    .graph-outer-img4 {
        bottom: 27%;
        left: 59% !important;
    }
    .animate-box3 .graph-outer-img1{
        width: 20% !important;
    }
    .animate-box3 .graph-outer-img2{
        width: 22% !important;
    }
    .animate-box3 .graph-outer-img3{
        width: 30% !important;
    }
    .animate-box3 .graph-outer-img4{
        width: 32% !important;
    }

    .animate-box3 {
        padding-bottom: 0rem !important;
    }
    /* .custom-padding{
        padding: 5rem 0;
        padding-left: 2rem !important;
    } */


    .dot12{
        r: 2;
    }
    .dot22{
        r: 2;
    }
    .dot32{
        r: 3;
    }
    .dot42{
        r: 3;
    }
    .dot52{
        r: 4;
    }
    .dot62{
        r: 4;
    }
    .dot72{
        r: 5;
    }

    .animate-box3 {
        margin: auto;
        margin-left: 35px;
    }
}

@media (min-width: 450px) and (max-width:500px) {
    .animate-box3 .graph-outer-img1{
        width: 65px !important;
    }
    .animate-box3 .graph-outer-img2{
        width: 80px !important;
    }
    .animate-box3 .graph-outer-img3{
        width: 100px !important;
    }
    .animate-box3 .graph-outer-img4{
        width: 120px !important;
    }


    .graph-outer-img1 {
        bottom: 0;
        left: 21% !important;
    }

    .graph-outer-img2 {
        bottom: 4%;
        left: 42% !important;
    }

    .graph-outer-img3 {
        bottom: 15%;
        left: 50% !important;
    }

    .graph-outer-img4 {
        bottom: 27%;
        left: 58% !important;
    }

    .graph {
        left: -20% !important;
    }
    
    .custom-padding{
        padding-left: 1rem !important;
    }
}


@media (min-width: 351px) and (max-width:400px) {
    .animate-box3 {
        margin: auto;
        margin-left: 40px;
    }
}
@media (min-width: 300px) and (max-width:350px) {
    .animate-box3 {
        margin-left: 10px;
        height: 220px !important;
    }
}

@media (min-width: 300px) and (max-width:400px) {
    .graph {
        position: relative;
        transform: scale(0.4);
        left: -25%;
    }

    .graph-outer-img1 {
        bottom: 0;
        left: 22% !important;
        width: 23% !important;
    }

    .graph-outer-img2 {
        bottom: 5%;
        left: 46% !important;
        width: 26% !important;
    }

    .graph-outer-img3 {
        bottom: 15%;
        left: 54% !important;
        width: 32% !important;
    }

    .graph-outer-img4 {
        bottom: 27%;
        left: 62% !important;
        width: 30% !important;
    }

    .animate-box3 .graph-outer-img1{
        width: 23% !important;
    }
    .animate-box3 .graph-outer-img2{
        width: 28% !important;
    }
    .animate-box3 .graph-outer-img3{
        width: 32% !important;
    }
    .animate-box3 .graph-outer-img4{
        width: 30% !important;
    }

    .dot12{
        r: 2;
    }
    .dot22{
        r: 2;
    }
    .dot32{
        r: 3;
    }
    .dot42{
        r: 3;
    }
    .dot52{
        r: 4;
    }
    .dot62{
        r: 4;
    }
    .dot72{
        r: 5;
    }

    .animate-box3{
        padding-bottom : 0rem !important;
        padding-left: 0rem !important;
    }

    .custom-padding {
        /* padding-bottom: 1rem !important; */
        padding-left: 0.5rem !important;
    }
}


/* .graph-outer-img1,
.graph-outer-img2,
.graph-outer-img3,
.graph-outer-img4, */
.custom-width {
    width: unset !important;
}




@media (max-width: 991px) {
    .outer-animate-box{
        /* aspect-ratio: 100 / 70; */
    }

    .custom-padding {
        padding: 9rem 0;
        padding-left: 2.5rem;
        padding-bottom: 5.5rem;
    }
}

@media (max-width: 768px) {
    .animate-box img {
        /* max-width: 25%; */
    }
    .animate-box .center-img {
        /* max-width: 30% !important; */
    }

    .center{
        transform: scale(0.8);
    }

    .outer-img1,
    .outer-img4{
        top: -8% !important;
    }
    
    .outer-img2,
    .outer-img3{
        bottom: -8% !important;
    }

    .custom-padding {
        padding: 3rem 0;
        padding-bottom: 4.5rem;
    }
}

@media (max-width: 680px) {
    .custom-padding {
        padding: 1rem 0;
        padding-bottom: 3.5rem;
    }
}

@media (max-width: 576px) {
    .outer-animate-box{
        /* aspect-ratio: 100 / 90; */
    }
    .animate-box img {
        /* max-width: 25%; */
    }

    .animate-box .center-img {
        /* max-width: 35% !important; */
    }

    .center{
        transform: scale(0.6);
    }

    .custom-padding {
        padding: 0rem 0;
        /* padding-left: 2.5rem; */
        padding-bottom: 2.5rem;
    }
}



@media (max-width: 450px) {
    .custom-padding {
        padding: 0rem 0;
        padding-left: 1.5rem;
        padding-bottom: 3rem;
    }
}

@media (max-width: 425px) {
    .outer-animate-box{
        /* aspect-ratio: 100 / 100; */
    }

    .animate-box .center-img {
        /* max-width: 40% !important; */
    }
    
    .animate-box{
        padding: 3rem 1.5rem;
    }
    
    .center{
        transform: scale(0.47);
    }

    
}

@media (max-width: 425px) {
    .path12,
    .path22,
    .path32,
    .path42,
    {
        stroke-width: 3;
    }
}

</style>


<script>
    function updatePaths() {
        const getMidTopLeftCenter = (el) => {
            const rect = el.getBoundingClientRect();
            console.log(rect.top)
            return {
                x: rect.left + rect.width / 2.8,
                y: rect.top + rect.height / 12
            };
        };
        const getMidBottomLeftCenter = (el) => {
            const rect = el.getBoundingClientRect();
            console.log(rect.top)
            return {
                x: rect.left + rect.width / 2.1,
                y: rect.bottom - rect.height / 6
            };
        };
        const getMidTopRightCenter = (el) => {
            const rect = el.getBoundingClientRect();
            return {
                x: rect.right - rect.width / 2.5,
                y: rect.top + rect.height / 12
            };
        };
        const getMidBottomRightCenter = (el) => {
            const rect = el.getBoundingClientRect();
            return {
                x: rect.right - rect.width / 2.3,
                y: rect.bottom - rect.height / 3.8
            };
        };

        
        const getMidLeft = (el, position) => {
            const rect = el.getBoundingClientRect();
            if(position == 'top'){
                return {
                    x: rect.left + rect.width / 1.2,
                    y: rect.top + rect.height / 3
                };
            }
            else{
                return {
                    x: rect.left + rect.width / 1.2,
                    y: rect.bottom - rect.height / 3
                };
            }
        };

        const getMidRight = (el) => {
            const rect = el.getBoundingClientRect();
            return {
                x: rect.right - rect.width / 1.2,
                y: rect.top + rect.height / 3
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

        const fromTL = rel(getMidLeft(topLeft, 'top'));
        const fromTR = rel(getMidRight(topRight));
        const fromBL = rel(getMidLeft(bottomLeft, 'bottom'));
        // const fromBR = rel(getMidRight(bottomRight));
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

        // document.querySelector("#path4").setAttribute("d",
        //     `M ${centerBottomRightPt.x} ${centerBottomRightPt.y} 
        //  C ${centerBottomRightPt.x} ${fromBR.y}, 
        //    ${centerBottomRightPt.x} ${fromBR.y}, 
        //    ${fromBR.x} ${fromBR.y}`
        // );

        const dot1 = document.querySelector("#dot1");

        setTimeout(() => {
            dot1.setAttribute("cx", centerTopLeftPt.x);
            dot1.setAttribute("cy", centerTopLeftPt.y);
            dot1.setAttribute("r", 5);
            dot1.setAttribute("fill", "#f7b733");
        }, 1000);

        const dot2 = document.querySelector("#dot2");
        dot2.setAttribute("cx", centerBottomLeftPt.x);
        dot2.setAttribute("cy", centerBottomLeftPt.y);
        dot2.setAttribute("r", 5);
        dot2.setAttribute("fill", "#f7b733");

        const dot3 = document.querySelector("#dot3");
        dot3.setAttribute("cx", centerTopRightPt.x);
        dot3.setAttribute("cy", centerTopRightPt.y);
        dot3.setAttribute("r", 5);
        dot3.setAttribute("fill", "#f7b733");

        // const dot4 = document.querySelector("#dot4");
        // dot4.setAttribute("cx", centerBottomRightPt.x);
        // dot4.setAttribute("cy", centerBottomRightPt.y);
        // dot4.setAttribute("r", 4);
        // dot4.setAttribute("fill", "#f7b733");

    }


    function handleIntersection(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
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

    // updatePaths();
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



<script>
    const distance = (x, y) => {
        let dis = x - y;
        if (dis < 0) {
            dis *= -1;
        }
        return (dis);
    };

    function makeLines1(fromCircle1Start, fromCircle1End, id) {
        document.querySelector(`#path${id}`).setAttribute("d",
            `M ${fromCircle1Start.x} ${fromCircle1Start.y} 
            Z Q ${fromCircle1Start.x + distance(fromCircle1End.y, fromCircle1Start.y) / 2.8} ${fromCircle1Start.y + distance(fromCircle1End.y, fromCircle1Start.y) / 2} ${fromCircle1End.x + 6.5} ${fromCircle1End.y - 6.5}
            `
        );

        document.querySelector(`#tri${id}`).setAttribute("d",
            `M ${fromCircle1End.x} ${fromCircle1End.y - 15} ${fromCircle1End.x - 1} ${fromCircle1End.y} ${fromCircle1End.x + 14} ${fromCircle1End.y-1}`
        );
    }

    function makeLines2(fromCircle1Start, fromCircle1End, id) {
        document.querySelector(`#path${id}`).setAttribute("d",
            `M ${fromCircle1Start.x} ${fromCircle1Start.y} 
            Z Q ${fromCircle1End.x + distance(fromCircle1End.x, fromCircle1Start.x) / 2} ${fromCircle1Start.y + distance(fromCircle1End.x, fromCircle1Start.x) / 2.8} ${fromCircle1End.x + 6.5} ${fromCircle1End.y + 6.5}
            `
        );

        document.querySelector(`#tri${id}`).setAttribute("d",
            `M ${fromCircle1End.x + 15} ${fromCircle1End.y - 1} ${fromCircle1End.x} ${fromCircle1End.y - 1} ${fromCircle1End.x + 1} ${fromCircle1End.y + 14}`
        );
    }



    function makeLines3(fromCircle1Start, fromCircle1End, id) {
        document.querySelector(`#path${id}`).setAttribute("d",
            `M ${fromCircle1Start.x} ${fromCircle1Start.y} 
            Z Q ${fromCircle1Start.x - distance(fromCircle1End.y, fromCircle1Start.y) / 2.8} ${fromCircle1Start.y - distance(fromCircle1End.y, fromCircle1Start.y) / 2} ${fromCircle1End.x - 6.5} ${fromCircle1End.y + 6.5}
            `
        );

        document.querySelector(`#tri${id}`).setAttribute("d",
            `M ${fromCircle1End.x} ${fromCircle1End.y + 15} ${fromCircle1End.x + 1} ${fromCircle1End.y} ${fromCircle1End.x - 14} ${fromCircle1End.y+1}`
        );
    }


    function makeLines4(fromCircle1Start, fromCircle1End, id) {
        document.querySelector(`#path${id}`).setAttribute("d",
            `M ${fromCircle1Start.x} ${fromCircle1Start.y} 
            Z Q ${fromCircle1Start.x + distance(fromCircle1End.x, fromCircle1Start.x) / 2} ${fromCircle1End.y - distance(fromCircle1End.x, fromCircle1Start.x) / 2.8} ${fromCircle1End.x - 6.5} ${fromCircle1End.y - 6.5}
            `
        );

        document.querySelector(`#tri${id}`).setAttribute("d",
            `M ${fromCircle1End.x - 15} ${fromCircle1End.y + 1} ${fromCircle1End.x} ${fromCircle1End.y + 1} ${fromCircle1End.x - 1} ${fromCircle1End.y - 14}`
        );
    }

    function updatePaths2() {
        const getCircle1Start = (el) => {
            const rect = el.getBoundingClientRect();

            return {
                x: rect.right,
                y: rect.top + rect.height
            };
        };
        const getCircle1End = (el) => {
            const rect = el.getBoundingClientRect();

            console.log(rect.right, rect.bottom)

            return {
                x: rect.right,
                y: rect.bottom - rect.height
            };
        };




        const getCircle2Start = (el) => {
            const rect = el.getBoundingClientRect();

            return {
                x: rect.right - rect.width,
                y: rect.bottom
            };
        };
        const getCircle2End = (el) => {
            const rect = el.getBoundingClientRect();

            return {
                x: rect.left + rect.width,
                y: rect.bottom
            };
        };



        const getCircle3Start = (el) => {
            const rect = el.getBoundingClientRect();

            return {
                x: rect.left,
                y: rect.bottom - rect.height
            };
        };
        const getCircle3End = (el) => {
            const rect = el.getBoundingClientRect();

            return {
                x: rect.left,
                y: rect.top + rect.height
            };
        };



        const getCircle4Start = (el) => {
            const rect = el.getBoundingClientRect();

            return {
                x: rect.left + rect.width,
                y: rect.top
            };
        };
        const getCircle4End = (el) => {
            const rect = el.getBoundingClientRect();

            return {
                x: rect.right - rect.width,
                y: rect.top
            };
        };



        const svg = document.querySelector("#svg-lines2");
        const svgRect = svg.getBoundingClientRect();

        const circle1 = document.querySelector(".circle-1");
        const circle2 = document.querySelector(".circle-2");
        const circle3 = document.querySelector(".circle-3");
        const circle4 = document.querySelector(".circle-4");

        const rel = (pt) => ({
            x: pt.x - svgRect.left,
            y: pt.y - svgRect.top
        });

        const fromCircle1Start = rel(getCircle1Start(circle1));
        const fromCircle1End = rel(getCircle1End(circle2));

        const fromCircle2Start = rel(getCircle2Start(circle2));
        const fromCircle2End = rel(getCircle2End(circle3));

        const fromCircle3Start = rel(getCircle3Start(circle3));
        const fromCircle3End = rel(getCircle3End(circle4));

        const fromCircle4Start = rel(getCircle4Start(circle4));
        const fromCircle4End = rel(getCircle4End(circle1));


        const ctrlOffset = 40;


        makeLines1(fromCircle1Start, fromCircle1End, 12);
        makeLines2(fromCircle2Start, fromCircle2End, 22);
        makeLines3(fromCircle3Start, fromCircle3End, 32);
        makeLines4(fromCircle4Start, fromCircle4End, 42);

    }


    function handleIntersection(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
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

        window.addEventListener("resize", updatePaths2);
        window.addEventListener("load", () => setTimeout(updatePaths2, 100)); // allow layout to stabilize
        updatePaths2()
        setInterval(() => {
            updatePaths2()
        }, 1000);
    });
    

</script>



<script>

    console.log("working 3")

    const distance2 = (x, y) => {
        let dis = x - y;
        if (dis < 0) {
            dis *= -1;
        }
        return (dis);
    };

    function updatePaths3() {

        const getGraphImg1 = (el) => {
            const rect = el.getBoundingClientRect();

            return {
                x: rect.left + rect.width / 2,
                y: rect.top + rect.height / 1.4,
            };
        };
        const getGraphImg2 = (el) => {
            const rect = el.getBoundingClientRect();

            return {
                x: rect.left + rect.width / 2,
                y: rect.top + rect.height / 1.6,
            };
        };
        const getGraphImg3 = (el) => {
            const rect = el.getBoundingClientRect();

            return {
                x: rect.left + rect.width / 2,
                y: rect.top + rect.height / 1.7,
            };
        };
        const getGraphImg4 = (el) => {
            const rect = el.getBoundingClientRect();

            return {
                x: rect.left + rect.width / 2,
                y: rect.top + rect.height / 1.9,
            };
        };
        const getGraphImg5 = (el) => {
            const rect = el.getBoundingClientRect();

            return {
                x: rect.left + rect.width / 2,
                y: rect.top + rect.height / 2,
            };
        };
        const getGraphImg6 = (el) => {
            const rect = el.getBoundingClientRect();

            return {
                x: rect.left + rect.width / 2,
                y: rect.top + rect.height / 2.15,
            };
        };
        const getGraphImg7 = (el) => {
            const rect = el.getBoundingClientRect();

            return {
                x: rect.left + rect.width / 5,
                y: rect.top + rect.height / 2.3,
            };
        };

        const getGraphOutImg1 = (el) => {
            const rect = el.getBoundingClientRect();

            return {
                x: rect.left,
                y: rect.bottom - rect.height / 2
            };
        };

        const svg = document.querySelector("#svg-lines3");
        const svgRect = svg.getBoundingClientRect();

        const graphImg1 = document.querySelector(".graph-img1");
        const graphImg2 = document.querySelector(".graph-img2");
        const graphImg3 = document.querySelector(".graph-img3");
        const graphImg4 = document.querySelector(".graph-img4");
        const graphImg5 = document.querySelector(".graph-img5");
        const graphImg6 = document.querySelector(".graph-img6");
        const graphImg7 = document.querySelector(".graph-img7");

        const graphOutImg1 = document.querySelector(".graph-outer-img1");
        const graphOutImg2 = document.querySelector(".graph-outer-img2");
        const graphOutImg3 = document.querySelector(".graph-outer-img3");
        const graphOutImg4 = document.querySelector(".graph-outer-img4");

        const rel = (pt) => ({
            x: pt.x - svgRect.left,
            y: pt.y - svgRect.top
        });

        const fromGraphImg1 = rel(getGraphImg1(graphImg1));
        const fromGraphImg2 = rel(getGraphImg2(graphImg2));
        const fromGraphImg3 = rel(getGraphImg3(graphImg3));
        const fromGraphImg4 = rel(getGraphImg4(graphImg4));
        const fromGraphImg5 = rel(getGraphImg5(graphImg5));
        const fromGraphImg6 = rel(getGraphImg6(graphImg6));
        const fromGraphImg7 = rel(getGraphImg7(graphImg7));

        const fromGraphOutImg1 = rel(getGraphOutImg1(graphOutImg1));
        const fromGraphOutImg2 = rel(getGraphOutImg1(graphOutImg2));
        const fromGraphOutImg3 = rel(getGraphOutImg1(graphOutImg3));
        const fromGraphOutImg4 = rel(getGraphOutImg1(graphOutImg4));


        const ctrlOffset = 40;


        document.querySelector(`#path13`).setAttribute("d",
            `M ${fromGraphImg1.x} ${fromGraphImg1.y} 
            V ${fromGraphImg1.y + distance2(fromGraphImg1.y, fromGraphOutImg1.y) / 2.5} 
            Q ${fromGraphImg1.x} ${fromGraphImg1.y + distance2(fromGraphImg1.y, fromGraphOutImg1.y) / 1.5} ${fromGraphImg1.x + distance2(fromGraphImg1.x, fromGraphImg4.x) / 10} ${fromGraphImg1.y + distance2(fromGraphImg1.y, fromGraphOutImg1.y) / 1.5}
            H ${fromGraphImg1.x + distance2(fromGraphImg1.x, fromGraphImg4.x) / 2.1}
            V ${fromGraphOutImg1.y - 10}
            Q ${fromGraphImg1.x + distance2(fromGraphImg1.x, fromGraphImg4.x) / 2.1} ${fromGraphOutImg1.y} ${fromGraphOutImg1.x} ${fromGraphOutImg1.y}
            `
        );

        document.querySelector(`#path23`).setAttribute("d",
            `M ${fromGraphImg4.x} ${fromGraphImg4.y} 
            V ${fromGraphImg1.y + distance2(fromGraphImg1.y, fromGraphOutImg1.y) / 2.5} 
            Q ${fromGraphImg4.x} ${fromGraphImg1.y + distance2(fromGraphImg1.y, fromGraphOutImg1.y) / 1.5} ${fromGraphImg4.x - distance2(fromGraphImg1.x, fromGraphImg4.x) / 10} ${fromGraphImg1.y + distance2(fromGraphImg1.y, fromGraphOutImg1.y) / 1.5}
            H ${fromGraphImg1.x + distance2(fromGraphImg1.x, fromGraphImg4.x) / 2.1}
            `
        );

        document.querySelector(`#path33`).setAttribute("d",
            `M ${fromGraphImg2.x} ${fromGraphImg2.y} 
            V ${fromGraphImg1.y + distance2(fromGraphImg1.y, fromGraphOutImg1.y) / 1.5} 
            `
        );

        document.querySelector(`#path43`).setAttribute("d",
            `M ${fromGraphImg3.x} ${fromGraphImg3.y} 
            V ${fromGraphImg1.y + distance2(fromGraphImg1.y, fromGraphOutImg1.y) / 1.5}
            `
        );

        document.querySelector(`#path53`).setAttribute("d",
            `M ${fromGraphImg5.x} ${fromGraphImg5.y} 
            V ${fromGraphOutImg2.y - distance2(fromGraphImg5.x, fromGraphOutImg2.x)}
            Q ${fromGraphImg5.x} ${fromGraphOutImg2.y} ${fromGraphOutImg2.x} ${fromGraphOutImg2.y}
            `
        );

        document.querySelector(`#path63`).setAttribute("d",
            `M ${fromGraphImg6.x} ${fromGraphImg6.y} 
            V ${fromGraphOutImg3.y - distance2(fromGraphImg6.x, fromGraphOutImg3.x)}
            Q ${fromGraphImg6.x} ${fromGraphOutImg3.y} ${fromGraphOutImg3.x} ${fromGraphOutImg3.y}
            `
        );

        document.querySelector(`#path73`).setAttribute("d",
            `M ${fromGraphImg7.x} ${fromGraphImg7.y} 
            V ${fromGraphOutImg4.y - distance2(fromGraphImg7.x, fromGraphOutImg4.x)}
            Q ${fromGraphImg7.x} ${fromGraphOutImg4.y} ${fromGraphOutImg4.x} ${fromGraphOutImg4.y}
            `
        );



        const dot12 = document.querySelector("#dot12");
        const dot22 = document.querySelector("#dot22");
        const dot32 = document.querySelector("#dot32");
        const dot42 = document.querySelector("#dot42");
        const dot52 = document.querySelector("#dot52");
        const dot62 = document.querySelector("#dot62");
        const dot72 = document.querySelector("#dot72");


        dot12.setAttribute("cx", fromGraphImg1.x);
        dot12.setAttribute("cy", fromGraphImg1.y);
        dot12.setAttribute("r", 4);
        dot12.setAttribute("fill", "#ffdc95");

        dot22.setAttribute("cx", fromGraphImg2.x);
        dot22.setAttribute("cy", fromGraphImg2.y);
        dot22.setAttribute("r", 4);
        dot22.setAttribute("fill", "#ffdc95");

        dot32.setAttribute("cx", fromGraphImg3.x);
        dot32.setAttribute("cy", fromGraphImg3.y);
        dot32.setAttribute("r", 5);
        dot32.setAttribute("fill", "#ffdc95");

        dot42.setAttribute("cx", fromGraphImg4.x);
        dot42.setAttribute("cy", fromGraphImg4.y);
        dot42.setAttribute("r", 6);
        dot42.setAttribute("fill", "#ffdc95");

        dot52.setAttribute("cx", fromGraphImg5.x);
        dot52.setAttribute("cy", fromGraphImg5.y);
        dot52.setAttribute("r", 8);
        dot52.setAttribute("fill", "#f7b733");

        dot62.setAttribute("cx", fromGraphImg6.x);
        dot62.setAttribute("cy", fromGraphImg6.y);
        dot62.setAttribute("r", 8);
        dot62.setAttribute("fill", "#f7b733");

        dot72.setAttribute("cx", fromGraphImg7.x);
        dot72.setAttribute("cy", fromGraphImg7.y);
        dot72.setAttribute("r", 8);
        dot72.setAttribute("fill", "#f7b733");


    }


    function handleIntersection(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
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

        window.addEventListener("resize", updatePaths3);
        window.addEventListener("load", () => setTimeout(updatePaths3, 100)); // allow layout to stabilize
        updatePaths3();
        setInterval(() => {
            updatePaths3();
        }, 1000);
    });

</script>