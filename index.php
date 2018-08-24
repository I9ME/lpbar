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
<!-- teste -->
<main id="main" class="SiteMain Site-main" role="main">
	<?php  get_template_part('template-parts/plugins/plugin','lightbox'); ?>
	<?php get_template_part('template-parts/page/intro','page'); ?>
	<?php get_template_part('template-parts/franquia/franquia','sobre'); ?>
	<?php // get_template_part('template-parts/videos/videos','section'); ?>
	<?php // get_template_part('template-parts/opinioes/opinioes','section'); ?>
	<?php get_template_part('template-parts/vignoli/vignoli','section'); ?>
	<?php get_template_part('template-parts/seja-franqueado/seja-franqueado','section'); ?>
	<?php get_template_part('template-parts/na-midia/namidia','section'); ?>
	<?php get_template_part('template-parts/locais/locais','section'); ?>
</main><!-- #main -->



<?php get_footer();
