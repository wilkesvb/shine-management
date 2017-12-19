<section class="home-cta">

    <?php 

    $args = array(
      'post_type' => 'theme_options'
    );
    $query = new WP_Query( $args );

    ?>

    <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


    <?php the_field( 'home-cta' ); ?></p>
      

    <?php endwhile; endif; wp_reset_postdata(); ?>



</section>