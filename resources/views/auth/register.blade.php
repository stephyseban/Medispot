@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="shopname" class="col-md-4 col-form-label text-md-right">{{ __('Shop Name') }}</label>

                            <div class="col-md-6">
                                <input id="shopname" type="text" class="form-control{{ $errors->has('shopname') ? ' is-invalid' : '' }}" name="shopname" value="{{ old('shopname') }}" required autofocus>

                                @if ($errors->has('shopname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('shopname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>

                            <div class="col-md-6">
                                <textarea id="address"  class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus></textarea>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" value="{{ old('location') }}" required autofocus>

                                @if ($errors->has('location'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif

                                <input type="hidden" name="lat" id="lat"/>
                                <input type="hidden" name="lat" id="lon"/>


                            <div id="map" style="display: all; width: 100%;height: 276px;"></div>
                            </div>
                        </div>


                            <div class="form-group row">
                            <label for="lat" class="col-md-4 col-form-label text-md-right">{{ __('Latitude') }}</label>

                            <div class="col-md-6">
                                <input id="lat" type="numeric" class="form-control{{ $errors->has('latitude') ? ' is-invalid' : '' }}" name="lat" value="{{ old('lat') }}" required autofocus>

                                @if ($errors->has('latitude'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('latitude') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>




                        <div class="form-group row">
                            <label for="lon" class="col-md-4 col-form-label text-md-right">{{ __('Logitude') }}</label>

                            <div class="col-md-6">
                                <input id="lon" type="numeric" class="form-control{{ $errors->has('longitude') ? ' is-invalid' : '' }}" name="lon" value="{{ old('lon') }}" required autofocus>

                                @if ($errors->has('longitude'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('longitude') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>







                        <div class="form-group row">
                            <label for="phonenumber" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phonenumber" type="text" class="form-control{{ $errors->has('phone number') ? ' is-invalid' : '' }}" name="phonenumber" value="{{ old('phonenumber') }}" required autofocus>

                                @if ($errors->has('phone number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
   var customLabel = {};

     function initMap() {
     var map = new google.maps.Map(document.getElementById('map'), {
       center: new google.maps.LatLng(10.7439263,76.4246223),
       zoom: 18
     });

     google.maps.event.addListener(map, "click", function (e) {
  var latLng = e.latLng;
  let lat = latLng.lat();
  let lon = latLng.lng()

        document.getElementById("lat").value = lat;
        document.getElementById("lon").value = lon;

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

@endsection


<!--
@section('js')
<script src="https://maps.googleapis.com/maps/api/js?libraries=places" type="text/javascript"></script>

<script type="text/javascript">

    function initialize() {
        var input = document.getElementById('location');
        var autocomplete = new google.maps.places.Autocomplete(input);
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
             document.getElementById('map').value = place.geometry.location.lat()+','+place.geometry.location.lng();


        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
@endsection -->
