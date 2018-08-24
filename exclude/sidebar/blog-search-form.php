<?php
// Verifica se a variável $_POST não é vazia...
// ou seja: houve um submit no formulário
if (!empty($_POST)) {
  // Verifica se a variável $_POST['nome'] existe
  if (isset($_POST['s'])) {
    // Verifica se o usuário digitou o seu nome
    if (!empty($_POST['s'])) {
      $placeholder = $_POST['s'];
     
    } else {
     $placeholder = 'PALAVRA-CHAVE';
    }
  } else {
    $placeholder = 'PALAVRA-CHAVE';
  }
} else {
  $placeholder = 'PALAVRA-CHAVE';
}

 ?>

<form role="search" method="get" action="<?php echo get_home_url(); ?>" class="Form Form--style1 u-size12of24 u-sizeFull">
		<fieldset class="Form-fieldset u-sizeFull u-displayFlex u-flexDirectionColumn">
			<div class="Form-row u-sizeFull u-positionRelative">
						<label class="Form-label u-displayInlineBlock" for="s">O QUE VOCÊ PROCURA?<span class="required">*</span></label>

				        <input type="search" class="Form-input Form-input--text u-sizeFull u-borderRadius5 Form-input Form-input--text" placeholder="<?php echo $placeholder; ?>" value="<?php echo get_search_query(); ?>" name="s" required />
						
						<button class="u-positionAbsolute FigureIcon u-cursorPointer is-animating" id="searchsubmit" value="">
							<svg class="SocialBar-item-icon u-icon iconSearch u-displayInlineBlock is-animating">
								<use xlink:href="#iconSearch"></use>
							</svg>
						</button>


					</div>
		</fieldset>
	</form>