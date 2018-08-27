<?php if( is_home() || is_front_page() ) { ?>
<section id="up" class="Section--intro Intro Intro--home Section--style1 u-positionRelative">

	<div class="Captions u-positionAbsolute u-zIndex2 u-displayFlex u-flexJustifyContentCenter u-size9of24 u-flexDirectionColumn u-flexAlignItemsCenter">	
			<h1 class="Captions-title u-alignCenter">
				<span class="Captions-title--line1 u-displayBlock u-sizeFull">Tem fome de</span>
				<em class="Captions-title--line2 u-displayBlock u-sizeFull u-lineHeightNormal">
					<strong>#empreender?</strong>
				</em>
				<span class="Captions-title--line3 u-displayBlock u-marginTop--inter--half u-sizeFull">Seja um franqueado <br /><strong>Barney's!</strong></span>
			</h1>
			<form class="Form Form--style2 Form--modal Form--modal--franqueado u-marginTop--inter u-sizeFull" action="javascript:LightboxCall('<?php echo get_home_url(); ?>/form-franqueado/?action=open-modal','modal');">
				<div class="u-displayFlex U-sizeFull  u-flexAlignItemsCenter u-flexDirectionColumn">
					<div class="borderBox--gadient u-displayBlock"></div>
				</div>
				<fieldset class="Form-fieldset u-alignCenter">
					<div class="Form-row u-positionRelative Form-row--email u-displayInlineFlex u-flexDirectionRow u-flexJustifyContentCenter u-flexAlignItemsCenter">
						<div class="Form-coll u-displayFlex u-flexAlignItemsCenter">
							<i class="u-icon">
								<svg class="u-icon iconEnvelope u-displayInlineBlock is-animating">
									<use xlink:href="#iconEnvelope"></use>
								</svg>
							</i>
							<input id="InputEmail" class="Form-input Form-input--text Form-input--email" type="text" name="email" placeholder="Digite seu e-mail" />
						</div>
						<div class="Form-coll Submit u-alignLeft">
							<input class="Form-input Form-input--submit u-cursorPointer Button u-zIndex2 u-paddingRight u-borderRadius50" type="submit" value="INICIAR" />

							<span class="Form-input Form-input--bg Button u-borderRadius50 u-zIndex1 u-displayFlex u-flexAlignItemsCenter u-flexJustifyContentFlexEnd u-paddingRight is-animating">
								<i class="u-icon u-marginRight">
									<svg class="u-icon iconArrowRightLine u-displayInlineBlock is-animating">
										<use xlink:href="#iconArrowRightLine"></use>
									</svg>
								</i>
							</span>

							<span class="Form-input Form-input--bg Form-input--bg--hover Button u-borderRadius50 u-zIndex1 u-displayFlex u-flexAlignItemsCenter u-flexJustifyContentFlexEnd u-paddingRight is-animating">
								<i class="u-icon u-marginRight">
									<svg class="u-icon iconArrowRightLine u-displayInlineBlock is-animating">
										<use xlink:href="#iconArrowRightLine"></use>
									</svg>
								</i>
							</span>

						</div>

					</div>
				</fieldset>
			</form>
	</div>
	<div class="Intro--home-imageMain u-absoluteTopLeft u-sizeFull u-zIndex0">
		<figure class="Layer Layer--before is-animating">
			<img class="Layer-image Layer-image--marcelo" src="<?php echo get_template_directory_uri(); ?>/assets/images/foto-marcelo-pimentel-barneys-burger.png" alt="Marcelo Pimentel" />
		</figure>
		<figure class="Layer Layer--after is-animating">
			<figure class="u-displayBlock LogoBase"></figure>
		</figure>
	</div>

</section>



<?php } else { ?>

<section class="Section--intro Intro Intro--page u-positionRelative u-flex u-flexDirectionColumn u-flexAlignItemsCenter u-flexJustifyContentCenter u-paddingVertical">
</section>

<?php } ?>
