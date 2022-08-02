<?php get_header(); ?>
<main>
	<nav class="social-nav shadow">
		<ul class="nav flex-column py-4">
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="https://twitter.com/Nous_Code">
					<img src="<?php echo get_template_directory_uri()?>/assets/img/icons/twitter-nav.png" alt="twitter">
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="https://github.com/NousCode">
					<img src="<?php echo get_template_directory_uri()?>/assets/img/icons/github-nav.png" alt="github">
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="https://www.linkedin.com/in/juan-camilo-salazar-3ab10a114/">
					<img src="<?php echo get_template_directory_uri()?>/assets/img/icons/linkedin-nav.png" alt="linkedin">
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="https://www.facebook.com/juancamilo.salazarganan.1">
					<img src="<?php echo get_template_directory_uri()?>/assets/img/icons/facebook-nav.png" alt="facebook">
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="https://www.instagram.com/nous_code/">
					<img src="<?php echo get_template_directory_uri()?>/assets/img/icons/instagram-nav.png" alt="instagram">
				</a>
			</li>
		</ul>
	</nav>
	<div class="container">
		<?php if(have_posts()) {
			while (have_posts()) {
				the_post(); ?>
				<?php the_content(); ?>
			<?php }
		}?>
	</div>
</main>
<? get_footer(); ?>
