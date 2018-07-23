<?php 
/*
* Template Name: Template ciudad Mayakoba
*/ ?>
<?php get_header(); ?>  <!-- obtiene las cabeceras -->

<div class="banner-header">

    <?php  echo do_shortcode( '[smartslider3 slider=18]' );   ?>
</div>

<div class="container-fluid">
    <!-- Secction 1 -->
    <div class="row section1">

        <?php get_template_part('template-parts/content', 'contact' ); ?>

        <div class="col-md-6 bg-light text-secondary p-tbl-em">
            <p>
                <strong class="green"> <?php echo pll__( 'Ciudad Mayakoba'); ?> </strong> <?php echo pll__( 'es la respuesta a los sueños y necesidades de una sociedad en evolución, más comprometida con la idea de mezclar la modernidad con el medio ambiente'); ?>. 
            </p>
            <p>
                 <?php echo pll__( 'Sus valores, la planeación, la integración y el respeto al medio ambiente se conjugan en un innovador modelo de Comunidad Planeada Sustentable'); ?>. 
            </p>
            <p>
                <?php echo pll__( 'El proyecto arquitectónico tuvo como eje rector el respeto a la naturaleza. El 57% de la superficie está reservado para áreas verdes y de conservación que Incluyen corredores ecológicos, extensas áreas de conservación y jardines'); ?>.
            </p>
        </div>

        <div class="col-md-6 bg-light text-secondary p-tbr-em">
            <p>
                <?php echo pll__( '409 hectáreas que albergarán modernos desarrollos residenciales y mixtos con viviendas concebidas para satisfacer las necesidades de una creciente población que demanda cada vez más y mejores condiciones de vida'); ?>.
            </p>
            <p>
                <?php echo pll__( 'Instituciones educativas, un hospital, consultorios médicos, complementados por su Health Market, villa comercial con espacio para el entretenimiento, arte y cultura; comercios y restaurantes, espacios deportivos, andadores peatonales, ciclo vías y mucho más'); ?>.
            </p>

        </div>

    </div>  
    <!-- Fn Section 1 -->


    <div class="row bg-light text-secondary section2 pt-2">
        <!-- <div class="col-md-6 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/ciudad/yoga.jpg" alt="Yoga">
        </div>
        <div class="col-md-6 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/ciudad/palapa.jpg" alt="Palapas">
        </div>
        <div class="col-md-7 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/ciudad/parque-1.jpg" alt="Parque ciudad mayacoba">
        </div>
        <div class="col-md-5 pb-2 p-b-r0"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/ciudad/parque-2-2.jpg" alt="Parque ciudad mayacoba">
        </div> -->
        <div class="col-md-12 pb-2 p-b-r0"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/collage/ciudad/palapas-ciclopistas.jpg" alt="Parque ciudad mayacoba">
        </div>
    </div>    


    <!-- Block Fly images and text -->
    <div class="row bg-light text-secondary section2 ">
        
        <div class="col-md-7 col-sm-6"> 
            <a class="gallery" rel="parque" href="/ceiba/wp-content/themes/ceiba/assets/imgs/ciudad/map-parque.png" data-lightbox="Mapa" data-title="">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/ciudad/map-parque.png" alt="<?php echo pll__('Mapa Parque'); ?>">
            </a>
        </div>
        <div class="col-md-5  mt-1rem-res bg-leaf  pb-2"> 
            <p class="f-s-15em">
                <strong class="green"> <?php echo pll__('Gran Parque Metropolitano'); ?></strong>
            </p>
            <p class="f-s-15em">
                <?php echo pll__('El complemento perfecto a La Ceiba Ciudad Mayakoba es el Gran Parque Metropolitano. En él tendrás acceso a una gran cantidad de actividades y servicios, tanto para pequeños como para grandes. 10 hectáreas, que ha sido avaladas por el programa ONU Habitat, único en su tipo en toda la región'); ?>.
            </p>
            <div class="d-flex justify-content-center f-s-13em mb-4">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactoModal"><?php echo pll__('Contáctanos'); ?></button>
            </div>
        </div>
        
    </div> 
    
    <div class="row bg-light text-secondary section2 pt-2">
        <!-- <div class="col-md-6 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/ciudad/parque-3.jpg" alt="parque">
        </div>
        <div class="col-md-6 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/ciudad/parque-4.jpg" alt="parque">
        </div> -->
        <div class="col-md-12 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/collage/ciudad/auditorio.jpg" alt="parque">
        </div>

        <div class="col-md-6 bg-light text-secondary p-tbl-em">
            <p>
                <strong class="green"> <?php echo pll__('Mayakoba Village'); ?> </strong>
            </p>
            <p>
                <?php echo pll__('Espacio que combinará un original centro comercial, moderna arquitectura, zona de oficinas, hotel y centros de negocio, así como espacios de entretenimiento como cine y foros para el arte y la cultura'); ?>.
            </p>

        </div>

        <div class="col-md-6 bg-light text-secondary p-tbr-em">
            <p>
                <?php echo pll__('En el marco de un gran paseo peatonal con una hermosa integración paisajística, tendrán presencia las principales tiendas y marcas, magníficos restaurantes y opciones gastronómicas y de entretenimiento. Será una referencia en la Riviera Maya para visitantes locales, nacionales e internacionales'); ?>.
            </p>


        </div>        

        <!-- <div class="col-md-6 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/ciudad/village-1.jpg" alt="village">
        </div>
        <div class="col-md-6 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/ciudad/village-2.jpg" alt="village">
        </div> -->
        <div class="col-md-12 pb-2"> 
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/collage/ciudad/hospital.jpg" alt="village">
        </div>
    </div>    
    
    <div class="row ">
        <!-- banner seguridad -->
        <div class="col-md-12 p-0">
            <div class="pb-2 bg-light">

                <?php  echo do_shortcode( '[smartslider3 slider=19]' );   ?>
            </div>
                        
            <div class="d-flex justify-content-center f-s-13em mb-4 mt-4">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactoModal"><?php echo pll__('Contáctanos'); ?></button>
            </div>
        </div>
    </div>

    <!-- Block mapa-->
    <?php get_template_part('template-parts/content', 'map' ); ?>
</div>

<!-- Block contat form-->
<?php get_template_part('template-parts/content', 'contact-form' ); ?>


<?php get_footer(); ?> <!-- obtiene el footer -->