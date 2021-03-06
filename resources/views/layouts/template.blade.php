<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ECOWASTE</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('asset/css/business-casual.min.css')}}" rel="stylesheet">
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-lower">E-Waste Mangement</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#"> <span class="logo-lg"><img src="{{asset('/images/logo.png')}}" width="100px"><b></b></span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{url('home')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>

           <li class="nav-item  px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{url('getmysub')}}">Active Subscribers
              <span class="sr-only">(current)</span>
            </a>
          </li>

             <li class="nav-item  px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{url('searchwaste')}}">Subscribe
              <span class="sr-only">(current)</span>
            </a>
          </li>

            @guest
                            @if (Route::has('login'))
                                <li class="nav-item px-lg-4">
                                    <a class="nav-link text-uppercase text-expanded" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item px-lg-4">
                                    <a class="nav-link text-uppercase text-expanded" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif

                              <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{url('buy-product')}}">Todays Schedule</a>
          </li>
                        @else
                            <li class="nav-item px-lg-4 dropdown">
                                <a id="navbarDropdown" class="nav-link text-uppercase text-expanded dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
     
        

           {{--  <li><a href="{{url('buy-prod')}}"><i class="fa fa-money"></i> <span>Buy Produce</span></a></li>
           <li><a href="{{url('grow-prod')}}"><i class="fa fa-leaf"></i> <span>Plant Produce</span></a></li>
        <li><a href="{{url('sell-prod')}}"><i class="fa fa-globe"></i> <span>Sell My Produce</span></a></li>
        <li><a href="{{url('product')}}"><i class="fa fa-link"></i> <span>Plant Settings</span></a></li> --}}
        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section clearfix">
        <section class="page-section cta" style=" background-image: linear-gradient(to right,#FFF,#1CA340);">
    <div class="row">
          <div class="col-md-12 mx-auto">
                  @if (session('status'))
        <div id="erros" class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>Alert!</h4>

        <p> {{ session('status') }}</p>
      </div>
@elseif(session('error'))
<div id="erros" class="alert alert-warning alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>Warning!</h4>

        <p> {{ session('error') }}</p>
      </div>
@elseif(session('danger'))
<div id="erros" class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4>Warning!</h4>

              <p> {{ session('danger') }}</p>
            </div>
@elseif(session('primary'))
<div id="erros" class="alert alert-primary alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4>Warning!</h4>

              <p> {{ session('primary') }}</p>
            </div>

@endif
@if ($errors->any())
    <div id="erros" class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4>Input Fields Error!!</h4>
             @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </div>
@endif
            <div class="cta-inner text-center rounded">
             @yield('content')
           </div>
         </div>
       </div>


</section>

  </section>



  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Stratmore 2020</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('asset/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
