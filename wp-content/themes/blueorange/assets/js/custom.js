$(window).scroll(function() {
    var y = $(window).scrollTop();
    if (y > 0) {
    $(".navbar").addClass('sticky');
    } else {
    $(".navbar").removeClass('sticky');
    }
}); 

$(document).ready(function() {
    $("button.navbar-toggler").click(function(event) {
        $(this).toggleClass("active");
        $("#Menu_sidebar").toggleClass('show');
        $('.nav_overlay').toggleClass('show');
        $('body').toggleClass('body_overflow');
    });
});


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



(function() {
  $(".accordion .card").on("show.bs.collapse hide.bs.collapse", function(e) {
    if (e.type=='show'){
      $(this).addClass('active');
    }else{
      $(this).removeClass('active');
    }
  });  
}).call(this);