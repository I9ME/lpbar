<?php

/**
 * Template Name: USER COMPONENTS
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */
?>

<?php 

if( isset( $_GET['component']) ) {

	if (!empty($_GET['component'])) {

		$component = $_GET['component'];
		$url = $_GET['url'];
?>
	<!-- Caso o conteúdo seja Login e Cadastro -->
	<?php
		
		if( $component == 'login_cadastro' ) {
	?>

		<div class="Section Section--loginCadastro u-displayFlex u-flexAlignItemsCenter u-paddingHorizontal--inter u-absoluteTopCenter u-sizeFull">
			<div class="Section-content u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow u-FlexFustifyContentSpaceBetween u-sizeFull">

				<div class="Section-subSection left u-positionRelative u-size12of24 u-paddingVertical--inter--px">
					<header class="Section-subSection-header u-marginBottom--inter">
						<h4 class="Section-subSection-header-title">
							<em>Eu já sou cadastrado</em><br />
							Quero fazer o login
						</h4>
					</header>
					<div class="Section-subSection-content">
						<?php  echo do_shortcode( '[custom-login-form]', $ignore_html = false ) ?>
						<!-- <form class="Form Form--style1">
							<fieldset class="Form-fieldset">
								<div class="Form-row u-displayFlex">
									<div class="Form-coll u-sizeFull u-marginBottom--inter--half">
										<input class="Form-input Form-input--text u-sizeFull" type="text" name="username" placeholder="Seu nome de usuário ou e-mail" />
									</div>
								</div>
								<div class="Form-row u-displayFlex">
									<div class="Form-coll u-sizeFull u-marginBottom--inter--half">
										<input class="Form-input Form-input--text u-sizeFull" type="password" name="password" placeholder="Sua senha" />
									</div>
								</div>
								<div class="Form-row u-displayFlex">
									<div class="Form-coll u-sizeFull u-marginBottom--inter--half">
										<input class="Form-input Form-input--submit u-sizeFull" type="submit" value="LOGAR" />
									</div>
								</div>
							</fieldset>
						</form> -->
					</div>
				</div>

				<div class="Section-subSection right u-positionRelative u-size12of24 u-paddingVertical--inter--px">
					<header class="Section-subSection-header u-marginBottom--inter">
						<h4 class="Section-subSection-header-title">
							<em>Não tenho cadastro</em><br />
							Quero me cadastrar
						</h4>
					</header>
					<div class="Section-subSection-content">
						<p class="Section-subSection-resume u-displayBlock">Cadastre-se para aproveitar todas as nossas promoções.</p>
						<a class="Button Button--border Button--largeSize style1 u-borderRadius5 is-animating hover u-marginTop--inter u-alignCenter u-displayBlock" href="<?php echo get_home_url(); ?>/member-register/" target="_blank">CADASTRE-SE!</a>
						<?php // echo do_shortcode( '[custom-register-form]', $ignore_html = false ) ?>
						<!-- <form class="Form Form--style1">
							<fieldset class="Form-fieldset">
								<div class="Form-row u-displayFlex">
									<div class="Form-coll u-sizeFull u-marginBottom--inter--half">
										<input class="Form-input Form-input--text u-sizeFull" type="text" name="username" placeholder="Seu nome de usuário ou e-mail" />
									</div>
								</div>
								<div class="Form-row u-displayFlex">
									<div class="Form-coll u-sizeFull u-marginBottom--inter--half">
										<input class="Form-input Form-input--text u-sizeFull" type="password" name="password" placeholder="Sua senha" />
									</div>
								</div>
								<div class="Form-row u-displayFlex">
									<div class="Form-coll u-sizeFull u-marginBottom--inter--half">
										<input class="Form-input Form-input--submit u-sizeFull" type="submit" value="LOGAR" />
									</div>
								</div>
							</fieldset>
						</form> -->
					</div>
				</div>
		</div>

<?php } else { ?>
	
	<!-- Futuras outras opções -->

<?php } ?>

	<?php

	}

}

 ?>

<div class="">

</div>

