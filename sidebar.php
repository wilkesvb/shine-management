<section class="sidebar">
          
  <?php 

    $defaults = array(
      'container' => false,
      'theme_location' => 'sidebar-menu',
      'menu_class' => ''
    );

    wp_nav_menu( $defaults ); 

  ?>

</section>