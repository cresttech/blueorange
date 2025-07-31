<?php
/*
Template Name: Topgolf Meetup Page
*/
get_header();
?>
<div class="page-content">
<section class="banner_sec inner_banner fintech__banner new_banner wi_full">
    <img src="<?php the_field('banner_image'); ?>" class="desktop_banner w-100">
    <img src="<?php the_field('image_mobile'); ?>" class="mobile_banner w-100">
    <div class="banner__wrap">
        <div class="container-xxl">
            <div class="banner_title text-center mb-3 no_indent">
                <h1><?php the_field('heading'); ?></h1>
				<?php the_content(); ?>
            </div>
            <div class="banner_content text-center d-none">
                <div class="btn_block justify-content-center mt_2">
                    <a href="<?php the_field('button_link'); ?>" class="button orange_btn" target="_blank"><?php the_field('button_text'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="growth_Sec wi_full py_3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="contect">
					<h2 class="mb-3"><?php the_field('heading_1'); ?></h2>
					<?php if( have_rows('content_1') ):
					while ( have_rows('content_1') ) : the_row();	?>
                    <h3><?php the_sub_field('title'); ?></h3>
                    <?php the_sub_field('text'); ?>
					<?php endwhile; endif;?>
                </div>
            </div>
			<div class="col-12 col-lg-6">
                <div class="video_wrap">
					<video width="100%" height="350" controls>
					<source src="<?php the_field('about_video'); ?>" type="video/mp4">
					<source src="<?php the_field('about_video'); ?>" type="video/ogg">
					Your browser does not support the video tag.
					</video>
                </div>
            </div>
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
			while ( have_rows('events') ) : the_row();	?>
            <div class="col-md-6 gevnt_item">
                <div class="gevnt_inner">
                    <img src="<?php the_sub_field('image'); ?>" alt="#" class="w-100" />
                    <div class="genvnt_text mt-3">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <?php the_sub_field('text'); ?>
                    </div>
                </div>
            </div>
			<?php endwhile; endif;?>
        </div>
        <div class="form_wrapper mt-5">
            <?php echo do_shortcode('[contact-form-7 id="2c9064b" title="Topgolf Form"]'); ?>
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
			<div id="post-1028" class="item ins_item d-none">
			<a href="https://stg-blueorangev2-staging.kinsta.cloud/wp-content/uploads/2025/03/step_x_-_case_studies__q1_2022__converted.pdf" target="_blank" class="item_inner">
			<div class="item_icon icon_partner_li">
			<img src="<?php echo site_url(); ?>/wp-content/uploads/2024/02/Image-blog.png" alt="#">
			</div>
			<div class="item_text">
			<h3>Colliers</h3>
			<p>Blue Orange’s data strategy engagement focused on data unification and pipeline development to determine how to centralize their Enterprise Data Warehouse without replacing operationally effective legacy systems.</p>
			<div class="more_btn circle_morebtn">
			<img src="/wp-content/themes/blueorange/assets/images/icon-arrow-blue.svg">
			</div>
			</div>
			</a>
			</div>
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