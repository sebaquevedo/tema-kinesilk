<?php
/**
 * Title: Nuestros tratamientos (tarjetas)
 * Slug: kinesilk_new/treatments
 * Categories: kinesilk
 * Description: Grilla de tarjetas de servicios. Aquí se puede insertar en su lugar un bloque de Smart Slider si se desea el efecto carrusel.
 * Inserter: true
 */
$dir = get_template_directory_uri();
?>
<!-- wp:group {"tagName":"section","className":"kinesilk-section kinesilk-treatments","backgroundColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group kinesilk-section kinesilk-treatments has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"className":"kinesilk-section__head","layout":{"type":"constrained","contentSize":"680px"}} -->
	<div class="wp-block-group kinesilk-section__head">
		<!-- wp:paragraph {"align":"center","className":"kinesilk-eyebrow"} -->
		<p class="has-text-align-center kinesilk-eyebrow">Tratamientos</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","className":"kinesilk-section__title","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center kinesilk-section__title has-xx-large-font-size">Nuestros tratamientos</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","textColor":"contrast-soft"} -->
		<p class="has-text-align-center has-contrast-soft-color has-text-color">Tecnología multiláser con protocolos seguros para cada tipo de piel.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","className":"kinesilk-cards","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide kinesilk-cards" style="margin-top:var(--wp--preset--spacing--50)">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"kinesilk-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group kinesilk-card">
				<!-- wp:image {"width":"64px","className":"kinesilk-card__icon"} -->
				<figure class="wp-block-image is-resized kinesilk-card__icon"><img src="<?php echo esc_url( $dir ); ?>/assets/images/icon-laser.svg" alt="" style="width:64px"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size">Depilación Láser</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"contrast-soft"} -->
				<p class="has-contrast-soft-color has-text-color">Olvídate del vello con tecnología multiláser segura para todo tipo de piel.</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline kinesilk-btn kinesilk-btn--ghost"} -->
				<div class="wp-block-button is-style-outline kinesilk-btn kinesilk-btn--ghost"><a class="wp-block-button__link wp-element-button" href="https://wa.me/56900000000?text=Hola%20Kinesilk,%20quiero%20agendar%20Depilaci%C3%B3n%20L%C3%A1ser">Agendar tu sesión</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"kinesilk-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group kinesilk-card">
				<!-- wp:image {"width":"64px","className":"kinesilk-card__icon"} -->
				<figure class="wp-block-image is-resized kinesilk-card__icon"><img src="<?php echo esc_url( $dir ); ?>/assets/images/icon-spark.svg" alt="" style="width:64px"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size">Aclarado y Despigmentación Láser</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"contrast-soft"} -->
				<p class="has-contrast-soft-color has-text-color">Disminuye manchas en rostro y zonas corporales de forma efectiva.</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline kinesilk-btn kinesilk-btn--ghost"} -->
				<div class="wp-block-button is-style-outline kinesilk-btn kinesilk-btn--ghost"><a class="wp-block-button__link wp-element-button" href="https://wa.me/56900000000?text=Hola%20Kinesilk,%20quiero%20consultar%20por%20Despigmentaci%C3%B3n">Consultar por Despigmentación</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"kinesilk-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group kinesilk-card">
				<!-- wp:image {"width":"64px","className":"kinesilk-card__icon"} -->
				<figure class="wp-block-image is-resized kinesilk-card__icon"><img src="<?php echo esc_url( $dir ); ?>/assets/images/icon-tattoo.svg" alt="" style="width:64px"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size">Eliminación Segura de Tatuajes</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"contrast-soft"} -->
				<p class="has-contrast-soft-color has-text-color">Tecnología de alta precisión para atenuar o remover tinta de tu piel.</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline kinesilk-btn kinesilk-btn--ghost"} -->
				<div class="wp-block-button is-style-outline kinesilk-btn kinesilk-btn--ghost"><a class="wp-block-button__link wp-element-button" href="https://wa.me/56900000000?text=Hola%20Kinesilk,%20quiero%20cotizar%20Eliminaci%C3%B3n%20de%20Tatuaje">Cotizar eliminación</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"kinesilk-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group kinesilk-card">
				<!-- wp:image {"width":"64px","className":"kinesilk-card__icon"} -->
				<figure class="wp-block-image is-resized kinesilk-card__icon"><img src="<?php echo esc_url( $dir ); ?>/assets/images/icon-face.svg" alt="" style="width:64px"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size">Rejuvenecimiento Facial Láser</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"contrast-soft"} -->
				<p class="has-contrast-soft-color has-text-color">Estimula y renueva tu piel para un rostro más luminoso y firme.</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline kinesilk-btn kinesilk-btn--ghost"} -->
				<div class="wp-block-button is-style-outline kinesilk-btn kinesilk-btn--ghost"><a class="wp-block-button__link wp-element-button" href="https://wa.me/56900000000?text=Hola%20Kinesilk,%20quiero%20consultar%20por%20Rejuvenecimiento%20Facial">Consultar por Rejuvenecimiento</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
