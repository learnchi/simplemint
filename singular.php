<?php get_header() ?>
	<main class="container-fluid row flex-grow-1" style="padding-top:40px;">
<?php get_sidebar(); ?>
		<section class="col-12 col-sm-10 p-3"><!-- right pane -->

			<div class="tab-content" id="indexTabContent">
<?php while ( have_posts() ) :
        the_post();
?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<?php // comment ?>

<?php endwhile;?>
			</div><!-- end of tab-content -->
		</section><!-- end of right pane -->
	</main>
<?php get_footer(); ?>