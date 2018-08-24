
<?php 
$embed = '<iframe width="560" height="315" src="https://www.youtube.com/embed/l0Qg9BmEnbs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'; 

//$embed = '<iframe width=\'560\' height=\'315\' src=\'https://www.youtube.com/embed/l0Qg9BmEnbs\' frameborder=\'0\' allow=\'autoplay; encrypted-media\' allowfullscreen></iframe>';

$iframeVideo = $embed;

 
?>
<section id="videos" class="Section Section--style1 Section--videos u-positionRelative u-marginTop">
	<header class="Section-header u-marginBottom--inter u-size16of24 u-alignCenterBox u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter  u-size12of24 u-paddingVertical u-absoluteTopCenter u-paddingTop--inter--half u-zIndex5">
		<figure class="ArabescoTop--color_15 u-displayBlock"></figure>
		<h2 class="Section-header-title Section-header-title--beforeTitleLine u-alignCenter u-paddingBottom--inter--half u-sizeFull"><strong>VÍDEOS</strong></h2>
	</header>
	<div class="Owl-container u-paddingVertical u-marginVertical u-paddingTop">
	<div id="videos-carousel" class="Section-items owl-carousel u-paddingTop">
		

		<div class="Section-items-item Section-mainContent u-marginTop--inter u-displayFlex u-flexDirectionColumn u-flexSwitchRow u-positionRelative u-borderRadius5">
				<div class="Section--texts u-displayFlex u-flexDirectionColumn u-size12of24 u-paddingTop--inter--half u-paddingBottom u-paddingVertical">
					<div class="Section-content u-alignCenter">
						<h3 class="Section-content-subtitle">
							Conheça os diferenciais da Vignoli
						</h3>
						<p class="Section-content-text u-marginTop--inter--half">
							Ingredientes bem escolhidos, que ao serem manipulados por mãos que entendem da arte de cozinhar, resultam em sabores marcantes.
						</p>
					</div>
				</div>

				<div class="Section-imageMain Section-gridElastic u-size12of24 u-positionRelative u-marginTop--inter u-borderRadius5--bottom" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Section-items-item-video<?php echo switch_img_Mobile(); ?>.png'); background-position: center center; background-size: cover;">
					<a href="javascript:LightboxCall(<?php  echo esc_html( '\'' . $iframeVideo . '\'' ); ?>);" class="u-absoluteTopLeft u-zIndex2 u-displayBlock u-sizeFull u-heightFull ">

						<span class="Section-imageMain-ButtonCommand u-absoluteCenter u-displayFlex u-flexAlignItemsCenter u-flexJustifyContentCenter u-zIndex2 ">
							<i class="IconPlay u-positionRelative u-displayBlock is-animating">
								<svg class="iconPlay u-icon u-displayBlock u-absoluteCenterMiddle is-animating">
									<use xlink:href="#iconPlay"></use>
								</svg>
							</i>
						</span>
					</a>
				</div>
		</div> <!-- .Section-items-item -->

		<div class="Section-items-item Section-mainContent u-marginTop--inter u-displayFlex u-flexDirectionColumn u-flexSwitchRow u-positionRelative u-borderRadius5">
				<div class="Section--texts u-displayFlex u-flexDirectionColumn u-size12of24 u-paddingTop--inter--half u-paddingBottom u-paddingVertical">
					<div class="Section-content u-alignCenter">
						<h3 class="Section-content-subtitle">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						</h3>
						<p class="Section-content-text u-marginTop--inter--half">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
						</p>
					</div>
				</div>

				<div class="Section-imageMain Section-gridElastic u-size12of24 u-positionRelative u-marginTop--inter u-borderRadius5--bottom" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Section-items-item-video<?php echo switch_img_Mobile(); ?>.png'); background-position: center center; background-size: cover;">
					<a href="javascript:LightboxCall(<?php  echo esc_html( '\'' . $iframeVideo . '\'' ); ?>);" class="u-absoluteTopLeft u-zIndex2 u-displayBlock u-sizeFull u-heightFull ">

						<span class="Section-imageMain-ButtonCommand u-absoluteCenter u-displayFlex u-flexAlignItemsCenter u-flexJustifyContentCenter u-zIndex2 ">
							<i class="IconPlay u-positionRelative u-displayBlock is-animating">
								<svg class="iconPlay u-icon u-displayBlock u-absoluteCenterMiddle is-animating">
									<use xlink:href="#iconPlay"></use>
								</svg>
							</i>
						</span>
					</a>
				</div>
		</div> <!-- .Section-items-item -->

		<div class="Section-items-item Section-mainContent u-marginTop--inter u-displayFlex u-flexDirectionColumn u-flexSwitchRow u-positionRelative u-borderRadius5">
				<div class="Section--texts u-displayFlex u-flexDirectionColumn u-size12of24 u-paddingTop--inter--half u-paddingBottom u-paddingVertical">
					<div class="Section-content u-alignCenter">
						<h3 class="Section-content-subtitle">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						</h3>
						<p class="Section-content-text u-marginTop--inter--half">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
						</p>
					</div>
				</div>

				<div class="Section-imageMain Section-gridElastic u-size12of24 u-positionRelative u-marginTop--inter u-borderRadius5--bottom" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Section-items-item-video<?php echo switch_img_Mobile(); ?>.png'); background-position: center center; background-size: cover;">
					<a href="javascript:LightboxCall(<?php  echo esc_html( '\'' . $iframeVideo . '\'' ); ?>);" class="u-absoluteTopLeft u-zIndex2 u-displayBlock u-sizeFull u-heightFull ">

						<span class="Section-imageMain-ButtonCommand u-absoluteCenter u-displayFlex u-flexAlignItemsCenter u-flexJustifyContentCenter u-zIndex2 ">
							<i class="IconPlay u-positionRelative u-displayBlock is-animating">
								<svg class="iconPlay u-icon u-displayBlock u-absoluteCenterMiddle is-animating">
									<use xlink:href="#iconPlay"></use>
								</svg>
							</i>
						</span>
					</a>
				</div>
		</div> <!-- .Section-items-item -->


		
	</div>
</div>
</section>