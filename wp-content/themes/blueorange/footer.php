<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<div class="page-footer">
<img src="" class="fix_pos">
<div class="get_started wi_full py_3" style="background: url(<?php bloginfo('template_url') ?>/assets/images/footer-shape.png) no-repeat center;background-size: cover;">
    <div class="container-xxl text-center">
        <div class="sec_content">
            <h2><?php the_field('text', 'options'); ?></h2>
        </div>
        <div class="btn_block justify-content-center">
            <a href="<?php the_field('button_link', 'options'); ?>" class="button blue_btn"><?php the_field('button_text', 'options'); ?> <img src="<?php bloginfo('template_url') ?>/assets/images/icon-arrow-white.svg"></a>
        </div>
    </div>
</div>
<footer class="wi_full py_3">
    <div class="container-xxl">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-5 order_3">
                <div class="footer_logo">
                    <img src="<?php the_field('footer_logo', 'options'); ?>" class="flogo_siz">
                    <div class="footer_social">
                        <?php if( have_rows('social_links', 'options') ):
                        while ( have_rows('social_links', 'options') ) : the_row(); ?>
                        <a href="<?php the_sub_field('link', 'options'); ?>" target="_blank"><img src="<?php the_sub_field('icon', 'options'); ?>"></a>
                        <?php endwhile; endif;?>
                    </div>
                    <div class="ftr_logos large_dev">
                        <?php if( have_rows('certificates', 'options') ):
						while ( have_rows('certificates', 'options') ) : the_row();	?>
						<img src="<?php the_sub_field('image', 'options'); ?>" alt="#">
						<?php endwhile; endif;?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 order_1">
                <div class="footer_nav">
					<?php
					wp_nav_menu( array(
					'menu'              => 'Footer Menu',
					'menu_class'        => 'navbar-nav ml-auto',
					'walker'          => new bs4navwalker())
					);
					?>
                </div>
                <div class="ftr_logos small_dev">
                    <?php if( have_rows('certificates', 'options') ):
                    while ( have_rows('certificates', 'options') ) : the_row(); ?>
                    <img src="<?php the_sub_field('image', 'options'); ?>" alt="#">
                    <?php endwhile; endif;?>
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-4 order_2">
                <div class="footer_address">
                    <address><img src="<?php bloginfo('template_url') ?>/assets/images/icon-location.svg"><?php the_field('address', 'options'); ?></address>
                    <a href="mailto: <?php the_field('email', 'options'); ?>"><img src="<?php bloginfo('template_url') ?>/assets/images/icon-email.svg"><?php the_field('email', 'options'); ?></a>
                    <a href="tel: <?php $phone = get_field('phone', 'options');  echo str_replace(array( '(', ')', ' ', '-' ), '', $phone);  ?>"><img src="<?php bloginfo('template_url') ?>/assets/images/icon-phone.svg"><?php the_field('phone', 'options'); ?></a>
                </div>
            </div>
        </div>
        <div class="ftr_cpyrgt">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p>© <?php echo date('Y'); ?> All Rights Reserved</p>
                </div>
                <div class="col-12 col-md-6 text-right">
                    <p><a href="#">Privacy policy</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/bootstrap.bundle.min.js"></script> 
<script src="<?php bloginfo('template_url') ?>/assets/js/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/custom.js"></script> 
<script>
$(window).load(function() {
    $('.select2').select2({
    });
});
</script>
<?php wp_footer(); ?>
<script>
    $( "body" ).delegate( 'li.menu-item-has-children .dsd_menu', "click", function(event) {    
      $('li .dropdown-menu').hide();                
      if($(this).find('i').hasClass('fa-angle-bottom')){
        $(this).closest('li').find('.dropdown-menu').hide();    
        $(this).html('<i class="fa fa-angle-top" aria-hidden="true"></i>'); 
       $('.dsd_menu').removeClass('dsd_menu_plus');
      } else {                                  
        $(this).closest('li').find('.dropdown-menu').toggle();
        if ( $(this).closest('li').find('.dropdown-menu').is(':visible') ){
           $('.dsd_menu').addClass('dsd_menu_plus');
          $('.dsd_menu').html("<i class='fa fa-angle-bottom' aria-hidden='true'></i>");
          $(this).html('<i class="fa fa-angle-bottom" aria-hidden="true"></i>');      

        }   
      }           
    });
</script>
</body>
</html>
