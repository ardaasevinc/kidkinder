<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    public function slider(){
        return view('backend/slider');
    }

    public function services(){
        return view('backend/services');
    }



    public function sitesettings(){
        return view('backend/sitesettings');
    }

    public function bpersons(){
        return view('backend/b-persons');
    }

    public function bblog(){
        return view('backend/b-blog');
    }
}
