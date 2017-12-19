<?php get_header(); ?>

      <div class="clearfix">
        
        <div class="flex clear">
          
          <?php get_sidebar(); ?>
        
          <section class="content">

          	<span class="page-title-span" style="background-color: white;"><h1 class="page-title"><?php wp_title( $sep = '' ); ?></h1></span>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article>

              <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
            
              <span class="post-meta"><?php the_time('F j, Y'); ?></span>            
  
            <?php the_content(); ?>

            </article>
  
            <?php endwhile; endif; ?>
  
          </section>  

        </div>
        
      </div>

<?php get_template_part('home-hero-footer'); ?>

<?php get_footer(); ?>