<?php
/**
 * Title: Galería
 * Slug: kinesilk_new/gallery
 * Categories: kinesilk
 * Description: Galería de imágenes con texto alternativo orientado a SEO local.
 * Inserter: true
 */
$dir = get_template_directory_uri();
$g   = esc_url( $dir ) . '/assets/images/ph-square.svg';
?>
<!-- wp:group {"tagName":"section","className":"kinesilk-section kinesilk-gallery-section","backgroundColor":"white","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group kinesilk-section kinesilk-gallery-section has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"className":"kinesilk-section__head","layout":{"type":"constrained","contentSize":"680px"}} -->
	<div class="wp-block-group kinesilk-section__head">
		<!-- wp:paragraph {"align":"center","className":"kinesilk-eyebrow"} -->
		<p class="has-text-align-center kinesilk-eyebrow">Nuestro trabajo</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","className":"kinesilk-section__title","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center kinesilk-section__title has-xx-large-font-size">Resultados que hablan por tu piel</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","textColor":"contrast-soft"} -->
		<p class="has-text-align-center has-contrast-soft-color has-text-color">Depilación láser, despigmentación, cuidado de la piel y remoción de tatuajes en nuestro centro de Punta Arenas.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:gallery {"columns":3,"imageCrop":true,"linkTo":"none","align":"wide","className":"kinesilk-gallery","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<figure class="wp-block-gallery has-nested-images columns-3 is-cropped alignwide kinesilk-gallery" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo $g; ?>" alt="Sesión de depilación láser en centro de estética de Punta Arenas"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo $g; ?>" alt="Tratamiento de despigmentación láser facial para manchas en la piel"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo $g; ?>" alt="Procedimiento de eliminación y remoción de tatuajes con láser"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo $g; ?>" alt="Rejuvenecimiento facial y cuidado de la piel con tecnología láser"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo $g; ?>" alt="Depilación láser íntima y corporal segura para todo tipo de piel"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo $g; ?>" alt="Espacio de bienestar y cuidado de la piel del centro Kinesilk"/></figure>
		<!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->
</section>
<!-- /wp:group -->
