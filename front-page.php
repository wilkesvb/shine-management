<?php get_header(); ?>

      <div class="home clearfix">

        <?php get_template_part('home-hero'); ?>
        
        <div class="flex clear">
          
          <?php get_sidebar(); ?>
        
          <section class="content">

            <div class="entry-content">
  
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
            <?php the_content(); ?>
  
            <?php endwhile; endif; ?>

          </div>
  
          </section>  

        </div>
        
      </div>

      <?php get_template_part('home-hero-footer'); ?>

<?php get_footer(); ?>