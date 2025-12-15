<?php
/*
Template Name: Industry Private Equity
*/
get_header();
?>
<div class="page-content industry_page">
<section class="banner_sec inner_banner wi_full" style="background-image: url(<?php the_field('banner_image'); ?>), linear-gradient(to bottom, #192C47, #1B375F);">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-6 title_col text-white">
                <div class="subtitle text-uppercase"><?php the_field('sub_heading_1'); ?></div>
                <h1 class="text-uppercase mb-lg-0"><?php the_field('heading_1'); ?></h1>
            </div>
            <div class="col-lg-6 ml-auto content_col light_blue">
                <?php the_field('content_1'); ?>
                <div class="btn_block">
                    <a href="<?php the_field('button_link_1'); ?>" class="button orange_btn"><?php the_field('button_text_1'); ?> <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
        </div>
         <div class="banner_logos_wraper real_estate_bnr_logo mt-5" data-aos="fade-up" data-aos-duration="2500">
            <div class="client--wrapper">
				<?php if( have_rows('banner_logos') ):
				while ( have_rows('banner_logos') ) : the_row();	?>
					<div class="item text-center"><img src="<?php the_sub_field('image'); ?>" alt="#"></div>
				<?php endwhile; endif;?>
            </div>
            <div class="client--wrapper">
                <?php if( have_rows('banner_logos') ):
				while ( have_rows('banner_logos') ) : the_row();	?>
					<div class="item text-center"><img src="<?php the_sub_field('image'); ?>" alt="#"></div>
				<?php endwhile; endif;?>
            </div>
        </div>
    </div>
</section>
<section class="data_services wi_full py_3 pe_firm_face">
    <div class="container-xxl">
        <div class="row align-items-end" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-5 title_col">
                <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_3'); ?></div>
                <h2 class="text-uppercase text_color"><?php the_field('heading_3'); ?></h2>
            </div>
        </div>
        <div class="data_service_list row" data-aos="fade-up" data-aos-duration="2000">
            <?php if( have_rows('content_4_1') ):
			while ( have_rows('content_4_1') ) : the_row();	?>
            <div class="col-sm-6 col-lg-3 ds--item">
                <div class="item--inner light_grey">
                    <img src="<?php the_sub_field('icon'); ?>" alt="#" width="35px" class="mb-3" />
                    <h4 class="text_color"><?php the_sub_field('title'); ?></h4>
                    <?php the_sub_field('content'); ?>
                </div>
            </div>
            <?php endwhile; endif;?>
        </div>
    </div>
