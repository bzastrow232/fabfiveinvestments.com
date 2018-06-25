<?php
/** Redirect to home page **/
//header("HTTPS/1.1 301 Moved Permanently");
//header("Location: ".get_bloginfo('url'));
//exit();
?>


<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Wp
 * @since Fab 5 Investments 1.0
 */

get_header(); ?>

   <div class = "row">
	<div id="primary" class="content-area col-md-8">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( '404 Not Found', 'Fab 5 Investmnets' ); ?></h1>
			</header>

			<div class="page-wrapper">
				<div class="page-content">
					<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'Fab 5 Investments' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'Fab 5 Investments' ); ?></p>

					<?php //get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>