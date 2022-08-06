<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>

<header class="header">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark header__navbar">
		<div class="container align-items-center">
			<img src="<?php echo get_template_directory_uri()?>/assets/img/logo-header2.png" alt="logo">
			<div class="d-flex pe-3 container__header">
				<div id="toggle-menu" class="toggle-menu">
					<i class="fa-solid fa-bars"></i>
				</div>
					<?php wp_nav_menu(
						array(
							'theme_location' => 'top_menu',
							'menu_class' => 'container__menu__wp-navbar',
							'container_class' => 'container__menu',
						)
					);?>
			</div>
		</div>
	</nav>
</header>
