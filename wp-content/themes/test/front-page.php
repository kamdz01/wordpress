<?php get_header(); ?>

<h1>front page.php</h1>



<?php 

  while ( have_posts() ) {
    the_post(); 
      ?>
    <article>
      <span><?php the_time('n.j.y');?></span>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
      <?php the_content();?>
    </article>

 <?php }

?>

<?php get_footer();?>