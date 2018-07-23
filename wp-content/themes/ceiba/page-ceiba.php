<?php 
/*
* Template Name: Template Page Ceiba
*/ ?>
<?php get_header(); ?>  <!-- obtiene las cabeceras -->

    <!-- Banner -->
    <div class="banner-header">

        <?php  the_field( 'slider1' );   ?>
    </div>

<div class="container-fluid">
    <!-- Secction 1 -->
    <div class="row section1">

        <?php get_template_part('template-parts/content', 'contact' ); ?>
        <div class="col-md-6 bg-light text-secondary p-tbl-em">
            <p>
                <strong class="green"> <?php echo pll__( 'La Ceiba Ciudad Mayakoba'); ?> </strong>  <?php echo pll__( 'es un proyecto impulsado por nuestro amor a la naturaleza y a la arquitectura moderna. Pasamos meses ideando la manera de conjuntar estas dos pasiones, resultando en un espectacular diseño orgánico en armonía con la naturaleza. Nuestra inspiración surge del entorno del predio en que La Ceiba Ciudad Mayakoba será edificado, que cuenta con bellezas inimaginables'); ?>. 
            </p>
            <p>
                <?php echo pll__( 'El interior de los condominios continúa con nuestro objetivo de fusionar la naturaleza con el modernismo. Cuenta con carpintería de lujo en puertas y closets. La cocina se diseñó con espacios prácticos y funcionales para la vida diaria, con cubiertas de granito que hacen evidente la exclusividad del conjunto. Las estancias, comedor, y recamaras manifiestan una agradable amplitud con una altura libre de 3m. Las vistas desde las terrazas podrán satisfacer diferentes gustos, ya que se puede tener vista a la impresionante Selva Maya, o a nuestras amenidades y albercas recreativas. Vivirás en un ambiente de continua convivencia con la la naturaleza'); ?> . 
            </p>
        </div>

        <div class="col-md-6 bg-light text-secondary p-tbr-em">
            <p>
                <?php echo pll__( 'La primera fase del desarrollo se entregará en Diciembre de 2019 e incluirá amenidades para que puedas comenzar a disfrutar de tu privilegiada nueva forma de vida. Casa club, canchas de tenis y padel, alberca semi-olímpica, albercas recreativas, albercas infantiles y asadores entre otras'); ?> .
            </p>
            <p>
                <?php echo pll__( 'Pensado en cuidar la otra parte de tu patrimonio, La Ceiba Ciudad Mayakoba incluye en cada condominio el uso exclusivo y asignado de cajones de estacionamiento cubiertos: Los condominios de 2 recamaras cuentan con 1 cajón y los de 3 y 4 recamaras contarán con dos cajones. Adicionalmente están contemplados espacios adicionales para visitas'); ?>. 
            </p>
            <p>
                <?php echo pll__( 'Invertir en La Ceiba Ciudad Mayakoba te brinda una alta plusvalía en la región con el crecimiento económico mas alto del país y América latina.  Podrás beneficiarte del mejor precio por metro cuadrado en el desarrollo mejor planeado y concebido de la Riviera Maya'); ?> . 
            </p>
            <div class="d-flex justify-content-center f-s-13em mb-4">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactoModal"> <?php echo pll__( 'Contáctanos'); ?> </button>
            </div>
        </div>

        <!-- banner seguridad -->
        <div class="content-privilegio col-md-12 p-0 pb-2">
            <?php   the_field( 'slider2' );   ?>
        </div>



    </div>  
    <!-- Fn Section 1 -->

    <div class="row section3 jungle2">
        <div class="col-md-12">
            <p class="title2">
                <?php echo pll__( 'CONDOMINIOS DE 2, 3 Y 4 RECÁMARAS'); ?>
            </p>
        </div>

    </div>   

    <!-- Section 2 -->
    <div class="row bg-light-2 text-secondary section2  pt-3">
        <div class="row condominio mt-3 mb-5 condominio-left">
            <h3 class="col-md-12 d-flex justify-content-center title-ceiba-condominio"><?php echo pll__( 'Condominio de 2 recámaras'); ?></h3>
            <div class="col-md-6">
                <a href="/ceiba/wp-content/themes/ceiba/assets/imgs/condominios/condo-2.png" data-lightbox="Condominios 1" data-title="<?php echo pll__( 'Condominio de 2 recámaras'); ?>">
                    <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/condominios/condo-2.png" alt="Condominio Prespectiva">
                </a>
            </div>
            <div class="col-md-6">
                <p>
                    <?php echo pll__( '2 recámaras que contemplan cálidos espacios habitables, enmarcados en 93 m2 de magníficos acabados y diseño de vanguardia. Meticuloso cuidado a los detalles que brinda amplios espacios abiertos de convivencia con abundante iluminación natural'); ?>.
                </p>
            </div>
        </div>
        <hr class="hr-condominio1">
        <div class="row condominio mt-3 mb-5 d-flex flex-row-reverse condominio-right">
            <h3 class="col-md-12 d-flex justify-content-center title-ceiba-condominio"><?php echo pll__( 'Condominio de 3 recámaras'); ?></h3>
            <div class="col-md-6">
                <a href="/ceiba/wp-content/themes/ceiba/assets/imgs/condominios/condo-3.png" data-lightbox="Condominios 1" data-title="<?php echo pll__( 'Condominio de 3 recámaras'); ?>">
                    <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/condominios/condo-3.png" alt="Condominio Prespectiva">
                </a>
            </div>
            <div class="col-md-6">
                <p>
                    <?php echo pll__( '3 recámaras en una superficie total de 110 m2. Interiorismo al detalle, espacios diseñados con los más altos estándares de funcionalidad y estilo para transformar la rutina de la vida diaria en recuerdos inolvidables'); ?>.                
                </p>
            </div>
        </div>
        <hr class="hr-condominio2">
        <div class="row condominio mt-3 mb-5 condominio-left">
            <h3 class="col-md-12 d-flex justify-content-center title-ceiba-condominio"><?php echo pll__( 'Condominio de 4 recámaras'); ?></h3>
            <div class="col-md-6">
                <a href="/ceiba/wp-content/themes/ceiba/assets/imgs/condominios/condo-4.png" data-lightbox="Condominios 1" data-title="<?php echo pll__( 'Condominio de 4 recámaras'); ?>">
                    <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/condominios/condo-4.png" alt="Condominio Prespectiva">
                </a>
            </div>
            <div class="col-md-6">
                <p>
                    <?php echo pll__( '4 recámaras, lujo definido en función del espacio. El condominio de mayor amplitud al contar con 140 m2. Ofrece la comodidad de dos habitaciones principales y cuatro baños completos. Disfrute de la dualidad entre convivencia y privacidad gracias a su estudiado diseño interior'); ?>.
                </p>
            </div>
        </div>

    </div>
    <div class="row text-secondary section2">
        <!-- banner seguridad -->
        <div class="content-privilegio col-md-12 p-0">
            <div class="pb-2 bg-light">
                <?php   the_field( 'slider3' );   ?>
            </div>

            <div class="d-flex justify-content-center f-s-13em mb-4 mt-4">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactoModal"> <?php echo pll__( 'Contáctanos'); ?> </button>
            </div>
        </div>
    </div> 

    <div class="row bg-light text-secondary section2 pt-2 pb-2">

        <div class="col-md-6 p-0 gallery pr-2 pb-2">
            <a href="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/gallery3.jpg" data-lightbox="Galería 1" data-title="<?php echo pll__( 'Cancería color madera en armonía con su entorno'); ?>">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/gallery3.jpg" alt="habitación">
            </a>
            <p>
                <?php echo pll__( 'Cancería color madera en armonía con su entorno'); ?>
            </p>
        </div>
        <div class="col-md-6 p-0 gallery pr-2 pb-2">
            <a href="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/gallery4.jpg" data-lightbox="Galería 1" data-title="<?php echo pll__( 'Altura libre de 3 metros'); ?>">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/gallery4.jpg" alt="habitación">
            </a>    
            <p>
                <?php echo pll__( 'Altura libre de 3 metros'); ?>
            </p>
        </div>
        
        <div class="col-md-6 p-0 gallery pr-2">
            <a href="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/gallery1.jpg" data-lightbox="Galería 1" data-title="<?php echo pll__( 'Ventilación cruzada iluminación natural'); ?>">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/gallery1.jpg" alt="habitación">
            </a>    
            <p>
                <?php echo pll__( 'Ventilación cruzada iluminación natural'); ?>
            </p>
        </div>
        <div class="col-md-6 p-0 gallery pr-2 p-t-r-05">
            <a href="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/gallery2.jpg" data-lightbox="Galería 1" data-title="<?php echo pll__( 'Cubiertas de cocina en granito'); ?>">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/gallery2.jpg" alt="habitación">
            </a>    
            <p>
                <?php echo pll__( 'Cubiertas de cocina en granito'); ?>
            </p>
        </div>

    </div>    
    <div class="row bg-light text-secondary section2 pb-2">
        

        <div class="content-privilegio col-md-12 p-0">
            
            <?php  echo do_shortcode( '[smartslider3 slider=2]' );   ?>
            <!-- <hr class="text-light hr1"> -->
            <!-- <p class="text-light">    Privilegio </p> -->
            <!-- <hr class="text-light hr2"> -->
            <!-- <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section1/privilegio.jpg" alt="nadando"> -->
        </div>
    </div>
    <div id="amenidades-ceiba" class="row section3 jungle1 pt-4 ">
        <!-- <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/selva.png" alt="Fondo Serva"> -->
        <div class="col-md-12">
            <p  class="title">
                <?php echo pll__( 'Más de 40 actividades y amenidades dentro del desarrollo'); ?>
            </p>
        </div>
        <div class="mb-4 content-logo">
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/children-games.png" alt="<?php echo pll__( 'Juegos infantiles'); ?>">
            <p class="title-hoja"> <?php echo pll__( 'Juegos infantiles'); ?></p>
        </div>
        <div class="content-logo">
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/read-zone.png" alt="<?php echo pll__( 'Zona de lectura'); ?>">
            <p class="title-hoja"><?php echo pll__( 'Área de Lectura'); ?></p>
        </div>
        <div class="content-logo">
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/lobby.png" alt="<?php echo pll__( 'lobby'); ?>">
            <p class="title-hoja"><?php echo pll__( 'Lobby'); ?></p>
        </div>
        <div class="content-logo">
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/cabin-massages.png" alt="<?php echo pll__( 'masajes'); ?>">
            <p class="title-hoja"><?php echo pll__( 'Cabia de masajes'); ?></p>
        </div>
        <div class="content-logo d-none d-md-block">
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/palapas.png" alt="<?php echo pll__( 'Palapas'); ?>">
            <p class="title-hoja"><?php echo pll__( 'Palapas'); ?></p>
        </div>
        <div class="content-logo d-none d-md-block">
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/courts.png" alt="<?php echo pll__( 'Canchas'); ?>">
            <p class="title-hoja"><?php echo pll__( 'Canchas de padel'); ?></p>
        </div>
        <div class="content-logo d-none d-md-block">
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/plunge-pool.png" alt="<?php echo pll__( 'Pool'); ?>">
            <p class="title-hoja"><?php echo pll__( 'Punge Pool <br>(Roof top Lounge)'); ?></p>
        </div>
    </div> 
    <div class="row bg-light section2 pt-2">    
        <div class="col-md-6 f-s-13em content-pt-8em">

            <!-- <h3 class="d-flex justify-content-center">Casa Club</h3> -->
            <p class="pt-3 text-secondary p-0-6em ">
                <?php echo pll__( 'Conjunto de actividades, espacios y amenidades que resonaran con tus objetivos personales de salud, unión familiar, diversión, bienestar y seguridad'); ?>. 
            </p>
            <div class="d-flex justify-content-center mt-2em pb-2">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactoModal"><?php echo pll__( 'Contáctanos'); ?> </button>
            </div>
        </div>
        <div class="col-md-6 ameidades bg-light ">
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/actividad/area_verde.jpg" alt="<?php echo pll__( 'Areas Verdes'); ?>">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/green-zone.png" alt="<?php echo pll__( 'Zone Logo" class="img-logo'); ?>">
            <p><?php echo pll__( 'Contáctanos'); ?></p>
        </div>
    </div>
    <!-- Fn Section 2 -->   

    <!-- Section 3 -->
    <div class="row">
        <div class="col-md-6 ameidades pt-2 pb-2 bg-light  p-b-r0 ">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/actividad/alberca_rec.jpg" alt="<?php echo pll__( 'Nadar'); ?>" class="img-fluid p-0">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/swim.png" alt="<?php echo pll__( 'Fitness Logo" class="img-logo'); ?>">
            <p> <?php echo pll__( 'Alberca Recreativa'); ?> </p>
        </div>
        <div class="col-md-6 ameidades pt-2 pb-2 bg-light ">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/actividad/sauna.jpg" alt="<?php echo pll__( 'Sauna'); ?>" class="img-fluid p-0">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/cook.png" alt="<?php echo pll__( 'Sauna Logo" class="img-logo'); ?>">
            <p> <?php echo pll__( 'Sauna'); ?></p>
        </div>
    </div>

    <div class="row section3 jungle3">
        <div class="row">
            <div class="content-logo">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/putting-green.png" alt="<?php echo pll__( 'Golf'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Puuting Green'); ?></p>
            </div>
            <div class="content-logo">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/segurity.png" alt="<?php echo pll__( 'Seguridad'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Seguridad 20/7'); ?></p>
            </div>
            <div class="content-logo">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/carreolas.png" alt="<?php echo pll__( 'Carreolas'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Adecuado para carreolas'); ?></p>
            </div>
            <div class="content-logo">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/terraza.png" alt="<?php echo pll__( 'Terrazas'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Terrazas'); ?></p>
            </div>
            <div class="content-logo d-none d-md-block">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/shop.png" alt="<?php echo pll__( 'Tienda'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Tienda'); ?></p>
            </div>
            <div class="content-logo d-none d-md-block">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/valet-parking.png" alt="<?php echo pll__( 'Valet Parking'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Valet Parking'); ?></p>
            </div>
            <div class="content-logo d-none d-md-block">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/nature.png" alt="<?php echo pll__( 'Andadores Naturales'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Andadores Naturales'); ?></p>
            </div>
        </div>

        <div class="row pt-1">
            <div class="content-logo pb-4  d-none d-md-block">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/hamacas.png" alt="<?php echo pll__( 'Hamacas'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Hamacas'); ?></p>
            </div>
            <div class="content-logo  d-none d-md-block">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/wood-fire.png" alt="<?php echo pll__( 'Fogatas'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Área para fogatas'); ?></p>
            </div>
            <div class="content-logo  d-none d-md-block">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/swim-childs.png" alt="<?php echo pll__( 'Alberca infantil'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Alberca infantil'); ?></p>
            </div>
            <div class="content-logo  d-none d-md-block">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/bussines-center.png" alt="<?php echo pll__( 'Centro de negocios'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Centro de negocios'); ?></p>
            </div>
            <div class="content-logo  d-none d-md-block">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/run.png" alt="<?php echo pll__( 'Pista de Jogging'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Pista de Jogging'); ?></p>
            </div>
            <div class="content-logo  d-none d-md-block">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/cafeteria.png" alt="<?php echo pll__( 'Cafeteria Deli'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Cafetería Deli'); ?></p>
            </div>
            <div class="content-logo  d-none d-md-block">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/party.png" alt="<?php echo pll__( 'Salón de Usos Multiples'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Salón de Usos Multiples'); ?></p>
            </div>
        </div>

    </div> 

    <div class="row">
        <div class="col-md-4 ameidades bg-light pt-2">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/actividad/work_room.jpg" alt="<?php echo pll__( 'Workout Room'); ?>" class="img-fluid p-0">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/fit.png" alt="<?php echo pll__( 'Fit Logo" class="img-logo'); ?>">
            <p><?php echo pll__( 'Workout Room'); ?></p>
        </div>
        <div class="col-md-4 ameidades bg-light pt-2">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/actividad/tenis.jpg" alt="<?php echo pll__( 'tennis'); ?>" class="img-fluid p-0">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/tennis.png" alt="<?php echo pll__( 'tennis Logo" class="img-logo'); ?>">
            <p><?php echo pll__( 'Canchas de Tenis'); ?></p>
        </div>
        <div class="col-md-4 ameidades bg-light pt-2">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/actividad/ciclopista.jpg" alt="<?php echo pll__( 'ciclopista '); ?>" class="img-fluid p-0">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/tennis.png" alt="<?php echo pll__( 'ciclopista Logo" class="img-logo'); ?>">
            <p><?php echo pll__( 'Ciclopista'); ?></p>
        </div>

        <div class="col-md-6 ameidades pt-2 bg-light">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/actividad/park_pets.jpg" alt="<?php echo pll__( 'Parque de mascotas'); ?>" class="img-fluid p-0">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/pets.png" alt="<?php echo pll__( 'Parque de mascotas Logo" class="img-logo'); ?>">
            <p><?php echo pll__( 'Parque de mascotas'); ?></p>
        </div>
        <div class="col-md-6 ameidades pt-2 bg-light">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/actividad/alberca_asadores.jpg" alt="<?php echo pll__( 'asadores alberca'); ?>" class="img-fluid p-0">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/alberca-asadores.png" alt="<?php echo pll__( 'asadores alberca Logo" class="img-logo'); ?>">
            <p><?php echo pll__( 'Asadores (Alberca Recreativa)'); ?></p>
        </div>

        <div class="col-md-4 ameidades pt-2 pb-2 bg-light">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/actividad/gym_ext.jpg" alt="<?php echo pll__( 'Gym Exterior infantil'); ?>" class="img-fluid p-0">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/gym-ext.png" alt="<?php echo pll__( 'Gym Exterior infantil Logo" class="img-logo'); ?>">
            <p><?php echo pll__( 'GYM Exterior'); ?></p>
        </div>
        <div class="col-md-4 ameidades pt-2 pb-2 bg-light p-t-r0 p-b-r0">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/actividad/kids_club.jpg" alt="<?php echo pll__( 'ABC'); ?>" class="img-fluid p-0">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/abc.png" alt="<?php echo pll__( 'ABC Logo" class="img-logo'); ?>">
            <p><?php echo pll__( 'Kids Room'); ?></p>
        </div>
        <div class="col-md-4 ameidades pt-2 pb-2 bg-light">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/actividad/badmni.jpg" alt="<?php echo pll__( 'Badminton'); ?>" class="img-fluid p-0">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/badmni.png" alt="<?php echo pll__( 'Badminton Logo" class="img-logo'); ?>">
            <p><?php echo pll__( 'Badminton'); ?></p>
        </div>
    </div>

    <div class="row section3 jungle3">
        <div class="row mt-4">
            <div class="content-logo-2 mb-4">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/game-table.png" alt="<?php echo pll__( 'Salón de Juegos'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Salón de Juegos'); ?></p>
            </div>
            <div class="content-logo-2">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/jacuzzi.png" alt="<?php echo pll__( 'jacuzzi'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Jacuzzi <br> (Boof Top Lounge)'); ?></p>
            </div>
            <div class="content-logo-2">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/chair.png" alt="<?php echo pll__( 'Silla de ruedas'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Adecuado para silla de ruedas'); ?></p>
            </div>
            <div class="content-logo-2">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/games-room.png" alt="<?php echo pll__( 'Salón de Juegos'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Game Room'); ?></p>
            </div>
            <div class="content-logo-2 d-none d-md-block">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/fitness-center.png" alt="<?php echo pll__( 'Fitness Center'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Fitness Center'); ?></p>
            </div>
            <div class="content-logo-2 d-none d-md-block">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/estacionamiento.png" alt="<?php echo pll__( 'estacionamiento'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Estacionamiento Tachado'); ?></p>
            </div>
            <div class="content-logo-2 d-none d-md-block">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/crossfit.png" alt="<?php echo pll__( 'Circuito Crossfitc'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Circuito Crossfit'); ?></p>
            </div>
            <div class="content-logo-2 d-none d-md-block">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/yin-yan.png" alt="<?php echo pll__( 'Jardín Zen'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Jardín Zen'); ?></p>
            </div>
        </div>

        <div class="row mt-1">
            <div class="content-logo-2  d-none d-md-block mb-4">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/club-home.png" alt="<?php echo pll__( 'Casa Club'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Casa Club'); ?></p>
            </div>
            <div class="content-logo-2  d-none d-md-block">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/private-senote.png" alt="<?php echo pll__( 'Cenote Privado'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Cenote Privado'); ?></p>
            </div>
            <div class="content-logo-2  d-none d-md-block">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/cinema-air-free.png" alt="<?php echo pll__( 'Cine al Aire Libre'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Cine al Aire Libre'); ?></p>
            </div>
            <div class="content-logo-2  d-none d-md-block">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/circuto-close.png" alt="<?php echo pll__( 'Circuito cerrado'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Circuito cerrado'); ?></p>
            </div>
            <div class="content-logo-2  d-none d-md-block">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/concierge.png" alt="<?php echo pll__( 'Concierge'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Concierge'); ?></p>
            </div>
            <div class="content-logo-2  d-none d-md-block">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/access-control.png" alt="<?php echo pll__( 'Control de Acceso'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Control de Acceso'); ?></p>
            </div>
            <div class="content-logo-2  d-none d-md-block">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/cancha-crocket.png" alt="<?php echo pll__( 'Cancha Croket'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Cancha Croket'); ?></p>
            </div>
            <div class="content-logo-2  d-none d-md-block">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/logos/asadores.png" alt="<?php echo pll__( 'Asadores (Roof Top Lourge)'); ?>">
                <p class="title-hoja"><?php echo pll__( 'Asadores <br>(Roof Top Lourge)'); ?></p>
            </div>
        </div>

    </div> 

    <!-- Fn Section 3 -->
    <!-- Block mapa-->
    <?php get_template_part('template-parts/content', 'map' ); ?>

</div>

<!-- Block contat form-->
<?php get_template_part('template-parts/content', 'contact-form' ); ?>


<?php get_footer(); ?> <!-- obtiene el footer -->