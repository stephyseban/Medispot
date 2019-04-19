<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href='{{ url("assets/css/spur.css") }}'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="../js/chart-js-config.js"></script>
    <title>Medispot -  Admin Panel</title>
</head>


                        <!-- Authentication Links -->
                        <!-- @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">  <a class="nav-link" href="{{ url('admin/news') }}">News </a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/users') }}">Users </a></li>


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest -->
<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="" class="spur-logo"><i class="fas fa-file-medical-alt"></i> <span>Medispot</span></a>
            </header>
            <nav class="dash-nav-list">
                <a href="{{ url('/admin') }}" class="dash-nav-item">
                    <i class="fas fa-tachometer-alt"></i> Dashboard</a>

                    <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-chart-bar"></i> News </a>
                    <div class="dash-nav-dropdown-menu">
                    <a  href="{{url('admin/news/add')}}"  class="dash-nav-dropdown-item">Add News</a>

                        <a  href="{{url('admin/news')}}"  class="dash-nav-dropdown-item">Manage News</a>
                    </div>
                </div>

                <div class="dash-nav-dropdown">
                    <a href="{{url('admin/users')}}" class="dash-nav-item ">
                        <i class="fas fa-users"></i> Users </a>

                        <a href="{{url('/')}}" class="dash-nav-item ">
                        <i class="fas fa-search"></i> Search page </a>




                        <a href="{{url('/home')}}" class="dash-nav-item ">
                        <i class="fas fa-home"></i> Admin home </a>


                        <a class="dash-nav-item " class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                    <div class="dash-nav-dropdown-menu">

                        <a href="chartjs.html" class="dash-nav-dropdown-item">Chart.js</a>
                    </div>
                </div>
                </nav>
                </div>
                <div class="dash-app">

                <main class="dash-content">
                <div class="container-fluid">
                    <div class="row dash-row">

            @yield('content')
                    </div>
                    </div>
                    </main>

    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ url('js/spur.js') }}"></script>


@yield('js')



    @include('flashy::message')

</body>
</html>
