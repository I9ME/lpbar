 
/*=========================================================================================
// INICIO MAIN JS
========================================================================================= */

jQuery(function($) {
	$(document).ready(function() {

//alert(document.location.origin);
//alert(document.location.pathname);
//
var hostname = location.hostname;
if ( hostname == 'localhost' ) {
    url = 'http://localhost/barneys/franquia';
} else {
    url = 'http://'+hostname+'/franquia';
}

/*
window.onload = function() {


    var w = window.innerWidth;
    if( w < 768 ) { 
        var mobile = '--mobile';
    } else {
        var mobile = '';
    }
    
    $(function() {
      setTimeout(function(){
        //Inserindo imagens secudárias
        $('.Section--aFranquia #tabImage-2.Subsection-imageMain[data-img-src]').each(function(){
          var src = $(this).attr('data-img-src');
          $('<img>').attr('src', url+'/wp-content/themes/lpbar/assets/images/'+src).appendTo('.Section--aFranquia .Section-subSection #tabImage-2').addClass('Subsection-imageMain-src u-maxSize100 is-animating');
        });

        


      }, 600);
    });

    //$('#afranquia #tabImage-1.Subsection-imageMain').html('<img class="Subsection-imageMain-src u-maxSize100 is-animating" src="'+url+'/wp-content/themes/lpvigno/assets/images/subSection-mainImage--pizza'+mobile+'.png" />');
    //$('#afranquia #tabImage-2.Subsection-imageMain').html('<img class="Subsection-imageMain-src u-maxSize100 is-animating" src="'+url+'/wp-content/themes/lpvigno/assets/images/subSection-mainImage--pizza--expresso'+mobile+'.png" />');
    //$('#onde-estamos .Section-items-figure').html('<img class="u-objectFitCover u-sizeHeight100 u-sizeFull u-displayFlex u-justifyContentCenter u-flexAlignItemsCenter" src="'+url+'/wp-content/themes/lpvigno/assets/images/brazil-pizza--right'+mobile+'.png" />');
    //$('#avignoli').addClass('imgAfter');

    //$('#avignoli .Items--tabs .Item--tab.Item--gallery').load(url+'/galeria-de-fotos/');
    //$('#avignoli .Gallery--videos').load(url+'/galeria-de-videos/');


    
    // var element = document.createElement("script");
    // element.src = "myScript.js";
    
    // document.body.appendChild(element);
   //alert('Carregou! ')
   //

};*/




//LightBox Fotos
/*
$(".Gallery--fotos .gallery-item a").click(function(event){        
        event.preventDefault();

        alert('clicou!');

var src = $(this).attr('href');
var title = $(this).find('img').attr('alt');

   $('#Lightbox--container').removeClass('Lightbox--active');
   $('#Lightbox--container').addClass('Lightbox--inactive');
   $('.Lightbox-window-content').html( '<h1>TESTE</h1>' );

});*/


//$('.Section--intro .Form-input--email').val($('.Form--modal .Form-input--email').val());




//=======================================================
//Aplica a animação no scroll mediante clique no menu
//=======================================================



    $(".u-isScrollDown").click(function(event){        
        event.preventDefault();
        
       

        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);

          if ($(".Navigation--main").hasClass('u-isExpanded')){
            $("#MainNavigation-container, .NavigationButton.NavigationButton--main").removeClass("u-isExpanded")
            $("#MainNavigation-container, .NavigationButton.NavigationButton--main").addClass("u-isCollapsed");  
         }
        
        varHash = $(this).attr('href');

        
        /*if (location.hash == varHash) {
            $(this).addClass('u-isActive');
        } else {
            $(this).removeClass('u-isActive');
        }*/
        
        if(history.pushState) {
        
            history.pushState(null, null, varHash);
        
        }
        else {
        location.hash = '#myhash';
        window.location.hash = varHash;
        }

        
   });




/*$(function(){
      $.stellar({
        horizontalScrolling: false,
        verticalOffset: 40
      });
    });
*/



// =====================================
// .ScrollOn
// Detecta o Movimento da Barra de Rolagem e aplica a classe no body
// =====================================

$(window).scroll(function(){


     var scroll = $(window).scrollTop();

     //Class ScrollOn
     if ( scroll > 0 ) {

      $('body').addClass('u-isScrollOn');

     } else {
      $('body').removeClass('u-isScrollOn');
     }

      /*if ( scroll > 300 ) {
        $('.Intro--home-imageMain .Layer').addClass('LessDesign');
      } else { 
        $('.Intro--home-imageMain .Layer').removeClass('LessDesign');
      }*/


});

// =====================================
// .ScrollFade
// Mostra os objetos conforme aparecem no scroll
// =====================================
 
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.u-isScrollFade').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height() + 100;
            var bottom_of_window_ = $(window).scrollTop() + $(window).height();

             if ( $(this).hasClass('is-repeat') ) {
                 /* If the object is completely visible in the window, fade it it */
                  if( bottom_of_window > bottom_of_object && bottom_of_window < bottom_of_object + $(window).height() ){
                      
                      //$(this).animate({'opacity':'1'},500);
                      $(this).addClass('u-isScrollFade--on'); 
                      


                  } else {

                     $(this).removeClass('u-isScrollFade--on'); 
                  
                  } 

             } else {

                if( bottom_of_window > bottom_of_object && bottom_of_window < bottom_of_object + $(window).height() ){
                  
                  //$(this).animate({'opacity':'1'},500);
                  $(this).addClass('u-isScrollFade--on'); 
                  
                }

            }
            
            
        }); 
    
    });


