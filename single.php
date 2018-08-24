<?php
/**
 * The main template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<div id="main" class="SiteMain SiteMain--inter" role="main">
	<?php get_template_part('template-parts/page/intro','page'); ?>
	
	<main class="SiteMain-main u-marginTop--inter">
		<?php  get_template_part('template-parts/plugins/plugin','lightbox'); ?>
		<?php get_template_part('template-parts/promocoes/section-promocoes','single');?>
	</main>


</div><!-- #main -->




<?php get_footer();
