<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function cb_widgets_init() {

	register_sidebar( array(
		'name'          => 'CB Home sidebar',
		'id'            => 'cb_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'cb_widgets_init' );
?>