<?php get_header() ?>

	<main class="container-fluid row flex-grow-1" style="padding-top:40px;">
<?php get_sidebar(); ?>

		<section class="col-12 col-sm-10 p-3"><!-- right pane -->

<?php if ( have_posts() ) : ?>
			<div class="list-group" >
<?php while ( have_posts() ) :
    the_post();
?>
				<a href="<?php the_permalink(); ?>" class="list-group-item list-group-item-action"><?php the_title(); ?></a>
<?php endwhile; ?>
			</div>
<?php endif; ?>

		</section><!-- end of right pane -->
	</main>

<?php get_footer(); ?>

