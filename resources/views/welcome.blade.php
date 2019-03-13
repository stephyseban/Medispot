



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


<section class="hero-area bg-1 text-center overly">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Header Contetnt -->
					<div class="content-block">
						<h1>Medispot </h1>
						<p>Nearby medical shop with requested medicine</p>


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

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError, {desiredAccuracy:20, maxWait:15000});
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }


function showError() {
    return ''
}

function showPosition(position) {

let lat = document.querySelector('#lat');
lat.value = position.coords.latitude;

let lon = document.querySelector('#lon');
lon.value = position.coords.longitude;


}


</script>
    </body>
</html>
