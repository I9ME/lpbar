<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.2
 */

?>
<?php
		if (have_posts()) :
  		 while (have_posts()) :
  		 	  the_post();
	?>
<article id="post-<?php the_ID(); ?>" class="u-positionRelative">
	
	<header class="entry-header Intro--blog-header u-positionRelative u-marginBottom--inter u-displayBlock u-zIndex9 u-size24of24 u-alignCenter u-paddingVertical">	
			<h2 class="entry-title Intro--blog-title"><?php echo get_the_title(); ?></h2>
	</header><!-- .entry-header -->

	
	<div class="entry-content Section Section--blogTheContent u-alignJustify">
		<?php echo get_the_content(); ?>
	</div>

</article><!-- #post-## -->

<?php 
			endwhile; 
			else:
	 ?>
	 <article class="u-positionRelative">
	
	<header class="entry-header Intro--blog-header u-positionRelative u-marginBottom--inter u-displayBlock u-zIndex9 u-size24of24 u-alignCenter u-paddingVertical">	
			<h2 class="entry-title Intro--blog-title">Nenhuma postagem foi encontrada.</h2>
	</header><!-- .entry-header -->
</article>



<?php endif; ?>
