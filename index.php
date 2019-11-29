<!DOCTYPE html>
<html>
<head>
	<title></title>


	 <!--Importación de fuente de íconos google -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
	  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 700px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
  .carousel-item>img{
    width: 100%;
    height:100%;
  }

</style>
   
</head>
<body>


     <nav>
    <div class="nav-wrapper">

      <a href="#!" class="brand-logo"><img src="public/img/logouls.png" width="50" height="25"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons"></i></a>
      <ul class="left hide-on-med-and-down">

        <li><a href="badges.html">Dependencias</a></li>
          <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!"></a>NUEVO INGRESO Y ATENCIÓN AL ESTUDIANTE</li>
            <li><a href="#!"></a>COMUNICACIONES</li>
            <li><a href="#!"></a>EXTENSIÓN CULTURAL</li>
            <li><a href="#!"></a>SEGUIMIENTO A GRADUADOS</li>
        </ul>
        <li><a href="collapsible.html">Programas</a></li>
        <li><a href="mobile.html">Quienes Somos</a></li>
      </ul>
    </div>
  </nav>
  <script type="text/javascript">
    $(".dropdown-trigger").dropdown();
  </script>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Dependencias</a></li>
    <li><a href="collapsible.html">Programas</a></li>
    <li><a href="mobile.html">Quienes Somos</a></li>
  </ul>
       
     
  <div class="carousel carousel-slider" data-indicators="true" >
    <div class="col s12 m12">

    <a class="carousel-item" href="#"><img src="public/img/1.jpg" width="100%"></a>
    <a class="carousel-item" href="#"><img src="public/img/2.jpg" width="100%"></a>
    <a class="carousel-item" href="#"><img src="public/img/3.jpg" width="100%"></a>
    <a class="carousel-item" href="#"><img src="public/img/4.jpg" width="100%"></a>
    <a class="carousel-item" href="#"><img src="public/img/5.jpg" width="100%"></a>
    <a class="carousel-item" href="#"><img src="public/img/6.jpg" width="100%"></a>
    <a class="carousel-item" href="#"><img src="public/img/7.jpg" width="100%"></a>
    <a class="carousel-item" href="#"><img src="public/img/8.jpg" width="100%"></a>
  </div>
  </div> 
  
   <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
         M.AutoInit();
      });
    </script>

  

         
</body>
</html>