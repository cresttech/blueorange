<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<!-- <article id="post-<?php //the_ID(); ?>" <?php //post_class(); ?>>
	<?php //get_template_part( 'template-parts/header/excerpt-header', get_post_format() ); ?>
	<div class="entry-content">
		<?php //get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
	</div>
	<footer class="entry-footer default-max-width">
		<?php //twenty_twenty_one_entry_meta_footer(); ?>
	</footer>
</article> -->


<!-- <div id="post-<?php //the_ID(); ?>"  <?php //post_class(); ?> class="item ins_item"> -->
<div id="post-<?php the_ID(); ?>" <?php post_class("item ins_item"); ?>>
     <a href="<?php the_permalink(); ?>" class="item_inner">
        <div class="item_icon">
	        <?php
	          if ( has_post_thumbnail() ) {
	             $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
	          }
	       ?>
	       <img src="<?php echo $large_image_url[0]; ?>" alt="#">
        </div>

        <div class="item_text">

        	<div class="insght_tags">
              <?php
                 $blog_tags = get_the_terms( get_the_ID(), 'blog_tags' );
                 if($blog_tags){
                    foreach($blog_tags as $tag){
                       echo '<span>'.$tag->name.'</span>';
                    }
                 }
              ?>
           </div>
           <h3><?php the_title(); ?></h3>

           <?php
              $excerpt       = get_the_excerpt();
              $excerpt       = substr( $excerpt, 0, 100 );
              $short_excerpt = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
              if ( ! empty( $short_excerpt ) ) { ?>
                    <p><?php echo esc_html( $short_excerpt ); ?>&hellip;</p>
           <?php } ?>
           
           <div class="more_btn">
              <span>Read More</span>
              <img src="/wp-content/themes/blueorange/assets/images/icon-arrow-orange.svg" class="bfr_hvr">
              <img src="/wp-content/themes/blueorange/assets/images/icon-arrow-blue.svg" class="aftr_hvr">
           </div>
       </div>
     </a>
  </div>