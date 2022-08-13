<?php get_header(); ?>

<main class="container">
	<?php if(have_posts()) {
		while (have_posts()) {
			the_post(); ?>
			<h1 class="mt-4 mb-3"><?php the_title(); ?></h1>
			<div class="row mb-5">
				<div class="col-12 col-md-5 col-lg-4 text-center single__image">
					<?php the_post_thumbnail('medium'); ?>
				</div>
				<div class="col-12 col-md-7 col-lg-8 single__description">
					<?php the_excerpt(); ?>
					<p class="text-center"><strong>Fecha de publicación: </strong><?php echo get_the_date('l jS \of F Y');?></p>
				</div>
			</div>
		<?php }
	}?>
	<hr>
	<div class="row mt-5 mb-3">
		<?php if(have_posts()) {
			while (have_posts()) {
				the_post(); ?>
				<div class="row my-4">
					<?php the_content(); ?>
				</div>
				<?php get_template_part('template-parts/post', 'navigation'); ?>
			<?php }
		}?>
	</div>

</main>

<?php get_footer(); ?>
