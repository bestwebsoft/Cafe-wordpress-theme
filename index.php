<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link       http://codex.wordpress.org/Template_Hierarchy
 *
 * @subpackage Cafe
 * @since      Cafe 1.0
 */
get_header(); ?>
	<div class="cafe-main">
		<?php if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				get_template_part( 'content', get_post_format() );
			endwhile;
			do_action( 'cafe_page_navigation' );
		else :
			get_template_part( 'content', 'none' );
		endif; ?>
	</div> <!-- END OF div.cafe-main -->
<?php get_sidebar();
get_footer();
