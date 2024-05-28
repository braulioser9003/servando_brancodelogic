<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kids-fashion' ); ?></a>

<div class="top-header text-center text-md-left py-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-4 align-self-center">
				<?php if ( get_theme_mod('kids_fashion_header_phone_number') ) : ?>
					<span class="mr-3"><i class="fas fa-phone mr-2"></i><?php echo esc_html( get_theme_mod('kids_fashion_header_phone_number' ) ); ?></span>
				<?php endif; ?>
				<?php if ( get_theme_mod('kids_fashion_header_email_address') ) : ?>
			    		<span><i class="fas fa-envelope mr-2"></i><?php echo esc_html( get_theme_mod('kids_fashion_header_email_address' ) ); ?></span>
				<?php endif; ?>
			</div>			
			<div class="col-lg-2 col-md-4 align-self-center">
				<?php $kids_fashion_settings = get_theme_mod( 'kids_fashion_social_links_settings' ); ?>
				<div class="social-links text-center text-md-right">
					<?php if ( is_array($kids_fashion_settings) || is_object($kids_fashion_settings) ){ ?>
					    	<?php foreach( $kids_fashion_settings as $kids_fashion_setting ) { ?>
						        <a href="<?php echo esc_url( $kids_fashion_setting['link_url'] ); ?>">
						            <i class="<?php echo esc_attr( $kids_fashion_setting['link_text'] ); ?> mr-3"></i>
						        </a>
					    	<?php } ?>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 align-self-center py-4 py-md-0">
				<?php if ( class_exists( 'WooCommerce' ) ) { ?>
				<a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="shop-btn"><?php echo esc_html('Explore Shop','kids-fashion'); ?></a>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<header id="site-navigation" class="header text-center text-md-left">
	<div class="container">
		<div class="row">
		    	<div class="col-lg-3 col-md-12 align-self-center">
		    		<div class="logo text-center text-md-center text-lg-left">
			    		<div class="logo-image mr-3">
				    		<?php echo esc_url( the_custom_logo() ); ?>
				    	</div>
				    <div class="logo-content">
				    	<?php 
				    		if ( get_theme_mod('kids_fashion_display_header_title', true) == true ) :
					      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
					      			echo esc_attr(get_bloginfo('name'));
					      		echo '</a>';
					      	endif;

					      	if ( get_theme_mod('kids_fashion_display_header_text', true) == true ) :
				      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
				      		endif;
					    ?>
					</div>
				</div>
		    </div>
		    <div class="col-lg-7 col-md-10 col-12 align-self-center">
				<?php if(has_nav_menu('main-menu')){ ?>
					<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
						<span aria-hidden="true"><?php esc_html_e( 'Menu', 'kids-fashion' ); ?></span>
					</button>
					<nav id="main-menu" class="close-panal">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'main-menu',
								'container' => 'false'
							));
						?>
						<button class="close-menu my-2 p-2" type="button">
							<span aria-hidden="true"><i class="fa fa-times"></i></span>
						</button>
					</nav>
				<?php }?>
			</div>
			<div class="col-lg-2 col-md-2 col-12 align-self-center">				
                <div class="header-search text-center py-3 py-md-0">
                	<?php if ( get_theme_mod('kids_fashion_search_box_enable', true) == true ) : ?>
                        <a class="open-search-form" href="#search-form"><i class="fa fa-search" aria-hidden="true"></i></a>
                        <div class="search-form"><?php get_search_form();?></div>
                	<?php endif; ?>
                	<?php if ( get_theme_mod('kids_fashion_cart_box_enable', true) == true ) : ?>
                		<?php if ( class_exists( 'woocommerce' ) ) {?>
						<a class="cart-customlocation ml-4 ml-md-2 ml-lg-2" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','kids-fashion' ); ?>"><i class="fas fa-shopping-cart"></i><p class="cart-item-box"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?></p></a>
		        	<?php }?>
		        <?php endif; ?>
                </div>
			</div>
		</div>
	</div>
</header>