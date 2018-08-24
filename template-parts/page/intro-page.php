<?php if( is_home() || is_front_page() ) { ?>
<section id="up" class="Section--intro Intro Intro--home Section--style1 u-positionRelative">

	<div class="Captions u-positionAbsolute u-zIndex2 u-displayFlex u-flexJustifyContentCenter u-size9of24 u-flexDirectionColumn u-flexAlignItemsCenter">	
		<figure class="ArabescoTop--intro"></figure>
			<h1 class="Captions-title u-alignCenter">
				<span class="Captions-title--line1 u-displayBlock u-sizeFull"><strong>Empreenda</strong> junto com a</span>
				<em class="Captions-title--line2 u-displayBlock U-sizeFull u-marginTop--inter--half u-lineHeight0">
					<span class="u-isHiddenVisually">VIGNOLI</span>
					<figure class="Intro--nameVignoli u-displayInlineBlock"></figure>
				</em>
				<span class="Captions-title--line3 u-displayBlock u-sizeFull">Seja um dos nossos <strong>franqueados</strong></span>
			</h1>
			<form class="Form Form--style2 Form--modal Form--modal--franqueado u-marginTop--inter--half u-sizeFull" action="javascript:LightboxCall('<?php echo get_home_url(); ?>/form-franqueado/?action=open-modal','modal');">
				<div class="u-displayFlex U-sizeFull  u-flexAlignItemsCenter u-flexDirectionColumn">
					<div class="borderBox--gadient u-displayBlock"></div>
				</div>
				<fieldset class="Form-fieldset">
					<div class="Form-row u-positionRelative Form-row--email u-displayFlex u-flexDirectionRow u-flexJustifyContentCenter u-flexAlignItemsCenter u-sizeFull">
						<div class="Form-coll u-displayFlex u-flexAlignItemsCenter">
							<i class="u-icon">
								<svg class="u-icon iconEnvelope u-displayInlineBlock is-animating">
									<use xlink:href="#iconEnvelope"></use>
								</svg>
							</i>
							<input id="InputEmail" class="Form-input Form-input--text Form-input--email" type="text" name="email" placeholder="Digite seu e-mail" />
						</div>
						<div class="Form-coll Submit">
							<input class="Form-input Form-input--submit u-cursorPointer Button u-zIndex2 u-paddingRight" type="submit" value="INICIAR" />

							<span class="Form-input Form-input--bg Button u-borderRadius5 u-zIndex1 u-displayFlex u-flexAlignItemsCenter u-flexJustifyContentFlexEnd u-paddingRight is-animating">
								<i class="u-icon u-marginRight">
									<svg class="u-icon iconArrowRightLine u-displayInlineBlock is-animating">
										<use xlink:href="#iconArrowRightLine"></use>
									</svg>
								</i>
							</span>

							<span class="Form-input Form-input--bg Form-input--bg--hover Button u-borderRadius5 u-zIndex1 u-displayFlex u-flexAlignItemsCenter u-flexJustifyContentFlexEnd u-paddingRight is-animating">
								<i class="u-icon u-marginRight">
									<svg class="u-icon iconArrowRightLine u-displayInlineBlock is-animating">
										<use xlink:href="#iconArrowRightLine"></use>
									</svg>
								</i>
							</span>

						</div>

					</div>
				</fieldset>
				<div class="u-displayFlex U-sizeFull  u-flexAlignItemsCenter u-flexDirectionColumn">
					<div class="borderBox--gadient u-displayBlock"></div>
					<div class="ShadowBox--bottom u-displayBlock"></div>
				</div>
			</form>
		<figure class="ArabescoBottom--bottom"></figure>
	</div>

	<?php if( wp_is_mobile() ) { ?>
	<div class="Flatlays u-positionAbsolute u-onlyMobile">	
		<figure class="Flatlay Flatlay--tomate1 u-zIndex1" data-paroller-factor="-0.20" data-paroller-type="foreground" data-paroller-direction="horizontal"></figure>
		<figure class="Flatlay Flatlay--tomate2 u-zIndex1" data-paroller-factor="0.20" data-paroller-type="foreground" data-paroller-direction="horizontal"></figure>
		
		<figure class="Flatlay Flatlay--colher u-zIndex1" data-paroller-factor="-0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"></figure>
		<figure class="Flatlay Flatlay--ramo u-zIndex1" data-paroller-factor="0.20" data-paroller-type="foreground" data-paroller-direction="horizontal"></figure>
	</div>

	<?php } else { ?>
	<div class="Flatlays u-positionAbsolute u-onlyDesktop">
		<figure class="Flatlay Flatlay--folha1 u-zIndex5" data-paroller-factor="1.5" data-paroller-type="foreground" data-paroller-direction="vertical"vertical"></figure>
		<figure class="Flatlay Flatlay--tomate1 u-zIndex1" data-paroller-factor="0.15" data-paroller-type="foreground" data-paroller-direction="vertical"></figure>
		<figure class="Flatlay Flatlay--tomate2 u-zIndex1" data-paroller-factor="-0.35" data-paroller-type="foreground" data-paroller-direction="vertical"></figure>
		<figure class="Flatlay Flatlay--azeite u-zIndex1" data-paroller-factor="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"></figure>
		<figure class="Flatlay Flatlay--colher u-zIndex1" data-paroller-factor="-0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"></figure>
		<figure class="Flatlay Flatlay--ramo u-zIndex1" data-paroller-factor="-0.3" data-paroller-type="foreground" data-paroller-direction="vertical"></figure>
		<figure class="Flatlay Flatlay--folha2 u-zIndex1" data-paroller-factor="1.5" data-paroller-type="foreground" data-paroller-direction="vertical"></figure>
	</div>
	<?php } ?>



</section>



<?php } else { ?>

<section class="Section--intro Intro Intro--page u-positionRelative u-flex u-flexDirectionColumn u-flexAlignItemsCenter u-flexJustifyContentCenter u-paddingVertical">
</section>

<?php } ?>
