<?php
/*  
Title: Test WYSIWYG Editor
Class: 
Width: 720
*/

	echo $before_widget;
	if ( McPik_Utils::first_leaf( $settings['show_title'] ) && !empty( $settings['title'] ) ) {
		echo $before_title;
		echo wptexturize( $settings['title'] );
		echo $after_title;
	}
	if ( !empty( $settings['content'] ) ) {
		echo wptexturize( wpautop( $settings['content'] ) );
	}
	echo $after_widget;
?>
