<?php
/**
 * Title: Por qué elegir Kinesilk (beneficios)
 * Slug: kinesilk_new/why-kinesilk
 * Categories: kinesilk
 * Description: Tres beneficios con icono y texto.
 * Inserter: true
 */
$dir = get_template_directory_uri();
?>
<!-- wp:group {"tagName":"section","className":"kinesilk-section kinesilk-why","gradient":"cream-mint","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group kinesilk-section kinesilk-why has-cream-mint-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"className":"kinesilk-section__head","layout":{"type":"constrained","contentSize":"680px"}} -->
	<div class="wp-block-group kinesilk-section__head">
		<!-- wp:paragraph {"align":"center","className":"kinesilk-eyebrow"} -->
		<p class="has-text-align-center kinesilk-eyebrow">Por qué elegirnos</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","className":"kinesilk-section__title","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center kinesilk-section__title has-xx-large-font-size">Por qué elegir Kinesilk</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","className":"kinesilk-benefits","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide kinesilk-benefits" style="margin-top:var(--wp--preset--spacing--50)">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"kinesilk-benefit","layout":{"type":"constrained"}} -->
			<div class="wp-block-group kinesilk-benefit">
				<!-- wp:image {"width":"56px","className":"kinesilk-benefit__icon"} -->
				<figure class="wp-block-image is-resized kinesilk-benefit__icon"><img src="<?php echo esc_url( $dir ); ?>/assets/images/icon-heart.svg" alt="" style="width:56px"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size">Belleza a tu medida</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"contrast-soft"} -->
				<p class="has-contrast-soft-color has-text-color">Diseñamos cada sesión según las necesidades reales de tu piel. Te acompañamos para lograr resultados efectivos, respetando la salud de tu piel.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"kinesilk-benefit","layout":{"type":"constrained"}} -->
			<div class="wp-block-group kinesilk-benefit">
				<!-- wp:image {"width":"56px","className":"kinesilk-benefit__icon"} -->
				<figure class="wp-block-image is-resized kinesilk-benefit__icon"><img src="<?php echo esc_url( $dir ); ?>/assets/images/icon-tech.svg" alt="" style="width:56px"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size">Tecnología que cuida</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"contrast-soft"} -->
				<p class="has-contrast-soft-color has-text-color">Contamos con equipos de última generación para ofrecerte tratamientos eficaces y seguros. Innovamos constantemente para que disfrutes resultados en menos tiempo.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"kinesilk-benefit","layout":{"type":"constrained"}} -->
			<div class="wp-block-group kinesilk-benefit">
				<!-- wp:image {"width":"56px","className":"kinesilk-benefit__icon"} -->
				<figure class="wp-block-image is-resized kinesilk-benefit__icon"><img src="<?php echo esc_url( $dir ); ?>/assets/images/icon-shield.svg" alt="" style="width:56px"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size">Cuidado que inspira confianza</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"contrast-soft"} -->
				<p class="has-contrast-soft-color has-text-color">Nuestro equipo combina experiencia, tecnología y un toque humano para ofrecerte resultados visibles y una experiencia relajante en cada visita.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
