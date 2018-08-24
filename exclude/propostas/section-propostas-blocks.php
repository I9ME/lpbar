<section id="tecnologia" class="u-paddingVertical Section Section--style1 Section--propostasBlocks u-positionRelative">
		<div class="u-maxSize--container u-alignCenterBox"><!-- Max Size Container -->
		<?php 

			$newsArgs = array( 'post_type' => 'projetos', 'posts_per_page' => 4, 'orderby' => 'ID', 'order' => 'ASC');
			$newsLoop = new WP_Query( $newsArgs );
			
			if ( $newsLoop->have_posts() ): 

 		?>
	<ul class="Section-items Section-items--columns u-displayTable u-maxSize--container u-alignCenterBox">
 		<?php                     
	      while ( $newsLoop->have_posts() ) : $newsLoop->the_post();
	      	$area = get_post_meta( get_the_ID(), 'var_tipo', true );
  		?>

		<li class="Section-items-item MinTwoColumns u-flex u-alignCenter u-displayBlock u-positionRelative u-size6of24 u-floatLeft u-height5of10">
			<div class="Section-items-item-content u-positionAbsolute u-paddingHorizontal--vrt--inter--px">
				<figure class="Section-items-item-figure u-displayFlex u-flexJustifyContentCenter">
					<i class="FigureIcon FigureIcon--<?php projectsCandidate($area); ?> u-displayBlock"></i>
				</figure>
				<div class="Section-items-item-texts u-displayBlock u-flexJustifyContentCenter">
					<h4 class="Section-items-item-title u-marginHorizontal--inter--half"><?php echo get_the_title(); ?></h4>
					<p class="Section-items-item-resume"><?php echo get_the_excerpt(); ?></p>
				</div>
			</div>
		</li>

		<?php endwhile; ?>

		<?php 
			wp_reset_postdata(); 
			endif; 
		?>

<!-- 
		<li class="Section-items-item MinTwoColumns u-flex u-alignCenter u-displayBlock u-positionRelative u-size6of24 u-floatLeft u-height5of10">
			<div class="Section-items-item-content u-positionAbsolute u-paddingHorizontal--vrt--inter--px">
				<figure class="Section-items-item-figure u-displayFlex u-flexJustifyContentCenter">
					<i class="FigureIcon FigureIcon--educacao u-displayBlock"></i>
				</figure>
				<div class="Section-items-item-texts u-displayBlock">
					<h4 class="Section-items-item-title u-marginHorizontal--inter--half">Educação</h4>
					<p class="Section-items-item-resume">Projetos para uma educação de qualidade, do básico à universidade.</p>
				</div>
			</div>
		</li>
		<li class="Section-items-item MinTwoColumns u-flex u-alignCenter u-displayBlock u-positionRelative u-size6of24 u-floatLeft u-height5of10">
			<div class="Section-items-item-content u-positionAbsolute u-paddingHorizontal--vrt--inter--px">
				<figure class="Section-items-item-figure u-displayFlex u-flexJustifyContentCenter">
					<i class="FigureIcon FigureIcon--saude u-displayBlock"></i>
				</figure>
				<div class="Section-items-item-texts u-displayBlock">
					<h4 class="Section-items-item-title u-marginHorizontal--inter--half">Saúde</h4>
					<p class="Section-items-item-resume">Revolucionaremos o atendimento nos hospitais públicos em nosso estado.</p>
				</div>
			</div>
		</li>
		<li class="Section-items-item MinTwoColumns u-flex u-alignCenter u-displayBlock u-positionRelative u-size6of24 u-floatLeft u-height5of10">
			<div class="Section-items-item-content u-positionAbsolute u-paddingHorizontal--vrt--inter--px">
				<figure class="Section-items-item-figure u-displayFlex u-flexJustifyContentCenter">
					<i class="FigureIcon FigureIcon--transparencia u-displayBlock"></i>
				</figure>
				<div class="Section-items-item-texts u-displayBlock">
					<h4 class="Section-items-item-title u-marginHorizontal--inter--half">Transparência</h4>
					<p class="Section-items-item-resume">Compromisso com a honestidade e a participaçao popular.</p>
				</div>
			</div>
		</li> -->
	</ul>
	<div class="Section-subSection Section-subSection-quote u-alignCenter u-marginTop--inter u-marginBottom">
		<p class="Quote u-marginHorizontal--inter">A política não deveria ser a arte de dominar, mas sim a arte de fazer política</p>
		<p class="Quote--author">- Aristóteles</p>
	</div>
	</div> <!-- Max Size Container -->
</section>