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
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/style.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/media.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header> 
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?php echo site_url(); ?>/"><img src="<?php the_field('logo', 'options'); ?>" alt="logo"></a>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#Menu_sidebar">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="Menu_sidebar">
                <?php
				wp_nav_menu( array(
				'menu'              => 'Main Menu',
				'menu_class'        => 'navbar-nav ml-auto',
				'walker'          => new bs4navwalker())
				);
				?>
            </div>
        </div>
    </nav>  
</header>
