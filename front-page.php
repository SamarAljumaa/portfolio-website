
<section class="hero">
  <div class="heroImage" style="background-image: url(<?php the_field('hero_image')?>); ">
		<?php get_header();  ?>
    <div class="wrapper">
			<div class="titles">
				<h2> <?php the_field('hero_title'); ?> </h2>
				<h3> <?php the_field('hero_subheading'); ?> </h3>
			</div>
	    <div class="languageButtons clearfix">
	      <a href="<?php the_field('english_page_link') ?>"><button>English</button></a>
	      <a href="<?php the_field('arabic_page_link') ?>"><button>العربية</button></a>
	    </div>
  </div> <!-- /.wrapper -->
 </div>   <!-- heroImage -->
</section> <!-- /.section -->

<?php get_footer(); ?>