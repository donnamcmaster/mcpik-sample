<?php
/*
Title: Scratchpad (low priority)
Post Type: page,post
Description: internal notes
Priority: low
*/
  
piklist( 'field', array(
	'type' => 'editor',
	'field' => 'scratchpad',
	'label' => __( 'Scratchpad' ),
	'description' => __( 'A place to save internal notes. Not publicly displayed.' ),
	'template' => 'field',
	'columns' => '12',
	'options' => array (
		'media_buttons' => true,
		'textarea_rows' => 8,
		'teeny' => false,
		'quicktags' => true,	// enables the Visual and Text tabs on the WYSIWYG editor
	)
));