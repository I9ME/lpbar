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
	<?php 


	$newsArgs = array( 'post_type' => 'post', 'posts_per_page' => 12, 'paged' => $paged, 'orderby' => 'date', 'order' => 'DESC');   
                      
	      $newsLoop = new WP_Query( $newsArgs );      

	      if ( $newsLoop->have_posts() ):
 ?>

<ul class="Section-items u-size24of24 u-positionRelative u-flex u-flexDirectionColumn">
	<?php                     
	      while ( $newsLoop->have_posts() ) : $newsLoop->the_post();

	      		if ( has_post_thumbnail() ) {
			
				//Imagem Destacada	
				$image_id = get_post_thumbnail_id();
				$sizeThumbs = 'thumbnail';
				$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
				$urlThumbnail = $urlThumbnail[0];

			} else {
				$urlThumbnail = '';
			}
			
			$categCurrentPost = get_the_category( get_the_ID() );
			$categ_id = $categCurrentPost[0]->cat_ID;
			$categ_name = get_cat_name( $categ_id );
			$categ_link = get_category_link( $categ_id );

  	?>



	<li class="Section-items-item Item u-size24of24 u-marginBottom u-positionRelative u-flex u-flexDirectionColumn u-flexFolowSize u-flexAlignItemsCenter">
		<a href="<?php echo get_permalink(); ?>" class="Lightbox-window-content Section-items-item-figure u-positionRelative u-sizeFull">
			
				<div style="background-image: url(<?php echo $urlThumbnail; ?>); top:0px; left: 0px; bottom: 0px; border: 0px; background-size: cover; background-position: center center;" class="u-displayBlock u-positionAbsolute u-sizeFull u-sizeHeight100"></div>
		</a>
		<div class="Section--blogLoop-texts u-paddingTop--inter--half">
			<a class="ReadMore ReadMore--background u-borderRadius30 Button Item-category is-animating" href="<?php echo $categ_link; ?>"><?php echo $categ_name; ?></a>
			<p class="Section-items-item-resume Item-author u-paddingTop--inter--half">POR <?php echo get_the_author(); ?> EM <?php the_date(); ?></p>
			<h3 class="Section-items-item-title Item-title"><a class="is-animating" href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
		</div>
	</li>
	
	<?php endwhile; ?>
</ul>
<div class="Pagination u-marginTop--inter u-flex u-justifyContentCenter u-overflowHidden">
	<?php pagination_bar( $newsLoop ); ?>

		
		</div>
		<?php 
		wp_reset_postdata(); 
		endif; ?>
</section>