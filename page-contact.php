<?php

/*
	Template Name: Contact
*/

get_header();  ?>

<section class="contact">
  <div class="wrapper">
    <!-- <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?> -->

      <h2><?php the_title(); ?></h2>
      
			<div class="contactInfo">
				<h4><?php the_field('contact_title'); ?></h4>
				<p> <?php the_field('email'); ?> </p>
				<p> <?php the_field('contact_text'); ?> </p>
			</div>

     <div class="forms">
     	 <?php the_content(); ?>
     </div>
    <?php endwhile; // end the loop?>
  </div> <!-- /.wrapper -->
</section> <!-- /.section -->

<?php get_footer(); ?>