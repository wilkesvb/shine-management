      <section class="facts clearfix;">

        <?php 

          $args = array(
            'post_type' => 'theme_options'
          );
          $query = new WP_Query( $args );

        ?>
        
        <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="fact">
          <div class="border-orange">
            
            <?php 

            $image = get_field('fact_1_img');

            if( !empty($image) ): ?>

              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>
      
          </div>
          
          <div class="push">

            <h4><?php the_field( 'fact_3_header' ); ?></h4>
            <p><?php the_field( 'face_3_text' ); ?></p>

          </div>
          
        </div>

        <div class="fact">
          <div class="border-orange">
            
            <?php 

            $image = get_field('fact_2_img');

            if( !empty($image) ): ?>

              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>

          </div>
          
          <div class="push">

            <h4><?php the_field( 'fact_3_header' ); ?></h4>
            <p><?php the_field( 'face_3_text' ); ?></p>

          </div>

        </div>

        <div class="fact">
          <div class="border-orange">
            
            <?php 

            $image = get_field('fact_3_img');

            if( !empty($image) ): ?>

              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>
      
          </div>

          <div class="push">

            <h4><?php the_field( 'fact_3_header' ); ?></h4>
            <p><?php the_field( 'face_3_text' ); ?></p>

          </div>

        </div>
        
        <?php endwhile; endif; wp_reset_postdata(); ?>

        <div class="clearfix"></div>

      </section>