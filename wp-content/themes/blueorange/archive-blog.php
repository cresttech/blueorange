<?php get_header(); ?>
<div class="page-content resources_page">
<section class="banner_sec inner_banner wi_full" style="background-image: url(<?php bloginfo('template_url') ?>/newimages/blog-banner-shape.svg), linear-gradient(to bottom, #192C47, #1B375F);">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-6 col-sm-9 title_col mx-auto text-center">
                <div class="subtitle text-uppercase light_blue">Blue orange blog</div>
                <h1 class="text-uppercase text-white">Stay up to date with our latest news</h1>
                <?php get_template_part( 'template-parts/hubspot-newsletter-form' ); ?>
            </div>
        </div>
    </div>
</section>
<section class="insight_sec blog_sec wi_full py_3 sec_after_sec">
    <div class="container-xxl">
         <div class="blog_filter wi_full">
            <form class="group" role="search" method="get" action="<?php echo site_url(); ?>/">
               <div class="row">
                  <div class="col-12 col-sm-6 col-lg-4">
                     <div class="blog_search form-group">
                        <input type="text" name="post_type" value="blog" / style="display: none;">
                        <input type="hidden" value="blog_tags" name="tax_blog_tags" />
                        <input type="hidden" value="technology_tags" name="tax_technology_tags" />
                        <input type="hidden" value="industries_tags" name="tax_industries_tags" />
						      <input type="text" value="" name="s" placeholder="Search" class="form-control" />
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-2">
                     <div class="blog_tags form-group">
                        <?php
                           $terms = get_terms([
                               'taxonomy' => 'blog_tags',
                               'hide_empty' => false,
                           ]);
                         ?>
                        <select name="tags[]" class="form-control selectOpt" id="select_services" data-placeholder="Select Services" multiple>
                           <?php
                              foreach ($terms as $term){ ?>
                                 <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
                           <?php } ?>
                        </select>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-2">
                        <div class="blog_tags form-group">
                           <?php
                              $terms2 = get_terms([
                                  'taxonomy' => 'technology_tags',
                                  'hide_empty' => false,
                              ]);
                            ?>
                           <select name="techtags[]" class="form-control selectOpt" id="select_technology" data-placeholder="Select Technologies" multiple>
                              <?php
                                 foreach ($terms2 as $term){ ?>
                                    <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
                              <?php } ?>
                           </select>
                        </div>
                     </div>
                  <div class="col-12 col-sm-6 col-lg-2">
                     <div class="blog_tags form-group">
                        <?php
                           $terms2 = get_terms([
                               'taxonomy' => 'industries_tags',
                               'hide_empty' => false,
                           ]);
                         ?>
                        <select name="indtags[]" class="form-control selectOpt" id="select_industry" data-placeholder="Select Industries" multiple>
                           <?php
                              foreach ($terms2 as $term){ ?>
                                 <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
                           <?php } ?>
                        </select>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-2">
                     <div class="submit_btn d-flex justify-content-end">
                        <input value="Search" class="button blue_btn" type="submit">
                     </div>
                  </div>
               </div>
            </form>
         </div>

        <div class="blog_wrapper row">


         <?php
               $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

               $args = array(
                  'posts_per_page' => 6,
                  'post_type' => 'blog',
                  'orderby' => 'ID', 
                  'paged' => $paged,
               );

               $the_query = new WP_Query( $args );


               if ( $the_query->have_posts() ) { ?>
               <?php while ( $the_query->have_posts() ) {
                  $the_query->the_post(); ?>

                  <div class="item ins_item blog_<?php echo get_the_ID(); ?>">
                     <a href="<?php the_permalink(); ?>" class="item_inner">
                        <div class="item_icon">
                           <?php
                              $featured_img = '';
                              if ( has_post_thumbnail() ) {
                                 $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                                 $featured_img = $large_image_url[0];
                              } else {
                                 //$featured_img = get_field('blog_default_image', 'option');
                                 // $featured_imgs = get_field('blog_default_images', 'option');
                                 // $random_img = array_rand($featured_imgs,1);
                                 // $featured_img = $featured_imgs[$random_img];

                                 $default_mage = get_field('default_mage');

                                 //$a = new SimpleXMLElement($default_mage);
                                 //echo ' >>>>>>>>>>>>>>>>>>>>> '. $a['href']; // will echo www.something.com

                              }
                           ?>
                           <?php if(!empty($featured_img)) { ?>
                              <img src="<?php echo $featured_img; ?>" alt="#">
                           <?php } else { 
                              echo $default_mage;
                            }  ?>
                        </div>

                        <div class="item_text">
							<p class="d-none"><i class="fa-regular fa-calendar"></i> <?php echo get_the_date(); ?></p>
                           <h3><?php the_title(); ?></h3>
                           <?php
                              $excerpt       = get_the_excerpt();
                              $excerpt       = substr( $excerpt, 0, 100 );
                              $short_excerpt = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
                              if ( ! empty( $short_excerpt ) ) { ?>
                                    <p><?php echo esc_html( $short_excerpt ); ?>&hellip;</p>
                           <?php } ?>
                           <div class="more_btn circle_morebtn">
                            <img src="/wp-content/themes/blueorange/assets/images/icon-arrow-blue.svg">
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

<?php
// Medium RSS feed URL (replace 'username' with the Medium username)
$medium_feed_url = "https://medium.com/feed/blue-orange-digital";

// Fetch the RSS feed
$rss = simplexml_load_file($medium_feed_url);
// echo '<pre>';
// print_r($rss);

if ($rss === false) {
    die("Error fetching Medium feed.");
}

// Register namespaces to handle `content:encoded` elements
$namespaces = $rss->getNamespaces(true);
// echo '<pre>';
// print_r($namespaces);


// Function to extract image from the content:encoded section
function get_featured_image($content) {
    // Use regular expression to find the first image in the content
    preg_match('/<img.*?src=["\'](.*?)["\']/', $content, $matches);
    
    // If an image is found, return the image URL
    if (!empty($matches)) {
        return $matches[1];
    }
    
    return null;
}
?>

<section class="blog__sec wi_full py_3">
    <div class="container-xxl">
        <div class="sec_title"><h2>Blogs from Medium</h2></div>
        <div class="case_carousel owl-carousel">
			<?php 
			$count = 1;
			foreach ($rss->channel->item as $item) {
				//  echo '<pre>';
				// print_r($item);
				// echo '</pre>'; 
			$title = (string) $item->title;
			$link = (string) $item->link;
			$content_encoded = $item->children($namespaces['content'])->encoded;
         //echo $content_encoded;
			$featured_image = get_featured_image($content_encoded);
			?>
            <div class="item case_item">
                <a href="<?php echo $link; ?>" target="_blank" class="item_inner">
                    <div class="item_icon">
                        <?php
                              if ($featured_image) {
								echo "<img src='$featured_image' alt='$title'/>";
							}
                           ?>
                    </div>
                    <div class="item_text">
                        <h3><?php  echo "<p>$title</p>"; ?></h3>
						<?php
                              echo "<p>" . strip_tags(substr($content_encoded, 0, 600)) . "...</p>";

							 ?>
                         <div class="more_btn circle_morebtn">
                            <img src="/wp-content/themes/blueorange/assets/images/icon-arrow-blue.svg">
                        </div>
                    </div>
                </a>
            </div>
			<?php $count++; } ?>
        </div>
    </div>
</section>
</div>
<?php get_footer(); ?>