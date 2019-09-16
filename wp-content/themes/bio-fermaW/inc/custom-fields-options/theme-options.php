<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
use Carbon_Fields\Container;
use Carbon_Fields\Field;
Container::make( 'theme_options', 'Theme setings' )
    ->set_icon( 'dashicons-carrot' )
//    ->add_tab( 'Header', array(
//        Field::make( 'image', 'est_header_logo', 'Logo' )
//            ->set_width( 30 ),
//        Field::make( 'text', 'crb_last_name', 'Last Name' )
//            ->set_width( 70 ),
    ->add_tab( 'Footer', array(
        Field::make( 'text', 'bio-ferma-footer-copy', 'Копирайт' )
            ->set_default_value('&copy; 2018 Bioferm.Biotechnology. Все права защищены'),
) );