<?php
/*
Shortcode: test-button
*/

$button_class = isset( $button_class ) && $button_class ? esc_html( $button_class ) : 'btn-default';
?>

<style>
.btn-default {
	background-color: green;
	color: white;
	display: inline-block;
	padding: 8px 12px;
	border-radius: 4px;
}
.btn-default:hover, 
.btn-default:focus {
	background-color: blue;
	color: white;
}
</style>
<a class="<?php echo $button_class; ?>" href="<?php echo esc_url( $link );?>"><?php echo esc_html( $title );?></a>