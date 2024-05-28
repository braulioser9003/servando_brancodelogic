<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Sydney
 */
/*
Template Name: Aviso Legal
*/

get_header();
$description = get_post_meta( get_the_ID(), 'descripcion', false)[0] ;
$imagen = get_the_post_thumbnail_url( get_the_ID());
?>

<div id="primary" class="content-area col-md-12">
    <main id="main" class="post-wrap" role="main">

        <section class="elementor-section elementor-top-section elementor-element elementor-element-b21d035 elementor-section-boxed elementor-section-height-default elementor-section-height-default" style="margin: 0px 0 8px 0;" data-id="b21d035" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a0c3b0f" data-id="a0c3b0f" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-410bdaa elementor-widget elementor-widget-heading" data-id="410bdaa" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Aviso Legal</h2>		</div>
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
                                        <?php
                                            if(!empty($imagen)) {
                                                ?>
                                                <div class="pcp-post-thumb-wrapper" style="float: left;">
                                                    <div class="sp-pcp-post-thumb-area">
                                                        <a class="lightbox-gallery"
                                                           href="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
                                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        echo $description;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>



</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
