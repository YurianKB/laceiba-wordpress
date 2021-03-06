<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<section id="primary" class="content-area container-fluid wrap-general bg-light text-secondary">
		<main id="main" class="site-main row " role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header col-md-12">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div class="col-md-9">
				<div class="row">

					<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						 get_template_part( 'template-parts/content', 'blog' );

					// End the loop.
					endwhile;

					?>
				</div>
			</div>

			<div class="col-md-3 widgets">
				<?php get_sidebar('blog'); ?>
			</div>

			<?php
			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Página Anterior', 'Ceiba' ),
				'next_text'          => __( 'Página Siguiente', 'Ceiba' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'Ceiba' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php get_footer(); ?>
