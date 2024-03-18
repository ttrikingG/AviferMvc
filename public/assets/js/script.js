//Hamburguer Menu
document.addEventListener('DOMContentLoaded', function() {
  document.querySelector('.hamburger').addEventListener('click', function() {
      document.querySelector('.navbar-links').classList.toggle('active');
  });

  document.addEventListener('click', function(event) {
      const navbarLinks = document.querySelector('.navbar-links');
      const hamburger = document.querySelector('.hamburger');

      if (!navbarLinks.contains(event.target) && !hamburger.contains(event.target)) {
          navbarLinks.classList.remove('active');
      }
  });
});

// slick carroussel
$(document).ready(function(){
  $('.carousel').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    dots: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
    ]
  });
});

//slideshow home

let slideIndex = 1;
showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("demo");
    let captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
  }