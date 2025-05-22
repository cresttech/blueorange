<?php
/*
Template Name: Contact Page
*/
get_header();
?>
<div class="page-content no_header_page contact_page">
<section class="contact_frame wi_full">
    <div class="container-xxl">
        <div class="row">
            <div class="col-12 mx-auto">
            	<div class="calendr__wrapper">
	                <!-- Calendly inline widget begin -->
					<div class="calendly-inline-widget" data-url="https://calendly.com/d/ckf5-ww7-nx7/free-consultation" style="min-width:320px;height:700px;"></div>
					<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
					<!-- Calendly inline widget end -->
				</div>
            </div>
        </div>
    </div>
</section>
<section class="contact_section wi_full">
    <div class="container-xxl">
    	<div class="form_wrapper">
	        <div class="row flex-lg-row-reverse">
	            <div class="col-12 col-lg-6 ml-auto mb-4 mb-lg-0">
	            	<div class="contact-form light_grey">
	            		<h2 class="text_color">Send us a message</h2>
						<!--<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
						<script>
						  hbspt.forms.create({
						    region: "na1",
						    portalId: "7577521",
						    formId: "e1c6a1b6-052e-432d-9284-9c5864683740"
						  });
						</script>-->
						<?php echo do_shortcode('[contact-form-7 id="0e38652" title="Contact Us Form"]'); ?>
	                </div>
	            </div>
	            <div class="col-12 col-lg-5">
	                <div class="reach_us light_grey">
	                	<h2 class="text_color"><?php the_field('heading'); ?></h2>
	                	<?php the_field('content'); ?>
	                	<div class="contact_list">
	                		<a href="mailto:<?php the_field('email'); ?>"><i class="fas fa-envelope"></i> <?php the_field('email'); ?></a>
	                		<a href="tel:<?php the_field('phone'); ?>"> <i class="fas fa-phone"></i><?php the_field('phone'); ?></a>
	                		<a target="_blank" href="https://www.google.com/maps/place/750+Lexington+Ave+9th+floor,+New+York,+NY+10022,+USA/@40.7626385,-73.9705582,17z/data=!4m13!1m7!3m6!1s0x89c258e57f4453bb:0x41863ee1b9536f6d!2s750+Lexington+Ave+9th+floor,+New+York,+NY+10022,+USA!3b1!8m2!3d40.7626385!4d-73.9683695!3m4!1s0x89c258e57f4453bb:0x41863ee1b9536f6d!8m2!3d40.7626385!4d-73.9683695"><i class="fas fa-location-dot"></i> <?php the_field('address_1'); ?></a>
	                		<a target="_blank" href="https://www.google.com/maps/place/201+N+Union+St+Suite+110,+Alexandria,+VA+22314,+USA/data=!4m2!3m1!1s0x89b7b0f67113dfb5:0x52d8d042f08fda2e?sa=X&amp;ved=2ahUKEwjq56O0z9z3AhVFA9QKHbavBqQQ8gF6BAgCEAE" target="_blank" rel="noopener"><i class="fas fa-location-dot"></i> <?php the_field('address_2'); ?></a>
	                	</div>
	                	<div class="contact_social">
							<?php if( have_rows('social_links') ):
							while ( have_rows('social_links') ) : the_row();	?>
	                		<a href="<?php the_sub_field('link'); ?>" target="_blank">
	                			<img src="<?php the_sub_field('icon'); ?>">
	                		</a>
							<?php endwhile; endif;?>
	                	</div>
	                </div>
	            </div>
	        </div>
	    </div>
    </div>
    <div class="map_wrapper">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3021.9720940958205!2d-73.9705582!3d40.7626385!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258e57f4453bb%3A0x41863ee1b9536f6d!2s750%20Lexington%20Ave%209th%20floor%2C%20New%20York%2C%20NY%2010022%2C%20USA!5e0!3m2!1sen!2s!4v1653393123267!5m2!1sen!2s" width="100%" height="500px" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
</div>
<?php get_footer(); ?>