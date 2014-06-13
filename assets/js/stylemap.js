var markerpos;

function initialize() {
                                                                                                                   //OPTION MAP
  var latLng = new google.maps.LatLng(50.4694400, 4.8265800);                                                                                                        
  var mapOptions = {
    disableDoubleClickZoom: true,
    center: latLng,
    zoom: 7,
    minZoom:3,
    mapTypeControl: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    mapTypeControlOptions: {
        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
        position: google.maps.ControlPosition.RIGHT_CENTER
    },
    panControl: false,
    panControlOptions: {
        position: google.maps.ControlPosition.RIGHT_CENTER
    },
    zoomControl: true,
    zoomControlOptions: {
        style: google.maps.ZoomControlStyle.LARGE,
        position: google.maps.ControlPosition.RIGHT_CENTER
    },
    scaleControl: true,
    streetViewControl: true,
    streetViewControlOptions: {
        position: google.maps.ControlPosition.RIGHT_CENTER
    },
      styles:[
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      { "color": "#47a3da" },
      { "saturation": 5 },
      { "gamma": 1 },
      { "visibility": "on" },
      { "lightness": 12 }
    ]
  },{
    "featureType": "landscape.man_made",
    "stylers": [
      { "color": "#ae8d80" },
      { "saturation": -100 },
      { "lightness": -56 },
      { "visibility": "on" }
    ]
  },{
    "featureType": "poi.business",
    "stylers": [
      { "hue": "#00ffe6" },
      { "visibility": "off" }
    ]
  },{
    "featureType": "poi.school",
    "stylers": [
      { "saturation": 46 },
      { "hue": "#00ffee" },
      { "visibility": "off" }
    ]
  },{
    "featureType": "poi.sports_complex",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "poi.place_of_worship",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "administrative.locality",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "transit.station",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "transit.line",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "road",
    "stylers": [
      { "visibility": "simplified" }
    ]
  },{
    "featureType": "administrative.locality",
    "stylers": [
      { "visibility": "on" }
    ]
  },{
    "featureType": "transit.station.rail",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "transit.station.bus",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "road.highway.controlled_access",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "transit.station.airport",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "road.local",
    "elementType": "geometry",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "poi.park",
    "stylers": [
      { "visibility": "on" },
      { "hue": "#00ff91" },
      { "gamma": 0.99 },
      { "lightness": -4 },
      { "saturation": 10 }
    ]
  },{
    "featureType": "landscape.man_made",
    "stylers": [
      { "visibility": "off" }]},
      {
  }
  ]
  };
var lastOpened = false;

var map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
      $.getJSON('app-includes/new-places.ajax.php', function(data){
      /*console.log(data);*/

      $.each( data, function(key,place){
          /*console.log(place);*/
          var marker = new google.maps.Marker({
                draggable: true,
                  position: new google.maps.LatLng(parseInt(place.lat), parseInt(place.lng)),
                  map: map,
                title: place.name
          });

          var infowindow = new google.maps.InfoWindow({
          content: '<div id="content"><div id="siteNotice"></div><h1 id="firstHeading" class="firstHeading">'+place.name+'</h1><p class="username-map">Publier par '+place.username+'</p><div id="bodyContent"><img src="users/images-map/'+place.image+'" style="max-width: 100%;" alt="..."><p>'+place.description+'</p></div></div>'
          });
          //width="400" height="186"
                google.maps.event.addListener(marker, 'click', function() {
                  if (lastOpened) lastOpened.close();
                  infowindow.open(map,marker);
                  lastOpened = infowindow;             
                });
      });

});


function placeMarker(location) {

  if ( markerpos ) {
    markerpos.setPosition(location);
    /*console.log(markerpos.position.k);*/
  } else {
    markerpos = new google.maps.Marker({
      position: location,
      map: map
    });
  }
}

google.maps.event.addListener(map, 'dblclick', function(event) {
  placeMarker(event.latLng);
});











/*                    // FAIT TOUT BEUGER, PACINPUT BDD duble
  google.maps.event.addListener(marker, 'dragend', function(event) {
        //message d'alerte affichant la nouvelle position du marqueur
        alert("La nouvelle coordonnée du marqueur est : "+event.latLng);
    });


*/   





  var input = /** @type {HTMLInputElement} */(
  document.getElementById('pac-input'));

  map.controls[google.maps.ControlPosition.TOP_CENTER].push(input);
             



  var autocomplete = new google.maps.places.Autocomplete(input); //  PLUS DE MARQUEUR
  autocomplete.bindTo('bounds', map);
                                                                                                            //CREATION MARKER
  //création du marqueur


    google.maps.event.addListener(autocomplete, 'place_changed', function() {
/*    infowindow.close();*/
   /* marker3.setVisible(false);*/
    var place = autocomplete.getPlace();
    if (!place.geometry) {
      return;
    }

    // If the place has a geometry, then present it on a map.
    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
      map.setZoom(17);  // Why 17? Because it looks good.
    }

   marker3.setIcon(/** @type {google.maps.Icon} */({
      url: place.icon,
      size: new google.maps.Size(71, 71),
      origin: new google.maps.Point(0, 0),
      anchor: new google.maps.Point(17, 34),
      scaledSize: new google.maps.Size(35, 35)
    }));
/*
    marker3.setPosition(place.geometry.location);
    marker3.setVisible(true);*/

    var address = '';
    if (place.address_components) {
      address = [
        (place.address_components[0] && place.address_components[0].short_name || ''),
        (place.address_components[1] && place.address_components[1].short_name || ''),
        (place.address_components[2] && place.address_components[2].short_name || '')
      ].join(' ');
    }
  });
    



  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);

      var infowindow = new google.maps.InfoWindow({
        map: map,
        position: pos,
        content: '<p class="geo">Salut, tu est ici !</p>'
      });

      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }

setTimeout(function(){
  $('.gm-style').first().hide();
},300);


}//



function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
}



google.maps.event.addDomListener(window, 'load', initialize);



