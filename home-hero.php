<section class="hero">
    <?php putRevSlider('homepage', 'homepage'); ?>

    <?php 

    $args = array(
      'post_type' => 'theme_options'
    );
    $query = new WP_Query( $args );

    ?>

    <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


  </section>

  <section class="home-hero">

    <div class="home-hero-left">

      <div class="feature-wrap">

        <?php the_field( 'info_left_header' ); ?>
      
<!--         <?php the_field( 'info_left_list_info' ); ?>
 -->
        <a href="<?php the_field( 'info_button_link' ); ?>"><button><?php the_field( 'info_button_label' ); ?></button></a>

      </div>

    </div>

    <div class="home-hero-right">
      
      <p><?php the_field( 'info_paragraph' ); ?></p>

    <?php endwhile; endif; wp_reset_postdata(); ?>

    </div>

  </section>