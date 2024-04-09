<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<div class="page-content">
<?php

/* Start the Loop */
while ( have_posts() ) :
   the_post();
 // End of the loop.
?>

<section class="banner_sec inner_banner wi_full" style="background: url(<?php bloginfo('template_url') ?>/assets/images/data-engg-banner.png) no-repeat center; background-size: cover;">
    <div class="container-xxl">
        <div class="banner_title text-center mb-3 title_service">
            <h1><?php the_field('banner_heading'); ?></h1>
        </div>
        <div class="banner_content text-center">
            <?php the_field('banner_content'); ?>
            <div class="btn_block justify-content-center mt_2">
                <a href="<?php the_field('button_link_1'); ?>" class="button orange_btn"><?php the_field('button_text_1'); ?></a>
            </div>
        </div>
    </div>
</section>
<section class="related_Services wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title max_width text-center">
            <h2><?php the_field('heading_1'); ?></h2>
            <?php the_field('content_1'); ?>
        </div>
        <div class="rel_ser_List row">
			<?php if( have_rows('services') ):
			while ( have_rows('services') ) : the_row();	?>
            <div class="rel_ser_item">
                <a href="<?php the_sub_field('link'); ?>" class="item_inner">
                    <span class="item_icon">
                        <img src="<?php the_sub_field('icon'); ?>" alt="#">
                    </span>
                    <h3 class="h4"><?php the_sub_field('title'); ?></h3>
                </a>
            </div>
			<?php endwhile; endif;?>
        </div>
        <div class="btn_block justify-content-center">
            <a href="<?php the_field('button_link_2'); ?>" class="button orange_btn"><?php the_field('button_text_2'); ?></a>
        </div>
    </div>
</section>
<section class="how_it_work wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title max_width text-center">
            <h2><?php the_field('heading_2'); ?></h2>
            <?php the_field('content_2'); ?>
        </div>
        <div class="content_wrap">
            <div class="img_box mt_3 text-center">
                <img src="<?php the_field('desktop_image'); ?>" class="v_dsktop">
                <img src="<?php the_field('mobile_image'); ?>" class="v_mobile">
            </div>
            <div class="btn_block justify-content-center">
                <a href="<?php the_field('button_link_3'); ?>" class="button orange_btn"><?php the_field('button_text_3'); ?></a>
            </div>
        </div>
    </div>
</section>
<?php if(get_field('heading_3') != '') { ?>
<section class="casestudy_sec wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title btn_title">
        	<h2><?php the_field('heading_3'); ?></h2>
        	<a href="<?php the_field('button_link_4'); ?>" class="button orange_btn v_dsktop"><?php the_field('button_text_4'); ?></a>
        </div>
        <div class="casestudy_wrapper">
			<?php
			$postids = get_field('case_studies');
			$args = array( 'post_type' => 'case-studies' , "order" => "DESC", 'posts_per_page' => '3', "post__in" => $postids);
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
        	<a href="<?php the_field('button_link_4'); ?>" class="button orange_btn"><?php the_field('button_text_4'); ?></a>
        </div>
    </div>
</section>
<?php } if(get_field('heading_4') != '') { ?>
<section class="industry_sec wi_full">
    <div class="container-xxl">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="sec_title faq_title">
                    <h2><?php the_field('heading_4'); ?></h2>
                    <div class="btn_block v_dsktop">
                        <a href="<?php the_field('button_link_5'); ?>" class="button orange_btn"><?php the_field('button_text_5'); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="accordion_wrapper">
                    <div class="accordion faq_accordion" id="accordion" role="tablist" aria-multiselectable="true">
						<?php if( have_rows('faqs') ):
						$count = 1;
						while ( have_rows('faqs') ) : the_row();	?>
                        <div class="card">
                            <div class="card-header p-0" role="tab" id="accordion<?php echo $count; ?>">
                                <h3 class="collapsed" data-toggle="collapse" data-target="#accordion__<?php echo $count; ?>" role="button" aria-controls="accordion__<?php echo $count; ?>"><?php the_sub_field('title'); ?></h3>
                            </div>
                            <div id="accordion__<?php echo $count; ?>" class="collapse" role="tabpanel" aria-labelledby="accordion<?php echo $count; ?>" data-parent="#accordion">
                                <div class="card-body">
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </div>
                        </div>
						<?php $count++; endwhile; endif;?>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn_block v_mobile">
        	<a href="<?php the_field('button_link_5'); ?>" class="button orange_btn"><?php the_field('button_text_5'); ?></a>
        </div>
    </div>
</section>
<?php } ?>
</div>
<?php endwhile; get_footer();
