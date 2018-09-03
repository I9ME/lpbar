
<?php 
			if( !empty($_GET['action']) && isset($_GET['action']) && 'open-modal' === $_GET['action'] ) {

				if( !empty($_GET['email']) && isset($_GET['email']) ){
					$email = $_GET['email'];
				} else {
					$email = '';
				}
?>

<section id="seja-franqueado" class="Section Section--style1 Section--sejaFranqueado u-absoluteTopCenter u-sizeFull">
		
		<header class="Section-header u-marginBottom--inter u-size16of24 u-alignCenterBox u-paddingVertical u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter">
			<h2 class="Section-header-title Section-header-title--beforeTitleLine u-alignCenter u-paddingHorizontal--inter--half u-sizeFull">CONTINUE O SEU <strong>CADASTRO</strong></h2>
			<h3 class="Section-header-subtitle u-alignCenter">Faça parte desse empreendimento de sucesso! Invista em no Barney's e garanta uma das melhores franquias do país!</h3>
		</header>

		<div class="Section-content u-sizeFull u-paddingVertical u-alignCenterBox u-marginTop--inter u-marginBottom">
			<form class="Form Form--style1 Form--rounded u-size12of24 u-sizeFull validate" action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
					<fieldset class="Form-fieldset u-sizeFull u-displayFlex u-flexDirectionColumn">
						<div class="Form-row u-sizeFull u-positionRelative u-displayFlex u-flexDirectionColumn u-flexSwitchRow">
							<div class="mc-field-group Form-coll u-size12of24 u-positionRelative u-marginVertical--inter--half u-marginBottom--inter--half">
								<label class="Form-label u-displayInlineBlock" for="mce-FNAME">Seu Nome<span class="required u-paddingLeft--inter--half--px">*</span></label>
								<i class="FigureIcon u-icon">
					            	<svg class="SocialBar-item-icon u-icon iconUser u-displayInlineBlock is-animating">
										<use xlink:href="#iconUser"></use>
									</svg>
						        </i>
								<input type="text" name="FNAME" id="mce-FNAME" placeholder="Digite o seu nome" class="Form-input Form-input--text u-sizeFull u-borderRadius100 Form-input Form-input--text u-boxShadow required" required="required" />
							</div>
							<div class="mc-field-group Form-coll u-size12of24 u-positionRelative u-marginVertical--inter--half u-marginBottom--inter--half">
								<label class="Form-label u-displayInlineBlock" for="mce-EMAIL">Seu E-mail<span class="required">*</span></label>
							<i class="FigureIcon u-icon">
				            	<svg class="SocialBar-item-icon u-icon iconEmail u-displayInlineBlock is-animating">
									<use xlink:href="#iconEmail"></use>
								</svg>
					        </i>
							<input type="email" name="EMAIL" placeholder="Digite o seu e-mail" value="<?php echo $email; ?>" class="Form-input Form-input--text Form-input Form-input--email u-sizeFull u-borderRadius100 Form-input Form-input--text u-boxShadow required email" required="required" id="mce-EMAIL" />
							</div>
						</div>
						<div class="Form-row u-sizeFull u-positionRelative u-displayFlex u-flexDirectionColumn u-flexSwitchRow">
							<div class="mc-field-group Form-coll u-size8of24 u-positionRelative u-marginVertical--inter--half u-marginBottom--inter--half">
								<label class="Form-label u-displayInlineBlock" for="mce-MMERGE6">Seu Telefone<span class="required u-paddingLeft--inter--half--px">*</span></label>
								<i class="FigureIcon u-icon">
					            	<svg class="SocialBar-item-icon u-icon iconPhone u-displayInlineBlock is-animating">
										<use xlink:href="#iconPhone"></use>
									</svg>
						        </i>
								<input type="tel" placeholder="Digite o seu telefone" class="Form-input Form-input--text u-sizeFull u-borderRadius100 Form-input Form-input--text u-boxShadow required" required="required" name="MMERGE6" id="mce-MMERGE6" />
							</div>
							<div class="mc-field-group Form-coll u-size8of24 u-positionRelative u-marginVertical--inter--half u-marginBottom--inter--half">
								<label class="Form-label u-displayInlineBlock" for="mce-MMERGE7">Modelo de interesse?</label>
								<i class="FigureIcon u-icon">
					            	<svg class="SocialBar-item-icon u-icon iconList u-displayInlineBlock is-animating">
										<use xlink:href="#iconList"></use>
									</svg>
						        </i>
						        <select name="MMERGE7" class="Form-input Form-input--text Form-input--select u-sizeFull u-borderRadius100 Form-input Form-input--text u-boxShadow" id="mce-MMERGE7">
									<option value=""></option>
									<option value="Restaurante">Restaurante</option>
									<option value="Expresso">Expresso</option>

								</select>
							</div>
							<div class="mc-field-group Form-coll u-size8of24 u-positionRelative u-marginVertical--inter--half u-flexSwitchRow u-marginBottom--inter--half">
								<label class="Form-label u-displayInlineBlock" for="mce-MMERGE5">Capital para investimento</label>
								<i class="FigureIcon u-icon">
					            	<svg class="SocialBar-item-icon u-icon iconMoney u-displayInlineBlock is-animating">
										<use xlink:href="#iconMoney"></use>
									</svg>
						        </i>
						        <select name="MMERGE5" class="Form-input Form-input--text Form-input--select u-sizeFull u-borderRadius100 Form-input Form-input--text u-boxShadow" id="mce-MMERGE5">
									<option value=""></option>
									<option value="Abaixo de 400 mil">Abaixo de 400 mil</option>
									<option value="Entre 400 mil e 900 mil">Entre 400 mil e 900 mil</option>
									<option value="Acima de 900 mil">Acima de 900 mil</option>

								</select>
							</div>
						</div>
						<div class="mc-field-group Form-row u-sizeFull u-positionRelative u-displayFlex u-flexDirectionColumn u-flexSwitchRow">
							<div class="Form-coll u-size12of24 u-positionRelative u-marginVertical--inter--half u-marginBottom--inter--half">
								<label class="Form-label u-displayInlineBlock" for="mce-MMERGE2">Como nos conheceu?</label>
								<i class="FigureIcon u-icon">
					            	<svg class="SocialBar-item-icon u-icon iconSearch u-displayInlineBlock is-animating">
										<use xlink:href="#iconSearch"></use>
									</svg>
						        </i>
								<select name="MMERGE2" class="Form-input Form-input--text Form-input--select u-sizeFull u-borderRadius100 Form-input Form-input--text u-boxShadow" id="mce-MMERGE2">
									<option value=""></option>
									<option value="Google">Google</option>
								<option value="Facebook">Facebook</option>
								<option value="Instagram">Instagram</option>
								<option value="Youtube">Youtube</option>
								<option value="Linked In">Linked In</option>
								<option value="Indicação de amigos">Indicação de amigos</option>
								<option value="Rádio/TV">Rádio/TV</option>
								<option value="Feiras/Congressos">Feiras/Congressos</option>
								<option value="Site/Blog">Site/Blog</option>
								<option value="TripAdvisor">TripAdvisor</option>
								<option value="Como consumidor">Como consumidor</option>

									</select>
							</div>
							<div class="mc-field-group Form-coll u-size12of24 u-positionRelative u-marginVertical--inter--half u-marginBottom--inter--half">
								<label class="Form-label u-displayInlineBlock" for="mce-MMERGE3">Sua Cidade<span class="required u-paddingLeft--inter--half--px">*</span></label>
								<i class="FigureIcon u-icon">
					            	<svg class="SocialBar-item-icon u-icon iconCity u-displayInlineBlock is-animating">
										<use xlink:href="#iconCity"></use>
									</svg>
						        </i>
								<input type="text" placeholder="Digite a sua cidade" class="Form-input Form-input--text u-sizeFull u-borderRadius100 Form-input Form-input--text u-boxShadow required" required="required" name="MMERGE3" id="mce-MMERGE3" />
							</div>
						</div>
						
						<!-- <div class="mc-field-group Form-row u-sizeFull u-positionRelative u-flexDirectionColumn u-paddingVertical--inter--half">
							<div class="Form-coll u-sizeFull u-positionRelative u-flexSwitchRow u-marginBottom--inter--half">
								<label class="Form-label u-displayInlineBlock" for="mensage">Observações<span class="required">*</span></label>
								<i class="FigureIcon u-icon">
					            	<svg class="SocialBar-item-icon u-icon iconChat u-displayInlineBlock is-animating">
										<use xlink:href="#iconChat"></use>
									</svg>
						        </i>
								<textarea class="Form-textarea u-sizeFull u-borderRadius5 Form-input Form-input--text u-paddingTop--inter--half u-height3of10 u-boxShadow"></textarea>
							</div>
						</div> -->
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>
						<div style="position: absolute; left: -5000px;" aria-hidden="true">
					    	<input type="text" name="b_013c7607f1ef642ea1ee3653c_8550e63be3" tabindex="-1" value="">
					    </div>  
						<div class="Form-row u-size8of24 u-marginTop--inter--half u-paddingVertical--inter--half u-overflowHidden u-positionRelative u-displayBlock is-animating u-alignCenter u-sizeFull">
							
					        <button type="submit" class="Form-input Form-input--submit Button u-displayInlineFlex is-animating u-borderRadius50 Button--largeSize hover button u-flexAlignItemsCenter u-lineHeight0 u-cursorPointer" name="subscribe" id="mc-embedded-subscribe">
					        	<i class="u-positionRelative u-displayInlineBlock u-marginRight--inter--half--px">
										<svg class="iconHandshake u-icon u-displayInlineBlock">
											<use xlink:href="#iconHandshake"></use>
										</svg>
								</i>
					        	CONCLUIR
					    	</button>
					    
					    </div>
					</fieldset>
				</div>
			</form>

			
		</div>

</section>

<!-- Include JavaScript Mailchimp -->

<?php 
	} else {
?>

<section id="seja-franqueado" class="Section Section--style1 Section--sejaFranqueado u-paddingHorizontal u-positionRelative">
	<div class="u-maxSize--container u-alignCenterBox"><!-- Max Size Container -->
		<header class="Section-header u-marginBottom--inter u-size16of24 u-alignCenterBox u-paddingVertical u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter">
			<figure class="ArabescoTop--color_15 u-displayBlock"></figure>
			<h2 class="Section-header-title Section-header-title--beforeTitleLine u-alignCenter u-paddingHorizontal--inter--half u-sizeFull">SEJA UM <strong>FRANQUEADO BARNEY'S</strong></h2>
			<h3 class="Section-header-subtitle u-alignCenter">Faça parte desse empreendimento de sucesso! Invista no Barney's e garanta uma franquia da hamburgueria mais feliz do Brasil!</h3>
		</header>


		<ul class="Section-items u-displayFlex u-flexWrapWrap">
			<li class="Section-items-item u-size8of24 u-paddingHorizontal--vrt--inter--half--px">
				<div class="Section-items-item-container u-boxShadow--clean--bottom u-paddingHorizontal--vrt--inter--px  u-overflowHidden u-positionRelative u-isScrollFade is-animating--time2">
					<div class="Section-items-item-header u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter">
						<figure class="Section-items-item-figure u-displayInlineBlock FigureIcon FigureIcon--28meses"></figure>
						<p class="Section-items-item-resume u-marginTop--inter--half">
							<span class="u-isOut u-overflowHidden">28 </span>
							<strong>meses</strong> até o <strong>payback</strong>
						</p>
					</div>
					<div class="FigureIcon FigureIcon--CirclesGradient u-displayBlock u-absoluteCenter u-zIndex-1 u-marginHorizontal--inter--half--px u-marginBottom--inter--half--px"></div>
				</div>
			</li>
			<li class="Section-items-item u-size8of24 u-paddingHorizontal--vrt--inter--half--px">
				<div class="Section-items-item-container u-boxShadow--clean--bottom u-paddingHorizontal--vrt--inter--px  u-overflowHidden u-positionRelative u-isScrollFade is-animating--time2">
					<div class="Section-items-item-header u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter">
						<figure class="Section-items-item-figure u-displayInlineBlock FigureIcon FigureIcon--200mil"></figure>
						<p class="Section-items-item-resume u-marginTop--inter--half">
							<span class="u-isOut u-overflowHidden">200 mil </span>
							de <strong>faturamento</strong> mensal
						</p>
					</div>
					<div class="FigureIcon FigureIcon--CirclesGradient u-displayBlock u-absoluteCenter u-zIndex-1 u-marginHorizontal--inter--half--px u-marginBottom--inter--half--px"></div>
				</div>
			</li>
			<li class="Section-items-item u-size8of24 u-paddingHorizontal--vrt--inter--half--px">
				<div class="Section-items-item-container u-boxShadow--clean--bottom u-paddingHorizontal--vrt--inter--px  u-overflowHidden u-positionRelative u-isScrollFade is-animating--time2">
					<div class="Section-items-item-header u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter">
						<figure class="Section-items-item-figure u-displayInlineBlock FigureIcon FigureIcon--80mil"></figure>
						<p class="Section-items-item-resume u-marginTop--inter--half">
							<span class="u-isOut u-overflowHidden">80 mil </span>
							de <strong>capital</strong> de giro
						</p>
					</div>
					<div class="FigureIcon FigureIcon--CirclesGradient u-displayBlock u-absoluteCenter u-zIndex-1 u-marginHorizontal--inter--half--px u-marginBottom--inter--half--px"></div>
				</div>
			</li>
		</ul>

		<div class="Section-content Section-subSection u-size20of24 u-paddingVertical u-marginBottom u-alignCenterBox u-marginTop--inter">
			<div class="Section-subSection-header u-sizeFull u-marginBottom--inter">
				<h3 class="Section-subSection-header-title Section-header-title--beforeTitleLine u-alignCenter u-paddingHorizontal--inter--half u-sizeFull">QUER SABER MAIS SOBRE A <strong>FRANQUIA DO BARNEY’S?</strong></h3>
				<p class="Section-subSection-header-resume u-sizeFull u-alignCenter u-paddingTop--inter--half">
					Solicite um atendimento comercial, agora.
				</p>
			</div>
			<form class="Form Form--style1 Form--rounded u-size12of24 u-sizeFull validate" action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
					<fieldset class="Form-fieldset u-sizeFull u-displayFlex u-flexDirectionColumn">
						<div class="Form-row u-sizeFull u-positionRelative u-displayFlex u-flexDirectionColumn u-flexSwitchRow">
							<div class="mc-field-group Form-coll u-size12of24 u-positionRelative u-marginVertical--inter--half u-marginBottom--inter--half">
								<label class="Form-label u-displayInlineBlock" for="mce-FNAME">Seu Nome<span class="required u-paddingLeft--inter--half--px">*</span></label>
								<i class="FigureIcon u-icon">
					            	<svg class="SocialBar-item-icon u-icon iconUser u-displayInlineBlock is-animating">
										<use xlink:href="#iconUser"></use>
									</svg>
						        </i>
								<input type="text" name="FNAME" id="mce-FNAME" placeholder="Digite o seu nome" class="Form-input Form-input--text u-sizeFull u-borderRadius100 Form-input Form-input--text u-boxShadow required" required="required" />
							</div>
							<div class="mc-field-group Form-coll u-size12of24 u-positionRelative u-marginVertical--inter--half u-marginBottom--inter--half">
								<label class="Form-label u-displayInlineBlock" for="mce-EMAIL">Seu E-mail<span class="required">*</span></label>
							<i class="FigureIcon u-icon">
				            	<svg class="SocialBar-item-icon u-icon iconEmail u-displayInlineBlock is-animating">
									<use xlink:href="#iconEmail"></use>
								</svg>
					        </i>
							<input type="email" name="EMAIL" placeholder="Digite o seu e-mail" class="Form-input Form-input--text Form-input Form-input--email u-sizeFull u-borderRadius100 Form-input Form-input--text u-boxShadow required email" required="required" id="mce-EMAIL" />
							</div>
						</div>
						<div class="Form-row u-sizeFull u-positionRelative u-displayFlex u-flexDirectionColumn u-flexSwitchRow">
							<div class="mc-field-group Form-coll u-size8of24 u-positionRelative u-marginVertical--inter--half u-marginBottom--inter--half">
								<label class="Form-label u-displayInlineBlock" for="mce-MMERGE6">Seu Telefone<span class="required u-paddingLeft--inter--half--px">*</span></label>
								<i class="FigureIcon u-icon">
					            	<svg class="SocialBar-item-icon u-icon iconPhone u-displayInlineBlock is-animating">
										<use xlink:href="#iconPhone"></use>
									</svg>
						        </i>
								<input type="tel" placeholder="Digite o seu telefone" class="Form-input Form-input--text u-sizeFull u-borderRadius100 Form-input Form-input--text u-boxShadow required" required="required" name="MMERGE6" id="mce-MMERGE6" />
							</div>
							<div class="mc-field-group Form-coll u-size8of24 u-positionRelative u-marginVertical--inter--half u-marginBottom--inter--half">
								<label class="Form-label u-displayInlineBlock" for="mce-MMERGE7">Modelo de interesse?</label>
								<i class="FigureIcon u-icon">
					            	<svg class="SocialBar-item-icon u-icon iconList u-displayInlineBlock is-animating">
										<use xlink:href="#iconList"></use>
									</svg>
						        </i>
						        <select name="MMERGE7" class="Form-input Form-input--text Form-input--select u-sizeFull u-borderRadius100 Form-input Form-input--text u-boxShadow" id="mce-MMERGE7">
									<option value=""></option>
									<option value="Restaurante">Restaurante</option>
									<option value="Expresso">Expresso</option>

								</select>
							</div>
							<div class="mc-field-group Form-coll u-size8of24 u-positionRelative u-marginVertical--inter--half u-flexSwitchRow u-marginBottom--inter--half">
								<label class="Form-label u-displayInlineBlock" for="mce-MMERGE5">Capital para investimento</label>
								<i class="FigureIcon u-icon">
					            	<svg class="SocialBar-item-icon u-icon iconMoney u-displayInlineBlock is-animating">
										<use xlink:href="#iconMoney"></use>
									</svg>
						        </i>
						        <select name="MMERGE5" class="Form-input Form-input--text Form-input--select u-sizeFull u-borderRadius100 Form-input Form-input--text u-boxShadow" id="mce-MMERGE5">
									<option value=""></option>
									<option value="Abaixo de 400 mil">Abaixo de 400 mil</option>
									<option value="Entre 400 mil e 900 mil">Entre 400 mil e 900 mil</option>
									<option value="Acima de 900 mil">Acima de 900 mil</option>

								</select>
							</div>
						</div>
						<div class="mc-field-group Form-row u-sizeFull u-positionRelative u-displayFlex u-flexDirectionColumn u-flexSwitchRow">
							<div class="Form-coll u-size12of24 u-positionRelative u-marginVertical--inter--half u-marginBottom--inter--half">
								<label class="Form-label u-displayInlineBlock" for="mce-MMERGE2">Como nos conheceu?</label>
								<i class="FigureIcon u-icon">
					            	<svg class="SocialBar-item-icon u-icon iconSearch u-displayInlineBlock is-animating">
										<use xlink:href="#iconSearch"></use>
									</svg>
						        </i>
								<select name="MMERGE2" class="Form-input Form-input--text Form-input--select u-sizeFull u-borderRadius100 Form-input Form-input--text u-boxShadow" id="mce-MMERGE2">
									<option value=""></option>
									<option value="Google">Google</option>
								<option value="Facebook">Facebook</option>
								<option value="Instagram">Instagram</option>
								<option value="Youtube">Youtube</option>
								<option value="Linked In">Linked In</option>
								<option value="Indicação de amigos">Indicação de amigos</option>
								<option value="Rádio/TV">Rádio/TV</option>
								<option value="Feiras/Congressos">Feiras/Congressos</option>
								<option value="Site/Blog">Site/Blog</option>
								<option value="TripAdvisor">TripAdvisor</option>
								<option value="Como consumidor">Como consumidor</option>

									</select>
							</div>
							<div class="mc-field-group Form-coll u-size12of24 u-positionRelative u-marginVertical--inter--half u-marginBottom--inter--half">
								<label class="Form-label u-displayInlineBlock" for="mce-MMERGE3">Sua Cidade<span class="required u-paddingLeft--inter--half--px">*</span></label>
								<i class="FigureIcon u-icon">
					            	<svg class="SocialBar-item-icon u-icon iconCity u-displayInlineBlock is-animating">
										<use xlink:href="#iconCity"></use>
									</svg>
						        </i>
								<input type="text" placeholder="Digite a sua cidade" class="Form-input Form-input--text u-sizeFull u-borderRadius100 Form-input Form-input--text u-boxShadow required" required="required" name="MMERGE3" id="mce-MMERGE3" />
							</div>
						</div>
						
						<!-- <div class="mc-field-group Form-row u-sizeFull u-positionRelative u-flexDirectionColumn u-paddingVertical--inter--half">
							<div class="Form-coll u-sizeFull u-positionRelative u-flexSwitchRow u-marginBottom--inter--half">
								<label class="Form-label u-displayInlineBlock" for="mensage">Observações<span class="required">*</span></label>
								<i class="FigureIcon u-icon">
					            	<svg class="SocialBar-item-icon u-icon iconChat u-displayInlineBlock is-animating">
										<use xlink:href="#iconChat"></use>
									</svg>
						        </i>
								<textarea class="Form-textarea u-sizeFull u-borderRadius5 Form-input Form-input--text u-paddingTop--inter--half u-height3of10 u-boxShadow"></textarea>
							</div>
						</div> -->
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>
						<div style="position: absolute; left: -5000px;" aria-hidden="true">
					    	<input type="text" name="b_013c7607f1ef642ea1ee3653c_8550e63be3" tabindex="-1" value="">
					    </div>  
						<div class="Form-row u-size8of24 u-marginTop--inter--half u-paddingVertical--inter--half u-overflowHidden u-positionRelative u-displayBlock is-animating u-alignCenter u-sizeFull">
							
					        <button type="submit" class="Form-input Form-input--submit Button u-displayInlineFlex is-animating u-borderRadius50 Button--largeSize hover button u-flexAlignItemsCenter u-lineHeight0 u-cursorPointer" name="subscribe" id="mc-embedded-subscribe">
					        	<i class="u-positionRelative u-displayInlineBlock u-marginRight--inter--half--px">
										<svg class="iconHandshake u-icon u-displayInlineBlock">
											<use xlink:href="#iconHandshake"></use>
										</svg>
								</i>
					        	CONCLUIR
					    	</button>
					    
					    </div>
					</fieldset>
				</div>
			</form>
		</div> <!-- .Section-content -->
	</div>

		<figure class="FigureIcon ImgFigure--circle--lg ImgFigure--left u-displayBlock u-positionAbsolute u-opacity30 u-zIndex-1 is-animating--time2" data-paroller-factor="0.25" data-paroller-type="foreground" data-paroller-direction="vertical"></figure>
			
		<figure class="FigureIcon ImgFigure--flyer--vert ImgFigure--right u-displayBlock u-positionAbsolute u-zIndex-1 is-animating--time2" data-paroller-factor="1.0" data-paroller-type="foreground" data-paroller-direction="vertical"></figure>


		<figure class="FigureIcon ImgFigure--flyer--biColor ImgFigure--left u-opacity100 u-displayBlock u-positionAbsolute u-zIndex3 is-animating--time2 u-onlyDesktop" data-paroller-factor="2" data-paroller-type="foreground" data-paroller-direction="vertical"></figure>

		<figure class="FigureIcon ImgFigure--circle--sm ImgFigure--leftCenter  u-opacity80 u-displayBlock u-positionAbsolute u-zIndex-1 is-animating--time2" data-paroller-factor="1.0" data-paroller-type="foreground" data-paroller-direction="vertical"></figure>

	<figure class="imageBg--radius u-displayBlock u-absoluteCenter u-zIndex-1 u-onlyDesktop"></figure>
</section>

<?php } ?>