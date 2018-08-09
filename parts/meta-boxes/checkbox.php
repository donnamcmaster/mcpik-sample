<?php
/*
Title: Checkbox Fields
Post Type: post,page
Priority: high
Order: 10
*/

piklist( 'field', array(
	'type' => 'checkbox',
	'field' => 'checkbox',
	'label' => __( 'Checkbox, no default', 'piklist-demo' ),
	'choices' => array(
		'first' => 'First Choice',
		'second' => 'Second Choice',
		'third' => 'Third Choice'
	)
));

piklist( 'field', array(
	'type' => 'checkbox',
	'field' => 'checkbox_default',
	'label' => __( 'Checkbox, defaults to 3rd item', 'piklist-demo' ),
	'value' => 'third',
	'choices' => array(
		'first' => 'First Choice',
		'second' => 'Second Choice',
		'third' => 'Third Choice'
	)
));

