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
<article id="post-<?php the_ID(); ?>" class="Article Article--coupons u-positionRelative u-displayFlex u-flexDirectionColumn  u-paddingBottom--inter u-borderRadius5">
	
	<section class="Section u-paddingBottom--inter--half u-paddingTop--inter--half u-marginVertical--inter--half--px">
		
		<div class="Section--destaque-content u-size10of24">
			<header class="entry-header Section--header u-positionRelative u-marginHorizontal--inter u-displayBlock u-zIndex9 u-size24of24 u-alignCenter u-paddingVertical--inter--px">	
				<h2 class="entry-title Section--header-title"><?php echo get_the_title(); ?></h2>
			</header><!-- .entry-header -->
		</div>

	</section>

	
</article><!-- #post-## -->

<?php 
			endwhile; 
			else:
	 ?>
	 <article class="u-positionRelative">
	
	<header class="entry-header Intro--blog-header u-positionRelative u-marginBottom--inter u-displayBlock u-zIndex9 u-size24of24 u-alignCenter u-paddingVertical">	
			<h2 class="entry-title Intro--blog-title">Nenhum Cupom foi encontrado.</h2>
	</header><!-- .entry-header -->
</article>



<?php endif; ?>
