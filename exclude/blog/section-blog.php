<section id="blog" class="Section Section--style1 Section--blog u-paddingHorizontal">
	<div class="u-maxSize--container u-alignCenterBox u-alignCenter"><!-- Max Size Container -->
		<header class="Section-header u-marginBottom--inter u-size16of24 u-alignCenterBox u-paddingVertical">
			<h2 class="Section-header-title Section-header-title--beforeTitleLine u-alignCenter u-paddingBottom--inter--half u-marginBottom--inter--half">BLOG</h2>
			<!-- <h3 class="Section-header-subtitle u-alignCenter">Subtitulo exemplo lorem ipsum dolor sit amet</h3> -->
			<a class="u-displayInlineFlex ReadMore Button Button--border hover Button--smallSize u-borderRadius5 u-paddingHorizontal--inter--half--px u-paddingVertical--inter--px is-animating" href="<?php echo get_home_url(); ?>/blog/">VER BLOG COMPLETO</a>
		</header>
		<?php 

			$newsArgs = array( 'post_type' => 'post', 'posts_per_page' => 3, 'orderby' => 'ID', 'order' => 'ASC');
			$newsLoop = new WP_Query( $newsArgs );
			
			if ( $newsLoop->have_posts() ): 

 		?>
	<ul class="Section-items u-size24of24 u-flex u-paddingVertical u-flexSwitchReverse--mobile u-flexDirectionRow">
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
  		?>
		<li class="Section-items-item u-marginBottom--inter u-paddingHorizontal--vrt--inter--half--px u-flex u-flexDirectionColumn u-alignCenter u-size8of24">
			<a href="<?php echo get_the_permalink(); ?>" class="Section-items-item-content u-size24of24 u-positionRelative u-displayFlex u-flexDirectionColumn u-flexJustifyContentCenter is-animating">
				<figure class="Section-items-item-figure u-alignCenter u-marginBottom--inter--half u-lineHeight0 u-overflowHidden">
					<img class="Section-items-item-figure-src u-displayInlineBlock u-sizeFull is-animating u-heightAuto" src="<?php echo $urlThumbnail; ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" />
				</figure>
				<h4 class="Section-items-item-title Title u-paddingHorizontal--vrt--inter--px u-alignLeft u-positionRelative is-animating">
					<?php echo get_the_title(); ?>
				</h4>			
			</a>
		</li>
		<?php endwhile; ?>

		<?php 
			wp_reset_postdata(); 
			endif; 
		?>

	</ul>

</section>