<?php get_header(); ?>
<main class="container">
	<div class="not-found">
		<div class="row">
			<div class="col-12 text-center">
				<img src="<?php echo get_template_directory_uri()?>/assets/img/404-page.png" alt="404">
			</div>
			<div class="row text-center">
				<h2>¡Oops! Actualmente no encontramos esta página</h2>
				<div class="col-4 mx-auto d-grid">
					<a class="btn btn-outline-success rounded-5" href="<?php echo home_url();?>">
						Home 🏠️
					</a>
				</div>
			</div>
		</div>
	</div>
</main>
<?php get_footer();?>
