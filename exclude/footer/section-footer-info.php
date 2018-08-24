
<section class="Section Section--style1 Section--footerInfo u-paddingVertical u-paddingHorizontal--inter">

	<div class="Section-container u-displayFlex u-sizeFull u-positionRelative u-marginBottom--inter">
		<?php get_template_part('template-parts/page/socialmedia','bar'); ?>
	</div>

	<div class="Section-container u-displayFlex u-flexJustifyContentCenter u-sizeFull u-positionRelative u-marginBottom">
		<?php  get_template_part('template-parts/header/header','branding');?>
	</div>


	<div class="u-maxSize--container u-alignCenterBox u-displayFlex u-flexDirectionColumn u-flexSwitchRow">


		<div class="Section-subSection Section-subSection--bio u-size8of24 u-marginBottom--inter--half">
			<p class="u-alignCenter">
				© Pizza Vignoli <?php echo get_the_date('Y') ?>.<br/>
				Todos os direitos Resevados.
			</p>
		</div>
		<div class="Section-subSection Section-subSection--contact u-size10of24 u-marginBottom--inter u-displayFlex u-flexJustifyContentCenter">
			<p class="u-displayFlex u-flexDirectionRow u-flexAlignItemsCenter u-flexJustifyContentCenter">
				<i><svg class="SocialBar-item-icon u-icon iconEnvelope u-displayInlineBlock">
						<use xlink:href="#iconEnvelope"></use>
					</svg>
				</i>
				<span class="u-marginLeft--inter--half--px">contato@pizzavignoli.com.br</span></p>
		</div>
		<div class="Section-subSection Section-subSection--author u-size6of24 u-alignCenter">
			<a href="https://www.i9me.com.br" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-i9me-web-design.png" title="I9ME WEB & DESIGN" alt="I9ME WEB & DESIGN" /></a>
		</div>
	</div> <!-- Max Size Container -->
</section>