



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



<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-light navigation">
						<a class="navbar-brand" href="{{ url('/') }}">
							<img src="{{ url('images/logo.png') }}" alt="">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto main-nav ">
								<li class="nav-item active">
									<a class="nav-link" href="{{ url('/') }}">Home</a>
								</li>


                                <li class="nav-item">  <a class="nav-link" href="{{ url('medicine/news') }}">News </a></li>

							</ul>
							<ul class="navbar-nav ml-auto mt-10">



                            @guest
								<li class="nav-item">
									<a class="nav-link login-button" href="{{ url('/login') }}">Login</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white add-button" href="{{ url('/register') }}"><i class="fa fa-plus-circle"></i> Add Shop</a>
                                </li>

                                @else
                                <li class="nav-item">  <a class="nav-link" href="{{ url('home') }}"> Medicines </a></li>

                                <li class="nav-item">
									<a class="nav-link login-button" href="{{ url('profile') }}">Profile</a>
								</li>
								<li class="nav-item">
                                <a  class="nav-link text-white add-button" href="/logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      <i class="fa fa-sign-out"></i> Log out
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>  </a>
                                </li>
                                @endguest
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</section>




        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

@yield('js')



    @include('flashy::message')

</body>
</html>
