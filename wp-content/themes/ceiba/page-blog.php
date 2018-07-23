<?php 
/*
* Template Name: Blog Principal
*/
get_header(); ?>  <!-- obtiene las cabeceras -->

<?php if ( have_posts() ) : ?>  
    <?php while( have_posts()): the_post();   ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 m-0 p-0">
                    <?php the_content();?>
                    <?php //if( has_post_thumbnail() ){ ?>
                         <?php
                            /* Se guarda la url de la imagen en tamaño full */
                            //$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'destacada'); 
                            /*Se imprime la imagen en el bloque correspondiente*/
                            //echo '<img class="img-fluid img-header" src="'.esc_url($featured_img_url).'" alt="Img Cabezera Blog">'
                         ?>
                    <?php //} ?> 

                    <!-- <h2 class="title-header"> <?php the_title();  ?> </h2> -->
                </div>
            </div>
        </div>

        <div class="container-fluid bg-light">
            <div class="row">
                <div class="col-md-9">
                    <div class="row content-blog">
                        <?php
                            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; //_Paginación
                            $args = array(
                            'cat' => array(5),//Categoria que se muestra
                            'posts_per_page' => 4, //número de post que se muestran
                            'orderby' => 'date', //Como se ordenan
                            'order' => 'DESC', // Forma de oordener decendente o acendente
                            'paged' => $paged //paginación
                        ); ?>
                    
                        <?php 
                            $blog = new WP_Query($args); 
                        ?>
                        <?php while( $blog -> have_posts() ): $blog->the_post(); ?>
                
                            <?php get_template_part( 'template-parts/content', 'blog' ); ?>
                        


                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>

                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center p-4">
                            <div class="pagination">
                                <?php 
                                    echo paginate_links( array(
                                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                        'total'        => $blog->max_num_pages,
                                        'current'      => max( 1, get_query_var( 'paged' ) ),
                                        'format'       => '?paged=%#%',
                                        'show_all'     => false,
                                        'type'         => 'plain',
                                        'end_size'     => 2,
                                        'mid_size'     => 1,
                                        'prev_next'    => true,
                                        'prev_text'    => sprintf( ' <i> %1$s </i> ', __( '<<Anterior', 'text-domain' ) ),
                                        'next_text'    => sprintf( '<i> %1$s  </i>', __( 'Siguiente>>', 'text-domain' ) ),
                                        'add_args'     => false,
                                        'add_fragment' => '',
                                        'before_page_number' => '',
                                        'after_page_number'  => ''
                                    ) );
                                ?>
                            </div>
                            <!--Fn Pagination  -->
                        </div>
                    </div>



                </div>

                <div class="col-md-3 widgets">
                    <?php get_sidebar('blog'); ?>
                </div>
            </div>
        </div>


        </div>                              

    <?php endwhile ?>

<?php else : ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 padding-0 m-height-80">
                <p><?php _e('Lo Sentimos, no hay publicaciones con los criterios establecidos.'); ?></p>
            </div>
        </div>
    </div>
<?php endif; ?>