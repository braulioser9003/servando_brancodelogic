<?php
/*
Template Name: Single Sobre Nosotros
*/
?>
<?php get_header(); ?>

    <div class="content">
        <div class="swiper-container sp-pcp-carousel" data-carousel="{ &quot;speed&quot;:600, &quot;items&quot;:7, &quot;spaceBetween&quot;:20, &quot;navigation&quot;:false, &quot;pagination&quot;: false, &quot;autoplay&quot;: true, &quot;autoplay_speed&quot;: 2000, &quot;loop&quot;: true, &quot;autoHeight&quot;: false, &quot;lazy&quot;:  true, &quot;simulateTouch&quot;: true, &quot;slider_mouse_wheel&quot;: false,&quot;allowTouchMove&quot;: true, &quot;slidesPerView&quot;: {&quot;lg_desktop&quot;: 7, &quot;desktop&quot;: 7, &quot;tablet&quot;: 3, &quot;mobile_landscape&quot;: 2, &quot;mobile&quot;: 1}, &quot;navigation_mobile&quot;: false, &quot;pagination_mobile&quot;: false, &quot;stop_onHover&quot;: true, &quot;enabled&quot;: true, &quot;prevSlideMessage&quot;: &quot;Previous slide&quot;, &quot;nextSlideMessage&quot;: &quot;Next slide&quot;, &quot;firstSlideMessage&quot;: &quot;This is the first slide&quot;, &quot;lastSlideMessage&quot;: &quot;This is the last slide&quot;, &quot;paginationBulletMessage&quot;: &quot;Go to slide {{index}}&quot; }">
            <!-- Slides wrapper -->
            <div class="swiper-wrapper">

                <?php
                // Set up your arguments array to include your post type,
                // order, posts per page, etc.

                $args = array(
                    'post_type' => 'nosotros',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                // Get the posts
                $testimonials = get_posts($args);



                // Loop through all of the results
                foreach ($testimonials as $testimonial)
                {
                    // Since we're doing this outside the loop,
                    // Build the apply the filters to the post's content

                    $content = $testimonial->post_content;
                    $content = str_replace(']]>', ']]&gt;', $content);
                    $content = apply_filters('the_content', $content);

                    // Build out the carousel item
                    $cargos = get_post_meta( $testimonial->id, 'artista', false );

                    foreach ($cargos as $key => $cargo) {

                        $content = $cargos->post_content;
                        $content = str_replace(']]>', ']]&gt;', $content);
                        $content = apply_filters('the_content', $content);
                        ?>
                        <div class="swiper-slide swiper-lazy swiper-lazy-loaded">
                            <div class="sp-pcp-post pcp-item-1032" data-id="1032">
                                <div class="pcp-post-thumb-wrapper">
                                    <div class="sp-pcp-post-thumb-area">
                                        <a class="sp-pcp-thumb" href="<?php echo get_permalink($cargo['ID']); ?>" target="_self">
                                            <img loading="lazy" src="<?php echo get_the_post_thumbnail_url( $cargo['ID']); ?>" width="657" height="600" alt="">
                                        </a>
                                    </div>
                                </div>
                                <h2 class="sp-pcp-title">
                                    <a href="http://servando/servando_en_cifras/cifra-7/" target="_self"><?php echo $cargo['post_title']; ?></a>							</h2>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>



    </div><?php
get_footer();
?>