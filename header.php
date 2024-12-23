<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tailpress
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-obsidian antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header class="sticky top-0 bg-white z-50 border-b">
	<div class="container mx-auto max-w-full xs:max-w-[480px] sm:max-w-[600px] md:max-w-[782px] lg:max-w-[1024px] xl:max-w-[1280px] px-4  py-2">

			<div class="lg:flex lg:justify-between lg:items-center">
				<div class="flex justify-between items-center">
				<div class="w-[100px] md:w-[125px]">
						<?php if ( has_custom_logo() ) { ?>
							<?php the_custom_logo(); ?>
						<?php } else { ?>
							<a href="<?php echo esc_url( get_bloginfo( 'url' ) ); ?>" class="font-extrabold text-lg uppercase">
								<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
							</a>

							<p class="text-sm font-light text-gray-600">
								<?php echo wp_kses_post( get_bloginfo( 'description' ) ); ?>
							</p>

						<?php } ?>
					</div>

					<div class="lg:hidden">
						<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
							<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
								xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
									<g id="icon-shape">
									<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
										id="Combined-Shape"></path>
									</g>
								</g>
							</svg>
						</a>
					</div>
				</div>

				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
						'menu_class'      => 'lg:flex lg:-mx-4 font-sans-condensed uppercase text-menu',
						'theme_location'  => 'primary',
						'li_class'        => 'lg:mx-4',
						'link_class'      => 'transition duration-300 border-b-2 border-transparent hover:border-primary hover:text-primary active:border-primary active:text-primary',
						'fallback_cb'     => false,
					)
				);

				?>
			</div>
		</div>
	</header>

	<div id="content" class="site-content flex-grow">

		<?php if ( is_front_page() ) { ?>
			<!-- Start introduction -->
			<div class="container mx-auto">
				<div class="px-12 py-16 my-12 rounded-xl bg-gradient-to-r from-blue-50 from-10% via-sky-100 via-30% to-blue-200 to-90%">
					<div class="mx-auto max-w-screen-md">
						<h1 class="text-3xl lg:text-6xl tracking-tight font-extrabold text-gray-800 mb-6">Start building your next <a href="https://tailwindcss.com" class="text-secondary">Tailwind CSS</a> flavoured WordPress theme
							with <a href="https://tailpress.io" class="text-primary">TailPress</a>.</h1>
						<p class="text-gray-600 text-xl font-medium mb-10">TailPress is your go-to starting
							point for developing WordPress themes with Tailwind CSS and comes with basic block-editor support out
							of the box.</p>
						<a href="https://github.com/jeffreyvr/tailpress"
							class="w-full sm:w-auto flex-none bg-obsidian text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-obsidian focus:outline-none transition-colors duration-200">View
							on GitHub</a>
					</div>
				</div>
			</div>
			<!-- End introduction -->
		<?php } ?>

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
