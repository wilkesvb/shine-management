      <?php get_template_part('footer-facts'); ?>

      <footer class="clearfix">
        
        <p>
        <?php 

          $args = array(
            'post_type' => 'theme_options'
          );
          $query = new WP_Query( $args );

        ?>
        
        <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <?php the_field( 'phone_number' ); ?>


        <?php endwhile; endif; wp_reset_postdata(); ?>

          <br>
        Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
        
      </footer>


    </div>

      <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
      <script>
          (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
          function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
          e=o.createElement(i);r=o.getElementsByTagName(i)[0];
          e.src='//www.google-analytics.com/analytics.js';
          r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
          ga('create','UA-XXXXX-X','auto');ga('send','pageview');
      </script>

      <?php wp_footer(); ?>

  </body>
</html>