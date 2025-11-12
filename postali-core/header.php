<?php
/**
 * Theme header.
 *
 * @package Postali Child
 * @author Postali LLC
**/
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NTJ9B2');</script>
<!-- End Google Tag Manager -->

<!-- Add JSON Schema here -->
<?php if (is_tree('2275')) { /** bucks county*/
    echo '<script type="application/ld+json">' . strip_tags(get_field('bucks_county_schema','options')) . '</script>';
 } elseif (is_tree('2277')) { // delaware county
    echo '<script type="application/ld+json">' . strip_tags(get_field('delaware_county_schema','options')) . '</script>';
 } elseif (is_tree('2280')) { // montgomery county
    echo '<script type="application/ld+json">' . strip_tags(get_field('montgomery_county_schema','options')) . '</script>';
 } else { // everywhere else
    echo '<script type="application/ld+json">' . strip_tags(get_field('downtown_philadelphia_schema','options')) . '</script>';
 } ?>   

<?php 
// Single Page Schema
$single_schema = get_field('single_schema');
if ( !empty($single_schema) ) :
    echo '<script type="application/ld+json">' . strip_tags($single_schema) . '</script>';
endif; ?>

<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>

<?php get_template_part('block','design'); ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<?php get_template_part('block','font-select'); ?>

</head>

<a class="skip-link" href='#main-content'>Skip to Main Content</a>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NTJ9B2"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

	<header>
		<div id="header-top" class="container">
			<div id="header-top_left">
				<?php the_custom_logo(); ?>
			</div>
			
			<div id="header-top_right">
				<div id="header-top_right_menu">
                    <nav>
                    <?php
                        $args = array(
                            'container' => false,
                            'theme_location' => 'header-nav'
                        );
                        wp_nav_menu( $args );
                    ?>	
                    </nav>

                    <?php if (is_tree('2275')) { // bucks county // ?>
                        <style> .nav-bucks {  display:flex !important; } </style>
                    <?php } elseif (is_tree('2277')) { // delaware county // ?>
                        <style> .nav-delaware {  display:flex !important; } </style>
                    <?php } elseif (is_tree('2280')) { // montgomery county // ?>
                        <style> .nav-montgomery {  display:flex !important; } </style>
                    <?php } else { // everywhere else // ?>
                        <style> .nav-philadelphia {  display:flex !important; } </style>
                    <?php } ?>

					<div id="header-top_mobile">
						<div id="menu-icon" class="toggle-nav">
							<span class="line line-1"></span>
							<span class="line line-2"></span>
							<span class="line line-3"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header> 

    <span id="main-content"></span>