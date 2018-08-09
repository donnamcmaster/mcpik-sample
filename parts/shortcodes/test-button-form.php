<?php
/*
Name: Button
Description: Insert a linked button
Shortcode: test-button
Icon: dashicons-marker
*/

piklist( 'field', array(
	'type' => 'text',
	'field' => 'title',
	'label' => __( 'Title' ),
));
piklist( 'field', array(
	'type' => 'text',
	'field' => 'link',
	'label' => __( 'Link' ),
	'attributes' => array(
		'class' => 'large-text',
	),
));
piklist( 'field', array(
	'type' => 'text',
	'field' => 'button_class',
	'label' => __( 'CSS class (optional)' ),
));
