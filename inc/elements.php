<?php

/**
 * Adds action to insert share and back buttons on headers
 */
function museupaulista_add_share_and_back_buttons($type) {
    ?>
    <div class="museupaulista-header-elements <?php  echo 'header-hero-type--' . $type; ?>">
        <button class="museupaulista-header-button museupaulista-header-button--back" onclick="event.preventDefault(); window && window.history && window.history ? window.history.back() : null">
            <span class="icon is-medium">
                <i class="dashicons dashicons-arrow-left-alt"></i>
            </span>
        </button>
        <button class="museupaulista-header-button museupaulista-header-button--share" onclick="event.preventDefault(); document.getElementsByClassName('museupaulista-social-icons')[0].classList.toggle('is-list-open');">
            <span class="icon">
                <i class="tainacan-icon tainacan-icon-share"></i>
            </span>
            <div class="museupaulista-social-icons">
                <?php echo blocksy_get_social_share_box([
				    'prefix' => 'single_blog_post'
			    ]); ?>
            </div>
        </button>
    </div>
    <?php
}
add_action('blocksy:hero:before', 'museupaulista_add_share_and_back_buttons');

/**
 * Adds Institution label bellow item Title
 */
function museupaulista_add_institution_info_on_title($single_meta_id, $single_meta, $args) {
    
    if ( defined('TAINACAN_VERSION') && $single_meta_id === 'categories') {
        
        $collections_post_types = \Tainacan\Repositories\Repository::get_collections_db_identifiers();
        $current_post_type = get_post_type();
            
        if (in_array($current_post_type, $collections_post_types)) {
            echo '<span class="institution-info-label">Item integrante de: <span/>';
        }
    }
}
add_action('blocksy:post-meta:render-meta', 'museupaulista_add_institution_info_on_title', 0, 3);

/**
 * Retrieves the current items list source link
 */
function tainacan_get_source_item_list_url() {
	$args = $_GET;
	if (isset($args['ref'])) {
		$ref = $_GET['ref'];
		unset($args['pos']);
		unset($args['ref']);
		unset($args['source_list']);
		return $ref . '?' . http_build_query(array_merge($args));
	} else {
		unset($args['pos']);
		unset($args['ref']);
		unset($args['source_list']);
		return tainacan_get_the_collection_url() . '?' . http_build_query(array_merge($args));
	}
}

/** 
 * Single items also have a link to items list after its content
 */
function museupaulista_add_link_to_items_list() {
    
    if ( is_singular() ) {
        $collections_post_types = \Tainacan\Repositories\Repository::get_collections_db_identifiers();
        $current_post_type = get_post_type();
            
        if (in_array($current_post_type, $collections_post_types)) {
            echo ('<div class="item-navigation-source-link"><a href="' . tainacan_get_source_item_list_url() . '">Voltar para a lista de itens</a></div>');
        }
    }
}
add_action('blocksy:template:after', 'museupaulista_add_link_to_items_list');


/**
 * Allows upload of SVG files
 */
function museupaulista_upload_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	$mimes['svgz'] = 'application/x-gzip';
	return $mimes;
}
add_filter( 'upload_mimes', 'museupaulista_upload_mime_types' );