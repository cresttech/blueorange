<?php get_header(); ?>
<div class="page-content">
<section class="insight_sec blog_sec wi_full py_3 pt-0">
    <div class="container">
         <div class="sec_title"><h2>Case Studies</h2></div>
         <div class="blog_filter wi_full mt_3">
            <form class="group" role="search" method="get" action="<?php echo site_url(); ?>/">
               <div class="row">
                  <div class="col-12 col-sm-6 col-lg-3">
                     <div class="blog_search form-group">
                        <input type="text" name="post_type" value="case-studies" / style="display: none;">
                        <input type="text" value="" name="s" placeholder="Search" class="form-control" />
                        <input type="hidden" value="case_studies_tags" name="tag_name" />
                        <input type="hidden" value="technology_studies_tags" name="tag_names" />
                        <input type="hidden" value="industries_studies_tags" name="indtag_name" />
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-2">
                     <div class="blog_tags form-group">
                        <?php
                           $terms = get_terms([
                                 'taxonomy' => 'case_studies_tags',
                                 'hide_empty' => false,
                           ]);
                         ?>
                        <select name="tags[]" class="form-control select2"  data-placeholder="Select Services" multiple>
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
                               'taxonomy' => 'technology_studies_tags',
                               'hide_empty' => false,
                           ]);
                         ?>
                        <select name="techtags[]" class="form-control select2"  data-placeholder="Select Technologies" multiple>
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
                               'taxonomy' => 'industries_studies_tags',
                               'hide_empty' => false,
                           ]);
                         ?>
                        <select name="indtags[]" class="form-control select2"  data-placeholder="Select Industries" multiple>
                           <?php
                              foreach ($terms2 as $term){ ?>
                                 <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
                           <?php } ?>
                        </select>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3">
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
                              if ( has_post_thumbnail() ) {
                                 $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                              }
                           ?>
                           <img src="<?php echo $large_image_url[0]; ?>" alt="#">
                        </div>


                        <div class="item_text">
                           <div class="insght_tags">
                              <?php
                                 $case_studies_tags = get_the_terms( get_the_ID(), 'case_studies_tags' );
                                 if($case_studies_tags){
                                    foreach($case_studies_tags as $tag){
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
                           
                           <div class="more_btn">
                              <span>Read More</span>
                              <img src="/wp-content/themes/blueorange/assets/images/icon-arrow-orange.svg" class="bfr_hvr">
                              <img src="/wp-content/themes/blueorange/assets/images/icon-arrow-blue.svg" class="aftr_hvr">
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