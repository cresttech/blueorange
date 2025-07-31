<?php get_header(); ?>
<div class="page-content resources_page">
<section class="banner_sec inner_banner wi_full" style="background-image: url(<?php bloginfo('template_url') ?>/newimages/blog-banner-shape.svg), linear-gradient(to bottom, #192C47, #1B375F);">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-6 col-sm-9 title_col mx-auto text-center">
                <div class="subtitle text-uppercase light_blue">Blue orange News</div>
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
                        <input type="text" name="post_type" value="news" / style="display: none;">
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
            <?php if ( have_posts() ) { ?>
               <?php while ( have_posts() ) {
                  the_post(); ?>

                  <div class="item ins_item">
                     <a href="<?php the_permalink(); ?>" class="item_inner">
                        <div class="item_icon">
                           <?php
                              $featured_img = '';
                              if ( has_post_thumbnail() ) {
                                 $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                                 $featured_img = $large_image_url[0];
                              } else {
                                 //$featured_img = get_template_directory_uri() . '/assets/images/featured_default.svg';
                                 //$featured_img = get_field('news_default_image', 'option');

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


                        <div class="item_text">
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
</div>
<?php get_footer(); ?>