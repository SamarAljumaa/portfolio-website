<?php get_header(); ?>

<div class="main">
  <div class="wrapper">
    <div class="content">

      <?php $portfolioWork = new WP_Query(array(
        'post_per_page' => -1,
        'post_type' => 'portfolio' 
      )); ?>
      <?php if($portfolioWork -> have_posts()): ?>
        <?php while($portfolioWork -> have_posts()): ?>
          <?php $portfolioWork -> the_post(); ?>
          <h4><?php the_title() ?></h4>

          <p> <?php the_field ('short_description') ?></p>
          <?php while(the_field('long_description')): ?>
            <p> <?php the_field('long_description') ?></p>
          <?php endwhile; ?>

          <?php $image = get_field('images') ?>
          <img src=" <?php echo $image['sizes']['medium'] ?> " alt="">

          <?php while(has_sub_field('skills')): ?>
          <p><?php the_sub_field('the_skill'); ?></p>
          <?php endwhile; ?>

       <?php endwhile; ?>

        <!-- <?php wp_reset_postdata(); ?>
      <?php endif; ?>

      <?php if ( have_posts() ) the_post(); ?>

      <h1>
        <?php if ( is_day() ) : ?>
          Daily Archives: <?php the_date(); ?>
        <?php elseif ( is_month() ) : ?>
          Monthly Archives: <?php the_date('F Y'); ?>
        <?php elseif ( is_year() ) : ?>
          Yearly Archives: <?php the_date('Y'); ?>
        <?php else : ?>
          Blog Archives
        <?php endif; ?>
      </h1>

      <?php
    	/* Since we called the_post() above, we need to
    	 * rewind the loop back to the beginning that way
    	 * we can run the loop properly, in full.
    	 */
    	rewind_posts();

    	/* Run the loop for the archives page to output the posts.
    	 * If you want to overload this in a child theme then include a file
    	 * called loop-archives.php and that will be used instead.
    	 */
      get_template_part( 'loop', 'archive' );
      ?> -->

    </div><!--/content-->


  </div> <!-- /.wrapper -->
</div> <!-- /.main -->

<?php get_footer(); ?>