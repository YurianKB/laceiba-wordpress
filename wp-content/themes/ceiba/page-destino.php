<?php 
/*
* Template Name: Template Destino
*/ ?>
<?php get_header(); ?>  <!-- obtiene las cabeceras -->

<div class="banner-header">

    <?php  echo do_shortcode( '[smartslider3 slider=11]' );   ?>
</div>

<div class="container-fluid">
    <!-- Secction 1 -->
    <div class="row section1">

        <?php get_template_part('template-parts/content', 'contact' ); ?>
        <div class=" col-md-12 d-flex justify-content-center f-s-13em bg-light pt-2">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactoModal"> <?php echo pll__('Contáctanos'); ?></button>
        </div>
        <div class="col-md-6 bg-light text-secondary p-tbl-em">
            <p>
                <strong class="green"><?php echo pll__('Cancún y la Riviera Maya'); ?> </strong> <?php echo pll__('se han caracterizado por sus inigualables playas y el hermoso color turquesa del mar caribe que las baña. El destino turístico número uno del país y del Caribe jamás deja de sorprendernos ya que es todo eso y más. Cuenta con la mejor conexión entre Norte América y Latino America con más de 20 millones de pasajeros al año'); ?>.
            </p>
            <p>
                <?php echo pll__('Hoy en día Cancún y la Riviera Maya tienen nuevas aventuras y atracciones para todo estilo de vida. Es un destino lleno de oportunidades, de cultura, entretenimiento y que ofrece una vida tranquila al abrigo del mar caribe'); ?>.
            </p>
        </div>

        <div class="col-md-6 bg-light text-secondary p-tbr-em">
            <p>
                <?php echo pll__('Disfruta de nuestra herencia cultural Maya, tradiciones ancestrales, sabores e historia. Siente su música y admira sus brillantes expresiones culturales'); ?>.
            </p>
            <p>
                <?php echo pll__('El Caribe Mexicano tiene el privilegio de contar con espectaculares zonas arqueológicas como Coba,  Chichen Itza (nombrado Patrimonio Mundial de la Humanidad por la UNESCO y considerado una de las “Siete Nuevas Maravillas del Mundo”) y Tulum  al igual que una gran cantidad de increíbles lugares en donde aventurarse en toda la región'); ?>.
            </p>

        </div>

        <!-- banner seguridad -->
        <div class="content-privilegio col-md-12 p-0">
            <?php  echo do_shortcode( '[smartslider3 slider=13] ' );   ?>
        </div>
    </div>  
    <!-- Fn Section 1 -->


    <div class="row bg-light text-secondary section2  pt-2">
        <!-- <div class="col-md-4 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-1.jpg" alt="Arquitectura y Cultura Maya">
        </div>
        <div class="col-md-4 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-2.jpg" alt="Arquitectura y Cultura Maya">
        </div>
        <div class="col-md-4 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-3.jpg" alt="Arquitectura y Cultura Maya">
        </div> -->
        <div class="col-md-12 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/collage/destino/ruinas1.jpg" alt="Arquitectura y Cultura Maya">
        </div>
        <!-- <div class="col-md-4 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-4.jpg" alt="Arquitectura y Cultura Maya">
        </div>
        <div class="col-md-4 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-5.jpg" alt="Arquitectura y Cultura Maya">
        </div>
        <div class="col-md-4 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-6.jpg" alt="Arquitectura y Cultura Maya">
        </div> -->
        <div class="col-md-12 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/collage/destino/ruinas2.jpg" alt="Arquitectura y Cultura Maya">
        </div>

    </div>    


    <!-- Section 3 -->
    <div class="row section3 jungle1  f-s-15em">
        <!-- <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/selva.png" alt="Fondo Serva"> -->
        <div class="col-md-6">
            <p class="p-0-3em ">
                <?php echo pll__('Para los que tienen sed de aventura, El Caribe Mexicano les tiene preparadas un sinfín de actividades a escoger que podrán disfrutar con todos los miembros de la familia y amigos'); ?>.
            </p>
        </div>
        <div class="col-md-6">
            <p class="p-0-3em">
                <?php echo pll__('Siente la frescura de un cenote, sumérgete junto a los tiburones ballena, disfruta de un paseo en yate, recorre ríos subterráneos y explora la exuberante jungla maya. ');?>
            </p>
        </div>
    </div>     
    <div class="row  pt-2 bg-light">
        <!-- banner seguridad -->
        <div class="content-privilegio col-md-12 p-0 ">
            <?php  echo do_shortcode( '[smartslider3 slider=14] ' );   ?>
        </div>
    </div>

    <!-- Second block Images -->
    <div class="row bg-light text-secondary section2  pt-2">
        <!-- <div class="col-md-6 pr-2">
            <div class="row">
                <div class="col-md-12 pb-2 "> 
                    <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-b-1.jpg" alt="Activiadades Acuaticas">
                </div>
                <div class="col-md-7 pb-2"> 
                    <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-b-2.jpg" alt="Activiadades Acuaticas">
                </div>
                <div class="col-md-5 pb-2 "> 
                    <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-b-3.jpg" alt="Activiadades Acuaticas">
                </div>
            </div>
        </div>

        <div class="col-md-6 pb-2 pl-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-b-4.jpg" alt="Activiadades Acuaticas">
        </div> -->
        <div class="col-md-12 pb-2 pl-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/collage/destino/mar.jpg" alt="Activiadades Acuaticas">
        </div>
        
        <!-- <div class="col-md-4 col-sm-6 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-b-5.jpg" alt="Activiadades Acuaticas">
        </div>
        <div class="col-md-4 col-sm-6 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-b-6.jpg" alt="Activiadades Acuaticas">
        </div>
        <div class="col-md-4 col-sm-6 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-b-7.jpg" alt="Activiadades Acuaticas">
        </div>

        <div class="col-md-7 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-b-8.jpg" alt="Activiadades Acuaticas">
        </div>
        <div class="col-md-5 p  b-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-b-9.jpg" alt="Activiadades Acuaticas">
        </div> -->
        <div class="col-md-12 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/collage/destino/mar2.jpg" alt="Activiadades Acuaticas">
        </div>


    </div>  

    <div class="row section3 jungle1  f-s-15em">
        <!-- <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/selva.png" alt="Fondo Serva"> -->
        <div class="col-md-6">
            <p class="text-destino p-0-3em border-left-tg">
                <?php echo pll__('Usted y su familia tienen una inigualable oferta de actividades para disfrutar y compartir, creando memorias que duraran para toda la vida.            ');?>
            </p>
        </div>
        <div class="col-md-6">
            <p class="text-destino-2 p-0-3em border-left-tg">
                <?php echo pll__('Intérnate en los maravillosos escenarios de Cancún y la Riviera Maya. Vuela, sumérgete ¡atrévete a vivir nuevas experiencias!');?>
            </p>
        </div>
    </div>   

    <div class="row pt-2 bg-light">
        <!-- banner seguridad -->
        <div class="content-privilegio col-md-12 p-0">
            <?php  echo do_shortcode( '[smartslider3 slider=15]' );   ?>
        </div>
    </div>
    <!-- third block images -->
    <div class="row bg-light text-secondary section2  pt-2">
        
        <!-- <div class="col-md-4 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-c-1.jpg" alt="Experiencias">
        </div>
        <div class="col-md-4 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-c-2.jpg" alt="Experiencias">
        </div>
        <div class="col-md-4 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-c-3.jpg" alt="Experiencias">
        </div>
        <div class="col-md-3 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-c-4.jpg" alt="Experiencias">
        </div>
        <div class="col-md-4 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-c-5.jpg" alt="Experiencias">
        </div>
        <div class="col-md-5 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-c-6.jpg" alt="Experiencias">
        </div>
        <div class="col-md-4 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-c-7.jpg" alt="Experiencias">
        </div>
        <div class="col-md-4 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-c-8.jpg" alt="Experiencias">
        </div>
        <div class="col-md-4 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/gallery-c-9.jpg" alt="Experiencias">
        </div> -->
        
        <div class="col-md-12 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/collage/destino/concierto.jpg" alt="Experiencias Concierto">
        </div>
        
        <div class="col-md-12 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/collage/destino/voladores.jpg" alt="Experiencias voladores">
        </div>
        
        <div class="col-md-12 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/collage/destino/xcaret.jpg" alt="Experiencias Boda Xcaret">
        </div>
        

    </div> 
    
    <div class="row section3 jungle1  f-s-15em">
        <!-- <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/selva.png" alt="Fondo Serva"> -->
        <div class="col-md-6">
            <p class="text-destino p-0-3em border-left-tg">
                <?php echo pll__('El Caribe Mexicano cuenta con una gastronomía amplia, única y reconocida a nivel mundial por la fusión de sabores de latinoamérica y el resto del mundo.');?>
            </p>
        </div>
        <div class="col-md-6">
            <p class="text-destino-2 p-0-3em border-left-tg">
                <?php echo pll__('La lista de restaurantes que los visitantes del destino pueden saborear es infinita, siempre cuidando la excelencia en el servicio y la calidad otorgada por los mejores chefs a nivel mundial.');?>
            </p>
        </div>
    </div>   
    
    <div class="row pt-2 bg-light">
        <!-- banner seguridad -->
        <div class="content-privilegio col-md-12 p-0">
            <?php  echo do_shortcode( '[smartslider3 slider=16]' );   ?>
        </div>
    </div>
    
    <!-- Forth block images -->
    <div class="row bg-light text-secondary section2  pt-2">
        
        <!-- <div class="col-md-4 col-sm-8  pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/food-1.jpg" alt="Placeres Culinarios">
        </div>
        <div class="col-md-2 col-sm-4 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/food-2.jpg" alt="Placeres Culinarios">
        </div>
        <div class="col-md-4 col-sm-8  pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/food-3.jpg" alt="Placeres Culinarios">
        </div>
        <div class="col-md-2 col-sm-4 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/food-4.jpg" alt="Placeres Culinarios">
        </div> -->
        <div class="col-md-12  pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/collage/destino/comida.jpg" alt="Placeres Culinarios">
        </div>
        
        
    </div> 
    
    <div class="row section3 jungle1  f-s-15em">
        <!-- <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/selva.png" alt="Fondo Serva"> -->
        <div class="col-md-6">
            <p class="text-destino p-0-3em border-left-tg">
                <?php echo pll__('Con la recien inaugurada Terminal 4 se pretende atender a nueve millones de pasajeros adicionales , una capacidad para movilizar hasta más de 25 millones de pasajeros anuales.');?>
            </p>
        </div>
        <div class="col-md-6">
            <p class="text-destino-2 p-0-3em border-left-tg">
               <?php echo pll__(' El Aeropuerto Internacional de Cancún, se encuentra a tan solo 16 kilómetros de la ciudad de Cancún y a 45 minutos aproximandamente de Playa del Carmen.');?>
            </p>
        </div>
    </div>   
    
    <div class="row pt-2 bg-light">
        <!-- banner seguridad -->
        <div class="content-privilegio col-md-12 p-0">
            <?php  echo do_shortcode( '[smartslider3 slider=17]' );   ?>
        </div>
    </div>

    <!-- Block Fly images and text -->
    <div class="row bg-light text-secondary section2  pt-2">
        
        <div class="col-md-4 col-sm-6 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/fly-1.jpg" alt="Placeres Culinarios">
        </div>
        <div class="col-md-4 col-sm-6 pb-2"> 
            <p class="p-0-3em content-pt-3em">
                <strong class="green"><?php echo pll__('El Aeropuerto Internacional de Cancún');?></strong> <?php echo pll__(' es en términos de número de pasajeros y operaciones aéreas el segundo más importante del país, solo después del Aeropuerto Internacional de la Ciudad de México,  y el que atiende a más pasajeros internacionales en todo el país. Se calculan que para 2020, la capacidad se  incremente hasta los 32 millones, cuando la Terminal 4 esté concluida en su totalidad');?>.
            </p>
        </div>
        <div class="col-md-4 col-sm-6 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/destino/fly-2.jpg" alt="Placeres Culinarios">
        </div>

        
        
    </div> 
    <!-- Block mapa-->
    <?php get_template_part('template-parts/content', 'map' ); ?>
</div>

<!-- Block contat form-->
<?php get_template_part('template-parts/content', 'contact-form' ); ?>


<?php get_footer(); ?> <!-- obtiene el footer -->