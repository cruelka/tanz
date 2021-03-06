<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Tanzanians
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('./css/app.css') }}" rel="stylesheet" />

  <script>
      window.token = '{{ csrf_token() }}';
  </script>

<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/f/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/f/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/f/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/f/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/f/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/f/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/f/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/f/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/f/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/f/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/f/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/f/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/f/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('img/f/manifest.json') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ asset('img/f/ms-icon-144x144.png') }}">
<meta name="theme-color" content="#ffffff">

</head>

<body class="index-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/applications">
          <img src="{{ asset('img/logo.png') }}" alt="">
         </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">apps</i> Apply
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="/apply" class="dropdown-item">
                <i class="material-icons">layers</i> Applying for self
              </a>
              <a href="/apply2" class="dropdown-item">
                <i class="material-icons">content_paste</i> Applying for someone else
              </a>
              <a href="/apply3" class="dropdown-item">
                <i class="material-icons">content_paste</i> Minor
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/applications" onclick="scrollToDownload()">
              <i class="material-icons">cloud_download</i> View applications
            </a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="/login" onclick="scrollToDownload()">
              <i class="material-icons">trending_flat</i> Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register" onclick="scrollToDownload()">
              <i class="material-icons">power_settings_new</i> Register
            </a>
          </li>
          @else
          <!--
          <a class="nav-link" href="/login" onclick="scrollToDownload()">
            <i class="material-icons">cloud_download</i> {{ Auth::user()->name }}
          </a>
          -->
          <li class="nav-item">
          <a class="nav-link" href="/logout" onclick="scrollToDownload()">
            <i class="material-icons">undo</i> Logout
          </a>
          </li>
                    
          @endguest
          
        </ul>
      </div>
    </div>
  </nav>

        @yield('content')
        <footer class="footer" data-background-color="black">
            <div class="container">
              <nav class="float-left">
                <ul>
                  <li>
                    <a href="/apply">
                      Apply
                    </a>
                  </li>
                  <li>
                    <a href="/applications">
                      Applications
                    </a>
                  </li>
                </ul>
              </nav>
              <div class="copyright float-right">
                &copy;
                <script>
                  document.write(new Date().getFullYear())
                </script>
                <a  target="_blank"></a> Tanzanian Abroad.
              </div>
            </div>
          </footer>
          <!--   Core JS Files   -->
          <script src="{{ asset('./js/app.js') }}" type="text/javascript"></script>
        
        </body>
        
        </html>