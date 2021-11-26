<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package biot
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="h1">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<div class="structure-wrapper">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'news' );

			endwhile;?>
			</div>
			<?php
			$args = array(
				'prev_text'    => '«',
				'next_text'    => '»',
			);
			 the_posts_pagination($args);

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
		<?php get_template_part('template-parts/partners');?>
		<?php get_template_part('template-parts/structure');?>
	</main><!-- #main -->

<?php
get_footer();
