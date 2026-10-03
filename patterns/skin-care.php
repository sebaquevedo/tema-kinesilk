<?php
/**
 * Title: El momento de cuidar tu piel (media + texto)
 * Slug: kinesilk_new/skin-care
 * Categories: kinesilk
 * Description: Sección de dos columnas, imagen a la izquierda y texto a la derecha.
 * Inserter: true
 */
$up   = wp_upload_dir();
$base = esc_url( $up['baseurl'] );
$img  = $base . '/2025/11/P1480395-scaled.jpg';
?>
<!-- wp:group {"tagName":"section","className":"kinesilk-section kinesilk-skincare","backgroundColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group kinesilk-section kinesilk-skincare has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:media-text {"align":"wide","mediaType":"image","mediaWidth":48,"imageFill":true,"className":"kinesilk-mediatext","style":{"border":{"radius":"24px"}}} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-image-fill kinesilk-mediatext" style="border-radius:24px;grid-template-columns:48% auto"><figure class="wp-block-media-text__media" style="background-image:url(<?php echo $img; ?>);background-position:50% 30%"><img src="<?php echo $img; ?>" alt="Sesión de cuidado de la piel con tecnología láser en Kinesilk"/></figure><div class="wp-block-media-text__content">
		<!-- wp:paragraph {"className":"kinesilk-eyebrow"} -->
		<p class="kinesilk-eyebrow">Cuidado profesional</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"className":"kinesilk-section__title","fontSize":"x-large"} -->
		<h2 class="wp-block-heading kinesilk-section__title has-x-large-font-size">El momento de cuidar y renovar tu piel es hoy</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"contrast-soft"} -->
		<p class="has-contrast-soft-color has-text-color">Unimos la precisión de las tecnologías láser y el cuidado profesional para que disfrutes de una piel suave, uniforme, y potenciar su belleza natural. Cada sesión es un espacio dedicado a ti.</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
			<!-- wp:button {"className":"kinesilk-btn kinesilk-btn--primary"} -->
			<div class="wp-block-button kinesilk-btn kinesilk-btn--primary"><a class="wp-block-button__link wp-element-button" href="https://wa.me/56900000000?text=Hola%20Kinesilk,%20quiero%20agendar%20mi%20Evaluaci%C3%B3n%20Personalizada">Agenda tu evaluación personalizada</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div></div>
	<!-- /wp:media-text -->
</section>
<!-- /wp:group -->
