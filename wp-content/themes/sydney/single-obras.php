<?php
/*
Template Name: Single Exposicione
*/

get_header();
$cant_value = get_post_meta( get_the_ID(), 'cantidad_a_mostrar', false )[0];
$description = get_post_meta( $post->ID, 'descripcion', false)[0] ;
$obras = get_post_meta( get_the_ID(), 'obras', false );
$artistas = get_post_meta( get_the_ID(), 'artistas', false );
$artistas_invitados = get_post_meta( get_the_ID(), 'artistas_invitados', false );
$imagen_obra = get_post_meta( get_the_ID(), 'imagen_obra', false )[0];
?>

    <div id="primary" class="content-area col-md-12">
        <main id="main" class="post-wrap" role="main">

            <section class="elementor-section elementor-top-section elementor-element elementor-element-b21d035 elementor-section-boxed elementor-section-height-default elementor-section-height-default" style="margin: 0px 0 8px 0;" data-id="b21d035" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a0c3b0f" data-id="a0c3b0f" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-410bdaa elementor-widget elementor-widget-heading" data-id="410bdaa" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="imagen-obra">
                                                <a href="<?php echo $imagen_obra ? wp_get_attachment_image_src($imagen_obra['ID'], 'lager')[0] : get_the_post_thumbnail_url( get_the_ID()); ?>" class="lightbox-gallery" data-title="<?php echo $post->post_title; ?>">
                                                    <img src="<?php echo $imagen_obra ? wp_get_attachment_image_src($imagen_obra['ID'], 'lager')[0] : get_the_post_thumbnail_url( get_the_ID()); ?>" class="attachment-full size-full">
                                                </a>
                                            </div>
                                            <div class="content-obra">
                                                <?php echo $description ? $description : '<h3>'.$post->post_title.'</h3>'; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php if($artistas || $artistas_invitados){ ?>

                <section class="elementor-section elementor-top-section elementor-element elementor-element-10f3d0c subtitulo elementor-section-boxed elementor-section-height-default elementor-section-height-default" style="margin: 53px 0 20px 0px;" data-id="10f3d0c" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-659b9d3" data-id="659b9d3" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-a71ca7a elementor-widget elementor-widget-heading" data-id="a71ca7a" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Artista</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div id="pcp_wrapper-obras-48" class="sp-pcp-section sp-pcp-container pcp-wrapper-obras-951">
                    <div class="sp-pcp-row">

                        <?php

                        // Loop through all of the results
                        foreach ($artistas as $artista)
                        {

                            ?>
                            <div class=" sp-pcp-col-xs-1 sp-pcp-col-sm-2 sp-pcp-col-md-2 sp-pcp-col-lg-3 sp-pcp-col-xl-3" style="padding-bottom: 46px;">
                                <div class="sp-pcp-post pcp-item-1056" data-id="1056">
                                    <div class="pcp-post-thumb-wrapper">
                                        <div class="sp-pcp-post-thumb-area info_image">
                                            <a class="sp-pcp-thumb" href="<?php echo get_permalink($artista['ID']); ?>" target="_self">
                                                <img loading="lazy" src="<?php echo get_the_post_thumbnail_url( $artista['ID']); ?>" width="657" height="600" alt="">
                                            </a>
                                            <div class="info_hover d-none">
                                                <h2 class="sp-pcp-title">
                                                    <a href="<?php echo get_permalink($artista['ID']); ?>" target="_self"><?php echo $artista['post_title']; ?></a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }

                        foreach ($artistas_invitados as $artista)
                        {

                            ?>
                            <div class=" sp-pcp-col-xs-1 sp-pcp-col-sm-2 sp-pcp-col-md-2 sp-pcp-col-lg-3 sp-pcp-col-xl-3" style="padding-bottom: 46px;">
                                <div class="sp-pcp-post pcp-item-1056" data-id="1056">
                                    <div class="pcp-post-thumb-wrapper">
                                        <div class="sp-pcp-post-thumb-area info_image">
                                            <a class="sp-pcp-thumb" href="<?php echo get_permalink($artista['ID']); ?>" target="_self">
                                                <img loading="lazy" src="<?php echo get_the_post_thumbnail_url( $artista['ID']); ?>" width="657" height="600" alt="">
                                            </a>
                                            <div class="info_hover d-none">
                                                <h2 class="sp-pcp-title">
                                                    <a href="<?php echo get_permalink($artista['ID']); ?>" target="_self"><?php echo $artista['post_title']; ?></a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>

            <?php } ?>



        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>