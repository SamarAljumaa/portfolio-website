<?php get_header();  ?>

<section class="aboutBody clearfix">
  <section class="aboutHero" style="background-image: url(<?php the_field('hero_image')?>); ">
  </section>
  <section class="about">
    <div class="aboutInfo clearfix">
      <div class="aboutImage" style="background-image: url(<?php the_field('hero_image')?>); "></div>
      <h2 class="prominentTitle"><?php the_field('about_title'); ?></h2>
      <h2> <?php the_field('hero_title'); ?> </h2>
      <p><?php the_field('about_content') ?> </p>
     <!--  <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?> -->

    </div> <!-- /.aboutInfo -->
    <div class="visitPortfolio">
      <a href="<?php the_field('website_url');?>"><button><?php the_field('title'); ?></button></a> 
    </div>
    <div class="skills">
      <div class="wrapper">
        <h2 class="sideHeader"> <?php the_field('skills_title'); ?></h2>
        <p> <?php the_field('skills_content_') ?></p>
        <ul class="clearfix"><?php while(has_sub_field('skills')): ?>
          <li><?php the_sub_field('the_skill'); ?></li>
          <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </section> <!-- /.about -->
  <?php get_footer(); ?>
</section>