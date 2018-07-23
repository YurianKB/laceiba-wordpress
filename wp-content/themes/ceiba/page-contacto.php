<?php 
/*
* Template Name: Template Contacto
*/ ?>

<?php get_header(); ?>  <!-- obtiene las cabeceras -->

<div class="banner-header mb-5">
    <?php while( have_posts()): the_post();   ?>

        <?php  the_content() ?> 

    <?php endwhile ?>

</div>

<div class="container-fluid">

    <?php get_template_part('template-parts/content', 'map' ); ?>

</div>
<!-- Block contat form-->
<?php get_template_part('template-parts/content', 'contact-form' ); ?>

<?php get_footer(); ?> <!-- obtiene el footer -->