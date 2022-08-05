<?php get_header(); ?>
<main>
	<nav class="social-nav shadow fixed-top">
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

		<div class="project-list">
			<div class="col text-center">
				<small class="text-uppercase" style="text-align: center !important;" >Mira algunos de</small>
				<h2 class="text-center mb-5">Mis Proyectos</h2>
			</div>
			<div class="row">
				<?php
					$args = array(
						'post_type' => 'project',
						'post_per_page' => 6,
						'order' => 'DESC',
						'orderby' => 'date'
					);
					$projects = new WP_Query($args);
					if ($projects->have_posts()){
						while($projects->have_posts()){
							$projects->the_post(); ?>
							<div class="col-4 px-4">
								<div class="card card-projects shadow rounded-5 pt-3 ps-3">
									<figure class="card-img-top align-self-center"><?php the_post_thumbnail('medium'); ?></figure>
									<h3 class="text-start ps-3 mb-0">
										<a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h3>
									<div class="card-body pt-0">
										<p class="card-text text-center"><?php the_excerpt(); ?></p>
									</div>
								</div>
							</div>
						<?php }
					}
				?>
			</div>
		</div>
		<div class="row my-5">
			<div class="col-12 api-blogs__title text-center">
				<small>Te gusta leer?</small>
				<h2>Ultimos blogs</h2>
			</div>
			<div id="resultado-blogs" class="row"></div>
		</div>
	</div>
</main>
<? get_footer(); ?>
