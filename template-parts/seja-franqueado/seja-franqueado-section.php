
<!-- <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css"> -->
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<?php 
			if( !empty($_GET['action']) && isset($_GET['action']) && 'open-modal' === $_GET['action'] ) {

				if( !empty($_GET['email']) && isset($_GET['email']) ){
					$email = $_GET['email'];
				}
?>

<section id="seja-franqueado" class="Section Section--style1 Section--sejaFranqueado u-absoluteTopCenter u-sizeFull">
		
		<header class="Section-header u-marginBottom--inter u-size16of24 u-alignCenterBox u-paddingVertical u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter">
			<h2 class="Section-header-title Section-header-title--beforeTitleLine u-alignCenter u-paddingHorizontal--inter--half u-sizeFull">CONTINUE O SEU <strong>CADASTRO</strong></h2>
			<h3 class="Section-header-subtitle u-alignCenter">Faça parte desse empreendimento de sucesso! Invista em na Vignoli e garanta uma das melhores franquias de pizzaria do país!</h3>
		</header>

		<div class="Section-content u-sizeFull u-paddingVertical u-alignCenterBox u-marginTop--inter u-marginBottom">
			<form class="Form Form--style1 u-size12of24 u-sizeFull validate" action="https://pizzavignoli.us17.list-manage.com/subscribe/post?u=013c7607f1ef642ea1ee3653c&amp;id=8550e63be3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
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
							<input type="text" name="FNAME" id="mce-FNAME" placeholder="Digite o seu nome" class="Form-input Form-input--text u-sizeFull u-borderRadius5 Form-input Form-input--text u-boxShadow required" required="required" />
						</div>
						<div class="mc-field-group Form-coll u-size12of24 u-positionRelative u-marginVertical--inter--half u-marginBottom--inter--half">
							<label class="Form-label u-displayInlineBlock" for="mce-EMAIL">Seu E-mail<span class="required">*</span></label>
						<i class="FigureIcon u-icon">
			            	<svg class="SocialBar-item-icon u-icon iconEmail u-displayInlineBlock is-animating">
								<use xlink:href="#iconEmail"></use>
							</svg>
				        </i>
						<input type="email" value="<?php echo $email; ?>" name="EMAIL" placeholder="Digite o seu e-mail" class="Form-input Form-input--text Form-input Form-input--email u-sizeFull u-borderRadius5 Form-input Form-input--text u-boxShadow required email" required="required" id="mce-EMAIL" />
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
							<input type="tel" placeholder="Digite o seu telefone" class="Form-input Form-input--text u-sizeFull u-borderRadius5 Form-input Form-input--text u-boxShadow required" required="required" name="MMERGE6" id="mce-MMERGE6" />
						</div>
						<div class="mc-field-group Form-coll u-size8of24 u-positionRelative u-marginVertical--inter--half u-marginBottom--inter--half">
							<label class="Form-label u-displayInlineBlock" for="mce-MMERGE7">Modelo de interesse?</label>
							<i class="FigureIcon u-icon">
				            	<svg class="SocialBar-item-icon u-icon iconList u-displayInlineBlock is-animating">
									<use xlink:href="#iconList"></use>
								</svg>
					        </i>
					        <select name="MMERGE7" class="Form-input Form-input--text Form-input--select u-sizeFull u-borderRadius5 Form-input Form-input--text u-boxShadow" id="mce-MMERGE7">
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
					        <select name="MMERGE5" class="Form-input Form-input--text Form-input--select u-sizeFull u-borderRadius5 Form-input Form-input--text u-boxShadow" id="mce-MMERGE5">
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
							<select name="MMERGE2" class="Form-input Form-input--text Form-input--select u-sizeFull u-borderRadius5 Form-input Form-input--text u-boxShadow" id="mce-MMERGE2">
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
							<input type="text" placeholder="Digite a sua cidade" class="Form-input Form-input--text u-sizeFull u-borderRadius5 Form-input Form-input--text u-boxShadow required" required="required" name="MMERGE3" id="mce-MMERGE3" />
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
				        <input type="submit" class="Form-input Form-input--submit Button u-sizeFull u-displayInlineBlock is-animating u-borderRadius5 Button--mediumSize hover button" name="subscribe" id="mc-embedded-subscribe" value="CONCLUIR" />
				    </div>
				</fieldset>
			</div>
			</form>

			
		</div>

</section>

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
<script type='text/javascript'>
(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[6]='MMERGE6';ftypes[6]='phone';fnames[3]='MMERGE3';ftypes[3]='text';fnames[2]='MMERGE2';ftypes[2]='dropdown';fnames[7]='MMERGE7';ftypes[7]='dropdown';fnames[5]='MMERGE5';ftypes[5]='dropdown'; /**
 * Translated default messages for the $ validation plugin.
 * Locale: PT_PT
 */
$.extend($.validator.messages, {
	required: "Campo de preenchimento obrigat&oacute;rio.",
	remote: "Por favor, corrija este campo.",
	email: "Por favor, introduza um endere&ccedil;o eletr&oacute;nico v&aacute;lido.",
	url: "Por favor, introduza um URL v&aacute;lido.",
	date: "Por favor, introduza uma data v&aacute;lida.",
	dateISO: "Por favor, introduza uma data v&aacute;lida (ISO).",
	number: "Por favor, introduza um n&uacute;mero v&aacute;lido.",
	digits: "Por favor, introduza apenas d&iacute;gitos.",
	creditcard: "Por favor, introduza um n&uacute;mero de cart&atilde;o de cr&eacute;dito v&aacute;lido.",
	equalTo: "Por favor, introduza de novo o mesmo valor.",
	accept: "Por favor, introduza um ficheiro com uma extens&atilde;o v&aacute;lida.",
	maxlength: $.validator.format("Por favor, n&atilde;o introduza mais do que {0} caracteres."),
	minlength: $.validator.format("Por favor, introduza pelo menos {0} caracteres."),
	rangelength: $.validator.format("Por favor, introduza entre {0} e {1} caracteres."),
	range: $.validator.format("Por favor, introduza um valor entre {0} e {1}."),
	max: $.validator.format("Por favor, introduza um valor menor ou igual a {0}."),
	min: $.validator.format("Por favor, introduza um valor maior ou igual a {0}.")
});}(jQuery));var $mcj = jQuery.noConflict(true);
</script>
<!--End mc_embed_signup-->
<?php 
	} else {
?>

<section id="seja-franqueado" class="Section Section--style1 Section--sejaFranqueado u-paddingHorizontal">
	<div class="u-maxSize--container u-alignCenterBox"><!-- Max Size Container -->
		<header class="Section-header u-marginBottom--inter u-size16of24 u-alignCenterBox u-paddingVertical u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter">
			<figure class="ArabescoTop--color_15 u-displayBlock"></figure>
			<h2 class="Section-header-title Section-header-title--beforeTitleLine u-alignCenter u-paddingHorizontal--inter--half u-sizeFull">SEJA UM <strong>FRANQUEADO VIGNOLI</strong></h2>
			<h3 class="Section-header-subtitle u-alignCenter">Faça parte desse empreendimento de sucesso! Invista em na Vignoli e garanta uma das melhores franquias de pizzaria do país!</h3>
		</header>		
		<div class="Section-content u-size18of24 u-paddingVertical u-alignCenterBox u-marginTop">
			<form class="Form Form--style1 u-size12of24 u-sizeFull validate" action="https://pizzavignoli.us17.list-manage.com/subscribe/post?u=013c7607f1ef642ea1ee3653c&amp;id=8550e63be3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
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
							<input type="text" name="FNAME" id="mce-FNAME" placeholder="Digite o seu nome" class="Form-input Form-input--text u-sizeFull u-borderRadius5 Form-input Form-input--text u-boxShadow required" required="required" />
						</div>
						<div class="mc-field-group Form-coll u-size12of24 u-positionRelative u-marginVertical--inter--half u-marginBottom--inter--half">
							<label class="Form-label u-displayInlineBlock" for="mce-EMAIL">Seu E-mail<span class="required">*</span></label>
						<i class="FigureIcon u-icon">
			            	<svg class="SocialBar-item-icon u-icon iconEmail u-displayInlineBlock is-animating">
								<use xlink:href="#iconEmail"></use>
							</svg>
				        </i>
						<input type="email" value="<?php echo $email; ?>" name="EMAIL" placeholder="Digite o seu e-mail" class="Form-input Form-input--text Form-input Form-input--email u-sizeFull u-borderRadius5 Form-input Form-input--text u-boxShadow required email" required="required" id="mce-EMAIL" />
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
							<input type="tel" placeholder="Digite o seu telefone" class="Form-input Form-input--text u-sizeFull u-borderRadius5 Form-input Form-input--text u-boxShadow required" required="required" name="MMERGE6" id="mce-MMERGE6" />
						</div>
						<div class="mc-field-group Form-coll u-size8of24 u-positionRelative u-marginVertical--inter--half u-marginBottom--inter--half">
							<label class="Form-label u-displayInlineBlock" for="mce-MMERGE7">Modelo de interesse?</label>
							<i class="FigureIcon u-icon">
				            	<svg class="SocialBar-item-icon u-icon iconList u-displayInlineBlock is-animating">
									<use xlink:href="#iconList"></use>
								</svg>
					        </i>
					        <select name="MMERGE7" class="Form-input Form-input--text Form-input--select u-sizeFull u-borderRadius5 Form-input Form-input--text u-boxShadow" id="mce-MMERGE7">
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
					        <select name="MMERGE5" class="Form-input Form-input--text Form-input--select u-sizeFull u-borderRadius5 Form-input Form-input--text u-boxShadow" id="mce-MMERGE5">
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
							<select name="MMERGE2" class="Form-input Form-input--text Form-input--select u-sizeFull u-borderRadius5 Form-input Form-input--text u-boxShadow" id="mce-MMERGE2">
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
							<input type="text" placeholder="Digite a sua cidade" class="Form-input Form-input--text u-sizeFull u-borderRadius5 Form-input Form-input--text u-boxShadow required" required="required" name="MMERGE3" id="mce-MMERGE3" />
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
				        <input type="submit" class="Form-input Form-input--submit Button u-sizeFull u-displayInlineBlock is-animating u-borderRadius5 Button--mediumSize hover button" name="subscribe" id="mc-embedded-subscribe" value="CONCLUIR" />
				    </div>
				</fieldset>
			</div>
			</form>

			
		</div>

			
		</div>
			
	</div>

</section>

<?php } ?>