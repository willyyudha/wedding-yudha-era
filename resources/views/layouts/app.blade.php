<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta property="og:site_name" content="Katsudoto.id"> 
    <meta property="og:url" content="https://danelawithdaffin.katsudoto.id">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Danela &amp; Daffin - Katsudoto.id">
    <meta property="og:description" content="Hello.. you're invited to our wedding - Danela &amp; Daffin Wedding - Friday, 31 December 2021">
    <meta property="og:image" content="https://katsudoto.id/media/public/70/113/cover/d957ac55382326b209a1bda8da4219c8701f041a8831dd44ec63f7b83199fa89.png">
    
    <link rel="icon" href="{{asset('media/kat/favicon.png')}}">

    <title>Yudha & Era</title>

    
    <link rel="stylesheet" href="sweetalert2.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="{{asset('css2.css?family=Great+Vibes&family=Noto+Sans+JP:wght@400;500;900&display=swap')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('plugin/flexbin/flexbin.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('plugin/aos/dist/aos.css')}}">
    <link rel="stylesheet" href="{{asset('plugin/lightgallery/dist/css/lightgallery.css')}}">

    <link rel="stylesheet" href="{{asset('src/universal.css?1629520374')}}">
    <link rel="stylesheet" href="{{asset('src/template/global.css?1629520374')}}">
    <link rel="stylesheet" href="{{asset('src/template/biasa-01.css?1629520374')}}">

    <link rel="stylesheet" href="{{asset('plugin/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('plugin/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('plugin/modal-video/css/modal-video.min.css')}}">


</head>
<body class=" senandika camel " data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">


@yield('konten')
<!-- MUSIC -->
   
<!-- ALERT -->
<div class="alert" id="alert">
    <div class="alert-text"></div>
    <div class="alert-close fas fa-times"></div>
</div>

<!-- MODAL -->
<div id="modal" class="modal modal-center"></div>

<!-- SCRIPT -->
<script src="{{asset('src/jquery.js')}}"></script>
<script src="{{asset('plugin/slick/slick.min.js')}}"></script>
<script src="{{asset('plugin/modal-video/js/jquery-modal-video.min.js')}}"></script>
<script src="{{asset('plugin/aos/dist/aos.js')}}"></script>
<script src="{{asset('plugin/lightgallery/dist/js/lightgallery.min.js')}}"></script>

<script>    
    window.BACKGROUND_MUSIC = "{{asset('src/newweddingmusic.wav')}}";

    window.SCHEDULE_EVENT = 1640916000;    

    window.DESKTOP_COVERS = "<div class=\"picture-outer desktop\">\n                                <img src=\"{{asset('src/fotoutama.png')}}\" alt=\"\" class=\"picture\">\n                            <\/div>";
    window.MOBILE_COVERS = "<div class=\"picture-outer mobile\">\n                                <img src=\"{{asset('src/fotoutama.png')}}\" alt=\"\" class=\"picture\">\n                            <\/div>";
    window.COVERS = ['#cover-real', '#cover-banner'];    

    window.DESKTOP_OPENING_COVERS = "<div class=\"picture-outer desktop\">\n                                <img src=\"{{asset('src/fotoutama.png')}}\" alt=\"\" class=\"picture\">\n                            <\/div>";
    window.MOBILE_OPENING_COVERS = "<div class=\"picture-outer mobile\">\n                                <img src=\"{{asset('src/fotoutama.png')}}\" alt=\"\" class=\"picture\">\n                            <\/div>";
    window.OPENING_COVERS = ['#top-cover-banner'];

    window.SAVING_BOOKS = [{"id":78,"name_account":"sdgg","number_account":"85456632","bank":"BANK LIPPO","invitation_id":113,"thumbnail":0,"thumbnail_sm":null,"thumbnail_md":null,"thumbnail_lg":null}];    
</script>

<script src="{{asset('src/template/template.js?1629520374')}}"></script>

<script>

    // Event
    var desktopEvent = "<div class=\"picture-outer desktop\">\n                                <div class=\"picture\" style=\"--cover: url({{asset('src/foto-1-gallery.png')}});\"><\/div>\n                            <\/div><div class=\"picture-outer desktop\">\n                                <div class=\"picture\" style=\"--cover: url({{asset('src/foto-2-gallery.png')}});\"><\/div>\n                            <\/div>";
    var mobileEvent = "<div class=\"picture-outer mobile\">\n                                <div class=\"picture\" style=\"--cover: url({{asset('src/foto-1-gallery.png')}});\"><\/div>\n                            <\/div><div class=\"picture-outer mobile\">\n                                <div class=\"picture\" style=\"--cover: url({{asset('src/foto-2-gallery.png')}});\"><\/div>\n                            <\/div>";

    // Slider Options
    function sliderOptions() {
        return {
            slidesToShow: 1,
            variableWidth: true,
            autoplay: true,
            autoplaySpeed: 3000,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'ease-out',
            dots: false,
            arrows: false,
            pauseOnFocus: false,
            pauseOnHover: false,
            draggable: false,
            touchMove: false
        };
    };

    // Is Cover Played
    var isCoverPlayed = false;
    // Cover Setup
    var coverSetup = (function setup(windowWidth){
        // If Window Width is undefined
        if (typeof windowWidth == 'undefined') {
            windowWidth = $(window).width();
        }

        // If it is okay
        if (windowWidth > '1024' && windowWidth < '1025') {
            isCoverPlayed = false;
        }

        // If the cover is not played
        if (!isCoverPlayed) {
            // Unslick the slider
            $('.cover-show').each(function(i, slider){
                if ($(slider).hasClass('slick-initialized')) {
                    $(slider).slick('unslick');
                }
            });

            // Remove all elements inside cover show
            $('#cover-event').html('');
        }

        // Small screen
        var smallScreen = window.matchMedia( "(max-width: 1024px)" );
        if (!smallScreen.matches) {
            // If the cover is not played
            if (!isCoverPlayed) {
                // If the desktop cover is not empty
                if (desktopEvent != '') {                
                    $('#cover-event').append(desktopEvent);         // Append new cover elements into cover show                    
                    $('#cover-event').slick(sliderOptions());       // Start the slider                    
                    isCoverPlayed = true;                           // Played the cover
                }
            }
        } else {
            // If the cover is not played
            if (!isCoverPlayed) {
                // If the mobile cover is not empty
                if (mobileEvent != '') {                    
                    $('#cover-event').append(mobileEvent);          // Append new cover elements into cover show                    
                    $('#cover-event').slick(sliderOptions());       // Start the slider                    
                    isCoverPlayed = true;                           // Played the cover
                }
            }
        }
        
        return setup;           // return the setup
    }());

    // Window Width
    var originalWidth = $(window).width();
    // Window On Resize
    $(window).on('resize', function(){
        var resized = false;
        // Mew Width
        var newWidth = $(window).width();
        // Check if there is a changes
        if (originalWidth !== newWidth) {
            originalWidth = $(window).width();
            resized = true;
        }
        // If it is resized
        if (resized === true) {
            // Cover Setup
            coverSetup(newWidth);   
        }

    });



    var prokesOptions = {
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        variableWidth: true,
        slidesToScroll: 1,
        swipeToSlide: true,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        speed: 700,
        cssEase: 'ease-in-out',
        dots: false,
        arrows: false,
        asNavFor: '#protocol-dots',
        pauseOnFocus: false,
        pauseOnHover: false,
        draggable: true,
        // touchMove: false,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    }

    var prokesDotsOptions = {
        centerMode: true,
        variableWidth: true,
        slidesToScroll: 1,
        swipeToSlide: true,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        speed: 700,
        cssEase: 'ease-in-out',
        dots: false,
        arrows: false,
        asNavFor: '#protocol-slider',
        pauseOnFocus: false,
        pauseOnHover: false,
        draggable: true,
    }

    var prokes = $('#protocol-slider');
    $('#protocol-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        if ( nextSlide == 0 ) {
            var cls = 'slick-current slick-active' + ( prokesOptions.centerMode ? ' slick-center' : '' );

            setTimeout(function() {
                $( '[data-slick-index="' + slick.$slides.length + '"]' ).addClass( cls ).siblings().removeClass( cls );
                for (var i = slick.options.slidesToShow - slick.options.slidesToShow; i >= 0; i--) {
                    $( '[data-slick-index="' + i + '"]' ).addClass( cls );
                }
            }, 10 );
        }
    });

    

    // Document Ready
    $(document).ready(function(){       

        var coverHeight = $('.cover-inner').css('min-height');
        $('body').css('--cover-height', coverHeight);

        $('#protocol-slider').slick(prokesOptions);
        $('#protocol-dots').slick(prokesDotsOptions);

    });

</script>
<script src="sweetalert2.min.js"></script>
<script>
@yield('sweetalert')
</script>
</body>
</html>