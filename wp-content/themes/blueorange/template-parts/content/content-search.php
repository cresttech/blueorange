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


<div id="post-<?php the_ID(); ?>" <?php post_class("item ins_item"); ?>>
     <a href="<?php the_permalink(); ?>" class="item_inner">
        <div class="item_icon icon_partner_li">
          <?php
               $featured_img = '';
               if ( has_post_thumbnail() ) {
                  $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                  $featured_img = $large_image_url[0];
               } else {

                  if(isset($_GET['post_type'])){
                     if($_GET['post_type'] == 'blog'){
                        $featured_img = get_field('blog_default_image', 'option');
                     }

                     if($_GET['post_type'] == 'news'){
                        $featured_img = get_field('news_default_image', 'option');
                     }

                     if($_GET['post_type'] == 'case-studies'){
                        $featured_img = get_field('case_studies_default_image', 'option');
                     }

                  } else {
                     $featured_img = get_field('blog_default_image', 'option');
                  }
               }
            ?>
            
            <?php if(!empty($featured_img)){ ?>
               <img src="<?php echo $featured_img; ?>" alt="#">
            <?php } ?>

          <?php if($_GET['post_type'] == 'case-studies' || get_post_type( get_the_ID() ) == 'case-studies'){ ?>
            <?php if( have_rows('logos') ): ?>
               <div class="post_partner_list">
                  <?php while( have_rows('logos') ): the_row(); ?>
                     <img src="<?php echo get_sub_field('logo'); ?>">
                  <?php endwhile; ?>
               </div>
            <?php endif; ?>
         <?php } ?>
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
           <div class="d-none">
           <?php
              $excerpt       = get_the_excerpt();
              $excerpt       = substr( $excerpt, 0, 100 );
              $short_excerpt = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
              if ( ! empty( $short_excerpt ) ) { ?>
                    <p><?php echo esc_html( $short_excerpt ); ?>&hellip;</p>
           <?php } ?>
         </div>
           <div class="more_btn circle_morebtn">
              <img src="<?php bloginfo('template_url') ?>/assets/images/icon-arrow-blue.svg">
          </div>
       </div>
     </a>
  </div>