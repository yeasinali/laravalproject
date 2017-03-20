<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class basicController extends Controller
{
    //
    public function index(){
       // return view(home);
        return view('influx.index');

    }
    public function another(){
        // return view(home);
        return view('influx.another');

    }
    public function examples(){
        // return view(home);
        return view('influx.examples');

    }
    public function page(){
        // return view(home);
        return view('influx.page');

    }
    public function contactpage(){
        $myname = "yeasin arafat";
        $id = "02";
        $mob = "01733928438";
        $city = "dhaka";
        // return view(home);
        return view('influx.contactpage',compact('myname','id','mob','city'));

    }
    public function about(){
        // return view(home);
        $myname = "yeasin arafat";
        $id = "02";
        $mob = "01733928438";
        $city = "dhaka";
        return view('about',compact('myname','id','mob','city'));

    }

}
