<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

?>

<?php 
	/*$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo = wp_get_attachment_image_src( $custom_logo_id , 'medium' );*/
?>
	<a href="<?php echo linkHome(); ?>" class="u-displayInlineBlock <?php echo classScrollDown(); ?>">
		<img  class="Site-header-branding-img u-displayBlock u-absoluteLeftMiddle u-zIndex2 u-sizeAuto" src="<?php echo get_template_directory_uri(); ?>/assets/images/logotipo-barneys-burger.png" alt="<?php echo get_bloginfo( 'name' ); ?>" />
		 <figure class="Site-header-branding-type u-displayBlock u-absoluteMiddle u-zIndex1 u-overflowHidden">
		 	<span class="ElementImg ElementImg--bgLogo u-positionAbsolute u-displayFlex u-flexAlignItemsCenter u-flexJustifyContentFlexEnd">
		 		<span class="u-displayBlock u-marginRight--inter--half--px">FRANQUIA</span>
		 	</span>
		 </figure>
	</a>

		