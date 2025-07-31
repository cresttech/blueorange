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
         <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/case-studies/">Case Studies</a></li>
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
$postid = get_the_ID();
?>

<section class="insight_sec related_post wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title btn_title mb-0">
          <h2>Case Studies</h2>
          <a href="<?php echo site_url(); ?>/case-studies/" class="button orange_btn v_dsktop">Learn More</a>
        </div>
        <div class="blog_wrapper row">
            <?php 
            $args = array(
                 'post_type' => 'case-studies',
                 'posts_per_page'   => 3,
				 'post__not_in' => array( $postid )
             );
            $the_query = new WP_Query( $args ); 
            
            if ( $the_query->have_posts() ) { ?>
               <?php while ( $the_query->have_posts() ) {
                  $the_query->the_post(); ?>
                  <?php get_template_part( 'template-parts/content/content-case-studies-block' ); ?>
               <?php } ?>
            <?php wp_reset_postdata();
             the_posts_pagination(); 
         } ?>
        </div>
    </div>
</section>
</div>
<?php get_footer();
