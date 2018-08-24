
<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

?>


<div id="SeachHeader-container" class="Form Form--style3 Navigation Navigation--content Navigation--content--level2 Navigation--content--style1  u-isCollapsed u-contentHide u-contentHide--height u-size24of24 is-animating">
	<form role="search" method="get" action="<?php echo get_home_url(); ?>" class="Form Form--style1 u-size12of24 u-sizeFull u-paddingHorizontal--vrt--inter--px">
		<fieldset class="Form-fieldset u-sizeFull u-displayFlex u-flexDirectionColumn">
			<div class="Form-row u-sizeFull u-positionRelative">
						<label class="Form-label u-displayInlineBlock" for="s">O QUE VOCÊ PROCURA?<span class="required">*</span></label>
						<i class="FigureIcon u-icon">
			            	<svg class="SocialBar-item-icon u-icon iconUser u-displayInlineBlock is-animating">
								<use xlink:href="#iconUser"></use>
							</svg>
				        </i>

				        <input type="search" class="Form-input Form-input--text u-sizeFull u-borderRadius5 Form-input Form-input--text" placeholder="<?php echo $placeholder; ?>" value="<?php echo get_search_query(); ?>" name="s" required />
						
						<button type="submit" class="u-positionAbsolute search-submit Form-input Form-input--searchSubmit u-borderRadius50 u-inlineFlex u-marginLeft--inter FigureIcon FigureIcon--search is-animating"></button>

					</div>
		</fieldset>
	</form>

</div>


