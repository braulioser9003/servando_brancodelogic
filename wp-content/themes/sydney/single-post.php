<?php
/*
Template Name: Single Artistas Nomina
*/

get_header();
$cant_value = get_post_meta( get_the_ID(), 'cantidad_a_mostrar', false )[0];
$description = get_post_meta( $post->ID, 'descripcion', false)[0] ;
?>

    <div id="primary" class="content-area col-md-12">
        <main id="main" class="post-wrap" role="main">

            <section class="elementor-section elementor-top-section elementor-element elementor-element-b21d035 elementor-section-boxed elementor-section-height-default elementor-section-height-default" style="margin: 0px 0 8px 0;" data-id="b21d035" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a0c3b0f" data-id="a0c3b0f" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-410bdaa elementor-widget elementor-widget-heading" data-id="410bdaa" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default"><?php echo $post->post_title; ?></h2>		</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="elementor-section single-post elementor-top-section elementor-element elementor-section-boxed elementor-section-height-default elementor-section-height-default" style="margin: 0px 0 8px 0;" data-id="b21d035" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a0c3b0f" data-id="a0c3b0f" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-410bdaa elementor-widget elementor-widget-heading" data-id="410bdaa" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="pcp-post-thumb-wrapper" style="float: left;">
                                                <div class="sp-pcp-post-thumb-area">
                                                    <a class="lightbox-gallery" href="<?php echo get_the_post_thumbnail_url( $post->ID); ?>">
                                                        <img src="<?php echo get_the_post_thumbnail_url( $post->ID); ?>">
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                            echo $description;
                                            ?>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-md-12">
                                            <a href="#" class="elementor-button-link elementor-button elementor-size-sm sharepost" id="sharepost" role="button">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-text">Compartir</span>
                                                </span>
                                            </a>
                                            <div class="text-center share-content d-none">
                                                <p>Compartir en:</p>
                                                <?php echo do_shortcode('[ssba-buttons]') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <?php
            // If comments are open or we have at least one comment, load up the comment template
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>

            </div>



        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>

<script>
  (function($){
    $('.sharepost').on('click', function () {
      $(this).attr('style', 'display: none !important;');
      $('.share-content').removeClass('d-none');
    });
  }(jQuery));
</script>
