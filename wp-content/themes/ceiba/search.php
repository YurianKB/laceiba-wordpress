<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<section id="primary" class="content-area container-fluid wrap-general bg-light text-secondary">
		<main id="main" class="site-main row" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header col-md-12">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->
			<div class="col-md-9">
				<div class="row">
						<?php
						// Start the loop.
						while ( have_posts() ) : the_post(); ?>

							<?php
							/*
							* Run the loop for the search to output the results.
							* If you want to overload this in a child theme then include a file
							* called content-search.php and that will be used instead.
							*/
							 get_template_part( 'template-parts/content', 'blog' );

						// End the loop.
						endwhile;

						// Previous/next page navigation.
						the_posts_pagination( array(
							'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
							'next_text'          => __( 'Next page', 'twentyfifteen' ),
							'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
						) );

						// If no content, include the "No posts found" template.
						else :
							get_template_part( 'content', 'none' );

						endif;
						?>
				</div>
			</div>
			
			<div class="col-md-3 widgets">
				<?php get_sidebar('blog'); ?>
			</div>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php get_footer(); ?>
