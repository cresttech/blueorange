<?php
/*
Template Name: Events Inner Page
*/
get_header();
?>
<div class="page-content single_event_page">
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
                    <a href="<?php the_field('button_link_1'); ?>" class="button orange_btn" target="_blank"><?php the_field('button_text_1'); ?> <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="banner_logos_event" data-aos="fade-up" data-aos-duration="2500">
			<?php if( have_rows('logos') ):
			while ( have_rows('logos') ) : the_row();	?>
            <div class="item">
                <img src="<?php the_sub_field('logo'); ?>" alt="#">
            </div>
			<?php endwhile; endif;?>
        </div>
    </div>
</section>
<section class="tailored_innovation wi_full py_3">
    <div class="container-xxl">
        <div class="row align-items-center" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-6 title_col light_grey">
                <div class="subtitle text-uppercase"><?php the_field('sub_heading_2'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_2'); ?></h2>
                 <?php the_field('content_2'); ?>
            </div>
            <div class="col-lg-6 image_col mt-4 mt-lg-0">
                 <div class="video_wrap">
                    <?php if(get_field('type') == 'Video') { ?>
					<video width="100%" height="350" controls>
					<source src="<?php the_field('video'); ?>" type="video/mp4">
					<source src="<?php the_field('about_video'); ?>" type="video/ogg">
					Your browser does not support the video tag.
					</video>
					<?php } else { ?>
					<img src="<?php the_field('image_1'); ?>" class="w-100">
					<?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tailored_strategy wi_full">
    <div class="container-xxl">
        <div class="row" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-6 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_3'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_3'); ?></h2>
            </div>
            <div class="col-lg-6 ml-auto content_col light_grey">
                <?php the_field('content_3'); ?>
            </div>
        </div>
    </div>
</section>
<section class="data_services wi_full py_3">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-12 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_4'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_4'); ?></h2>
            </div>
        </div>
        <div class="data_service_list row mt-4" data-aos="fade-up" data-aos-duration="2300">
			<?php if( have_rows('content_4') ):
			while ( have_rows('content_4') ) : the_row();	?>
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
<section class="event_detail wi_full">
    <div class="container-xxl">
        <div class="ed_List">
            <div class="sec_title">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_5'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_5'); ?></h2>
            </div>
            <div class="ed_row row">
				<?php if( have_rows('events') ):
				while ( have_rows('events') ) : the_row();
				$count = count(get_field('events'));
				if($count == 1) {
				?>
				 <div class="col-md-6 ed_item">
                    <div class="item--inner">
                        <img src="<?php the_sub_field('image'); ?>" class="w-100">
                    </div>
                </div>
				<div class="col-md-6 ed_item">
                    <div class="item--inner">
                        <div class="item--text">
                            <h4 class="text_color"><?php the_sub_field('title'); ?></h4>
							<?php if( have_rows('text') ):
							while ( have_rows('text') ) : the_row();	?>
                            <div class="event_dtl_list">
                                <span><?php the_sub_field('heading'); ?></span>
                                <strong><?php the_sub_field('content'); ?></strong>
                            </div>
                            <?php endwhile; endif;
							if(get_sub_field('content_1') != '') {?>
							<div class="mt-3">
								<?php the_sub_field('content_1'); ?>
							</div>
							<?php } ?>
                        </div>
                    </div>
                </div>
				<?php } else { ?>
                <div class="col-md-6 ed_item">
                    <div class="item--inner">
                        <img src="<?php the_sub_field('image'); ?>" class="w-100">
                        <div class="item--text">
                            <h4 class="text_color"><?php the_sub_field('title'); ?></h4>
							<?php if( have_rows('text') ):
							while ( have_rows('text') ) : the_row();	?>
                            <div class="event_dtl_list">
                                <span><?php the_sub_field('heading'); ?></span>
                                <strong><?php the_sub_field('content'); ?></strong>
                            </div>
                            <?php endwhile; endif;
							if(get_sub_field('content_1') != '') {?>
							<div class="mt-3">
								<?php the_sub_field('content_1'); ?>
							</div>
							<?php } ?>
                        </div>
                    </div>
                </div>
				<?php } endwhile; endif;?>
            </div>
        </div>
		<?php if(get_field('form_shortcode') != '') { ?>
        <div class="event_form mt_3">
            <div class="sec_title">
				<div class="subtitle text-uppercase light_blue"><?php the_field('sub_heading_6'); ?></div>
                <h2 class="text-uppercase text-white"><?php the_field('heading_6'); ?></h2>
            </div>
            <?php echo do_shortcode(get_field('form_shortcode')); ?>
        </div>
		<?php } else { ?>
		<?php echo get_field('button_script'); ?>
		<?php } ?>
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
                    <a href="<?php the_field('button_link_2'); ?>" class="button border_btn"><?php the_field('button_text_2'); ?></a>
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
                            <div class="servie_type text-uppercase"><?php if ( ! empty( $taxonomies ) && ! is_wp_error( $taxonomies ) ) {  $term_names = wp_list_pluck( $taxonomies, 'name' ); echo implode( ', ', $term_names ); echo ' • '; } if ( ! empty( $technology ) && ! is_wp_error( $technology ) ) {  $technology_names = wp_list_pluck( $technology, 'name' ); echo implode( ', ', $technology_names );  echo ' • '; } if ( ! empty( $industries ) && ! is_wp_error( $industries ) ) {  $industries_names = wp_list_pluck( $industries, 'name' ); echo implode( ', ', $industries_names ); } ?></div>
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