<section id="avignoli" class="Section Section--style1 Section--aVignoli u-paddingTop">
		<div class="u-maxSize--container u-alignCenterBox"><!-- Max Size Container -->
			<header class="Section-header u-marginBottom--inter u-size16of24 u-alignCenterBox u-paddingVertical u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter">
				<figure class="ArabescoTop--color_15 u-displayBlock"></figure>
				<h2 class="Section-header-title Section-header-title--beforeTitleLine u-alignCenter u-paddingHorizontal--inter--half u-sizeFull">SOBRE A <strong>VIGNOLI</strong></h2>
				<h3 class="Section-header-subtitle u-alignCenter">Conheça um pouco mais da Pizza Vignoli através da sua história, fotos e seus diferenciais.</h3>
			</header>
			<div class="Section-content u-size18of24 u-paddingVertical u-alignCenterBox u-marginTop">

				<nav class="Section-navigation Navigation Navigation--tabs u-positionRelative u-sizeFull u-alignCenterBox">
					<ul class="Navigation--tabs-items u-sizeFull u-displayFlex">
						<li id="tab-1" class="Navigation--tabs-items-item u-size12of24 u-paddingBottom--inter u-positionRelative u-paddingRight--inter--half--px">
							<h3 class="u-alignRight">
								<a class="Navigation-link u-displayBlock u-paddingHorizontal--vrt--inter--half--px is-animating" href="javascript:NavigationTabs('aVignoli','1','/galeria-de-fotos/','scrollTop');">Fotos</a>
							</h3>
							<figure class="ShadowBox ShadowBox--tabRight--footer u-positionAbsolute u-zIndex2 is-animating"></figure>
							<figure class="ShadowBox ShadowBox--tabRight u-positionAbsolute u-zIndex1 is-animating"></figure>
						</li>
						<li id="tab-2" class="Navigation--tabs-items-item Navigation--tabs-items-item--history u-size12of24 u-paddingBottom--inter u-positionRelative u-paddingVertical--inter--half--px is-active is-clean">
							<h3 class="u-alignCenter">
								<a class="Navigation-link u-displayBlock u-paddingHorizontal--vrt--inter--half--px u-displayBlock is-animating" href="javascript:NavigationTabs('aVignoli','2','','scrollTop');">História</a>
							</h3>
							<figure class="ShadowBox ShadowBox--tabLeft--footer u-positionAbsolute u-zIndex2 is-animating"></figure>
							<figure class="ShadowBox ShadowBox--tabLeft u-positionAbsolute u-zIndex1 is-animating"></figure>
							<figure class="ShadowBox ShadowBox--tabRight--footer u-positionAbsolute u-zIndex2 is-animating"></figure>
							<figure class="ShadowBox ShadowBox--tabRight u-positionAbsolute u-zIndex1 is-animating"></figure>
						</li>
						<li id="tab-3" class="Navigation--tabs-items-item u-size12of24 u-paddingBottom--inter u-positionRelative u-paddingLeft--inter--half--px">
							<h3>
								<a class="Navigation-link u-displayBlock is-animating u-paddingHorizontal--vrt--inter--half--px" href="javascript:NavigationTabs('aVignoli','3','','scrollTop');">Diferenciais</a>
							</h3>
							<figure class="ShadowBox ShadowBox--tabLeft--footer u-positionAbsolute u-zIndex2 is-animating"></figure>
							<figure class="ShadowBox ShadowBox--tabLeft u-positionAbsolute u-zIndex1 is-animating"></figure>
						</li>
					</ul>
				</nav>

				<ul class="Section-items Items Items--tabs u-marginTop--inter u-positionRelative">
					<li id="tabContent-1" class="Section-items-item Item Item--gallery Item--tab u-sizeFull u-positionRelative u-boxShadow--clean--bottom u-borderRadius5 u-paddingVertical u-paddingBottom is-animating">
						<?php // get_template_part( 'template-parts/vignoli/section-part', 'fotos' ); ?>
					</li>
					<li id="tabContent-2" class="Section-items-item Item Item--tab u-sizeFull u-positionRelative is-active u-boxShadow--clean--bottom u-borderRadius5 u-paddingVertical u-paddingBottom is-animating">
						<?php get_template_part( 'template-parts/vignoli/section-part', 'history' ); ?>
					</li>
					<li id="tabContent-3" class="Section-items-item Item Item--tab u-sizeFull u-positionRelative u-boxShadow--clean--bottom u-borderRadius5 u-paddingVertical u-paddingBottom is-animating">
						<?php get_template_part( 'template-parts/vignoli/section-part', 'diferenciais' ); ?>
					</li>
				</ul>
			</div>
		</div>
</section>