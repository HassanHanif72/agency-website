// Get Quote Form validation

(function () {
  'use strict';
  var forms = document.querySelectorAll('.needs-validation');
  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }

      form.classList.add('was-validated');
    }, false);
  });
})();

// scroll opacity handling
window.addEventListener('scroll', function () {
  const achievements = document.querySelectorAll('.achievement-row');
  const windowHeight = window.innerHeight;
  const scrollY = window.scrollY;

  achievements.forEach((achievement, index) => {
    const rect = achievement.getBoundingClientRect();
    const offsetTop = achievement.offsetTop;
    const height = achievement.clientHeight;
    const elementInView = Math.min(1, Math.max(0, (scrollY + windowHeight - offsetTop) / (height +
      windowHeight)));
    achievement.style.opacity = 0.5 + 1 * elementInView;
  });
});

$(document).ready(function () {
  $('.navdesktop').hover(
    function () {
      $(this).addClass('show');
      $(this).find('.dropdown-navdesktop').first().addClass('show');
    },
    function () {
      $(this).removeClass('show');
      $(this).find('.dropdown-navdesktop').first().removeClass('show');
    }
  );
});

// rotate bar white slider
$('.rotate-bar-white-slider').slick({
  dots: false,
  infinite: true,
  autoplay: true,
  arrows: false,
  autoplaySpeed: 0,
  speed: 3000,
  cssEase: 'linear',
  slidesToShow: 9,
  slidesToScroll: 1,
});
// end
// rotate bar theme slider
$('.rotate-bar-theme-slider').slick({
  dots: false,
  infinite: true,
  autoplay: true,
  arrows: false,
  autoplaySpeed: 0,
  speed: 3000,
  cssEase: 'linear',
  slidesToShow: 9,
  slidesToScroll: 1,
});
// end

// text slider
$('.text-slider').slick({
  dots: false,
  infinite: true,
  autoplay: true,
  arrows: false,
  autoplaySpeed: 0,
  speed: 7000,
  cssEase: 'linear',
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
      }
    }

  ]
});

// slider auto
$('.slide-auto').slick({
  dots: true,
  infinite: true,
  autoplay: true,
  arrows: false,
  // autoplaySpeed: 0,
  // speed: 7000,  
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
      }
    }

  ]
});


// image move
const images = document.querySelectorAll('.image-top');
const section = document.querySelector('.image-section');

if (section) {
  section.addEventListener('mousemove', (e) => {
    const sectionRect = section.getBoundingClientRect();
    const mouseX = e.clientX - sectionRect.left;
    const mouseY = e.clientY - sectionRect.top;

    const xPercent = (mouseX / sectionRect.width) - 0.5;
    const yPercent = (mouseY / sectionRect.height) - 0.5;

    images.forEach((image) => {
      let xMovement = xPercent * 50;
      let yMovement = yPercent * 50;

      switch (image.id) {
        case 'image1':
          yMovement = -yPercent * 100;
          break;
        case 'image2':
          xMovement = xPercent * 100;
          break;
        case 'image3':
          xMovement = xPercent * 50;
          break;
      }

      gsap.to(image, {
        x: xMovement,
        y: yMovement,
        rotation: xPercent * 10,
        scale: 1 + Math.abs(xPercent) * 0.1,
        duration: 0.5,
      });
    });
  });

  // Reset images when mouse leaves the section
  section.addEventListener('mouseleave', () => {
    gsap.to(images, {
      x: 0,
      y: 0,
      rotation: 0,
      scale: 1,
      duration: 0.5,
    });
  });
}


// animated text
const textElement = document.querySelector('.animated-text');
const textContent = textElement.textContent;
const words = textContent.split(' ');
const wrappedText = words.map(word => `<span>${word}</span>`).join(' ');
textElement.innerHTML = wrappedText;
const spans = document.querySelectorAll('.animated-text span');
function checkScroll() {
  spans.forEach(span => {
    const rect = span.getBoundingClientRect();
    if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
      span.classList.add('in-view');
    } else {
      span.classList.remove('in-view');
    }
  });
}
window.addEventListener('scroll', checkScroll);
checkScroll();

// end


// Sticky header

// window.addEventListener("scroll", function () {
//   var header = document.querySelector("header");
//   header.classList.toggle("sticky", window.scrollY > 0);
// })

// end Sticky header



