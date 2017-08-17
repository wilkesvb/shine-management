<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/apple-icon.png">

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?> >

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="wrapper">

      <header>

        <h1>SHINE Systems</h1>

        <?php 

        $args = array(
          'post_type' => 'theme_options'
        );
        $query = new WP_Query( $args );

        ?>

        <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <?php 

        $image = get_field('site_logo');

        if( !empty($image) ): ?>

        <a href="/"><img class="logo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>

        <?php endif; ?>

        <?php endwhile; endif; wp_reset_postdata(); ?>

        <nav class="responsive-menu">

          <?php 

          $defaults = array(
            'container' => false,
            'theme_location' => 'primary-menu',
            'menu_class' => ''
          );

          wp_nav_menu( $defaults ); 

          ?>
          
        </nav>

        <div class="clearfix"></div>

      </header>