<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OnePress
 * Template name: Plugins
 */

get_header(); ?>

	<div id="content" class="site-content">
<?php if(has_post_thumbnail() && $img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', true )):?>
		<div class="page-fullheader">
		 <img src="<?php echo $img[0];?>"/>
		</div>
		<?php endif;?>
		<div id="content-inside" class="container no-sidebar">
		<?php the_title( '<h2 class="fullheader-title">', '</h2>' ); ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content">
								<?php the_content(); ?>
								<?php $args = array(
									'post_type' => 'page',
									'posts_per_page' => 500,
									'post_parent' => get_the_ID()
								);
								$query = new WP_Query( $args );?>
								<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
									<?php 							get_template_part( 'template-parts/content', get_post_format() );
									?>
								<?php endwhile;endif;?>
							</div><!-- .entry-content -->
						</article><!-- #post-## -->
					<?php endwhile; // End of the loop. ?>

		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer('contact'); ?>
