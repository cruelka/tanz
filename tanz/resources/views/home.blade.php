@extends('layouts.tanz')

@section('content')
<!--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
-->

<div class="row">
                                                            
                                           
                                                            <div class="col-lg-3">
                                                                        <a href="/application"><img src="{{ asset('apply_self.png') }}"></a>
                                                                     </div>
                                                            <div class="col-lg-3">
                                                                         <a href="/application"><img src="{{ asset('apply_someone.png') }}"></a>
                                                                     </div>
                                                            <div class="col-lg-3">
                                                                         <a href="/status"><img src="{{ asset('view_application.png') }}"></a>
                                                                     </div>
                                                            <div class="col-lg-3">
                                                                         <a href="/settings"><img src="{{ asset('change_password.png') }}"></a>
                                                                     </div>
                                                 </div>
@endsection
