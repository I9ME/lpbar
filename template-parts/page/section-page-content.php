<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.2
 */

?>
<?php
		if (have_posts()) :
  		 while (have_posts()) :
  		 	  the_post();
	?>
<article id="post-<?php the_ID(); ?>" class="Article Article--promocoes u-positionRelative u-displayFlex u-flexDirectionColumn  u-paddingBottom u-paddingVertical u-borderRadius5">
	
	<div class="Breadcrumbs u-displayFlex u-paddingHorizontal--vrt--inter--half--px">
		<a class="u-lineHeight100 u-displayFlex u-flexDirectionRow u-flexAlignItemsCenter is-animating" href="<?php echo get_home_url(); ?>">
			<i class="u-icon u-marginRight--inter--half--px">
				<svg class="iconArrowLeftLine u-icon is-animating">
					<use xlink:href="#iconArrowLeftLine"></use>
				</svg>
			</i>
			<span>VOLTAR PARA AS PROMOÇÕES</span>
		</a>
	</div>
	
	<section class="Section Section--contentHeader u-displayFlex u-flexDirectionColumn">
		
		<?php if ( has_post_thumbnail() ) { ?>

		<div class="Section--contentPage-thumbnail u-sizeFull u-lineHeight0">
			<?php 
			
				//Imagem Destacada	
				$image_id = get_post_thumbnail_id();
				$sizeThumbs = 'large';
				$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
				$urlThumbnail = $urlThumbnail[0];
				 
			 ?>

			 <img class="u-maxSize100 u-minWith100" src="<?php echo $urlThumbnail ?>" alt="<?php echo get_the_title(); ?>">
		</div>
		<?php } ?>

		<header class="entry-header Section--header u-positionRelative u-marginHorizontal--inter u-displayBlock u-zIndex9 u-size24of24 u-alignCenter u-paddingVertical--inter--px">	
			<h2 class="entry-title Section--header-title"><?php echo get_the_title(); ?></h2>
		</header><!-- .entry-header -->
	</section>
		
	
	<section class="Section Section--texts u-marginVertical--inter--half--px">
		<?php  the_content(); ?>

		 <!-- <p class="register-message" style="display:none"></p>
		     <form action="#" method="POST" name="register-form" class="register-form">
		       <fieldset> 
		           <label><i class="fa fa-file-text-o"></i> Register Form</label>
		           <input type="text"  name="new_user_name" placeholder="Username" id="new-username">
		           <input type="email"  name="new_user_email" placeholder="Email address" id="new-useremail">
		           <input type="password"  name="new_user_password" placeholder="Password" id="new-userpassword">
		           <input type="password"  name="re-pwd" placeholder="Re-enter Password" id="re-pwd">
		           <input type="submit"  class="button" id="register-button" value="Register" >
		       </fieldset>
		     </form> 
		      
		 
		     <script type="text/javascript">
		       jQuery('#register-button').on('click',function(e){
		         e.preventDefault();
		         var newUserName = jQuery('#new-username').val();
		         var newUserEmail = jQuery('#new-useremail').val();
		         var newUserPassword = jQuery('#new-userpassword').val();
		         jQuery.ajax({
		           type:"POST",
		           url:"<?php // echo admin_url('admin-ajax.php'); ?>",
		           data: {
		             action: "register_user_front_end",
		             new_user_name : newUserName,
		             new_user_email : newUserEmail,
		             new_user_password : newUserPassword
		           },
		           success: function(results){
		             console.log(results);
		             jQuery('.register-message').text(results).show();
		           },
		           error: function(results) {
		           }
		         });
		       });
		     </script> -->
	</section>


</article><!-- #post-## -->

<?php 
			endwhile; 
			else:
	 ?>
	 <article class="u-positionRelative">
	
	<header class="entry-header Intro--blog-header u-positionRelative u-marginBottom--inter u-displayBlock u-zIndex9 u-size24of24 u-alignCenter u-paddingVertical">	
			<h2 class="entry-title Intro--blog-title">Nenhuma postagem foi encontrada.</h2>
	</header><!-- .entry-header -->
</article>



<?php endif; ?>