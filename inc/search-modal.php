<?php


/**
 * Updates search modal with a list of facets
 */
function museupaulista_add_facets_to_search_modal($form, $args) {
    $museupaulista_collections_ids = [];
    
    if ( $args && isset($args['ct_post_type']) ) {
        foreach( $args['ct_post_type'] as $post_type ) {
            if ( substr( $post_type, 0, 7 ) === "tnc_col" ) {
                $museupaulista_collection_id = str_replace('tnc_col_', '', $post_type);
                $museupaulista_collection_id = str_replace('_item', '', $museupaulista_collection_id);
                $museupaulista_collections_ids[] = $museupaulista_collection_id;
            }
        };
    }

    if ( !count($museupaulista_collections_ids) )
        return;
    
    $modal_metadata = [];

    $metadatum_repository = \tainacan_metadata();
    $args = [
        'meta_query' => [
            [
                'key'     => 'metadata_type',
                'value'   => 'Tainacan\Metadata_Types\Taxonomy'
            ]
        ]
    ];
    $metadata = $metadatum_repository->fetch( $args );
    $metadata = array_filter($metadata, function($metadatum) {
        return in_array(
            $metadatum->get_ID(),
            [
                23, // Denominação
                226,// Descritor
                37, // Autoria
                30, // Autoria Atribuída
                85  // Coleção
            ]
        );
    });

    foreach($metadata as $metadatum) {
        $modal_metadata[] = $metadatum;
    }

    if ( !$modal_metadata || !count($modal_metadata) )
        return;

    ob_start();
    echo $form;
    ?>
        <div class="museupaulista-search-modal-facets-list">
            <div class="museupaulista-search-modal-facets-list__header">
                <?php
                foreach($modal_metadata as $metadatum) {
                    $args = [
                        'number' => 12,
                        'count_items' => true
                    ];
                    $facets = $metadatum_repository->fetch_all_metadatum_values( $metadatum->get_ID(), $args );
                    
                    if ( $facets && isset($facets['values']) && count($facets['values']) ) : ?>
                        
                        <details>
                            <summary class="metadatum-name">
                                <?php echo $metadatum->get_name() ?>
                                <svg width="8" height="8" viewBox="0 0 15 15"><path d="M2.1,3.2l5.4,5.4l5.4-5.4L15,4.3l-7.5,7.5L0,4.3L2.1,3.2z"></path></svg>
                            </summary>
                            <div class="ct-container museupaulista-search-modal-facets-list__content">
                                <?php 
                                    foreach($facets['values'] as $facet) :

                                        $term_label = $facet['label'];
                                        $term_total_items = $facet['total_items'];
                                        $term_link = get_term_link((int) $facet['value']);

                                        if ($term_link instanceof \WP_Error)
                                            continue;

                                        ?>
                                        <a href="<?php echo $term_link; ?>">
                                            <span class="facet-label"><?php echo $term_label; ?></span><span class="facet-total-items"><?php echo $term_total_items; ?> items</span>
                                        </a>
                                    <?php endforeach;

                                    if ( isset($facets['total']) && $facets['total'] > 12 ): ?>
                                        <a 
                                                class="facets-view-all-button"
                                                href="<?php echo '/inventario#' . $metadatum->get_slug(); ?>">
                                            <?php printf(
                                                    /* translators: %s: Name of a city */
                                                    __( 'Ver todas as %s facetas.', 'museupaulista' ),
                                                    $facets['total']
                                                );
                                            ?>
                                        </a>
                                    <?php endif;
                                ?>
                            </div>
                        </details>
                    
                    <?php endif; ?>
                <?php } ?>
            </div>
        </div>

    <?php
    return ob_get_clean();
}
add_filter( 'get_search_form', 'museupaulista_add_facets_to_search_modal', 0, 2);