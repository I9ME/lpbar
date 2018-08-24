<?php if( is_home() || is_front_page() ) { ?>
<section id="up" class="Section--intro Intro Intro--home Section--style1 u-positionRelative">

	<div class="Captions u-positionAbsolute u-zIndex2 u-displayFlex u-flexJustifyContentCenter u-size9of24 u-flexDirectionColumn u-flexAlignItemsCenter">	
	<figure class="ArabescoTop--intro"></figure>
		<h1 class="Captions--title u-alignCenter">
			<span class="u-displayBlock U-sizeFull"><strong>Empreenda</strong> junto com a</span>
			<em class="u-displayBlock U-sizeFull u-marginTop--inter--half u-lineHeight0">
				<span class="u-isHiddenVisually">VIGNOLI</span>
				<figure class="Intro--nameVignoli u-displayInlineBlock"></figure>
			</em>
			<span class="u-displayBlock U-sizeFull">Seja um dos nossos <strong>franqueados</strong></span>
		</h1>
		<form class="Form Form--style1 u-marginTop--inter--half" action="<?php echo get_home_url(); ?>">
			<fieldset class="Form-fieldset">
				<div class="Form-row">
					<i class="u-icon">
						<svg class="u-icon iconEnvelope u-displayInlineBlock is-animating">
							<use xlink:href="#iconEnvelope"></use>
						</svg>
					</i>
					<input type="text" name="email" placeholder="Digite o seu e-mail" />
				</div>
			</fieldset>
			
		</form>
	<figure class="ArabescoBottom--bottom u-marginTop--inter--half"></figure>
	</div>

	<div class="Flatlays u-positionAbsolute">
		<figure class="Flatlay Flatlay--folha1" data-paroller-factor="-0.15" data-paroller-type="foreground" data-paroller-direction="vertical"></figure>
		<figure class="Flatlay Flatlay--tomate1" data-paroller-factor="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"></figure>
		<figure class="Flatlay Flatlay--tomate2" data-paroller-factor="-0.15" data-paroller-type="foreground" data-paroller-direction="vertical"></figure>
		<figure class="Flatlay Flatlay--azeite" data-paroller-factor="-0.15" data-paroller-type="foreground" data-paroller-direction="horizontal"></figure>
		<figure class="Flatlay Flatlay--colher" data-paroller-factor="-0.25" data-paroller-type="foreground" data-paroller-direction="vertical"></figure>
		<figure class="Flatlay Flatlay--ramo" data-paroller-factor="-0.15" data-paroller-type="foreground" data-paroller-direction="vertical"></figure>
		<figure class="Flatlay Flatlay--folha2" data-paroller-factor="0.05" data-paroller-type="foreground" data-paroller-direction="vertical"></figure>

</section>



<?php } else { ?>

<section class="Section--intro Intro Intro--page u-positionRelative u-flex u-flexDirectionColumn u-flexAlignItemsCenter u-flexJustifyContentCenter u-paddingVertical">
</section>

<?php } ?>
