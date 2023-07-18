
jQuery( document ).ready(function($) {


  $('.btn-group-custom').on('click', '.customBtn', function() {
    $(this).addClass('active').siblings().removeClass('active');
  });

  
  $('.popup-youtube').magnificPopup({
    type: 'iframe',
    mainClass: 'mfp-fade',
    fixedContentPos: true,
    fixedBgPos: true,
    removalDelay: 160,
    preloader: false,
  });


  
  $('.openProduct').beefup({
    openSingle: true,
    selfClose: true,
    scroll: true,
    scrollOffset: -10,
    breakpoints: [
      {
        breakpoint: 767,
        settings: {
          scroll: false
        }
      }
    ]
  });


  var wow = new WOW({
    boxClass: 'wow',
    animateClass: 'animate__animated',
    offset: 200,
    mobile: true,
    live: true
  })
  wow.init();


  $(".main-navigation li .dropdown-menu").hover(function(){
    var parentclass = $(this).parent().attr('id');
    var targetclass = "#"+parentclass + " a";
    $(targetclass).addClass("parentlink");
    }, function(){
    var parentclass = $(this).parent().attr('id');
    var targetclass = "#"+parentclass + " a";
    $(targetclass).removeClass("parentlink");
  });



  $('.sliderProduct').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.sliderProduct',
    prevArrow:"<button type='button' class='slick-prev pull-left'><span class='fa-thin fa-circle-chevron-left' aria-hidden='true'></span></button>",
    nextArrow:"<button type='button' class='slick-next pull-right'><span class='fa-thin fa-circle-chevron-right' aria-hidden='true'></span></button>",
    dots: false,
    arrows: true,
    focusOnSelect: true
  });



  $(".relatedSlider").slick({
    prevArrow:"<button type='button' class='slick-prev pull-left'><span class='fa-thin fa-circle-chevron-left' aria-hidden='true'></span></button>",
    nextArrow:"<button type='button' class='slick-next pull-right'><span class='fa-thin fa-circle-chevron-right' aria-hidden='true'></span></button>",
    dots: false,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 767,
        settings: {
          arrows:false,
          slidesToShow: 1,
        }
      },
    ]
  });


  $('.popup-with-zoom-anim').magnificPopup({
    type: 'inline',
    fixedContentPos: false,
    fixedBgPos: true,
    overflowY: 'auto',
    closeBtnInside: true,
    preloader: false,
    midClick: true,
    removalDelay: 300,
    mainClass: 'my-mfp-zoom-in'
  });


  $("#closeBanner").click(function(){
    $(".alertBanner").slideUp();
    $.cookie("CloseBannerCookie", 1, { expires : 2/24 });
  });



});







document.addEventListener(
    "DOMContentLoaded", () => {
      new Mmenu( "#menu", {
        "extensions": [
          "fx-menu-zoom",
          "fx-panels-zoom",
          "pagedim-black",
          "position-left",
          "theme-light"
        ],
        "navbars": [
          {
            "position": "top",
            "content": [
              "<a href='/'><img class='mobileLogo' src='/app/themes/den/images/svg/logo.svg' alt='Denver Main Logo'></a>"
            ],
            "height": 3
          }
        ]
      });
    }
);







