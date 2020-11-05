

    $('.slideabogado').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
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
        prevArrow: '<button class="btn btn-arrow-left"><i class="fas fa-arrow-left"></i></button>'
    });


    $(".slider .card-header").hover(
    function(){
        $(this).parent().children('.card-body').children(".cuadro").stop().animate({"top":"0px"},350,'swing');
    },
    function(){
        $(this).parent().children('.card-body').children(".cuadro").stop().animate({"top":"-360px"},350,'swing');
    }
    );
