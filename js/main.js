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

  function boucle()
{
    // sélectionner l'item actif
    var itemActif =  document.querySelector('.display');

    // on cache l'item actif en lui enlevant la classe
    itemActif.classList.remove("display");

    var itemSuivant = itemActif.nextElementSibling;

    if (itemSuivant)
    {
        // s'il y a un item qui suit
        itemSuivant.classList.add("display");
    }
    else
    {
        // on est au bout
        // revenir au début
        document.querySelector('.tagline ul li').classList.add("display");
    }
}

window.setInterval(boucle, 1500);


})

var mymap = L.map('mapid', {zoomControl: false, scrollWheelZoom: false}).setView([43.214, 5.63], 10);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 13,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoibGV0aXRiZTEzMyIsImEiOiJjajg3b2MydWMxM3hvMzJtcDZ6bHVlM3Y1In0.ltE1CivhBmTQXTEAA7r6NQ'
}).addTo(mymap);

var marker = L.marker([43.214, 5.63], {
  title: "Fred Travaux et Rénovations",
}).addTo(mymap);

var popup = L.popup([43.214, 5.63]);

function onMarkerClick(e) {
  console.log(e.latlng);
  popup
        .setLatLng(e.latlng)
        .setContent(`<h4 class="center-align">Fred Travaux et Rénovations</h4>
                    <p>Interventions sur Ceyreste et les communes voisines</p>`)
        .openOn(mymap);
}

marker.on("click", onMarkerClick);

var circle = L.circle([43.214, 5.63], {
    color: 'white',
    fillColor: 'rgb(255, 255, 255)',
    fillOpacity: 0.4,
    radius: 20000
}).addTo(mymap);
