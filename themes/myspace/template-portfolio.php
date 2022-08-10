<?php
// Template Name: Portfolio page
get_header();
$fields = get_fields();
?>

<main>
	<?php get_template_part('template-parts/social','menu');?>
	<div class="container portfolio">
		<h1 class="mt-5 mb-3"><?php the_title();?></h1>
		<p class="mb-5"><?php echo $fields['description'] ?></p>

		<div class="row table-content">
			<small data-section="portfolio" data-value="small">I have developed with</small>
			<h2 data-section="portfolio" data-value="table">Technologies such as</h2>
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
					<td><img src="https://img.shields.io/badge/Node.js-339933?style=for-the-badge&logo=nodedotjs&logoColor=white" alt="node"><img src="	https://img.shields.io/badge/nestjs-E0234E?style=for-the-badge&logo=nestjs&logoColor=white" alt="nest"><img src="https://img.shields.io/badge/GraphQl-E10098?style=for-the-badge&logo=graphql&logoColor=white" alt="graphql"></td>
					<td><img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="html"><img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="css"></td>
					<td><img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white" alt="mysql"><img src="https://img.shields.io/badge/PostgreSQL-316192?style=for-the-badge&logo=postgresql&logoColor=white" alt="postgres"></td>
					<td><img src="https://img.shields.io/badge/Heroku-430098?style=for-the-badge&logo=heroku&logoColor=white" alt="heroku"><img src="https://img.shields.io/badge/Digital_Ocean-0080FF?style=for-the-badge&logo=DigitalOcean&logoColor=white" alt="digitalocean"></td>
				</tr>
				<tr>
					<th scope="row"><img src="https://img.shields.io/badge/C%23-239120?style=for-the-badge&logo=c-sharp&logoColor=white" alt="c#"></th>
					<td><img src="https://img.shields.io/badge/.NET-512BD4?style=for-the-badge&logo=dotnet&logoColor=white" alt="net"><img src="https://img.shields.io/badge/Docker-2CA5E0?style=for-the-badge&logo=docker&logoColor=white" alt="docker"></td>
					<td><img src="https://img.shields.io/badge/Sass-CC6699?style=for-the-badge&logo=sass&logoColor=white" alt="sass"></td>
					<td><img src="https://img.shields.io/badge/Microsoft%20SQL%20Server-CC2927?style=for-the-badge&logo=microsoft%20sql%20server&logoColor=white" alt="sqlserver"></td>
				</tr>
			</tbody>
		</table>
		</div>
		<p class="mt-5"><?php echo $fields['details'] ?></p>
		<br>
		<hr class="mb-4">
		<small data-section="portfolio" data-value="small2">All the</small>
		<h2 class="mb-4" data-section="portfolio" data-value="title">Projects</h2>
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
								<div class="col-12 col-sm-6 col-lg-4 px-4 mb-4">
									<div class="card shadow rounded-5 pt-3 ps-3 card-projects">
										<figure class="card-img-top align-self-center"><?php the_post_thumbnail('medium'); ?></figure>
										<h3 class="text-start ps-3 mb-0">
											<a href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
											</a>
										</h3>
										<div class="card-body pt-0">
											<p class="card-text"><?php the_excerpt();?>
											<strong>Fecha: </strong><?php echo get_the_date();?>
											</p>
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
