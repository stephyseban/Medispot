



<!DOCTYPE html>
<html lang="en">

<head>

	<!-- SITE TITTLE -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'medispot') }}</title>
	<link rel="stylesheet" href="{{ url('plugins/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ url('plugins/bootstrap/css/bootstrap-slider.css') }}">
	<!-- Font Awesome -->
	<link href="{{ url('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- Owl Carousel -->
	<link href="{{ url('plugins/slick-carousel/slick/slick.css') }}" rel="stylesheet">
	<link href="{{ url('plugins/slick-carousel/slick/slick-theme.css') }}" rel="stylesheet">
	<!-- Fancy Box -->
	<link href="{{ url('plugins/fancybox/jquery.fancybox.pack.css') }}" rel="stylesheet">
	<link href="{{ url('plugins/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
	<!-- CUSTOM CSS -->
	<link href="{{ url('css/style.css') }}" rel="stylesheet">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">


<section class="hero-area bg-1 text-center overly" style="height:100vh;">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Header Contetnt -->
					<div class="content-block">
						<h1>Medispot </h1>
						<p>Nearby medical shop with requested medicine</p>

                        <div class="short-popular-category-list text-center">

							 	@guest
							 <ul class="list-inline">
								<li class="list-inline-item">
									<a href="/login"><i class="fa fa-sign-in"></i> Login</a></li>



									<li class="list-inline-item">
								<a href="/register"><i class="fa fa-sign-in"></i> Register</a></li>
							</ul>

							@endguest
						</div>
					</div>
					<!-- Advance Search -->
					<div class="advance-search">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-12 col-md-12 align-content-center">
                                    <form method="POST" action="{{ url('/search') }}">
                                    {{ csrf_field() }}
										<div class="form-row">
											<div class="form-group col-md-10">
												<input type="text" class="form-control my-2 my-lg-1" id="inputtext4" placeholder="What are you looking for" name="search">
                                            </div>

                                            <input type="hidden" name="lat" value="" id="lat" />
                                            <input type="hidden" name="lon" value="" id="lon" />

											<div class="form-group col-md-2 align-self-center">
												<button type="submit" class="btn btn-primary">Search Now</button>
											</div>

											<div id="fetched" style=" display:hidden; margin-left: 10px;" class="text-success"><i class="fa fa-location-arrow"></i> Location retrieved</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
        </div>



		<!-- Container End -->
	</section>



<script>
// 10.7446422,     76.4338937
let  showFetched =  document.querySelector('#fetched');

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError, {desiredAccuracy:20, maxWait:15000});

  } else {
		showFetched.style.display = 'hidden';
		console.log( "Geolocation is not supported by this browser.");
    showFetched.innerHTML = "Geolocation is not supported by this browser.";
  }


function showError() {
	let  showFetched =  document.querySelector('#fetched');
	console.log( "Geolocation is not supported by this browser.");
	showFetched.style.color = 'red';
	showFetched.innerHTML = "Geolocation is not supported by this browser.";
    return ''
}

function showPosition(position) {

let lat = document.querySelector('#lat');
lat.value = position.coords.latitude;

let lon = document.querySelector('#lon');
lon.value = position.coords.longitude;
if(position){
let  showFetched =  document.querySelector('#fetched');
showFetched.style.color = 'green';
showFetched.style.display = 'block';

}

}
</script>

 <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>




    @include('flashy::message')


    </body>
</html>
