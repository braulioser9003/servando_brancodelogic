<footer>
  <div class="container">
    <?php
      if ( is_active_sidebar('kids-fashion-footer-sidebar')) {
        echo '<div class="row sidebar-area footer-area">';
          dynamic_sidebar('kids-fashion-footer-sidebar');
        echo '</div>';
      }
    ?>
    <div class="row">
      <div class="col-md-12">
        <p class="mb-0 py-3 text-center text-md-left">

          <?php
            if (!get_theme_mod('kids_fashion_footer_text') ) { ?>
              <a href="<?php echo esc_url(__('https://www.misbahwp.com/themes/free-fashion-kids-wordpress-theme/', 'kids-fashion' )); ?>" target="_blank">
              <?php esc_html_e('Kids Fashion WordPress ','kids-fashion'); ?></a>
            <?php } else {
              echo esc_html(get_theme_mod('kids_fashion_footer_text'));
            }
          ?>
          <?php if ( get_theme_mod('kids_fashion_copyright_enable', true) == true ) : ?>
            <?php 
            /* translators: %s: Misbah WP */ 
            printf( esc_html__( ' Theme by %s', 'kids-fashion' ), 'Misbah WP' ); ?>
            <a href="<?php echo esc_url(__('https://wordpress.org', 'kids-fashion' )); ?>" rel="generator"><?php  /* translators: %s: WordPress */  printf( esc_html__( ' | Proudly powered by %s', 'kids-fashion' ), 'WordPress' ); ?></a>
          <?php endif; ?>
        </p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
