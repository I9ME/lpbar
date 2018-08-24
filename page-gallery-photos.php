<?php

/**
 * Template Name: GALLERY PHOTOS
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */
//get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	


<script type="text/javascript">

jQuery(function($) {
	$(document).ready(function() {

//LightBox Fotos

$(".gallery-item a").click(function(event){        
        event.preventDefault();

        //alert('clicou!');
        //
  $('#Lightbox--container').removeClass('Lightbox--inactive GalleryPhoto');
  $('#Lightbox--container').addClass('Lightbox--active GalleryPhoto');

var src = $(this).attr('href');
var title = $(this).find('img').attr('alt');
//alert( src );

$('.Lightbox-window-content').html( '<img class="GalleryPhoto-src u-displayBlock" src="'+ src +'" alt="'+title+'" />' );
//$('.Lightbox-window-content').html( '<h1>TESTE</h1>' );

});

/*

function LightboxClose(iFrame) {

  //alert( "clicked" );
   $('#Lightbox--container').removeClass('Lightbox--active');
   $('#Lightbox--container').addClass('Lightbox--inactive');
   $('.Lightbox-window-content').html('');
}

$( ".LightboxClose" ).on( "click", LightboxClose );*/


// /*=========================================================================================
// // CLOSE FUNCTION
// =========================================================================================*/

	});
});


</script>



<?php	
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>