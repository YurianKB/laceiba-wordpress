<?php get_header(); ?>  <!-- obtiene las cabeceras -->



<div class="container">
    <!-- Secction 1 -->

    <!-- Section 4  -->
    <div class="row section3 maps bg-light">

    </div>
    <div class="row content-google-maps bg-light">
        <div class="col-md-1">
            <a href="https://www.google.com/maps/place/20%C2%B041'25.4%22N+87%C2%B002'09.3%22W/@20.6903954,-87.0380926,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d20.6903954!4d-87.0359039?hl=es" target="_BLANCK">
                <img class="img-fluid img-maps" src="/ceiba/wp-content/themes/ceiba/assets/imgs/footer/gmaps.png" alt="Google Maps">
            </a>
        </div>
        <div class="col-md-11">
            <a href="https://www.google.com/maps/place/20%C2%B041'25.4%22N+87%C2%B002'09.3%22W/@20.6903954,-87.0380926,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d20.6903954!4d-87.0359039?hl=es" target="_BLANCK">
                <p class="f-s-15em">
                    Encuéntranos utilizando google maps.
                </p>
            </a>
        </div>
    </div>
    <!-- Fn Section 4  -->
    <!-- Section Contact -->
    <div class="row content-contacto  bg-light pt-5">
        <div class="col-md-5">
            <p >
                <i class="fa fa-whatsappf-s-13em" aria-hidden="true"></i> 
                <span class="f-s-20em">
                    +52 1(984) 157 70 45
                </span>
            </p>
            <p class="f-s-13em">
               <i class="fa fa-envelope" aria-hidden="true"></i> 
               info@laceibaciudadmayacoba.com
            </p>
            <p class="f-s-13em">
               <i class="fa fa-map-marker" aria-hidden="true"></i>
               Carretera Federal Chetumal - <br>
               &nbsp;&nbsp; Puerto Juárez <br>
               &nbsp;&nbsp; Km 290 Playa del Carmen <br>
               &nbsp;&nbsp; Q. Roo, C.P. 77710 México 
            </p>
            <div class="col-md-12 d-flex justify-content-center content-icons-redes">
                <a href="https://www.facebook.com/ceiba.ciudadmayakoba" target="_BLANCK"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                <a href="https://twitter.com/ceiba_ciudad" target="_BLANCK"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                <a href="https://www.instagram.com/ceiba.ciudadmayakoba/" target="_BLANCK"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
                <a href="https://www.youtube.com/watch?v=EXL_TL3LADw&t=1s" target="_BLANCK"> <i class="fa fa-youtube-play" aria-hidden="true"></i> </a>
            </div>
        </div>
        <div class="col-md-7">
            <h2>Contáctanos para más información</h2>

            <?php  echo do_shortcode( '[contact-form-7 id="28" title="Contactanos"]' );   ?>
        </div>
        <div class="col-md-12">
        </div>
    </div>
    <!-- Fn Section Contact -->
</div>

<!-- Modal -->
<div class="modal fade" id="contactoModal" tabindex="-1" role="dialog" aria-labelledby="contactoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactoModalLabel">Contáctanos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php  echo do_shortcode( '[contact-form-7 id="28" title="Contactanos"]' );   ?>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div> -->
    </div>
  </div>
</div>

<?php get_footer(); ?> <!-- obtiene el footer -->