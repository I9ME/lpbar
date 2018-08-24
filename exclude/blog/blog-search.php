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
<section class="Section Section--blogLoop Section--style1">

	<?php /*


	$newsArgs = array( 'post_type' => 'post', 'posts_per_page' => 12, 'orderby' => 'date', 'order' => 'DESC');   
                      
	      $newsLoop = new WP_Query( $newsArgs );      

	      if ( $newsLoop->have_posts() ):*/
 ?>

<ul class="Section-items u-size24of24 u-positionRelative u-flex u-flexDirectionColumn">
	<?php
		if (have_posts()) :
  		 while (have_posts()) :
	?>
	<?php                     
	     /* while ( $newsLoop->have_posts() ) : $newsLoop->the_post();

	      		if ( has_post_thumbnail() ) {
			
				//Imagem Destacada	
				$image_id = get_post_thumbnail_id();
				$sizeThumbs = 'full';
				$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
				$urlThumbnail = $urlThumbnail[0];

			} else {
				$urlThumbnail = '';
			}
			
			$categCurrentPost = get_the_category( get_the_ID() );
			$categ_id = $categCurrentPost[0]->cat_ID;
			$categ_name = get_cat_name( $categ_id );
			$categ_link = get_category_link( $categ_id );*/

  	?>



	<li class="Section-items-item Item u-size24of24 u-marginBottom u-positionRelative">

		<h3 class="Section-items-item-title Item-title u-marginBottom--inter"><a class="is-animating" href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
		</h3>
		
		<a href="<?php echo get_permalink(); ?>" class="Section-items-item-figure u-positionRelative u-sizeFull">
			<img class="u-sizeFull" src="<?php echo $urlThumbnail; ?>" alt="<?php echo get_the_title(); ?>" />

		</a>

		<div class="Section-items-item-content u-marginHorizontal--inter u-alignJustify">
			<?php echo get_the_content(); ?>
		</div>
		<div class="Section-items-item-meta u-sizeFull u-displayFlex u-flexDirectionRow u-flexAlignItemsCenter u-flexJustifyContentCenter u-paddingHorizontal--vrt--inter--half--px">
			<a class="ReadMore ReadMore--background u-borderRadius50 u-paddingHorizontal--vrt--inter--half--px Button u-marginRight--inter--px Item-category is-animating" href="<?php echo $categ_link; ?>">
				<?php echo $categ_name; ?>
				
			</a>

			<p class="Meta-author"><?php the_date(); ?></p>

			<!-- POR <?php //echo get_the_author(); ?>  -->
		</div>
	</li>
	
	<?php 
			endwhile; 
			endif;
	 ?>

	
</ul>
<div class="Pagination u-marginTop--inter u-flex u-justifyContentCenter u-overflowHidden">
	<?php //pagination_bar( $newsLoop ); ?>

		
		</div>
		<?php 
		/*wp_reset_postdata(); 
		endif; */
		?>
</section>