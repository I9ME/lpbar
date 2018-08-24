<section id="propostas" class="Section Section--style1 Section--propostas u-paddingHorizontal">
	<div class="u-maxSize--container u-alignCenterBox u-alignCenter"><!-- Max Size Container -->
		<header class="Section-header u-marginBottom--inter u-size16of24 u-alignCenterBox u-paddingVertical">
			<h2 class="Section-header-title Section-header-title--beforeTitleLine u-alignCenter u-paddingBottom--inter--half u-marginBottom--inter--half">MINHAS PROPOSTAS</h2>
			<h3 class="Section-header-subtitle u-alignCenter">Subtitulo exemplo lorem ipsum dolor sit amet</h3>
		</header>
		<?php 

			$newsArgs = array( 'post_type' => 'projetos', 'posts_per_page' => 12, 'orderby' => 'ID', 'order' => 'ASC');
			$newsLoop = new WP_Query( $newsArgs );
			
			if ( $newsLoop->have_posts() ): 

 		?>
	<ul id="projetos-carousel" class="Section-items u-size24of24 u-flex u-paddingVertical u-flexSwitchReverse--mobile u-flexDirectionRow owl-carousel">
		<?php                     
	      while ( $newsLoop->have_posts() ) : $newsLoop->the_post();
	      	$area = get_post_meta( get_the_ID(), 'var_tipo', true );
	      	$value_line_1 = get_post_meta( get_the_ID(), 'value_line_1', true );
	      	$value_line_2 = get_post_meta( get_the_ID(), 'value_line_2', true );
  		?>
		<li class="Section-items-item u-marginBottom--inter u-paddingHorizontal--vrt--inter--half--px u-flex u-flexDirectionColumn u-alignCenter u-sizeFull">
			<div class="Section-items-item-content u-boxShadow u-size24of24 u-positionRelative u-displayFlex u-flexDirectionColumn">
				<div class="u-paddingVertical--inter--px u-paddingTop--inter">
					<figure class="Section-items-item-figure u-displayFlex u-flexJustifyContentCenter">
						<i class="FigureIcon FigureIcon--<?php projectsCandidate($area); ?>--color2 u-displayBlock"></i>
					</figure>
					<h4 class="Section-items-item-title u-alignCenter u-marginHorizontal--inter--half"><?php echo get_the_title(); ?></h4>
					<p class="Section-items-item-resume u-paddingBottom--inter">
					<?php echo get_the_excerpt(); ?>
					</p>
				</div>
				<p class="Section-items-item-features u-paddingHorizontal--vrt--inter--px u-alignCenter u-lineHeight120">
					<em class="u-displayBlock u-sizeFull u-marginBottom--inter--half"><strong><?php echo $value_line_1; ?></strong></em>
					<?php echo $value_line_2; ?>.
				</p>
			</div>
		</li>
		<?php endwhile; ?>

		<?php 
			wp_reset_postdata(); 
			endif; 
		?>
		<!-- <li class="Section-items-item u-marginBottom--inter u-paddingHorizontal--vrt--inter--half--px u-flex u-flexDirectionColumn u-alignCenter u-size8of24">
			<div class="Section-items-item-content u-boxShadow u-size24of24 u-positionRelative u-displayFlex u-flexDirectionColumn">
				<div class="u-paddingVertical--inter--px u-paddingTop--inter">
					<figure class="Section-items-item-figure u-displayFlex u-flexJustifyContentCenter">
						<i class="FigureIcon FigureIcon--educacao--color2 u-displayBlock"></i>
					</figure>
					<h4 class="Section-items-item-title u-alignCenter u-marginHorizontal--inter--half">Educação</h4>
					<p class="Section-items-item-resume u-paddingBottom--inter">
					Projetos para uma <strong>educação de qualidade</strong>, do básico à universidade.
					</p>
				</div>
				<p class="Section-items-item-features u-paddingHorizontal--vrt--inter--px u-alignCenter u-lineHeight120">
					<em class="u-displayBlock u-sizeFull u-marginBottom--inter--half"><strong>5 Projetos</strong></em>
					com potencial para formar até <strong>30.000 alunos</strong>.
				</p>
			</div>
		</li>
		<li class="Section-items-item u-marginBottom--inter u-paddingHorizontal--vrt--inter--half--px u-flex u-flexDirectionColumn u-alignCenter u-size8of24">
			<div class="Section-items-item-content u-boxShadow u-size24of24 u-positionRelative u-displayFlex u-flexDirectionColumn">
				<div class="u-paddingVertical--inter--px u-paddingTop--inter">
					<figure class="Section-items-item-figure u-displayFlex u-flexJustifyContentCenter">
						<i class="FigureIcon FigureIcon--saude--color2 u-displayBlock"></i>
					</figure>
					<h4 class="Section-items-item-title u-alignCenter u-marginHorizontal--inter--half">Saúde</h4>
					<p class="Section-items-item-resume u-paddingBottom--inter">
					Revolucionaremos o atendimento nos hospitais públicos em nosso estado.
					</p>
				</div>
				<p class="Section-items-item-features u-paddingHorizontal--vrt--inter--px u-alignCenter u-lineHeight120">
					<em class="u-displayBlock u-sizeFull u-marginBottom--inter--half"><strong>3 Projetos</strong></em>
					com potencial para atender até <strong>10 milhões</strong> de pacientes.
				</p>
			</div>
		</li>
		<li class="Section-items-item u-marginBottom--inter u-paddingHorizontal--vrt--inter--half--px u-flex u-flexDirectionColumn u-alignCenter u-size8of24">
			<div class="Section-items-item-content u-boxShadow u-size24of24 u-positionRelative u-displayFlex u-flexDirectionColumn">
				<div class="u-paddingVertical--inter--px u-paddingTop--inter">
					<figure class="Section-items-item-figure u-displayFlex u-flexJustifyContentCenter">
						<i class="FigureIcon FigureIcon--transparencia--color2 u-displayBlock"></i>
					</figure>
					<h4 class="Section-items-item-title u-alignCenter u-marginHorizontal--inter--half">Transparência</h4>
					<p class="Section-items-item-resume u-paddingBottom--inter">
					Compromisso com a honestidade e a participaçao popular.
					</p>
				</div>
				<p class="Section-items-item-features u-paddingHorizontal--vrt--inter--px u-alignCenter u-lineHeight120">
					<em class="u-displayBlock u-sizeFull u-marginBottom--inter--half"><strong>4 Projetos</strong></em>
					de combate a <strong>corrupção</strong> e acesso à <strong>informação</strong>.
				</p>
			</div>
		</li> -->
		

	</ul>

</section>