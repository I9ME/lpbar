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
<section class="Section Section--search Section--style1 LineUp u-paddingHorizontal--vrt--inter--px u-boxShadow u-size24of24 u-marginBottom--inter u-positionRelative u-displayFlex u-flexDirectionColumn">
	<header class="Section-header u-flex u-flexDirectionRow u-marginBottom--inter--half u-flexJustifyContentCenter">
		<i class="u-inlineFlex">
			<svg class="iconEnvelope u-icon is-animating">
				<use xlink:href="#iconEnvelope"></use>
			</svg>
		</i>
		<h3 class="Section-header-title u-lineHeight100 u-paddingLeft--inter--half">PESQUISAR</h3>
	</header>
	<div class="Section-content u-alignCenter">
		<?php get_template_part('template-parts/sidebar/blog','search-form');?>
	</div>
</section>
<section class="Section Section--newsletter Section--style1 LineUp u-paddingHorizontal--vrt--inter--px u-boxShadow u-size24of24 u-marginBottom--inter u-positionRelative u-displayFlex u-flexDirectionColumn">
	<header class="Section-header u-flex u-flexDirectionRow u-marginBottom--inter--half u-flexJustifyContentCenter">
		<i class="u-inlineFlex">
			<svg class="iconBooks u-icon is-animating">
				<use xlink:href="#iconBooks"></use>
			</svg>
		</i>
		<h3 class="Section-header-title u-lineHeight100 u-paddingLeft--inter--half">CATEGORIAS</h3>
	</header>
	<div class="Section-content u-alignCenter">
		<?php get_template_part('template-parts/sidebar/blog','categorias');?>
	</div>
</section>


<section class="Section Section--newsletter Section--style1 LineUp u-paddingHorizontal--vrt--inter--px u-boxShadow u-size24of24 u-marginBottom--inter u-positionRelative u-displayFlex u-flexDirectionColumn">
	<header class="Section-header u-flex u-flexDirectionRow u-marginBottom--inter--half u-flexJustifyContentCenter">
		<i class="u-inlineFlex">
			<svg class="iconArchive u-icon is-animating">
				<use xlink:href="#iconArchive"></use>
			</svg>
		</i>
		<h3 class="Section-header-title u-lineHeight100 u-paddingLeft--inter--half">ARQUIVO</h3>
	</header>
	<div class="Section-content u-alignCenter">
		<?php get_template_part('template-parts/sidebar/blog','arquivo');?>
	</div>
</section>


<section class="Section Section--newsletter Section--style1 LineUp u-paddingHorizontal--vrt--inter--px u-boxShadow u-size24of24 u-marginBottom--inter u-positionRelative u-displayFlex u-flexDirectionColumn">
	<header class="Section-header u-flex u-flexDirectionRow u-marginBottom--inter--half u-flexJustifyContentCenter">
		<i class="u-inlineFlex">
			<svg class="iconComment u-icon is-animating">
				<use xlink:href="#iconComment"></use>
			</svg>
		</i>
		<h3 class="Section-header-title u-lineHeight100 u-paddingLeft--inter--half">COMENTÁRIOS</h3>
	</header>
	<div class="Section-content u-alignCenter">
		<?php get_template_part('template-parts/sidebar/blog','comentarios');?>
	</div>
</section>	

<section class="Section Section--newsletter Section--style1 LineUp u-paddingHorizontal--vrt--inter--px u-boxShadow u-size24of24 u-marginBottom--inter u-positionRelative u-displayFlex u-flexDirectionColumn">
	<header class="Section-header u-flex u-flexDirectionRow u-marginBottom--inter--half u-flexJustifyContentCenter">
		<i class="u-inlineFlex">
			<svg class="iconEnvelope u-icon is-animating">
				<use xlink:href="#iconEnvelope"></use>
			</svg>
		</i>
		<h3 class="Section-header-title u-lineHeight100 u-paddingLeft--inter--half">NEWSLETTER</h3>
	</header>
	<div class="Section-content u-alignCenter">
		<?php get_template_part('template-parts/forms/form','newsletter');?>
	</div>
</section>