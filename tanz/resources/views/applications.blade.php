@extends('layouts.app')

@section('content')
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
                  @foreach($data as $row)
                    
                    
                   
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
                          <p>ID: {{ $row->status}}</p>
                          <p>Name of applicant: {{ $row->data->fullname }}</p>
                          <p>{{ $row->created_at }}</p>
                          
                          
                          <a href="https://tanzaniansabroad.com/uploads/{{  $row->status }}" class="btn">Open PDF<div class="ripple-container"></div></a>

                        </div>
                      </div>
                    </div>
                    @endforeach

                  </div>

                  
            

            
            </div>

        
        
      </div>
    </div>
    @endsection