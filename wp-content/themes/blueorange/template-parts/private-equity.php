<?php
/*
Template Name: Private Equity Page
*/
get_header();
?>
<div class="page-content">
<section class="banner_sec inner_banner fintech__banner new_banner wi_full">
    <img src="<?php the_field('banner_image'); ?>" class="desktop_banner w-100">
    <img src="<?php the_field('image_mobile'); ?>" class="mobile_banner w-100">
    <div class="banner__wrap">
        <div class="container-xxl">
            <div class="banner_title text-center mb-3 private_title">
                <h1><?php the_field('heading'); ?></h1>
            </div>
            <div class="banner_content text-center">
                <div class="btn_block justify-content-center mt_2">
                    <a href="<?php the_field('button_link'); ?>" class="button orange_btn"><?php the_field('button_text'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="empowring_Sec unlocking_sec wi_full py_3 pb-0">
    <div class="container-xxl">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="sec_content">
                    <h2><?php the_field('heading_i'); ?></h2>
                    <?php the_field('content_i'); ?>
                    <div class="btn_block mt-0">
                        <a href="<?php the_field('button_link_2'); ?>" class="button blue_btn mr-3"><?php the_field('button_text_2'); ?> <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-arrow-white.svg"></a>
						<a href="<?php the_field('button_link_3'); ?>" class="button blue_btn"><?php the_field('button_text_3'); ?> <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-arrow-white.svg"></a>
                    </div>
					<div class="data_driven_logo mt-4">
						<?php if( have_rows('logos_i') ):
						while ( have_rows('logos_i') ) : the_row();	?>
						<span class="cl_icon">
							<img src="<?php the_sub_field('image'); ?>">
						</span>
						<?php endwhile; endif;?>
					</div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="sec_image">
                    <img src="<?php the_field('image_i'); ?>">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="growth_Sec wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title text-center max_width">
            <h2 class="mb-3"><?php the_field('heading_1'); ?></h2>
        </div>
        <div class="row miss_vis_row">
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
        <div class="slider_wrapper max_width mt-4">
            <div class="portfolio_carousel owl-carousel">
    			<?php if( have_rows('logos') ):
    			while ( have_rows('logos') ) : the_row();	?>
                <div class="item">
                    <img src="<?php the_sub_field('image'); ?>" class="cl_icon">
                </div>
    			<?php endwhile; endif;?>
            </div>
        </div>
    </div>
</section>
<section class="strategy_sec wi_full">
    <div class="container-xxl">
        <div class="sec_title text-center max_width mb-0">
            <h2 class="mb-3"><?php the_field('heading_2'); ?></h2>
            <img src="<?php the_field('image_1'); ?>" class="graph_img">
            <?php the_field('content_2'); ?>
        </div>
    </div>
</section>
<section class="core_experties_Sec wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title text-center max_width mb-0">
            <h2><?php the_field('heading_3'); ?></h2>
        </div>
        <div class="row cexp_list">
			<?php if( have_rows('content_3') ):
			while ( have_rows('content_3') ) : the_row();	?>
            <div class="col-12 col-sm-6 col-lg-3 cexp_item">
                <div class="item_inner">
                    <img src="<?php the_sub_field('icon'); ?>">
                    <h3><?php the_sub_field('title'); ?></h3>
                    <p><?php the_sub_field('text'); ?></p>
                </div>
            </div>
			<?php endwhile; endif;?>
        </div>
    </div>
</section>
<section class="echosystem_Sec wi_full">
    <div class="container-xxl">
        <div class="row flex-lg-row-reverse align-items-center">
            <div class="col-12 col-lg-6">
                <div class="sec_content">
                    <h2><?php the_field('heading_4'); ?></h2>
                    <div class="eco_list d-none">
						<?php if( have_rows('content_4') ):
						while ( have_rows('content_4') ) : the_row();	?>
                        <div class="eco_item">
                            <h3><?php the_sub_field('title'); ?></h3>
							<p><?php the_sub_field('text'); ?></p>
                        </div>
						<?php endwhile; endif;?>
                    </div>
					<img src="<?php the_field('content_4'); ?>">
                </div>
            </div>
            <div class="col-12 col-lg-5 mr-auto">
                <div class="sec_image">
                    <img src="<?php the_field('image_2'); ?>">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="challenge_Sec wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title max_width text-center mb-5">
            <h2><?php the_field('heading_5'); ?></h2>
        </div>
        <div class="row challenge_list">
			<?php if( have_rows('content_6') ):
			while ( have_rows('content_6') ) : the_row();	?>
            <div class="col-12 col-lg-4 chlnge_li_item">
                <div class="chlng_inner">
                    <h3><?php the_sub_field('title'); ?></h3>
					<p><?php the_sub_field('text'); ?></p>
                </div>
            </div>
			<?php endwhile; endif;?>
        </div>
        <div class="max_width text-center mt-4">
            <?php the_field('content_5'); ?>
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
			while ( have_rows('content_7') ) : the_row();	?>
            <div class="col-12 col-lg-6 wb_item">
                <div class="item_inner">
                    <h3><?php the_sub_field('title'); ?></h3>
					<p><?php the_sub_field('text'); ?></p>
                </div>
            </div>
			<?php endwhile; endif;?>
        </div>
    </div>
</section>
<section class="case_highlights wi_full py_3 pb-0">
    <div class="container-xxl">
        <div class="sec_title text-center mb-3">
            <h2><?php the_field('heading_7'); ?></h2>
        </div>
        <div class="row case_eco_list">
			<?php if( have_rows('content_8') ):
			while ( have_rows('content_8') ) : the_row();	?>
            <div class="col-12 col-lg-4 case_eco_item">
                <div class="case_eco_inner">
                    <img src="<?php the_sub_field('icon'); ?>">
                    <h3><?php the_sub_field('title'); ?></h3>
					<p><?php the_sub_field('text'); ?></p>
                </div>
            </div>
			<?php endwhile; endif;?>
        </div>
        <div class="btn_block justify-content-center">
            <a href="<?php the_field('button_link_1'); ?>" class="button blue_btn"><?php the_field('button_text_1'); ?> <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-arrow-white.svg"></a>
        </div>
    </div>
</section>
<section class="elevate_Sec wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title text-center max_width">
            <h2><?php the_field('heading_8'); ?></h2>
            <p><?php the_field('content_9'); ?> </p>
        </div>
        <div class="row elevate_list">
			<?php if( have_rows('content_10') ):
			while ( have_rows('content_10') ) : the_row();	?>
            <div class="col-12 col-md-4 elev_item">
                <div class="item_inner text-center">
                    <h2><?php the_sub_field('heading'); ?></h2>
                    <h3><?php the_sub_field('title'); ?></h3>
					<p><?php the_sub_field('text'); ?></p>
                </div>
            </div>
			<?php endwhile; endif;?>
        </div>
        <div class="max_width text-center mt-5">
            <?php the_field('content_11'); ?> 
        </div>
    </div>
</section>
</div>
<?php get_footer(); ?>