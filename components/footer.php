  <!-- footer -->
  <footer class="py-10 bg-black inverted">
    <div class="container">
      <div class="row g-2 g-lg-6 mb-8">
        <div class="col-lg-6">
          <h4>Plot 6 Aliu Animashaun street,<br>
            Lekki phase 1, lagos, nigeria.</h4>
        </div>
        <div class="col-lg-6 text-lg-end">
          <span class="h5">0803 192 6300</span>
        </div>
      </div>
      <div class="row mb-8">
        <div class="col">
          <hr>
        </div>
      </div>
      <div class="row g-0 g-lg-6 text-secondary">
        <div class="col-lg-6 text-lg-end order-lg-2">
          <ul class="list-inline">
            <li class="list-inline-item"><a href="https://web.facebook.com/profile.php?id=100072137346242" class="text-reset">facebook</a></li>
            <li class="list-inline-item ms-1"><a href="https://www.instagram.com/facetyme_pictures/" class="text-reset">instagram</a></li>
          </ul>
        </div>
        <div class="col-lg-6 order-lg-1">
          <p>© <script>document.write(new Date().getFullYear());</script> <a class=font-weight-bold>Facetyme Pictures&trade;</a> All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <script>
    function initMap() {
      var latlng = new google.maps.LatLng(6.433218780076018, 3.4607456487705983);

      var myOptions = {
        zoom: 18,
        center: latlng,
        disableDefaultUI: true,
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
      };

      var map = new google.maps.Map(document.getElementById("map1"), myOptions);

      map.panBy(-100, -40);

      var myMarker = new google.maps.Marker(
        {
          position: latlng,
          map: map,
          icon: 'assets/images/svg/pin.svg'
        });
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDODKndJ8udk9xrwV_9KZwzziQOgsAR3Ew&callback=initMap"
    async defer></script>

  <!-- javascript -->
  <script src="assets/js/vendor.bundle.js"></script>
  <script src="assets/js/index.bundle.js"></script>
  <script src="//code.tidio.co/v5xtfvhye6lndb7ldyyiflkal8egfgvn.js" async></script>
  
</body>

</html>