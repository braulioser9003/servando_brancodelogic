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
Template Name: Exposiciones
*/

get_header();
$cant_value = get_post_meta( get_the_ID(), 'cantidad_a_mostrar', false )[0];
$order = isset($_GET['order']) ? $_GET['order'] : 'artista';
?>

    <div id="primary" class="content-area col-md-12">
		<main id="main" class="post-wrap" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

            <section class="elementor-section elementor-top-section elementor-element elementor-element-b21d035 elementor-section-boxed elementor-section-height-default elementor-section-height-default" style="margin: -66px 0 8px 0;" data-id="b21d035" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a0c3b0f" data-id="a0c3b0f" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-410bdaa elementor-widget elementor-widget-heading" data-id="410bdaa" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">EXPOSICIONES</h2>		</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="elementor-section elementor-top-section elementor-element elementor-element-10f3d0c subtitulo elementor-section-boxed elementor-section-height-default elementor-section-height-default" style="margin: 0 0 20px 0px;" data-id="10f3d0c" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-659b9d3" data-id="659b9d3" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-a71ca7a elementor-widget elementor-widget-heading" data-id="a71ca7a" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">EN EXHIBICIÓN</h2>		</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="sp-pcp-id-33" class="swiper-container header-gallery slide-imagenes-home sp-pcp-carousel-single nosostros" data-carousel="{ &quot;speed&quot;:600, &quot;items&quot;:5, &quot;spaceBetween&quot;:20, &quot;navigation&quot;:false, &quot;pagination&quot;: false, &quot;autoplay&quot;: true, &quot;autoplay_speed&quot;: 2000, &quot;loop&quot;: true, &quot;autoHeight&quot;: false, &quot;lazy&quot;:  true, &quot;simulateTouch&quot;: true, &quot;slider_mouse_wheel&quot;: false,&quot;allowTouchMove&quot;: true, &quot;slidesPerView&quot;: {&quot;lg_desktop&quot;: 1, &quot;desktop&quot;: 1, &quot;tablet&quot;: 1, &quot;mobile_landscape&quot;: 1, &quot;mobile&quot;: 1}, &quot;navigation_mobile&quot;: false, &quot;pagination_mobile&quot;: false, &quot;stop_onHover&quot;: true, &quot;enabled&quot;: true, &quot;prevSlideMessage&quot;: &quot;Previous slide&quot;, &quot;nextSlideMessage&quot;: &quot;Next slide&quot;, &quot;firstSlideMessage&quot;: &quot;This is the first slide&quot;, &quot;lastSlideMessage&quot;: &quot;This is the last slide&quot;, &quot;paginationBulletMessage&quot;: &quot;Go to slide {{index}}&quot; }">
                <!-- Slides wrapper -->
                <div class="swiper-wrapper">

                    <?php
                    // Set up your arguments array to include your post type,
                    // order, posts per page, etc.

                    $args = array(
                        'post_type' => 'exposicione',
                        'posts_per_page' => $cant_value,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );

                    // Get the posts
                    $exposiciones = get_posts($args);



                    // Loop through all of the results
                    foreach ($exposiciones as $exposicione)
                    {
                        // Since we're doing this outside the loop,
                        // Build the apply the filters to the post's content

                        // Build out the carousel item
                        $obras = get_post_meta( $exposicione->ID, 'obras', false );
                        $exhibicion = get_post_meta( $exposicione->ID, 'exhibicion', false );

                        if($exhibicion[0] == 1){
                            $galerias = get_post_meta( $exposicione->ID, 'galeria', false );
                            if($galerias != null){
                                foreach ($galerias as $galeria) {

                                    ?>
                                    <div class="swiper-slide swiper-lazy swiper-lazy-loaded">
                                        <div class="sp-pcp-post pcp-item-1032" data-id="1032">
                                            <div class="pcp-post-thumb-wrapper">
                                                <div class="sp-pcp-post-thumb-area">
                                                    <a class="sp-pcp-thumb"
                                                       href="<?php echo get_permalink( $exposicione->ID); ?>" target="_self">
                                                        <img loading="lazy" src="<?php echo  wp_get_attachment_image_src($galeria['ID'], 'lager')[0] ?>" width="657"
                                                             height="600" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php

                                }
                            }
                        }

                    }
                    ?>
                </div>
            </div>

            <section class="elementor-section elementor-top-section elementor-element elementor-element-10f3d0c subtitulo elementor-section-boxed elementor-section-height-default elementor-section-height-default" style="margin: 53px 0 20px 0px;" data-id="10f3d0c" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-659b9d3" data-id="659b9d3" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-a71ca7a elementor-widget elementor-widget-heading" data-id="a71ca7a" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Archivo</h2>		</div>
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
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link <?php echo $order == 'artista' ? 'active' : '' ?>" href="/exposiciones?order=artista">Por Artista</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link <?php echo $order == 'ano' ? 'active' : '' ?>" href="/exposiciones?order=ano" >Por Año</a>
                                                </li>
                                            </ul>
                                            <hr id="bottom_order">
                                        </div>
                                        <div class="col-md-8">

                                        </div>
                                    </div>
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
                    // Set up your arguments array to include your post type,
                    // order, posts per page, etc.

                    $ordenar = $order;

                    if($order == 'ano'){
                        $result = array();
                        $args = array(
                            'post_type' => 'exposicione',
                            'posts_per_page' => $cant_value,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        );

                        // Get the posts
                        $exposiciones = get_posts($args);

                        foreach ($exposiciones as $key => $exposicione)
                        {
                            $result[$key] = $exposicione;

                            if(!empty(get_post_meta( $exposicione->ID, 'ano', false )[0])){
                                $ano = get_post_meta( $exposicione->ID, 'ano', false )[0];
                            }else{
                                $ano = [];
                            }

                            $date = date("Y", strtotime($exposicione->post_date));

                            $result[$key]->filter  = !empty($ano) ? $ano : $date;
                        }

                        $exposiciones = $result;

                        usort($exposiciones, function ($a, $b){
                            return strcmp($b->filter, $a->filter);
                        });
                    } else{
                        $result = array();

                        $args = array(
                            'post_type' => 'exposicione',
                            'posts_per_page' => $cant_value,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        );

                        // Get the posts
                        $exposiciones = get_posts($args);

                        foreach ($exposiciones as $key => $exposicione)
                        {
                            $result[$key] = $exposicione;

                            if(!empty(get_post_meta( $exposicione->ID, 'artistas', false )[0])){
                                $artista = get_post_meta( $exposicione->ID, 'artistas', false )[0];
                            }
                            elseif (!empty(get_post_meta( $exposicione->ID, 'artistas_invitados', false )[0])){
                                $artista = get_post_meta( $exposicione->ID, 'artistas_invitados', false )[0];
                            }else{
                                $artista = [];
                            }

                            $artista_archivo = get_post_meta( $exposicione->ID, 'artista_archivo', false )[0];

                            if(!empty($artista_archivo)){
                                $result[$key]->filter = get_post_meta( $exposicione->ID, 'artista_archivo', false )[0];
                            }else{
                                $result[$key]->filter  = !empty($artista) ? $artista['post_title'] : '';
                            }
                        }

                        $exposiciones = $result;

                        usort($exposiciones, function ($a, $b){
                            return strcmp($a->filter, $b->filter);
                        });

                    }


                    // Loop through all of the results
                    foreach ($exposiciones as $exposicione)
                    {
                        // Since we're doing this outside the loop,
                        // Build the apply the filters to the post's content

                        // Build out the carousel item
                        ?>
                        <div class="swiper-slide swiper-lazy swiper-lazy-loaded">
                            <div class="sp-pcp-post pcp-item-1032" data-id="1032">
                                <div class="pcp-post-thumb-wrapper">
                                    <div class="sp-pcp-post-thumb-area">
                                        <a class="sp-pcp-thumb" href="<?php echo get_permalink($exposicione->ID); ?>"
                                           target="_self">
                                            <img loading="lazy" src="<?php echo get_the_post_thumbnail_url( $exposicione->ID, "ultp_layout_portrait"); ?>" width="657"
                                                 height="600" alt="">
                                        </a>
                                    </div>
                                </div>
                                <h2 class="sp-pcp-title">
                                    <a href="<?php echo get_permalink($exposicione->ID); ?>" target="_self"><?php echo $exposicione->post_title; ?><br><strong style="font-weight: 900 !important; color: #adadad;"><?php echo $exposicione->filter; ?></strong></a>
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
