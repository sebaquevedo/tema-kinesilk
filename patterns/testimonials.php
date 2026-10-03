<?php
/**
 * Title: Testimonios (Google Reviews)
 * Slug: kinesilk_new/testimonials
 * Categories: kinesilk
 * Description: Sección de reseñas. Usa el shortcode real del sitio (RepoOcean Google Reviews) que ya funciona en la portada.
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"section","className":"kinesilk-section kinesilk-testimonials","backgroundColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group kinesilk-section kinesilk-testimonials has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"className":"kinesilk-section__head","layout":{"type":"constrained","contentSize":"680px"}} -->
	<div class="wp-block-group kinesilk-section__head">
		<!-- wp:paragraph {"align":"center","className":"kinesilk-eyebrow"} -->
		<p class="has-text-align-center kinesilk-eyebrow">Opiniones reales</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","className":"kinesilk-section__title","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center kinesilk-section__title has-xx-large-font-size">Qué dicen nuestros clientes</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","textColor":"contrast-soft"} -->
		<p class="has-text-align-center has-contrast-soft-color has-text-color">Reseñas verificadas desde Google de quienes ya viven la experiencia Kinesilk.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"kinesilk-reviews","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide kinesilk-reviews" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:shortcode -->
		[repocean_reviews layout="slider_v1"]
		<!-- /wp:shortcode -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
