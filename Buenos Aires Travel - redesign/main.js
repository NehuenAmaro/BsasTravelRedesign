 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });   
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.autocomplete');
    var instances = M.Autocomplete.init(elems, options);
  });
document.addEventListener('DOMContentLoaded', () => {
    const elementosCarousel = document.querySelectorAll('.carousel');
    M.Carousel.init(elementosCarousel, {
        duration: 150,
        shift: 100,
        dist: -20,
        indicators:true,
        numVisible: 3,

    });



});

const navSlide = () => {
  const burger = document.querySelector('.burger');
  const nav = document.querySelector('.mobile_menu');

    burger.addEventListener('click', () => {
      nav.classList.toggle('nav-active');


    });

}

navSlide();