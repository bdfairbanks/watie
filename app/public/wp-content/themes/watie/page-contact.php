<?php is_page(contacs) ?>
<?php get_header(); ?>
<main>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <?php the_title(); ?> 
     <p>Hello world fart</p>
   <?php the_content(); ?> 
<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</main>

<?php get_footer(); ?> 