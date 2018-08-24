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
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo = wp_get_attachment_image_src( $custom_logo_id , 'medium' );
?>
	<a href="<?php echo linkHome(); ?>" class="u-displayInlineBlock <?php echo classScrollDown(); ?>">
		<?php 
			if ( has_custom_logo() ) {
			        echo '<img  class="Site-header-branding-img u-displayInlineBlock u-sizeAuto" src="'. esc_url( $logo[0] ) .'" alt="' . get_bloginfo( 'name' ) . '">';
			} else {
			        echo '<title>'  . get_bloginfo( 'name' ) . '</title>';
			}
		 ?>
	</a>

		