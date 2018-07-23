<div class="container-fluid">
    <!-- Section Contact -->
    <div class="row content-contacto  bg-light pt-5">
        <div class="col-md-5"></div>
        <div class="col-md-7">
            <h2><?php echo pll__( 'Contáctanos para más información'); ?>. </h2>
        </div>

        <div class="col-md-5 content-info-contact">
           <?php get_template_part('template-parts/content', 'info-contact' ); ?>
        </div>
        <div class="col-md-7">
            <?php  echo do_shortcode( '[cf7-form cf7key="contact-form-1"]' );   ?>
            <?php  //echo do_shortcode( '[contact-form-7 id="28" title="Contactanos"]' );   ?>
        </div>

    </div>
    <!-- Fn Section Contact -->
</div>