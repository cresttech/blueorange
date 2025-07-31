<?php
/*
Template Name: Event Page
*/
get_header();
?>
<div class="page-content event_page">
<section class="banner_sec inner_banner wi_full" style="background-image: url(<?php the_field('banner_image'); ?>), linear-gradient(to bottom, #192C47, #1B375F);">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-6 col-sm-9 title_col mx-auto text-center">
                <div class="subtitle text-uppercase light_blue"><?php the_field('subtitle'); ?></div>
                <h1 class="text-uppercase text-white"><?php the_field('heading'); ?></h1>
                <?php get_template_part( 'template-parts/hubspot-newsletter-form' ); ?>
            </div>
        </div>
    </div>
</section>
<section class="event_data_sec wi_full mt_3 d-none">
    <div class="container-xxl">
        <div class="row ed_row_list" data-aos="fade-up" data-aos-duration="2000">
			<?php if( have_rows('content_1') ):
			while ( have_rows('content_1') ) : the_row();	?>
            <div class="col-12 col-md-6 ed_item mb-4 mb-md-0">
                <div class="ed_inner light_grey">
                    <div class="subtitle text-uppercase"><?php the_sub_field('heading'); ?></div>
                    <h2 class="text_color"><?php the_sub_field('sub_heading'); ?></h2>
                    <?php the_sub_field('text'); ?>
                    <div class="btn_block">
                        <a href="<?php the_sub_field('button_link'); ?>" class="button blue_btn">
                            <?php the_sub_field('button_text'); ?> <i class="fa-solid fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
			<?php endwhile; endif;?>
        </div>
    </div>
</section>
<section class="event_section wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title" data-aos="fade-up" data-aos-duration="2000">
            <h2 class="text_color text-uppercase mb-3">Upcoming Events</h2>
        </div>
        <div class="row event_List">
			<?php if( have_rows('events') ):
			while ( have_rows('events') ) : the_row();	?>
            <?php 
                $start_date = get_sub_field('start_date'); 
                $end_date = get_sub_field('end_date'); 

                $hideclass = '';
                if($end_date && (strtotime($end_date) < strtotime(date('Y-m-d')))){
                    $hideclass = 'd-none';
                } else {
                    if(!($end_date) && ($start_date && (strtotime($start_date) < strtotime(date('Y-m-d'))))){
                        $hideclass = 'd-none';
                    }
                }
            ?>
			<div class="col-12 col-sm-6 col-lg-4 evnt_item <?php echo $hideclass; ?>">
                <a href="<?php the_sub_field('link'); ?>" class="evnt_iner light_grey">
                    <img src="<?php the_sub_field('image'); ?>" class="evnt_thumb" alt="#" />
                    <div class="evenT_text">
                        <h4 class="text_color"><?php the_sub_field('title'); ?></h4>
                        <p><span><?php if($start_date) { echo date('M j, Y', strtotime($start_date)); } ?> <?php if($end_date) { echo ' - ' . date('M j, Y', strtotime($end_date)); } ?></span> | <?php the_sub_field('text'); ?></p>
                    </div>
                </a>         
            </div>
			<?php endwhile; endif;?>
        </div>
        <div class="row no-event-row mt-3" style="display: none;">
            <div class="col-12 no-event">
                <p>Check back soon and sign up for our newsletter to be the first to know about upcoming events.</p>
            </div>
        </div>
    </div>
</section>
</div>

<script>
    var event_item_count =  jQuery(".evnt_item").length;
    var hide_event_count =  jQuery(".evnt_item.d-none").length;
    if(event_item_count == hide_event_count){
        jQuery(".no-event-row").show();
    }
</script>
<?php get_footer(); ?>