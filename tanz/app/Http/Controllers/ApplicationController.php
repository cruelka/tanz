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
        $data = Application::where('user_id', Auth::user->id)->paginate(5);
        return view('applications', compact('data'));

    }
}
