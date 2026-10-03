<?php
/**
 * Title: Packs y Tratamientos Destacados
 * Slug: kinesilk_new/featured-packs
 * Categories: kinesilk
 * Description: Productos destacados de WooCommerce (reales). Ancla #promociones para el CTA del hero.
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"section","className":"kinesilk-section kinesilk-packs","backgroundColor":"white","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"},"anchor":"promociones"} -->
<section class="wp-block-group kinesilk-section kinesilk-packs has-white-background-color has-background" id="promociones" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"className":"kinesilk-section__head","layout":{"type":"constrained","contentSize":"680px"}} -->
	<div class="wp-block-group kinesilk-section__head">
		<!-- wp:paragraph {"align":"center","className":"kinesilk-eyebrow"} -->
		<p class="has-text-align-center kinesilk-eyebrow">Promociones</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","className":"kinesilk-section__title","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center kinesilk-section__title has-xx-large-font-size">Packs y Tratamientos Destacados</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","textColor":"contrast-soft"} -->
		<p class="has-text-align-center has-contrast-soft-color has-text-color">Nuestros planes más elegidos, pensados para que cuides tu piel con la mejor tecnología.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"kinesilk-woo","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide kinesilk-woo" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:shortcode -->
		[featured_products limit="3" columns="3" orderby="date" order="DESC"]
		<!-- /wp:shortcode -->
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:button {"className":"kinesilk-btn kinesilk-btn--primary"} -->
		<div class="wp-block-button kinesilk-btn kinesilk-btn--primary"><a class="wp-block-button__link wp-element-button" href="/tienda/">Ver todas las promociones</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