//=======================================================
//Aplica a animação no scroll mediante clique no menu
//=======================================================

    $(".u-isScrollDown").click(function(event){        
        event.preventDefault();
        
       

        $('html,body').animate({scrollTop:$(this.hash).offset().top - 0}, 1000);

          if ($(".Navigation--menu--main").hasClass('u-isExpanded')){
            $("#MainNavigation-container, .NavigationButton.NavigationButton--main").removeClass("u-isExpanded")
            $("#MainNavigation-container, .NavigationButton.NavigationButton--main").addClass("u-isCollapsed");  
         }
        
        varHash = $(this).attr('href');

        
        /*if (location.hash == varHash) {
            $(this).addClass('u-isActive');
        } else {
            $(this).removeClass('u-isActive');
        }*/
        
        if(history.pushState) {
        
            history.pushState(null, null, varHash);
        
        }
        else {
        location.hash = '#myhash';
        window.location.hash = varHash;
        }

        
   });


// ==========================
// Menu Toggle
// ==========================
// 



     $(".e-Toglle").click(function(event){
         event.preventDefault();
         varId = $(this).attr('id');
         varWidthWindow = $(window).width();
         
          if ($(this).hasClass('a-hzt')){
                varSide = 'a-hztResize';
             } else {
                varSide = '';
             }

            
         if ($(this).hasClass('u-isExpanded')){

            //$('body').css({'overflow':'scroll'});
            $(this).removeClass('u-isExpanded');
            $(this).addClass('u-isCollapsed');
                 $('#'+varId+'-container').stop().removeClass('u-isExpanded '+varSide);
                 $('#'+varId+'-container').stop().addClass('u-isCollapsed '+varSide);
                 //if( varId == 'MainNavigation' || varWidthWindow <= 480 ) { $('body').removeClass('u-isScrollOff'); }
                 $('#'+varId+'.SwitchIcon.u-isCollapsed .u-icon').show();
                 $('#'+varId+'.SwitchIcon .iconClose').hide();
                 $('.NavigationLink.Item-level1.is-hasSubMenu, .Navigation--subMenu').removeClass('u-isExpanded');
                 $('.NavigationLink.Item-level1.is-hasSubMenu, .Navigation--subMenu').addClass('u-isCollapsed');
                 
         }else{

             //$('body').css({'overflow':'hidden'});
             $('.u-contentHide, .u-contentHide--button, .Navigation .is-hasSubMenu, .Navigation--subMenu').removeClass('u-isExpanded').addClass('u-isCollapsed');
             $(this).removeClass('u-isCollapsed');
             $(this).addClass('u-isExpanded');
                 $('#'+varId+'-container').stop().removeClass('u-isCollapsed '+varSide);
                 $('#'+varId+'-container').stop().addClass('u-isExpanded '+varSide);
                 //if( varId == 'MainNavigation' || varWidthWindow <= 480 ) { $('body').addClass('u-isScrollOff'); }
                 $('#'+varId+'.SwitchIcon.u-isExpanded .u-icon').hide();
                 $('#'+varId+'.SwitchIcon .iconClose').show();
             }
     });


function LightboxClose(iFrame) {

  //alert( "clicked" );
   $('#Lightbox--container').removeClass('Lightbox--active');
   $('#Lightbox--container').addClass('Lightbox--inactive');
   $('.Lightbox-window-content').html('');
   jQuery('body').css({'overflow-y':'auto'});
}

$( ".LightboxClose" ).on( "click", LightboxClose );





    $(document)
        .ready(function () {
            //initialize paroller.js
            $('[data-paroller-factor]').paroller();
            //initialize paroller.js and set options for elements with .paroller class
            $('.paroller-example').paroller({
                factorXs: 0.1,
                factorSm: 0.1,
                factorMd: -0.4,
                factorLg: -0.5,
                factorXl: -0.6,
                factor: -0.4,
                type: 'foreground',
                direction: 'horizontal'
            });
        });


