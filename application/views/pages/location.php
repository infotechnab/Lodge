
    <style>
      #map_canvas {
        width: 100%;
        height: 700px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
         var myLatlng = new google.maps.LatLng(27.57474, 84.4993);
        var map_options = {
          center: myLatlng,
          zoom: 17,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options);
        
        var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Chitwan Gaida Lodge</h1>'+
      '<div id="bodyContent">'+
      '<p>Experiencing tourism history of the 3 decades, Chitwan Gaida Lodge is' +
      ' the pioneer in this field. '+
      'It spreads over an area of 72,000 sq ft. The lodge is centrally located '+
      'at the northern edge of the RCNP, a well-known site for the wildlife '+
      'and hardly 3-4min walk up to the park entrance office from the CGL. '+
      'It has a peaceful and tranquil area by the bank of Rapti river and  '+
      ' just beside the park entrance. It is easily accessed from the east-west '+
      'national highway which is only 6km away from the small town called'+
      'Tandi Bazaar or Sauraha Chowk, where the roads get forked and '+
       'turn towards the south. CGL has fully furnished rooms (a/c or normal) with'+
       'attached bathrooms, including 24hours of hot/cold water. It has a'+
       'cool shady garden with mature floras which provides food for the different'+
       'feeding bird parties. We can watch them feed every morning and in the'+
       'late afternoons from the balcony of the private rooms provided by the'+
       'CGL giving the feeling of being in the wild environment itself. </p>'+
      '<p>Attribution: Chitwan Gaida Lodge, <a href="http://wikimapia.org/6372919/Chitwan-Gaida-Lodge-Tika-Ram-Giri-Naturalist-Ornithologist-mobile-9841509764">'+
      'http://en.wikipedia.org/wiki/gaida</a> '+
      '</p>'+
      '</div>'+
      '</div>';

 var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Chitwan Gaida Lodge)'
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>     
 
    <div id="map_canvas"></div>
   
