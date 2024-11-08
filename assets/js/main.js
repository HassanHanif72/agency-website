// client Slick Slider

$('.client-slider').slick({
  dots: false,
  infinite: true,
  autoplay: true,
  arrows: false,
  autoplaySpeed: 0,
  speed: 7000,
  cssEase: 'linear',
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
      }
    }

  ]
});

// customers slider

$('.customers-slider').slick({
  // centerMode: true,
  dots: false,
  arrows:false,
  // centerPadding: '70px',
  autoplay: true,
  autoplaySpeed: 1000,
  speed: 7000,
  slidesToShow: 2,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        dots: false,
        autoplay: true,
        // centerMode: true,
        // centerPadding: '10px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        // centerMode: true,
        dots: false,
        autoplay: true,
        // centerPadding: '10px',
        slidesToShow: 1
      }
    }
  ]
});




// Get Quote Form validation

(function() {
  'use strict';
  var forms = document.querySelectorAll('.needs-validation');
  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function(form) {
    form.addEventListener('submit', function(event) {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }

      form.classList.add('was-validated');
    }, false);
  });
})();


$(document).ready(function() {
  $('.navdesktop').hover(
    function() {
      $(this).addClass('show');
      $(this).find('.dropdown-navdesktop').first().addClass('show');
    },
    function() {
      $(this).removeClass('show');
      $(this).find('.dropdown-navdesktop').first().removeClass('show');
    }
  );
});

// Sticky header

window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
})

// end Sticky header



