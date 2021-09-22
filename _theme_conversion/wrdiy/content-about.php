<!-- ======= Services Section ======= -->
<section class="section services">
  <div class="container">
    <div class="row justify-content-center text-center mb-4">
      <div class="col-md-5">
        <h3 class="h3 heading">About me</h3>
        <?php $pages = the_field('bio'); 
          echo get_field('bio', 2);
        ?>
        <a href="<?php echo esc_url(home_url('/')); ?>about-me">read more &raquo;</a>
      </div>
    </div>
  </div>
</section><!-- End Services Section -->
