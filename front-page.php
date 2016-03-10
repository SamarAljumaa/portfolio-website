
<section class="hero">
  <div class="heroImage" style="background-image: url(<?php the_field('hero_image')?>); ">
    <div class="wrapper">

    <?php get_header();  ?>
    
    <div class="languageButtons clearfix">
      <button><a href="<?php the_field('english_page_link') ?>">English</a></button>
      <button><a href="<?php the_field('arabic_page_link') ?>">العربية</a></button>
    </div>

  </div> <!-- /.wrapper -->
 </div>   <!-- heroImage -->
</section> <!-- /.section -->

<?php get_footer(); ?>