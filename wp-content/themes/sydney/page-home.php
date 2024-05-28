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
Template Name: Home
*/

get_header();
$cant_value = get_post_meta( get_the_ID(), 'cantidad_a_mostrar', false )[0];
?>

    <div id="primary" class="content-area col-md-12">
		<main id="main" class="post-wrap" role="main">

            <div id="sp-pcp-id-333" class="swiper-container slide-imagenes-home header-gallery sp-pcp-carousel-single nosostros" style="margin-top: -34px;" data-carousel="{ &quot;speed&quot;:600, &quot;items&quot;:<?php echo $obras != null ? count($obras) : '1'; ?>, &quot;spaceBetween&quot;:20, &quot;navigation&quot;:false, &quot;pagination&quot;: false, &quot;autoplay&quot;: true, &quot;autoplay_speed&quot;: 2000, &quot;loop&quot;: true, &quot;autoHeight&quot;: false, &quot;lazy&quot;:  true, &quot;simulateTouch&quot;: true, &quot;slider_mouse_wheel&quot;: false,&quot;allowTouchMove&quot;: true, &quot;slidesPerView&quot;: {&quot;lg_desktop&quot;: 1, &quot;desktop&quot;: 1, &quot;tablet&quot;: 1, &quot;mobile_landscape&quot;: 1, &quot;mobile&quot;: 1}, &quot;navigation_mobile&quot;: false, &quot;pagination_mobile&quot;: false, &quot;stop_onHover&quot;: true, &quot;enabled&quot;: true, &quot;prevSlideMessage&quot;: &quot;Previous slide&quot;, &quot;nextSlideMessage&quot;: &quot;Next slide&quot;, &quot;firstSlideMessage&quot;: &quot;This is the first slide&quot;, &quot;lastSlideMessage&quot;: &quot;This is the last slide&quot;, &quot;paginationBulletMessage&quot;: &quot;Go to slide {{index}}&quot; }">
                <!-- Slides wrapper -->
                <div class="swiper-wrapper">

                    <?php

                    $args = array(
                        'post_type' => 'galeria',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );

                    $galeria = get_posts($args);

                    if($galeria != null){
                        foreach ($galeria as $row) {
                            $slider_home = get_post_meta( $row->ID, 'slider_home', false )[0];

                            if($slider_home) {
                                ?>
                                <div class="swiper-slide swiper-lazy swiper-lazy-loaded">
                                    <div class="sp-pcp-post pcp-item-1032" data-id="1032">
                                        <div class="pcp-post-thumb-wrapper">
                                            <div class="sp-pcp-post-thumb-area">
                                                <a href="<?php echo get_the_post_thumbnail_url($row->ID, 'large'); ?>"
                                                   class="lightbox-gallery">
                                                    <img src="<?php echo get_the_post_thumbnail_url($row->ID); ?>"
                                                         class="attachment-full size-full">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    }



                    ?>
                </div>
            </div>
            <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
