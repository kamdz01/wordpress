
<?php get_header('front'); ?>

<div class="container front-slider">


<?php 
$front_slider_posts = new WP_Query(array(
    'post_type' => 'slider',  
    'meta_key'       => 'slider_number',
    'orderby'        => 'meta_value_num',
    'order'          => 'ASC'
  ));




  while($front_slider_posts->have_posts()){
    $front_slider_posts->the_post();?>
    
    <article class="single-slide" style="background-image: url(<?php the_field('slider_background') ?>);">
      <h3 class="single-slide__header"><?php the_title();?></h3>
        
      <p class="single-slide__content hidden-xs"><?php echo wp_trim_words(get_the_content(),10);?></p>
      <a target="_blank" class="single-slide__link" href="<?php the_field('slider_link') ?>">Sprawdż to</a>
    </article>


<?php } wp_reset_postdata();?>
  </div>
<!-- 
<div class="main-carousel">
  <div class="carousel-cell">slajd 1</div>
  <div class="carousel-cell">slajd 2</div>
  <div class="carousel-cell">slajd 3</div>
</div> -->


<?php get_footer('front'); ?>


