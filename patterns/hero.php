<?php
/**
 * Title: Hero · Promo Semana Cyber
 * Slug: kinesilk_new/hero
 * Categories: kinesilk
 * Description: Hero de campaña recreado con bloques nativos + CSS (texto editable). Foto real de sesión láser.
 * Inserter: true
 */
$up   = wp_upload_dir();
$base = esc_url( $up['baseurl'] );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kinesilk-hero kinesilk-promo","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kinesilk-hero kinesilk-promo" style="padding-top:0;padding-bottom:0">

	<!-- wp:paragraph {"className":"kinesilk-promo__marquee","fontSize":"small"} -->
	<p class="kinesilk-promo__marquee has-small-font-size">SEMANA CYBER · SEMANA CYBER · SEMANA CYBER · SEMANA CYBER · SEMANA CYBER · SEMANA CYBER · SEMANA CYBER · SEMANA CYBER</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"kinesilk-promo__row","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center kinesilk-promo__row" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">

		<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%">
			<!-- wp:paragraph {"className":"kinesilk-promo__brand"} -->
			<p class="kinesilk-promo__brand">KINESILK</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"className":"kinesilk-promo__semana"} -->
			<h1 class="wp-block-heading kinesilk-promo__semana">SEMANA</h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"kinesilk-promo__cyber"} -->
			<p class="kinesilk-promo__cyber">CYBER</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"kinesilk-promo__ribbon"} -->
			<p class="kinesilk-promo__ribbon">DESCUENTOS IMPERDIBLES</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"kinesilk-promo__badges","layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group kinesilk-promo__badges">
				<!-- wp:paragraph {"className":"kinesilk-badge kinesilk-badge--pink"} -->
				<p class="kinesilk-badge kinesilk-badge--pink">Hasta <strong>40% OFF</strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"kinesilk-badge kinesilk-badge--yellow"} -->
				<p class="kinesilk-badge kinesilk-badge--yellow"><strong>3</strong> cuotas sin interés</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"kinesilk-badge kinesilk-badge--pink"} -->
				<p class="kinesilk-badge kinesilk-badge--pink">Depilación láser <strong>al mejor precio</strong></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons {"className":"kinesilk-hero__cta","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-buttons kinesilk-hero__cta" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button {"className":"kinesilk-btn kinesilk-btn--promo"} -->
				<div class="wp-block-button kinesilk-btn kinesilk-btn--promo"><a class="wp-block-button__link wp-element-button" href="#promociones">Ver promociones</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline kinesilk-btn kinesilk-btn--promo-ghost"} -->
				<div class="wp-block-button is-style-outline kinesilk-btn kinesilk-btn--promo-ghost"><a class="wp-block-button__link wp-element-button" href="https://wa.me/56900000000?text=Hola%20Kinesilk,%20quiero%20mi%20evaluaci%C3%B3n%20gratuita">Agenda tu evaluación gratuita</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"kinesilk-promo__photo"} -->
			<figure class="wp-block-image size-large kinesilk-promo__photo"><img src="<?php echo $base; ?>/2025/11/P1480409-scaled.jpg" alt="Profesional de Kinesilk realizando una sesión de depilación láser"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:paragraph {"className":"kinesilk-promo__marquee kinesilk-promo__marquee--bottom","fontSize":"small"} -->
	<p class="kinesilk-promo__marquee kinesilk-promo__marquee--bottom has-small-font-size">SEMANA CYBER · SEMANA CYBER · SEMANA CYBER · SEMANA CYBER · SEMANA CYBER · SEMANA CYBER · SEMANA CYBER · SEMANA CYBER</p>
	<!-- /wp:paragraph -->

</section>
<!-- /wp:group -->
