<?php get_header(); ?>

<main class="container">
	<?php if(have_posts()) {
		while (have_posts()) {
			the_post(); ?>
			<h1 class="mt-4 mb-3"><?php the_title(); ?></h1>
			<div class="row mb-5">
				<div class="col-4 text-center single__image">
					<?php the_post_thumbnail('medium'); ?>
				</div>
				<div class="col-8 single__description">
					<?php the_excerpt(); ?>
				</div>
			</div>
			<?php get_template_part('template-parts/post', 'navigation'); ?>
		<?php }
	}?>
</main>

<?php get_footer(); ?>
