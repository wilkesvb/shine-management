<?php get_header(); ?>

      <div class="clearfix">
        
        <div class="flex clear">
          
          <?php get_sidebar(); ?>
        
          <section class="content">

          	<span class="page-title-span" style="background-color: white;"><h1 class="page-title"><?php wp_title( $sep = '' ); ?></h1></span>
  
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
            <?php the_content(); ?>
  
            <?php endwhile; endif; ?>
  
          </section>  

        </div>
        
      </div>

<?php get_template_part('home-hero-footer'); ?>

<?php get_footer(); ?>