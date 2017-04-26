// handle user clikc on portfolio image . so user can see the picture clearly
$(document).ready(function() {
  $('.card-portfolio img').on('click', function() {
    $(this).toggleClass('js--portfolio-image');
  });
});

// smooth scroll to about section
$('.js--scroll-to-about').click(function(e) {
  e.preventDefault();
  $('html,body').animate({
    scrollTop: $('.js--section-about').offset().top
  }, 1000);
});

// smooth scroll to resume section
$('.js--scroll-to-resume').click(function(e) {
  e.preventDefault();
  $('html,body').animate({
    scrollTop: $('.js--section-resume').offset().top
  }, 1000);
});

// smooth scroll to portfolio section
$('.js--scroll-to-portfolio').click(function(e) {
  e.preventDefault();
  $('html,body').animate({
    scrollTop: $('.js--section-portfolio').offset().top
  }, 1000);
});

// smooth scroll to contact section
$('.js--scroll-to-contact').click(function(e) {
  e.preventDefault();
  $('html,body').animate({
    scrollTop: $('.js--section-contact').offset().top
  }, 1000);
});

// smooth scroll to about section
$(".js--section-about").waypoint(function(direction) {
  if (direction == "down") {
    $('.js--header').addClass('sticky');
  } else {
    $('.js--header').removeClass('sticky');
  }
}, {
  offset: '60px'
});

// show the mobile nav o clicking on mobile menu on small devices
$(".js--mobile-menu").click(function(e) {
  e.preventDefault();
  $('.js--mobile-nav').toggleClass('js--mobile-nav-show');
});

// close the mobile menu on clikcing the mobile menu links
$(".nav-bar-item a").click(function() {
  $('.js--mobile-nav').toggleClass('js--mobile-nav-show');
});

// very smooth and beautiful hover effect for header contact btn
$("#contact-btn").hover(function() {
  $("#contact-btn ").addClass('js--hover-contact');
}, function() {
  $("#contact-btn ").removeClass('js--hover-contact');
});

// very smooth and beautiful hover effect for header about btn
$("#about-btn").hover(function() {
  $("#about-btn ").addClass('js--hover-about');
}, function() {
  $("#about-btn ").removeClass('js--hover-about');
});

// animation
$(document).ready(function() {
  // animating the contact button after loading
  setTimeout(function() {
    $("#js--header-contact-btn").addClass("animated flash")
  }, 2000);

  //animating about section
  $('.js--section-about').waypoint(function(direction) {
    if (direction == "down") {
      $('.js--about-img').removeClass("js--about-img").addClass("animated fadeInLeft");
    }
  }, {
    offset: '50%'
  });

//animating card resume
  $('.js--card-resume').waypoint(function(direction) {
    if (direction == "down") {
      $('.js--card-resume').removeClass("js--card-resume").addClass("animated fadeInUp");
    }
  }, {
    offset: '65%'
  });

  // animating portfolio title

  $('.js--section-portfolio').waypoint(function(direction) {
    if (direction == "down") {
      $('.js--portfolio-title').removeClass("js--portfolio-title").addClass("animated fadeInLeftBig");
    }
  }, {
    offset: '65%'
  });




});
