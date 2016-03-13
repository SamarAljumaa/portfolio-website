<?php get_header(); ?>

<section class="portfolio">
  <div class="wrapper">
    <div class="content">
      <h2 class="portfolioTitleEng">My Work</h2>
      <h2 class="portfolioTitleArb">أعمالي</h2>
      <?php $portfolioWork = new WP_Query(array(
        'post_per_page' => -1,
        'post_type' => 'portfolio' 
      )); ?>
      <?php if($portfolioWork -> have_posts()): ?>
        <?php while($portfolioWork -> have_posts()): ?>
          <?php $portfolioWork -> the_post(); ?>
        <div class="individualProject">
          <div class="projectInfo">
            <h4><?php the_title() ?></h4>
            <p> <?php the_field ('short_description') ?></p>
            <?php while(the_field('long_description')): ?>
              <p> <?php the_field('long_description') ?></p>
              <?php endwhile; ?>
            
            <ul class="clearfix"><?php while(has_sub_field('skills')): ?>
              <li><?php the_sub_field('the_skill'); ?></li>
              <?php endwhile; ?></ul>
              <button class="portfolioLinkEng"><a href="<?php the_field('website_url'); ?> ">View Project</a></button>
              <button class="portfolioLinkArb"><a href="<?php the_field('website_url'); ?> ">زور الصفحة</a></button>
          </div>

          <div class="projectImage clearfix">
            <?php $image = get_field('images') ?>
            <img src=" <?php echo $image['sizes']['large'] ?> " alt="">
          </div>
        </div>


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
      //get_template_part( 'loop', 'archive' );
      ?> -->

    </div><!--/content-->


  </div> <!-- /.wrapper -->
</section> <!-- /.portfolio -->

<?php get_footer(); ?>