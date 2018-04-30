<?php
/**
 * Template name: Liste product template
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php

			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
			$args = array(
				"post_type" => "produit",
				"post_per_page" => 3
			);

			$loop = new WP_Query($args);

			if($loop->have_posts()):
				/* Start the Loop */
				while ( $loop->have_posts() ) : $loop->the_post();

					get_template_part( 'template-parts/post/content', 'archive' );

				endwhile; // End of the loop.
			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