</section>
<section class="overview_blueorange pe_alue_model wi_full">
    <div class="container-xxl">
        <div class="sec_bgimg" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/newimages/pattern-bg-overview.svg), linear-gradient(to bottom, #192C47, #1B375F);" data-aos="fade-up" data-aos-duration="1500">
            <div class="overview--wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-7 title_col light_blue">
                        <div class="subtitle text-uppercase light_blue"><?php the_field('sub_heading_4'); ?></div>
                        <h2 class="text-uppercase text-white"><?php the_field('heading_4'); ?></h2>
                        <?php the_field('content_6'); ?>
                        <div class="model_creation row">
                            <?php if( have_rows('content_7') ):
			                while ( have_rows('content_7') ) : the_row();	?>
                            <div class="col-sm-6 list--item">
                                <div class="item--inner light_blue">
                                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/12/tick-icon.svg" alt="#" width="35px" class="mb-3" />
                                    <h4 class="text-white"><?php the_sub_field('title'); ?></h4>
                                    <?php the_sub_field('text'); ?>
                                </div>
                            </div>
                            <?php endwhile; endif;?>
                        </div>
                    </div>
                    <div class="col-lg-5 medel_img_col">
                        <img src="<?php the_field('image_3'); ?>" class="w-100 mt-4 mt-lg-0" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service_built_pe wi_full py_3 secbg_lite_blue">
    <div class="container-xxl">
        <div class="title_col" data-aos="fade-up" data-aos-duration="1500">
            <div class="subtitle text-uppercase light_grey"><?php the_field('heading_5'); ?></div>
            <h2 class="text-uppercase text_color"><?php the_field('sub_heading_5'); ?></h2>
        </div>
        <div class="slider_wrapper mt-5">
            <div class="pe_service owl-carousel">
                <?php if( have_rows('content_9') ):
			    while ( have_rows('content_9') ) : the_row();	?>
                <div class="item light_grey">
                    <div class="icon--btn mb-4">
                        <span class="item--icon d-flex align-items-center">
                            <img src="<?php the_sub_field('icon'); ?>">
                        </span>
                    </div> 
                    <h4 class="mb-3 text-orange"><?php the_sub_field('title'); ?></h4>
                    <h5 class="text_color"><?php the_sub_field('sub_title'); ?></h5>
                    <p><?php the_sub_field('text'); ?></p>
                </div>
                <?php endwhile; endif;?>
            </div>
        </div>
    </div>
</section>

<section class="how_we_partner_pe wi_full py_3">
    <div class="container">
        <div class="text-center">
            <h2 class="how_we_partner_pe_heading text-white"><?php the_field('heading_6'); ?></h2>
            <?php the_field('content_10'); ?>
            <div class="timeline_col">
                <div class="timeline_process position-relative">
                    <div class="progress-line"></div>
                    <div class="timeline_steps">
                        <?php if( have_rows('content_11') ):
                        $count = 1;
			            while ( have_rows('content_11') ) : the_row();	?>
                        <div class="tl_item">
                            <div class="inner_tl_item">
                                <h3><span>0<?php echo $count; ?></span> <img src="<?php the_sub_field('icon'); ?>"></h3>
                                <h4><?php the_sub_field('title'); ?></h4>
                                <p><?php the_sub_field('text'); ?></p>
                            </div>
                        </div>
                        <?php $count++; endwhile; endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="case_study wi_full py_3 pe_case_study_sec">
    <div class="container-xxl">
        <div class="title_col" data-aos="fade-up" data-aos-duration="1500">
            <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_7'); ?></div>
            <!-- <h2 class="text-uppercase text_color">Services Built for PE <br />Value Creation</h2> -->
        </div>

        <div class="row justify-content-between row_space">
            <div class="col-lg-6">
                <div class="case_study_content">
                    <div class="row justify-content-between align-items-center mb-4">
                        <div class="col-8">
                            <h2><?php the_field('heading_7'); ?></h2>
                        </div>
                        <div class="col-4">
                            <img src="<?php the_field('image_4'); ?>" alt="">
                        </div>
                    </div>
                    <?php if( have_rows('content_16') ):
			        while ( have_rows('content_16') ) : the_row();	?>
                    <div class="mb-4 light_grey">
                        <h5 class="text_color"><?php the_sub_field('title'); ?></h5>
                        <p><?php the_sub_field('text'); ?></p>
                    </div>
                    <?php endwhile; endif;?>
                    <div class="case_study_inner_content">
                        <div class="case_study_results">
                            <h4 class="text-white"><?php the_field('heading_10'); ?></h4>
                            <ul>
                                <?php if( have_rows('content_17') ):
			                    while ( have_rows('content_17') ) : the_row();	?>
                                <li class="text-white"><span class="text-orange"><?php the_sub_field('title'); ?></span> <?php the_sub_field('text'); ?></li>
                                <?php endwhile; endif;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="accordion case-accordion-x" id="caseAccordionX">
                <!-- Item 1 - OPEN BY DEFAULT -->
                 <?php if( have_rows('content_18') ):
                 $count = 1;
                while ( have_rows('content_18') ) : the_row();	?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="caseXHeading<?php echo $count; ?>">
                        <button class="accordion-button collapsed <?php //if($count != 1) { echo 'collapsed'; } ?>" type="button" data-toggle="collapse" data-target="#caseXCollapse<?php echo $count; ?>" aria-controls="caseXCollapse<?php echo $count; ?>">
                            <span><?php the_sub_field('title'); ?></span>
                            <?php if(get_sub_field('logo') != '') { ?>
                                <img src="<?php the_sub_field('logo'); ?>" alt="">
                            <?php } ?>
                        </button>
                    </h2>
                    <div id="caseXCollapse<?php echo $count; ?>" class="accordion-collapse collapse <?php //if($count == 1) { echo 'show'; } ?>" aria-labelledby="caseXHeading<?php echo $count; ?>" data-parent="#caseAccordionX">
                        <div class="accordion-body">
                            <p class="light_grey"><?php the_sub_field('text'); ?></p>
                            <div class="result_box">
                                <?php the_sub_field('results'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $count++; endwhile; endif;?>
            </div>

            </div>
        </div>
    </div>

</section>

<section class="beyond_automation py_3" style="background: #F2F6F9;">
    <div class="container">
        <div class="image_sec">
            <div class="subtitle text-uppercase light_grey"><?php the_field('sub_heading_8'); ?></div>
            <h2><?php the_field('heading_8'); ?></h2>
            <div class="text-center">
                <img src="<?php the_field('image_5'); ?>" class="mt-4 mt-lg-0" />
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <img src="<?php the_field('image_6'); ?>" class="w-100 mb-4 mb-lg-0" />
            </div>
            <div class="col-lg-6">
                <div class="accordion" id="accordionExample">
                    <?php if( have_rows('content_19') ):
                     $count = 1;
                     while ( have_rows('content_19') ) : the_row();	?>
                    <div class="accordion-item accordion-item1">
                        <h3 class="accordion-header">
                            <span class="subtitle text-uppercase light_grey">0<?php echo $count; ?></span> 
                        <button class="accordion-button <?php if($count != 1) { echo 'collapsed'; } ?>" type="button" data-toggle="collapse" data-target="#collapse<?php echo $count; ?>" aria-expanded="true" aria-controls="collapse<?php echo $count; ?>">
                            <?php the_sub_field('heading'); ?>
                        </button>
                        </h3>
                        <div id="collapse<?php echo $count; ?>" class="accordion-collapse collapse <?php if($count == 1) { echo 'show'; } ?>" data-parent="#accordionExample">
                        <div class="accordion-body">
                            <h3 class="text_blue"><?php the_sub_field('title'); ?></h3>
                            <div class="subtitle light_grey"><?php the_sub_field('text'); ?></div>
                        </div>
                        </div>
                    </div>
                     <?php $count++; endwhile; endif;?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why_bdigital_pe wi_full">
    <div class="sec_bgimg py_3" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2025/05/illustration-assessment-strategy.svg), linear-gradient(to bottom, #192C47, #1B375F); border-radius: 25px; background-size: cover;background-position: center;background-repeat: no-repeat;" data-aos="fade-up" data-aos-duration="1500">
        <div class="container-xxl">
            <div class="title_col" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="text-uppercase text-white"><?php the_field('heading_9'); ?></h2>
            </div>
            <div class="slider_wrapper mt-5">
                <div class="pe_why_blueorange owl-carousel">
                    <?php if( have_rows('content_15') ):
                    while ( have_rows('content_15') ) : the_row();?>	
                    <div class="item light_grey">
                        <h4 class="mb-3 text-orange"><?php the_sub_field('title'); ?></h4>
                        <?php the_sub_field('text'); ?>
                    </div>
                    <?php endwhile; endif;?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ready_to_drive py_3" style="background: #F2F6F9;">
    <div class="container">
        <div class="portfolio_info">
            <div class="d-flex justify-content-center mb-5 flex-wrap">
                <?php if( have_rows('counter') ):
                $count = 1;
                while ( have_rows('counter') ) : the_row();?>
                <div class="col-items light_grey">
                    <h2 class="text_color"><span class="countss"><?php the_sub_field('title'); ?></span><?php if($count < 3) { echo '+'; } ?></h2>
                    <p><?php the_sub_field('text'); ?></p>
                </div>
                <?php $count++; endwhile; endif;?>
            </div>
        </div>

        <div class="row align-items-center" style="background: #fff; border-radius: 22px;">
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="ready_to_drive_inner px-lg-5">
                    <h2 class="mb-4"><?php the_field('heading_11'); ?></h2>
                    <div class="subtitle text-uppercase light_grey mb-4"><?php the_field('content_20'); ?></div> 
                    <a href="<?php the_field('button_link_2'); ?>" class="button blue_btn"><?php the_field('button_text_2'); ?></a>
                </div>
            </div>
            <div class="col-lg-6 pr-0">
                <img src="<?php the_field('image_7'); ?>" class="w-100 mt-4 mt-lg-0" />
            </div>
        </div>
    </div>
</section>

</div>
<?php get_footer(); ?>

<script>
$(document).ready(function () {
  const $steps = $('.tl_item');
  const totalSteps = $steps.length;
  const delayPerStep = 700;
  const totalDuration = totalSteps * delayPerStep;

  const observer = new IntersectionObserver(function (entries, observer) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        // Show steps
        $steps.each(function (i) {
          const $step = $(this);
          setTimeout(() => {
            $step.addClass('visible');
          }, i * delayPerStep);
        });

        // Animate progress line
        const $progressLine = $('.progress-line');
        $progressLine.css({
            transition: `height ${totalDuration}ms ease-in-out`,
            height: '100%'
        });

        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  observer.observe(document.querySelector('.timeline_steps'));
});
</script>


<script>
    var countValues = [];

    // Collect the initial text values and reset them to 0
    $('.countss').each(function () {
        countValues.push($(this).text());
        $(this).text('0');
    });

    var isAlreadyRun = false;
    $(window).scroll(function () {
        if (isAlreadyRun) return;

        $('.ready_to_drive').each(function () {
            var bottom_of_object = $(this).offset().top + $(this).outerHeight() / 2;
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            if (bottom_of_window > bottom_of_object + 20) {
                $('.countss').each(function (index) {
                    $(this).prop('Counter', 0).animate({
                        Counter: countValues[index]
                    }, {
                        duration: 3500,
                        easing: 'swing',
                        step: function (now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                });
                isAlreadyRun = true;
                return false; // Break out of .each() early
            }
        });
    });
</script>



<style>
    .heirarchy_wrapper{
        height: 28rem;
    }

    @media (max-width: 1200px) {
        .heirarchy_wrapper{
            height: 26rem;
        }
    }

    @media (max-width: 1200px) {
        
        .heirarchy_wrapper{
            height: 20rem;
        }
    }

    @media (max-width: 768px) {
        .heirarchy_wrapper{
            height: 16rem;
        }
    }

    @media (max-width: 672px) {
        .heirarchy_wrapper{
            height: 14rem;
        }
        .animate-box img {
            width: 25%;
        }
    }

    @media (max-width: 425px) {
        .heirarchy_wrapper{
            height: 10rem;
        }

        .path1 {
            stroke-width: 2 !important;
        }
        .center-path {
            stroke-width: 2 !important;
        }
        .path2 {
            stroke-width: 2 !important;
        }
        .path3 {
            stroke-width: 2 !important;
        }
        .path4 {
            stroke-width: 2 !important;
        }
    }

.animate-box img {
    z-index: 0;
    max-width: 100%;
    width: 25%;
}

.path1 {
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    fill: none;
    stroke-width: 3;
}
.center-path {
    stroke-dasharray: 1100;
    stroke-dashoffset: 1100;
    fill: none;
    stroke-width: 3;
}

.path2 {
    /* d: path("M 220 300 C 220 390 230 380 150 385"); */
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    fill: none;
    stroke-width: 3;
}

.path3 {
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    fill: none;
    stroke-width: 3;
}

.path4 {
    /* d: path("M 356 300 C 355 390 355 380 425 385"); */
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    fill: none;
    stroke-width: 3;
}


.top-right-img,
.top-left-img,
.bottom-right-img,
.bottom-left-img {
    opacity: 0;
    z-index: 1 !important;
}

.left-img1,
.left-img2,
.left-img3,
.left-img4,
.left-img5,
.right-img1,
.right-img2,
.right-img3,
.center-img
{
    opacity: 0;
}

.center-img
{
    display: block;
    margin: 1px auto;
}

.left-img2{
    animation: visible2 2s 1s ease forwards;
}

.right-img1{
    animation: visible2 2s 1s ease forwards;
}


/* animation flow */

.outer-animate-box.animate-started .left-img1{
    animation: visible 2s 1s ease forwards;
}

.outer-animate-box.animate-started .left-img2{
    animation: visible 2s 1s ease forwards;
}

.outer-animate-box.animate-started .left-img3 {
    animation: visible 2s 1s ease forwards;
}

.outer-animate-box.animate-started .left-img4 {
    animation: visible 2s 1s ease forwards;
}

.outer-animate-box.animate-started .left-img5 {
    animation: visible 2s 1s ease forwards;
}

.outer-animate-box.animate-started .path1{
    animation: draw2 3s ease-in-out forwards;
}




.outer-animate-box.animate-started .center-img {
    animation: visible 2s 2.5s ease forwards;
}

/* .outer-animate-box.animate-started .center-path{
    animation: draw 4s 2.5s ease forwards;
} */




.outer-animate-box.animate-started .path2{
    animation: draw 3s 3.5s ease forwards;
}


.outer-animate-box.animate-started .right-img1{
    animation: visible 2s 4s ease forwards;
}

.outer-animate-box.animate-started .right-img2 {
    animation: visible 2s 4s ease forwards;
}

.outer-animate-box.animate-started .right-img3 {
    animation: visible 2s 4s ease forwards;
}






@keyframes draw {
    to {
        stroke-dashoffset: 0;
    }
}

@keyframes draw2 {
    to {
        stroke-dashoffset: 800;
    }
}

@keyframes visible {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

@keyframes visible2 {
    from {
        opacity: 0;
        transform: scale(0.8);
    }

    to {
        opacity: 1;
        transform: scale(1);
    }
}
</style>


<script>
    const distance = (x, y) => {
            console.log("dis", x-y)
            return (x-y);
        };

    function makeLines(centerTopLeft1, fromL1, id){
        document.querySelector(`#path${id}`).setAttribute("d",
            `M ${centerTopLeft1.x} ${centerTopLeft1.y} 
            Z H ${centerTopLeft1.x - distance(centerTopLeft1.x,fromL1.x)/20 } 
            Q ${centerTopLeft1.x - distance(centerTopLeft1.x,fromL1.x)/10} ${centerTopLeft1.y} ${centerTopLeft1.x - distance(centerTopLeft1.x,fromL1.x)/5} ${centerTopLeft1.y - distance(centerTopLeft1.y,fromL1.y)/6}
         C ${centerTopLeft1.x - distance(centerTopLeft1.x,fromL1.x)/5} ${centerTopLeft1.y - distance(centerTopLeft1.y,fromL1.y)/6},
           ${fromL1.x + distance(centerTopLeft1.x,fromL1.x)/2.5} ${fromL1.y + distance(centerTopLeft1.y,fromL1.y)/7}, 
           ${fromL1.x + distance(centerTopLeft1.x,fromL1.x)/2.5} ${fromL1.y + distance(centerTopLeft1.y,fromL1.y)/7} 
           Q ${fromL1.x + distance(centerTopLeft1.x,fromL1.x)/3.1} ${fromL1.y} ${fromL1.x + distance(centerTopLeft1.x,fromL1.x)/4} ${fromL1.y}
           H ${fromL1.x}
           `
        );
    }


    function makeLines2(centerTopRight1, fromR1, id){
        document.querySelector(`#path${id}`).setAttribute("d",
            `M ${centerTopRight1.x} ${centerTopRight1.y} 
            Z H ${centerTopRight1.x - distance(centerTopRight1.x,fromR1.x)/20 }
            Q ${centerTopRight1.x - distance(centerTopRight1.x,fromR1.x)/10} ${centerTopRight1.y} ${centerTopRight1.x - distance(centerTopRight1.x,fromR1.x)/5} ${centerTopRight1.y - distance(centerTopRight1.y,fromR1.y)/6}
         C ${centerTopRight1.x - distance(centerTopRight1.x,fromR1.x)/5} ${centerTopRight1.y - distance(centerTopRight1.y,fromR1.y)/6},
           ${fromR1.x + distance(centerTopRight1.x,fromR1.x)/2.5} ${fromR1.y + distance(centerTopRight1.y,fromR1.y)/7}, 
           ${fromR1.x + distance(centerTopRight1.x,fromR1.x)/2.5} ${fromR1.y + distance(centerTopRight1.y,fromR1.y)/7} 
           Q ${fromR1.x + distance(centerTopRight1.x,fromR1.x)/3.1} ${fromR1.y} ${fromR1.x + distance(centerTopRight1.x,fromR1.x)/4} ${fromR1.y}
           H ${fromR1.x}
           `
        );
    }

    function updatePaths() {
        const getMidCenter1 = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                // x: rect.left + rect.width / 2.2,
                x: rect.left - rect.width / 20,
                y: rect.top + rect.height / 3.33
            };
        };
        const getMidCenter2 = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                // x: rect.left + rect.width / 2.2,
                x: rect.left  - rect.width / 20,
                y: rect.top + rect.height / 2.5
            };
        };
        const getMidCenter3 = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                // x: rect.left + rect.width / 2.2,
                x: rect.left  - rect.width / 20,
                y: rect.top + rect.height / 2
            };
        };
        const getMidCenter4 = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                // x: rect.left + rect.width / 2.2,
                x: rect.left  - rect.width / 20,
                y: rect.top + rect.height / 1.66
            };
        };
        const getMidCenter5 = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                // x: rect.left + rect.width / 2.2,
                x: rect.left  - rect.width / 20,
                y: rect.top + rect.height / 1.42
            };
        };

        const getMidCenter6 = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                // x: rect.left + rect.width / 2.2,
                x: rect.right + rect.width / 20,
                y: rect.top + rect.height / 2.5
            };
        };
        const getMidCenter7 = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                // x: rect.left + rect.width / 2.2,
                x: rect.right + rect.width / 20,
                y: rect.top + rect.height / 2
            };
        };
        const getMidCenter8 = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                // x: rect.left + rect.width / 2.2,
                x: rect.right + rect.width / 20,
                y: rect.top + rect.height / 1.66
            };
        };
        

        const getMidLeft = (el) => {
            const rect = el.getBoundingClientRect();
            return {
                // x: rect.left + rect.width / 1.2,
                x: rect.left + rect.width ,
                y: rect.top + rect.height / 2
            };
        };

        const getMidRight = (el) => {
            const rect = el.getBoundingClientRect();
            return {
                x: rect.right - rect.width,
                y: rect.top + rect.height / 2
            };
        };

        const svg = document.querySelector("#svg-lines");
        const svgRect = svg.getBoundingClientRect();

        const left1 = document.querySelector(".left-img1");
        const left2 = document.querySelector(".left-img2");
        const left3 = document.querySelector(".left-img3");
        const left4 = document.querySelector(".left-img4");
        const left5 = document.querySelector(".left-img5");

        const center = document.querySelector(".center-img");

        const right1 = document.querySelector(".right-img1");
        const right2 = document.querySelector(".right-img2");
        const right3 = document.querySelector(".right-img3");

        const rel = (pt) => ({
            x: pt.x - svgRect.left,
            y: pt.y - svgRect.top
        });

        const fromL1 = rel(getMidLeft(left1));
        const fromL2 = rel(getMidLeft(left2));
        const fromL3 = rel(getMidLeft(left3));
        const fromL4 = rel(getMidLeft(left4));
        const fromL5 = rel(getMidLeft(left5));

        const centerTopLeft1 = rel(getMidCenter1(center));
        const centerTopLeft2 = rel(getMidCenter2(center));
        const centerTopLeft3 = rel(getMidCenter3(center));
        const centerTopLeft4 = rel(getMidCenter4(center));
        const centerTopLeft5 = rel(getMidCenter5(center));

        const centerTopRight1 = rel(getMidCenter6(center));
        const centerTopRight2 = rel(getMidCenter7(center));
        const centerTopRight3 = rel(getMidCenter8(center));

        const fromR1 = rel(getMidRight(right1));
        const fromR2 = rel(getMidRight(right2));
        const fromR3 = rel(getMidRight(right3));

        const ctrlOffset = 40;

        const distance = (x, y) => {
            console.log("dis", x-y)
            return (x-y);
        };

        makeLines(centerTopLeft1, fromL1, 1)
        makeLines(centerTopLeft2, fromL2, 2)
        // makeLines(centerTopLeft3, fromL3, 3)
        makeLines(centerTopLeft4, fromL4, 4)
        makeLines(centerTopLeft5, fromL5, 5)

        makeLines2(centerTopRight1, fromR1, 6)
        // makeLines2(centerTopRight2, fromR2, 7)
        makeLines2(centerTopRight3, fromR3, 8)

        document.querySelector(`#path3`).setAttribute("d",
            `M ${centerTopLeft3.x} ${centerTopLeft3.y} 
            Z H ${centerTopLeft3.x - distance(centerTopLeft3.x,fromL3.x)/20 } 
            Q ${centerTopLeft3.x - distance(centerTopLeft3.x,fromL3.x)/10} ${centerTopLeft3.y} ${centerTopLeft3.x - distance(centerTopLeft3.x,fromL3.x)/5} ${centerTopLeft3.y - distance(centerTopLeft3.y,fromL3.y)/6}
         C ${centerTopLeft3.x - distance(centerTopLeft3.x,fromL3.x)/5} ${centerTopLeft3.y - distance(centerTopLeft3.y,fromL3.y)/6},
           ${fromL3.x } ${fromL3.y}, 
           ${fromL3.x } ${fromL3.y} 
           H ${fromL3.x}
        //    Q ${fromL3.x + distance(centerTopLeft3.x,fromL3.x)/3.1} ${fromL3.y} ${fromL3.x + distance(centerTopLeft3.x,fromL3.x)/4} ${fromL3.y}
           `
        );

        document.querySelector(`#path7`).setAttribute("d",
            `M ${centerTopRight2.x} ${centerTopRight2.y} 
            Z H ${centerTopRight2.x - distance(centerTopRight2.x,fromR2.x)/20 }
            Q ${centerTopRight2.x - distance(centerTopRight2.x,fromR2.x)/10} ${centerTopRight2.y} ${centerTopRight2.x - distance(centerTopRight2.x,fromR2.x)/5} ${centerTopRight2.y - distance(centerTopRight2.y,fromR2.y)/6}
         C ${centerTopRight2.x - distance(centerTopRight2.x,fromR2.x)/5} ${centerTopRight2.y - distance(centerTopRight2.y,fromR2.y)/6},
           ${fromR2.x } ${fromR2.y}, 
           ${fromR2.x } ${fromR2.y} 
           H ${fromR2.x}
        //    Q ${fromR2.x + distance(centerTopRight2.x,fromR2.x)/3.1} ${fromR2.y} ${fromR2.x + distance(centerTopRight2.x,fromR2.x)/4} ${fromR2.y}
           `
        );


        const getCenterBottomStart = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                x: rect.left + rect.width / 10,
                y: rect.bottom + rect.height / 10
            };
        };

        const getCenterBottomEnd = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                x: rect.right - rect.width / 10,
                y: rect.bottom + rect.height / 10
            };
        };

        const getCenterRightStart = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                x: rect.right + rect.width / 10,
                y: rect.bottom - rect.height / 10
            };
        };

        const getCenterRightEnd = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                x: rect.right + rect.width / 10,
                y: rect.top + rect.height / 10
            };
        };

        const getCenterTopStart = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                x: rect.right - rect.width / 10,
                y: rect.top - rect.height / 10
            };
        };

        const getCenterTopEnd = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                x: rect.left + rect.width / 10,
                y: rect.top - rect.height / 10
            };
        };

        const getCenterLeftStart = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                x: rect.left - rect.width / 10,
                y: rect.top + rect.height / 10
            };
        
        };
        const getCenterLeftEnd = (el) => {
            const rect = el.getBoundingClientRect();
            
            return {
                x: rect.left - rect.width / 10,
                y: rect.bottom - rect.height / 10
            };
        };

        const fromBottomStart = rel(getCenterBottomStart(center));
        const fromBottomEnd = rel(getCenterBottomEnd(center));
        const fromRightStart = rel(getCenterRightStart(center));
        const fromRightEnd = rel(getCenterRightEnd(center));
        const fromTopStart = rel(getCenterTopStart(center));
        const fromTopEnd = rel(getCenterTopEnd(center));
        const fromLeftStart = rel(getCenterLeftStart(center));
        const fromLeftEnd = rel(getCenterLeftEnd(center));

        document.querySelector("#path9").setAttribute("d",
            `M ${fromBottomStart.x} ${fromBottomStart.y} 
            Z H ${fromBottomEnd.x } 
            C ${fromRightStart.x} ${fromBottomEnd.y} ${fromRightStart.x} ${fromBottomEnd.y} ${fromRightStart.x} ${fromRightStart.y} 
            V ${fromRightEnd.y}
            C ${fromRightEnd.x} ${fromTopStart.y} ${fromRightEnd.x} ${fromTopStart.y} ${fromTopStart.x} ${fromTopStart.y}
            H ${fromTopEnd.x } 
            C ${fromLeftStart.x} ${fromTopEnd.y} ${fromLeftStart.x} ${fromTopEnd.y} ${fromLeftStart.x} ${fromLeftStart.y} 
            V ${fromLeftEnd.y} 
            C ${fromLeftEnd.x} ${fromBottomStart.y} ${fromLeftEnd.x} ${fromBottomStart.y} ${fromBottomStart.x} ${fromBottomStart.y}`
        );

    }


    function handleIntersection(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // updatePaths(); // Draw paths
                document.querySelector('.outer-animate-box').classList.add('animate-started'); // Trigger animations
                observer.unobserve(entry.target); // Remove observer after triggering
            }
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        const observer = new IntersectionObserver(handleIntersection, {
            threshold: 0.3
        });

        const target = document.querySelector('.outer-animate-box');
        if (target) {
            observer.observe(target);
        }

        window.addEventListener("resize", updatePaths);
        window.addEventListener("load", () => setTimeout(updatePaths, 100)); // allow layout to stabilize
    });
</script>