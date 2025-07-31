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

<section  id="post-<?php the_ID(); ?>" <?php post_class("post_dtl_sec wi_full py_3 sec_after_sec"); ?> >
    <div class="container-xxl">
    	<div class="row">
		    <div class="col-12 col-lg-10 mx-auto">
                <div class="post_search d-none">
                    <form action="/" method="get">
                        <input class="form-control" value="" name="s" type="search" placeholder="Search in Blog posts...">
                        <input type="text" name="post_type" value="blog" style="display: none;">
                        <button type="submit" class="button blue_btn">Search</button>
                    </form>
                </div>
  		    	<div class="post_data">
  		    		<h1 class="fw_bold"><?php the_title(); ?></h1>
  		    		<div class="insght_tags">
                        <?php
                            $blog_tags = get_the_terms( get_the_ID(), 'blog_tags' );
                            if($blog_tags){
                                foreach($blog_tags as $tag){
                                   echo '<span>'.$tag->name.'</span>';
                                }
                            }

                            $technology_tags = get_the_terms( get_the_ID(), 'technology_tags' );
                            if($technology_tags){
                                foreach($technology_tags as $tag){
                                   echo '<span>'.$tag->name.'</span>';
                                }
                            }

                            $industries_tags = get_the_terms( get_the_ID(), 'industries_tags' );
                            if($industries_tags){
                                foreach($industries_tags as $tag){
                                   echo '<span>'.$tag->name.'</span>';
                                }
                            }
                          ?>
                    </div>
                    <div class="post_thumbl">
                        <?php
                              $featured_img = '';
                              if ( has_post_thumbnail() ) {
                                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
                                $featured_img = $large_image_url[0];
                              } else {
                                //$featured_img = get_field('blog_default_image', 'option');
                                $default_mage = get_field('default_mage');
                              }
                           ?>
                        <!-- <img src="<?php echo $featured_img; ?>" alt="#" class="w-100"> -->
                        <?php if(!empty($featured_img)) { ?>
                          <img src="<?php echo $featured_img; ?>" alt="#"  class="w-100">
                       <?php } else { 
                          echo $default_mage;
                        }  ?>
                    </div>
                    <?php the_content(); ?>


                    <div class="static_content">
                        <?php if(get_field('databricks_title')){ ?>
                            <h2><?php the_field('databricks_title'); ?></h2>
                            <?php the_field('databricks_content'); ?>

                            <?php if( have_rows('databricks_list') ): ?>
                                <ul>
                                <?php while( have_rows('databricks_list') ): the_row();  ?>
                                    <li>  <?php echo get_sub_field('list'); ?> </li>
                                <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        <?php } ?>

                        <?php if(get_field('technology_title')){ ?>
                            <h2><?php the_field('technology_title'); ?></h2>
                            <?php the_field('technology_content'); ?>
                        <?php } ?>

                        <?php if(get_field('quote_title')){ ?>
                            <blockquote>“<?php echo get_field('quote_content'); ?>”<strong>— <?php echo get_field('quote_title'); ?></strong></blockquote>
                        <?php } ?>

                         <?php if(get_field('conclusion_title')){ ?>
                            <h2><?php the_field('conclusion_title'); ?></h2>
                            <?php the_field('conclusion_content'); ?>
                        <?php } ?>
                    </div>
	    	    </div>
	        </div>
	    </div>
    </div>
</section>