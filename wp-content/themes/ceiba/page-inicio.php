<?php 
/*
* Template Name: Template Home
*/ ?>
<?php get_header(); ?>  <!-- obtiene las cabeceras -->

<!-- <div class="banner-header">

    <?php  //echo do_shortcode( '[smartslider3 slider=7]' );   ?>
</div> -->
<div class="banner-header">

    <?php  the_field( 'slider1' );   ?>
</div>

<div class="container-fluid">
    <!-- Secction 1 -->
    <div class="row section1">

        <?php get_template_part('template-parts/content', 'contact' ); ?>

        <div class="col-md-6 p-0 pt-2 pr-2 ">
            <?php $image_attributes = wp_get_attachment_image_src( $attachment_id = 281, 'img-750-500' );
            if ( $image_attributes ) : ?>
                <img class="img-fluid" src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" />
            <?php endif; ?>

            <!-- <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section1/run.jpg" alt="corriendo"> -->
        </div>
        <div class="col-md-6 f-s-15em mt-1rem-res">
            <p class="p-0-3em">
                <strong> <?php echo pll__( 'La Ceiba Ciudad Mayakoba'); ?> </strong> <?php echo pll__( 'es un desarrollo integrado a su entorno natural con armonía y modernidad. Sobre un predio de 11.9 hectáreas este proyecto fue concebído en el corazón de Ciduad Mayakoba y albergará condominios de 2, 3 y 4 recámaras.'); ?>
            </p>
            <p class="p-0-3em">
                 <?php echo pll__( 'Aproveche la gran oportunidad de invertir en este desarrollo único e irrepetible.'); ?>
            </p>
            <div class="d-flex justify-content-center mt-2em">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactoModal"> <?php echo pll__('Contáctanos'); ?> </button>
            </div>
        </div>
        <div class="col-md-6 p-0 pt-2 pb-2 pr-2 p-b-r0">
            <?php $image_attributes = wp_get_attachment_image_src( $attachment_id = 279, 'img-750-500' );
            if ( $image_attributes ) : ?>
                <img class="img-fluid" src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" />
            <?php endif; ?>

            <!-- <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section1/girl.jpg" alt="niña"> -->
        </div>
        <div class="col-md-6 p-0 pt-2 pb-2 pr-2">
           <?php $image_attributes = wp_get_attachment_image_src( $attachment_id = 282, 'img-750-500' );
            if ( $image_attributes ) : ?>
                <img class="img-fluid" src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" />
            <?php endif; ?>

            <!-- <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section1/swin.jpg" alt="nadando"> -->
        </div>
        <div class="content-privilegio col-md-12 p-0">
            
            <?php  the_field('slider2');   ?>
            <!-- <p>    Privilegio </p> -->
            <!-- <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section1/privilegio.jpg" alt="nadando"> -->
        </div>
    </div>  
    <!-- Fn Section 1 -->

    <!-- Section 2 -->
    <div class="row bg-light text-secondary section2  pt-3">
        <div class="col-md-4 condominio" >
            <a class="gallery" rel="Condominios 1" href="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/condominio2-2.png" data-lightbox="Condominios Inicio" data-title="<?php echo pll__('Condominio de 2 recámaras'); ?>" >
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/condominio2-2.png" alt="<?php echo pll__('Condominio Prespectiva'); ?>" >
            </a>
            <div class="details">
                <!-- <span class="property1">2 Recámaras en 7o nivel:</span>
                <span class="property2">93.38 m2 más Roof Garden</span> -->
            </div>
            <p class="title-c"> <?php echo pll__('Condominio de 2 recámaras'); ?></p>
        </div>
        <div class="col-md-4 condominio" >
            <a class="gallery" rel="Condominios 1" href="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/condominio3-2.png" data-lightbox="Condominios Inicio" data-title="<?php echo pll__( 'Condominio de 3 recámaras'); ?>">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/condominio3-2.png" alt="<?php echo pll__( 'Condominio Prespectiva'); ?>">
            </a>
            <div class="details">
                <!-- <span class="property1">3 Recámaras en 7o nivel:</span>
                <span class="property2">15.96 m2 más Roof Garden</span> -->
            </div>
            <p class="title-c"> <?php echo pll__( 'Condominio de 3 recámaras'); ?></p>
        </div>
        <div class="col-md-4 condominio" >
            <div>
                <a class="gallery" rel="Condominios 1" href="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/condominio4-2.png" data-lightbox="Condominios Inicio" data-title="<?php echo pll__( 'Condominio de 4 recámaras'); ?>">
                    <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/condominio4-2.png" alt="<?php echo pll__( 'Condominio Prespectiva'); ?>">
                </a>
                <div class="details">
                    <!-- <span class="property1">4 Recámaras en 7o nivel:</span>
                    <span class="property2">139.86 m2 más Roof Garden</span> -->
                </div>
            </div>
            <p class="title-c"> <?php echo pll__( 'Condominio de 4 recámaras'); ?></p>
        </div>
    </div> 

    <div class="row bg-light text-secondary section2  pt-3">
        <div class="col-md-3 p-0 p-t-2 pr-2 pb-2"> 
            <a class="gallery" rel="galeria2" href="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/gallery1.jpg" data-lightbox="Gallery Inicio" data-title="">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/gallery1.jpg" alt="Interior">
            </a>
        </div>
        <div class="col-md-3 p-0 p-t-2 pr-2 pb-2"> 
            <a class="gallery" rel="galeria2" href="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/gallery2.jpg" data-lightbox="Gallery Inicio" data-title="">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/gallery2.jpg" alt="Interior">
            </a>
        </div>
        <div class="col-md-3 p-0 p-t-2 pr-2 pb-2"> 
            <a class="gallery" rel="galeria2" href="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/gallery3.jpg" data-lightbox="Gallery Inicio" data-title="">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/gallery3.jpg" alt="Interior">
            </a>
        </div>
        <div class="col-md-3 p-0 p-t-2 pr-2 pb-2"> 
            <a class="gallery" rel="galeria2" href="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/gallery4.jpg" data-lightbox="Gallery Inicio" data-title="">
                <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/gallery4.jpg" alt="Interior">
            </a>
        </div>

    </div>    
    <div class="row bg-light text-secondary section2">
        <div class="col-md-6 f-s-13em bg-leaf content-pt-5em">

            <h3 class="d-flex justify-content-center"><?php echo pll__( 'Casa Club'); ?> </h3>
            <p class="p-0-3em">
                <?php echo pll__( 'La mas extensa variedad de actividades y áreas verdes para que todos disfruten de La Ceiba. Su Casa Club es de Primer Mundo y rodeada de fuentes y frescura es un punto de reunión y convivencia para todos sus residentes. Conoce todas las amenidades aquí (liga a amenidades)'); ?>
            </p>
            <div class="d-flex justify-content-center mt-5em ">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactoModal"><?php echo pll__('Contáctanos'); ?></button>
            </div>
        </div>
        <div class="col-md-6 p-0 pb-2">
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section2/casa-club.png" alt="Casa Club">
        </div>
    </div>
    <!-- Fn Section 2 -->   

    <!-- Section 3 -->
    <div class="row section3 jungle1 pt-4">
        <!-- <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/selva.png" alt="Fondo Serva"> -->
        <div class="col-md-12">
            <p class="title">
                <?php echo pll__( 'Más de 40 actividades y amenidades dentro del desarrollo'); ?>
            </p>
        </div>
        <div class="mb-4 content-logo">
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/logos/run.png" alt="Correr">
        </div>
        <div class="content-logo">
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/logos/cook.png" alt="Cocinar">
        </div>
        <div class="content-logo">
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/logos/eat.png" alt="Comer">
        </div>
        <div class="content-logo">
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/logos/gym.png" alt="Gym">
        </div>
        <div class="content-logo d-none d-md-block">
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/logos/cycling.png" alt="Ciclismo">
        </div>
        <div class="content-logo d-none d-md-block">
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/logos/party.png" alt="Fiestas">
        </div>
        <div class="content-logo d-none d-md-block">
            <img class="img-fluid" src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/logos/swin.png" alt="Nadar">
        </div>
    </div>     
    <div class="row">
        <div class="col-md-6 ameidades pt-2   bg-light">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/fit.jpg" alt="Fitness" class="img-fluid p-0">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/logos/fit.png" alt="Fitness Logo" class="img-logo">
            <p><?php echo pll__('Fitness Center'); ?></p>
        </div>
        <div class="col-md-6 ameidades pt-2   bg-light">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/nature.jpg" alt="Naturaleza" class="img-fluid p-0">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/logos/nature.png" alt="Naturaleza Logo" class="img-logo">
            <p><?php echo pll__('Andadores Naturales'); ?></p>
        </div>

        <div class="col-md-4 ameidades pt-2 pb-2 p-b-r0 bg-light">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/swim-childs.jpg" alt="Nado infantil" class="img-fluid p-0">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/logos/swim-childs.png" alt="Nado infantil Logo" class="img-logo">
            <p><?php echo pll__('Alberca Infantil'); ?></p>
        </div>
        <div class="col-md-4 ameidades pt-2 pb-2 p-b-r0 bg-light">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/abc.jpg" alt="ABC" class="img-fluid p-0">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/logos/abc.png" alt="ABC Logo" class="img-logo">
            <p><?php echo pll__('Kids Room'); ?></p>
        </div>
        <div class="col-md-4 ameidades pt-2 pb-2 bg-light">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/tennis.jpg" alt="Tenis" class="img-fluid p-0">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/logos/tennis.png" alt="Tenis Logo" class="img-logo">
            <p><?php echo pll__('Canchas de Tenis'); ?></p>
        </div>

        <div class="col-md-5 ameidades bg-light pr-2 p-b-r-05">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/wood-fire.jpg" alt="Fogata" class="img-fluid p-0">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/logos/wood-fire.png" alt="Fogata Logo" class="img-logo">
            <p><?php echo pll__('Área para fogatas'); ?> </p>
        </div>
        <div class="col-md-7 f-s-15em">
            <p class="content-pt-5em">
                <?php echo pll__('En La Ceiba Ciudad Mayakoba hemos incluido una gran variedad de amenidades y actividades. Siempre encontrarás algúna alternativa para que disfrutes aún más de tu vida.'); ?>
            </p>
            <div class="d-flex justify-content-center mt-2em">
                <a href="ceiba#amenidades-ceiba">
                    <button type="button" class="btn btn-primary"> <?php echo pll__('Conoce todas las ameidades aquí'); ?> </button>
                </a>
            </div>
        </div>

        <div class="col-md-5 ameidades pt-2 bg-light">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/hamacas.jpg" alt="hamacas" class="img-fluid p-0">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/logos/hamacas.png" alt="hamacas Logo" class="img-logo">
            <p><?php echo pll__('Hamacas'); ?></p>
        </div>
        <div class="col-md-7 ameidades pt-2 bg-light">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/pets.jpg" alt="Mascota" class="img-fluid p-0">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/logos/pets.png" alt="Mascota Logo" class="img-logo">
            <p><?php echo pll__('Parque de mascota'); ?></p>
        </div>

        <div class="col-md-6 ameidades pt-2 pb-2 p-b-r0 bg-light">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/gym-ext.jpg" alt="Gym esterior" class="img-fluid p-0">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/logos/gym-ext.png" alt="Gym esterior Logo" class="img-logo">
            <p><?php echo pll__('Gym exterior'); ?></p>
        </div>
        <div class="col-md-6 ameidades pt-2 pb-2 bg-light">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/swim-olimpic.jpg" alt="Alberca semi olimpica" class="img-fluid p-0">
            <img src="/ceiba/wp-content/themes/ceiba/assets/imgs/section3/logos/swim-olimpic.png" alt="Alberca semi olimpica Logo" class="img-logo">
            <p><?php echo pll__('Alberca semi olimpica'); ?></p>
        </div>

    </div>
    <div class="row section3 jungle2">
        <div class="col-md-12">
            <p class="title">
                <?php echo pll__('Más de 7 hectáreas'); ?><br class="d-n-r"> <?php echo pll__('de áreas  verdes'); ?>
            </p>
        </div>

    </div>   
    <!-- Fn Section 3 -->

    <!-- Block mapa-->
    <?php get_template_part('template-parts/content', 'map' ); ?>
</div>

<!-- Block contat form-->
<?php get_template_part('template-parts/content', 'contact-form' ); ?>



<?php get_footer(); ?> <!-- obtiene el footer -->