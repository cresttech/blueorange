$(window).scroll(function() {
    var y = $(window).scrollTop();
    if (y > 0) {
    $("#header").addClass('sticky');
    } else {
    $("#header").removeClass('sticky');
    }
}); 

// $(document).ready(function() {
//     $("button.navbar-toggler").click(function(event) {
//         $(this).toggleClass("active");
//         $("#Menu_sidebar").toggleClass('show');
//         $('.nav_overlay').toggleClass('show');
//         $('body').toggleClass('body_overflow');
//     });
// });


$(function(){
    var itemClass = $('.tech_carousel');
    itemClass.on('initialized.owl.carousel', function(e){
    var idx = e.item.index;
    $('.owl-item').removeClass('middle');
    $('.owl-item').removeClass('left');
    $('.owl-item').removeClass('right');
    $('.owl-item').removeClass('left-last');
    $('.owl-item').removeClass('right-last');
    $('.owl-item').eq(idx).addClass('middle');
    $('.owl-item').eq(idx-1).addClass('left');
    $('.owl-item').eq(idx+1).addClass('right');
    $('.owl-item').eq(idx-2).addClass('left-last');
    $('.owl-item').eq(idx+2).addClass('right-last');
    // $('.owl-item').eq(idx-3).addClass('left-secondlast');
    // $('.owl-item').eq(idx+3).addClass('right-secondlast');
});
$('.tech_carousel').owlCarousel({
    loop: true,
    margin: 0,
    autoplay: true,
    dots: true,
    nav: false,
    autoplayTimeout: 3500,
    smartSpeed: 700,
    responsiveClass: true,
    touchDrag: false,
    mouseDrag: false,
    responsive: {
    0: {
      items: 1,
      stagePadding: 60
    },
    480: {
      items: 1,
      stagePadding: 120,
      smartSpeed: 2000,
    },
    600: {
      items: 4,
      slideBy: 2
    },
    992: {
      items: 6,
      slideBy: 2
    }
    }
});


$('.conclusion_carousel').owlCarousel({
    loop: false,
    rewind: true,
    margin: 15,
    autoplay: true,
    dots: false,
    nav: false,
    autoplayTimeout: 3500,
    smartSpeed: 700,
    responsiveClass: true,
    touchDrag: false,
    mouseDrag: false,
    responsive: {
    0: {
      items: 2
    },
    480: {
      items: 2
    },
    575: {
      items: 3
    },
    768: {
      items: 3
    }
    }
});

itemClass.on('translate.owl.carousel', function(e){
    idx = e.item.index;
    $('.owl-item').removeClass('middle');
    $('.owl-item').removeClass('left');
    $('.owl-item').removeClass('right');
    $('.owl-item').removeClass('left-last');
    $('.owl-item').removeClass('right-last');
    $('.owl-item').eq(idx).addClass('middle');
    $('.owl-item').eq(idx-1).addClass('left');
    $('.owl-item').eq(idx+1).addClass('right');
    $('.owl-item').eq(idx-2).addClass('left-last');
    $('.owl-item').eq(idx+2).addClass('right-last');
    // $('.owl-item').eq(idx-3).addClass('left-secondlast');
    // $('.owl-item').eq(idx+3).addClass('right-secondlast');
});
}); 


jQuery('.client_carousel').owlCarousel({
    loop: true,
    margin: 0,
    autoplay: true,
    dots: false,
    nav: false,
    autoplayTimeout: 3500,
    smartSpeed: 2000,
    responsiveClass: true,
    responsive: {
    0: {
      items: 2
    },
    576: {
      items: 4
    },
    1000: {
      items: 7
    }
    }
});

jQuery('.partnerr_carousel').owlCarousel({
    loop: false,
    margin: 20,
    autoplay: true,
    dots: false,
    nav: false,
    autoplayTimeout: 3500,
    smartSpeed: 2000,
    responsiveClass: true,
    responsive: {
    0: {
      items: 2
    },
    576: {
      items: 4
    },
    1000: {
      items: 6
    }
    }
});


jQuery('#strategy_services').owlCarousel({
    loop: true,
    margin: 0,
    items: 1,
    autoplay: false,
    dots: false,
    nav: true,
    autoplayTimeout: 3500,
    smartSpeed: 2000,
    responsiveClass: true,
    navText: ['<img src="/wp-content/themes/blueorange/assets/images/left-arrow.svg">', '<img src="/wp-content/themes/blueorange/assets/images/right-arrow.svg">']
});



