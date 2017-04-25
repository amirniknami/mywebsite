
      
      

$(document).ready(function(){
    $('.card-portfolio img').on('click',function(){
        $(this).toggleClass('js--portfolio-image');
    });
});



    $('.js--scroll-to-about').click(function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: $('.js--section-about').offset().top
        }, 1000);
    });

     $('.js--scroll-to-resume').click(function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: $('.js--section-resume').offset().top
        }, 1000);
    });

      $('.js--scroll-to-portfolio').click(function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: $('.js--section-portfolio').offset().top
        }, 1000);
    });


      $('.js--scroll-to-contact').click(function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: $('.js--section-contact').offset().top
        }, 1000);
    });


     $(".js--section-about").waypoint(function (direction) {
        if (direction == "down") {
            $('.js--header').addClass('sticky');
        } else {
            $('.js--header').removeClass('sticky');
        }
    }, {
        offset: '60px'
    });


    $(".js--mobile-menu").click(function(e){
       e.preventDefault();
      $('.js--mobile-nav').toggleClass('js--mobile-nav-show');
    });

    $(".nav-bar-item a").click(function(){
      $('.js--mobile-nav').toggleClass('js--mobile-nav-show');        
    });


