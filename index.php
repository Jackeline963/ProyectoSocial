<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--responsive -->

<link rel="stylesheet" type="text/css" href="bootstrap3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap3/js/bootstrap.min.js">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="public/css/estilos.css">
<script type="" src="public/js/jquery.js"></script>
  <title></title>

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="public/img/logouls.png" alt="logouls" class="center" style="width:20%;"> </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrador <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Ver perfil</a></li>
            <li><a href="#">Editar perfil</a></li>
            <li><a href="#">Otro</a></li>
            <li role="separator" class="divider"></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Ver perfil</a></li>
            <li><a href="#">Editar perfil</a></li>
            <li><a href="#">Otro</a></li>
            <li role="separator" class="divider"></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Operador <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Ver perfil</a></li>
            <li><a href="#">Editar perfil</a></li>
            <li><a href="#">Otro</a></li>
            <li role="separator" class="divider"></li>
          </ul>
      </ul>

     
            
      <!--<form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="#" data-toggle="modal" data-target="#ingresarmodal">Registrase</a></li>
      <li class="active"><a href="#" data-toggle="modal" data-target="#loginmodal" >LogIn</a></li>
      <li class="active"><a href="#"><i class="fa fa-fw fa-power-off"></i></a></li>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
     
     </div>
</div>

<div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="public/img/01.jpeg" alt="" style = "width: 700px; height:400px;">
      </div>

      <div class="item">
        <img src="public/img/02.jpg" alt="" style = "width: 700px; height: 400px;">
      </div>
    
      <div class="item">
        <img src="public/img/03.jpg" alt="" style = "width: 700px; height: 400px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!--Modal de Log In-->
 <div class="container" style="margin-top: 60px;">
    <!--button class="btn btn-info" data-toggle="modal" data-target="#miformulario">
    LOGIN
    </button-->

    <div class=" modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginmodal1" aria hidden="true">
      <div class=" modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> X </button>
            <h4>LOGIN</h4>
          </div>

            <div class="col-xs-12">
              <label>Usuario</label>
              <input type="text" class="form-control" placeholder="Escriba su usuario">
            </div>
            <div class="col-xs-12">
              <label>Contraseña</label>
              <input type="text" class="form-control" placeholder="Escriba su contraseña">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-success btn-block"  data-dismiss="modal">ingresar</button>
            </div>
        </div>
        </div>     
    </div>
    </div>
<!--Fin Modal de Log In-->
<!--Inicio Modal de crear cuenta-->
 <div class="container" style="margin-top: 60px;">
   

    <div class=" modal fade" id="ingresarmodal" tabindex="-1" role="dialog" aria-labelledby="ingresarmodal0" aria hidden="true">
      <div class=" modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> X </button>
            <h4>CREAR CUENTA </h4>
          </div>

          <div class="modal-body">
           <div class="row">
            <div class="col-xs-6">
              <label>Nombres</label>
              <input type="text" class="form-control" placeholder="Escriba sus nombres">
            </div>

            <div class="col-xs-6">
              <label>Apellidos</label>
              <input type="text" class="form-control" placeholder="Escriba sus apellidos">
            </div>
          
            <div class="col-xs-12">
              <label>E-mail</label>
              <input type="text" class="form-control" placeholder="Escriba su correo">
            </div>
            <div class="col-xs-12">
              <label>Categoría</label>
              <input type="text" class="form-control" placeholder="Seleccione una categoría">
            </div>
            <div class="col-xs-12">
              <label>Usuario</label>
              <input type="text" class="form-control" placeholder="usuario">
            </div>
            <div class="col-xs-12">
              <label>Contraseña</label>
              <input type="text" class="form-control" placeholder="Escriba su contraseña">
            </div>
            <div class="col-xs-12">
              <label>Contraseña</label>
              <input type="text" class="form-control" placeholder="Confirme su contraseña">
            </div>
            </div>
           </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-success btn-block"  data-dismiss="modal"><span class="glyphicon glyphicon-floppy-disk"></span> Cerrar</button>
            </div>
          
        </div>
        </div>
      </div>
    </div> 
 

<!--Fin Modal de crear cuenta-->
</body>
</html>

