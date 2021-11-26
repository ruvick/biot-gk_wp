<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package biot
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Страница не найдена', 'biot' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<a href="<?php echo home_url('/');?>" class="button">Вернуться на главную</a>


					<?php
					/* translators: %1$s: smiley */
					// $biot_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'biot' ), convert_smilies( ':)' ) ) . '</p>';
					// the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$biot_archive_content" );

					// the_widget( 'WP_Widget_Tag_Cloud' );
					?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->
		</div>
		<?php get_template_part('template-parts/partners');?>
		<?php get_template_part('template-parts/structure');?>
	</main><!-- #main -->

<?php
get_footer();
