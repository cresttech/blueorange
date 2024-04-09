<?php
/*
Template Name: Home Page
*/
get_header();
?>
<div class="page-content">
<section class="banner_sec main_banner wi_full">
    <div class="container-xxl">
        <div class="banner_title text-center mb_3">
            <h1><?php the_field('heading_1'); ?></h1>
        </div>
        <div class="row">
            <div class="col-12 col-md-9 col-lg-3 col_text">
                <?php the_field('content_1'); ?>
                <div class="btn_block">
                    <a href="<?php the_field('button_link'); ?>" class="button blue_btn"><?php the_field('button_text'); ?> <img src="<?php bloginfo('template_url') ?>/assets/images/icon-arrow-white.svg"></a>
                </div>
            </div>
            <div class="col-12 col-lg-6 col_video">
                <div class="banner_video">
                    <img src="<?php the_field('video_thumb'); ?>">
                    <button class="video_btn" data-toggle="modal" data-target="#videoPopup">
                        <img src="<?php bloginfo('template_url') ?>/assets/images/icon-play-button.svg">
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col_image">
                <div class="banner_logos">
					<?php if( have_rows('certificates', 'options') ):
					while ( have_rows('certificates', 'options') ) : the_row();	?>
						<img src="<?php the_sub_field('image', 'options'); ?>" alt="#">
					<?php endwhile; endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="technology_sec wi_full py_3">
    <div class="container-xxl">
        <div class="tech_active_bg position-relative">
            <div class="tech_carousel owl-carousel">
				<?php if( have_rows('technologies') ):
				while ( have_rows('technologies') ) : the_row();	?>
					<div class="item"><img src="<?php the_sub_field('image'); ?>" alt="#"></div>
				<?php endwhile; endif;?>
            </div>
        </div>
        <div class="sec_subtitle"><?php the_field('heading_2'); ?></div>
    </div>
</section>
<section class="service_sec wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title"><h2><?php the_field('heading_3'); ?></h2></div>
        <div class="service_wrapper">
			<?php
			$args = array( 'post_type' => 'services' , 'posts_per_page' => -1 , "order" => "DESC",);
			$query = new WP_Query( $args ); 
			if ( $query->have_posts() ) :
			while ( $query->have_posts() ) : 
			$query->the_post();
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
			?>
            <div class="service_item">
                <a href="<?php the_permalink(); ?>" class="item_inner">
                	<div class="item_title">
	                    <span class="item_icon">
	                        <img src="<?php the_field('icon'); ?>" alt="#" class="bfr_hvr">
	                        <img src="<?php the_field('icon_blue'); ?>" alt="#" class="aftr_hvr">
	                    </span>
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <div class="item_text text-right">
                        <?php the_content(); ?>
                        <div class="more_btn">
                            <span>More info</span>
                            <img src="<?php bloginfo('template_url') ?>/assets/images/icon-arrow-blue.svg">
                        </div>
                    </div>
                </a>
            </div>
			<?php endwhile; endif;  wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<section class="client_sec wi_full py_3 position-relative">
    <div class="container-xxl">
    	<div class="sec_title text-center">
    		<h2><?php the_field('heading_4'); ?></h2>
    	</div>
        <div class="client_wrapper row mt_2">
			<?php if( have_rows('clients') ):
			while ( have_rows('clients') ) : the_row();	?>
			<div class="item"><img src="<?php the_sub_field('image'); ?>" alt="#"></div>
			<?php endwhile; endif;?>
        </div>
        <div class="sec_subtitle"><?php the_field('heading_4'); ?></div>
    </div>
