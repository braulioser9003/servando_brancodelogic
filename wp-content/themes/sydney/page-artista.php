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
Template Name: Artistas
*/

get_header();
$cant_value = get_post_meta( get_the_ID(), 'cantidad_a_mostrar', false )[0];
$args = array(
    'post_type' => 'artistas_nomina',
    'posts_per_page' => $cant_value,
    'orderby' => 'date',
    'order' => 'DESC'
);

// Get the posts
$artistas_nomina = get_posts($args);

$args = array(
    'post_type' => 'artistas_invitados',
    'posts_per_page' => $cant_value,
    'orderby' => 'date',
    'order' => 'DESC'
);

// Get the posts
$artistas_invitados = get_posts($args);
?>

    <div id="primary" class="content-area col-md-12">
		<main id="main" class="post-wrap" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'page' ); ?>

            <?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>

<script>
  (function($){
    var cant_artistas_invitados = <?php echo count($artistas_invitados);?>;
    if(cant_artistas_invitados === 1){
      $('#sp-pcp-id-931').addClass('disable_option_1');
    }
    if(cant_artistas_invitados === 2){
      $('#sp-pcp-id-931').addClass('disable_option_2');
    }
    if(cant_artistas_invitados === 3){
      $('#sp-pcp-id-931').addClass('disable_option_3');
    }
  }(jQuery));
</script>