jQuery(document).ready(function($) {
    $('body').on('hidden.bs.modal', '#videoPopup', function() {
        $("#videoPopup iframe").attr("src", $("#videoPopup iframe").attr("src"));
    });
}); 
jQuery(document).ready(function($) {
    $('body').on('hidden.bs.modal', '.modal', function(e) {
        $('video').trigger('pause');
        callPlayer('player', 'stopVideo');
    });
});

$(document).ready(function(){
  $('.show_more').on('click', function() {
    $(this).closest('.more_item').find('.more__wrapper').fadeToggle("slow");
    $(this).closest('.more_item').find('.more__dots').toggleClass("visibe");
    $(this).closest('.industry_more').find('.more__wrapper').fadeToggle("slow");
    $(this).closest('.industry_more').find('.more__dots').toggleClass("visibe");
    $(this).toggleClass("visibe");
    if (this.innerText === "Read Less") {
        this.innerHTML = "Read More";
    } else {
        this.innerHTML = "Read Less";
    }
  });
});


(function() {
  $(".accordion .card").on("show.bs.collapse hide.bs.collapse", function(e) {
    if (e.type=='show'){
      $(this).addClass('active');
    }else{
      $(this).removeClass('active');
    }
  });  
}).call(this);

jQuery('.case_carousel').owlCarousel({
    loop: false,
    margin: 0,
    autoplay: false,
    //rewind: true,
    dots: false,
    nav: true,
    navText: ["<img src='/wp-content/themes/blueorange/assets/images/slider-prev.svg'>", "<img src='/wp-content/themes/blueorange/assets/images/slider-next.svg'>"],
    autoplayTimeout: 3500,
    smartSpeed: 2000,
    touchDrag: false,
    mouseDrag: false,
    responsiveClass: true,
    responsive: {
    0: {
      items: 1,
      margin: 0,
      autoplay: false
    },
    768: {
      items: 2,
      margin: 15
    },
    1024: {
      items: 3,
      margin: 25
    }
    }
});


jQuery('.team_testi_carousel').owlCarousel({
    loop: false,
    margin: 0,
    autoplay: false,
    dots: false,
    nav: true,
    navText: ["<img src='/wp-content/uploads/2025/05/arrow-prev-blue.svg'>", "<img src='/wp-content/uploads/2025/05/arrow-next-blue.svg'>"],
    autoplayTimeout: 3500,
    smartSpeed: 2000,
    touchDrag: false,
    mouseDrag: false,
    responsiveClass: true,
    responsive: {
    0: {
      items: 1,
      margin: 0, 
    },
    768: {
      items: 2,
      margin: 20
    }
    }
});


jQuery('.pe_service').owlCarousel({
    loop: true,
    margin: 0,
    autoplay: false,
    dots: false,
    nav: true,
    navText: ["<img src='/wp-content/uploads/2025/12/Arrow-left.svg'>", "<img src='/wp-content/uploads/2025/12/Arrow-right.svg'>"],
    autoplayTimeout: 3500,
    smartSpeed: 2000,
    touchDrag: false,
    mouseDrag: false,
    responsiveClass: true,
    responsive: {
    0: {
      items: 1,
      margin: 0,
      autoplay: false
    },
    768: {
      items: 2,
      margin: 15
    },
    1024: {
      items: 3,
      margin: 25
    }
    }
});



jQuery('.pe_why_blueorange').owlCarousel({
    loop: true,
    margin: '1rem',
    autoplay: true,
    dots: false,
    nav: true,
    navText: ["<img src='/wp-content/uploads/2025/12/Arrow-left.svg'>", "<img src='/wp-content/uploads/2025/12/Arrow-right.svg'>"],
    autoplayTimeout: 3500,
    smartSpeed: 2000,
    touchDrag: false,
    mouseDrag: false,
    responsiveClass: true,
    responsive: {
    0: {
      items: 1,
      margin: 0,
      autoplay: true
    },
    600: {
      items: 2,
      margin: 15
    },
    1024: {
      items: 4,
      margin: 25
    }
    }
});