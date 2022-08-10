<?php
//Template Name: Contact Me page
get_header(); ?>
<main class="container contact">
<?php if(have_posts()) {
		while (have_posts()) {
			the_post(); ?>
			<h1 class="mt-5 mb-4" data-section="contactInfo" data-value="hero">About me!</h1>
			<div class="row mb-5">
				<div class="col-12 contact__about-me">
					<?php the_content(); ?>
				</div>
			</div>
		<?php } ?>
	<?php }?>

	<small data-section="contactInfo" data-value="small">Write me!</small>
	<h2 class="mt-0" data-section="contactInfo" data-value="title">Contact Info.</h2>
	<div class="row contact-info text-center">
			<div class="col-12 col-sm-4 contact-info__email">
				<img src="<?php echo get_template_directory_uri()?>/assets/img/icons/email.png" alt="email">
				<small>nouscode@outlook.com</small>
			</div>
			<div class="col-12 col-sm-4 contact-info__calendly">
				<div class="d-sm-flex mt-3">
					<img class="d-none d-sm-block" src="<?php echo get_template_directory_uri()?>/assets/img/icons/schedule.png" alt="calendar">
					<div>
						<h3 class="text-start ps-4 mt-5 mt-md-0">Calendly</h3>
						<small>calendly.com/nouscode</small>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-4 mt-5 mt-md-0">
				<h3 data-section="contactInfo" data-value="download">Download my</h3>
				<ul class="cv__download-bt">
					<li><a class="btn btn-outline-success rounded-5 my-4" href="<?php echo home_url();?>">
						CV 🇪🇦
					</a></li>
					<li><a class="btn btn-outline-success rounded-5" href="<?php echo home_url();?>">
						CV 🇬🇧
					</a></li>
				</ul>
			</div>
	</div>

	<small data-section="socialMedia" data-value="small">Find me there</small>
	<h2 class="mt-0 mb-5" data-section="socialMedia" data-value="social">Social Media</h2>
	<div class="row text-center mb-5">
			<div class="col-6 col-md-3 contact__social-media">
				<img src="<?php echo get_template_directory_uri()?>/assets/img/icons/twitter-contact.png" alt="twitter">
				<p><a href="https://twitter.com/Nous_Code">Twitter</a></p>
			</div>
			<div class="col-6 col-md-3 contact__social-media">
				<img src="<?php echo get_template_directory_uri()?>/assets/img/icons/linkedin-contact.png" alt="linkedin">
				<p><a href="https://www.linkedin.com/in/juan-camilo-salazar-3ab10a114/">LinkedIn</a></p>
			</div>
			<div class="col-6 col-md-3 contact__social-media">
				<img src="<?php echo get_template_directory_uri()?>/assets/img/icons/facebook-contact.png" alt="facebook">
				<p><a href="https://www.facebook.com/juancamilo.salazarganan.1">Facebook</a></p>
			</div>
			<div class="col-6 col-md-3 contact__social-media">
				<img src="<?php echo get_template_directory_uri()?>/assets/img/icons/github-contact.png" alt="github">
				<p><a href="https://github.com/NousCode">GitHub</a></p>
			</div>
	</div>

</main>
<?php get_footer(); ?>
