<?php
/**
 * Title: Lo más buscado (productos)
 * Slug: kinesilk_new/products-popular
 * Categories: kinesilk
 * Description: Productos más vendidos de WooCommerce (reales).
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"section","className":"kinesilk-section kinesilk-popular","backgroundColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group kinesilk-section kinesilk-popular has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"className":"kinesilk-section__head","layout":{"type":"constrained","contentSize":"680px"}} -->
	<div class="wp-block-group kinesilk-section__head">
		<!-- wp:paragraph {"align":"center","className":"kinesilk-eyebrow"} -->
		<p class="has-text-align-center kinesilk-eyebrow">Favoritos</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","className":"kinesilk-section__title","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center kinesilk-section__title has-xx-large-font-size">Lo más buscado por nuestros clientes</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","textColor":"contrast-soft"} -->
		<p class="has-text-align-center has-contrast-soft-color has-text-color">Los productos y packs más reservados por quienes ya confían en Kinesilk.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"kinesilk-woo","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide kinesilk-woo" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:shortcode -->
		[best_selling_products limit="3" columns="3"]
		<!-- /wp:shortcode -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
