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
		    <div class="col-12 col-lg-8">
                <div class="post_search d-none">
                    <form action="/" method="get">
                        <input class="form-control" value="" name="s" type="search" placeholder="Search in Blog posts...">
                        <input type="text" name="post_type" value="blog" style="display: none;">
                        <button type="submit" class="button blue_btn">Search</button>
                    </form>
                </div>
  		    	<div class="post_data">
  		    		<h1 class="fw_bold"><?php the_title(); ?></h1>
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
			<div class="col-12 col-lg-4">
				<h3>Download the guide today!</h3>
				<div class="d_form_section">
					<?php echo do_shortcode('[contact-form-7 id="f01b7a0" title="Download guide"]'); ?>
				</div>
			</div>
	    </div>
    </div>
</section>