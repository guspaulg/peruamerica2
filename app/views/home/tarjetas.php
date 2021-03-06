

  <div class="container gallery clearfix">
  
   <div class="sixteen columns">
      <h1 class="page-title">Tarjetas Personales <span class="line"></span></h1>  </br></br>
   </div><!-- Page Title -->
 

   <!-- Start Project Details -->
   <div class="seven columns  bottom">
     
      <div class="row">          
        <div class="col-md-12"> 
          <div class="well bs-component">

              
              <?php 
              if($vista>1) {  
              ?>  
              <div style="width:100%;">

                  <div style="width:40% ;float:left; margin-left:10%;"> 
                      <P class="resumen">Costo :</P>
                      <div class="costos"> S/. <?php echo $costo;?> </div>
                      <p class="costo2"> <strong>Incluido:</strong></br> I.G.V. y Gastos de envio </P>
                  </div>

                  <div class="caja"> 
                      <img src="public/imagenes/caja.png" style="margin: 0 auto;">
                  </div>

              </div>    

              <div class="div-comprar">
                   <?php 
                      echo Form::open(array('url' => '/carrito/confirm','method' => 'get')); 
                      $detalles='tipo de papel: '.$papel.' ; bordes: '.$cantos.' ; Diseño: '.$diseno;
                      echo Form::submit('Comprar ahora', array(
                          'class' => 'comprar btn-primary btn-lg btn-block',
                          'data-precio' => $costo,
                          'data-cantidad' => $cantidad,
                          'data-detalles' => $detalles,  
                          'data-producto' => $producto,)); 
                      echo Form::close(); 
                      ?>
              </div>

              <?php
                } 
              ?>

              <div class="titulo-param">Elige tus Parametros </div>
              <?php 
              echo Form::open(array('url' => '/tarjetas' , 'method' => 'post')); 
              ?>
              <div class="form-group">
                  <?php
                  echo Form::label('cantidad', ' Cantidad', array('class' => 'pregunta')); 
                  ?>
                  <div id="popup">
                    <a>
                      <img src="public/imagenes/info.png">
                      <span> <div class="titulo-selec"> Cantidad </div>Elige la <b>cantidad</b> que desees, seleccionando en el desplegable 
                      alguna de las opciones más usuales.</span>
                    </a>
                  </div>
                  <?php
                  echo Form::select('cantidad', array('1' => '1 millar', '2' => '2 Millares',
                   '5' => '5 millares',  '10' => '10 millares'), 'cantidad', array('class' => 'form-control2'));
                  ?>                   
              </div>


              <div class="form-group">
                  <?php
                  echo Form::label('papel', 'Tipo de papel', array('class' => 'pregunta')); 
                  ?>
                  <div id="popup">
                    <a>
                      <img src="public/imagenes/info.png">
                      <span> <div class="titulo-selec"> Papel</div>El material más utilizado para este producto es el <strong>Plastificado
                       mate</strong> por su presentación elegante. tambien Utilizamos cartulina opalina que tiene mayor opacidad y blancura, 
                       es rígida y sedosa al tacto, y es la ideal para poder escribir encima sin ningún tipo de problema.<br><br>Puedes escoger 
                      también elegir el plastificado brillante si deseas un producto de fantasía que ofrece un resultado excelente.</span>
                    </a>
                  </div>
                  <?php
                  echo Form::select('papel', array('1' => 'Cartulina', '2' => 'Papel Couche',
                   '3' => 'Papel couche brillante'), 'papel',array('class' => 'form-control2'));
                  ?>
              </div>
              <div class="form-group">
                  <?php
                  echo Form::label('cantos', '¿Cómo quieres los bordes ?', array('class' => 'pregunta')); 
                  ?>
                  <div id="popup">
                    <a>
                      <img src="public/imagenes/info.png">
                      <span> <div class="titulo-selec"> Bordes </div>Si quieres dar un toque distinto a este producto, 
                      puedes  escoger  para que los vértices queden redondeados</span>
                    </a>
                  </div>
                  <?php
                  echo Form::select('cantos', array('1' => 'Bordes redondeados', '2' => 'Bordes en punta'),'cantos', array('class' => 'form-control2'));
                  ?>
              </div>

              <div class="form-group">
                  <?php
                  echo Form::label('diseno', '¿Tienes tu propio diseño?', array('class' => 'pregunta')); 
                  ?>
                  <div id="popup">
                    <a>
                      <img src="public/imagenes/info.png">
                      <span> <div class="titulo-selec"> Bordes </div>Si quieres dar un toque distinto a este producto, 
                      puedes  escoger  para que los vértices queden redondeados</span>
                    </a>
                  </div>
                  <?php
                  echo Form::select('diseno', array('1' => 'No, quiero que Peruamerica me proponga un diseño', 
                      '2' => 'si, tengo un diseño',), 'diseno', array('class' => 'form-control2'));
                  ?>
              </div>
              <?php
              echo Form::submit('¡Calcular presupuesto!', array('class' => 'calcular btn btn-primary btn-lg btn-block')); 
              echo Form::close(); ?>


                                
          </div>  
        </div>
      </div>
   </div>

      <!-- ++++++++++++++++++ columna tres +++++++++++++++++++++++++++ -->
           <div class="nine columns top bottom">

             <div class="espacio-2 col-md-12 col-sm-12">
               
                  <div id="bigPic">
                    <img src="public/imagenes/tarjeta0.png" alt="" style="display: none; opacity: 1; z-index: 1;">
                    <img src="public/imagenes/tarjeta1.png" alt="" style="display: none; opacity: 1; z-index: 1;">
                    <img src="public/imagenes/tarjeta2.png" alt="" style="display: none; opacity: 1; z-index: 1;">
                    <img src="public/imagenes/tarjeta3.png" alt="" style="display: none; opacity: 1; z-index: 1;">
                    <img src="public/imagenes/tarjeta4.png" alt="" style="display: none; opacity: 1; z-index: 1;">
                    
                  </div>
                  
                  <ul id="thumbs">
                    <li class=" " rel="1"><img src="public/imagenes/tarjeta_0.png" alt=""></li>
                    <li class=" " rel="2 "><img src="public/imagenes/tarjeta_1.png" alt=""></li>
                    <li rel="3" class=" "><img src="public/imagenes/tarjeta_2.png" alt=""></li>
                    <li rel="4" class=" "><img src="public/imagenes/tarjeta_3.png" alt=""></li>
                    <li rel="5" class=" "><img src="public/imagenes/tarjeta_4.png" alt=""></li>
                  
                  </ul>
                  

             </div><!-- End slider-project -->  

             <h2 class="title top-2 bottom-2">Detalles del servicio :<span class="line"></span></h2>
               
               <div class="about-project bottom">
                 <p>
                  Solo <strong>Peruamerica</strong> es capaz de ofrecer un servicio óptimo al<strong> Precio Justo</strong>. 
                  Podras optar por enviarnos tu propio diseño o hacer uso de los servicios de nuestros diseñadores gráficos 
                  para lograr un diseño profesional acorde a tus necesidades.</p>
               </div>
               
              
               
               <h2 class="title bottom-2">Nuestro servicio incluye :<span class="line"></span></h2>
               
                <ul class="square-list job bottom-2">
                  <li class="mili"> Impresión Full Color Ambas Caras. </li>
                  <li class="mili">Impresión con Garantía y Calidad.</li>
                  <li class="mili"> Diseño Personalizado. </li>
                  <li class="mili"> Reparto a domicilio GRATIS. </li>
                  <li class="mili"> Asistencia online y telefónica permanente para nuestros clientes. </li>
                </ul><!-- End square-list -->



           </div>
   <!-- ++++++++++++++++++ final columna tres +++++++++++++++++++++++++++ -->


