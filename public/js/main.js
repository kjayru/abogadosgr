if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
    AOS.init({ disable: 'mobile', delay: 0, once: true, });
    $(document.body).on('touchmove', onScroll);
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
    }
}else{

    AOS.init({

        offset: 350,
        duration: 600,
      easing: 'ease-in-sin',
    });


}

$(window).on('scroll',function(){

    if ($(this).scrollTop() > 40) {
       $('header').addClass("fixed-top");

       $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
     }else{
       $('header').removeClass("fixed-top");

       $('body').css('padding-top', '0');
     }
 });

    $('.slideabogado').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 4000
    });


    $('.slideexito').slick({
        dots: true,
        infinite: true,
        arrows:true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
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
        dots: true,
        arrows:false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 3000
    });

    $(".slider .card-header").hover(
        function(){
            $(this).parent().children('.card-body').children(".cuadro").stop().animate({"top":"0px"},350,'swing');
        },
        function(){
            $(this).parent().children('.card-body').children(".cuadro").stop().animate({"top":"-360px"},350,'swing');
        }
    );

