<?php
/*
Title: Staff (sample add-more group field)
Post Type: page,post
Description: Biographies and images for staff and board members.
Priority: high
Order: 40
*/

piklist('field', array(
	'type' => 'group',
	'field' => 'staff_members',
	'label' => 'Staff Members',
	'description' => '',
	'add_more' => true,
	'template' => 'field',
	'columns' => 12,
	'fields' => array(
		array(
			'type' => 'text',
			'field' => 'person_name',
			'label' => 'Name',
			'columns' => 12,
		),
		array(
			'type' => 'text',
			'field' => 'person_title',
			'label' => 'Title (if applicable)',
			'columns' => 12,
		),
		array(
			'type' => 'editor',
			'field' => 'person_bio',
			'label' => __( "Person's Bio" ),
			'description' => __( 'Brief biography'),
			'columns' => 12,
			'options' => array (
				'media_buttons' => false,
				'textarea_rows' => 8,
				'teeny' => false,
				'quicktags' => true,	// enables the Visual and Text tabs on the WYSIWYG editor
			),
		),
		array(
			'type' => 'file',
			'field' => 'person_image',
			'label' => 'Add an image',
			'options' => array(
				'modal_title' => 'Add Image',
				'button' => 'Add',
			),
		),
	),
));
