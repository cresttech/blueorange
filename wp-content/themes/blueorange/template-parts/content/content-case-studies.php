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
    <div class="post__Banner wi_full py_3 position-relative">
        <div class="post_thumbl">
            <?php
                $featured_img = '';
                if ( has_post_thumbnail() ) {
                    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                    $featured_img = $large_image_url[0];
                } else {
                    //$featured_img = get_field('case_studies_default_image', 'option');
                    $default_mage = get_field('default_mage');
                }
            ?>
            <!-- <img src="<?php echo $featured_img; ?>" alt="#"> -->

            <?php if(!empty($featured_img)) { ?>
                <img src="<?php echo $featured_img; ?>" alt="#"  class="w-100">
            <?php } else { 
                echo $default_mage;
            }  ?>
        </div>
        <div class="post_partner_wrap">
            
            <?php if( have_rows('logos') ): ?>
                <div class="post_partner_list">
                <?php while( have_rows('logos') ): the_row(); ?>
                    <img src="<?php echo get_sub_field('logo'); ?>">
                <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <div class="container-xxl">
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto">
                        <div class="post_data">
                            <h1 class="text-white"><?php the_title(); ?></h1>
                            <div class="insght_tags">
                                <?php
                                $blog_tags = get_the_terms( get_the_ID(), 'case_studies_tags' );
                                if($blog_tags){
                                    foreach($blog_tags as $tag){
                                        echo '<span>'.$tag->name.'</span>';
                                    }
                                }


                                $technology_tags = get_the_terms( get_the_ID(), 'technology_studies_tags' );
                                if($technology_tags){
                                    foreach($technology_tags as $tag){
                                        echo '<span>'.$tag->name.'</span>';
                                    }
                                }


                                $industries_tags = get_the_terms( get_the_ID(), 'industries_studies_tags' );
                                if($industries_tags){
                                    foreach($industries_tags as $tag){
                                        echo '<span>'.$tag->name.'</span>';
                                    }
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="post__Content wi_full py_3 pt-0">
        <div class="container-xxl">
        	 <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="post_search d-none">
                        <form action="/" method="get">
                            <input class="form-control" value="" type="search" name="s" placeholder="Search in Case Studies...">
                            <input type="text" name="post_type" value="case-studies" / style="display: none;">
                            <button type="submit" class="button blue_btn">Search</button>
                        </form>
                    </div>
          		    <div class="post_data">
                        <?php the_content(); ?>
          		    </div>
      		    </div>
    		</div>
        </div>
    </div>
</section>