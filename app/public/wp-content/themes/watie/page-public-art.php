<?php get_header()?>
<body>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     <?php the_content(); ?>

 <div class="sideshow">
  
      <div class="mySlide">
        <img src="/wp-content/uploads/2017/04/1468-S-Porch-full-1024x241.jpg" style="width:100%">
      </div>
 
      <div class="mySlide">
        <img src="/wp-content/uploads/2017/04/You-Are-here-768x1552.jpg" style="width:100%">
      </div>

      <div class="mySlide">
        <img src="/wp-content/uploads/2017/04/you-are-here-installation-vew.jpg" style="width:100%">
      </div>

      <div class="mySlide">
        <img src="/wp-content/uploads/2017/04/you-are-here-james-768x1024.jpg" style="width:100%">
      </div>

      <button class="prev"> Prev </button>
      <button class="next"> Next </button>    
    </div> 

  <?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
</body>
<?php get_footer(); ?> 
