<?php get_header(); ?>

<main class="container">
	<?php if(have_posts()) {
		while (have_posts()) {
			the_post(); ?>
			<h1 class="my-3"><?php the_title(); ?></h1>
			<div class="row mb-5">
				<div class="col-4">
					<?php the_post_thumbnail('medium'); ?>
				</div>
				<div class="col-8">
					<?php the_excerpt(); ?>
				</div>
			</div>
		<?php }
	}?>
</main>

<?php get_footer(); ?>
