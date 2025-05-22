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

<div class="page-content single_resource_page">
<nav class="d-none" aria-label="breadcrumb">
	<div class="container-xxl">
		<ul class="breadcrumb">
	    	<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/">Home</a></li>
	    	<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/news/">News</a></li>
	    	<li class="breadcrumb-item active" aria-current="page"><?php echo get_the_title(); ?></li>
	    </ul>
	</div>
</nav>

<?php

/* Start the Loop */
while ( have_posts() ) :
   the_post();

   get_template_part( 'template-parts/content/content-news' );
endwhile; // End of the loop.
$postid = get_the_ID();
?>

<section class="insight_sec related_post wi_full py_3">
    <div class="container-xxl">
      <div class="sec_title btn_title mb-0">
          <h2>Explore more News</h2>
          <a href="<?php echo site_url(); ?>/news/" class="button orange_btn v_dsktop">Read All</a>
        </div>
        <div class="blog_wrapper row">
            <?php 
            $args = array(
                 'post_type' => 'news',
                 'posts_per_page'   => 3,
				 'post__not_in' => array( $postid )
             );
            $the_query = new WP_Query( $args ); 
            if ( $the_query->have_posts() ) { ?>
               <?php while ( $the_query->have_posts() ) {
                  $the_query->the_post(); ?>

                  <div class="item ins_item">
                     <a href="<?php the_permalink(); ?>" class="item_inner">
                        <div class="item_icon">
                           <?php
                              $featured_img = '';
                              if ( has_post_thumbnail() ) {
                                 $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
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
                        </div>


                        <div class="item_text">
                           <div class="insght_tags d-none">
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
                           
                           <div class="more_btn circle_morebtn">
                                <img src="<?php bloginfo('template_url') ?>/assets/images/icon-arrow-blue.svg">
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
