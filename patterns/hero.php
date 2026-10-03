<?php
/**
 * Title: Hero
 * Slug: kinesilk_new/hero
 * Categories: kinesilk
 * Description: Portada inmersiva con imagen de fondo, degradado suave, frase principal, subtítulo y CTA.
 * Inserter: true
 */
$dir = get_template_directory_uri();
?>
<!-- wp:cover {"url":"<?php echo esc_url( $dir ); ?>/assets/images/ph-hero.svg","dimRatio":100,"customGradient":"linear-gradient(180deg,rgba(252,249,234,0) 0%,rgba(252,249,234,0.55) 68%,rgba(252,249,234,1) 100%)","isUserOverlayColor":true,"minHeight":88,"minHeightUnit":"vh","contentPosition":"center left","className":"kinesilk-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover kinesilk-hero" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40);min-height:88vh"><span aria-hidden="true" class="wp-block-cover__background has-background-gradient" style="background:linear-gradient(180deg,rgba(252,249,234,0) 0%,rgba(252,249,234,0.55) 68%,rgba(252,249,234,1) 100%)"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $dir ); ?>/assets/images/ph-hero.svg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"className":"kinesilk-hero__panel","layout":{"type":"constrained","contentSize":"620px","justifyContent":"left"}} -->
		<div class="wp-block-group kinesilk-hero__panel">
			<!-- wp:paragraph {"className":"kinesilk-eyebrow"} -->
			<p class="kinesilk-eyebrow">Centro de estética · Punta Arenas</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"className":"kinesilk-hero__title","fontSize":"huge"} -->
			<h1 class="wp-block-heading kinesilk-hero__title has-huge-font-size">Bienestar y tecnología láser al servicio de tu piel</h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"kinesilk-hero__subtitle","fontSize":"large"} -->
			<p class="kinesilk-hero__subtitle has-large-font-size">Depilación Láser · Despigmentación · Eliminación de Tatuajes</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"className":"kinesilk-hero__cta","layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-buttons kinesilk-hero__cta">
				<!-- wp:button {"className":"kinesilk-btn kinesilk-btn--primary"} -->
				<div class="wp-block-button kinesilk-btn kinesilk-btn--primary"><a class="wp-block-button__link wp-element-button" href="#promociones">Ver promociones</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline kinesilk-btn kinesilk-btn--ghost"} -->
				<div class="wp-block-button is-style-outline kinesilk-btn kinesilk-btn--ghost"><a class="wp-block-button__link wp-element-button" href="https://wa.me/56900000000?text=Hola%20Kinesilk,%20quiero%20mi%20evaluaci%C3%B3n%20gratuita">Agenda tu evaluación gratuita</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
