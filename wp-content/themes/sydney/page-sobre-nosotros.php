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
Template Name: Sobre Nosotros
*/

get_header();
$cant_value = get_post_meta( get_the_ID(), 'cantidad_a_mostrar', false )[0];
$args = array(
    'post_type' => 'servando_en_cifras',
    'posts_per_page' => $cant_value,
    'orderby' => 'date',
    'order' => 'DESC'
);

// Get the posts
$cifras = get_posts($args);

$args = array(
    'post_type' => 'nosotros',
    'posts_per_page' => $cant_value,
    'orderby' => 'date',
    'order' => 'DESC'
);

// Get the posts
$nosotros = get_posts($args);
$cant_nosotros = count($nosotros);
?>

    <div id="primary" class="content-area col-md-12">
		<main id="main" class="post-wrap" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

            <section class="elementor-section elementor-top-section elementor-element elementor-element-726844c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="726844c" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-70372ab" data-id="70372ab" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-c83cf19 subtitulo_interno elementor-widget elementor-widget-heading" data-id="c83cf19" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Galería Servando en Cifras</h2>		</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="sp-pcp-id-149" class="swiper-container sp-pcp-carousel-single cifras mb-3" data-carousel="{ &quot;speed&quot;:600, &quot;items&quot;:3, &quot;spaceBetween&quot;:20, &quot;navigation&quot;:false, &quot;pagination&quot;: false, &quot;autoplay&quot;: true, &quot;autoplay_speed&quot;: 2000, &quot;loop&quot;: true, &quot;autoHeight&quot;: false, &quot;lazy&quot;:  true, &quot;simulateTouch&quot;: true, &quot;slider_mouse_wheel&quot;: false,&quot;allowTouchMove&quot;: true, &quot;slidesPerView&quot;: {&quot;lg_desktop&quot;: 3, &quot;desktop&quot;: 3, &quot;tablet&quot;: 2, &quot;mobile_landscape&quot;: 2, &quot;mobile&quot;: 1}, &quot;navigation_mobile&quot;: false, &quot;pagination_mobile&quot;: false, &quot;stop_onHover&quot;: true, &quot;enabled&quot;: true, &quot;prevSlideMessage&quot;: &quot;Previous slide&quot;, &quot;nextSlideMessage&quot;: &quot;Next slide&quot;, &quot;firstSlideMessage&quot;: &quot;This is the first slide&quot;, &quot;lastSlideMessage&quot;: &quot;This is the last slide&quot;, &quot;paginationBulletMessage&quot;: &quot;Go to slide {{index}}&quot; }">
                <!-- Slides wrapper -->
                <div class="swiper-wrapper">

                    <?php

                    foreach ($cifras as $cifra)
                    {

                        ?>
                        <div class="swiper-slide swiper-lazy swiper-lazy-loaded">
                            <div class="sp-pcp-post pcp-item-1032" data-id="1032">
                                <div class="pcp-post-thumb-wrapper">
                                    <div class="sp-pcp-post-thumb-area">
                                        <a href="<?php echo get_the_post_thumbnail_url( $cifra->ID); ?>" class="lightbox-gallery" data-title="<?php echo $cifra->post_title; ?>">
                                            <img src="<?php echo get_the_post_thumbnail_url( $cifra->ID); ?>" class="attachment-full size-full">
                                        </a>
                                    </div>
                                </div>
                                <h2 class="sp-pcp-title">
                                    <a href="http://servando/servando_en_cifras/cifra-7/" target="_self"><?php echo $cifra->post_title; ?></a>
                                </h2>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>

            <section class="elementor-section elementor-top-section mt-4 elementor-element elementor-element-10f3d0c subtitulo elementor-section-boxed elementor-section-height-default elementor-section-height-default" style="margin: 36px 0 18px 0;" data-id="10f3d0c" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-659b9d3" data-id="659b9d3" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-a71ca7a elementor-widget elementor-widget-heading" data-id="a71ca7a" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">NOSOTROS</h2>		</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="sp-pcp-id-<?php echo the_ID(); ?>" class="swiper-container sp-pcp-carousel-single nosotros" data-carousel="{ &quot;speed&quot;:600, &quot;items&quot;:3, &quot;spaceBetween&quot;:20, &quot;navigation&quot;:false, &quot;pagination&quot;: false, &quot;autoplay&quot;: true, &quot;autoplay_speed&quot;: 2000, &quot;loop&quot;: true, &quot;autoHeight&quot;: false, &quot;lazy&quot;:  true, &quot;simulateTouch&quot;: true, &quot;slider_mouse_wheel&quot;: false,&quot;allowTouchMove&quot;: true, &quot;slidesPerView&quot;: {&quot;lg_desktop&quot;: 3, &quot;desktop&quot;: 3, &quot;tablet&quot;: 2, &quot;mobile_landscape&quot;: 2, &quot;mobile&quot;: 1}, &quot;navigation_mobile&quot;: false, &quot;pagination_mobile&quot;: false, &quot;stop_onHover&quot;: true, &quot;enabled&quot;: true, &quot;prevSlideMessage&quot;: &quot;Previous slide&quot;, &quot;nextSlideMessage&quot;: &quot;Next slide&quot;, &quot;firstSlideMessage&quot;: &quot;This is the first slide&quot;, &quot;lastSlideMessage&quot;: &quot;This is the last slide&quot;, &quot;paginationBulletMessage&quot;: &quot;Go to slide {{index}}&quot; }">
                <!-- Slides wrapper -->
                <div class="swiper-wrapper">

                    <?php

                    foreach ($nosotros as $nosotro)
                    {
                        // Since we're doing this outside the loop,
                        // Build the apply the filters to the post's content

                        // Build out the carousel item
                        $cargo = get_post_meta( $nosotro->ID, 'cargo_que_ocupa', false );
                        $description = get_post_meta( $nosotro->ID, 'descripcion_', false );
                        ?>
                        <div class="swiper-slide swiper-lazy swiper-lazy-loaded">
                            <div class="sp-pcp-post pcp-item-1032" data-id="1032">
                                <div class="pcp-post-thumb-wrapper">
                                    <div class="sp-pcp-post-thumb-area">
                                        <a href="<?php echo get_the_post_thumbnail_url( $nosotro->ID); ?>" class="lightbox-gallery" data-title="<?php echo $nosotro->post_title; ?> - <?php echo $cargo[0]; ?>">
                                            <img src="<?php echo get_the_post_thumbnail_url( $nosotro->ID); ?>" class="attachment-full size-full">
                                        </a>
                                    </div>
                                </div>
                                <h2 class="sp-pcp-title">
                                    <a href="http://servando/servando_en_cifras/cifra-7/" target="_self"><?php echo $nosotro->post_title; ?></a>
                                </h2>
                                <p class="text-center cargo"><?php echo $cargo[0]; ?></p>
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
