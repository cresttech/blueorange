<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
$pageid = get_the_ID();
$pdf_insight = get_field('pdf_insight', $pageid);
?>
<div class="page-footer">
<img src="" class="fix_pos d-none">
<?php if ( !is_search() ) { ?>
<div class="get__started wi_full py_3">
    <div class="container-xxl">
        <div class="sec__bg">
            <video id="PaternVideo" autoplay="" muted="" loop="" playsinline="" width="100%" height="100%">
                <source src="<?php bloginfo('template_url') ?>/newimages/network-video.mp4" type="video/mp4">
            </video>
            <div class="sec_title text-center mb-2 position-relative">
                <h2 class="text-uppercase"><?php if(get_field('heading_hero', $pageid) != '') { the_field('heading_hero', $pageid); } else { the_field('text', 'options'); } ?></h2>
                <?php if(get_field('content_hero', $pageid) != '') { the_field('content_hero', $pageid); } ?>
            </div>
            <div class="btn_block justify-content-center position-relative">
                <?php
                    if(!is_page(51)){ 
                        $button_link =  get_field('button_link', 'options'); 
                    } else {
                        $button_link = '';
                    }
				if(get_field('button_text_hero', $pageid) != '') {
                ?>
                <a href="<?php the_field('button_link_hero', $pageid); ?>" class="button orange_btn"><?php the_field('button_text_hero', $pageid); ?> <i class="fa-solid fa-angle-right"></i></a>
				<?php } else { ?>
                <a href="<?php echo $button_link; ?>" class="button orange_btn"><?php the_field('button_text', 'options'); ?> <i class="fa-solid fa-angle-right"></i></a>
				<?php } ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<footer class="wi_full py_3 <?php echo $pageid; ?>">
    <div class="container-xxl">
        <div class="row">
            <div class="col-12 col-lg-3 ftr_logo_col">
                <div class="footer_logo">
                    <a href="<?php echo site_url(); ?>/"><img src="<?php the_field('footer_logo', 'options'); ?>" class="flogo_siz"></a>
                    <div class="ftr_logos large_dev">
                        <?php if( have_rows('certificates', 'options') ):
						while ( have_rows('certificates', 'options') ) : the_row();	?>
						<img src="<?php the_sub_field('image', 'options'); ?>" alt="#">
						<?php endwhile; endif;?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 ftr_nav_col">
				<div class="row">
                    <div class="col_item">
                        <div class="col_heading">Services</div>
                        <ul>
							<?php if( have_rows('services_links', 'options') ):
							while ( have_rows('services_links', 'options') ) : the_row();	?>
                            <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></li>
							<?php endwhile; endif;?>
                        </ul>
                    </div>
                    <div class="col_item">
                        <div class="col_heading">Industries</div>
                        <ul>
                           <?php if( have_rows('industries_link', 'options') ):
							while ( have_rows('industries_link', 'options') ) : the_row();	?>
                            <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></li>
							<?php endwhile; endif;?>
                        </ul>
                    </div>
                    <div class="col_item">
                        <div class="col_heading">Resources</div>
                        <ul>
                            <?php if( have_rows('resources_links', 'options') ):
							while ( have_rows('resources_links', 'options') ) : the_row();	?>
                            <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></li>
							<?php endwhile; endif;?>
                        </ul>
                    </div>
					<div class="col_item">
						<div class="col_heading">About</div>
						<ul class="join_ul">
    						<li><a href="/about-us/">About Us</a></li>
    						<li><a href="/leadership-team/">Leadership Team</a></li>
    						<li><a href="https://blue-orange-digital.breezy.hr/" target="_blank">Careers</a></li>
    						<li><a href="/privacy-policy/">Privacy Policy</a></li>
						</ul>
						<div class="col_heading">Partners</div>
						<ul>
                            <?php if( have_rows('partners_links', 'options') ):
							while ( have_rows('partners_links', 'options') ) : the_row();	?>
                            <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></li>
							<?php endwhile; endif;?>
						</ul>
					</div>
				</div>
            </div>
            <div class="col-12 col-lg-3 ftr_contact">
                <div class="col_heading">Contacts</div>
                <div class="footer_address">
                    <address><img src="<?php bloginfo('template_url') ?>/assets/images/icon-location.svg"><?php the_field('address', 'options'); ?></address>
                    <a href="mailto: <?php the_field('email', 'options'); ?>"><img src="<?php bloginfo('template_url') ?>/assets/images/icon-email.svg"><?php the_field('email', 'options'); ?></a>
                    <a href="tel: <?php $phone = get_field('phone', 'options');  echo str_replace(array( '(', ')', ' ', '-' ), '', $phone);  ?>"><img src="<?php bloginfo('template_url') ?>/assets/images/icon-phone.svg"><?php the_field('phone', 'options'); ?></a>
                </div>
                <div class="footer_social">
                    <?php if( have_rows('social_links', 'options') ):
                    while ( have_rows('social_links', 'options') ) : the_row(); ?>
                    <a href="<?php the_sub_field('link', 'options'); ?>" target="_blank"><img src="<?php the_sub_field('icon', 'options'); ?>"></a>
                    <?php endwhile; endif;?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl">
        <div class="ftr_cpyrgt">
            <p><span>© <?php echo date('Y'); ?> All Rights Reserved</span> <a href="<?php echo site_url(); ?>/privacy-policy/">Privacy policy</a></p>
        </div>
    </div>
</footer>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/bootstrap.bundle.min.js"></script> 
<script src="<?php bloginfo('template_url') ?>/assets/js/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/jquery.multiselect.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/custom.js?ver=1"></script>

<!-- AOS Animation ------->
<script>
$(function() {
    AOS.init({
        once: true,
        // disable: function() {
        //     var maxWidth = 1200;
        //     return window.innerWidth < maxWidth;
        // }
    });
});
</script>

<!-- Header Search -->
<script>
$(document).ready(function() {
$('button.search_btn').on('click', function(){
    // alert('test');
    $('#search').addClass('search-visible');
    $('#search > form > input[type="search"]').focus();
});
$('#search .close').on('click', function(){
    $('#search').removeClass('search-visible');
});
});                     
</script>

<!-- Site Header Menu -->
<script>
    const menu = document.querySelector(".menu");
    const menuMain = menu.querySelector(".menu-main");
    const goBack = menu.querySelector(".go-back");
    const menuTrigger = document.querySelector(".mobile-menu-trigger");
    const closeMenu = menu.querySelector(".mobile-menu-close");
    let subMenu;
    menuMain.addEventListener("click", (e) =>{
    if(!menu.classList.contains("active")){
        return;
    }
    if(e.target.closest(".menu-item-has-children")){
     const hasChildren = e.target.closest(".menu-item-has-children");
      showSubMenu(hasChildren);
    }
    });
    goBack.addEventListener("click",() =>{
     hideSubMenu();
    })
    menuTrigger.addEventListener("click",() =>{
     toggleMenu();
    })
    closeMenu.addEventListener("click",() =>{
     toggleMenu();
    })
    document.querySelector(".menu-overlay").addEventListener("click",() =>{
    toggleMenu();
    })
    function toggleMenu(){
    menu.classList.toggle("active");
    document.querySelector(".menu-overlay").classList.toggle("active");
    }
    function showSubMenu(hasChildren){
    subMenu = hasChildren.querySelector(".sub-menu");
    subMenu.classList.add("active");
    subMenu.style.animation = "slideLeft 0.5s ease forwards";
    const menuTitle = hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
    menu.querySelector(".current-menu-title").innerHTML=menuTitle;
    menu.querySelector(".mobile-menu-head").classList.add("active");
    }

    function  hideSubMenu(){  
    subMenu.style.animation = "slideRight 0.5s ease forwards";
    setTimeout(() =>{
       subMenu.classList.remove("active");  
    },300); 
    menu.querySelector(".current-menu-title").innerHTML="";
    menu.querySelector(".mobile-menu-head").classList.remove("active");
    }

    window.onresize = function(){
    if(this.innerWidth >991){
        if(menu.classList.contains("active")){
            toggleMenu();
        }
    }
    }
</script>

<script>
$(window).load(function() {
    $('.select2').select2({
    });
});

$('#select_services').multiselect({
    columns: 1,
    texts: {
        placeholder: 'Select Services'
    }
});
$('#select_technology').multiselect({
    columns: 1,
    texts: {
        placeholder: 'Select Technologies'
    }
});
$('#select_industry').multiselect({
    columns: 1,
    texts: {
        placeholder: 'Select Industries'
    }
});
</script>
<?php wp_footer(); ?>

<script>
/* document.addEventListener( 'wpcf7mailsent', function( event ) {
if(event.detail.contactFormId == 2709){
var redirect_link = "https://blueorange.digital/wp-content/uploads/2025/01/White_Paper_Driving_Real_Estate_Growth_Through_Data_Integration.pdf";
}
setTimeout( () => {
window.open(redirect_link, '_blank');
}, 10 ); // Wait for 3 seconds to redirect.
}, false ); */
document.addEventListener('wpcf7mailsent', function (event) {
if (event.detail.contactFormId == 2709) {
var download_link = "<?php echo $pdf_insight; ?>";

setTimeout(() => {
var link = document.createElement('a');
link.href = download_link;
link.download = ''; // Leaving the filename empty uses the default filename of the file.
document.body.appendChild(link);
link.click();
document.body.removeChild(link); // Clean up the DOM
}, 10); // Wait for 10 milliseconds
}
}, false); 
</script>
</body>
</html>