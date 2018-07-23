<?php get_header(); ?>  <!-- obtiene las cabeceras -->
    

    <?php while( have_posts()): the_post();   ?>
    
        <div class="container-fluid bg-light">
            <div class="row">
                <!-- Blog  -->
                <div class="col-md-12 wrap-content-blog ">
                    <div class="row ">
                        <article id="post-<?php the_ID();?>" <?php post_class('ml-2 mr-2 wrap-blog'); ?>>   
                            <div class="col-md-12 text-center">
                                <?php
                                    /* Se guarda la url de la imagen en tamaño full */
                                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'blog-single'); 
                                    /*Se imprime la imagen en el bloque correspondiente*/
                                    echo '<img class="img-fluid" src="'.esc_url($featured_img_url).'" alt="Imagen Post">'
                                ?>
                            </div>

                            <div class="col-md-12 ">
                                <h3 class="f-s-2-5-em Asul-Regular text-azul title-single-2" style="border-bottom:0;"> <?php the_title();?> </h3>
                                <hr class="hr-date-10">
                            </div>

                            <div class="col-md-12">
                                <div class="row color-blog-data color-yellow-1">
                                    <div class="col-md-6">
                                        <p>
                                            <span class="blog-fecha "><?php the_date('l j, F Y');  ?></span>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <span>Publicado por: </span>
                                            <span>
                                                <?php the_author();?>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div> 

                            <div class="col-md-12 content-spacing">
                                <?php the_content();?>
                            </div>
                            <div class="row col-md-12">

                                <div class="col-md-12">
                                    <?php the_tags( __('Etiquetas: '),', ', '<br>' ); ?>
                                </div>
    
    
                                <?php /*comments_template();*/ ?>
    
                                <div class="col-md-12">
                                    <?php edit_post_link( __('Editar este Post') ) ?>
                                </div>
                            </div>
                        </article>   

                    </div>
                </div>
                <!-- Fn Blog  -->
                
                <!-- Widged  -->
                <!-- <div class="col-md-3"> -->
                    <?php //get_sidebar('blog'); ?>
                <!-- </div> -->
                <!-- Fn Widged  -->
            </div>

        </div>
    <?php endwhile ?>

<?php get_footer(); ?> <!-- obtiene el footer -->