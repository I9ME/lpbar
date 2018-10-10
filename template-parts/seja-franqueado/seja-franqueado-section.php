
        <script type="text/javascript" src="https://kickoff.solutto.com.br/js/jquery/jquery.validate.1.11.1.customizado.min.js"></script>
        <script type="text/javascript" src="https://kickoff.solutto.com.br/js/jquery/jquery.mask.min.js"></script>
 <script type="text/javascript">
            var cidades = [];
           window.getParameterByName = function(name) {
               name = name.replace(/[[]/, "\[").replace(/[]]/, "\]");
               var regexS = "[\?&]" + name + "=([^&#]*)";
               var regex = new RegExp(regexS);
               var results = regex.exec(window.location.href);
               if (results == null) return "";
               else return decodeURIComponent(results[1].replace(/\+/g, " "));
            }
            $(document).ready(function () {
                   if(getParameterByName("erroID") != ""){
                       document.getElementById("divMessage").style.display = "";
                       document.getElementById("divErro").innerHTML = "&nbsp; &nbsp;" + getParameterByName("erroID");
                   }
                

                var $form = $("form");
                $form.validate({
                    highlight: function (element) {
                        $(element).closest(".form-group").addClass("has-error");
                    },
                    unhighlight: function (element) {
                        $(element).closest(".form-group").removeClass("has-error");
                    },
                    errorElement: "span",
                    errorClass: "help-block"
                });



                $.each($("input[data-mask]"), function (i, o) {
                    var $o = $(o),
                        reverse = (($o.attr("data-mask-reverse") == "true") ? true : false);
                    $o.mask($o.attr("data-mask"), {
                        reverse: reverse
                    });
                    delete $o;
                });
                
                 $('#Pais').change(function(){

                    var $cidade = $('#ddlCidade');
                    var $divCidade = $cidade.closest('div.form-group');
                    var $estado = $('#Estado');
                    var paisSelecionado = $('#Pais').val();

                    if (paisSelecionado == null || paisSelecionado == '' || paisSelecionado == 'BR'){
                        $divCidade.show();
                        $estado.removeAttr('disabled')
                       
                   $("#Estado option[value='EX']").remove();

                     $estado.val('');

                    } else{
                        $divCidade.hide();
                        $estado.append("<option value='EX'>EX</option>");
                        $estado.val('EX');
                        $estado.attr('disabled', 'disabled');
                    }

                    $cidade = $estado = $divCidade = null;
                });


                var cidades = [];
                $('#Estado').change(function(){
                    var $cidade = $('#ddlCidade');
                    var $hdnCidade = $('#Cidade');
                    var $hdnCidadeIntere = $('input:hidden#cidade_interesse_1')
                    var $estado = $(this);
                    
                    if($hdnCidade.length > 0) $hdnCidade.val('');
                    if($hdnCidadeIntere.length > 0) $hdnCidadeIntere.val('');
                    
                    populaEstadoCidades($estado, $cidade);
                    $cidade = $hdnCidade = $estado = null;

                });

                $('#ddlEstadoInteresse').change(function(){
                    var $cidades = $('.cidade-interesse');
					var $ocultos = $cidades.filter(":hidden");
                    var $btnAdicionar = $('#btnAdicionarCidadeInteresse')
                    if(this.value == ''){
                        limpaCidades($cidades);
                        if($btnAdicionar.length == 0) $btnAdicionar.addClass('hide');
						$cidades.addClass('hide');
						return;
                    }
					if ($ocultos.length > 0){
						if($btnAdicionar.length > 0) $btnAdicionar.removeClass('hide');

					}
                    
					$cidades.first().removeClass('hide');
					
                    populaEstadoCidades($(this), $cidades);
                    

                });
				
				$('#btnAdicionarCidadeInteresse').click(function(){
                    var $cidades = $('.cidade-interesse');
                    
                    var $ocultos = $cidades.filter(":hidden");
					
					if ($ocultos.length == 0){
						$('#btnAdicionarCidadeInteresse').addClass('hide');
						return;
					}
					$ocultos.first().removeClass('hide');
					$ocultos = $cidades.filter(":hidden");
					if ($ocultos.length == 0){
						$('#btnAdicionarCidadeInteresse').addClass('hide');
						return;
					}
                });
                


                $('#ddlCidade').change(function(){
                    var $cidade = $('#Cidade');
                    var $hdnCidadeIntere = $('input:hidden#cidade_interesse_1')
                    var $optionSelected = $("option:selected", this);
                    var _value = $optionSelected.val();
                    var _text = '';
                    if(_value != '') _text = $optionSelected.text();

                    if($cidade.length > 0) $cidade.val(_text);
                    if($hdnCidadeIntere.length > 0) $hdnCidadeIntere.val(_value);

                    $cidade = $hdnCidadeIntere = null;
                });

            }) 
            function limpaCidades($cidades){
                $("option", $cidades).remove()
                $cidades.append($("<option />").val('').text('* Selecione o estado *'));
                $cidades.prop('disabled',true);
            }

            function populaEstadoCidades($estado, $cidades){
                var estado = $estado.val();
				if(estado == ''){
					limpaCidades($cidades);
					$estado.prop('disabled',false);
					return;
				}
				$estado.prop('disabled',true);
				$cidades.prop('disabled',true);
				var result = $.grep(cidades, function(e){ return e.UF == estado; });
				
				if(result.length == 0){
					ajaxCidades($estado, $cidades);
				}else{
					bindCidades($estado, $cidades);
				}
            }
			
			function ajaxCidades($estado, $cidades){
                var estado = $estado.val();
				var obj = {'UF': estado, 'cidades':[]};
				$.ajax({
					 dataType: "post"
					,url: "https://sistema.solutto.com.br/wsUtilitarios.asmx/Retorna_Municipios_Por_Estado_V1"
					,data: { siglaUF: estado }
					,complete: function(data) {
						if(data.status != 200 || data.responseXML == ''){
							/* $.each($cidades, function(i, cidade) { 
								$("option", $(cidade)).remove()
								$(cidade).append($("<option />").val('').text('* Selecione o estado *'));
							})*/
							
							limpaCidades($cidades);
							$estado.prop('disabled',false);
							return;
						}
						
						
						var _temp = $(data.responseXML).find("string").text().split(",");
						
						$.each(_temp, function(i, item) { 
							obj.cidades.push(
							{
								'id':item.split("|")[0], 
								'nome':item.split("|")[1]}
							)
						})
						cidades.push(obj);
						
						bindCidades($estado, $cidades)
					}
					,error: function() {
						$estado.prop('disabled',false);
						limpaCidades($cidades);
					}
				});
            }
			
			function bindCidades($estado, $cidades){
				var estado = $estado.val();
				var result = $.grep(cidades, function(e){ return e.UF == estado; });
				
				/*$.each($cidades, function(i, cidade) { 
					$("option", $(cidade)).remove()
				})*/
				$("option", $cidades).remove()
				$cidades.append($("<option />").val('').text('* Selecione *'));
				
				
				$.each(result[0].cidades, function(i, cidade) { 
					$cidades.append($("<option />").val(cidade.id).text(cidade.nome));
					/*$.each($cidades, function(i, ddl) { 
						$(ddl).append($("<option />").val(cidade.id).text(cidade.nome));
					})*/
				})
				
				$estado.prop('disabled',false);
				$cidades.prop('disabled',false);
			}
			

        </script>

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

			
			 <!-- 
           	======= FORM ======
             -->

			<form role="form" class="form-horizontal Form Form--style1 Form--rounded u-size12of24 u-sizeFull" action="https://kickoff.solutto.com.br/investidores_form.aspx" method="POST">
                <input id="empresa" name="empresa" type="hidden" value="Kickoff" />
				<input id="usuario" name="usuario" type="hidden" value="William Juliano" />
				<input id="unidade" name="unidade" type="hidden" value="21693" />
				<input id="RedirectSucesso" name="RedirectSucesso" type="hidden" value="https://kickoff.solutto.com.br/forms/formulario_sucesso.htm" />
				<input id="RedirectErro" name="RedirectErro" type="hidden" value="https://kickoff.solutto.com.br/forms/formulario_erro.htm" />

				<fieldset class="Form-fieldset u-sizeFull u-displayFlex u-flexDirectionColumn">
				<div class="Form-row u-sizeFull u-positionRelative u-displayFlex u-flexDirectionColumn u-flexSwitchRow">
			        <div class="form-group Form-coll u-sizeFull u-positionRelative u-marginVertical--inter--half u-marginBottom--inter--half">
						<label class="Form-label u-displayInlineBlock" for="Nome">Nome<span class="required u-paddingLeft--inter--half--px">*</span></label>
						<i class="FigureIcon u-icon">
			            	<svg class="SocialBar-item-icon u-icon iconUser u-displayInlineBlock is-animating">
								<use xlink:href="#iconUser"></use>
							</svg>
				        </i>
							<input type="text" id="Nome" name="Nome" placeholder="digite seu nome" class="form-control Form-input Form-input--text u-sizeFull u-borderRadius100 Form-input Form-input--text u-boxShadow" data-rule-required="true"  />
					</div>
				</div>

				<div class="Form-row u-sizeFull u-positionRelative u-displayFlex u-flexDirectionColumn u-flexSwitchRow">
			        <div class="form-group Form-coll u-size12of24 u-positionRelative u-marginVertical--inter--half u-marginBottom--inter--half">
						<label class="Form-label u-displayInlineBlock" for="Email">E-mail<span class="required u-paddingLeft--inter--half--px">*</span></label>
						<i class="FigureIcon u-icon">
			            	<svg class="SocialBar-item-icon u-icon iconEmail u-displayInlineBlock is-animating">
								<use xlink:href="#iconEmail"></use>
							</svg>
				        </i>
							<input type="text" id="Email" name="Email" placeholder="Digite seu e-mail" class="form-control Form-input Form-input--text u-sizeFull u-borderRadius100 Form-input Form-input--text u-boxShadow" data-rule-required="true"  />
					</div>
					<div class="form-group Form-coll u-size12of24 u-positionRelative u-marginVertical--inter--half u-marginBottom--inter--half">
						<label class="Form-label u-displayInlineBlock" for="Telefone">Telefone<span class="required u-paddingLeft--inter--half--px">*</span></label>
						<i class="FigureIcon u-icon">
			            	<svg class="SocialBar-item-icon u-icon iconPhone u-displayInlineBlock is-animating">
								<use xlink:href="#iconPhone"></use>
							</svg>
				        </i>
							<input type="text" id="Telefone" name="Telefone" placeholder="Digite seu telefone" class="form-control Form-input Form-input--text u-sizeFull u-borderRadius100 Form-input Form-input--text u-boxShadow" data-rule-required="true"  />
					</div>
				</div>

				<div class="Form-row u-sizeFull u-positionRelative u-displayFlex u-flexDirectionColumn u-flexSwitchRow">
			        <div class="form-group Form-coll u-size12of24 u-positionRelative u-marginVertical--inter--half u-marginBottom--inter--half">
						<label class="Form-label u-displayInlineBlock" for="Email">Estado<span class="required u-paddingLeft--inter--half--px">*</span></label>
						<i class="FigureIcon u-icon">
			            	<svg class="SocialBar-item-icon u-icon iconLocation u-displayInlineBlock is-animating">
								<use xlink:href="#iconLocation"></use>
							</svg>
				        </i>
						<select id="Estado" name="Estado" class="form-control Form-input Form-input--text Form-input--select u-sizeFull u-borderRadius100 Form-input Form-input--text u-boxShadow" data-rule-required="true" >
							<Option value="">* Selecione *</Option><Option value="AC">AC - Acre</Option><Option value="AL">AL - Alagoas</Option><Option value="AM">AM - Amazonas</Option><Option value="AP">AP - Amapá</Option><Option value="BA">BA - Bahia</Option><Option value="CE">CE - Ceará</Option><Option value="DF">DF - Distrito Federal</Option><Option value="ES">ES - Espírito Santo</Option><Option value="GO">GO - Goiás</Option><Option value="MA">MA - Maranhão</Option><Option value="MG">MG - Minas Gerais</Option><Option value="MS">MS - Mato Grosso Do Sul</Option><Option value="MT">MT - Mato Grosso</Option><Option value="PA">PA - Pará</Option><Option value="PB">PB - Paraíba</Option><Option value="PE">PE - Pernambuco</Option><Option value="PI">PI - Piaui</Option><Option value="PR">PR - Paraná</Option><Option value="RJ">RJ - Rio de Janeiro</Option><Option value="RN">RN - Rio Grande Do Norte</Option><Option value="RO">RO - Rondônia</Option><Option value="RR">RR - Roraima</Option><Option value="RS">RS - Rio Grande Do Sul</Option><Option value="SC">SC - Santa Catarina</Option><Option value="SE">SE - Sergipe</Option><Option value="SP">SP - São Paulo</Option><Option value="To">To - Tocantins</Option>
						</select>
					</div>
					<div class="form-group Form-coll u-size12of24 u-positionRelative u-marginVertical--inter--half u-marginBottom--inter--half">
						<label class="Form-label u-displayInlineBlock" for="Telefone">Cidade<span class="required u-paddingLeft--inter--half--px">*</span></label>
						<i class="FigureIcon u-icon">
			            	<svg class="SocialBar-item-icon u-icon iconCity u-displayInlineBlock is-animating">
								<use xlink:href="#iconCity"></use>
							</svg>
				        </i>
						<select id="ddlEstadoInteresse" name="ddlEstadoInteresse" class="form-control Form-input Form-input--text Form-input--select u-sizeFull u-borderRadius100 Form-input Form-input--text u-boxShadow" data-rule-required="true">
							<Option value=""></Option><Option value="AC">AC - Acre</Option><Option value="AL">AL - Alagoas</Option><Option value="AM">AM - Amazonas</Option><Option value="AP">AP - Amapá</Option><Option value="BA">BA - Bahia</Option><Option value="CE">CE - Ceará</Option><Option value="DF">DF - Distrito Federal</Option><Option value="ES">ES - Espírito Santo</Option><Option value="GO">GO - Goiás</Option><Option value="MA">MA - Maranhão</Option><Option value="MG">MG - Minas Gerais</Option><Option value="MS">MS - Mato Grosso Do Sul</Option><Option value="MT">MT - Mato Grosso</Option><Option value="PA">PA - Pará</Option><Option value="PB">PB - Paraíba</Option><Option value="PE">PE - Pernambuco</Option><Option value="PI">PI - Piaui</Option><Option value="PR">PR - Paraná</Option><Option value="RJ">RJ - Rio de Janeiro</Option><Option value="RN">RN - Rio Grande Do Norte</Option><Option value="RO">RO - Rondônia</Option><Option value="RR">RR - Roraima</Option><Option value="RS">RS - Rio Grande Do Sul</Option><Option value="SC">SC - Santa Catarina</Option><Option value="SE">SE - Sergipe</Option><Option value="SP">SP - São Paulo</Option><Option value="To">To - Tocantins</Option>
						</select>
					</div>
				</div>
				
				<Input id="Marca" name="Marca" type="hidden" value="180511184714572" />
                <div class="clearfix"> &nbsp; </div>

                <div class="Form-row u-size8of24 u-marginTop--inter--half u-paddingVertical--inter--half u-overflowHidden u-positionRelative u-displayBlock is-animating u-alignCenter u-sizeFull">
					
			        <button type="submit" class="Form-input Form-input--submit Button u-displayInlineFlex is-animating u-borderRadius50 Button--largeSize hover button u-flexAlignItemsCenter u-lineHeight0 u-cursorPointer btn btn-primary" name="subscribe" id="btnEnviar">
			        	<i class="u-positionRelative u-displayInlineBlock u-marginRight--inter--half--px">
								<svg class="iconHandshake u-icon u-displayInlineBlock">
									<use xlink:href="#iconHandshake"></use>
								</svg>
						</i>
			        	CONCLUIR
			    	</button>
			    
			    </div>

                </fieldset>
            </form>

            <!-- 
           	======= FORM ======
             -->


		</div> <!-- .Section-content -->
	</div>

		<figure class="FigureIcon ImgFigure--circle--lg ImgFigure--left u-displayBlock u-positionAbsolute u-opacity30 u-zIndex-1 is-animating--time2" data-paroller-factor="0.25" data-paroller-type="foreground" data-paroller-direction="vertical"></figure>
			
		<figure class="FigureIcon ImgFigure--flyer--vert ImgFigure--right u-displayBlock u-positionAbsolute u-zIndex-1 is-animating--time2" data-paroller-factor="1.0" data-paroller-type="foreground" data-paroller-direction="vertical"></figure>


		<figure class="FigureIcon ImgFigure--flyer--biColor ImgFigure--left u-opacity100 u-displayBlock u-positionAbsolute u-zIndex3 is-animating--time2 u-onlyDesktop" data-paroller-factor="2" data-paroller-type="foreground" data-paroller-direction="vertical"></figure>

		<figure class="FigureIcon ImgFigure--circle--sm ImgFigure--leftCenter  u-opacity80 u-displayBlock u-positionAbsolute u-zIndex-1 is-animating--time2" data-paroller-factor="1.0" data-paroller-type="foreground" data-paroller-direction="vertical"></figure>

	<figure class="imageBg--radius u-displayBlock u-absoluteCenter u-zIndex-1 u-onlyDesktop"></figure>
</section>

<?php } ?>