<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>


<div id="post-<?php the_ID(); ?>" class="item ins_item">
    <a href="<?php the_permalink(); ?>" class="item_inner">
        <div class="item_icon icon_partner_li">
           <?php
              $featured_img = '';
              if ( has_post_thumbnail() ) {
                 $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                 $featured_img = $large_image_url[0];
              } else {
                 $default_mage = get_field('default_mage');
              }
           ?>
           <?php if(!empty($featured_img)) { ?>
             <img src="<?php echo $featured_img; ?>" alt="#">
           <?php } else { 
             echo $default_mage;
           }  ?>
           
           <?php if( have_rows('logos') ): ?>
              <div class="post_partner_list">
              <?php while( have_rows('logos') ): the_row(); ?>
                 <img src="<?php echo get_sub_field('logo'); ?>">
              <?php endwhile; ?>
              </div>
           <?php endif; ?>

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
            <img src="/wp-content/themes/blueorange/assets/images/icon-arrow-blue.svg">
        </div>
       </div>
    </a>
</div>