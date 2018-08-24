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
<article id="post-<?php the_ID(); ?>" class="Article Article--promocoes u-positionRelative u-displayFlex u-flexDirectionColumn  u-paddingBottom--inter u-borderRadius5">
	
	<div class="Breadcrumbs u-displayFlex u-paddingHorizontal--vrt--inter--half--px">
		<a class="u-lineHeight100 u-displayFlex u-flexDirectionRow u-flexAlignItemsCenter is-animating" href="<?php echo get_home_url(); ?>">
			<i class="u-icon u-marginRight--inter--half--px">
				<svg class="iconArrowLeftLine u-icon is-animating">
					<use xlink:href="#iconArrowLeftLine"></use>
				</svg>
			</i>
			<span>VOLTAR PARA AS PROMOÇÕES</span>
		</a>
	</div>
	
	<section class="Section Section--destaque u-displayFlex u-flexDirectionColumn u-flexSwitchRow">
		
		<div class="Section--destaque-thumbnail u-size14of24 u-lineHeight0">
			<?php 

				$promocao_id = get_the_id();
				$promocao_title = get_the_title();

				// MetaBoxes
		      	$recorrencia = get_post_meta( get_the_ID(), 'var_tipo', true );
		      	$data_inicial = get_post_meta( get_the_ID(), 'value_line_1', true );
		      	$data_final = get_post_meta( get_the_ID(), 'value_line_2', true );
		      	$quant_total = get_post_meta( get_the_ID(), 'value_line_3', true );
		      	$quant_gerado = get_post_meta( get_the_ID(), 'value_line_4', true );
		      	$valor_normal = get_post_meta( get_the_ID(), 'value_line_5', true );
		      	$valor_promocional = get_post_meta( get_the_ID(), 'value_line_6', true );
		      	$descricao = get_post_meta( get_the_ID(), 'value_line_7', true );
		      	$regras_gerais = get_post_meta( get_the_ID(), 'value_line_8', true );
		      	
		      	// Tratando "DIAS RESTANTES"
		      	$today = get_the_date('Y-m-d');

			     $data_inicio = new DateTime($today);
				 $data_fim = new DateTime($data_final);
				   // Resgata diferença entre as datas
				 $dateInterval = $data_inicio->diff($data_fim);
				 $dias_rest = $dateInterval->days;



		      

		      	if( $dias_rest > 1 ) {
		      		$dias_restantes = $dias_rest . ' dias';
		      	} elseif( $dias_rest <= 1 ) {
		      		$dias_restantes = '0 dia';	
		      	}

		      	


		      	// Tratando "Percentual de desconto"
		      	$desc = $valor_promocional / $valor_normal * 100 - $valor_normal;
		      	$desco = explode('.', $desc);
		      	$desconto = $desco[0] . '%';

		      	// Tratando "Economia"
		      	$economia = $valor_normal - $valor_promocional;

		      	// Tratando "Quantidade Disponível"
		      	$quant_rest = $quant_total - $quant_gerado;
		      	if( $quant_rest > 0 ) {
		      		$quantidade = $quant_rest;
		      	} else {
		      		$quantidade = 0;
		      	}
		      	

				if ( has_post_thumbnail() ) {
			
				//Imagem Destacada	
				$image_id = get_post_thumbnail_id();
				$sizeThumbs = 'large';
				$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
				$urlThumbnail = $urlThumbnail[0];
				
				} else {
				$urlThumbnail = get_template_directory_uri() . '/assets/images/lessThumbnail.png';
				}
			 ?>

			 <img class="u-maxSize100 u-minWith100" src="<?php echo $urlThumbnail ?>" alt="<?php echo get_the_title(); ?>">
		</div>
		<div class="Section--destaque-content u-size10of24">
			<header class="entry-header Section--header u-positionRelative u-marginHorizontal--inter u-displayBlock u-zIndex9 u-size24of24 u-alignCenter u-paddingVertical--inter--px">	
				<h2 class="entry-title Section--header-title"><?php echo get_the_title(); ?></h2>
			</header><!-- .entry-header -->

			<div class="Meta u-displayFlex u-flexDirectionRow u-flexAlignItemsCenter u-flexJustifyContentCenter u-marginTop--inter--half u-marginBottom--inter u-marginVertical--inter--px">
				<div class="Price Price--natural u-size12of24 u-alignCenter u-paddingHorizontal--vrt--inter--half--px"><span class="u-positionRelative u-displayInlineBlock u-paddingVertical--inter--half--px">R$ <?php echo $valor_normal; ?></span></div>
				<div class="Price Price--offer u-size12of24 u-alignCenter u-paddingHorizontal--vrt--inter--half--px">R$ <?php echo $valor_promocional ; ?></div>
			</div>

			<div class="Section-subSection Section-subSection--cta u-displayFlex u-flexDirectionRow u-flexAlignItemsCenter u-flexJustifyContentCenter u-marginHorizontal--inter--half u-marginVertical--inter--px u-flexJustifyContentCenter">
				<a class="Button Button--largeSize Button--border hover is-animating Button--background u-borderRadius5 u-alignCenter u-displayFlex u-flexAlignItemsCenter" href="javascript:LightboxCall('<?php echo get_home_url(); ?>/cupom-gerado/<?php echo get_the_ID(); ?>/');">
					GERAR CUPOM GRATUITAMENTE
				</a>
			</div>
		</div>
	</section>
	<section class="Section Section--dataBar u-paddingBottom--inter--half u-paddingTop--inter--half u-marginVertical--inter--half--px">
		<ul class="Section-items u-displayFlex u-flexFlowWrap">
			<li class="Section-items-item Section-items-item--diasRestantes u-marginHorizontal--inter--half u-displayFlex u-flexDirectionRow u-flexAlignItemsCenter u-size7of24">
				<h4 class="Section-items-item-title">ESTA PROMOÇÃO SE<br />ENCERRARÁ EM:</h4>
				<div class="Section-items-item-content Value u-positionRelative u-paddingLeft u-displayFlex u-flexDirectionRow u-flexAlignItemsCenter">
					<i class="u-icon">
						<svg class="iconTime u-icon is-animating">
							<use xlink:href="#iconTime"></use>
						</svg>
					</i>
					<span class="u-paddingLeft u-positionRelative u-displayBlock u-sizeFull">
						<?php echo $dias_restantes; ?>
					</span>
				</div>
			</li>
			<li class="Section-items-item Section-items-item--desconto u-marginHorizontal--inter--half u-displayFlex u-flexDirectionRow u-flexAlignItemsCenter u-size5of24">
				<h4 class="Section-items-item-title">DESCONTO:</h4>
				<div class="Section-items-item-content Value u-paddingLeft u-positionRelative u-positionRelative u-displayBlock u-sizeAuto"><?php echo $desconto; ?></div>
			</li>
			<li class="Section-items-item Section-items-item--economia u-marginHorizontal--inter--half u-displayFlex u-flexDirectionRow u-flexAlignItemsCenter u-size5of24">
				<h4 class="Section-items-item-title">ECONOMIZE:</h4>
				<div class="Section-items-item-content Value u-paddingLeft u-positionRelative u-positionRelative u-displayBlock u-sizeAuto">+ R$ <?php echo $economia; ?></div>
			</li>
			<li class="Section-items-item Section-items-item--quantidade u-marginHorizontal--inter--half u-displayFlex u-flexDirectionRow u-flexAlignItemsCenter u-size7of24">
				<h4 class="Section-items-item-title">QUANTIDADE <br />DISPONÍVEL:</h4>
				<div class="Section-items-item-content Value u-paddingLeft u-positionRelative u-displayBlock u-sizeAuto"><span class="Disponivel"><?php echo $quantidade; ?></span> de <span class="Total"><?php echo $quant_total ?></span> cupons</div>
			</li>
		</ul>
	</section>

	<section class="Section Section--texts u-marginVertical--inter--half--px">
		<div class="Section-subSection Section-subSection--descricao u-marginHorizontal--inter">
			<header class="Section-subSection-header">
				<h4 class="Section-subSection-header-title u-paddingBottom--inter--half u-positionRelative u-marginBottom--inter--half">DESCRIÇÃO</h4>
			</header>
			<div class="Section-subSection-content">
				<p class="Section-subSection-content-p u-alignJustify">
					Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo .editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
				</p>
			</div>
		</div>
		<div class="Section-subSection Section-subSection--descricao u-marginTop--inter">
			<header class="Section-subSection-header">
				<h4 class="Section-subSection-header-title u-paddingBottom--inter--half u-positionRelative u-marginBottom--inter--half">REGRAS GERAIS</h4>
			</header>
			<div class="Section-subSection-content">
				<p class="Section-subSection-content-p u-alignJustify">
					Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo .editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
				</p>
			</div>
		</div>
	</section>

	
	<div class="entry-content Section Section--blogTheContent u-alignJustify">
		<?php echo get_the_content(); ?>
	</div>

</article><!-- #post-## -->

<?php 
			endwhile; 
			else:
	 ?>
	 <article class="u-positionRelative">
	
	<header class="entry-header Intro--blog-header u-positionRelative u-marginBottom--inter u-displayBlock u-zIndex9 u-size24of24 u-alignCenter u-paddingVertical">	
			<h2 class="entry-title Intro--blog-title">Nenhuma postagem foi encontrada.</h2>
	</header><!-- .entry-header -->
</article>



<?php endif; ?>
<div class="Relacionados u-paddingTop">
	<?php get_template_part('template-parts/promocoes/section','promocoes'); ?>
</div>
