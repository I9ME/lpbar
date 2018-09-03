

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

 get_template_part('template-parts/header/header','tags');

  ?>

<body <?php body_class(); ?>>


	
<div id="page" class="Site">
	<header id="masthead" class="Site-header u-sizeFull u-paddingVertical u-lineHeight0 is-animating u-zIndex20">
		<div class="u-maxSize--container u-alignCenterBox u-alignCenter u-displayFlex u-flexJustifyContentSpaceBetween">
			<!-- Logo do site -->
			<div class="Site-header-branding u-positionRelative u-displayInlineBlock"> 
				<?php  get_template_part('template-parts/header/header','branding');?>
			</div>
			<!-- Menu de Navegação -->
				<?php  get_template_part('template-parts/header/header','navigation');?>
			
		</div><!-- .u-maxSize--container -->

	</header><!-- #masthead -->

	

	<div class="Site-container">
		<div id="content" class="Site-container-content u-overflowHidden">
