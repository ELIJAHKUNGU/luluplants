const ShowDom = document.querySelector('.showdom');
const hideDiv = document.querySelector('.hiddenDiv');

ShowDom.addEventListener("click", function() {
    if (hideDiv.style.display === "none") {
        hideDiv.style.display = "block";
      } else {
        hideDiv.style.display = "none";
      }
  });






$(document).ready(function () {
    // main-banner owl carousel
$(".banner .owl-carousel").owlCarousel({
    nav: false,
    dots: false,
    autoplay: true,
    loop: true,
    margin: 20,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        },
    },
});
});

