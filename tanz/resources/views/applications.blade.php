<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Kit by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('./css/app.css') }}" rel="stylesheet" />

</head>

<body class="index-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="">
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
              <a href="./index.html" class="dropdown-item">
                <i class="material-icons">layers</i> Applying for self
              </a>
              <a href="https://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Applying for someone else
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
              <i class="material-icons">cloud_download</i> View applications
            </a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('{{ asset('./img/bg.jpg') }}');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1>Tanzanians abroad</h1>
            <h3>Applying for self</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="section section-basic">
        
      <div class="container">
            <div class="title">
                <h2>Applications List</h2>
            </div>
            
            <div class="card card-nav-tabs">
             
                    <div class="card-body ">
                      <div class="tab-content text-center">
                        <div class="tab-pane active show" id="settings">
                                <div class="alert alert-success" style="    margin: -15px -31px 20px;
                                border-radius: 10px 10px 0 0;">
                                        <div class="container">
                                          <div class="alert-icon">
                                            <i class="material-icons">check</i>
                                          </div>
                                          <b>Success</b> This application confirmed
                                        </div>
                                      </div>
                          <p>ID 3627911209</p>
                          <button class="btn">Show details<div class="ripple-container"></div></button>

                        </div>
                      </div>
                    </div>
                  </div>

                  
            

            
            </div>

        
        
      </div>
    </div>
  
  <!--  End Modal -->
  <footer class="footer" data-background-color="black">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> 
        <a href="https://www.creative-tim.com" target="_blank"></a> .
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="{{ asset('./js/app.js') }}" type="text/javascript"></script>

</body>

</html>