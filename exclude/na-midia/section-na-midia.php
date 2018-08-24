<section id="na-midia" class="Section Section--style1 Section--naMidia u-paddingHorizontal">
	<div class="u-maxSize--container u-alignCenterBox u-alignCenter"><!-- Max Size Container -->
		<header class="Section-header u-marginBottom--inter u-size16of24 u-alignCenterBox u-paddingVertical">
			<h2 class="Section-header-title Section-header-title--beforeTitleLine u-alignCenter u-paddingBottom--inter--half u-marginBottom--inter--half">NA MÍDIA</h2>
			<h3 class="Section-header-subtitle u-alignCenter">Subtitulo exemplo lorem ipsum dolor sit amet</h3>
		</header>
		<?php 

			$newsArgs = array( 'post_type' => 'clippings', 'posts_per_page' => 9, 'orderby' => 'ID', 'order' => 'ASC');
			$newsLoop = new WP_Query( $newsArgs );
			
			if ( $newsLoop->have_posts() ): 

 		?>
	<ul id="naMidia-carousel" class="Section-items u-size24of24 u-flex u-paddingVertical u-flexSwitchReverse--mobile u-flexDirectionRow owl-carousel">
		<?php                     
	      while ( $newsLoop->have_posts() ) : $newsLoop->the_post();
	      	
	      	if ( has_post_thumbnail() ) {
			
				//Imagem Destacada	
				$image_id = get_post_thumbnail_id();
				$sizeThumbs = 'medium';
				$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
				$urlThumbnail = $urlThumbnail[0];

			} else {
				$urlThumbnail = '';
			}

	      	$link = get_post_meta( get_the_ID(), '_urlswitch', true );
  		?>
	
		<li class="Section-items-item u-marginBottom--inter u-paddingHorizontal--vrt--inter--half--px u-flex u-flexDirectionColumn u-alignCenter u-sizeFull">
			<a href="<?php echo $link; ?>" class="Section-items-item-content u-paddingHorizontal--vrt--inter--px u-boxShadow u-size24of24 u-positionRelative u-displayFlex u-flexDirectionColumn u-flexJustifyContentCenter">
					<figure class="Section-items-item-figure u-alignCenter u-marginBottom--inter--half">
						<img class="Section-items-item-figure-src u-displayInlineBlock u-imageMax100 u-sizeAuto u-heightAuto" src="<?php echo $urlThumbnail; ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" />
					</figure>
					<h4 class="Section-items-item-title u-alignCenter u-positionRelative u-overflowHidden">
						<span class="u-isOut"><?php echo get_the_title(); ?></span>
					</h4>
					<p class="Section-items-item-resume">
						<strong><?php echo get_the_excerpt(); ?></strong>
					</p>				
			</a>
		</li>
		<?php endwhile; ?>

		<?php 
			wp_reset_postdata(); 
			endif; 
		?>
	</ul>

</section>