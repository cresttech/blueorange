<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<div class="page-content">
	<section class="insight_sec blog_sec wi_full py_3 pt-0">
	    <div class="container">
	    	<div class="blog_wrapper row">


	    		 <div class="blog_filter wi_full mt_3">
		            <form class="group" role="search" method="get" action="<?php echo site_url(); ?>/">
		               <div class="row">
		                  <div class="col-12 col-sm-6 col-lg-3">
		                     <div class="blog_search form-group">
		                        <input type="text" name="post_type" value="<?php echo $_GET['post_type']; ?>" / style="display: none;">
		                        <input type="hidden" value="<?php echo $_GET['tag_name']; ?>" name="tag_name" />
		                        <input type="hidden" value="<?php echo $_GET['tag_names']; ?>" name="tag_names" />
		                        <input type="hidden" value="<?php echo $_GET['indtag_name']; ?>" name="indtag_name" />
		                        <input type="text" value="<?php echo $_GET['s'] ?? ''; ?>" name="s" placeholder="Search" class="form-control" />
		                     </div>
		                  </div>
						   <?php if ( isset( $_GET['tags'] ) && $_GET['tags'] != '' ) { ?>
		                  <div class="col-12 col-sm-6 col-lg-2">
		                     <div class="blog_tags form-group">
		                        <?php
		                           $terms = get_terms([
		                               	'taxonomy' => $_GET['tag_name'],
		                               	'hide_empty' => false,
		                           ]);
		                         ?>
		                        <select name="tags[]" class="form-control select2"  data-placeholder="Select Services" multiple>
		                           <?php
		                           		$tags = $_GET['tags'];
		                              	foreach ($terms as $term){ 
		                              		$selected = '';
		                              		if(in_array($term->slug, $tags)){
		                              			$selected = ' selected ';
		                              		}
		                            	?>
		                                 	<option value="<?php echo $term->slug; ?>" <?php echo $selected; ?> ><?php echo $term->name; ?></option>
		                           <?php } ?>
		                        </select>
		                     </div>
		                  </div>
						   <?php } if ( isset( $_GET['techtags'] ) && $_GET['techtags'] != '' ) { ?>
						  <div class="col-12 col-sm-6 col-lg-2">
		                     <div class="blog_tags form-group">
		                        <?php
		                           $terms2 = get_terms([
		                               	'taxonomy' => $_GET['tag_names'],
		                               	'hide_empty' => false,
		                           ]);
		                         ?>
		                        <select name="techtags[]" class="form-control select2"  data-placeholder="Select Technologies" multiple>
		                           <?php
		                           		$tags2 = $_GET['techtags'];
		                              	foreach ($terms2 as $term2){ 
		                              		$selected2 = '';
		                              		if(in_array($term2->slug, $tags2)){
		                              			$selected2 = ' selected ';
		                              		}
		                            	?>
		                                 	<option value="<?php echo $term2->slug; ?>" <?php echo $selected2; ?> ><?php echo $term2->name; ?></option>
		                           <?php } ?>
		                        </select>
		                     </div>
		                  </div>
						  <?php } if ( isset( $_GET['indtags'] ) && $_GET['indtags'] != '' ) { ?>
						  <div class="col-12 col-sm-6 col-lg-2">
		                     <div class="blog_tags form-group">
		                        <?php
		                           $terms2 = get_terms([
		                               	'taxonomy' => $_GET['indtag_name'],
		                               	'hide_empty' => false,
		                           ]);
		                         ?>
		                        <select name="indtags[]" class="form-control select2"  data-placeholder="Select Industries" multiple>
		                           <?php
		                           		$tags2 = $_GET['indtags'];
		                              	foreach ($terms2 as $term2){ 
		                              		$selected2 = '';
		                              		if(in_array($term2->slug, $tags2)){
		                              			$selected2 = ' selected ';
		                              		}
		                            	?>
		                                 	<option value="<?php echo $term2->slug; ?>" <?php echo $selected2; ?> ><?php echo $term2->name; ?></option>
		                           <?php } ?>
		                        </select>
		                     </div>
		                  </div>
						  <?php } ?>
		                  <div class="col-12 col-sm-6 col-lg-3">
		                     <div class="submit_btn d-flex justify-content-end">
		                        <input value="Search" class="button blue_btn" type="submit">
		                       <a class="button blue_btn" href="<?php echo home_url($_GET['post_type']); ?>">Clear</a>
		                     </div>
		                  </div>
		               </div>
		            </form>
		         </div>
<?php if ( have_posts() ) {
	?>
	<!-- <header class="page-header alignwide">
		<h1 class="page-title">
			<?php
			printf(
				/* translators: %s: Search term. */
				esc_html__( 'Results for "%s"', 'twentytwentyone' ),
				'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
			);
			?>
		</h1>
	</header> --><!-- .page-header -->

	<div class="search-result-count default-max-width">
		<?php
		printf(
			esc_html(
				/* translators: %d: The number of search results. */
				_n(
					'We found %d result for your search.',
					'We found %d results for your search.',
					(int) $wp_query->found_posts,
					'twentytwentyone'
				)
			),
			(int) $wp_query->found_posts
		);
		?>
	</div><!-- .search-result-count -->
	<?php
	// Start the Loop.
	while ( have_posts() ) {
		the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		get_template_part( 'template-parts/content/content-search', get_post_format() );
	} // End the loop.

	// Previous/next page navigation.
	//twenty_twenty_one_the_posts_navigation();
	the_posts_pagination();

	// If no content, include the "No posts found" template.
} else {
	get_template_part( 'template-parts/content/content-none' );
}
?>

	    	</div>
	    </div>
	</section>
</div>

<?php get_footer();
