<?php
/**
 * The sidebar containing the main widget area
 *
 * Displays on posts and pages.
 *
 * If no active widgets are in this sidebar, displays "Search", "Recent Posts" and "Recent Comments".
 *
 * @subpackage Cafe
 * @since      Cafe 1.0
 */ ?>
<div class="cafe-sidebar">
	<div class="cafe-sidebar-widget-area">
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) :
			dynamic_sidebar( 'sidebar-1' );
		else :
			$args = array(
				'before_widget' => '<aside class="widget %s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h4 class="widget-title">',
				'after_title'   => '</h4>',
			);
			$instance = array();
			the_widget( 'WP_Widget_Search', $instance, $args );
			the_widget( 'WP_Widget_Recent_Posts', $instance, $args );
			the_widget( 'WP_Widget_Recent_Comments', $instance, $args );
		endif; /* end sidebar widget area */ ?>
	</div> <!-- END of .cafe-sidebar-widget-area -->
</div> <!-- END of div.cafe-sidebar -->
