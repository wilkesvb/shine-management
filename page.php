<?php get_header(); ?>

      <div class="home clearfix">
        
        <div class="flex clear">
          
          <?php get_sidebar(); ?>
        
          <section class="content">

          	<h1><?php wp_title(); ?></h1>
  
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
            <?php the_content(); ?>
  
            <?php endwhile; endif; ?>
  
          </section>  

        </div>
        
      </div>

<?php get_template_part('home-hero-footer'); ?>

<?php get_footer(); ?>