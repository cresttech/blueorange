<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/bootstrap.min.css"/>
<?php $searchpage = $_GET['s']; ?>
<?php if($searchpage != '') { ?>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/style.css?ver=<?php echo date('h:i:s') ?>"/>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/media.css?ver=<?php echo date('h:i:s') ?>"/>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/newcss/style-new.css?ver=<?php echo date('h:i:s') ?>"/>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/newcss/responsive-new.css?ver=<?php echo date('h:i:s') ?>"/>
<?php } elseif(!is_front_page() && !is_home() && !is_page(array(1131, 1133, 1135, 1137, 1139, 194, 192, 712, 2604, 2353, 2456, 2714, 590, 520, 924, 3265, 479, 1047, 518, 4408,3160,2748)) && !is_singular( 'services' ) && !is_404() && !wp_get_post_parent_id( get_the_ID() ) == 2714) { ?>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/style.css?ver=<?php echo date('h:i:s') ?>"/>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/media.css?ver=<?php echo date('h:i:s') ?>"/>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/newcss/style-new.css?ver=<?php echo date('h:i:s') ?>"/>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/newcss/responsive-new.css?ver=<?php echo date('h:i:s') ?>"/>
<?php } else { ?>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/newcss/style-new.css?ver=<?php echo date('h:i:s') ?>"/>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/newcss/responsive-new.css?ver=<?php echo date('h:i:s') ?>"/>
<?php } ?>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/owl.carousel.min.css"/>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/owl.theme.default.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css"/>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/jquery.multiselect.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1R18QSHDDZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1R18QSHDDZ');
</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="header">
    <div class="container-xxl position-relative">
        <div class="row v-center">
            <div class="header-item item-left">
                <a class="navbar-brand logo" href="<?php echo site_url(); ?>/">
                    <img src="<?php the_field('logo', 'options'); ?>" alt="logo">
                </a>
            </div>
            <!-- menu start here -->
            <div class="header-item item-center">
                <div class="menu-overlay"></div>
                <nav class="menu">
                    <div class="mobile-menu-head">
                        <div class="go-back"><i class="fa fa-angle-left"></i></div>
                        <div class="current-menu-title"></div>
                        <div class="mobile-menu-close">&times;</div>
                    </div>
                    <ul class="menu-main">
                        <!-- <li>
                            <a href="#">Home</a>
                        </li> -->
                        <li class="menu-item-has-children">
                            <a href="#">Services <i class="fas fa-angle-down"></i></a>
                            <div class="sub-menu mega-menu mega-menu-column-4">
                                <div class="list-item col_equal_3">
                                    <h4 class="title">Services</h4>
                                    <div class="row">
										<?php if( have_rows('services_links_h', 'options') ):
										while ( have_rows('services_links_h', 'options') ) : the_row();	?>
                                        <div class="col_sub_col">
                                            <a href="<?php the_sub_field('link'); ?>" class="col_inner">
                                                <div class="text_side">
                                                    <h4 class="title"><?php the_sub_field('title'); ?></h4>
                                                    <p><?php the_sub_field('text'); ?></p>
                                                </div>
                                                <div class="btn_side">
                                                    <span><img src="<?php bloginfo('template_url') ?>/newimages/arrow_upward.svg" alt="#"></span>
                                                </div>
                                            </a>
                                        </div>
										<?php endwhile; endif;?>
                                    </div>
                                </div>
                                <div class="list-item col_equal_1">
                                    <a href="<?php the_field('post__link', 'options'); ?>" class="single_postt">
                                        <img src="<?php the_field('post_image', 'options'); ?>">
                                        <h4><?php the_field('featured_post_title', 'options'); ?></h4>
                                        <?php the_field('featured_post_text', 'options'); ?>
                                        <div class="learn_more">Learn More <i class="fa fa-angle-right"></i></div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Industries <i class="fas fa-angle-down"></i></a>
                            <div class="sub-menu mega-menu mega-menu-column-4">
                                <div class="list-item col_equal_3">
                                    <h4 class="title">Industries</h4>
                                    <div class="row">
										<?php if( have_rows('industries_links_h', 'options') ):
										while ( have_rows('industries_links_h', 'options') ) : the_row();	?>
                                        <div class="col_sub_col">
                                            <a href="<?php the_sub_field('link'); ?>" class="col_inner">
                                                <div class="text_side">
                                                    <h4 class="title"><?php the_sub_field('title'); ?></h4>
                                                    <p><?php the_sub_field('text'); ?></p>
                                                </div>
                                                <div class="btn_side">
                                                    <span><img src="<?php bloginfo('template_url') ?>/newimages/arrow_upward.svg" alt="#"></span>
                                                </div>
                                            </a>
                                        </div>
										<?php endwhile; endif;?>
                                    </div>
                                </div>
                                <div class="list-item col_equal_1">
                                    <a href="<?php the_field('post__link_1', 'options'); ?>" class="single_postt">
                                        <img src="<?php the_field('post_image_1', 'options'); ?>">
                                        <h4><?php the_field('featured_post_title_1', 'options'); ?></h4>
                                        <?php the_field('featured_post_text_1', 'options'); ?>
                                        <div class="learn_more">Learn More <i class="fa fa-angle-right"></i></div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Resources <i class="fas fa-angle-down"></i></a>
                            <div class="sub-menu mega-menu mega-menu-column-4">
                                <div class="list-item col_equal_2">
                                    <h4 class="title">Resources</h4>
                                    <div class="row">
                                        <?php if( have_rows('resources_links_h', 'options') ):
										while ( have_rows('resources_links_h', 'options') ) : the_row();	?>
                                        <div class="col_sub_col">
                                            <a href="<?php the_sub_field('link'); ?>" class="col_inner">
                                                <div class="text_side">
                                                    <h4 class="title"><?php the_sub_field('title'); ?></h4>
                                                    <p><?php the_sub_field('text'); ?></p>
                                                </div>
                                                <div class="btn_side">
                                                    <span><img src="<?php bloginfo('template_url') ?>/newimages/arrow_upward.svg" alt="#"></span>
                                                </div>
                                            </a>
                                        </div>
										<?php endwhile; endif;?>
                                    </div>
                                </div>
                                <div class="list-item col_equal_2 border_left_">
                                    <div class="two_post_view row">
										<?php if( have_rows('featured_posts', 'options') ):
										while ( have_rows('featured_posts', 'options') ) : the_row();	?>
                                        <a href="<?php the_sub_field('link'); ?>" class="single_postt">
                                            <img src="<?php the_sub_field('image'); ?>">
                                            <h4><?php the_sub_field('title'); ?></h4>
                                            <?php the_sub_field('text'); ?>
                                            <div class="learn_more">Learn More <i class="fa fa-angle-right"></i></div>
                                        </a>
										<?php endwhile; endif;?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Partners <i class="fas fa-angle-down"></i></a>
                            <div class="sub-menu mega-menu mega-menu-column-4">
                                <div class="list-item col_equal_3">
                                    <h4 class="title">Partners</h4>
                                    <div class="row partner_menu_row">
										<?php if( have_rows('partner_links_h', 'options') ):
										while ( have_rows('partner_links_h', 'options') ) : the_row();	?>
                                        <div class="col_sub_col">
                                            <a <?php if(get_sub_field('link') != '') { ?>href="<?php the_sub_field('link'); ?>"<?php } ?>class="col_inner <?php if(get_sub_field('link') != '') { echo 'active_link'; } ?>">
                                                <img src="<?php the_sub_field('icon'); ?>" alt="#"><span><?php the_sub_field('title'); ?></span>
                                            </a>
                                        </div>
										<?php endwhile; endif;?>
                                        <div class="col_sub_col">
                                            <a href="/partners/" class="col_inner">Discover all our technology partnerships <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item col_equal_1">
									<?php if( have_rows('featured_posts_1', 'options') ):
									while ( have_rows('featured_posts_1', 'options') ) : the_row();	?>
                                    <a href="<?php the_sub_field('link'); ?>" class="single_postt">
                                        <img src="<?php the_sub_field('image'); ?>">
                                        <h4><?php the_sub_field('title'); ?></h4>
                                        <?php the_sub_field('text'); ?>
                                        <div class="learn_more">Learn More <i class="fa fa-angle-right"></i></div>
                                    </a>
									<?php endwhile; endif;?>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">About <i class="fas fa-angle-down"></i></a>
                            <div class="sub-menu mega-menu mega-menu-column-4">
                                <div class="list-item col_equal_3">
                                    <h4 class="title">About</h4>
                                    <div class="row">
										<?php if( have_rows('about_links_h', 'options') ):
										$linkcount = 1;
										while ( have_rows('about_links_h', 'options') ) : the_row();	?>
                                        <div class="col_sub_col">
                                            <a href="<?php the_sub_field('link'); ?>" target="<?php if($linkcount == 3) { echo '_blank'; } ?>" class="col_inner">
                                                <div class="text_side">
                                                    <h4 class="title"><?php the_sub_field('title'); ?></h4>
                                                    <p><?php the_sub_field('text'); ?></p>
                                                </div>
                                                <div class="btn_side">
                                                    <span><img src="<?php bloginfo('template_url') ?>/newimages/arrow_upward.svg" alt="#"></span>
                                                </div>
                                            </a>
                                        </div>
										<?php $linkcount++; endwhile; endif;?>
                                    </div>
                                </div>
                                <div class="list-item col_equal_1">
                                    <div class="news_Letter">
                                        <h4>Newsletter</h4>
                                        <?php the_field('newsletter_text', 'options'); ?>
                                        <?php get_template_part( 'template-parts/hubspot-newsletter-form' ); ?>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="contact_btn_mobile">
                            <a href="/contact-us">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- menu end here -->
            <div class="header-item item-right">
                <button type="button" class="search_btn"><img src="<?php echo site_url(); ?>/wp-content/uploads/2024/04/search-icon.svg"></button>
                <a href="/contact-us" class="contact_btn_desktop">Contact Us <i class="fas fa-angle-right"></i></a>
                <!-- mobile menu trigger -->
                <div class="mobile-menu-trigger"><span></span> </div>
                <div id="search"> 
                    <form role="search" id="searchform" action="/" method="get">
                        <span class="close"><i class="fas fa-times"></i></span>
                        <input value="<?php the_search_query(); ?>" name="s" type="search" placeholder="Search..."/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>