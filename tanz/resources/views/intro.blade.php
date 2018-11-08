@extends('layouts.app')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('./img/flag.jpg') }}')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">Tanzanian Abroad is a Private Entity.</h1>
          <h4> It is responsible for providing Tanzania citizenship requirements, receiving the service fees, authentication of the application in Tanzania. </h4>
          <br>
          <a href="/apply" target="_blank" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> Apply now
          </a>
        </div>
      </div>
    </div>
  </div>

<div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">About Us</h2>
            <h5 class="description">Tanzanians Abroad provide sophisticated services and solution to our clients. We seek to provide efficient, secure, highly advanced and innovative services. Drawing from its expertise and knowledge within the services domain, Tanzanians Abroad also delivers a dependable and technologically supported framework for local and international applicant globally through its portfolio of services, aimed at enhancing client experience in Immigration services (Citizenship) with an automated and seamless process.</h5>
          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">chat</i>
                </div>
                <h4 class="info-title">Friendly</h4>
                
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title">Secure</h4>
                
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">fingerprint</i>
                </div>
                <h4 class="info-title">Fast</h4>
               
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
    </div>
  </div>

  @endsection