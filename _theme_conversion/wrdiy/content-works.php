<!-- ======= Works Section ======= -->
<section class="section site-portfolio">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-12 mb-4 aos-init aos-animate" data-aos="fade-up">
                <h2>Hey, I'm Louie</h2>
                <p class="mb-0">Novice woodworker with a few ideas, hoping to inspire or in the least, spark interest.
                </p>
            </div>
            <div class="col-12 text-start" data-aos="fade-up" data-aos-delay="100">
                <div id="filters" class="filters">
                    <a href="#" data-filter="*" class="active">All</a>
                    <a href="#" data-filter=".ideas">ideas</a>
                    <a href="#" data-filter=".outdoor">outdoor</a>
                    <a href="#" data-filter=".workshop">workshop</a>
                    <a href="#" data-filter=".reviews">reviews</a>
                    <a href="#" data-filter=".plans">plans</a>
                    <a href="#" data-filter=".how-to">how-to</a>
                </div>
            </div>
        </div>
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
            <?php $num=1; $loop = new WP_Query( array('post_type' => 'post'/* , 'orderby' => 'post_date', 'order' => 'ASC' */) ); ?>
            <?php while( $loop->have_posts()) : $loop->the_post();?>
            <div class="item outdoor col-sm-6 col-md-4 col-lg-4 mb-4">
                <a href="<?php echo get_permalink();?>" class="item-wrap fancybox">
                  <div class="work-info">
                    <h3><?php echo the_title();?></h3>
                    <span>
                        <?php 
                        foreach((get_the_category()) as $category){
                            echo $category->cat_name . ' ';
                        }
                        ?>
                    </span>
                  </div>
                  
                    <?php echo get_the_post_thumbnail('','',$attr='class=img-fluid');?>
                </a>
              </div>
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
        </div>
    </div>
</section><!-- End  Works Section -->