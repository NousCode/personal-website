<?php
// Template Name: Portfolio page
get_header();
$fields = get_fields();
?>

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
	<div class="container portfolio">
		<h1 class="mt-4 mb-3"><?php the_title();?></h1>
		<p class="mb-5"><?php echo $fields['description'] ?></p>
		<small>I have developed with</small>
		<h2>Technologies such as</h2>
		<table class="table my-3 portfolio__table">
		<thead>
			<tr>
				<th scope="col">Prog. Languages</th>
				<th scope="col">Back End</th>
				<th scope="col">Front End</th>
				<th scope="col">Data Base</th>
				<th scope="col">Cloud Services</th>
			</tr>
		</thead>
		<tbody class="table-group-divider">
			<tr>
				<th scope="row"><img src="https://img.shields.io/badge/JavaScript-323330?style=for-the-badge&logo=javascript&logoColor=F7DF1E" alt="js"></th>
				<td><img src="https://img.shields.io/badge/Node.js-339933?style=for-the-badge&logo=nodedotjs&logoColor=white" alt="node"><img src="	https://img.shields.io/badge/nestjs-E0234E?style=for-the-badge&logo=nestjs&logoColor=white" alt="nest"><br><img src="https://img.shields.io/badge/Swagger-85EA2D?style=for-the-badge&logo=Swagger&logoColor=white" alt="swagger"><img src="https://img.shields.io/badge/GraphQl-E10098?style=for-the-badge&logo=graphql&logoColor=white" alt="graphql"></td>
				<td><img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="html"><img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="css"></td>
				<td><img src="https://img.shields.io/badge/Prisma-3982CE?style=for-the-badge&logo=Prisma&logoColor=white" alt="prisma"><img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white" alt="mysql"></td>
				<td><img src="https://img.shields.io/badge/Heroku-430098?style=for-the-badge&logo=heroku&logoColor=white" alt="heroku"><img src="https://img.shields.io/badge/Digital_Ocean-0080FF?style=for-the-badge&logo=DigitalOcean&logoColor=white" alt="digitalocean"></td>
			</tr>
			<tr>
				<th scope="row"><img src="https://img.shields.io/badge/C%23-239120?style=for-the-badge&logo=c-sharp&logoColor=white" alt="c#"></th>
				<td><img src="https://img.shields.io/badge/.NET-512BD4?style=for-the-badge&logo=dotnet&logoColor=white" alt="net"><img src="https://img.shields.io/badge/Docker-2CA5E0?style=for-the-badge&logo=docker&logoColor=white" alt="docker"></td>
				<td><img src="https://img.shields.io/badge/Pug-E3C29B?style=for-the-badge&logo=pug&logoColor=black" alt="pug"><img src="https://img.shields.io/badge/Sass-CC6699?style=for-the-badge&logo=sass&logoColor=white" alt="sass"></td>
				<td><img src="https://img.shields.io/badge/Microsoft%20SQL%20Server-CC2927?style=for-the-badge&logo=microsoft%20sql%20server&logoColor=white" alt="sqlserver"></td>
			</tr>
			<tr>
				<th scope="row"><img src="https://img.shields.io/badge/Python-FFD43B?style=for-the-badge&logo=python&logoColor=blue" alt="python"></th>
				<td><img src="https://img.shields.io/badge/fastapi-109989?style=for-the-badge&logo=FASTAPI&logoColor=white" alt="fast"></td>
				<td><img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white" alt="bootstrap"></td>
				<td><img src="https://img.shields.io/badge/PostgreSQL-316192?style=for-the-badge&logo=postgresql&logoColor=white" alt="postgres"></td>

			</tr>
		</tbody>
	</table>
		<p class="mt-5"><?php echo $fields['details'] ?></p>
		<br>
		<hr class="mb-4">
		<small>All the</small>
		<h2 class="mb-4">Projects</h2>
		<div class="row mb-5">
					<?php
						$args = array(
							'post_type' => 'project',
							'post_per_page' => -1,
							'order' => 'ASC',
							'orderby' => 'title'
						);
						$projects = new WP_Query($args);
						if ($projects->have_posts()){
							while($projects->have_posts()){
								$projects->the_post(); ?>
								<div class="col-4 px-4">
									<div class="card shadow rounded-5 pt-3 ps-3">
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
</main>
<?php get_footer(); ?>
