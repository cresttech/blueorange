<?php
/*
Template Name: Gartner Data Page
*/
get_header();
$url = get_the_post_thumbnail_url( $post_id, 'full' );
?>
<div class="page-content">
<section class="banner_sec inner_banner fintech__banner new_banner wi_full">
    <img src="<?php the_field('banner_image'); ?>" class="desktop_banner w-100">
    <img src="<?php the_field('image_mobile'); ?>" class="mobile_banner w-100">
    <div class="banner__wrap">
        <div class="container-xxl">
            <div class="banner_title text-center mb-3 no_indent">
                <h1><?php the_field('heading'); ?></h1>
            </div>
			<?php if(get_field('button_text') != '') { ?>
            <div class="banner_content text-center">
                <div class="btn_block justify-content-center mt_2">
                    <a href="<?php the_field('button_link'); ?>" class="button orange_btn" target="_blank"><?php the_field('button_text'); ?></a>
                </div>
            </div>
			<?php } ?>
        </div>
    </div>
</section>
<section class="growth_Sec wi_full py_3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="contect">
					<?php the_content(); ?>
                </div>
            </div>
			<div class="col-12 col-lg-6">
                <div class="video_wrap">
					<img src="<?php echo $url; ?>" class="w-100">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="growth_Sec wi_full py_3 pt-0">
    <div class="container-xxl">
        <div class="sec_title text-center max_width">
            <h2 class="mb-3"><?php the_field('heading_1'); ?></h2>
        </div>
        <div class="row miss_vis_row event_abt">
			<?php if( have_rows('content_1') ):
			while ( have_rows('content_1') ) : the_row();	?>
            <div class="col-12 col-lg-6 mis_vis_item">
                <div class="content_box">
                    <h3><?php the_sub_field('title'); ?></h3>
                    <?php the_sub_field('text'); ?>
                </div>
            </div>
			<?php endwhile; endif;?>
        </div>
    </div>
</section>
<section class="why_blueorange wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title text-center max_width mb-3">
            <h2><?php the_field('heading_6'); ?></h2>
        </div>
        <div class="row wb_list">
            <?php if( have_rows('content_7') ):
            while ( have_rows('content_7') ) : the_row();   ?>
            <div class="col-12 col-md-6 wb_item">
                <div class="item_inner">
                    <h3><?php the_sub_field('title'); ?></h3>
                    <p><?php the_sub_field('text'); ?></p>
                </div>
            </div>
            <?php endwhile; endif;?>
        </div>
    </div>
</section>
<section class="partner_sec wi_full py_3">
    <div class="container-xxl">
		<div class="slider_wrapper">
			<div class="partnerr_carousel owl-carousel">
				<?php if( have_rows('logos_i') ):
				while ( have_rows('logos_i') ) : the_row();	?>
				<div class="item">
					<img src="<?php the_sub_field('image'); ?>" class="cl_icon">
				</div>
				<?php endwhile; endif;?>
			</div>
		</div>
    </div>
</section>
<section class="gama_event wi_full py_3 pt-0">
    <div class="container-xxl">
        <div class="sec_title mb-0 mb-md-3">
            <h2><?php the_field('heading_8'); ?></h2>
        </div>
        <div class="row gama_evnt_list">
			<?php if( have_rows('events') ):
			while ( have_rows('events') ) : the_row();	
			$count = count(get_field('events'));
			if($count == 1) {
			?>
			 <div class="col-md-6 gevnt_item">
                <div class="gevnt_inner">
                    <div class="genvnt_text mt-3">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <?php the_sub_field('text'); ?>
                    </div>
                </div>
            </div>
			<div class="col-md-6 gevnt_item">
                <div class="gevnt_inner">
                    <img src="<?php the_sub_field('image'); ?>" alt="#" class="w-100" />
                </div>
            </div>
			<?php } else {
			?>
            <div class="col-md-6 gevnt_item">
                <div class="gevnt_inner">
                    <img src="<?php the_sub_field('image'); ?>" alt="#" class="w-100" />
                    <div class="genvnt_text mt-3">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <?php the_sub_field('text'); ?>
                    </div>
                </div>
            </div>
			<?php } endwhile; endif;?>
        </div>
        <div class="form_wrapper mt-5">
            <?php echo do_shortcode('[contact-form-7 id="631e8ca" title="Gartner Data Form"]'); ?>
        </div>
    </div>
</section>
<section class="casestudy_sec wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title mb-3">
            <h2><?php the_field('heading_7'); ?></h2>
        </div>
        <div class="blog_wrapper row">
            <?php
            $postidss = get_field('case_study');
            //$postids = array(999, 1034, 1035 );

            $args = array(
            'post_type' => 'case-studies' , 
            "order" => "DESC", 
            'posts_per_page' => '3',
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
                    //$featured_img = get_template_directory_uri() . '/assets/images/featured_default.svg';
                    $featured_img = get_field('case_studies_default_image', 'option');
                }
            ?>

            <?php get_template_part( 'template-parts/content/content-case-studies-block' ); ?>

            <?php endwhile; endif;  wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<section class="event_action wi_full py_3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="sec_content pr-lg-5">
                    <h2><?php the_field('heading_9'); ?></h2>
                    <?php the_field('content_8'); ?>
                    <div class="btn_block mt-2">
                        <a href="<?php the_field('button_link_1'); ?>" class="button blue_btn" target="_blank"><?php the_field('button_text_1'); ?> <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-arrow-white.svg"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php the_field('image'); ?>" class="w-100 mt-4 mt-lg-0" alt="#" />
            </div>
        </div>
    </div>
</section>
</div>
<?php get_footer(); ?>