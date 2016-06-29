<?php
function create_book_tax() {
	register_taxonomy(
		'genre',
		'post',
		array(
			'label' => __( 'Genre' ),
			'rewrite' => array( 'slug' => 'genre' ),
			'hierarchical' => true,
		)
	);
}
?>
