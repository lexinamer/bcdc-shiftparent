<?php
/**
 * The header for our theme
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="header">

		<a href="<?php echo site_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a>

		<i class="opennav fa fa-bars" aria-hidden="true"></i>

		<?php the_title( '<h1>', '</h1>' ); ?>

	</header><!-- #masthead -->

	<nav id="site-navigation" class="main-navigation">
		<i class="closenav fa fa-times" aria-hidden="true"></i>
		<h1>Quick Find</h1>
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
		?>
	</nav><!-- #site-navigation -->

	<div id="content" class="site-content">
