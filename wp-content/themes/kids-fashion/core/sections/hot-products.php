<?php if ( get_theme_mod('kids_fashion_hot_products_section_enable') ) : ?>
  <div id="products" class="py-5">
    <div class="container text-center">
      <h3><?php echo esc_html(get_theme_mod('kids_fashion_hot_products_section_heading'));?></h3>
      <p class="content"><?php echo esc_html(get_theme_mod('kids_fashion_hot_products_section_sub_heading'));?></p>
      <div class="row"> 
        <?php
        $kids_fashion_catData = get_theme_mod('kids_fashion_products_category');
        if ( class_exists( 'WooCommerce' ) ) {
          $args = array( 
            'post_type' => 'product',
            'posts_per_page' => get_theme_mod('kids_fashion_products_numbers'),
            'product_cat' => $kids_fashion_catData,
            'order' => 'ASC'
          );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="tab-product">
                  <div class="product-image my-lg-4  my-md-2 my-3 box">
                    <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" />'; ?>
                    <?php if ( has_post_thumbnail() ) { ?>      
                        <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
                    <?php }?>
                    <div class="box-content intro-button">
                      <?php if( $product->is_type( 'simple' ) ) { woocommerce_template_loop_add_to_cart(  $loop->post, $product );} ?>
                    </div>
                  </div>
                  <?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_rating( $loop->post, $product ); } ?>
                  <div class="product-details text-center ">
                    <h4 class="product-text my-2 "><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h4>
                    <h5 class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></h5>
                </div>
              </div>
            </div>
          <?php endwhile; wp_reset_query(); ?>
        <?php } ?>
      </div>
    </div>
  </div>
<?php endif; ?>