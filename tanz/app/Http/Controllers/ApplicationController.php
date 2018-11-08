<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        $data = json_encode($request);
        dd($data);
    }
    public function show(){
        $data = Application::where('user_id', Auth::id())->paginate(5);
        foreach($data as $val){
            $val->data = json_decode( $val->data );
        }
        dd($data);
        return view('applications', compact('data'));

    }
}
