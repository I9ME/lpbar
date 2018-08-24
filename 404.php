<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */
 
get_header(); ?>

<main id="main" class="SiteMain Page--webinar" role="main">
	<?php  get_template_part('template-parts/page/intro','page');?>
	<?php // get_template_part('template-parts/section','erro404');?>
	<?php if( !wp_is_mobile() ) { get_template_part('template-parts/section','blog'); } ?>
</main><!-- #main -->



<?php get_footer();

