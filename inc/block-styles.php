<?php

/**
 * Block Styles
 */
if ( function_exists('register_block_style') ) {
    /**
     * Register block styles.
     *
     * @since 1.0.0
     *
     * @return void
     */
    function museupaulista_block_styles() {

        register_block_style(
            'core/image',
            array(
                'name'  => 'museupaulista-item-image',
                'label' =>  __('Imagem de Item Museu Paulista', 'museupaulista'),
                'isDefault' => false,
            )
        );

        register_block_style(
            'core/heading',
            array(
                'name'  => 'museupaulista-text-shadow',
                'label' =>  __('Texto com Sombra Museu Paulista', 'museupaulista'),
                'isDefault' => false,
            )
        );


        register_block_style(
            'core/paragraph',
            array(
                'name'  => 'museupaulista-title-font',
                'label' =>  __('Fonte de título Museu Paulista', 'museupaulista'),
                'isDefault' => false,
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'museupaulista-background-to-left',
                'label' =>  __('Expandido para esquerda Museu Paulista', 'museupaulista'),
                'isDefault' => true,
            )
        );

        register_block_style(
            'tainacan/carousel-terms-list',
            array(
                'name'  => 'museupaulista-rounded',
                'label' =>  __('Arredondado Museu Paulista', 'museupaulista'),
                'isDefault' => false,
            )
        );

    }
    add_action('init', 'museupaulista_block_styles');
}