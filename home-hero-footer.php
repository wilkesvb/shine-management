<section class="hero-footer">

  <div class="footer-hero-left">

    <?php 

    $args = array(
      'post_type' => 'theme_options'
    );
    $query = new WP_Query( $args );

    ?>

    <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

    <div class="feature-wrap">

      <div class="border-white">

      <?php 

      $image = get_field('footer_info_icon');

      if( !empty($image) ): ?>

        <img class="clearfix" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

      <?php endif; ?>

      </div>

      <h4><?php the_field( 'footer_info_header' ); ?></h4>

      <p><?php the_field( 'footer_info_text' ); ?></p>
      
    </div>

  </div>

  <div class="footer-hero-right">
    
    <?php 

    $image = get_field('footer_info_image');

    if( !empty($image) ): ?>

    <img class="clearfix" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

    <?php endif; ?>

    <?php endwhile; endif; wp_reset_postdata(); ?>

  </div>

</section>