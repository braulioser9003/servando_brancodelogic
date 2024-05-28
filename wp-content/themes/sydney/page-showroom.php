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
Template Name: Showrooms
*/

get_header();
$cant_value = get_post_meta( get_the_ID(), 'cantidad_a_mostrar', false )[0];
// Set up your arguments array to include your post type,
// order, posts per page, etc.

$args = array(
    'post_type' => 'showrooms',
    'posts_per_page' => $cant_value,
    'orderby' => 'date',
    'order' => 'DESC'
);

// Get the posts
$showrooms = get_posts($args);
?>

    <div id="primary" class="content-area col-md-12">
		<main id="main" class="post-wrap" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

            <?php if($showrooms){ ?>

            <section class="elementor-section elementor-top-section elementor-element elementor-element-b21d035 elementor-section-boxed elementor-section-height-default elementor-section-height-default" style="margin: -66px 0 8px 0;" data-id="b21d035" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a0c3b0f" data-id="a0c3b0f" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-410bdaa elementor-widget elementor-widget-heading" data-id="410bdaa" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">SHOWROOMS</h2>		</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="sp-pcp-id-33" class="swiper-container header-gallery slide-imagenes-home sp-pcp-carousel-single nosostros" data-carousel="{ &quot;speed&quot;:600, &quot;items&quot;:5, &quot;spaceBetween&quot;:20, &quot;navigation&quot;:false, &quot;pagination&quot;: false, &quot;autoplay&quot;: true, &quot;autoplay_speed&quot;: 2000, &quot;loop&quot;: true, &quot;autoHeight&quot;: false, &quot;lazy&quot;:  true, &quot;simulateTouch&quot;: true, &quot;slider_mouse_wheel&quot;: false,&quot;allowTouchMove&quot;: true, &quot;slidesPerView&quot;: {&quot;lg_desktop&quot;: 1, &quot;desktop&quot;: 1, &quot;tablet&quot;: 1, &quot;mobile_landscape&quot;: 1, &quot;mobile&quot;: 1}, &quot;navigation_mobile&quot;: false, &quot;pagination_mobile&quot;: false, &quot;stop_onHover&quot;: true, &quot;enabled&quot;: true, &quot;prevSlideMessage&quot;: &quot;Previous slide&quot;, &quot;nextSlideMessage&quot;: &quot;Next slide&quot;, &quot;firstSlideMessage&quot;: &quot;This is the first slide&quot;, &quot;lastSlideMessage&quot;: &quot;This is the last slide&quot;, &quot;paginationBulletMessage&quot;: &quot;Go to slide {{index}}&quot; }">
                <!-- Slides wrapper -->
                <div class="swiper-wrapper">

                    <?php
                    $args = array(
                        'post_type' => 'showrooms',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );

                    $showrooms = get_posts($args);

                    if($showrooms != null){
                        foreach ($showrooms as $row) {

                            ?>
                            <div class="swiper-slide swiper-lazy swiper-lazy-loaded">
                                <div class="sp-pcp-post pcp-item-1032" data-id="1032">
                                    <div class="pcp-post-thumb-wrapper">
                                        <div class="sp-pcp-post-thumb-area">
                                            <a href="<?php echo get_the_post_thumbnail_url($row->ID); ?>" class="lightbox-gallery" data-title="<?php echo $row->post_title; ?>">
                                                <img width="657" height="600" src="<?php echo get_the_post_thumbnail_url($row->ID); ?>" class="attachment-full size-full">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php

                        }
                    }
                    ?>
                </div>
            </div>

            <?php } ?>

            <section class="elementor-section elementor-top-section elementor-element elementor-element-10f3d0c subtitulo elementor-section-boxed elementor-section-height-default elementor-section-height-default" style="margin: 53px 0 20px 0px;" data-id="10f3d0c" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-659b9d3" data-id="659b9d3" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-a71ca7a elementor-widget elementor-widget-heading" data-id="a71ca7a" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">OBRAS</h2>		</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="sp-pcp-id-88" class="swiper-container info_overly sp-pcp-carousel-single nosostros" data-carousel="{ &quot;speed&quot;:600, &quot;items&quot;:5, &quot;spaceBetween&quot;:20, &quot;navigation&quot;:false, &quot;pagination&quot;: false, &quot;autoplay&quot;: true, &quot;autoplay_speed&quot;: 2000, &quot;loop&quot;: true, &quot;autoHeight&quot;: false, &quot;lazy&quot;:  true, &quot;simulateTouch&quot;: true, &quot;slider_mouse_wheel&quot;: false,&quot;allowTouchMove&quot;: true, &quot;slidesPerView&quot;: {&quot;lg_desktop&quot;: 3, &quot;desktop&quot;: 3, &quot;tablet&quot;: 2, &quot;mobile_landscape&quot;: 1, &quot;mobile&quot;: 1}, &quot;navigation_mobile&quot;: false, &quot;pagination_mobile&quot;: false, &quot;stop_onHover&quot;: true, &quot;enabled&quot;: true, &quot;prevSlideMessage&quot;: &quot;Previous slide&quot;, &quot;nextSlideMessage&quot;: &quot;Next slide&quot;, &quot;firstSlideMessage&quot;: &quot;This is the first slide&quot;, &quot;lastSlideMessage&quot;: &quot;This is the last slide&quot;, &quot;paginationBulletMessage&quot;: &quot;Go to slide {{index}}&quot; }">
                <!-- Slides wrapper -->
                <div class="swiper-wrapper">

                    <?php
                    // Set up your arguments array to include your post type,
                    // order, posts per page, etc.

                    $args = array(
                        'post_type' => 'obras',
                        'posts_per_page' => -1,
                        'orderby' => 'rand'
                    );

                    // Get the posts
                    $obras = get_posts($args);

                    if($obras != null){
                        foreach ($obras as $row) {
                            $mostrar_en_showroows = get_post_meta( $row->ID, 'mostrar_en_showroows', false )[0];
                            if($mostrar_en_showroows) {

                                ?>
                                <div class="swiper-slide swiper-lazy swiper-lazy-loaded">
                                    <div class="sp-pcp-post pcp-item-1032" data-id="1032">
                                        <div class="pcp-post-thumb-wrapper">
                                            <div class="sp-pcp-post-thumb-area">
                                                <a class="sp-pcp-thumb" href="<?php echo get_permalink($row->ID); ?>"
                                                   target="_self">
                                                    <img loading="lazy" src="<?php echo get_the_post_thumbnail_url( $row->ID); ?>" width="657"
                                                         height="600" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <h2 class="sp-pcp-title">
                                            <a href="<?php echo get_permalink($row->ID); ?>" target="_self"><?php echo $row->post_title; ?></a>
                                        </h2>
                                    </div>
                                </div>
                                <?php

                            }
                        }
                    }

                    ?>
                </div>
            </div>



		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
