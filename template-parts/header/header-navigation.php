<a id="MainNavigation" href="javascript:;" class="e-Toglle u-contentHide--button NavigationButton NavigationButton--main is-animating u-positionAbsolute u-zIndex4 u-isCollapsed u-cursorPointer">
	<i class="u-displayFlex u-positionRelative u-sizeFull NavigationButton-icon">

		<svg class="iconMenu NavigationButton-icon u-icon is-animating is-animating--switch is-animating--switch--imgA is-animating--rotate">
			<use xlink:href="#iconMenu"></use>
		</svg>
		<svg class="iconClose NavigationButton-icon u-icon is-animating is-animating--switch is-animating--switch--imgB is-animating--rotate">
			<use xlink:href="#iconClose"></use>
		</svg>
		<span class="u-isOut">MENU</span>
	</i>
</a>
<div class="ElementImg--bgNav--menu u-displayBlock u-absoluteMiddle u-onlyMobile"></div>

<nav id="MainNavigation-container" class="Navigation Navigation--menu Navigation--menu--main Navigation--menu--style2 is-animating u-isCollapsed u-contentHide u-contentHide--height u-flexJustifyContentFlexEnd u-zIndex20" role="navigation" aria-label="">
	<ul class="Navigation-items Navigation-items--level1 u-alignCenter u-sizeFull u-marginTop--inter">

		<?php if ( is_home() || is_front_page() ) { ?>
		
		<li class="Navigation-items-item Item Item-level1 u-flex u-flexAlignCenter is-animating">
			<a class="NavigationLink u-isScrollDown u-positionRelative Item-level1 is-animating " href="#afranquia">FRANQUIA</a>
		</li>

		<li class="Navigation-items-item Item Item-level1 u-flex u-flexAlignCenter is-animating">
			<a class="NavigationLink u-isScrollDown u-positionRelative Item-level1 is-animating " href="#avignoli">VIGNOLI</a>
		</li>

		<li class="Navigation-items-item Item Item-level1 u-flex u-flexAlignCenter is-animating">
			<a class="NavigationLink u-isScrollDown u-positionRelative Item-level1 is-animating " href="#seja-franqueado">SEJA FRANQUEADO</a>
		</li>

		<li class="Navigation-items-item Item Item-level1 u-flex u-flexAlignCenter is-animating">
			<a class="NavigationLink u-isScrollDown u-positionRelative Item-level1 is-animating " href="#midia">MÍDIA</a>
		</li>

	<?php } else { ?>


		<li class="Navigation-items-item Item Item-level1 u-flex u-flexAlignCenter is-animating">
			<a class="NavigationLink u-positionRelative Item-level1 is-animating " href="<?php echo get_home_url(); ?>/#afranquia">A FRANQUIA</a>
		</li>

		<li class="Navigation-items-item Item Item-level1 u-flex u-flexAlignCenter is-animating">
			<a class="NavigationLink u-positionRelative Item-level1 is-animating " href="<?php echo get_home_url(); ?>/#avignoli">A VIGNOLI</a>
		</li>

		<li class="Navigation-items-item Item Item-level1 u-flex u-flexAlignCenter is-animating">
			<a class="NavigationLink u-positionRelative Item-level1 is-animating" href="<?php echo get_home_url(); ?>/#midia">MÍDIA</a>
		</li>


	<?php } ?>
		
	</ul>

	<?php   get_template_part('template-parts/header/header','contact'); ?>
	<?php   get_template_part('template-parts/header/header','social-medias'); ?>

</nav><!-- #site-navigation -->
