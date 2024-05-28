<?php if ( get_theme_mod('kids_fashion_blog_box_enable') ) : ?>

<?php $args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('kids_fashion_blog_slide_category'),
  'posts_per_page' => get_theme_mod('kids_fashion_blog_slide_number'),
); ?>

<div class="slider py-5">
  <div class="owl-carousel">
    <?php $arr_posts = new WP_Query( $args );
    if ( $arr_posts->have_posts() ) :
      while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-6 align-self-center blog_box_order">
              <div class="blog_box pt-3 pt-md-0">
                <?php if ( get_theme_mod('kids_fashion_slider_main_title', true) == true ) : ?>
                  <h2><?php echo esc_html( get_theme_mod('kids_fashion_slider_main_title' ) ); ?></h2>
                <?php endif; ?>
                <h3 class="my-3"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h3>
                <p><?php echo esc_html( wp_trim_words( get_the_content(), 15, '...' ) ); ?></p>
                <p class="slider_btn my-5">
                  <?php if ( get_theme_mod('kids_fashion_slider_button_text', true) == true ) : ?>
                    <a href="<?php the_permalink(); ?>" class="py-3 px-4"><?php echo esc_html( get_theme_mod('kids_fashion_slider_button_text' ) ); ?></a>
                  <?php endif; ?>
                </p>
              </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6 align-self-center blog_inner_box_order">
              <div class="blog_inner_box">
                <?php
                  if ( has_post_thumbnail() ) :
                    the_post_thumbnail();
                  endif;
                ?>
              </div>
            </div>
          </div>
        </div>
      <?php
    endwhile;
    wp_reset_postdata();
    endif; ?>
  </div>
</div>

<?php endif; ?>