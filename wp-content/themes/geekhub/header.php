<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Kiril's WebPage</title>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>
	</head> 
	<body <?php body_class(); ?>>
		<div id="header-wrap">
			<div id="header">
				<h1>
				<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
					<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'><span>geekhub</span></a>
				<?php else : ?>
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Geekhub"/><span>geekhub</span></a>
				<?php endif; ?>
				</h1>

				<?php wp_nav_menu(array(
					'theme_location' => 'main_menu',
					'menu_id' => 'nav',
					'container' => false));
				?>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('social-links') ) : endif; ?>
				
				<div class="registration-bg">
					<p class="registration">Реєстрація на другий сезон відкрита!</p>
					<a id="register" href="#">Зареєструватися</a>
				</div>
			</div>
		</div>