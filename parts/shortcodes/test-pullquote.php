<?php
/*
Shortcode: test-pullquote
Credit: adapted from Piklist Demos
NOTE: assumes that the data is sanitized, not just entered from external
*/
?>

<blockquote class="pullquote">

<?php
	echo wpautop( wptexturize( $quote ) );
	if ( !empty( $source ) ) {
?>
	<cite><?php echo wptexturize( $source ); ?></cite>
<?php
	}
?>
</blockquote>