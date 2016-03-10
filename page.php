<?php get_header();  ?>

<section class="about">
  <div class="aboutHero" style="background-image: url(<?php the_field('hero_image')?>); ">

  </div>
  <div class="aboutInfo">
    <h2><?php the_field('about_title'); ?></h2>
    <p><?php the_field('about_content') ?> </p>
   <!--  <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?> -->

  </div> <!-- /.aboutInfo -->
</section> <!-- /.about -->

<section class="skills">
  <div class="wrapper">
    <h2> <?php the_field('skills_title'); ?></h2>
    <p> <?php the_field('skills_content_') ?></p>
  </div>
</section>

<?php get_footer(); ?>