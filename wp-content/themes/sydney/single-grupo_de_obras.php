<?php
/*
Template Name: Single Grupo de obras
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

            <section class="elementor-section elementor-top-section elementor-element elementor-element-10f3d0c subtitulo elementor-section-boxed elementor-section-height-default elementor-section-height-default" style="margin: 53px 0 20px 0px;" data-id="10f3d0c" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-659b9d3" data-id="659b9d3" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-a71ca7a elementor-widget elementor-widget-heading" data-id="a71ca7a" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <?php echo $description; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="elementor-section elementor-top-section elementor-element elementor-element-10f3d0c subtitulo elementor-section-boxed elementor-section-height-default elementor-section-height-default" style="margin: 53px 0 20px 0px;" data-id="10f3d0c" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-659b9d3" data-id="659b9d3" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-a71ca7a elementor-widget elementor-widget-heading" data-id="a71ca7a" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Obras</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="sp-pcp-id-88" class="swiper-container info_overly sp-pcp-carousel-single nosostros" data-carousel="{ &quot;speed&quot;:600, &quot;items&quot;:5, &quot;spaceBetween&quot;:20, &quot;navigation&quot;:false, &quot;pagination&quot;: false, &quot;autoplay&quot;: true, &quot;autoplay_speed&quot;: 2000, &quot;loop&quot;: true, &quot;autoHeight&quot;: false, &quot;lazy&quot;:  true, &quot;simulateTouch&quot;: true, &quot;slider_mouse_wheel&quot;: false,&quot;allowTouchMove&quot;: true, &quot;slidesPerView&quot;: {&quot;lg_desktop&quot;: 3, &quot;desktop&quot;: 3, &quot;tablet&quot;: 2, &quot;mobile_landscape&quot;: 1, &quot;mobile&quot;: 1}, &quot;navigation_mobile&quot;: false, &quot;pagination_mobile&quot;: false, &quot;stop_onHover&quot;: true, &quot;enabled&quot;: true, &quot;prevSlideMessage&quot;: &quot;Previous slide&quot;, &quot;nextSlideMessage&quot;: &quot;Next slide&quot;, &quot;firstSlideMessage&quot;: &quot;This is the first slide&quot;, &quot;lastSlideMessage&quot;: &quot;This is the last slide&quot;, &quot;paginationBulletMessage&quot;: &quot;Go to slide {{index}}&quot; }">
                <!-- Slides wrapper -->
                <div class="swiper-wrapper">

                    <?php
                    // Build out the carousel item
                    $obras = get_post_meta( get_the_ID(), 'obras', false );


                    // Loop through all of the results
                    foreach ($obras as $obra)
                    {
                        // Since we're doing this outside the loop,
                        // Build the apply the filters to the post's content

                        // Build out the carousel item
                        ?>
                        <div class="swiper-slide swiper-lazy swiper-lazy-loaded">
                            <div class="sp-pcp-post pcp-item-1032" data-id="1032">
                                <div class="pcp-post-thumb-wrapper">
                                    <div class="sp-pcp-post-thumb-area">
                                        <a class="sp-pcp-thumb" href="<?php echo get_permalink($obra['ID']); ?>"
                                           target="_self">
                                            <img loading="lazy" src="<?php echo get_the_post_thumbnail_url( $obra['ID']); ?>" width="657"
                                                 height="600" alt="">
                                        </a>
                                    </div>
                                </div>
                                <h2 class="sp-pcp-title">
                                    <a href="<?php echo get_permalink($obra['ID']); ?>" target="_self"><?php echo $obra['post_title']; ?></a>
                                </h2>
                            </div>
                        </div>
                        <?php

                    }
                    ?>
                </div>
            </div>



        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>