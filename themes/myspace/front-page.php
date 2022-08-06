<?php get_header(); ?>
<main>
	<?php get_template_part('template-parts/social','menu');?>
	<div class="container">
		<?php if(have_posts()) {
			while (have_posts()) {
				the_post(); ?>
				<?php the_content(); ?>
			<?php }
		}?>

		<div class="project-list mt-5">
			<div class="col text-center">
				<small style="text-align: center !important;" >Mira algunos de</small>
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
							<div class="col-12 px-4 col-sm-6 col-lg-4 mb-4">
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
		<div class="my-3">
			<div class="col-12 api-blogs__title text-center">
				<small>Te gusta leer?</small>
				<h2>Ultimos blogs</h2>
			</div>
			<div id="resultado-blogs" class="row"></div>
		</div>
	</div>
</main>
<? get_footer(); ?>
