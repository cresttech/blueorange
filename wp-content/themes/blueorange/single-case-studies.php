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
<nav aria-label="breadcrumb">
   <div class="container">
      <ul class="breadcrumb">
         <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/">Home</a></li>
         <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/blog/">Blog</a></li>
         <li class="breadcrumb-item active" aria-current="page"><?php echo get_the_title(); ?></li>
       </ul>
   </div>
</nav>

<?php

/* Start the Loop */
while ( have_posts() ) :
   the_post();

   get_template_part( 'template-parts/content/content-case-studies' );
endwhile; // End of the loop.
?>

<section class="insight_sec related_post wi_full py_3">
    <div class="container">
        <div class="sec_title"><h2 class="font_small">Recent Case Studies</h2></div>
        <div class="blog_wrapper row">
            <?php if ( have_posts() ) { ?>
               <?php while ( have_posts() ) {
                  the_post(); ?>

                  <div class="item ins_item">
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
                                 $case_studies_tags = get_the_terms( get_the_ID(), 'case_studies_tags' );
                                 if($case_studies_tags){
                                    foreach($case_studies_tags as $tag){
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
                  
               <?php } ?>
            <?php wp_reset_postdata();
             the_posts_pagination(); 
         } ?>
        </div>
    </div>
</section>
</div>
<?php get_footer();
