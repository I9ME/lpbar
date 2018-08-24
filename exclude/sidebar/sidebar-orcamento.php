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
<section class="Section Section--orcamentoClientes Section--style1 LineUp u-paddingHorizontal--vrt--inter--px u-boxShadow u-size24of24 u-marginBottom u-positionRelative u-displayFlex">
	<header class="Section-header u-flex u-flexDirectionRow u-marginBottom--inter--half u-flexJustifyContentCenter">
		<i class="u-inlineFlex">
			<svg class="iconArrowDropDownCircle u-icon is-animating">
				<use xlink:href="#iconArrowDropDownCircle"></use>
			</svg>
		</i>
		<h3 class="Section-header-title u-lineHeight100 u-paddingLeft--inter--half">CLIENTES</h3>
	</header>
	<div class="Section-content u-alignCenter">

		<ul class="Section-navigation-items u-size24of24 u-flex u-flexFlowWrap u-flexJustifyContentCenter">
			<?php 

			$newsArgs = array( 'post_type' => 'cases_sucesso', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'RAND');                   
			                        
			      $newsLoop = new WP_Query( $newsArgs );                  
			                        
			      while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); 

			      	$slugPost = basename(get_permalink());

			      	if ( has_post_thumbnail() ) {
						
						//Imagem Destacada	
						$image_id = get_post_thumbnail_id();
						$sizeThumbs = 'thumbnail';
						$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
						$urlThumbnail = $urlThumbnail[0];


      	?>
			<li class="Section-items-item u-size12of24 u-paddingHorizontal--vrt--inter--half--px">
				<figure class="Section--cases-logo"><img class="u-sizeFull" src="<?php echo $urlThumbnail; ?>" alt="Clientes Zoeweb | <?php the_title(); ?>" title="Clientes Zoeweb | <?php the_title(); ?>" /></figure>
			</li>
			<?php } ?>

			<?php endwhile; ?>
			
			<!-- <li class="Section-items-item u-size12of24 u-paddingHorizontal--vrt--inter--half--px">
				<figure class="Section--cases-logo"><img class="u-sizeFull" src="<?php echo get_template_directory_uri() ?>/assets/images/uploads/logo-scania.png" alt="Cases de Sucesso Scania | Zoeweb" /></figure>
			</li>
			<li class="Section-items-item u-size12of24 u-paddingHorizontal--vrt--inter--half--px">
				<figure class="Section--cases-logo"><img class="u-sizeFull" src="<?php echo get_template_directory_uri() ?>/assets/images/uploads/logo-scania.png" alt="Cases de Sucesso Scania | Zoeweb" /></figure>
			</li>
			<li class="Section-items-item u-size12of24 u-paddingHorizontal--vrt--inter--half--px">
				<figure class="Section--cases-logo"><img class="u-sizeFull" src="<?php echo get_template_directory_uri() ?>/assets/images/uploads/logo-scania.png" alt="Cases de Sucesso Scania | Zoeweb" /></figure>
			</li>
			<li class="Section-items-item u-size12of24 u-paddingHorizontal--vrt--inter--half--px">
				<figure class="Section--cases-logo"><img class="u-sizeFull" src="<?php echo get_template_directory_uri() ?>/assets/images/uploads/logo-scania.png" alt="Cases de Sucesso Scania | Zoeweb" /></figure>
			</li>
			<li class="Section-items-item u-size12of24 u-paddingHorizontal--vrt--inter--half--px">
				<figure class="Section--cases-logo"><img class="u-sizeFull" src="<?php echo get_template_directory_uri() ?>/assets/images/uploads/logo-scania.png" alt="Cases de Sucesso Scania | Zoeweb" /></figure>
			</li> -->
		</ul>
		
	</div>
</section>
<section class="Section Section--orcamentoDepoimentos Section--style1 LineUp u-paddingHorizontal--vrt--inter--px u-boxShadow u-size24of24 u-marginBottom u-positionRelative u-displayFlex">
	<header class="Section-header u-flex u-flexDirectionRow u-marginBottom--inter--half u-flexJustifyContentCenter">
		<i class="u-inlineFlex">
			<svg class="iconArrowDropDownCircle u-icon is-animating">
				<use xlink:href="#iconArrowDropDownCircle"></use>
			</svg>
		</i>
		<h3 class="Section-header-title u-lineHeight100 u-paddingLeft--inter--half">DEPOIMENTOS</h3>
	</header>
	<div class="Section-content u-alignCenter">
		<ul class="u-flex u-flexDirectionColumn">
			<li class="u-paddingHorizontal--vrt--inter--half--px u-marginBottom--inter u-alignCenter">
				<blockquote site="#">
					<i class="u-inlineFlex IconQuote">
						<svg class="iconQuoteRight u-icon is-animating">
							<use xlink:href="#iconQuoteRight"></use>
						</svg>
					</i>
					<p>
						Mais que um cliente somos parceiros. Desde 2010 a Zoeweb vem garantindo um alto padrão de...
					</p>
					<br />
					<em><strong>Antonio Cajueiro, CEO, Empresa</strong>
				</blockquote>
			</li>
			<li class="u-paddingHorizontal--vrt--inter--half--px u-marginBottom--inter u-alignCenter">
				<blockquote site="#">
					<i class="u-inlineFlex IconQuote">
						<svg class="iconQuoteRight u-icon is-animating">
							<use xlink:href="#iconQuoteRight"></use>
						</svg>
					</i>
					<p>
						Mais que um cliente somos parceiros. Desde 2010 a Zoeweb vem garantindo um alto padrão de...
					</p>
					<br />
					<em><strong>Antonio Cajueiro, CEO, Empresa</strong>
				</blockquote>
			</li>
			<li class="u-paddingHorizontal--vrt--inter--half--px u-marginBottom--inter u-alignCenter">
				<blockquote site="#">
					<i class="u-inlineFlex IconQuote">
						<svg class="iconQuoteRight u-icon is-animating">
							<use xlink:href="#iconQuoteRight"></use>
						</svg>
					</i>
					<p>
						Mais que um cliente somos parceiros. Desde 2010 a Zoeweb vem garantindo um alto padrão de...
					</p>
					<br />
					<em><strong>Antonio Cajueiro, CEO, Empresa</strong>
				</blockquote>
			</li>
		</ul>
	</div>
</section>