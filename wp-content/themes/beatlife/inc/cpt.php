<?php

function beatlife_register_meta_boxes( $meta_boxes ) {
	$prefix = 'rw_';

	$meta_boxes[] = array(
		'id' => 'anuncio_content',
		'title' => esc_html__( 'Anuncios', 'beatlife' ),
		'post_types' => array('anuncio', 'post' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'anuncio_url',
				'type' => 'url',
				'name' => esc_html__( 'URL', 'beatlife' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'beatlife_register_meta_boxes' );
