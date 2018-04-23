<?php
/* ---------------------------------------------------------------------------
 * Hook of Top
 * --------------------------------------------------------------------------- */
function redart_hook_top()
{
	if( redart_option( 'pageoptions','enable-top-hook' ) ) :
		echo '<!-- redart_hook_top -->';
			$hook = redart_option('pageoptions','top-hook');
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
				echo ( $hook );
		echo '<!-- redart_hook_top -->';
	endif;	
}
add_action( 'redart_hook_top', 'redart_hook_top' );


/* ---------------------------------------------------------------------------
 * Hook of Content before
 * --------------------------------------------------------------------------- */
function redart_hook_content_before()
{
	if( redart_option( 'pageoptions','enable-content-before-hook' ) ) :
		echo '<!-- redart_hook_content_before -->';
			$hook = redart_option('pageoptions','content-before-hook');
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
				echo ( $hook );
		echo '<!-- redart_hook_content_before -->';
	endif;
}
add_action( 'redart_hook_content_before', 'redart_hook_content_before' );


/* ---------------------------------------------------------------------------
 * Hook of Content after
 * --------------------------------------------------------------------------- */
function redart_hook_content_after()
{
	if( redart_option( 'pageoptions','enable-content-after-hook' ) ) :
		echo '<!-- redart_hook_content_after -->';
			$hook = redart_option('pageoptions','content-after-hook');
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
				echo ( $hook );
		echo '<!-- redart_hook_content_after -->';
	endif;
}
add_action( 'redart_hook_content_after', 'redart_hook_content_after' );


/* ---------------------------------------------------------------------------
 * Hook of Bottom
 * --------------------------------------------------------------------------- */
function redart_hook_bottom()
{
	if( redart_option( 'pageoptions','enable-bottom-hook' ) ) :
		echo '<!-- redart_hook_bottom -->';
			$hook = redart_option('pageoptions','bottom-hook');
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
				echo ( $hook );
		echo '<!-- redart_hook_bottom -->';
	endif;
}
add_action( 'redart_hook_bottom', 'redart_hook_bottom' );?>