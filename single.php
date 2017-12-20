<?php get_header(); ?>

      <div class="clearfix">
        
        <div class="flex clear">
          
          <?php get_sidebar(); ?>
        
          <section class="content">

          	<span class="page-title-span" style="background-color: white;"><h1 class="page-title"><?php wp_title( $sep = '' ); ?></h1></span>
            
            <?php if ( has_post_thumbnail() ) { ?>

              <div class="page-feature">

                <div class="page-thumbnail">

                  <?php the_post_thumbnail('large'); ?>

                </div>

              </div>

            <?php } ?>

           <div class="entry-content"> 

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
             
            <?php the_content(); ?>
     
            <?php endwhile; ?>

              <div class="pagination">
                <div class="nav-previous alignleft"><?php previous_post_link( '%link', 'Previous', TRUE ); ?></div>
                <div class="nav-next alignright"><?php next_post_link( '%link', 'Next', TRUE); ?></div>
              </div>

            <?php else : ?>

              <p><?php _e( 'Sorry, no pages matched your criteria' ); ?></p>
            
            <?php endif; ?>

          </div>
  
          </section>  

        </div>
        
      </div>

<?php get_template_part('home-hero-footer'); ?>

<?php get_footer(); ?>