@extends('layouts.app')

@section('content')

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
    @endsection