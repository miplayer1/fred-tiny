$(function(){

  // Egalisation de la hauteur des cartes
 var heights = [];

 function getHeights(){

 $('.card-content').each(function(){
   heights.push($(this).outerHeight());
 })
 return heights;
 }

 function getMax(arr){
   var maxHeight = Math.max(...arr);
   return maxHeight;

 }

 getHeights();
 var max = getMax(heights);
 console.log(max);

 if($(window).outerWidth() > 360) {
   $('.card-content').each(function(){
     $(this).css('height', max);
   })
 }

// Initialisation sideNav
  $(".button-collapse").sideNav({
    menuWidth: 200,
    closeOnClick: true
  });

// Initialisation scrollspy
  $('.scrollspy').scrollSpy({scrollOffset: 30});


// Initialisation modal
  $('.modal').modal({
    opacity: 0.2,
    inDuration: 300
  });

  $('#modal-trigger').on('click', function(){
    $('#modal').modal('close');
  })
})
