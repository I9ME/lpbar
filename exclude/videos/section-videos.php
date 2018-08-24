<?php $embed = '<iframe width="560" height="315" src="https://www.youtube.com/embed/l0Qg9BmEnbs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'; ?>


<section id="videos" class="Section Section--style1 Section--videos u-paddingHorizontal">
	<div class="u-maxSize--container u-alignCenterBox u-alignCenter"><!-- Max Size Container -->
		<header class="Section-header u-marginBottom--inter u-size16of24 u-alignCenterBox u-paddingVertical">
			<h2 class="Section-header-title Section-header-title--beforeTitleLine u-alignCenter u-paddingBottom--inter--half u-marginBottom--inter--half">VÍDEOS</h2>
			<h3 class="Section-header-subtitle u-alignCenter">Subtitulo exemplo lorem ipsum dolor sit amet</h3>
		</header>

		<?php 

			$newsArgs = array( 'post_type' => 'video', 'posts_per_page' => 12, 'orderby' => 'date', 'order' => 'DESC');
			$newsLoop = new WP_Query( $newsArgs );
			
			if ( $newsLoop->have_posts() ): 

 		?>
	
	<ul id="myList" class="Section-items u-size24of24 u-flexSwitchReverse--mobile u-flexFlowWrap u-paddingVertical u-displayFlex u-flexJustifyContentCenter">

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
			$iframeVideo = get_post_meta( get_the_ID(), '_urlswitch', true );
			//$iframe_video = esc_html( get_post_meta( get_the_ID(), 'iframe_video', true ) );

  	?>
		<li class="Section-items-item u-marginBottom--inter u-paddingHorizontal--vrt--inter--half--px u-displayInlineFlex u-flexDirectionColumn u-alignCenter">
			<a class="LightboxCall" href="javascript:LightboxCall(<?php  echo esc_html( '\'' . $iframeVideo . '\'' ); ?>);">
			<!-- <a class="LightboxCall" href="javascript:LightboxCall(<?php // echo esc_html( '\'' . $iframeVideo . '\'' ); ?>);"> -->
				<figure class="Section-items-item-figure u-overflowHidden u-lineHeight0 u-size24of24 u-positionRelative is-animating">
					<i class="icon u-absoluteCenterMiddle">
						<svg class="iconPlayCircleVazado NavigationButton-icon u-icon is-animating is-animating--switch is-animating--switch--imgA is-animating--rotate">
							<use xlink:href="#iconPlayCircleVazado"></use>
						</svg>
					</i>
					<figcaption class="u-positionAbsolute u-sizeFull u-heightAuto u-lineHeight120 u-zIndex10 u-displayFlex u-flexJustifyContentCenter u-flexDirectionColumn u-paddingHorizontal--vrt--inter--half--px is-animating">
						<h4 class="Section-items-item-title u-alignCenter"><?php echo get_the_title(); ?></h4>
						<p class="Section-items-item-resume"><?php echo esc_html( get_the_excerpt() ); ?></p>
					</figcaption>
					<img class="Item-img Item-img--full u-objectFitCover is-animating" src="<?php echo $urlThumbnail; ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" />
				</figure>
			</a>
		</li>

		<?php endwhile; ?>

		<?php 
			wp_reset_postdata(); 
			endif; 
		?>


	</ul>

	<a id="loadMore" href="javascript:;" class="u-displayInlineFlex ReadMore ReadMore--background Button Button--smallSize u-borderRadius5 u-paddingHorizontal--inter--half--px u-paddingVertical--inter--px is-animating">CARREGAR MAIS VÍDEOS</a>
	</div>
</section>