<?php

namespace Rtwpvg\Helpers;

class Functions
{

    public static function generate_inline_style($styles = array()) {

        $generated = array();
        if (!empty($styles)) {
            foreach ($styles as $property => $value) {
                $generated[] = "{$property}: $value";
            }
        }
        return implode('; ', array_unique(apply_filters('rtwpvg_generate_inline_style', $generated)));
    }


    public static function get_gallery_image_html($attachment_id, $main_image = false, $loop_index = 0) {

        $gallery_thumbnail = wc_get_image_size('gallery_thumbnail');
        $thumbnail_size = apply_filters('woocommerce_gallery_thumbnail_size', array($gallery_thumbnail['width'], $gallery_thumbnail['height']));
        $image_size = apply_filters('woocommerce_gallery_image_size', $main_image ? 'woocommerce_single' : $thumbnail_size);
        $full_size = apply_filters('woocommerce_gallery_full_size', apply_filters('woocommerce_product_thumbnails_large_size', 'full'));
        // $thumbnail_src     = wp_get_attachment_image_src( $attachment_id, $thumbnail_size );
        $full_src = wp_get_attachment_image_src($attachment_id, $full_size);
        $default_src = wp_get_attachment_image_src($attachment_id, $image_size);
        $inner_html = wp_get_attachment_image($attachment_id, $image_size, false, array(
            'title' => get_post_field('post_title', $attachment_id),
            'alt' => get_post_field('post_title', $attachment_id),
            'data-caption' => get_post_field('post_excerpt', $attachment_id),
            'data-src' => $full_src[0],
            'data-large_image' => $full_src[0],
            'data-large_image_width' => $full_src[1],
            'data-large_image_height' => $full_src[2],
        ));


        $classes = apply_filters('rtwpvg_image_html_class', array(
            'rtwpvg-gallery-image',
        ), $attachment_id);


        $inner_html = apply_filters('rtwpvg_image_inner_html', $inner_html, $attachment_id);

        // If require thumbnail
        if (!$main_image) {
            $classes = apply_filters('rtwpvg_thumbnail_image_html_class', array(
                'rtwpvg-thumbnail-image',
            ), $attachment_id);

            $inner_html = apply_filters('rtwpvg_thumbnail_image_inner_html', $inner_html, $attachment_id);

        }

        return '<div class="' . esc_attr(implode(' ', array_unique($classes))) . '"><div>' . $inner_html . '</div></div>';
    }


    public static function locate_template($name) {
        // Look within passed path within the theme - this is priority.
        $template = array(
            trailingslashit(rtwpvg()->dirname()) . "$name.php"
        );

        if (!$template_file = locate_template($template)) {
            $template_file = rtwpvg()->get_template_file_path($name);
        }

        return apply_filters('rtwpvg_locate_template', $template_file, $name);
    }

    static function get_template($fileName, $args = null) {

        if (!empty($args) && is_array($args)) {
            extract($args); // @codingStandardsIgnoreLine
        }

        $located = self::locate_template($fileName);


        if (!file_exists($located)) {
            /* translators: %s template */
            self::doing_it_wrong(__FUNCTION__, sprintf(__('%s does not exist.', 'classified-listing'), '<code>' . $located . '</code>'), '1.0');

            return;
        }

        // Allow 3rd party plugin filter template file from their plugin.
        $located = apply_filters('rtwpvg_get_template', $located, $fileName, $args);

        do_action('rtwpvg_before_template_part', $fileName, $located, $args);

        include $located;

        do_action('rtwpvg_after_template_part', $fileName, $located, $args);

    }

    static public function get_template_html($template_name, $args = null) {
        ob_start();
        self::get_template($template_name, $args);

        return ob_get_clean();

    }


    static function doing_it_wrong($function, $message, $version) {
        // @codingStandardsIgnoreStart
        $message .= ' Backtrace: ' . wp_debug_backtrace_summary();

        _doing_it_wrong($function, $message, $version);

    }


    static function get_product_list_html( $products = array() ) {
        $html = null;
        if ( ! empty( $products ) ) {
            $htmlProducts = null;
            foreach ( $products as $product ) {
                $image_url       = isset( $product['image_url'] ) ? $product['image_url'] : null;
                $image_thumb_url = isset( $product['image_thumb_url'] ) ? $product['image_thumb_url'] : null;
                $image_thumb_url = $image_thumb_url ? $image_thumb_url : $image_url;
                $price           = isset( $product['price'] ) ? $product['price'] : null;
                $title           = isset( $product['title'] ) ? $product['title'] : null;
                $url             = isset( $product['url'] ) ? $product['url'] : null;
                $buy_url         = isset( $product['buy_url'] ) ? $product['buy_url'] : null;
                $buy_url         = $buy_url ? $buy_url : $url;
                $doc_url         = isset( $product['doc_url'] ) ? $product['doc_url'] : null;
                $demo_url        = isset( $product['demo_url'] ) ? $product['demo_url'] : null;
                $feature_list = null;
                $info_html       = sprintf( '<div class="rt-product-info">%s%s%s</div>',
                    $title ? sprintf( "<h3 class='rt-product-title'><a href='%s' target='_blank'>%s%s</a></h3>", esc_url( $url ), $title, $price ? " ($" . $price . ")" : null ) : null,
                    $feature_list,
                    $buy_url || $demo_url || $doc_url ?
                        sprintf(
                            '<div class="rt-product-action">%s%s%s</div>',
                            $buy_url ? sprintf( '<a class="rt-buy button button-primary" href="%s" target="_blank">%s</a>', esc_url( $buy_url ), esc_html__( 'Buy', 'woo-product-variation-gallery' ) ) : null,
                            $demo_url ? sprintf( '<a class="rt-demo button" href="%s" target="_blank">%s</a>', esc_url( $demo_url ), esc_html__( 'Demo', 'woo-product-variation-gallery' ) ) : null,
                            $doc_url ? sprintf( '<a class="rt-doc button" href="%s" target="_blank">%s</a>', esc_url( $doc_url ), esc_html__( 'Documentation', 'woo-product-variation-gallery' ) ) : null
                        )
                        : null
                );

                $htmlProducts .= sprintf(
                    '<div class="rt-product">%s%s</div>',
                    $image_thumb_url ? sprintf(
                        '<div class="rt-media"><img src="%s" alt="%s" /></div>',
                        esc_url( $image_thumb_url ),
                        esc_html( $title )
                    ) : null,
                    $info_html
                );

            }

            $html = sprintf( '<div class="rt-product-list">%s</div>', $htmlProducts );

        }

        return $html;
    }

}