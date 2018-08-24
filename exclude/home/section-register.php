<?php 

	$check_content_page =  check_content_page();
	
	if( $check_content_page['content_page'] == 'revendedor' ){
?>
<section id="cadastro" class="Section Section--cadastroRevendedor Section--style1">
	<header class="Section-header u-sizeFull u-maxSize--container u-alignCenterBox u-paddingVertical--hzt">
		<h2 class="Section-header-title u-alignCenter u-size12of24 u-maxSize--container u-alignCenterBox">
			<strong>Cadastre-se</strong> para começar a aproveitar as <strong>vantagens</strong> de ser um revendedor de <strong>moda</strong>.
		</h2>
	</header>
	<div class="u-maxSize--container u-alignCenterBox">
		<div class="Form-container">
			<?php get_template_part('template-parts/forms/form-cadastro','revendedor'); ?>
		</div>
	</div> <!-- Max Size Container -->
</section>

<?php 

	} elseif( $check_content_page['content_page'] == 'fabricante' ) {

?>

<section id="cadastro" class="Section Section--cadastroRevendedor Section--style1">
	<header class="Section-header u-sizeFull u-maxSize--container u-alignCenterBox u-paddingVertical--hzt">
		<h2 class="Section-header-title u-alignCenter u-size12of24 u-maxSize--container u-alignCenterBox">
			<strong>Cadastre-se</strong> para começar a receber vários <strong>pedidos</strong> de revendedores de <strong>moda</strong>.
		</h2>
	</header>
	<div class="u-maxSize--container u-alignCenterBox">
		<div class="Form-container">
			<?php get_template_part('template-parts/forms/form-cadastro','fabricante'); ?>
		</div>
	</div> <!-- Max Size Container -->
</section>

	<?php } ?>