<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;
use App\Application;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function test(Request $request)
{   $data = $request;
        $pdf = PDF::setOptions([
            'logOutputFile' =>  storage_path('logs/log.htm'),
            'images' => true,
            'isRemoteEnabled' => true
        ])->loadView('form', compact('data'));
        $name = microtime().'.pdf';
        $path = '/var/www/tanz/tanz/public/uploads/';

        $pdf->save($path.$name);
    $toDB = json_encode($data->all());
    $db = new Application();
    $db->user_id = Auth::id();
    $db->data = $toDB;
    $db->status = $name;
    $db->save();
        return $name;
    }

    public function applyminor()
    {   
            $pdf = PDF::setOptions([
                'logOutputFile' =>  storage_path('logs/log.htm'),
                'images' => true,
                'isRemoteEnabled' => true
            ])->loadView('applyminor', compact('data'));

            return $pdf->stream();
        }
}


