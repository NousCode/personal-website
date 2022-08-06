<?php
//Template Name: Blog page
get_header(); ?>
<main>
	<?php get_template_part('template-parts/social','menu');?>

	<div class="container blog">
		<h1 class="my-4"><?php the_title();?></h1>
		<?php if(have_posts()) {
			while(have_posts()) {
				the_post(); ?>
				<?php the_content(); ?>
			<?php }
		}?>
		<div class="mt-5">
			<small>Escribo en estas</small>
			<h2>Categorias</h2>
		</div>
		<div class="blog__grid my-4">
			<div class="item-1">
				<img src="<?php echo get_template_directory_uri()?>/assets/img/sharma-blog.jpg" alt="sharma">
				<div class="overlay">
					<h3>Mente (Academico)</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
			<div class="item-2">
				<img src="<?php echo get_template_directory_uri()?>/assets/img/basket-blog.jpg" alt="basket">
				<div class="overlay">
					<h3>Mente (Academico)</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
			<div class="item-3">
				<img src="<?php echo get_template_directory_uri()?>/assets/img/peace-blog.jpg" alt="meditation">
				<div class="overlay">
					<h3>Mente (Academico)</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
			<div class="item-4">
				<img src="<?php echo get_template_directory_uri()?>/assets/img/travel-blog.jpg" alt="travel">
				<div class="overlay">
					<h3>Mente (Academico)</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
		</div>
		<hr>
		<div class="my-4 col-12">
			<small>Mira estos</small>
			<h2>Artículos</h2>
		</div>
		<div id="all-blogs" class="row mb-5"></div>
	</div>
</main>
<?php get_footer(); ?>
