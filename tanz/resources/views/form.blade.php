@extends('layouts.tanz')

@section('content')
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