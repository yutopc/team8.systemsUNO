<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PBLController extends Controller{

    public function index(){
        return view('PBL.PBL');
    }
}
