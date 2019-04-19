@extends('layouts.app')
@section('content')

<div class="container">
<div class="row">
<div class="col-sm-3">

<div class="package-content bg-light border text-center p-5 my-2 my-lg-0">
                    <div class="header">
								<h4>{{ $user->shopname}}</h4>
							</div>

                <p> <i style="font-size:12px;" class="fa fa-map-marker"></i> {{ $user->location }}</p>
                <p> <i style="font-size:12px;" class="fa fa-compass"></i> {{ $user->address }}</p>
                <p> <i style="font-size:12px;" class="fa fa-phone"></i> {{ $user->phonenumber }}</p>

</div></div>

<div class="col-sm-9">
<div id="map" style="display: all; width: 100%;height: 276px;"></div>


<table style="margin-top:20px;" class="table table-striped table-bordered">
<tr>
<th>Name </th>
<th>Description </th>
<th>Availability </th>
</tr>
@foreach($medicine as $medi)
<tr>
<td>{{ $medi->name }}</td>
<td>{{ $medi->description }}</td>
<td>{{ $medi->availability }}</td>
</tr>
@endforeach
</table>
</div>
</div>


<script>
   var customLabel = {};

     function initMap() {
     var map = new google.maps.Map(document.getElementById('map'), {
       center: new google.maps.LatLng({{ $user->lat }}, {{$user->lon }}),
       zoom: 18
     });

     google.maps.event.addListener(map, "click", function (e) {
  var latLng = e.latLng;
 });




     var infoWindow = new google.maps.InfoWindow;

       downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
         var xml = data.responseXML;
         var markers = xml.documentElement.getElementsByTagName('marker');
         Array.prototype.forEach.call(markers, function(markerElem) {
           var id = markerElem.getAttribute('id');
           var name = markerElem.getAttribute('name');
           var address = markerElem.getAttribute('address');
           var type = markerElem.getAttribute('type');
           var point = new google.maps.LatLng(
              parseFloat(markerElem.getAttribute('lat')),
              parseFloat(markerElem.getAttribute('lng')));

           var infowincontent = document.createElement('div');
           var strong = document.createElement('strong');
           strong.textContent = name
           infowincontent.appendChild(strong);
           infowincontent.appendChild(document.createElement('br'));

           var text = document.createElement('text');
           text.textContent = address
           infowincontent.appendChild(text);
           var icon = customLabel[type] || {};
           var marker = new google.maps.Marker({
             map: map,
             position: point,
             label: icon.label
           });
           marker.addListener('click', function() {
             infoWindow.setContent(infowincontent);
             infoWindow.open(map, marker);
           });
         });
       });
     }
   function downloadUrl(url, callback) {
     var request = window.ActiveXObject ?
         new ActiveXObject('Microsoft.XMLHTTP') :
         new XMLHttpRequest;

     request.onreadystatechange = function() {
       if (request.readyState == 4) {
         request.onreadystatechange = doNothing;
         callback(request, request.status);
       }
     };

     request.open('GET', url, true);
     request.send(null);
   }

   function doNothing() {}
 </script>
 <script async defer
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5Z0NnHXEtgub4081O62H_gDtbfyo108k&callback=initMap">
 </script>

   </div>
</div>
</div>
</div>
</div>
@stop
