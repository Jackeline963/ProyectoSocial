
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('#carouselPortada');
    M.Carousel.init(elems,{

    	duration: 180,
    	dist: -80,
    	shift: 5,
    	padding: 5,
    	numVisible: 3,
    	indicators: true,
    	noWrap: false


    })
  });