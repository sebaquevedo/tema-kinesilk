# Kinesilk — Tema WordPress FSE

Tema propio de Kinesilk (centro de estética, depilación láser, despigmentación y
eliminación de tatuajes en Punta Arenas). Construido con la arquitectura oficial
de **Full Site Editing (FSE)** de WordPress. 100 % bloques nativos: sin
constructores visuales, sin HTML inventado, sin dependencias externas.

## Requisitos
- WordPress 6.6 o superior (probado en 7.0).
- PHP 7.4 o superior.
- Plugins del sitio que el tema aprovecha (no los incluye, ya están instalados):
  - WooCommerce (grillas de productos vía shortcodes nativos).
  - `widgets-for-google-reviews-and-ratings` (reseñas de Google — `[repocean_reviews]`).
  - `creame-whatsapp-me` (botón flotante de WhatsApp).
  - `smart-slider-3` / `custom-woo-pro-carousel` (opcionales, si se quiere un carrusel real).

## Estructura
```
kinesilk_new/
├─ style.css              Cabecera del tema (sin reglas CSS).
├─ theme.json             Paleta, tipografía fluida, espaciado, sombras, estilos globales.
├─ functions.php          Encola styles.css, soportes del tema, categoría de patrones.
├─ assets/
│  ├─ css/styles.css       TODO el CSS personalizado, organizado por secciones.
│  └─ images/              Íconos y placeholders SVG (reemplazables).
├─ templates/             Plantillas FSE (front-page, page, single, archive, 404, ...).
├─ parts/                 Cabecera y pie de página.
└─ patterns/              Secciones de la landing como patrones editables.
```

## Dónde editar cada cosa
- **Diseño general (colores, tipografía, espaciado):** `theme.json`.
- **Estilos de componentes (tarjetas, accordion, hero, botones):** `assets/css/styles.css`.
- **Secciones de la landing (textos, imágenes, botones):** `patterns/*.php`
  o directamente desde el editor (Apariencia → Editor), buscando los patrones
  de la categoría **Kinesilk**.
- **Número de WhatsApp:** buscar y reemplazar `56900000000` en los archivos
  `parts/*.html` y `patterns/*.php` (o editarlo desde el editor).
- **Imágenes:** reemplazar los archivos de `assets/images/` o cambiar la imagen
  desde cada bloque en el editor.

## Secciones de la landing (orden)
Hero · Tratamientos · Packs y Tratamientos Destacados · El momento de cuidar tu
piel · Por qué elegir Kinesilk · Proceso · Lo más buscado · Galería · Nuestra
tecnología (fundadora) · Testimonios (Google) · Preguntas frecuentes · CTA final
· CTA flotante.

## Activación en LocalWP
1. Copiar la carpeta `kinesilk_new/` a `wp-content/themes/`.
2. WordPress → **Apariencia → Temas → Activar "Kinesilk"**.
3. Ajustes → Lectura: la portada usa automáticamente `front-page.html`.

## Empaquetar para subir a WordPress (.zip)
Comprimir la carpeta `kinesilk_new/` (que la carpeta quede como raíz del zip) y
subir en **Apariencia → Temas → Añadir nuevo → Subir tema**.

## Accesibilidad y rendimiento
- HTML semántico (`header`, `main`, `section`, `footer`), foco visible,
  `prefers-reduced-motion`, `alt` descriptivos en fotos e `alt=""` en íconos
  decorativos.
- Sin JavaScript propio, sin fuentes externas: carga mínima.
