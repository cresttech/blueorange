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

<section  id="post-<?php the_ID(); ?>" <?php post_class("post_dtl_sec wi_full"); ?> >
    <div class="container">
    	<div class="row">
    		<div class="col-12">
		    	<div class="post_thumbl">
		    		<?php
                      if ( has_post_thumbnail() ) {
                         $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                      }
                   ?>
                   <img src="<?php echo $large_image_url[0]; ?>" alt="#" class="w-100">
		    	</div>
		    	<div class="post_data">
		    		<h2 class="font_small"><?php the_title(); ?></h2>
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

                    <?php the_content(); ?>
		    	</div>
		    </div>
		</div>
    </div>
</section>

