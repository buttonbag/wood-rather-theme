<!-- ======= Works Section ======= -->
<section class="section site-portfolio">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-12 mb-4 aos-init aos-animate" data-aos="fade-up">
                <h2>Hey, I'm Louie</h2>
                <p class="mb-0">
                    <?php $pages = the_field('about-header'); 
                        echo get_field('about-header', 2);
                    ?>
                </p>
                <a href="<?php echo esc_url(home_url('/')); ?>about-me">read more &raquo;</a>
            </div>
            <div class="col-12 text-start" data-aos="fade-up" data-aos-delay="100">
                <div id="filters" class="filters">
                    <a href="#" data-filter="*" class="active">All</a>
                    
                    <?php 
                    $exclude = array(
                        'exclude' => get_cat_ID('Uncategorized')
                    );
                    foreach(get_categories($exclude) as $filter_items){
                        echo '<a href="#" data-filter=".' .$filter_items->name .'">'. $filter_items->name . '</a>';
                    }
                    ?>

                    <!-- // output // 
                    <a href="#" data-filter=".ideas">ideas</a>
                    <a href="#" data-filter=".outdoor">outdoor</a>
                    <a href="#" data-filter=".workshop">workshop</a>
                    <a href="#" data-filter=".reviews">reviews</a>
                    <a href="#" data-filter=".plans">plans</a>
                    <a href="#" data-filter=".how-to">how-to</a>
                     -->
                </div>
            </div>
        </div>
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
            <?php $num=1; $loop_post = new WP_Query( array('post_type' => 'post', 'orderby' => 'post_date', 'posts_per_page' => -1) ); ?>
            <?php while( $loop_post->have_posts()) : $loop_post->the_post();?>
            <div class="item <?php 
                        foreach((get_the_category()) as $category){
                            echo $category->cat_name . ' ';
                        }
                        ?> col-sm-6 col-md-4 col-lg-4 mb-4">
                    
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
                  
                  <?php if (has_post_thumbnail()) {
                      echo get_the_post_thumbnail('','',$attr='class=img-fluid');
                  } else {?>
                   <img class="img-fluid"
                src="//picsum.photos/600/900">
                <?php 
                  }?>
                </a>
              </div>
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
        </div>
    </div>
</section><!-- End  Works Section -->