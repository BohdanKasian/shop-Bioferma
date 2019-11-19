<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woo-product-variation-gallery/product-image.php.
 *
 */

defined('ABSPATH') || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if (!function_exists('wc_get_gallery_image_html')) {
    return;
}

global $product;

$columns = apply_filters('woocommerce_product_thumbnails_columns', 4);
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes = apply_filters('woocommerce_single_product_image_gallery_classes', array(
    'woocommerce-product-gallery',
    'woocommerce-product-gallery--' . (has_post_thumbnail() ? 'with-images' : 'without-images'),
    'woocommerce-product-gallery--columns-' . absint($columns),
    'images',
));
?>
<div class="<?php echo esc_attr(implode(' ', array_map('sanitize_html_class', $wrapper_classes))); ?>"
     data-columns="<?php echo esc_attr($columns); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
    <figure class="woocommerce-product-gallery__wrapper">
        <?php
        if (has_post_thumbnail()) {
            $html = wc_get_gallery_image_html($post_thumbnail_id, TRUE);
        } else {
            $html = '<div class="woocommerce-product-gallery__image--placeholder">';
            $html .= sprintf('<img src="%s" alt="%s" class="wp-post-image" />', esc_url(wc_placeholder_img_src()), esc_html__('Awaiting product image', 'woocommerce'));
            $html .= '</div>';
        }

        // echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id );
        echo $html;

        // do_action( 'woocommerce_product_thumbnails' );

        include_once woo_variation_gallery()->template_path('product-thumbnails.php');
        ?>
    </figure>
</div>
