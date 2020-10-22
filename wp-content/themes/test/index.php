<?php 
 get_header(); 


  while(have_posts()) {
    the_post(); 
      ?>
    <article>
    <span><?php the_time('n.j.y');?></span>
    <h2><?php the_title();?></h2>
    <?php the_content();?>
</article>

 <?php } 
 get_footer();
 ?>