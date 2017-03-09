<?php get_header(); ?>

<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <h1 class="front-page-text">David Powell</h1>
      <p class="front-page-text">Web Developer</p>
      <p><hr></p>
      <p>
        <a href="https://github.com/dvdpwll" class="button secondary" target="_blank">Github</a>
        <a href="https://www.linkedin.com/in/davidpowell456" class="button secondary" target="_blank">Linkedin</a>
        <a href="https://drive.google.com/open?id=0B6TKZeUHEj43X1VGNnFVRWRPUlU" class="button secondary" target="_blank">Resume</a>
      </p>

      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<!-- <?php get_template_part('content', 'portfolio'); ?> -->

<?php get_footer(); ?>
