<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wrdiy
 */

?>

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 copyright">
          <p class="mb-3"><a href="<?php echo esc_url( home_url('/')); ?>privacy-policy">Privacy Policy</a></p>
          <p class="mb-3">&copy; 2021 Wood Rather DIY</p>
        </div>
        <div class="col-sm-6 social text-md-end">
          <?php $loop = new WP_Query(
            array('post_type' => 'social')
          ); 
          while ( $loop -> have_posts() ) : $loop -> the_post();
            $soc_link = get_field('soc_link');
            $soc_icon = get_field('soc_icon');
            if (!empty($soc_link)) : 
          ?>
            <a href="<?php echo $soc_link; ?>"><span class="<?php echo $soc_icon; ?>"></span></a>
            <?php 
              endif;
              endwhile;
              wp_reset_query();
            ?>
          
          <!-- <a href="#"><span class="bi bi-twitter"></span></a>
          <a href="#"><span class="bi bi-facebook"></span></a>
          <a href="#"><span class="bi bi-instagram"></span></a>
          <a href="#"><span class="bi bi-linkedin"></span></a> -->
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php bloginfo('template_directory') ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php bloginfo('template_directory') ?>/assets/js/main.js"></script>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
