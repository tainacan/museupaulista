<?php

/**
 * Registers the curadorias post type.
 */
function museupaulista_curadoria_post_type_init() {

    // Registers curadoria post type 
    $args = array(
        'labels'             => array(
            'name'                  => _x( 'Curadorias', 'Post type general name', 'museupaulista' ),
            'singular_name'         => _x( 'Curadoria', 'Post type singular name', 'museupaulista' ),
            'menu_name'             => _x( 'Curadorias', 'Admin Menu text', 'museupaulista' ),
            'name_admin_bar'        => _x( 'Curadoria', 'Add New on Toolbar', 'museupaulista' ),
            'add_new'               => __( 'Adicionar Nova', 'museupaulista' ),
            'add_new_item'          => __( 'Adicionar Nova Curadoria', 'museupaulista' ),
            'new_item'              => __( 'Nova Curadoria', 'museupaulista' ),
            'edit_item'             => __( 'Editar Curadoria', 'museupaulista' ),
            'view_item'             => __( 'Ver Curadoria', 'museupaulista' ),
            'all_items'             => __( 'Todas as Curadorias', 'museupaulista' ),
            'search_items'          => __( 'Pesquisar Curadorias', 'museupaulista' ),
            'parent_item_colon'     => __( 'Curadorias pais:', 'museupaulista' ),
            'not_found'             => __( 'Nenhuma Curadoria encontrada.', 'museupaulista' ),
            'not_found_in_trash'    => __( 'Nenhuma Curadoria encontrada na lixeira.', 'museupaulista' ),
            'featured_image'        => _x( 'Imagem de capa da Curadoria', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'museupaulista' ),
            'set_featured_image'    => _x( 'Configurar imagem de capa', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'museupaulista' ),
            'remove_featured_image' => _x( 'Remover imagem de capa', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'museupaulista' ),
            'use_featured_image'    => _x( 'Usar como imagem de capa', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'museupaulista' ),
            'archives'              => _x( 'Lista de Curadorias', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'museupaulista' ),
            'insert_into_item'      => _x( 'Inserir na Curadoria', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'museupaulista' ),
            'uploaded_to_this_item' => _x( 'Enviado para esta Curadoria', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'museupaulista' ),
            'filter_items_list'     => _x( 'Filtrar lista de Curadorias', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'museupaulista' ),
            'items_list_navigation' => _x( 'Navegação da lista de Curadorias', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'museupaulista' ),
            'items_list'            => _x( 'Lista de Curadorias', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'museupaulista' ),
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'curadorias' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'show_in_rest'       => true,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-awards',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'template'           => [
            [
                'core/columns',
                [],
                [
                    [
                        'core/column',
                        [],
                        [
                            [
                                'core/heading',
                                [
                                    'placeholder' => __('"Subtítulo" da Curadoria...', 'museupaulista')
                                ]
                            ],
                            [
                                'core/paragraph',
                                [
                                    'placeholder' => __('Digite aqui uma descrição da Curadoria...', 'museupaulista'),
                                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
                                ]
                            ]
                        ]
                    ],
                    [
                        'core/column',
                        [],
                        [
                            [
                                'core/embed',
                                [
                                    'providerNameSlug' => 'youtube',
                                    'responsive' => true
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            [
                'tainacan/dynamic-items-list',
                [
                    'align' => 'wide',
                    'layout' => 'mosaic',
                    'mosaicGridColumns' => '2',
                    'mosaicGridRows' => '6',
                    'showName' => false
                ]
            ],
            [
                'core/spacer',
                [
                    'height' => '42px'
                ]
            ],
            [
                'core/heading',
                [
                    'placeholder' => __('Nome da sessão que apresenta o carrosel de termos...', 'museupaulista'),
                    'content' => 'NESTA CURADORIA'
                ]
            ],
            [
                'tainacan/carousel-terms-list',
                [
                    'align' => 'wide',
                    'arrowsStyle' => 'type-2',
                    'showTermThumbnail' => true,
                    'maxTermsPerScreen' => 6
                ]
            ],
            [
                'core/spacer',
                [
                    'height' => '42px'
                ]
            ],
            [
                'core/gallery',
                [
                    'align' => 'wide'
                ],
                [
                    [
                        'core/image',
                        [
                            'sizeSlug' => 'large'
                        ]
                    ],
                    [
                        'core/image',
                        [
                            'sizeSlug' => 'large'
                        ]
                    ],
                    [
                        'core/image',
                        [
                            'sizeSlug' => 'large'
                        ]
                    ]
                ]
            ],
            [
                'core/group',
                [
                    'align' => 'full',
                    'style' => [
                        'spacing' => [
                            'padding' => [
                                'top' => '64px',
                                'bottom' => '64px'
                            ]
                        ]
                    ],
                    'backgroundColor' => 'palette-color-9',
                ],
                [
                    [
                        'core/columns',
                        [
                            'verticalAlignment' => 'center'
                        ],
                        [
                            [
                                'core/column',
                                [
                                    'verticalAlignment' => 'center',
                                    'width' => '50%',
                                    'style' => [
                                        'spacing' => [
                                            'padding' => [
                                                'right' => '64px'
                                            ]
                                        ]
                                    ],
                                ],
                                [
                                    [
                                        'core/heading',
                                        [
                                            'textColor' => 'palette-color-7',
                                            'placeholder' => __('Nome da subseção 1 da curadoria', 'museupaulista')
                                        ]
                                    ],
                                    [
                                        'core/paragraph',
                                        [
                                            'placeholder' => __('Conteúdo da subseção 1 da curadoria...', 'museupaulista'),
                                            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
                                        ]
                                    ],
                                    [
                                        'core/paragraph',
                                        [
                                            'placeholder' => __('Conteúdo da subseção 1 da curadoria...', 'museupaulista'),
                                            'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.'
                                        ]
                                    ],
                                    [
                                        'core/paragraph',
                                        [
                                            'placeholder' => __('Conteúdo da subseção 1 da curadoria...', 'museupaulista'),
                                            'content' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?'
                                        ]
                                    ]
                                ]
                            ],
                            [
                                'core/column',
                                [],
                                [
                                    [
                                        'core/columns',
                                        [
                                            'verticalAlignment' => 'center'
                                        ],
                                        [
                                            [
                                                'core/column',
                                                [
                                                    'isStackedOnMobile' => false
                                                ],
                                                [
                                                    [
                                                        'core/image'
                                                    ]
                                                ]
                                            ],
                                            [
                                                'core/column',
                                                [
                                                    'isStackedOnMobile' => false
                                                ],
                                                [
                                                    [
                                                        'core/image'
                                                    ]
                                                ]
                                            ],
                                            [
                                                'core/column',
                                                [
                                                    'isStackedOnMobile' => false
                                                ],
                                                [
                                                    [
                                                        'core/image'
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ],
                                    [
                                        'core/columns',
                                        [
                                            'verticalAlignment' => 'center'
                                        ],
                                        [
                                            [
                                                'core/column',
                                                [
                                                    'isStackedOnMobile' => false
                                                ],
                                                [
                                                    [
                                                        'core/image'
                                                    ]
                                                ]
                                            ],
                                            [
                                                'core/column',
                                                [
                                                    'isStackedOnMobile' => false
                                                ],
                                                [
                                                    [
                                                        'core/image'
                                                    ]
                                                ]
                                            ],
                                            [
                                                'core/column',
                                                [
                                                    'isStackedOnMobile' => false
                                                ],
                                                [
                                                    [
                                                        'core/image'
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            [
                'core/media-text',
                [
                    'backgroundColor' => 'palette-color-6'
                ],
                [
                    [
                        'core/heading',
                        [
                            'placeholder' => __('Um destaque...', 'museupaulista')
                        ]
                    ],
                    [
                        'core/paragraph',
                        [
                            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'
                        ]
                    ],
                    [
                        'core/buttons',
                        [],
                        [
                            [
                                'core/button',
                                [
                                    'placeholder' => 'Link para o item'
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            [
                'core/group',
                [
                    'align' => 'wide',
                    'style' => [
                        'spacing' => [
                            'padding' => [
                                'top' => '64px',
                                'bottom' => '64px'
                            ]
                        ]
                    ]
                ],
                [
                    [
                        'core/heading',
                        [
                            'placeholder' => __('Nome da subseção 2 da curadoria', 'museupaulista')
                        ]
                    ],
                    [
                        'core/columns',
                        [],
                        [
                            [
                                'core/column',
                                [],
                                [
                                    [
                                        'core/paragraph',
                                        [
                                            'placeholder' => __('Conteúdo da subseção 2 da curadoria...', 'museupaulista'),
                                            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
                                        ]
                                    ]
                                ]
                            ],
                            [
                                'core/column',
                                [],
                                [
                                    [
                                        'core/paragraph',
                                        [
                                            'placeholder' => __('Conteúdo da subseção 2 da curadoria...', 'museupaulista'),
                                            'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.'
                                        ]
                                    ]
                                ]
                            ],
                            [
                                'core/column',
                                [],
                                [
                                    [
                                        'core/image',
                                        []
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            [
                'core/spacer',
                [
                    'height' => '70px'
                ]
            ],
            [
                'core/separator',
                [
                    'align' => 'center',
                    'className' => 'is-style-wide'
                ]
            ],
            [
                'core/columns',
                [
                    'backgroundColor' => 'palette-color-7'
                ],
                [
                    [
                        'core/column',
                        [
                            'width' => '270px'
                        ],
                        [
                            [
                                'core/heading',
                                [
                                    'textAlign' => 'right',
                                    'content' => __( 'Para saber mais', 'museupaulista')
                                ]
                            ]
                        ]
                    ],
                    [
                        'core/column',
                        [],
                        [
                            [
                                'core/group',
                                [],
                                [
                                    [
                                        'core/paragraph',
                                        [
                                            'placeholder' => __( 'Coloque aqui referências bibliográficas usadas para construção dessa curadoria...', 'museupaulista')
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            [
                'core/group',
                [
                    'backgroundColor' => 'palette-color-20'
                ],
                [
                    [
                        'core/paragraph',
                        [
                            'content' => '<strong>' . __( 'curadoria por:', 'museupaulista') . '</strong>',
                            'textcolor' => 'palette-color-22'
                        ],
                    ],
                    [
                        'core/columns',
                        [
                            'style' => [
                                'spacing' => [
                                    'padding' => [
                                        'top' => '0px',
                                        'bottom' => '0px'
                                    ]
                                ]
                            ]
                        ],
                        [
                            [
                                'core/column',
                                [
                                    'width' => '270px'
                                ],
                                [
                                    [
                                        'core/heading',
                                        [
                                            'textAlign' => 'right',
                                            'placeholder' => __( 'Nome e Sobrenome do(a) Autor(a)', 'museupaulista')
                                        ]
                                    ]
                                ]
                            ],
                            [
                                'core/column',
                                [],
                                [
                                    [
                                        'core/paragraph',
                                        [
                                            'placeholder' => __( 'Conteúdo da mini biografia do autor ou autora...', 'museupaulista')
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    );
    register_post_type( 'curadorias', $args );
}
add_action( 'init', 'museupaulista_curadoria_post_type_init' );