/*s
// Carousel
 */

$('#namidia-carousel').owlCarousel({
    loop:true,
    dots: true,
    nav: false,
    responsiveClass: true,
    responsive:{
        0:{
            items:1,
            //margin:50
        },
        768:{
            items:2,
            //margin:25,
        },
        960:{
            items:3,
            //margin:25,
        }
    }
})

$('#videos-carousel').owlCarousel({
    loop:true,
    dots: false,
    nav: false,
    margin: 0,
    responsiveClass: true,
    responsive:{
        0:{
            items:1,
            //dots: true,
            nav: true,
        },
        768:{
            items:1,
        },
        960:{
            items:1,
        }
    }
});


$('#videos-carousel--control').owlCarousel({
    loop:false,
    margin:0,
    dots: false,
    nav: false,
    URLhashListener:true,
    autoplayHoverPause:false,
    startPosition: 'URLHash',
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
         480:{
            items:2,
        },
        768:{
            items:2,
        },
        960:{
            items:4,
        }
    } // Responsive

})

$('#opinioes-carousel').owlCarousel({
    loop:true,
    dots: false,
    nav: true,
    margin: 0,
    responsiveClass: true,
    responsive:{
        0:{
            items:1,
            

        },
        768:{
            items:1,
        },
        960:{
            items:1,
        }
    }
});

$('#historia-carousel').owlCarousel({
    loop:true,
    dots: true,
    nav: false,
    margin: 50,
   //rtl:true,
    //startPosition: 'right',
    //autoplay: true,
    responsiveClass: true,
    responsive:{
        0:{
            items:1,
            

        },
        768:{
            items:2,
        },
        960:{
            items:2,
        }
    }
})




// Persnonalizando os Botões de Navegação
/*
$('#depoimentos-carousel .owl-prev').html('<svg class="Pagination-items-item-icon u-icon iconArrowLeft"><use xlink:href="#iconArrowLeft"></use></svg>').addClass('navController navController--left navController--prev navController--button navController--border u-borderRadius50 navController--button--uniSize u-positionAbsolute is-animating u-isActionable ');
$('#depoimentos-carousel .owl-next').html('<svg class="Pagination-items-item-icon u-icon iconArrowRight"><use xlink:href="#iconArrowRight"></use></svg>').addClass('navController navController--right navController--next navController--button navController--border u-borderRadius50 navController--button--uniSize u-positionAbsolute is-animating u-isActionable ');
*/
/*
$('#parcerias-carousel--control .owl-prev').html('<svg class="Pagination-items-item-icon u-icon iconArrowLeft"><use xlink:href="#iconArrowLeft"></use></svg>').addClass('navController navController--left navController--prev navController--button navController--border u-borderRadius50 u-positionAbsolute is-animating u-isActionable ');
$('#parcerias-carousel--control .owl-next').html('<svg class="Pagination-items-item-icon u-icon iconArrowRight"><use xlink:href="#iconArrowRight"></use></svg>').addClass('navController navController--right navController--next navController--button navController--border u-borderRadius50 u-positionAbsolute is-animating u-isActionable ');
*/

$('#videos-carousel .owl-prev, #opinioes-carousel .owl-prev').html('<svg class="NavigationButton--controllCarousel u-icon iconArrowLeftLine"><use xlink:href="#iconArrowLeftLine"></use></svg>').addClass('navController navController--prev navController--content u-borderRadius5--left is-animating u-isActionable ');
$('#videos-carousel .owl-next, #opinioes-carousel .owl-next').html('<svg class="NavigationButton--controllCarousel u-icon iconArrowRightLine"><use xlink:href="#iconArrowRightLine"></use></svg>').addClass('navController navController--next navController--content u-borderRadius5--right is-animating u-isActionable ');


/*
$('#depoimentos-carousel .owl-nav').addClass('Pagination Pagination--appendJs u-marginTop--inter u-marginBottom--inter u-flex u-justifyContentCenter');
$('#depoimentos-carousel .owl-prev').html('<svg class="Pagination-items-item-icon u-icon iconArrowLeft"><use xlink:href="#iconArrowLeft"></use></svg>').addClass('navController navController--left navController--prev navController--button navController--button--largeSize navController--border u-borderRadius50 is-animating u-marginRight--inter');
$('#depoimentos-carousel .owl-next').html('<svg class="Pagination-items-item-icon u-icon iconArrowRight"><use xlink:href="#iconArrowRight"></use></svg>').addClass('navController navController--right navController--next navController--button navController--button--largeSize navController--border u-borderRadius50 is-animating u-marginRight--inter');
$('#depoimentos-carousel .owl-nav').append('<a class="navController navController--center  navController--all  navController--button  navController--border ReadMore ReadMore--background  Button ButtonLink u-lineHeight0 hover is-animating u-marginRight--inter" href="/cases/"><span class="ShowText">VER TODOS</span></a>');
*/



