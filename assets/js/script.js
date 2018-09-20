$(document).ready(function() {
    $(".rslides").responsiveSlides({
        auto: true,             // Boolean: Animate automatically, true or false
        speed: 500,            // Integer: Speed of the transition, in milliseconds
        timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
        pager: true,           // Boolean: Show pager, true or false
        nav: false,             // Boolean: Show navigation, true or false
        random: false,          // Boolean: Randomize the order of the slides, true or false
        pause: false,           // Boolean: Pause on hover, true or false
        pauseControls: true,    // Boolean: Pause when hovering controls, true or false
        prevText: "Previous",   // String: Text for the "previous" button
        nextText: "Next",       // String: Text for the "next" button
        maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
        navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
        manualControls: "",     // Selector: Declare custom pager navigation
        namespace: "rslides",   // String: Change the default namespace used
        before: function(){},   // Function: Before callback
        after: function(){}     // Function: After callback
    });

    $('.list-home-bacsi').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 4,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            }
        ]
    });
    $('.ykien-content').slick({
        dots: true,
        infinite: false,
        arrows:false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });

    $('.all-parner').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 6,
      slidesToScroll: 6,
      arrows:true,
    });

    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if(scroll > 32){
            $(".main-header").addClass("main-header-fix");
        }else{
            $(".main-header").removeClass("main-header-fix");
        }
    });

    $('.tour-gallery').magnificPopup({
      delegate: 'a',
      type: 'image',
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-img-mobile',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
          
        }
      }
    });
    
    $(".mobile-menu").click(function(){
      if($(".menu-content").hasClass('active')){
        $(".menu-content").removeClass('active');
        $("body").removeClass('active');
      }else{
        $(".menu-content").addClass('active');
        $("body").addClass('active');
      }
    });
  $(".tab-row3 li a").click(function(){
    $(".tab-row3 li a").removeClass("active");
    $(this).addClass('active');
    $(".tab-row3-content-item").removeClass('active');
    $($(this).attr("href")).addClass('active');
    return false;
  });
  $(".cauhoi-tab-head").click(function(){
    $(".cauhoi-tab-head").parent().removeClass("active");
    $(this).parent().addClass('active');
    $(".cauhoi-tab").removeClass('active');
    $($(this).attr("href")).addClass('active');
    return false;
  });
});

