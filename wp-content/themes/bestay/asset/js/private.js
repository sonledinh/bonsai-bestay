jQuery(function($) {
  var doAnimations = function() {
    var offset = $(window).scrollTop() + $(window).height(),
        $animatables = $('.title h2 span, .title-cate span');
    if ($animatables.length == 0) {
      $(window).off('scroll', doAnimations);
    }
    $animatables.each(function(i) {
       var $animatable = $(this);
      if (($animatable.offset().top + $animatable.height() - 20) < offset) {
            $animatable.addClass('active');
      }
    });
  };
  $(window).on('scroll', doAnimations);
  $(window).trigger('scroll');
}); 

$('.slide-camp').slick({
    autoplay: false,
    arrow: true,
    dots: false,
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 1, 
    prevArrow: '<button class="slick-next"><img src="images/btn-right.png" alt=""></button>',
    nextArrow: '<button class="slick-prev"><img src="images/btn-left.png" alt=""></button>',
    responsive: [
        {
            breakpoint: 1023,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1.5,
            }
        }
    ]
});



$(window).scroll(function(){
    if ($(window).scrollTop() >= 1) {
        $('.header-menu, main').addClass('fixed-header');
    }
    else {
        $('.header-menu, main').removeClass('fixed-header');
    }
});

$(document).ready(function(){
  $('.btn-menu a').click(function(){
     $('html, .sub-menu, .ovgray, .btn-menu img').toggleClass('active');
     $('.btn-trans').removeClass('active');
  });
  $('.btn-trans a').click(function(){
     $('html, .sub-trans, .ovgray, .btn-trans img').toggleClass('active');
     $('.sub-menu').removeClass('active');
  });
});

if ($(window).innerWidth() >= 768) {
    new WOW().init();
}

$(document).ready(function() {
    setTimeout(function(){
        $('.square img').addClass('active');
    }, 1000);
});

function generateRot() {
    $('.square-3, .square-5, .square-ft img').toggleClass('anim');
}
setInterval(generateRot, 3000);