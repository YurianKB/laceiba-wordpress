<?php 
/*
* Template Name: Template Gallery
*/ ?>
<?php get_header(); ?>

<div class="banner-header">

    <?php  echo do_shortcode( '[smartslider3 slider=20]' );   ?>
</div>

<div class="container-fluid">
    <div class="row">
        <?php get_template_part('template-parts/content', 'contact' ); ?>
        <div class="col-md-12 bg-light text-secondary">
            <?php while ( have_posts() ) : the_post(); ?>

                <?php  the_content() ?> 

            <?php endwhile; ?>
        </div>
    </div>
    <?php get_template_part('template-parts/content', 'map' ); ?>
</div>

<!-- Block contat form-->
<?php get_template_part('template-parts/content', 'contact-form' ); ?>


<?php get_footer(); ?>