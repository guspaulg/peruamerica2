<!DOCTYPE html>
<html lang="es"> <!--<![endif]-->
<head>
  <base href="<?php echo URL::to('/'); ?>">
  <!-- Basic Page Needs -->
  <meta charset="utf-8">
  <title>Imprenta Peruamerica</title>
  <meta name="description" content="">
  <meta name="author" content="">
  
  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS Style -->
  <link href="public/packages/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

  <link rel="stylesheet" href="public/css/style.css"> 
  
  <!-- Color Skins -->
  <link rel="stylesheet" href="public/css/blue.css" > 
  
  <!-- Layout Style -->
  <link rel="stylesheet" href="public/css/wide.css" > 
  
  <!-- Style Switcher Box -->
  <link rel="stylesheet" href="public/css/switcher.css">

<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,200,200italic,300,300italic,400italic,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <!-- Start JavaScript -->
    <script src="public/js/msj.js"></script> <!-- Style Switcher -->
    <script src="public/packages/jquery/jquery.min.js"></script>
    <script src="public/packages/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="public/packages/jquery-cookie/jquery.cookie.js"></script>  
    <script src="public/js/cart.js"></script>
    <script src="public/js/guest.js"></script>

     <script src="public/js/custom.js"></script>
    <script src="public/js/jquery.uniform.min.js"></script> <!-- jQuery Uniform --> 
    <script src="public/js/ddsmoothmenu.js"></script> <!-- Nav Menu ddsmoothmenu -->
    <script src="public/js/jquery.flexslider.js"></script> <!-- Flex Slider  -->
    <script src="public/js/jquery.eislideshow.js"></script> <!-- Elastic Slider  -->
    <script src="public/js/jquery.iconmenu.js"></script> <!-- Sliding Text and Icon Menu Style  -->
    <script src="public/js/colortip.js"></script> <!-- Colortip Tooltip Plugin  -->
    <script src="public/js/tytabs.js"></script> <!-- jQuery Plugin tytabs  -->
    <script src="public/js/carousel.js"></script> <!-- jQuery Carousel  -->
    <script src="public/js/jquery.prettyPhoto.js"></script> <!-- jQuery Prettyphoto  -->
    <script src="public/js/jquery.isotope.min.js"></script> <!-- Isotope Filtering  -->
    <script src="public/js/selectnav.js"></script> <!-- Responsive Navigation Menu by SelectNav -->
    <script src="public/js/jquery.ui.totop.js"></script> <!-- UItoTop plugin  -->
    <script src="public/js/jquery.tweet.js"></script> <!-- jQuery Tweets -->
    <script src="public/js/jflickrfeed.min.js"></script> <!-- jQuery Flickr -->
    <script src="public/js/twitter-flickr-options.js"></script> <!-- jQuery Tweets Options -->
    <script src="public/js/styleswitch.js"></script> <!-- Style Switcher -->

 
  <!-- End JavaScript -->



  <!-- Favicons -->
  <link rel="shortcut icon" href="images/favicon/favicon.ico">
  <link rel="apple-touch-icon" href="images/favicon/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png">

  <script type="text/javascript">
    function muestra(capa){
      xShow(capa);
    }
    function oculta(capa){
      xHide(capa);
    }
    </script>

</head>
<body>

    <div class="headerp">
        <ul id="my-order" class=" carrop nav navbar-nav" style="float:right">
              <li class="dropdown">
                  <a id="themes" href="#" data-toggle="dropdown" class="dropdown-toggle"> <div class="sesionp2">Mi Pedido </div> </a>
                  <ul id="my-order-items" aria-labelledby="themes" class="dropdown-menu">
                      <li>
                          <a href="#" class="total">Total: <b>S/. 0.00</b></a>
                      </li>
                  </ul>
              </li>                    
        </ul>

        <div class="sesion">
          <div class="sesionp"> <a href="public"> Preguntas Frecuentes </a></div>
          <div class="sesionp">|</div>
          <div class="sesionp"><a href="public/iniciarsesion"> Iniciar sesión </a></div> 
          <div class="sesionp">|</div>
          <div class="sesionp"> <a href="public/nuevo/registro"> Registrarme </a></div> 
          <div class="sesionp">|</div>
      </div>
    </div>
<div id="wrap" class="boxed">
  <header>
    <div class="container clearfix">
    
      <div class="one-third column">
        <div class="logo">
        <a href="public">
          <img src="public/imagenes/logo.png" alt="" />
        </a>
        </div>
      </div><!-- End Logo -->

      <div class="two-thirds column">

         

          <nav id="menu" class="navigation" style="float:right">
            <ul id="nav">
              <li><a href="public">Inicio</a></li>

              <li><a href="index.html">¿Quiénes Somos?</a></li>

              <li><a href="public/clientes">Clientes</a></li>

              <li><a href="blog.html#5">Productos</a></li>

              <li><a href="contact.html">Contacto</a></li>
            </ul>         
          </nav>
          
      </div><!-- End Menu -->
      
      <div class="sixteen columns"><hr /></div>
      
    </div><!-- End Container -->
  </header><!-- <<< End Header >>> -->



<?php  echo $content; ?>




  <footer>
    <div class="container">
    

    
      <div class="nine columns">
        <div class="about">
          <h3 class="titlefooter">PeruAmerica - Copyright 2015 Sitio web diseñado en <a href="http://www.incuba.pe">Incuba.Pe </a></h3>
        </div>
      </div><!-- End about -->
      

     
      <div class="right five columns">
      <div style="padding-top: 15px;">
        <img src="public/imagenes/face.png" style="padding-left:8px;">
        <img src="public/imagenes/you.png" style="padding-left:8px;">
        <img src="public/imagenes/twiter.png" style="padding-left:8px;">
        <img src="public/imagenes/pinte.png" style="padding-left:8px;">
      </div>
      </div><!-- End subscribe -->
      
      
    </div><!-- End container -->
  </footer><!-- <<< End Footer >>> -->
  
  </div><!-- End wrap -->
  
</body>
</html>