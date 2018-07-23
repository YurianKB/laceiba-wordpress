<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <title>La Ceiba</title> -->
    
    <?php
    if ( ! function_exists( '_wp_render_title_tag' ) ) {
        function theme_slug_render_title() {
      ?>
      <title><?php wp_title( '|', true, 'right' ); ?></title>
      <?php
        }
      add_action( 'wp_head', 'theme_slug_render_title' );
    }
    ?>

    <meta name="keywords" content="La Ceiba" > 
    <meta name="description" content="La Ceiba Sitio Oficial" > 

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <?php wp_head(); ?>

    <!-- SumoMe -->
    <!-- <script async>(function(s,u,m,o,j,v){j=u.createElement(m);v=u.getElementsByTagName(m)[0];j.async=1;j.src=o;j.dataset.sumoSiteId='7d035abc68604703f03501f608935701df0e44922dddc7d2932d84b3492325c1';v.parentNode.insertBefore(j,v)})(window,document,'script','//load.sumo.com/');</script> -->
</head>
<body  <?php body_class()?>>


<nav id="navbar-id" class="nav-header navbar navbar-expand-lg navbar-dark bg-dark position-fixed">
    <div class="container">
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <?php 
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          
      ?>
      <a href="<?php echo esc_url( home_url('/') )?>" class="logo navbar-brand">
          <img src="<?php echo $image[0] ; ?>" alt="Logo" class="logo-nav" >
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse row justify-content-end" id="navbarColor01">
        <!-- <ul class="navbar-nav col-4">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul> -->
        
        <?php 
          $args = array(
              'theme_location' => 'header-menu',
              'container' => false,
              'container_class' => '',
              'container_id' => '',

              'menu_class' => 'navbar-nav col-12 d-flex justify-content-end',
              'link_after' => ''
          );

          wp_nav_menu( $args);
        ?>

        <div class="form-inline">
          <!-- <button class="btn btn-outline-info my-2 my-sm-0" >ENGLISH</button> -->
        </div>
      </div>
    
    </div>
  </nav>
    