</section>
<section class="casestudy_sec wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title btn_title">
        	<h2><?php the_field('heading_5'); ?></h2>
        	<a href="" class="button orange_btn v_dsktop">Learn More</a>
        </div>
        <div class="casestudy_wrapper">
			<?php
			$args = array( 'post_type' => 'case-studies' , "order" => "DESC", 'posts_per_page' => '3',);
			$query = new WP_Query( $args ); 
			if ( $query->have_posts() ) :
			while ( $query->have_posts() ) : 
			$query->the_post();
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
			?>
            <div class="item case_item">
                <a href="<?php the_permalink(); ?>" class="item_inner">
                    <div class="item_icon">
                        <img src="<?php echo $featured_img_url; ?>" alt="#">
                    </div>
                    <div class="item_text">
                        <h3><?php the_title(); ?></h3>
                        <?php
                              $excerpt       = get_the_excerpt();
                              $excerpt       = substr( $excerpt, 0, 100 );
                              $short_excerpt = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
                              if ( ! empty( $short_excerpt ) ) { ?>
                                    <p><?php echo esc_html( $short_excerpt ); ?>&hellip;</p>
                           <?php } ?>
                        <div class="more_btn circle_morebtn">
                            <img src="<?php bloginfo('template_url') ?>/assets/images/icon-arrow-blue.svg">
                        </div>
                    </div>
                </a>
            </div>
			<?php endwhile; endif;  wp_reset_postdata(); ?>
        </div>
        <div class="btn_block v_mobile">
        	<a href="" class="button orange_btn">Learn More</a>
        </div>
    </div>
</section>
<section class="industry_sec wi_full">
    <div class="container-xxl">
        <div class="sec_title"><h2><?php the_field('heading_6'); ?></h2></div>
        <div class="accordion_wrapper">
            <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
				<?php if( have_rows('industries') ):
				$count = 1;
				while ( have_rows('industries') ) : the_row();	?>
                <div class="card">
                    <div class="card-header p-0" role="tab" id="accordion<?php echo $count; ?>">
                        <h3 class="collapsed" data-toggle="collapse" data-target="#accordion__<?php echo $count; ?>" role="button" aria-controls="accordion__<?php echo $count; ?>"><img src="<?php the_sub_field('icon'); ?>"><?php the_sub_field('title'); ?></h3>
                    </div>
                    <div id="accordion__<?php echo $count; ?>" class="collapse" role="tabpanel" aria-labelledby="accordion<?php echo $count; ?>" data-parent="#accordion">
                        <div class="card-body">
                            <?php the_sub_field('text'); ?>
                            <a href="<?php the_sub_field('link'); ?>" class="ac_more">More info<img src="<?php bloginfo('template_url') ?>/assets/images/icon-arrow-orange.svg"></a>
                        </div>
                    </div>
                </div>
				<?php $count++; endwhile; endif;?>
            </div>
        </div>
        <div class="btn_block v_mobile">
        	<a href="" class="button orange_btn">Support</a>
        </div>
    </div>
</section>
<section class="insight_sec wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title"><h2>Latest insights</h2></div>
        <div class="insight_wrapper">
			<?php
			$args = array( 'post_type' => 'insights' , "order" => "DESC", 'posts_per_page' => '-1',);
			$query = new WP_Query( $args ); 
			if ( $query->have_posts() ) :
			$count = 1;
			while ( $query->have_posts() ) : 
			$query->the_post();
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
			$postid = get_the_ID();
			$terms = get_the_terms( $post->ID , 'insights-categories' );
			?>
            <div class="item ins_item">
                <a href="<?php the_permalink(); ?>" class="item_inner">
                    <div class="item_icon">
                        <img src="<?php echo $featured_img_url; ?>" alt="#">
                    </div>
                    <div class="item_text">
                        <div class="insght_tags">
							<?php foreach($terms as $cd){
								echo '<span>' .$cd->name . '</span>';
							} ?>
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <div class="more_btn">
                            <span>Read More</span>
                            <img src="<?php bloginfo('template_url') ?>/assets/images/icon-arrow-blue.svg">
                        </div>
                    </div>
                </a>
            </div>
			<?php $count++; endwhile; endif;  wp_reset_postdata(); ?>
        </div>
        <div class="btn_block v_mobile">
        	<a href="" class="button orange_btn">Learn More</a>
        </div>
    </div>
</section>
</div>
<div class="modal fade videopopup" id="videoPopup">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/close-icon.svg" alt="#">
                </button>
                <div class="video_box">
                    <?php the_field('video'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>