// Switch de Ativo / Inativo
var hashUrl = window.location.hash;
$(hashUrl+'--ControllLink').addClass('active');
var owl = $('.owl-carousel');
owl.owlCarousel();
owl.on('changed.owl.carousel', function(event) {
    //location.hash = event.property.value;
  var hashUrl = window.location.hash;
  $('.Section-navigation-items-item, .Pagination .navController').removeClass('active');
  $(hashUrl+'--ControllLink').addClass('active');
})


// /*=========================================================================================
// // CLOSE FUNCTION
// =========================================================================================*/

	});
});



function NavigationTabs(section, tab, uri, effect){
    //alert( section + ' , ' + tab );
    
    if ( effect == 'scrollTop' ) {

        var anchor = $('.Section--'+section+' .Section-content');
        
        var new_position = $(anchor).offset();

        $('html, body').stop().animate({ scrollTop: new_position.top - 100 }, 500);
            //e.preventDefault();
        }

   $('.Section--' + section + ' .Navigation--tabs .Navigation--tabs-items-item').removeClass('is-clean');
  
   if( tab == 1) {
        $('.Section--' + section + ' .Navigation--tabs #tab-3').addClass('is-clean');
        $('.Section--' + section + ' .Navigation--tabs #tab-2').addClass('is-clean--right');
        $('.Section--' + section + ' .Navigation--tabs #tab-2').removeClass('is-clean--left');
    } else  if( tab == 2) {
        $('.Section--' + section + ' .Navigation--tabs #tab-2').addClass('is-clean');
    } else  if( tab == 3) {
        $('.Section--' + section + ' .Navigation--tabs #tab-1').addClass('is-clean');
        $('.Section--' + section + ' .Navigation--tabs #tab-2').addClass('is-clean--left');
         $('.Section--' + section + ' .Navigation--tabs #tab-2').removeClass('is-clean--right');
    }


    $('.Section--' + section + ' .Navigation--tabs .Navigation--tabs-items-item, .Section--' + section + ' .Items--tabs .Item, .Section--' + section + ' .Subsection-imageMain').removeClass('is-active');
    $('.Section--' + section + ' .Navigation--tabs #tab-' + tab + ', .Section--' + section + ' .Items--tabs #tabContent-' + tab +', .Section--' + section + ' #tabImage-' + tab).addClass('is-active');

    if( uri != '' ) {

        $('.Section--' + section + ' .Items--tabs #tabContent-' + tab).load(url+uri);

    }
    
    //$('.Section--' + section + ' .Subsection-imageMain .Subsection-imageMain-src').fadeOut();
    //$('.Section--' + section + ' .Subsection-imageMain#tabImage-'+ tab + ' .Subsection-imageMain-src').fadeIn();
    //alert('clicked');
    
   // $('.Section--' + section + ' .Subsection-imageMain').fadeOut(250);
    //$('.Section--' + section + ' .Subsection-imageMain#tabImage-'+ tab ).fadeIn(450);

   /* $('.Section--' + section + ' .Subsection-imageMain').fadeOut(function() {
    $('.Section--' + section + ' .Subsection-imageMain').removeClass('is-active');    
    $('.Section--' + section + ' .Subsection-imageMain#tabImage-'+ tab).addClass('is-active').fadeIn(750);*/

  //});

}



// Abre o Lightbox
function LightboxCall(iFrame, type) {

  //alert( "clicked" );
  jQuery('#Lightbox--container').removeClass('Lightbox--inactive');
  jQuery('#Lightbox--container').addClass('Lightbox--active');
  if ( type == 'modal' ) {
    var mail = jQuery('#InputEmail').val();
    jQuery('.Lightbox-window-content').load( iFrame+'&email='+mail);
  } else {
    jQuery('.Lightbox-window-content').load( iFrame );
   }

  jQuery('body').css({'overflow-y':'hidden'});


   $(function() {
      setTimeout(function(){
        //Inserindo imagens secudárias
        $('#loading').fadeOut();
       }, 2000);
    });
   
}
//$( ".LightboxCall" ).on( "click", LightboxCall );


// Fecha o lightbox quando a tecla ESC é pressionada
function KeyUpEsc(evt) {
 
 if (evt.keyCode == 27) {
       jQuery('#Lightbox--container').removeClass('Lightbox--active');
       jQuery('#Lightbox--container').addClass('Lightbox--inactive');
       jQuery('.Lightbox-window-content').html( '' );
       jQuery('body').css({'overflow-y':'auto'});
    }
}

jQuery(document).on( "keyup", KeyUpEsc );

// Mais formas de Fechar o LightBox

