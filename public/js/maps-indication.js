var map;
var myLatLng;
var geocoder;

$(document).ready(function() {
      geoLocationInit();
      function geoLocationInit() {
        if(navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(success, fail);
        } else {
          alert("Browser Not Supported");
        }
      }

      function success(position) {
        var latval = position.coords.latitude;
        var lngval = position.coords.longitude;

        console.log([latval, lngval]);
        myLatLng = new google.maps.LatLng(latval, lngval);

        createMap(myLatLng);

      }

      function fail() {
        alert("it Fails");
      }


function createMap(myLatLng) {

  // Create a map object and specify the DOM element for display.
          map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          scrollwheel: true,
          zoom: 16,
          styles: [
                      {
                        "elementType": "geometry",
                        "stylers": [
                          {
                            "color": "#f5f5f5"
                          }
                        ]
                      },
                      {
                        "elementType": "labels.icon",
                        "stylers": [
                          {
                            "visibility": "off"
                          }
                        ]
                      },
                      {
                        "elementType": "labels.text.fill",
                        "stylers": [
                          {
                            "color": "#616161"
                          }
                        ]
                      },
                      {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                          {
                            "color": "#f5f5f5"
                          }
                        ]
                      },
                      {
                        "featureType": "administrative",
                        "elementType": "geometry",
                        "stylers": [
                          {
                            "visibility": "off"
                          }
                        ]
                      },
                      {
                        "featureType": "administrative.land_parcel",
                        "elementType": "labels.text.fill",
                        "stylers": [
                          {
                            "color": "#bdbdbd"
                          }
                        ]
                      },
                      {
                        "featureType": "poi",
                        "stylers": [
                          {
                            "visibility": "off"
                          }
                        ]
                      },
                      {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                          {
                            "color": "#eeeeee"
                          }
                        ]
                      },
                      {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [
                          {
                            "color": "#757575"
                          }
                        ]
                      },
                      {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                          {
                            "color": "#e5e5e5"
                          }
                        ]
                      },
                      {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [
                          {
                            "color": "#9e9e9e"
                          }
                        ]
                      },
                      {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                          {
                            "color": "#ffffff"
                          }
                        ]
                      },
                      {
                        "featureType": "road",
                        "elementType": "labels.icon",
                        "stylers": [
                          {
                            "visibility": "off"
                          }
                        ]
                      },
                      {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.fill",
                        "stylers": [
                          {
                            "color": "#757575"
                          }
                        ]
                      },
                      {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [
                          {
                            "color": "#dadada"
                          }
                        ]
                      },
                      {
                        "featureType": "road.highway",
                        "elementType": "labels.text.fill",
                        "stylers": [
                          {
                            "color": "#616161"
                          }
                        ]
                      },
                      {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [
                          {
                            "color": "#9e9e9e"
                          }
                        ]
                      },
                      {
                        "featureType": "transit",
                        "stylers": [
                          {
                            "visibility": "off"
                          }
                        ]
                      },
                      {
                        "featureType": "transit.line",
                        "elementType": "geometry",
                        "stylers": [
                          {
                            "color": "#e5e5e5"
                          }
                        ]
                      },
                      {
                        "featureType": "transit.station",
                        "elementType": "geometry",
                        "stylers": [
                          {
                            "color": "#eeeeee"
                          }
                        ]
                      },
                      {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                          {
                            "color": "#c9c9c9"
                          }
                        ]
                      },
                      {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [
                          {
                            "color": "#9e9e9e"
                          }
                        ]
                      }
                    ]  
        });

      var  marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        animation: google.maps.Animation.DROP,
        title: 'Você está aqui!',
        icon: '/img/local.png',
      });

      google.maps.event.addListener(map, 'click', function (event) {
      marker = new google.maps.Marker({position: event.latLng, map: map, icon: '/img/iconlocal.png'});
      console.log(event.latLng);   // Get latlong info as object.
      console.log( "Latitude: "+event.latLng.lat()+" "+", longitude: "+event.latLng.lng()); // Get separate lat long.
      google.maps.event.clearListeners(map, 'click');

      document.getElementById('lat').value = event.latLng.lat();
      document.getElementById('lng').value = event.latLng.lng();

      });
}

  function createMarker(latlng, icn, name) {
    var marker = new google.maps.Marker({
      position: latlng,
      map: map,
      icon: icn,
      title: name
    });
  }

});

