//const { get } = require("lodash");

if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
    AOS.init({ disable: 'mobile', delay: 0, once: true, });
    /*$(document.body).on('touchmove', onScroll);
    $(window).on('scroll', onScroll);
    function onScroll(){
        console.log($(this).scrollTop());
        if ($(this).scrollTop() > 40) {
            $('header').addClass("fixed-top");

            $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
          }else{
            $('header').removeClass("fixed-top");

            $('body').css('padding-top', '0');
          }
    }*/
}else{

    AOS.init({

        offset: 350,
        duration: 600,
      easing: 'ease-in-sin',
    });


}

/*$(window).on('scroll',function(){

    if ($(this).scrollTop() > 40) {
       $('header').addClass("fixed-top");

       $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
     }else{
       $('header').removeClass("fixed-top");

       $('body').css('padding-top', '0');
     }
 });*/

    $('.slideabogado').slick({
        dots: true,
        infinite: true,
        speed: 600,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
              breakpoint: 769,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: false
              }
            }
        ]
    });


    $('.slideexito').slick({
        dots: true,
        infinite: false,
        arrows:true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        adaptiveHeight: true,
        nextArrow: '<button class="btn btn-arrow-right"><i class="fas fa-arrow-right"></i></button>',
        prevArrow: '<button class="btn btn-arrow-left"><i class="fas fa-arrow-left"></i></button>',
        responsive: [
            {
              breakpoint: 769,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: false
              }
            }
        ]
    });

    $(".slidesec1").slick({
        dots: false,
        arrows:false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 3000,
        fade: true,
        cssEase: 'linear'
    });

    $(".slider .card-header").hover(
        function(){
            $(this).parent().children('.card-body').children(".cuadro").stop().animate({"top":"0px"},350,'swing');
        },
        function(){
            $(this).parent().children('.card-body').children(".cuadro").stop().animate({"top":"-360px"},350,'swing');
        }
    );


$(document).on('ready',function(){
    var pathurl = window.location.pathname;

    if(pathurl=='/es'){

        $(".bar1 .nav-item:nth-child(1)").addClass("active");
    }
    if(pathurl=='/es/nosotros'){

        $(".bar1 .nav-item:nth-child(2)").addClass("active");
    }
    if(pathurl=='/es/areas-de-practica'){

        $(".bar1 .nav-item:nth-child(3)").addClass("active");
    }
    if(pathurl=='/es/abogados'){

        $(".bar1 .nav-item:nth-child(4)").addClass("active");
    }
    if(pathurl=='/es/casos-de-exito'){

        $(".bar1 .nav-item:nth-child(5)").addClass("active");
    }
    if(pathurl=='/es/contacto'){

        $(".bar1 .nav-item:nth-child(7)").addClass("active");
    }


    if(pathurl=='/en'){

        $(".bar1 .nav-item:nth-child(1)").addClass("active");
    }
    if(pathurl=='/en/about-us'){

        $(".bar1 .nav-item:nth-child(2)").addClass("active");
    }
    if(pathurl=='/en/practice-areas'){

        $(".bar1 .nav-item:nth-child(3)").addClass("active");
    }
    if(pathurl=='/en/lawyers'){

        $(".bar1 .nav-item:nth-child(4)").addClass("active");
    }
    if(pathurl=='/en/success-stories'){

        $(".bar1 .nav-item:nth-child(5)").addClass("active");
    }
    if(pathurl=='/en/contact'){

        $(".bar1 .nav-item:nth-child(7)").addClass("active");
    }



    $(".circulo").on('click',function(e){
        e.preventDefault();
       let stack1 = $(".bg2").position().top;
       $("html, body").animate({ scrollTop: stack1 }, 600,"swing");
    });


    $(".radio").on('click',function(){
       // $(".radio").removeClass("activo");
       // $(this).addClass("activo");
        $(this).toggleClass( "activo");
    });


    $(".radiopress picture").hover(
        function(){
            $(this).children('img:nth(0)').hide();
            $(this).children('img:nth(1)').show();
        },
        function(){
            $(this).children('img:nth(0)').show();
            $(this).children('img:nth(1)').hide();
        });


    var gethash = window.location.hash;
    switch (gethash) {
        case "#corporativo":
            $(".collapse2").collapse('show');
            $("html, body").delay(600).animate({ scrollTop: 900 }, 600,"swing");
            $("#headingTwo button").addClass("activo");
        break;
        case "#inmobiliario":
            $(".collapse1").collapse('show');
            $("html, body").delay(600).animate({ scrollTop: 900}, 600,"swing");
            $("#headingOne button").addClass("activo");
        break;

        case "#agrario":
            $(".collapse3").collapse('show');
            $("html, body").delay(600).animate({ scrollTop: 1000}, 600,"swing");
            $("#headingThree button").addClass("activo");

        break;

        case "#administrativo":
            $(".collapse4").collapse('show');
            $("html, body").delay(600).animate({ scrollTop: 1100}, 600,"swing");
            $("#headingcuatro button").addClass("activo");

        break;

        case "#laboral":
            $(".collapse5").collapse('show');
            $("html, body").delay(600).animate({ scrollTop: 1100}, 600,"swing");
            $("#headingcinco button").addClass("activo");
        break;

        case "#propiedad":
            $(".collapse6").collapse('show');
            $("html, body").delay(600).animate({ scrollTop: 1200}, 600,"swing");
            $("#headingseis button").addClass("activo");
        break;

        case "#bancario":
            $(".collapse7").collapse('show');
            $("html, body").delay(600).animate({ scrollTop: 1200}, 600,"swing");
            $("#headingsiete button").addClass("activo");
        break;

        case "#penal":
            $(".collapse8").collapse('show');
            $("html, body").delay(600).animate({ scrollTop: 1250}, 600,"swing");
            $("#headingocho button").addClass("activo");
        break;


    }
});



let map;
/*
function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 25.6677828, lng: -100.4011097},
    zoom: 14,
    var marker = new google.maps.Marker({position: uluru, map: map});
  });
}*/

function initMap() {
    // The location of Uluru
    var uluru = {lat: 25.6677828, lng: -100.4011097};
    // The map, centered at Uluru
     map = new google.maps.Map(
        document.getElementById('map'), {zoom: 17, center: uluru});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map});
  }
