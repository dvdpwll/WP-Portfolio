<?php
  $num_posts = -1;
  if(is_front_page()) $num_posts = 4;
  //$num_posts = (is_front_page()) ? 4 : -1;

  $args = array(
    'post_type' => 'portfolio_item',
    'posts_per_page' => $num_posts
  );
  $query = new WP_Query($args);
?>

<section class="row no-max pad">
  <?php if($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
    <div class="small-12 medium-6 large-6 columns grid-item">
        <a class="thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array( 500, 500 )); ?></a>
        <br>
        <p class="thumbnail-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
    </div>
  <?php endwhile; endif; wp_reset_postdata(); ?>
</section>
