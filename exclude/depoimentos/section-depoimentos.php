<section id="depoimentos" class="Section Section--style1 Section--depoimentos u-paddingHorizontal">
	<div class="u-maxSize--container u-alignCenterBox u-alignCenter"><!-- Max Size Container -->
		<header class="Section-header u-marginBottom--inter u-size16of24 u-alignCenterBox u-paddingVertical">
			<h2 class="Section-header-title Section-header-title--beforeTitleLine u-alignCenter u-paddingBottom--inter--half u-marginBottom--inter--half">DEPOIMENTOS</h2>
			<h3 class="Section-header-subtitle u-alignCenter">Subtitulo exemplo lorem ipsum dolor sit amet</h3>
		</header>
		<?php 

			$newsArgs = array( 'post_type' => 'depoimentos', 'posts_per_page' => 8, 'orderby' => 'ID', 'order' => 'ASC');
			$newsLoop = new WP_Query( $newsArgs );
			
			if ( $newsLoop->have_posts() ): 

 		?>
	<ul id="depoimentos-carousel" class="Section-items u-size24of24 u-paddingVertical owl-carousel">
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

	      	$cargo = get_post_meta( get_the_ID(), '_urlswitch', true );
  		?>
		<li class="Section-items-item u-alignCenter Quote u-displayFlex u-flexDirectionColumn u-flexSwitchRow u-flexAlignItemsCenter">
			<figure class="Section-items-item-figure Quote-image u-displayInlineBlock u-size3of24--px">
				<img class="u-sizeFull" src="<?php echo $urlThumbnail; ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" />
			</figure>
			<div class="Section-items-item-texts u-displayFlex u-size18of24 u-flexDirectionColumn u-flexAlignItemsCenter">
				<i class="u-positionRelative u-displayBlock u-marginTop--inter">
					<svg class="SocialBar-item-icon u-icon iconQuoteRight u-displayInlineBlock is-animating">
						<use xlink:href="#iconQuoteRight"></use>
					</svg>
				</i>
				<p class="Section-items-item-resume Quote-cite u-marginHorizontal--inter--half"><?php echo get_the_excerpt(); ?></p>
				<p class="Section-items-item-author Quote--author"><em><strong><?php echo get_the_title(); ?></strong></em>, <?php echo $cargo; ?></p>
			</div>
		</li>
		<?php endwhile; ?>

		<?php 
			wp_reset_postdata(); 
			endif; 
		?>
	</ul>
</section>