<?php
/* Header
**********/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <title>
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?> | <?php bloginfo('name'); ?>
    </title>

    <?php /** Favicon **/ ?>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri().'/assets/img/favicons/fab_5_logo.ico'; ?>" type="image/x-icon" />

    <?php /**  WP HEADER **/ ?>
    <?php wp_head(); ?>

  </head>
  <body>
    
    <?php /** Header **/ ?>
    <header>
      <section class = "showcase">

        <nav class="navbar navbar-expand-md navbar-custom navbar-light" role="navigation" >

          <div class="container">

          <?php /** Navbar Brand **/ ?>
          <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
            <img src = "<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/assets/img/fab-5-logo.png'); ?>">
          </a>

          <?php /** Brand and toggle get grouped for better mobile display **/ ?>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <?php 
          wp_nav_menu( array(
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
          ?>

      </div><?php /** End container **/ ?>
    </nav><?php /** End Navbar **/ ?>
  </section><?php /** End Section **/ ?>
</header><?php /** End Header **/ ?>

