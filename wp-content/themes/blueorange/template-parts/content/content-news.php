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

<section  id="post-<?php the_ID(); ?>" <?php post_class("post_dtl_sec wi_full sec_after_sec"); ?> >
    <div class="container-xxl">
    	<div class="row">
		    <div class="col-12 col-lg-10 mx-auto">
                <div class="post_search">
                    <form action="/" method="get">
                        <input class="form-control" value="" name="s" type="search" placeholder="Search in News...">
                        <input type="text" name="post_type" value="news" style="display: none;">
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
                        ?>
                    </div>
                    <div class="post_thumbl">
                        <?php
                            $featured_img = '';
                            if ( has_post_thumbnail() ) {
                                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                                $featured_img = $large_image_url[0];
                            } else {
                                //$featured_img = get_field('news_default_image', 'option');
                                $default_mage = get_field('default_mage');
                            }
                        ?>

                       <!--  <img src="<?php echo $featured_img; ?>" alt="#" class="w-100"> -->
                        <?php if(!empty($featured_img)) { ?>
                         <img src="<?php echo $featured_img; ?>" alt="#"  class="w-100">
                        <?php } else { 
                         echo $default_mage;
                        }  ?>
                    </div>
                    <?php the_content(); ?>
                    <!-- <div class="static_content d-none">
                        <h2>Databricks in Action</h2>
                        <p>Databricks, has been successfully utilized by major players in the travel industry, such as Hotels.com. Databricks provides robust solutions for handling large-scale data operations, improving data accessibility, and enhancing analytical capabilities. By streamlining data workflows and leveraging advanced analytics, Databricks helps businesses optimize their operations and deliver personalized customer experiences.</p>
                        <ul>
                            <li><strong>Enhance Consumer Experience Through Machine Learning:</strong> Managing a vast collection of image files for property listings, which included numerous duplicates and lacked a structured system for ranking and classification, presented significant challenges. There was a crucial need to implement real-time scoring systems and streamline the deployment of machine learning and deep learning models to enhance operational efficiency.</li>
                            <li><strong>Develop a Faster and More Efficient Data Pipeline:</strong> The existing on-premise Hadoop cluster, reliant on SQL and SAS for large-scale data science, was proving slow and restrictive. It required two hours to process only 10% of the data, highlighting the need for a more robust and accelerated data pipeline to handle full data volumes more effectively.</li>
                            <li><strong>Develop a Faster and More Efficient Data Pipeline:</strong> The existing on-premise Hadoop cluster, reliant on SQL and SAS for large-scale data science, was proving slow and restrictive. It required two hours to process only 10% of the data, highlighting the need for a more robust and accelerated data pipeline to handle full data volumes more effectively.</li>
                        </ul>
                        <h2>Technology and Impact</h2>
                        <p>Utilizing Databricks, companies like Hotels.com have been able to efficiently process vast amounts of data, enabling real-time decision-making and more accurate predictions. The platform's ability to handle complex data operations and provide scalable solutions is instrumental in helping businesses adapt to rapidly changing market conditions.</p>
                        <blockquote>“Agility and flexibility were critical for us to successfully support our data science and engineering goals. Moving to Databricks Data Intelligence Platform to run 100% of our workflows has greatly boosted our business and customers.”<strong>— Matt Fryer VP, Chief Data Science Officer, Hotels.com</strong></blockquote>
                        <h2>Conclusion</h2>
                        <p>The success of Databricks in enhancing data infrastructure and analytics in the travel industry exemplifies the transformative potential of advanced data technology. Blue Orange Digital is committed to leveraging such technologies to help our clients achieve their business objectives, driving growth and innovation in their respective fields.</p>
                    </div> -->
	    	    </div>
	        </div>
	    </div>
    </div>
</section>