</div><!-- <<< End Container >>> -->
  
      
<script type="text/javascript">
  var currentImage;
    var currentIndex = -1;
    var interval;
    function showImage(index){
        if(index < $('#bigPic img').length){
          var indexImage = $('#bigPic img')[index]
            if(currentImage){   
              if(currentImage != indexImage ){
                    $(currentImage).css('z-index',2);
                    clearTimeout(myTimer);
                    $(currentImage).fadeOut(250, function() {
              myTimer = setTimeout("showNext()", 3000);
              $(this).css({'display':'none','z-index':1})
          });
                }
            }
            $(indexImage).css({'display':'block', 'opacity':1});
            currentImage = indexImage;
            currentIndex = index;
            $('#thumbs li').removeClass('active');
            $($('#thumbs li')[index]).addClass('active');
        }
    }
    
    function showNext(){
        var len = $('#bigPic img').length;
        var next = currentIndex < (len-1) ? currentIndex + 1 : 0;
        showImage(next);
    }
    
    var myTimer;
    
    $(document).ready(function() {
      myTimer = setTimeout("showNext()", 3000);
    showNext(); //loads first image
        $('#thumbs li').bind('click',function(e){
          var count = $(this).attr('rel');
          showImage(parseInt(count)-1);
        });
  });
    


  </script> 