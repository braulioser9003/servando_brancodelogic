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
Template Name: Ferias
*/

get_header();
$cant_value = get_post_meta( get_the_ID(), 'cantidad_a_mostrar', false )[0];
?>

    <div id="primary" class="content-area col-md-12">
		<main id="main" class="post-wrap" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

            <div id="pcp_wrapper-52" class="sp-pcp-section feria sp-pcp-container pcp-wrapper-951">
                <div class="sp-pcp-row">

                    <?php
                    // Set up your arguments array to include your post type,
                    // order, posts per page, etc.

                    $result = array();

                    $args = array(
                        'post_type' => 'ferias',
                        'posts_per_page' => $cant_value
                    );

                    $ferias = get_posts($args);

                    foreach ($ferias as $key => $feria)
                    {
                        $result[$key] = $feria;

                        $result[$key]->filter  = get_post_meta( $feria->ID, 'ano', false )[0];
                    }

                    $ferias = $result;

                    usort($ferias, function ($a, $b){
                        return strcmp($b->filter, $a->filter);
                    });



                    // Loop through all of the results
                    foreach ($ferias as $feria)
                    {
                        $description = get_post_meta( $feria->ID, 'descripcion', false );
                        $ano = get_post_meta( $feria->ID, 'ano', false );
                        ?>
                        <div class=" sp-pcp-col-xs-1 sp-pcp-col-sm-2 sp-pcp-col-md-2 sp-pcp-col-lg-4 sp-pcp-col-xl-4" style="padding-bottom: 46px;">
                            <div class="sp-pcp-post pcp-item-1056" data-id="1056">
                                <div class="pcp-post-thumb-wrapper">
                                    <div class="sp-pcp-post-thumb-area">
                                        <a class="sp-pcp-thumb" href="<?php echo get_permalink($feria->ID); ?>" target="_self">
                                            <img loading="lazy" src="<?php echo get_the_post_thumbnail_url( $feria->ID); ?>" width="657" height="600" alt="">
                                        </a>
                                    </div>
                                </div>
                                <h2 class="sp-pcp-title">
                                    <a href="<?php echo get_permalink($feria->ID); ?>" target="_self"><?php echo $feria->post_title; ?></a>
                                </h2>
                                <p class="text-center ano"><?php echo $ano[0]; ?></p>
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
