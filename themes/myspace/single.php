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
				</div>
			</div>
		<?php }
	}?>
	<hr>
	<div class="row mt-5 mb-3">
		<?php if(have_posts()) {
			while(have_posts()) {
				the_post(); ?>
				<?php the_content(); ?>
			<?php }
		}?>
	</div>
	<hr>
	<div class="row my-5 text-center text-md-start	">
		<div class="col-12 col-md-6">
			<h3>Le ha gustado...</h3>
			<p>Vuelva a la sección de blogs, <strong>habrá más contenido</strong> disfrutable.</p>
		</div>
		<div class="col-12 col-md-6 mt-3 text-center container-seemore">
			<a class="btn btn-outline-success rounded-5" href="<?php echo home_url()."/blog";?>">Blogs 📰</a>
		</div>
	</div>
</main>

<?php get_footer(); ?>
