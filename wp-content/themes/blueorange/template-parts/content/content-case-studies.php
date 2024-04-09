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
                             $blog_tags = get_the_terms( get_the_ID(), 'case_studies_tags' );
                             if($blog_tags){
                                foreach($blog_tags as $tag){
                                   echo '<span>'.$tag->name.'</span>';
                                }
                             }
                          ?>
                    </div>

                    <?php the_content(); ?>

                    <h3>The Problem</h3>
                    <p>A middle-market PE firm needed help integrating 4 acquired CRM/ERP companies. They introduced Blue Orange to the CEO of the merged company to provide architectural guidance on their data infrastructure to support unified data and sales optimization. Due to disparate data sets, the company had no insight into the efficacy of their upper funnel engagement or attribution across their sales cycle.</p>
                    <h3>Case Study</h3>
                    <p>Sector: <strong>CRM/ERP</strong></p>
                    <p>Vertical: <strong>Sales Optimization</strong></p>
                    <p>Stage: <strong>Due Diligence Audit</strong></p>
                    <h3>Business Challenge</h3>
                    <ul>
                        <li>Siloed data systems hinder coordination, planning, and tracking. </li> 
                        <li>Low conversion on sales efforts.</li>
                        <li>Lack of visibility into sales processes.</li>
                        <li>The development team has no resources for an internally focused, stand-alone project</li>
                    </ul>
                    <h3>Blue Orange Audit Results</h3>
                    <ul>
                        <li>Scalable architecture to create data-driven operations that will not be outpaced by growth.</li>
                        <li>Increased top of funnel conversion using ML prediction to improve lead segmentation.</li>
                        <li>Improved sales modeling and oversight with real-time, full-funnel dashboards.</li>
                        <li>Updated systems without interruption of use as quickly as possible, added complexity later.</li>
                    </ul>
		    	</div>
		    </div>
		</div>
    </div>
</section>

