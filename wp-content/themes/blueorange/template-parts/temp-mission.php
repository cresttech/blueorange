<?php
/*
Template Name: Mission Page
*/
get_header();
?>
<div class="page-content">
<section class="banner_sec inner_banner wi_full" style="background: url(<?php the_field('image_1'); ?>) no-repeat center; background-size: cover;">
    <div class="container-xxl">
        <div class="banner_title text-center mb-3 small_title">
            <h1><?php the_field('heading_1'); ?></h1>
        </div>
        <div class="banner_content text-center">
            <?php the_field('content_1'); ?>
            <div class="btn_block justify-content-center mt_2">
                <a href="<?php the_field('button_link_1'); ?>" class="button orange_btn"><?php the_field('button_text_1'); ?></a>
            </div>
        </div>
    </div>
</section>
<section class="mission_sec wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title btn_title">
            <h2><?php the_field('heading_2'); ?></h2>
            <a href="<?php the_field('button_link_2'); ?>" class="button orange_btn v_dsktop"><?php the_field('button_text_2'); ?></a>
        </div>
        <div class="row mt_2 align-items-center">
            <div class="col-12 col-lg-6 img_col pr_2">
                <img src="<?php the_field('image_2'); ?>">
            </div>  
            <div class="col-12 col-lg-6 content_col">
                <?php the_field('content_2'); ?>
            </div>        
        </div>
    </div>
</section>
<section class="value_sec wi_full py_3 pb-0">
    <div class="container-xxl">
        <div class="sec_title max_width text-center">
            <h2><?php the_field('heading_3'); ?></h2>
            <?php the_field('content_3'); ?>
        </div>
        <div class="help_List row mt_2">
			<?php if( have_rows('values') ):
			while ( have_rows('values') ) : the_row();	?>
            <div class="help_item <?php if(get_sub_field('icon') == '') { echo 'no_item_data'; } ?>">
                <div class="item_inner">
					<?php if(get_sub_field('icon') != '') { ?>
                    <div class="item_title">
                        <span class="item_icon">
                            <img src="<?php the_sub_field('icon'); ?>" alt="#">
                        </span>
                        <h3><?php the_sub_field('title'); ?></h3>
                    </div>
                    <p><?php the_sub_field('content'); ?></p>
					<?php } ?>
                </div>
            </div>   
			<?php endwhile; endif;?>
        </div>
    </div>
</section>
</div>
<?php get_footer(); ?>